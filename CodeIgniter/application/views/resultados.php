<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Resultados</title>
        <meta charset="utf-8" />
    </head>

    <body>
        <?php if(isset($matches)): ?>
        <?= var_dump($matches); ?>
        <?php else: ?>
            <h2>No se encontraron resultados</h2>
        <?php endif; ?>
    </body>