<?php
// Definizione delle costanti per le formazioni delle squadre
define("FORMAZIONE_JUVENTUS", array("Buffon", "Chiellini", "Bonucci", "De Ligt", "Cuadrado", "Arthur", "McKennie", "Chiesa", "Dybala", "Morata", "Ronaldo"));
define("FORMAZIONE_INTER", array("Handanovic", "Skriniar", "de Vrij", "Bastoni", "Hakimi", "Barella", "Brozovic", "Vidal", "Perisic", "Martinez", "Lukaku"));
define("FORMAZIONE_MILAN", array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"));
define("FORMAZIONE_ROMA", array("Lopez", "Mancini", "Ibanez", "Karsdorp", "Spinazzola", "Veretout", "Pellegrini", "Mkhitaryan", "Pedro", "Mancini", "Dzeko"));
// Array delle squadre di Serie A e della relativa formazione utilizzando le costanti
$squadre = array(
    "Juventus" => FORMAZIONE_JUVENTUS,
    "Inter" => FORMAZIONE_INTER,
    "Milan" => FORMAZIONE_MILAN,
    "Roma" => FORMAZIONE_ROMA
);

// Ciclo attraverso le squadre e le relative formazioni
foreach ($squadre as $squadra => $formazione) {
    echo "Squadra: $squadra <br>";
    echo "Formazione: <br>";
    foreach ($formazione as $giocatore) {
        echo "- $giocatore <br>";
    }
    echo "<br>";
}

// Array delle partite di Serie A utilizzando le costanti per le formazioni delle squadre
$partite = array(
    "Partita 1" => array(
        "Squadra Casa" => "Juventus",
        "Formazione Casa" => FORMAZIONE_JUVENTUS,
        "Squadra Ospite" => "Inter",
        "Formazione Ospite" => FORMAZIONE_INTER,
    ),
    "Partita 2" => array(
        "Squadra Casa" => "Milan",
        "Formazione Casa" => FORMAZIONE_MILAN,
        "Squadra Ospite" => "Roma",
        "Formazione Ospite" => FORMAZIONE_ROMA // Assicurati di definire anche questa costante
    )
);

// Ciclo attraverso le partite e le relative squadre con le formazioni
foreach ($partite as $partita => $dettagli) {
    echo "Partita: $partita <br>";
    echo "Squadra Casa: {$dettagli['Squadra Casa']} <br>";
    echo "Formazione Casa: <br>";
    foreach ($dettagli['Formazione Casa'] as $giocatore_casa) {
        echo "- $giocatore_casa <br>";
    }
    echo "Squadra Ospite: {$dettagli['Squadra Ospite']} <br>";
    echo "Formazione Ospite: <br>";
    foreach ($dettagli['Formazione Ospite'] as $giocatore_ospite) {
        echo "- $giocatore_ospite <br>";
    }
    echo "<br>";
}
?>