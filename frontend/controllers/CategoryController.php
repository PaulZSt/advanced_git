<?php

namespace frontend\controllers;

use app\models\Cities;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Category;
use app\models\Product;
use yii\web\HttpException;
use yii\data\ActiveDataProvider;

class CategoryController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */


    public function actionShow($id)
    {
        $post = Yii::$app->request->post();
        //echo $id;
        $model = $this->getCategoryById($id);
        //$products = $this->getProductCategory($id);
        $this->registerMeta($model);
        $products = new ActiveDataProvider([
            'query' => $this->getProductCategory($id, $post),
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);
        $cities = Cities::find()->all();
        return $this->render('index', [
            'model' => $model,
            'products' => $products,
            'cities' => $cities,
            'post' => $post,
        ]);


    }

    public function getProductCategory($id, $post)
    {
        if (isset($post['filter'])) {
            foreach ($post['filter'] as $key => $val) {
                foreach ($val as $vals) {
                    $city_ids[] = $vals;
                }
            }
        }

        // ->where(['OR',['AND',[$a=>1],[$b=>1]],['AND',[$c=>1],[$d=>1]]]);   // check query!!!!
        if ($product = Product::find()->where(['status' => 1])->andwhere(['category_id' => $id])) {
            if (!empty($city_ids)) {
                $product->andWhere(['IN', 'city_id', $city_ids]);
            }
            if (!empty($post['filter']['search']['keyword'])) {
                $text = $post['filter']['search']['keyword'];
                $product->andWhere([
                    'like', 'title', $text,
                ]);
            }
            if (!empty($post['filter']['price']['price_from'])) {
                $price_from = $post['filter']['price']['price_from'];
                $product->andWhere([
                    '>=', 'price', $price_from,
                ]);
            }

            if (!empty($post['filter']['price']['price_to'])) {
                $price_to = $post['filter']['price']['price_to'];
                $product->andWhere([
                    '<=', 'price', $price_to,
                ]);
            }
            $product->all();


            return $product;
        } else {
            return false;
        }
    }


    protected function getCategoryById($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('Страница не найдена');
        }
    }

    protected function registerMeta($model)
    {
        $view = Yii::$app->view;
        $view->title = $model->meta_title;
        $view->registerMetaTag(['name' => 'description', 'contetn'->$model->meta_description]);
    }

}
