<?php

namespace app\controllers;

use app\models\Yii2TestTable;
use app\models\Yii2TestTableQuery;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $request = Yii::$app->request;
        $response = [];

        $title = $request->get('title');
        $description = $request->get('description');

        $queryDb1 = new Yii2TestTableQuery(Yii2TestTable::class);
        $queryDb2 = new Yii2TestTableQuery(Yii2TestTable::class);

        if ($title) {
            $queryDb1->andWhere(['title' => $title]);
            $queryDb2->andWhere(['title' => $title]);
            $response['title'] = $title;
        }

        if ($description) {
            $queryDb1->andWhere(['description' => $description]);
            $queryDb2->andWhere(['description' => $description]);
            $response['description'] = $description;
        }

        $result = $queryDb1->all() ?: [];
        $result = array_merge($result, $queryDb2->all(Yii::$app->db2) ?: []);

        usort($result, function ($a, $b) {
            /** @var Yii2TestTable $a */
            /** @var Yii2TestTable $b */

            return $a->created_at >= $b->created_at;
        });

        $response['result'] = $result;

        return $this->render('index', $response);
    }
}
