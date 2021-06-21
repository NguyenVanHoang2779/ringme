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

    <?= $form->field($model, 'create_at') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'horizontal_cover_image') ?>

    <?php // echo $form->field($model, 'in_recommend')->checkbox() ?>

    <?php // echo $form->field($model, 'quality') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'time_average') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'total_comment') ?>

    <?php // echo $form->field($model, 'total_like') ?>

    <?php // echo $form->field($model, 'total_view') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <?php // echo $form->field($model, 'vertical_cover_image') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
