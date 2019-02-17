<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Record extends Model
{

    public $username;

    private $_user = false;

    const SCENARIO_USER = 'login';
    const SCENARIO_GUEST = 'guest';

    /**
     * Declare Scenarios.
     */
    public function scenarios()
    {
        return [
            self::SCENARIO_USER  => ['username'],
            self::SCENARIO_GUEST => [],
        ];
    }

    /**
     * Set Attribute Labels.
     */
    public function attributeLabels()
    {
        return [
            'username' => 'User Name'
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username'], 'required'],
        ];
    }

    public function getRecords()
    {
        return ['record_one' => [
            $this->username,
            'two',
            'three']
        ];
    }

}
