<?php
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;
class NewsController extends Controller
{
    public function actionIndex()
    {
        $news=News::getNewsList();
        return $this->render('index', [
            'news' => $news,
        ]);
    }
    public function actionView($id)
    {
        $item = News::getItem($id);

        return $this->render('view', [
            'item' => $item
        ]);
    }
}