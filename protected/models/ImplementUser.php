<?php

/**
 * This is the model class for table "Implement_User".
 *
 * The followings are the available columns in table 'Implement_User':
 * @property integer $implementid
 * @property integer $userid
 * @property string $interfaceurl
 * @property string $useraskform
 * @property string $codereviewreport
 * @property string $finishied_time
 */
class ImplementUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Implement_User';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('implementid, userid', 'numerical', 'integerOnly'=>true),
			array('interfaceurl, useraskform, codereviewreport', 'length', 'max'=>255),
			array('finishied_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('implementid, userid, interfaceurl, useraskform, codereviewreport, finishied_time', 'safe', 'on'=>'search'),
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
			'implementid' => 'Implementid',
			'userid' => 'Userid',
			'interfaceurl' => 'Interfaceurl',
			'useraskform' => 'Useraskform',
			'codereviewreport' => 'Codereviewreport',
			'finishied_time' => 'Finishied Time',
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
		$criteria->compare('userid',$this->userid);
		$criteria->compare('interfaceurl',$this->interfaceurl,true);
		$criteria->compare('useraskform',$this->useraskform,true);
		$criteria->compare('codereviewreport',$this->codereviewreport,true);
		$criteria->compare('finishied_time',$this->finishied_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ImplementUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
