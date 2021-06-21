<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TblvideoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tblvideos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblvideo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tblvideo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_video',
            'approve_at',
            'create_at',
            'description',
            'file',
            //'horizontal_cover_image',
            //'in_recommend:boolean',
            //'quality',
            //'status',
            //'time_average',
            //'title',
            //'total_comment',
            //'total_like',
            //'total_view',
            //'update_at',
            //'vertical_cover_image',
            //'category_id',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
