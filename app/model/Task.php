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
}