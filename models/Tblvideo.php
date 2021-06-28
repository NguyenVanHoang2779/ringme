<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblvideo".
 *
 * @property int $id_video
 * @property string|null $approve_at
 * @property bool|null $in_recommend
 * @property string|null $quality
 * @property int $status
 * @property string|null $title
 * @property int $total_comment
 * @property int $total_like
 * @property int $total_view
 * @property string|null $vertical_cover_image
 * @property int $category_id
 * @property int $user_id
 * @property string|null $description
 * @property string|null $file
 * @property string|null $horizontal_cover_image
 * @property float $time_average
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Tblcomment[] $tblcomments
 * @property Tbluser $user
 * @property Category $category
 * @property Uservideo[] $uservideos
 * @property Videohashtag[] $videohashtags
 */
class Tblvideo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tblvideo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['approve_at', 'created_at', 'updated_at'], 'safe'],
            [['title'], 'required'],
            [['category_id', 'user_id'], 'required'],
            [['category_id', 'user_id'], 'integer'],
            [['horizontal_cover_image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['vertical_cover_image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['file'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],

//            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tbluser::className(), 'targetAttribute' => ['user_id' => 'id_user']],
//            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id_category']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_video' => 'Id Video',
            'approve_at' => 'Approve At',
            'in_recommend' => 'In Recommend',
            'quality' => 'Quality',
            'status' => 'Status',
            'title' => 'Title',
            'total_comment' => 'Total Comment',
            'total_like' => 'Total Like',
            'total_view' => 'Total View',
            'vertical_cover_image' => 'Vertical Cover Image',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
            'description' => 'Description',
            'file' => 'File',
            'horizontal_cover_image' => 'Horizontal Cover Image',
            'time_average' => 'Time Average',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Tblcomments]].
     *
     * @return \yii\db\ActiveQuery|\app\models\Query\TblcommentQuery
     */
    public function getTblcomments()
    {
        return $this->hasMany(Tblcomment::className(), ['video_id' => 'id_video']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|\app\models\Query\TbluserQuery
     */
    public function getUser()
    {
        return $this->hasOne(Tbluser::className(), ['id_user' => 'user_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|\app\models\Query\CategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'category_id']);
    }

    /**
     * Gets query for [[Uservideos]].
     *
     * @return \yii\db\ActiveQuery|\app\models\Query\UservideoQuery
     */
    public function getUservideos()
    {
        return $this->hasMany(Uservideo::className(), ['video_id' => 'id_video']);
    }

    /**
     * Gets query for [[Videohashtags]].
     *
     * @return \yii\db\ActiveQuery|\app\models\Query\VideohashtagQuery
     */
    public function getVideohashtags()
    {
        return $this->hasMany(Videohashtag::className(), ['video_id' => 'id_video']);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Query\TblvideoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\Query\TblvideoQuery(get_called_class());
    }
}
