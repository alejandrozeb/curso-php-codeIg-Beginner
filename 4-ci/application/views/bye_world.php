<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BYE-WORLD</title>
</head>
<body>
    HELLO THERE!, Bye World.

    <?php
    //identifica el tercer segmento de la url
    $data = $this->uri->segment(3);
    echo $data;
    ?>
</body>
</html>