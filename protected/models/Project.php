<?php

/**
 * This is the model class for table "Project".
 *
 * The followings are the available columns in table 'Project':
 * @property integer $projectid
 * @property string $projectname
 * @property integer $step
 * @property string $create_time
 * @property string $update_time
 * @property string $finish_time
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class Project extends CActiveRecord
{

	public $_userlist = null;
	public $user_search = null;
	const STEP_INIT = 0;
	const STEP_REQUIRE = 1;
	const STEP_DESIGN = 2;
	const STEP_IMPLEMENT = 3;
	const STEP_TEST = 4;
	const STEP_RELEASE = 5;

	public function getStep()
	{
		return array
		(
			self::STEP_INIT=>'Init',
			self::STEP_REQUIRE=>'Require',
			self::STEP_DESIGN=>'Design',
			self::STEP_IMPLEMENT=>'Implement',
			self::STEP_TEST=>'Test',
			self::STEP_RELEASE=>'Release',
		);
	}

	public function stepList($value)
	{
		switch ($value)
		{
			case 1:
			return 'Require';
			//break;
			case 2:
				return 'Design';
			case 3:
				return 'Implement';
			case 4:
				return 'Test';
			case 5:
				return 'Release';
			default :
				return 'Init';
		}

	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('step', 'numerical', 'integerOnly'=>true),
			array('projectname', 'length', 'max'=>20),
			array('users','safe'),
			array('create_time, update_time, finish_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_search,projectname, step, create_time, update_time,finish_time', 'safe', 'on'=>'search'),
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
			'users' => array(self::MANY_MANY, 'User', 'Project_User(project_id, user_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'projectid' => 'Projectid',
			'projectname' => 'Projectname',
			'step' => 'Step',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
			'finish_time' => 'Finish Time',
			'_userlist'=>'User',
		);
	}

//This function shows all Job<->Users
	public function getJobUser()
	{


		$userlist = CHtml::listData($this->users,'userid','username');
		$userlist = implode(",", $userlist);



		return $userlist;
	}

/*
//This function is show all user from Users table
//
*/

	public function getAllUsers()
	{
		$haha = User::model()->findAll();

		$userlist = CHtml::listData($haha,'userid','username');
		//var_dump($userlist);
		//exit;
		//$test = $haha->username;

		return $userlist;
	}

	// public function getUserID($this->users)
	// {

	// }


	public function afterSave()
	{
		parent::afterSave();
		if($this->_userlist == null)
		{
			throw new CHttpException(404,'User list cannot be null');
		}
		foreach ($this->_userlist as $key => $value)
		{
			ProjectUser::updateAssignments($value,$this->projectid);
		}
		
		$hello = $this->step;

		if($hello == '1')
		{
			//die("fdsa");
			SecRequire::initRequire($this->projectid,$this->projectname);
		}




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

		$criteria->with = array('users');
	//	$criteria->with = array('users',);
		//这个地方就是供查询。需要比较相关值
	//	$criteria->compare('users.username', $this->user_search,true );
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('projectname',$this->projectname,true);
		$criteria->compare('step',$this->step);
		// $criteria->compare('create_time',$this->create_time,true);
		// $criteria->compare('update_time',$this->update_time,true);
		// $criteria->compare('finish_time',$this->finish_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
        	'attributes'=>array(
            'user_search'=>array(
                'asc'=>'users.userid',
            ),
            '*',
        ),
    ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
