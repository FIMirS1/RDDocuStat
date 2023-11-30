<?php
// Datenbankverbindung herstellen
$servername = "127.0.0.1"; // Ihr Datenbank-Host
$username = "root"; // Ihr Datenbank-Benutzername
$password = ""; // Ihr Datenbank-Passwort
$dbname = "rd_stat"; // Ihr Datenbank-Name

$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// Benutzereingaben aus dem Formular abrufen
<<<<<<< HEAD:Projekt_LF12/connector.php
$ptname = $_POST["patientname"];
$ptvorname = $_POST["patientvorname"];
$ptbday = $_POST["patientbday"];
$ptgender = $_POST["ptgender"]
$einsatznr = $_POST["einsatznr"];
$einsatzort = $_POST["einsatzort"];
$einsatzdatum = $_POST["einsatzdatum"]
$einsatzadresse = $_POST["einsatzadresse"]
=======
$ptname = $_POST["ptname"];
$ptvorname = $_POST["ptvorname"];
$ptbday = $_POST["ptbday"];
$ptgender = $_POST["ptgender"];
$einsatznr = $_POST["einsatznr"];
$einsatzort = $_POST["einsatzort"];
$einsatzdatum = $_POST["einsatzdatum"];

>>>>>>> e71e60b0ee7376271a98b174092600b63652da98:RDDoku_V0.1/connector.php


// SQL-Abfrage erstellen, um Daten einzufügen
$sql = "INSERT INTO Dokumentation (Familienname, Vorname, Geburtstag, Geschlecht, Einsatznummer, Einsatzort, Datum) VALUES ('$ptname', '$ptvorname', '$ptbday', '$ptgender', '$einsatznr', '$einsatzort', '$einsatzdatum')";

if ($conn->query($sql) === TRUE) {
    echo "Daten erfolgreich in die Datenbank eingefügt.";
} else {
    echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

// Datenbankverbindung schließen
$conn->close();
?>
