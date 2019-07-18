<?

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Atribute;
use app\models\Cities;

$filter = Cities::find()->where(['id' => $city_id])->one();
$attr_value = new Cities;
?>

<h2><?= $filter->name ?></h2>

<div class="input_filter">
<?php foreach ($cities as $attr): ?>
    <? if(!empty($post['filter']['city_id'][$attr->id])) {
        $t = true;
    } else {
        $t = false;
    } ?>

    <? echo Html::checkbox('filter[city_id]['.$attr->id.']',false,['value' => $attr->id,'id'=>$attr->id, 'checked ' => $t]); ?> <label for="<?= $attr->id ?>"><?=$attr->name; ?></label>
<? endforeach; ?>
</div>





