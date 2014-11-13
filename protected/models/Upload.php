<?php
class Upload extends CActiveRecord
{
    public $files;
    // ... other attributes
 
    public function rules()
    {
        return array(
            array('files', 'file', 'types'=>'doc, docx'),
        );
    }
}