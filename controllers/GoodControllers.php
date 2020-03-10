<?php


namespace app\controllers;
use app\models\Good;
use yii\web\Controller;

class GoodControllers extends Controller
{
    public function actionIndex() {
        $good = new Good();
        $good = $good->getOneGood($name);
        return $this->render('index', compact('goodS'));
    }

}