<?php
class UploadController extends CController
{
    public function actionCreate()
    {
        $model=new Upload;
        if(isset($_POST['Item']))
        {
            $model->attributes=$_POST['Item'];
            $model->doc=CUploadedFile::getInstance($model,'doc');
            if($model->save())
            {
                $model->doc->saveAs('/tmp/');
                // redirect to success page
            }
        }
        $this->render('create', array('model'=>$model));
    }
}