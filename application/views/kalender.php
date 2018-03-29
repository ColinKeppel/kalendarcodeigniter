<h1>Kalender</h1>


<?php

$maanden = array("", "januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

$laatsemaand = '';
$laatstedag = '';

foreach ($dataview as $resultaat){
    $month = $resultaat['month'];


//    echo $resultaat['id'];
//    echo "<br>";
//    echo $resultaat['person'];
//    echo "<br>";
//    echo $maanden[$month];
//    echo "<br>";
//    echo $resultaat['day'];
//    echo "<br>";
//    echo $resultaat['year'];


if ($laatsemaand != $month){
    echo '<h1>' . $maanden[$month] . '</h1>';
}

if ($laatstedag != $resultaat['day']) {
    echo '<p>' . $resultaat['day'] . '</p>';
}

?>
    <a href="<?php  ?>">
       <?php echo $resultaat['person']; ?> (<?php echo $resultaat['year']; ?>)</a>


    <p>


        <a href="<?php echo base_url('verjaardag/verjaardag_verwijderen/' . $resultaat['id']) ?>">x</a>
    </p>
<?php




$laatsemaand = $resultaat['month'];
$laatstedag = $resultaat['day'];

}
?>



<a href="verjaardag/verjaardag_toevoegen">Voeg nieuwe toe</a>



