<?php

class WebsiteController extends CController
{
    public function actionIndex()
    {
       echo "index";
    }
    public function actionTest($alias)
    {
         echo "Page is $alias.";
    }
}