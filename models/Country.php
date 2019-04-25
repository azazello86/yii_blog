<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string $name
 * @property int $population
 * @property string $code
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['population'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'population' => 'Population',
            'code' => 'Code',
        ];
    }
}
