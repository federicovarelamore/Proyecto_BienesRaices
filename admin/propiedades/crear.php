<?php

// Base de datos

require '../../includes/config/database.php';

$db = conectarDB();

// Arreglo con mensaje de errores
$errores = [];


// Ejecutar el código después de que el usuario envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";;

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];

    if (!$titulo) {
        $errores[] = "Debes añadir un título";
    }

    if (!$precio) {
        $errores[] = "El precio es Obligatorio";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "La descripción debe tener al menos 50 caracteres";
    }

    if (!$habitaciones) {
        $errores[] = "El número de habitaciones es Obligatorio";
    }

    if (!$wc) {
        $errores[] = "El número de baños es Obligatorio";
    }

    if (!$estacionamiento) {
        $errores[] = "El número de lugares de estacionamiento es Obligatorio";
    }

    if (!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }
    // echo "<pre>";
    // var_dump($errores);
    // echo "</pre>";;

    // Revisar que el arreglo de errores este vacio
    if (empty($errores)) {

        //Insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId ) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId' )";

        // echo $query;

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            echo "Insertado Correctamente";
        }
    }
}

require '/laragon/www/Proyecto_BienesRaices/includes/funciones.php';


incluirTemplate('header');



?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>


    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo ($error); ?>
        </div>
    <?php endforeach; ?>




    <form class="formulario" method="POST" action="/admin/propiedades/crear.php ">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Ingrese el título de la propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Ingrese el precio de la propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion"></textarea>


        </fieldset>

        <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" name="habitaciones" id="habitaciones" placeholder="Ej: 3" min="1" max="13">

            <label for="wc">Baños:</label>
            <input type="number" name="wc" id="wc" placeholder="Ej: 3" min="1" max="13">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" name="estacionamiento" id="habitaciones" placeholder="Ej: 3" min="1" max="13">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedor">
                <option value=""> -- Seleccione --</option>
                <option value="1">Federico</option>
                <option value="2">Ignacio</option>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>

</main>

<?php incluirTemplate('footer'); ?>

</body>

</html>