<!-- PRACA MOCNO ZAINSPIROWANA OD KOLEGI EMILA SIKORSKIEGO  -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title> 
    <link rel="stylesheet" href="styl5.css">
</head> 
<body>
    
<div class="gorny-lewy"> 
    <img src="logo1.png" alt="Mój Kalendarz"> 
</div> 
<div class="gorny-prawy"> 
    <h1>Kalendarz</h1> 
    <p>miesiąc: lipiec, rok:2020</p> 
</div>
<main> 
    <?php 
    require("db.php"); 

    $qr = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'lipiec'"; 
    $result = $conn->query($qr); 
    while($row = $result->fetch_assoc()) 
    { 
        $data = $row["dataZadania"]; 
        $miesiac = $row["miesiac"]; 
        $wpis = $row["wpis"]; 

        echo "<div>"; 
        echo "<h6>$data, $miesiac</h6>"; 
        echo "<p>$wpis</p>"; 
        echo "</div>"; 
    }
    ?>
</main>
<?php 

if(isset($_POST["wydarzenie"])) 
{ 
    $wydarzenie = $_POST["wydarzenie"]; 
    $qr = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'"; 
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