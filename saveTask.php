<?
//Invocar la base de datos
include('db.php');

if(isset($_POST['save_task'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    $query = "INSERT INTO tareas (titulo, descripcion) VALUES ('$titulo', '$descripcion')";
    $resultado = mysqli_query($conexion, $query);

    //Verificar consulta
    if(!$resultado){
        die("Fallo inserción");
    }

    $_SESSION['message'] = "Tarea guardada correctamente";
    $_SESSION['message_type'] = "success";

    header("Location: index.php");
}
?>