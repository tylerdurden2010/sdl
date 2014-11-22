<?php

/**
 * This is the model class for table "Implement".
 *
 * The followings are the available columns in table 'Implement':
 * @property integer $implementid
 * @property string $implementname
 * @property integer $projectid
 * @property string $implementreport
 * @property string $create_time
 * @property string $update_time
 * @property string $finishied_time
 * @property integer $implementfinishied
 * @property string $surveyurl
 */
class Implement extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Implement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectid, implementfinishied', 'numerical', 'integerOnly'=>true),
			array('implementname, implementreport, surveyurl', 'length', 'max'=>255),
			array('create_time, update_time, finishied_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('implementid, implementname, projectid, implementreport, create_time, update_time, finishied_time, implementfinishied, surveyurl', 'safe', 'on'=>'search'),
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

	public function getAllProjects()
	{
		$haha = Project::model()->findAll();

		$projectlist = CHtml::listData($haha,'projectid','projectname');

		return $projectlist;
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'implementid' => 'Implementid',
			'implementname' => 'Implementname',
			'projectid' => 'Projectid',
			'implementreport' => 'Implementreport',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'finishied_time' => 'Finishied Time',
			'implementfinishied' => 'Implementfinishied',
			'surveyurl' => 'Surveyurl',
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

		$criteria->compare('implementid',$this->implementid);
		$criteria->compare('implementname',$this->implementname,true);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('implementreport',$this->implementreport,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('finishied_time',$this->finishied_time,true);
		$criteria->compare('implementfinishied',$this->implementfinishied);
		$criteria->compare('surveyurl',$this->surveyurl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Implement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
