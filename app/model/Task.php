<?php

require_once __DIR__ . '/../dao/connexion.php';

class Task
{
    public function getAllTasks()
    {
        $pdo = getConnexion();
        $sql = "SELECT * FROM tasks";
        $stmt = $pdo->query($sql);
        
        return $stmt->fetchAll();
    }

    public function deleteTask($id)
    {
        $pdo = getConnexion();
        $sqlDelete = "DELETE FROM tasks WHERE id=$id";
        $pdo->query($sqlDelete);
    }

    public function getTask($id) 
    {
        $pdo = getConnexion();
        $stmt = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function create(string $titre, string $description, string $status)
    {
        $pdo = getConnexion();
        $stmt = $pdo->prepare("INSERT INTO tasks (title, description, status) VALUES (:title, :description, :status);");
        $stmt->bindParam(':title', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':status', $status);
        
        return $stmt->execute();
    }
}