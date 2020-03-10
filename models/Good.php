<?php


namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{

    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 10);
        }
        return $goods;

    }

    public function getGoodsCategories($id) {
        $catGoods = Good::find()->where(['category' => $id])->asArray()->all();
        return $catGoods;
    }

    public function getSearchResult($search) {
        $searchResult = Good::find()->where(['like', 'name' , $search])->asArray()->all();
        return $searchResult;
    }


}


