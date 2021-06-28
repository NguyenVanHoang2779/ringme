<?php

namespace app\controllers;

use Yii;
use app\models\Tblvideo;
use app\models\TblvideoSearch;
use yii\base\Action;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VideoController implements the CRUD actions for Tblvideo model.
 */
class VideoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tblvideo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TblvideoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tblvideo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tblvideo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tblvideo();
        $model->status = 0;
        $model ->total_comment = 0;
        $model ->total_like= 0;
        $model ->total_view = 0;
        $model ->time_average = 0;
        $model->in_recommend =0;
        if ($model->load(Yii::$app->request->post()) ) {

            $model->vertical_cover_image = UploadedFile::getInstance($model, 'vertical_cover_image');
            $model->horizontal_cover_image = UploadedFile::getInstance($model, 'horizontal_cover_image');
            $model->file = UploadedFile::getInstance($model, 'file');

//            $model->vertical_cover_image = $model->vertical_cover_image->baseName;
//            yii::error($model->vertical_cover_image . 'file=========================');
//            $pathImage = 'C:\Users\Admin\Pictures\upload/' . $model->vertical_cover_image->baseName . '.' . $model->vertical_cover_image->extension;
//            $pathVideo = 'C:\Users\Admin\Pictures\upload/' . $model->horizontal_cover_image->baseName . '.' . $model->horizontal_cover_image->extension;

//            $model->pathImage = $pathImage;
//            $model->pathVideo = $pathVideo;

//            $model->videoImage->saveAs($pathImage,false);
//            $model->videoMedia->saveAs($pathVideo,false);
            if($model->save()) {
//                yii::error($model->id_video . 'ID==============');
                return $this->redirect('view',['id'=>$model->id_video]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tblvideo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_video]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tblvideo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tblvideo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tblvideo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tblvideo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
