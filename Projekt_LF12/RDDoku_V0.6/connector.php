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
$ptname = $_POST["ptname"];
$ptvorname = $_POST["ptvorname"];
$ptbday = $_POST["ptbday"];
$ptgender = $_POST["ptgender"];
$einsatznr = $_POST["einsatznr"];
$einsatzort = $_POST["einsatzort"];
$einsatzdatum = $_POST["einsatzdatum"];
$alarmnotarzt = $_POST["alarmnotarzt"];
$transportziel = $_POST["transportziel"]


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
