<?php

class Category
{
    //
    public static function index() 
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->query("SELECT * FROM categories ORDER BY id ASC");
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }

    public static function store($opts)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $stmt = $pdo->prepare("INSERT INTO categories (name, status) VALUES (?, ?)");
        $stmt->bindParam(1, $opts[0]);
        $stmt->bindParam(2, $opts[1]);
        $stmt->execute();
    }

    public static function getCategoryById($id)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "SELECT name,status FROM categories Where id = :id";
        $res = $pdo->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        $res->execute();
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    public static function destroy($id)
    {
        $pdo = Connection::dbFactory(include DB_CONFIG_FILE);
        $sql = "DELETE FROM categories WHERE id = :id";
        $res = $pdo->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        return $res->execute();

    }
    


    /**
     * Возвращает Список категорий, 
     * у которых статус отображения = 0  
     */



}
