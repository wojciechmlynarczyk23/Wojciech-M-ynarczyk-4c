<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<main> 
    <?php 
    require("connect.php"); 

    $qr = "SELECT dataZadania, miesiąc, wpis FROM 'zadania' WHERE miesiac = 'lipiec'"; 
    $result = $conn->query($qr); 
    while($row = $result->fetch_assoc()) 
    { 
        $data = $row["dataZadania"]; 
        $miesiac = $row["miesiac"]; 
        $wpis = $row["wpis"]; 

        echo "<div>"; 
        echo "<h6>$data, $miesiac</h6>"; 
        echo "<p>"$wpis"</p>"; 
        echo "</div>"; 
    }
    ?>
</main>
<?php 
require("connect.php"); 
if(isset($_POST["wydarzenie"])) 
{ 
    $wydarzenie = $_POST["wydarzenie"]; 
    $qr = "UPDATE zadanie SET wpis = '$wydarzenie' WHERE dataZadania = "2020-07-130""; 
    $conn->query($qr); 
    $conn->close(); 

}

?>
<footer> 
    <form action="kalendarz.php" method="POST"> 
        <label for="wpis">dodaj wpis: <input type="text" name="wydarzenie"><button type="submit">Dodaj</button></label>
    </form>
</footer>
</body>
</html>