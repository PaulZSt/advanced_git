
<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>

<article class="ads_item">

    <div class="ads_item__img">
        <div class="ads_item__img_format">
            <img src="<?= '/admin' . \Yii::$app->imagemanager->getImagePath($model->image, '200', '200','inset'); ?>" class="img-format__img" alt="">
        </div>
    </div>

    <div class="ads_item__content">
        <h2 class="ads_item__content_title">
            <a href="/product/<?= $model->id; ?>" class="ads__unit__link">
                <?= $model->title; ?>
            </a>
        </h2>
        <span class="ads_item__content_location">
                <span><?= $model->city_id; ?></span>
        </span>
        <p class="ads__unit__content__keys">
            <span>2004</span>
            <span>68&nbsp;800 km</span>
            <span><?= $model->price; ?> kr</span>
        </p>

    </div>
    <div class="ads_favourite">
        <span class="favourite_item">
            <button class="favourite_item__button">
            </button>
        </span>
    </div>

</article>