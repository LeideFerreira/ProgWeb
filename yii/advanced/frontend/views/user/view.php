<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Curso;

/* @var $this yii\web\View */
/* @var $model common\models\User */

//$modelo = Curso::find()->where(['id_curso' == 'id'])->one();
$this->title = $model->username;
$modelo_curso = Curso::findOne('id');

$this->params['breadcrumbs'][] = ['label' => 'Usuário', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        /*'model' => $model,
        'attributes' => [
           // 'id',
            'username',
           // 'auth_key',
           // 'password_hash',
           // 'password_reset_token',
            'email:email',
            'id_curso',
            //'status',
            'created_at',
            'updated_at',
            
        ],
        */
        'model' => $modelo_curso,
        'attributes' => [
            'nome',
            'descicao',
        ],
    ]) ?>

</div>
