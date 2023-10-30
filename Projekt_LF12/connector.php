<?php
// Datenbankverbindung herstellen
$servername = "localhost"; // Ihr Datenbank-Host
$username = "root"; // Ihr Datenbank-Benutzername
$password = "root"; // Ihr Datenbank-Passwort
$dbname = "rd_stat"; // Ihr Datenbank-Name

$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// Benutzereingaben aus dem Formular abrufen
$ptname = $_POST["patientname"];
$ptvorname = $_POST["patientvorname"];
$ptbday = $_POST["patientbday"];
$einsatznr = $_POST["einsatznr"]


// SQL-Abfrage erstellen, um Daten einzufügen
$sql = "INSERT INTO IhreTabelle (Vorname, Nachname, Email) VALUES ('$vorname', '$nachname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Daten erfolgreich in die Datenbank eingefügt.";
} else {
    echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

// Datenbankverbindung schließen
$conn->close();
?>
