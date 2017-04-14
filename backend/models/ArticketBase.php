<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%model}}".
 *
 * @property string $id
 * @property string $name
 * @property string $title
 * @property string $extend
 * @property string $relation
 * @property integer $need_pk
 * @property string $field_sort
 * @property string $field_group
 * @property string $attribute_list
 * @property string $attribute_alias
 * @property string $template_list
 * @property string $template_add
 * @property string $template_edit
 * @property string $list_grid
 * @property integer $list_row
 * @property string $search_key
 * @property string $search_list
 * @property string $create_time
 * @property string $update_time
 * @property integer $status
 * @property string $engine_type
 */
class ArticketBase extends \yii\db\ActiveRecord
{
	const status_open='正常';
	const status_close='关闭';
	const scenario_create='create';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%model}}';
    }
    public function beforeSave($insert){
    	   //插入模型时
    	   if($insert){
    	   	  //继承模型
    	   	  if($this->extend==1){
    	   	  	$rows=Attribute::findAll(['model_id'=>$this->extend]);
    	   	  	$sort=array();
    	   	  	if($rows){
    	   	  	  $sort[1]=array();
    	   	  	  foreach ($rows as $row){
    	   	  	  	  array_push($sort[1],$row->id);
    	   	  	  }
    	   	  	}
    	   	  	$this->field_sort=json_encode($sort);
    	   	  }
    	   }
    	   return true;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['extend', 'need_pk', 'list_row', 'create_time', 'update_time', 'status'], 'integer'],
            [['field_sort', 'attribute_list', 'list_grid'], 'string'],
            [['name', 'title', 'relation'], 'string', 'max' => 30],
            [['field_group', 'attribute_alias', 'search_list'], 'string', 'max' => 255],
            [['template_list', 'template_add', 'template_edit'], 'string', 'max' => 100],
            [['search_key'], 'string', 'max' => 50],
            [['engine_type'], 'string', 'max' => 25],
            ['name', 'match','pattern'=>'/^[A-Za-z]+/u','message'=>'标识必须英文开头'],
            [['create_time','update_time'],'default','value'=>time()],
            [['status'],'default','value'=>1],
            [['list_row'],'default','value'=>0]
        ];
    }
    /**
     * 模型状态
     * @param unknown $status
     * @return string
     */
    public static function get_status_text($status){
    	   if($status==1){
    	   	  return self::status_open;
    	   }else{
    	   	  return self::status_close;
    	   }
    }
    public static function get_status_list(){
    	return [
    	'0'=>self::status_close,
    	'1'=>self::status_open
    	];
    }
    /**
     * 模型类型
     * @return multitype:string
     */
    public static function get_extend_list(){
    	return [
    	   '0'=>'独立模型',
    	   '1'=>'文档模型'
    	];
    }
    /**
     * 表引擎
     * @return multitype:string
     */
    public static function get_engine_list(){
    	   return [
    	       'MyISAM'=>'MyISAM',
    	       'InnoDB'=>'InnoDB',
    	       'MEMORY'=>'MEMORY',
    	       'BLACKHOLE'=>'BLACKHOLE',
    	       'MRG_MYISAM'=>'MRG_MYISAM',
    	       'ARCHIVE'=>'ARCHIVE'
    	   ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'name' => '标识',
            'title' => '名称',
            'extend' => '模型类型',
            'engine_type' => '模型引擎',
            'relation' => 'Relation',
            'need_pk' => '是否需要主键',
            'field_sort' => 'Field Sort',
            'field_group' => 'Field Group',
            'attribute_list' => 'Attribute List',
            'attribute_alias' => 'Attribute Alias',
            'template_list' => 'Template List',
            'template_add' => 'Template Add',
            'template_edit' => 'Template Edit',
            'list_grid' => 'List Grid',
            'list_row' => 'List Row',
            'search_key' => 'Search Key',
            'search_list' => 'Search List',
            'create_time' => '创建时间',
            'update_time' => 'Update Time',
            'status' => '状态',
        ];
    }
}
