<?php

namespace app\controllers;

use yii\web\Controller;
use yii\helpers\VarDumper;

// Models
use app\models\Record;

class ExampleController extends Controller
{

    /**
     * Display View.
     */
    public function actionIndex()
    {


        // How to grab the post.
        // Yii::$app->request->post().

        $model = new Record();
        $model->username = "jimmy";

        // Set Scenario .. ?
        $model->scenario = Record::SCENARIO_GUEST;

        // Get attribute Label.
        echo $model->getAttributeLabel('username') . '<br>';

        return VarDumper::dump($model->getRecords());

        return $this->render('speak', [
            'model' => $model,
        ]);
    }

}