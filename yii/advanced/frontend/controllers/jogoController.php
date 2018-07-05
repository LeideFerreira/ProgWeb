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
        $jogada = new Jogada;
        $jogada->pontuacao = $pontuacao;
        $jogada->id_user = Yii::$app->use->id; //Pegar o id do cara logado
        $jogada->save();//Salvar no banco
        return $this->render('saved');
    }

}
