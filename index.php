<?php

require_once __DIR__ . '/app/controllers/TaskController.php';

$taskController = new TaskController();
$taskController->listAllTasks();

if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'supprimer') {
    $taskController->deleteTask($_GET['id']);
}


