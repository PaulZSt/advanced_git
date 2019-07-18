<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Cities;

$city = new Cities;
/* @var $this yii\web\View */
/* @var $model app\models\Content */
/* @var $form yii\widgets\ActiveForm */
?>


<a class="ad-preview__click-area" href="/product/<?= $model->id; ?>">
    <div class="ad-preview__media">
        <div class="img-format">
            <img src="<?= '/admin' . \Yii::$app->imagemanager->getImagePath($model->image, '300', '300', 'inset'); ?>" class="img-format__img" alt="">
        </div>
        <div class="ad-preview__media__tag">
            <div class="ad-preview__tag">
                <div class="media">
                    <div class="media__img">
                        <svg width="30" height="30" viewBox="0 0 45 25" class="ad-stream__icon" role="img" aria-label="Bil">
                            <g fill="currentColor" fill-rule="evenodd">
                                <path d="M38.834 25.624h-2.221c-.596-1.629-2.139-2.8-3.96-2.8-1.823 0-3.365 1.171-3.961 2.8H16.829c-.596-1.629-2.138-2.8-3.96-2.8-1.823 0-3.365 1.171-3.961 2.8H6.885v-4.581a3.805 3.805 0 0 1 2.972-3.702l.632-.137v-6.8c0-2.767 2.241-5.02 4.997-5.02h9.278c1.773 0 3.429.96 4.32 2.503l5.407 9.365h.568c2.082 0 3.775 1.701 3.775 3.79v4.582zm-6.181 4.114a2.645 2.645 0 0 1-2.634-2.652 2.646 2.646 0 0 1 2.634-2.652c1.452 0 2.632 1.19 2.632 2.652a2.645 2.645 0 0 1-2.632 2.652zm-19.784 0a2.645 2.645 0 0 1-2.634-2.652 2.646 2.646 0 0 1 2.634-2.652 2.646 2.646 0 0 1 2.633 2.652 2.645 2.645 0 0 1-2.633 2.652zm27.565-8.695c0-2.857-2.218-5.203-5.016-5.39l-4.95-8.575a6.61 6.61 0 0 0-5.704-3.305h-9.278c-3.638 0-6.597 2.975-6.597 6.632v5.54a5.432 5.432 0 0 0-3.604 5.098v6.192H8.65c.08 2.28 1.935 4.114 4.219 4.114 2.284 0 4.138-1.833 4.218-4.114h11.347c.08 2.28 1.935 4.114 4.219 4.114 2.283 0 4.138-1.833 4.218-4.114h3.563v-6.192z"></path>
                                <path d="M15.25 15.563l-.313-4.62a1.83 1.83 0 0 1 1.824-1.828h5.347l.002.024 1.746-.01a1.816 1.816 0 0 1 1.577.894l3.149 5.52-13.333.02zm8.595-8.046l-7.084-.013c-1.888 0-3.424 1.542-3.422 3.493l.415 6.179 17.59-.026-4.528-7.937c-.618-1.054-1.744-1.725-2.97-1.696z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="media__body">
                        <span class="ad-stream__price"><?= $model->price; ?> kr</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ad-preview__text">
        <p class="ad-stream__location"><?= $city->getNamess($model->city_id); ?></p>
        <h3 class="ad-stream__description"><?= $model->title; ?></h3>
    </div>
</a>


