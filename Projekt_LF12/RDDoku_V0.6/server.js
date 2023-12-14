const express = require('express');
const mysql = require('mysql');
const app = express();
const port = 3000;

// Verbindung zur MySQL-Datenbank herstellen
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'root',
  database: 'rd_doku'
});

connection.connect();

// Endpunkt zum Abrufen der Daten
app.get('/chart-data', (req, res) => {
  const query = `
    SELECT zielkrankenhaus, COUNT(*) AS count
    FROM dokumentation
    GROUP BY zielkrankenhaus
  `;

  connection.query(query, (error, results, fields) => {
    if (error) throw error;

    res.json(results);
  });
});

app.listen(port, () => {
  console.log(`Server is running on http://localhost:${port}`);
});
