<?php
require 'db.php' ;
 function showTasks(){
    include './templates/index.php' ;
    $tasks = getAllTasks() ;

    require './templates/form.php' ;

    echo '<ul class=list-group>' ;
    foreach($tasks as $task){
        echo "<li class=list-group-item d-flex justify-content-between align-items-center>
                <span> <b>$task->titulo</b> - $task->descripcion (prioridad $task->prioridad)</span> 
                <a href='delete/$task->id_tarea'  type='button' class='btn btn-danger ml-auto'>Borrar</a>
             </li>" ;
    }
    echo '</ul>' ;
    include './templates/footer.php' ;
}
function addTask(){
    
    if(!empty($_POST['title'] || $_POST['description'] || $_POST['priority'])){
         $title = $_POST['title'];
    $description = $_POST['description'];
    $priority = $_POST['priority'];
    $id = insertTask($title , $description , $priority) ;

    }
    header("Location :" . BASE_URL) ;
}


function deleteTask($id){
    deleteTaskByID($id) ;
    header("Location : " . BASE_URL) ;
}


