<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yii2_test_table".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $created_at
 */
class Yii2TestTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2_test_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['created_at'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @inheritdoc
     * @return Yii2TestTableQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new Yii2TestTableQuery(get_called_class());
    }
}
