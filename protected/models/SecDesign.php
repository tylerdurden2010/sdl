<?php

/**
 * This is the model class for table "Design".
 *
 * The followings are the available columns in table 'Design':
 * @property string $DesignID
 * @property integer $ProjectID
 * @property string $InterFace
 * @property string $DataFlow
 * @property string $ThreatAnalysis
 * @property integer $UserID
 * @property string $ThirdPart
 * @property integer $DesFinish
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
			array('ProjectID, UserID, DesFinish', 'numerical', 'integerOnly'=>true),
			array('InterFace, DataFlow, ThreatAnalysis, ThirdPart', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('DesignID, ProjectID, InterFace, DataFlow, ThreatAnalysis, UserID, ThirdPart, DesFinish', 'safe', 'on'=>'search'),
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
			'DesignID' => 'Design',
			'ProjectID' => 'Project',
			'InterFace' => 'Inter Face',
			'DataFlow' => 'Data Flow',
			'ThreatAnalysis' => 'Threat Analysis',
			'UserID' => 'User',
			'ThirdPart' => 'Third Part',
			'DesFinish' => 'Des Finish',
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

		$criteria->compare('DesignID',$this->DesignID,true);
		$criteria->compare('ProjectID',$this->ProjectID);
		$criteria->compare('InterFace',$this->InterFace,true);
		$criteria->compare('DataFlow',$this->DataFlow,true);
		$criteria->compare('ThreatAnalysis',$this->ThreatAnalysis,true);
		$criteria->compare('UserID',$this->UserID);
		$criteria->compare('ThirdPart',$this->ThirdPart,true);
		$criteria->compare('DesFinish',$this->DesFinish);

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
