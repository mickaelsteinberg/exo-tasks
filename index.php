<?php

require_once __DIR__ . '/app/controllers/TaskController.php';

$taskController = new TaskController();

if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['status']) && !empty($_POST['status']) ) {
    $taskController->createTask($_POST['title'], $_POST['description'], $_POST['status']);
} elseif (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] === 'supprimer') {
    $taskController->deleteTask($_GET['id']);
} elseif (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'voir') {
    $taskController->viewTask($_GET['id']);
} elseif (isset($_GET['page']) && $_GET['page'] === 'new-task') {
    $taskController->newTask();
} else {
    $taskController->listAllTasks();
}
