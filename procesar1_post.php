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
                        <?php 
                                if($_POST['contrasenya'] == 100){
                                        print(
                                                '<p>¡Bienvenido, <strong>'. $_POST['nombre'] .'</strong>!</p>'
                                                );

                                }
                                else{
                                   print('<p>FAIL<strong></strong>!</p>');
                                }
                         ?>
                <section>
        </main>
</body>
</html>