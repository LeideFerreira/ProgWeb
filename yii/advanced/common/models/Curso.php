<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property string $nome
 * @property string $sigla
 * @property string $descricao
 * @property int $id
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'sigla', 'descricao'], 'required'],
            [['descricao'], 'string'],
            [['nome'], 'string', 'max' => 45],
            [['sigla'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nome' => 'Nome',
            'sigla' => 'Sigla',
            'descricao' => 'Descricao',
            'id' => 'ID',
        ];
    }
}
