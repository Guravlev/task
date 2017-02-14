<?php
class AdvertisementModel
{
    public static $tableName = 'advertisements';


    public $title;
    public $name;

    public function __construct( $title = '', $name = '')
    {
        $this->title = $title;
        $this->name = $name;
    }

    function select_all(){
        $dbh = new PDO("mysql:host=localhost;dbname=MVCproject", "root", "");
        $sql = "SELECT advertisements.title, users.name FROM ".AdvertisementModel::$tableName ." RIGHT JOIN users ON users.id = advertisements.userid";
        $res = $dbh->query($sql);
        $articleList = [];
        $articles = $res->fetchAll();
        foreach($articles as $article) {
            $newArticle = new AdvertisementModel(
                $article['title'],
                $article['name']
            );
            array_push($articleList, $newArticle);
        }
        return $articleList;
    }
}