<?php


namespace app\controllers;
use app\models\Good;
use Symfony\Component\Yaml\Yaml;
use Yii;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionIndex() {
        $goods = new good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView ($id) {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        return $this->render('view', compact('goods'));
    }

    public function actionSearch(){
        $search = Yii::$app->request->get('search');
        $goods = new Good();
        $goods = $goods->getSearchResult($search);
        return $this->render('search', compact ('goods', 'search'));
    }

}