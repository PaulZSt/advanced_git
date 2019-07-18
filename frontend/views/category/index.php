<?php
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
?>


<div class="container_category">
    <div class="sidebar">
        <h1><?=$model->title?></h1>
        <h2><?=$model->description;?></h2>
       <?
        $this->params['breadcrumbs'][] = [
            'template' => "<li><b>{link}</b></li>\n", //  шаблон для этой ссылки
            'label' => 'Категория', // название ссылки
            'url' => ['/category'] // сама ссылка
        ];
        ?>
        <? //print_r($post); ?>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Html::beginForm(['/category/'.'10'], 'post',['name' => 'city']); ?>
        <div class="input input--search" data-controller="queryWidget">
            <label for="market-search">Søk i Bil</label>
            <input type="search" id="serchkey" name="filter[search][keyword]" value="<?= $post['filter']['search']['keyword']; ?>" >
            <button aria-label="Søk" class="input--search__button input--search__button--submit"></button>
        </div>

        <div class="sidebar_filter">
            <h3 class="u-t5">
                Merke
            </h3>
                <?= $this->render('/filter/form', ['cities' => $cities, 'city_id' => $model->id, 'post' => $post]) ?>
        </div>

        <div class="sidebar_filter">
            <h3 class="u-t5">Pris</h3>
            <div class="flex">
                <div class="input_wrapper half">
                    <div class="input">
                        <input class="range-input" name="filter[price][price_from]"  value="<?= $post['filter']['price']['price_from']; ?>" aria-label="Pris, minimum" title="Pris, minimum"
                               pattern="\d*">
                        <div class="input__sub-text">
                            <span class="input__sub-text__text-hint">Fra kr</span>
                        </div>
                    </div>
                </div>
                <div class="input_wrapper half">
                    <div class="input">
                        <input data-visual-input="" name="filter[price][price_to]" class="range-input" value="<?= $post['filter']['price']['price_to']; ?>" aria-label="Pris, maksimum"
                               title="Pris, maksimum" pattern="\d*">
                        <div class="input__sub-text">
                            <span class="input__sub-text__text-hint">Til kr</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-grid__unit t form-grid__unit--g0">
                <button class="button">Søk</button>
            </div>


        </div>
        <?php Html::endForm(); ?>
        <div class="form-grid__unit t form-grid__unit--g0">
            <?= Html::submitButton('Save', ['class' => 'button']) ?>
        </div>
    </div>
    <div class="content_category">
        <div class="content_filter">
            <?= $products->sort->link('price'); ?>
        </div>
        <div class="advertisment">
                <?= ListView::widget([
                    'dataProvider' => $products,
                    'itemView' => '/product/_item',
                    'options' => [
                        'class' => 'content_category__wrapper',
                    ],
                ]);
                ?>
        </div>
    </div>
</div>








