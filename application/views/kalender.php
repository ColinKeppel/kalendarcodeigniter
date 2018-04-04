<?php
echo link_tag('css/style.css');
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
    $laatstedag = '';
}

if ($laatstedag != $resultaat['day']) {
    echo '<h2>' . $resultaat['day'] . '</h2>';
}

?>
   <p> <a href="<?php echo base_url("verjaardag/verjaardag_aanpassen/" . $resultaat['id']) ?>">
       <?php echo $resultaat['person']; ?> (<?php echo $resultaat['year']; ?>)</a>




      <a onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1" href="<?php echo base_url('verjaardag/verjaardag_verwijderen/' . $resultaat['id']) ?>">x</a></p>

<?php




$laatsemaand = $resultaat['month'];
$laatstedag = $resultaat['day'];


}
?>
<script>
    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>


<p>
<a href="verjaardag/verjaardag_toevoegen">Voeg nieuwe toe</a>

</p>

