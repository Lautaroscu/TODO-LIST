<?php
    function ConexionDB (){
 
        $conn = new PDO('mysql:host=localhost;'.'dbname=db_web2;charset=utf8' , 'root', '') ;
        return $conn ;
      }    
      function getAllTasks(){
        //1.abro conexion a la db ;
        $db = ConexionDB() ;
        //2. ejecuto la sentencia(dos subpasos) ;
        $query = $db->prepare("SELECT * FROM tareas") ;
        $query->execute() ;
        //3. obtengo los resultados ;
        $tasks = $query->fetchAll(PDO::FETCH_OBJ) ; //devuelve array de objetos
        return $tasks ;

      }
      function insertTask($title , $description , $priority){
        $db = ConexionDB() ;
       $query =  $db->prepare('INSERT INTO tareas (titulo , descripcion , prioridad , finalizada) VALUES(? , ? , ? , ?)');
       $query->execute([$title , $description , $priority , false]) ;
       return  $db->lastInsertId() ;
      }
      function deleteTaskByID($id){
        $db = ConexionDB() ;
        $query = $db->prepare('DELETE FROM  tareas WHERE id_tarea = ?') ;
        $query->execute([$id]) ;
      }
     
    
    
    