<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%attribute}}".
 *
 * @property string $id
 * @property string $name
 * @property string $title
 * @property string $field
 * @property string $type
 * @property string $value
 * @property string $remark
 * @property integer $is_show
 * @property string $extra
 * @property string $model_id
 * @property integer $is_must
 * @property integer $status
 * @property string $update_time
 * @property string $create_time
 * @property string $validate_rule
 * @property integer $validate_time
 * @property string $error_info
 * @property string $validate_type
 * @property string $auto_rule
 * @property integer $auto_time
 * @property string $auto_type
 */
class Attribute extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_show', 'model_id', 'is_must', 'status', 'update_time', 'create_time', 'validate_time', 'auto_time'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['title', 'field', 'value', 'remark', 'error_info', 'auto_rule'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 20],
            [['extra', 'validate_rule'], 'string', 'max' => 255],
            [['validate_type', 'auto_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'field' => 'Field',
            'type' => 'Type',
            'value' => 'Value',
            'remark' => 'Remark',
            'is_show' => 'Is Show',
            'extra' => 'Extra',
            'model_id' => 'Model ID',
            'is_must' => 'Is Must',
            'status' => 'Status',
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
            'validate_rule' => 'Validate Rule',
            'validate_time' => 'Validate Time',
            'error_info' => 'Error Info',
            'validate_type' => 'Validate Type',
            'auto_rule' => 'Auto Rule',
            'auto_time' => 'Auto Time',
            'auto_type' => 'Auto Type',
        ];
    }
}
