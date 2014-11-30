<?php

/**
 * This is the model class for table "Test".
 *
 * The followings are the available columns in table 'Test':
 * @property integer $testid
 * @property string $testname
 * @property integer $projectid
 * @property string $create_time
 * @property string $update_time
 * @property string $finishied_time
 * @property string $testreport
 * @property string $securitytoolsurl
 * @property integer $bugamount
 * @property string $bugreport
 */
class SecTest extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Test';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectid, bugamount', 'numerical', 'integerOnly'=>true),
			array('testname, testreport, securitytoolsurl, bugreport', 'length', 'max'=>255),
			array('create_time, update_time, finishied_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('testid, testname, projectid, create_time, update_time, finishied_time, testreport, securitytoolsurl, bugamount, bugreport', 'safe', 'on'=>'search'),
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
			'testid' => 'Testid',
			'testname' => 'Testname',
			'projectid' => 'Projectid',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'finishied_time' => 'Finishied Time',
			'testreport' => 'Testreport',
			'securitytoolsurl' => 'Securitytoolsurl',
			'bugamount' => 'Bugamount',
			'bugreport' => 'Bugreport',
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

		$criteria->compare('testid',$this->testid);
		$criteria->compare('testname',$this->testname,true);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('finishied_time',$this->finishied_time,true);
		$criteria->compare('testreport',$this->testreport,true);
		$criteria->compare('securitytoolsurl',$this->securitytoolsurl,true);
		$criteria->compare('bugamount',$this->bugamount);
		$criteria->compare('bugreport',$this->bugreport,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SecTest the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
