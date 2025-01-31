<!-- Oppgave 1 -->
<?php
include './include/header.inc.php';
$title = "Myndighetskalkulator";
?>
<h1>Myndighetskalkulator</h1>
<hr width=100%”>

<form method="post" action="">
    <label>
        <input name="alder" type="number" min="0" placeholder="Alder" class="form-control" style="width:10%">
    </label>
    <label>
        <input name="navn" type="text" placeholder="Navn" class="form-control" style="width:10%">
    </label>
    <input name="submit" type="submit" value="Send" class="w3-circle w3-green">
</form>

<?php

$alder = $_POST['alder'];
$navn = $_POST['navn'];

if (isset($_POST['submit']) && isset($_POST['alder']) && isset($_POST['navn']) && is_numeric($_POST['alder'])) {

    //sjekker om person er myndig.
    $myndig = ($alder >= 18) ? "myndig" : "ikke myndig";

    // sjekker hvor gammel person er og tildeler aldersgruppe.
    $aldertype = "";
    switch (true) {
        case ($alder <= 11):
            $aldertype = "et barn";
            break;
        case ($alder >= 12 && $alder < 20):
            $aldertype = "tenåring";
            break;
        case ($alder >= 20 && $alder < 130):
            $aldertype = "voksen";
            break;
        case ($alder >= 130):
            $aldertype = "mest sannsynlig død";
    }
    echo $navn . " er " . $aldertype . " og er " . $myndig . ".";
}
?>
<?php include './include/footer.inc.php'; ?>