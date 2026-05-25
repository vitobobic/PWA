<?php
$host = 'localhost';
$db   = 'skola_baza'; 
$user = 'root';       
$pass = '';           
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
);

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Konekcija na bazu nije uspjela: " . $e->getMessage());
}

$poruka = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $ime = isset($_POST['ime']) ? $_POST['ime'] : '';
    $prezime = isset($_POST['prezime']) ? $_POST['prezime'] : '';
    $oib = isset($_POST['oib']) ? $_POST['oib'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    if (!empty($ime) && !empty($prezime) && !empty($oib) && !empty($email)) {
        try {
            $sql = "INSERT INTO Zaposlenik (ime_zaposlenika, prezime_zaposlenika, OIB, e_mail) 
                    VALUES (:ime, :prezime, :oib, :email)";
            
            $stmt = $pdo->prepare($sql);
            
           
            $stmt->execute(array(
                'ime' => $ime,
                'prezime' => $prezime,
                'oib' => (int)$oib, 
                'email' => $email
            ));

            $poruka = "<p style='color: green; font-weight: bold;'>Uspjeh! Zaposlenik je spremljen u bazu.</p>";
        } catch (\PDOException $e) {
            $poruka = "<p style='color: red;'>Greška u bazi: " . $e->getMessage() . "</p>";
        }
    } else {
        $poruka = "<p style='color: red;'>Sva polja moraju biti ispunjena!</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
</head>
<body>

    <?php echo $poruka; ?>

    <form action="" method="POST">
        <label for="ime">Ime</label>
        <br />
        <input name="ime" type="text" required/>
        <br />
        <label for="prezime">Prezime</label>
        <br />
        <input name="prezime" type="text" required/>
        <br />
        <label for="oib">OIB</label>
        <br />
        <input name="oib" type="number" required/>
        <br />
        <label for="email">E-mail</label>
        <br />
        <input name="email" type="email" required/>
        <br />
        <input name="submit" type="submit" value="Pošalji" /> 
    </form>

</body>
</html>