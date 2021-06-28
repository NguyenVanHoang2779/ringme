<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblvideoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblvideo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_video') ?>

    <?= $form->field($model, 'approve_at') ?>

    <?= $form->field($model, 'in_recommend')->checkbox() ?>

    <?= $form->field($model, 'quality') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'total_comment') ?>

    <?php // echo $form->field($model, 'total_like') ?>

    <?php // echo $form->field($model, 'total_view') ?>

    <?php // echo $form->field($model, 'vertical_cover_image') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'horizontal_cover_image') ?>

    <?php // echo $form->field($model, 'time_average') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
