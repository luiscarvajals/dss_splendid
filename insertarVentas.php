<?php
include 'bdd.php';

// Verificar si se recibieron los datos del formulario
if(isset($_POST['Fecha']) && isset($_POST['Cantidad']) && isset($_POST['Total']) && isset($_POST['sucursal']) && isset($_POST['producto'])){
    $producto = $_POST["producto"];
    $fecha = date('Y-m-d', strtotime($_POST['Fecha']));
    $cantidad = $_POST["Cantidad"];
    $total = $_POST["Total"];
    $sucursal = $_POST["sucursal"];

    // Validar y sanitizar los datos del formulario si es necesario

   // Insertar datos en la base de datos
    $query = "INSERT INTO ventas (id_sucursal, fecha_venta, id_producto, cantidad, total) VALUES ('$sucursal', '$fecha', '$producto', '$cantidad', '$total')";

    // Ejecutar la consulta
    if(mysqli_query($conexion, $query)){
        // La inserción fue exitosa
        echo "Datos insertados correctamente.";
    } else{
        // Error en la inserción
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
} else {
    echo "No se recibieron todos los datos del formulario.";
}

// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>
