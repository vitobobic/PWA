<?php
// Inicijalna vrijednost fonta ako ništa nije poslano
$fontSize = "16px"; 

// Provjeravamo je li forma poslana (koristimo isset da izbjegnemo greške)
if (isset($_POST['promijeni'])) {
    
    // Provjeravamo je li checkbox označen i je li upisan broj
    if (isset($_POST['potvrda']) && !empty($_POST['velicina'])) {
        $velicina = $_POST['velicina'];
        $fontSize = $velicina . "px";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>PHP Vježba - Font Size</title>
    <style>
        /* Dinamički postavljamo veličinu fonta za cijelo tijelo stranice */
        body {
            font-size: <?php echo $fontSize; ?>;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .forma-kontejner {
            border: 1px solid #ccc;
            padding: 15px;
            width: 300px;
        }
    </style>
</head>
<body>

    <div class="forma-kontejner">
        <form method="POST" action="">
            <label for="velicina">Upišite željenu veličinu slova:</label><br>
            <input type="number" name="velicina" id="velicina" required>
            
            <hr>
            
            <p>Potvrdite želite li promijeniti veličinu slova:</p>
            <input type="checkbox" name="potvrda" id="potvrda">
            <label for="potvrda">Želim promijeniti veličinu</label>
            
            <hr>
            
            <button type="submit" name="promijeni">PROMIJENI</button>
        </form>
    </div>

   

</body>
</html>