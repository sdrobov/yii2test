<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Yii2TestTable]].
 *
 * @see Yii2TestTable
 */
class Yii2TestTableQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Yii2TestTable[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Yii2TestTable|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
