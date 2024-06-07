<?php
namespace frontend\controllers;

use frontend\models\Equipment;
use yii\data\Pagination;
use yii\web\Controller;


class EquipmentController extends Controller
{
    public function actionIndex()
    {
        $equipments = Equipment::find()->all();
        return $this->render('index', compact('equipments'));
    }
    public function actionAbout()
    {
       $equipments = Equipment::find()->all();
        return $this->render('about', compact('equipments'));
    }
    public function actionMagazin()
    {
       // $equipments = Equipment::find()->all();
       $query = Equipment::find();
       $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 2]);
       $equipments = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('magazin', compact('equipments', 'pages'));
    }
    public function actionCorzina()
    {
        $equipments = Equipment::find()->all();
        return $this->render('corzina', compact('equipments'));
    }
    public function actionContact()
    {
        $equipments = Equipment::find()->all();
        return $this->render('contact', compact('equipments'));
    }
}