<?php

namespace frontend\controllers;
namespace common\models\Jogada;
use Yii;

class jogoController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRanking()
    {
        return $this->render('ranking');
    }

    public function actionSaved($pontuacao) //Vou enviar pra cá o ajax
    {
    if (!Yii::$app->user->isGuest) { // Checando se o usuário está logado
        $jogada = new Jogada;
        $jogada->id_user = Yii::$app->user->id;
        $jogada->pontuacao = $pontuacao;
        if ($jogada->save()) {
        return 1;
        } else {
        return 0;
        }
        }

}
