<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAEE</title>
</head>

<body>
    <form method="post">
        <input type="text" name="modello" placeholder="modello">
        <input type="text" name="marca" placeholder="marca">
        <input type="number" name="anno" placeholder="anno">
        <div>
        <label for="gruppo">gruppo</label>
        <select name="gruppo">
            <option value="1">R1</option>
            <option value="2">R2</option>
            <option value="3">R3</option>
            <option value="4">R4</option>
            <option value="5">R5</option>
        </select>
        <input type="submit">
        </div>
    </form>

    <?php
    error_reporting(0);
    include "connessione.php";
    
    $modello = $_POST["modello"];
    $marca = $_POST["marca"];
    $anno = $_POST["anno"];
    $gruppo = $_POST["gruppo"]; 


    
    $sql = "INSERT INTO `rifiuti` (`id`, `Modello`, `Marca`, `Anno`, `Gruppo`) VALUES (NULL, '$modello', '$marca', '$anno', '$gruppo')";
    if(isset($_POST["modello"])&&isset($_POST["marca"])&&isset($_POST["anno"])&&isset($_POST["gruppo"])){
        mysqli_query($conn,$sql);
    }

    
    // header("location:index.php")
    ?>


</body>

</html>