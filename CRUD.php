<?php
echo "<h1>CREATE</h1> ";
echo "<p>El create es para guardar informacion a partir de un formulario,
esto con el codigo: <br> INSERT INTO nombre_de_la_tabla (columna1, columna2, columna3) VALUES (valor1, valor2, valor3); <br>
La informacion que ingrese el usuario ºsera guardada en la base de datos segun los valores que se le asignen a cada columna</p><br>";
echo "<h1>READ</h1>";
echo "<p>'READ' es una de las cuatro operaciones fundamentales de CRUD, que significaCrear, leer, actualizar y eliminarLa operación 
'READ' se refiere a la acción de recuperar y mostrar datos existentes de un sistema de almacenamiento, como una base de datos, sin modificarlos.
 Esto se suele implementar en aplicaciones como búsquedas, visualización o generación de informes. </p>";
 echo "<h1>UPDATE</h1>";
 echo "<p>El 'UPDATE' es una sentencia SQL para poder actualizar varios datos ya escritos con una sentncia de UPDATE, SET, WERE 
 donde el WHERE es la base para evitar que todas las filas se actualicen por error en conjunto. </p>";
echo"<h1>DELETE</h1>";
echo"<p>El DELETE es la acción de eliminar un registro o dato existente de una base de datos, permitiendo a los usuarios quitar información
 obsoleta o innecesaria,nos referimos a un comando esencial en cualquier sistema operativo. Este permite borrar archivos o datos de tu computadora,
  ya sea de manera temporal o permanente. </p>"
echo"<h1>Para la sintaxis </h1>";
echo"<p>Para la sintaxis de todo el CRUD se necesita la una carpeta o programas para un correcto funcionamiento </p>";
echo"Create
php
$nombreservidor="localhost";
$usuario="root";
$contraseña="";
$basededatos="guiacrud";

$conexion= new mysqli($nombreservidor,$usuario,$contraseña,$basededatos);

if($conexion->connect_error){
    echo "Hubo un error :( ";
}

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE producto SET nombre= '$nombre', precio= '$precio', cantidad= $cantidad WHERE id=$id";
if($conexion->query($sql) === TRUE){
    echo "El producto se edito exitosamente :)";
}
";

echo"Read
<?php
$nombreServidor="localhost";
$usuario="root";
$contraseña="";
$basededatos="guiacrud";

$conexion= new mysqli($nombreServidor,$usuario,$contraseña,$basededatos);

if($conexion->connect_error){
    echo "Hubo un error :( ";
}

$id=$_GET['id'];
$sql="SELECT * FROM producto WHERE id=$id";
$resultado= $conexion->query($sql);

if($resultado->num_rows > 0){
    while($fila=$resultado->fetch_assoc()){
        $nombre=$fila['nombre'];
        $precio=$fila['precio'];
        $cantidad=$fila['cantidad'];
    }
}
?>
";

echo"Upadte
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ClaseBaseDato";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO producto (nombre, precio, cantidad) VALUES ('$nombre', '$precio', '$cantidad')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
";
echo"Delte
<?php
$nombreServidor="localhost";
$usuario="root";
$contraseña="";
$basededatos="guiacrud";

$conexion= new mysqli($nombreServidor,$usuario,$contraseña,$basededatos);

if($conexion->connect_error){
    echo "Hubo un error :( ";
}

$sql="SELECT * FROM producto";
$resultado= $conexion->query($sql);

if($resultado->num_rows > 0){
    while($fila=$resultado->fetch_assoc()){
        echo $fila['id'] . " - " . $fila['nombre'] . " - " . $fila['precio'] . " - " . $fila['cantidad'];
        $id=$fila['id'];

        echo "<a href='formularioEditar.php?id=$id'><button>Editar</button></a>";
        echo "<a href='eliminarProducto.php?id=$id'><button>Eliminar</button></a><br>";
    }
}
?>
";
?>