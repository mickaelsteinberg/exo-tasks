<?php

require_once __DIR__ . '/../model/Task.php';

class TaskController 
{
    public function home() 
    {
        require_once __DIR__ . '/../views/home.php';
    }

    public function listAllTasks() 
    {
        // Appelle le modèle Task 
        $taskModel = new Task();
        // Récupère toutes les tâches dans le model Task
        $tasks = $taskModel->getAllTasks();
        // Affiche moi la vue liste-tasks.php
        require_once __DIR__ . '/../views/liste-tasks.php';
    }

    public function deleteTask($id) 
    {
        $taskModel = new Task();
        $taskModel->deleteTask($id);
        header('Location: /exo-taches');
    }

    public function createTask()
    {
        // ne fait rien
    }

    public function updateTask() 
    {

    }
}