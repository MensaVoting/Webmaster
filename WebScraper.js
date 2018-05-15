/*
 * Wichtig!
 * Um dieses Programm laufen zu lassen,
 * muss man Node.js und npm installiert haben
 * --> https://nodejs.org/en/
 * Weiter müssen 2 Node.js dependencies 
 * im gleichen Verzeichnis wie dieses Programm ist installiert
 * werden.
 * --> Navigiere via "cd PATH" zum Speicherort (Command line)
 * --> Installiere die dependencies (Command line) mit 
 * den folgenden commands:
 * "npm install --save cheerio"
 * "npm install --save request"
 * 
 * Das Programm kann gestartet werden, in dem man in der
 * Command line zuerst zum Verzeichnis navigiert, 
 * wo das Programm gespeichert ist und dann
 * "node ProgrammName.js" eingibt.
 * 
 */

// Greift auf die dependencies zu (wie imports ?)
var request = require('request');
var cheerio = require('cheerio');

// Webseit von der die Daten stammen
var target = "http://panther-ico.com/";

// Data Scraping
request(target, function (error, response, body) {
    // Es sollten keine errors autreten und der statusCode sollte 200 sein
    if (error) {
        console.log("Error: " + error);
    }
    // response.statusCode === 200
    // console.log("Status code: " + response.statusCode);

    // der content wird in die Variable $ geladen
    $ = cheerio.load(body);

    // Mittels jQuery Syntax können spezifische Elemente der Zielseite ausgewählt werden (select)
    // Mit der # Syntax wird hier eine ID angesteuert
    var name = $("#sponsored").text();

    // Gibt die Daten in der Console aus
    console.log("Scraped data: \n" + name);
});