<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data_time')->textInput() ?>



    <?php //$form->field($model, 'data_time')->textInput(); ?>
    <?php
    echo '<b>'.$model->getAttributeLabel('data_time').'</b>';
    echo DatePicker::widget([
        'model' => $model,
        'attribute' => 'data_time', 
        'value' => date('Y-m-d'),
        'options' => ['placeholder' => 'Select date ...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]);
    ?>

   
    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'photo')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'video')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
