<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Category;
use app\models\Product;
use yii\web\HttpException;

class ProductController extends Controller
{
    public function actionShow($id)
    {
//echo $id;
        $model = $this->getProduct($id);
        $this->registerMeta($model);
//$products = $this->getProductCategory($id);
        //$request = Yii::$app->request->get('id');
        // выполяем запрос к таблице категории и выбираем конкретную категорию организаций в которую мы зашли
        $compcatname = Category::find()->where(['id' => $model->category_id])->one();
        return $this->render('view', [
            'model' => $model,
            'compcatname' => $compcatname,
        ]);
    }


    public function getProduct($id) {
        //if($product = Product::find()->where(['status'=>1])->andWhere(['id'=>$id])->joinWith('user')->one()) {
        if($product = Product::find()->joinWith('user')->one()) {
            return $product;
        } else {
            return false;
        }
    }

    public function actionFilter () {
        if(Yii::$app->request->post()) {
            $post = Yii::$app->request->post('filter');
            $result = Product::find()->where(['status'=>1])->andWhere([])->all();
            print_r($post);
            //echo 'filter';
        }
        //$view = Yii::$app->view;
        //$view->title = $model->meta_title;

    }

    protected function registerMeta ($model) {
        $view = Yii::$app->view;
        $view->title = $model->meta_title;
            $view->registerMetaTag(['title' => 'description', 'meta_description' -> $model->meta_description]);
    }




}