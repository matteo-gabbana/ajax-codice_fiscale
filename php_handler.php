<?php
// Ottenere il nome dal POST
$cf = $_POST['cf'];

$cifre_anno = substr($cf, 6, 2);

if (substr($cifre_anno, 0, 1) === "0") {
    $anno = "20" . $cifre_anno;
} else {
    $anno = "19" . $cifre_anno;
}

// Creare la risposta HTML
echo "<h3>Benvenuto! 👋</h3>";
echo "<p>La tua richiesta è stata ricevuta alle ore " . date('H:i:s') . "</p>";
echo "<p>Il tuo anno di nascita è: " . $anno . "</p>";
?>