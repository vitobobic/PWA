<?php
$prikaziTablicu = false;
if (isset($_POST['napravi_tablicu'])) {
    $stupci = $_POST['stupci'];
    $redovi = $_POST['redovi'];
    $prikaziTablicu = true;
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>PHP Tablica</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 100%;
        }
        td {
            border: 1px solid black;
            height: 30px;
            text-align: center;
        }
        .forma-kontejner {
            border: 1px solid #ccc;
            padding: 15px;
            width: 350px;
            font-family: sans-serif;
        }
        select, button {
            margin-top: 10px;
            width: 100%;
            padding: 5px;
        }
    </style>
</head>
<body>

    <div class="forma-kontejner">
        <form method="POST" action="">
            <label>Odaberite broj stupaca tablice:</label>
            <select name="stupci">
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
            </select>

            <br><br>

            <label>Odaberite broj redova tablice:</label>
            <select name="redovi">
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
            </select>

            <button type="submit" name="napravi_tablicu">Napravi tablicu</button>
        </form>
    </div>

    <?php if ($prikaziTablicu): ?>
        <h3>Ispis tablice:</h3>
        <table>
            <?php
            
            for ($i = 0; $i < $redovi; $i++) {
                echo "<tr>";
               
                for ($j = 0; $j < $stupci; $j++) {
                    echo "<td>&nbsp;</td>"; 
                }
                echo "</tr>";
            }
            ?>
        </table>
    <?php endif; ?>

</body>
</html>