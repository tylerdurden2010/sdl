<?php

/**
 * This is the model class for table "Project_User".
 *
 * The followings are the available columns in table 'Project_User':
 * @property integer $project_id
 * @property integer $user_id
 */
class ProjectUser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Project_User';
	}

	public static function updateAssignments($user_id, $project_id)
	{
        $criteria=new CDbCriteria;
        $criteria->condition='project_id=:project_id and user_id=:user_id';
        $criteria->params=array(':user_id'=>$user_id, ':project_id'=>$project_id);
        
        $assignment = self::model()->find($criteria);
        
         if($assignment===null) 
         {
                $assignment = new ProjectUser;
                $assignment->attributes = array('user_id'=>$user_id,
	            'project_id'=>$project_id);
                $assignment->save();
        }
        else
        {
		        $criteria2=new CDbCriteria;
		        $criteria2->condition='project_id=:project_id';
		        $criteria2->params=array(':project_id'=>$project_id);
		        
		        $assignment2 = self::model()->find($criteria2);
		       // var_dump($assignment2);
		        $assignment2->save();
        	
        //	exit;
        }
    }
         
    public static function updateStep($user_id, $project_id, $step)
    {
    	$savestep = new ProjectUser;
    	$savestep->attributes = array
    	(
    		'user_id'=>$user_id,
    		'project_id'=>$project_id,
    		'step'=>$step
    	);

    	$savestep->save();
    }



	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_id, user_id, step', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('project_id, user_id, step', 'safe', 'on'=>'search'),
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
			'project_id' => 'Project',
			'user_id' => 'User',
			'step' => 'Step',
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

		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('user_id',$this->user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProjectUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
