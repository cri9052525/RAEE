<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella RAEE</title>
</head>

<body>
    <?php
    include 'connessione.php';

    $sql = "SELECT * FROM `rifiuti`";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_row($result)) {
        echo $row[1];
    }

    ?>
</body>

</html>