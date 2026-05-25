<?php
$veza = mysqli_connect("localhost", "root", "", "skola_baza");

$rezultat = mysqli_query($veza, "SELECT * FROM korisnik");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prikaz Korisnika</title>
    <style>
        
        table { border-collapse: collapse; width: 100%; font-family: sans-serif; }
        th, td { border: 1px solid black; padding: 8px; }
        th { background-color: #f2f2f2; }
        
        .plava { background-color: blue; color: white; }
        .crvena { background-color: red; color: black; }
    </style>
</head>
<body>

    <h2>Popis korisnika</h2>
    <table>
        <tr>
            <th>id</th>
            <th>ime</th>
            <th>prezime</th>
            <th>spol</th>
            <th>telefon</th>
            <th>email</th>
            <th>godine</th>
            <th>hobi</th>
        </tr>

        <?php
       
        while ($red = mysqli_fetch_assoc($rezultat)) {
            
           
            if ($red['spol'] == 'M') {
                $boja = "plava";
            } else {
                $boja = "crvena";
            }

           
            echo "<tr class='$boja'>";
                echo "<td>" . $red['id'] . "</td>";
                echo "<td>" . $red['ime'] . "</td>";
                echo "<td>" . $red['prezime'] . "</td>";
                echo "<td>" . $red['spol'] . "</td>";
                echo "<td>" . $red['telefon'] . "</td>";
                echo "<td>" . $red['email'] . "</td>";
                echo "<td>" . $red['godine'] . "</td>";
                echo "<td>" . $red['hobi'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>