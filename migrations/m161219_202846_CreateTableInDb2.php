<?php

use yii\db\Migration;

class m161219_202846_CreateTableInDb2 extends Migration
{
    public function init()
    {
        $this->db = Yii::$app->db2;

        parent::init();
    }

    public function up()
    {
        $this->createTable('yii2_test_table', [
            'id' => \yii\db\mysql\Schema::TYPE_BIGPK,
            'title' => \yii\db\mysql\Schema::TYPE_STRING . ' NOT NULL',
            'description' => \yii\db\mysql\Schema::TYPE_TEXT . ' NOT NULL',
            'created_at' => \yii\db\mysql\Schema::TYPE_INTEGER,
        ]);
    }

    public function down()
    {
        $this->dropTable('yii2_test_table');
    }
}
