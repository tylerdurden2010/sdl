<?php

/**
 * This is the model class for table "SecCode".
 *
 * The followings are the available columns in table 'SecCode':
 * @property integer $SecCodeID
 * @property integer $ProjectID
 * @property string $Question
 * @property integer $UserID
 * @property string $ScanReport
 * @property string $DangerousFunction
 * @property string $Tool
 * @property integer $SecFinish
 */
class OptSecCode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'SecCode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ProjectID, UserID, SecFinish', 'numerical', 'integerOnly'=>true),
			array('Question, ScanReport, DangerousFunction, Tool', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SecCodeID, ProjectID, Question, UserID, ScanReport, DangerousFunction, Tool, SecFinish', 'safe', 'on'=>'search'),
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
			'SecCodeID' => 'Sec Code',
			'ProjectID' => 'Project',
			'Question' => 'Question',
			'UserID' => 'User',
			'ScanReport' => 'Scan Report',
			'DangerousFunction' => 'Dangerous Function',
			'Tool' => 'Tool',
			'SecFinish' => 'Sec Finish',
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

		$criteria->compare('SecCodeID',$this->SecCodeID);
		$criteria->compare('ProjectID',$this->ProjectID);
		$criteria->compare('Question',$this->Question,true);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('ScanReport',$this->ScanReport,true);
		$criteria->compare('DangerousFunction',$this->DangerousFunction,true);
		$criteria->compare('Tool',$this->Tool,true);
		$criteria->compare('SecFinish',$this->SecFinish);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OptSecCode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
