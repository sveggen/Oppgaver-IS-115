<!-- Oppgave 1 -->
<?php
include './include/header.inc.php';
$title = "Matriseinnhold";
?>
    <h1>Matriseinnhold</h1>
    <hr width=100%”>
<?php
$heltall = array(
    0=>"hei",
    3=>"på",
    5=>"deg",
    7=>"hvordan",
    8=>"går",
    15=>"det?");
    ?>
   
   <h2>Print_r</h2>
<p>
<?php
// skriver ut innholdet i matrisen
print_r($heltall); ?>
</p>
</br>

<h2>For-each</h2>
<?php
//skriver ut innholdet i matrisen ved bruk av en foreach-loop
foreach($heltall as $key => $value){
    echo"<p> key: {$key} | value: {$value} </p>";
}

include './include/footer.inc.php'; ?>