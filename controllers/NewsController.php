<?php

include_once ROOT.'\models\news.php';

class NewsController 
{
    public function actionIndex()
    {
        $newsList = array();
        $newsList = News::getnewsList();
        
        require_once (ROOT.'\views\news\index.php');
        
        return true;
    }
    
    public function actionView($id)
    {
        if($id){
            $newsItem = array();
            $newsItem = News::getNewsitemById($id);
            
            require_once (ROOT.'\views\news\one_news.php');
        }
        return true;
    }
}
