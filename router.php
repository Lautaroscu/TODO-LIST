<?php
 require_once './app/tasks.php' ;
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list' ;
if(!empty($_GET['action'])){
    $action = $_GET['action'] ;
}
$params = explode('/' , $action) ;

switch ($params[0]) {
    case 'list':
       showTasks() ;
        break;
        case 'add':
        addTask() ;
        break ;
        case 'delete':
            $id = $params[1] ;
        deleteTask($id) ;
        break ;
        
    
    default:
        echo 'error 404 not found' ;
        break;
}