<?php

class UserModel
{
    public static $tableName = 'users';

    public $name;

    public function __construct( $name = '')
    {
        $this->name = $name;
    }

    function select_all(){
        $dbh = new PDO("mysql:host=localhost;dbname=MVCproject", "root", "");
        $sql = "SELECT name FROM ".UserModel::$tableName ." ORDER BY id ";
        $res = $dbh->query($sql);
        $articleList = [];
        $articles = $res->fetchAll();
        foreach($articles as $article) {
            $newArticle = new UserModel(
                $article['name']
            );
            array_push($articleList, $newArticle);
        }

        return $articleList;
    }
}