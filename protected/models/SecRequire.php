<?php

/**
 * This is the model class for table "Require".
 *
 * The followings are the available columns in table 'Require':
 * @property string $requirename
 * @property integer $requireid
 * @property string $requirecontent
 * @property integer $requirefinish
 * @property integer $projectid
 * @property string $securitycontent
 * @property integer $securityfinish
 * @property string $createtime
 * @property string $updatetime
 * @property string $finishiedtime
 * @property integer $requirecertain
 * @property integer $securitycertian
 *
 * The followings are the available model relations:
 * @property Project $project
 */
class SecRequire extends CActiveRecord
{
	public $_projectlist = null;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Require';
	}


	public static function initRequire($Project_id,$Project_Name)
	{

		$number = (int)$Project_id;
		$dataOpt = new SecRequire;
		$dataOpt->attributes = array
		(
			'projectid'=>$number,
			'requirename'=>$Project_Name
		);
		$dataOpt->save();

	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectid', 'required'),
			array('requirefinish, projectid, securityfinish, requirecertain, securitycertian', 'numerical', 'integerOnly'=>true),
			array('requirename', 'length', 'max'=>255),
			array('file,requirecontent, securitycontent, createtime, updatetime, finishiedtime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('file,requirename, requireid, requirecontent, requirefinish, projectid, securitycontent, securityfinish, createtime, updatetime, finishiedtime, requirecertain, securitycertian', 'safe', 'on'=>'search'),
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
		//	'project' => array(self::BELONGS_TO, 'Project', 'ProjectID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'requirename' => 'Requirename',
			'requireid' => 'Requireid',
			'requirecontent' => 'Requirecontent',
			'requirefinish' => 'Requirefinish',
			'projectid' => 'Projectid',
			'securitycontent' => 'Securitycontent',
			'securityfinish' => 'Securityfinish',
			'createtime' => 'Createtime',
			'updatetime' => 'Updatetime',
			'finishiedtime' => 'Finishiedtime',
			'requirecertain' => 'Requirecertain',
			'securitycertian' => 'Securitycertian',
			'file' =>'File',
		);
	}
	public function getAllProjects()
	{
		$haha = Project::model()->findAll();

		$projectlist = CHtml::listData($haha,'projectid','projectname');

		return $projectlist;
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

		$criteria->compare('requirename',$this->requirename,true);
		$criteria->compare('requireid',$this->requireid);
		$criteria->compare('requirecontent',$this->requirecontent,true);
		$criteria->compare('requirefinish',$this->requirefinish);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('securitycontent',$this->securitycontent,true);
		$criteria->compare('securityfinish',$this->securityfinish);
		$criteria->compare('createtime',$this->createtime,true);
		$criteria->compare('updatetime',$this->updatetime,true);
		$criteria->compare('finishiedtime',$this->finishiedtime,true);
		$criteria->compare('requirecertain',$this->requirecertain);
		$criteria->compare('securitycertian',$this->securitycertian);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SecRequire the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
