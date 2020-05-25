<?php

namespace app\controllers;
use app\models\Post;
class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = Post::find()->all();
        return $this->render('index',[
            'model'=>$model,
        ]);
    }

}
