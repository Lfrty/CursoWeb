<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Procesar form</title>
</head>
<body>
        <header>
                <hr>
                        <h1>Resultado del formulario procesado</h1>
                <hr>
        </header>
        <main>
                <section>
                        <p> Hola <strong><?php print($_GET['nombre']) ?></strong>. ¿Dices que tienes <strong><?php print($_GET['edad']) ?></strong> años?
                        <?php 
                                if($_GET['edad'] >= 100){
                                        print(
                                                '<p>¿¡<strong>'. $_GET['edad'] .'</strong>! Años? No creo que estés para estos trotes ;) </p>'
                                                );

                                }
                         ?>
                <section>
        </main>
</body>
</html>