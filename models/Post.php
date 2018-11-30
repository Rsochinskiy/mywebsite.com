<?php
class Post
{
    

    public static function posts()
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->query("SELECT * FROM posts ORDER BY id ASC");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS, 'posts');
        return $posts;
    }


    public static function selectAll()
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->query("SELECT * FROM posts");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $posts;
    }
    public static function store($parameters)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->prepare("INSERT INTO categories (title, content, status) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $opts[0]);
        $stmt->bindParam(2, $opts[1]);
        $stmt->bindParam(3, $opts[2]);
        $stmt->execute();
    }

    // {
    //     $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
    //     $statment = $pdo->prepare("INSERT INTO posts (title, content, status) VALUES (?, ?, ?)");
    //     $statment->bindParam(1, $title);
    //     $statment->bindParam(2, $content);
    //     $statment->bindParam(3, $status);
    //     $title = $parameters['title'];
    //     $content = $parameters['content'];
    //     $status = $parameters['status'];
    //     $statment->execute();
    // }

}
