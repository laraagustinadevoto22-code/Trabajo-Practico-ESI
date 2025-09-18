<?php
// logica backend
// $_SERVER["REQUEST_METHOD"]

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valor = $_POST["palabra"];

    //var_dump($valor);

    $mensajes = [
        "amistad" => [
            "mensaje" => "La amistad es una relación afectiva y de confianza mutua entre dos o más personas, caracterizada por el cuidado, el apoyo, la honestidad y el respeto. Es una conexión emocional que se desarrolla a través del tiempo y la experiencia compartida, y que suele estar basada en intereses comunes, valores y empatía. La amistad también implica lealtad y la disposición a disfrutar y superar juntos las alegrías y dificultades de la vida.",
            "clase" => "success",
            "img" => "1.jpg",
            "alunno" => "Lara",
        ],
        "respeto" => [
            "mensaje" => "El respeto es una actitud de reconocimiento y consideración hacia las cualidades, derechos, opiniones o sentimientos de otras personas. Es valorarse a uno mismo y a los demás, mostrando cortesía, tolerancia y empatía. El respeto implica aceptar las diferencias y actuar con educación y juicio, promoviendo relaciones armoniosas y justas en la convivencia social.",
            "clase" => "warning",
            "img" => "2.jpg",
            "alunno"=> "Miguel",
        ],
        "autocuidado" => [
            "mensaje" => "El autocuidado es un conjunto de prácticas cotidianas y decisiones que una persona realiza para promover, mantener y mejorar su salud física y mental, prevenir enfermedades y gestionar el estrés, con o sin apoyo profesional. Implica desarrollar herramientas y estrategias para el bienestar personal, como alimentación saludable, ejercicio, descanso adecuado, conexión social, gestión emocional y establecimiento de límites sanos. ",
            "clase" => "primary",
            "img" => "3.webp",
            "alunno" => "Clara",
        ],
        
    ];

    if (array_key_exists($valor, $mensajes)) {
        $mensaje = $mensajes[$valor]["mensaje"];
        $clase = $mensajes[$valor]["clase"];
        $imagen = $mensajes[$valor]["img"];
        $alunno = $mensajes[$valor]["alunno"];
    } else {
        $mensaje = 'elija la palabra predeterminada';
        $clase = 'muted';
    }
}
/*  echo "<pre>";

var_dump($mensaje);
var_dump($clase);
var_dump($imagen);
echo "</pre>"; */
?>
<?php require "partials/header.php" ?>

<div class="container mt-5">
    <div class="col-5 mx-auto">
        <h1 class="mb-4 fs-3">Palabra: <?= $valor ?> </h1>
        <h2 class="mb-4 fs-3">Alunno: <?= $alunno ?> </h2>
        <div class="alert alert-<?= $clase ?> " role="alert">
            <?= $mensaje ?>
        </div>
        <img width="400px" src="img/<?= $imagen ?>" alt="">
        <a href="index.php" class="mt-3 btn btn-<?= $clase ?>">volver</a>


    </div>



</div>


<?php require "partials/footer.php" ?>