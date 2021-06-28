<?php

namespace app\models\Query;

/**
 * This is the ActiveQuery class for [[\app\models\Tblvideo]].
 *
 * @see \app\models\Tblvideo
 */
class TblvideoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\models\Tblvideo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\Tblvideo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
