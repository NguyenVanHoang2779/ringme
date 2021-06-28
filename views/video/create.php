<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblvideo */

$this->title = 'Create Tblvideo';
$this->params['breadcrumbs'][] = ['label' => 'Tblvideos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblvideo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
