<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblvideo".
 *
 * @property int $id_video
 * @property string|null $approve_at
 * @property string|null $create_at
 * @property string|null $description
 * @property string|null $file
 * @property string|null $horizontal_cover_image
 * @property bool $in_recommend
 * @property string|null $quality
 * @property int $status
 * @property float $time_average
 * @property string|null $title
 * @property int $total_comment
 * @property int $total_like
 * @property int $total_view
 * @property string|null $update_at
 * @property string|null $vertical_cover_image
 * @property int $category_id
 * @property int $user_id
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
            [['approve_at', 'create_at', 'update_at'], 'safe'],
            [['in_recommend'], 'boolean'],
            [['status', 'time_average', 'total_comment', 'total_like', 'total_view', 'category_id', 'user_id'], 'required'],
            [['status', 'total_comment', 'total_like', 'total_view', 'category_id', 'user_id'], 'integer'],
            [['time_average'], 'number'],
            [['description', 'file', 'horizontal_cover_image', 'quality', 'title', 'vertical_cover_image'], 'string', 'max' => 255],
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
            'create_at' => 'Create At',
            'description' => 'Video Desc',
            'file' => 'File',
            'horizontal_cover_image' => 'Horizontal Cover Image',
            'in_recommend' => 'In Recommend',
            'quality' => 'Quality',
            'status' => 'Status',
            'time_average' => 'Time Average',
            'title' => 'Video Title',
            'total_comment' => 'Total Comment',
            'total_like' => 'Total Like',
            'total_view' => 'Total View',
            'update_at' => 'Update At',
            'vertical_cover_image' => 'Vertical Cover Image',
            'category_id' => 'Category ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Tblcomments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblcomments()
    {
        return $this->hasMany(Tblcomment::className(), ['video_id' => 'id_video']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Tbluser::className(), ['id_user' => 'user_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id_category' => 'category_id']);
    }

    /**
     * Gets query for [[Uservideos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUservideos()
    {
        return $this->hasMany(Uservideo::className(), ['video_id' => 'id_video']);
    }

    /**
     * Gets query for [[Videohashtags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideohashtags()
    {
        return $this->hasMany(Videohashtag::className(), ['video_id' => 'id_video']);
    }
}
