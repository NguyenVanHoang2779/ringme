<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tblvideo */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tblvideos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tblvideo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_video], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_video], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_video',
            'approve_at',
            'create_at',
            'description',
            'file',
            'horizontal_cover_image',
            'in_recommend:boolean',
            'quality',
            'status',
            'time_average',
            'title',
            'total_comment',
            'total_like',
            'total_view',
            'update_at',
            'vertical_cover_image',
            'category_id',
            'user_id',
        ],
    ]) ?>

</div>
