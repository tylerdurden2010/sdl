<?php

class SecDesignTest extends CDbTestCase
{
     public $fixtures=array(
    'designtest'=>'SecDesign',
  );
    public function testCreate()
  {
    //CREATE a new Project
    $newProject=new SecDesign;
    $DataFlowSample = 'http://xxxx';
    $newProject->setAttributes(array(
    'ProjectID' => 2,
    'InterFaceURL' => 'http://www.baidu.com/',
    'DataFlow'  => $DataFlowSample,
    'ThreatAnalysis'  => 'Hi it\'s blalbalblalbalblabla',
    'UserID' => 1
    //'description' => 'This is a test for new project creation',
    )
  );
    $this->assertTrue($newProject->save(false));
    //READ back the newly created Project to ensure the creation
    
    $retrievedProject=SecDesign::model()->findByPk($newProject->DesignID);
    $this->assertTrue($retrievedProject instanceof SecDesign);
    $this->assertEquals($DataFlowSample,$retrievedProject->DataFlow);
  }
    public function testRead()
  {
    $retrievedProject = $this->designtest('case1');
    $this->assertTrue($retrievedProject instanceof SecDesign);
    $this->assertEquals('http://www.baidu.com/',$retrievedProject->InterFaceURL);
  }
    public function testUpdate()
  {
    $project = $this->designtest('case2');
    $updatedProjectName = 'Updated Test Project 2';
    $project->InterFaceURL = $updatedProjectName;
    $this->assertTrue($project->save(false));
    $updatedProject=SecDesign::model()->findByPk($project->DesignID);
    $this->assertTrue($updatedProject instanceof SecDesign);
    $this->assertEquals($updatedProjectName,$updatedProject->InterFaceURL);
  }
    public function testDelete()
  {
    $project = $this->designtest('case3');
    $savedProjectId = $project->DesignID;
    $this->assertTrue($project->delete());
    $deletedProject=SecDesign::model()->findByPk($savedProjectId);
    $this->assertEquals(NULL,$deletedProject);
  } 
}

                
