<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <? $array = array(  // пример масива
        0 => array(
            'name' => 'John Doe',
            'email' => 'john@example.com'
        ),
        1 => array(
            'name' => 'Jane Doe',
            'email' => 'jane@example.com'
        ),
    );
    $row_count = count($array);  // посчитали сколько
    for($i='0';$i<=$row_count;$i++) { // перебираем
        echo '<br>';
        echo $i;
        echo $array[ $i ]['name'];
        echo $array[ $i ]['email'];
        echo '<br>';
    }
    
    ?>

    <code><?= __FILE__ ?></code>
</div>
