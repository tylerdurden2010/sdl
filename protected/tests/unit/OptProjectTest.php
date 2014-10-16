<?php

class OptProjectTest extends CDbTestCase
{
     public $fixtures=array(
    'optproject'=>'OptProject',
  );
  //   public function testCreate()
  // {
  //   //CREATE a new Project
  //   $newProject=new OptProject;
  //   $newProjectName = 'Test Project Creation';
  //   $newProject->setAttributes(array(
  //   'ProjectName' => $newProjectName,
  //   //'description' => 'This is a test for new project creation',
  //   )
  // );
  //   $this->assertTrue($newProject->save(false));
  //   //READ back the newly created Project to ensure the creation
    
  //   $retrievedProject=OptProject::model()->findByPk($newProject->ProjectID);
  //   $this->assertTrue($retrievedProject instanceof OptProject);
  //   $this->assertEquals($newProjectName,$retrievedProject->ProjectName);
  // }
  //   public function testRead()
  // {
  //   $retrievedProject = $this->optproject('project1');
  //   $this->assertTrue($retrievedProject instanceof OptProject);
  //   $this->assertEquals('Test Project 1',$retrievedProject->ProjectName);
  // }
  //   public function testUpdate()
  // {
  //   $project = $this->optproject('project2');
  //   $updatedProjectName = 'Updated Test Project 2';
  //   $project->ProjectName = $updatedProjectName;
  //   $this->assertTrue($project->save(false));
  //   $updatedProject=OptProject::model()->findByPk($project->ProjectID);
  //   $this->assertTrue($updatedProject instanceof OptProject);
  //   $this->assertEquals($updatedProjectName,$updatedProject->ProjectName);
  // }
    public function testDelete()
  {
    $project = $this->optproject('project1');
   var_dump($project);
     $savedProjectId = $project->ProjectID;
    $this->assertTrue($project->delete());
    $deletedProject=OptProject::model()->findByPk($savedProjectId);
    $this->assertEquals(NULL,$deletedProject);
  } 
}

