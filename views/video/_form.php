<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tblvideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblvideo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'approve_at')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horizontal_cover_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_recommend')->checkbox() ?>

    <?= $form->field($model, 'quality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'time_average')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_comment')->textInput() ?>

    <?= $form->field($model, 'total_like')->textInput() ?>

    <?= $form->field($model, 'total_view')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'vertical_cover_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
