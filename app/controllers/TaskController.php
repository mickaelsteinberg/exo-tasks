<?php

require_once __DIR__ . '/../model/Task.php';

class TaskController 
{
    private $taskModel;
    
    public function __construct() 
    {
        $this->taskModel = new Task();
    }

    public function newTask() 
    {
        require_once __DIR__ . '/../views/new-task.php';
    }

    public function listAllTasks() 
    {
        $tasks = $this->taskModel->getAllTasks();
        require_once __DIR__ . '/../views/liste-tasks.php';
    }

    public function viewTask($id) 
    {
        $task = $this->taskModel->getTask($id);
        require_once __DIR__ . '/../views/view-task.php';
    }

    public function deleteTask($id) 
    {
        $this->taskModel->deleteTask($id);
        header('Location: /exo-tasks/');
    }

    public function createTask(string $titre, string $description, string $status)
    {
        // Insérer les données dans le model correspondant
        $this->taskModel->create($titre, $description, $status);
        // Rediriger l'utilisateur vers la page principale
        header('Location: /exo-tasks/');
    }

    public function updateTask() 
    {

    }
}