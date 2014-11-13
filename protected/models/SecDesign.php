<?php

/**
 * This is the model class for table "Design".
 *
 * The followings are the available columns in table 'Design':
 * @property integer $designid
 * @property string $designname
 * @property string $threatmodel
 * @property string $attacktree
 * @property string $createtime
 * @property string $updatetime
 * @property string $finishiedtime
 * @property integer $projectid
 * @property integer $designfinishied
 */
class SecDesign extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Design';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectid, designfinishied', 'numerical', 'integerOnly'=>true),
			array('designname, threatmodel, attacktree', 'length', 'max'=>255),
			array('createtime, updatetime, finishiedtime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('designid, designname, threatmodel, attacktree, createtime, updatetime, finishiedtime, projectid, designfinishied', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'designid' => 'Designid',
			'designname' => 'Designname',
			'threatmodel' => 'Threatmodel',
			'attacktree' => 'Attacktree',
			'createtime' => 'Createtime',
			'updatetime' => 'Updatetime',
			'finishiedtime' => 'Finishiedtime',
			'projectid' => 'Projectid',
			'designfinishied' => 'Designfinishied',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('designid',$this->designid);
		$criteria->compare('designname',$this->designname,true);
		$criteria->compare('threatmodel',$this->threatmodel,true);
		$criteria->compare('attacktree',$this->attacktree,true);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('finishiedtime',$this->finishiedtime,true);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('designfinishied',$this->designfinishied);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SecDesign the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
