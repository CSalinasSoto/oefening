<?php
//print_r($_POST);
//
//
//if($_POST['name'] == ""){
//    echo "je moet wel je naam in komen te vullen <br>";
//}else{
//    echo "naam ".ucfirst(strtolower($_POST["name"]))."<br>";
//}
//
//if($_POST['number'] == ""){
//    echo "je moet wel aantal fouten in te vullen <br>";
//}elseif($_POST['number'] >= 100){
//    echo "je kan niet meer dan 99 fouten hebben";
//}else{
//    echo "aantal fouten ".$_POST["number"]."<br>";
//}
//
//echo "<a href='1a.php'>Terug naar formulier</a>";
//?>

<?php
$name = $_POST['name'];
$number = $_POST['number'];
$norm = 10-($number/$_POST['norm']);


if(empty($name) && empty($number)){
    echo "je moet ze wel allebei invullen";
}elseif(empty($name)){
    echo "je moet wel je naam invullen";
}elseif(empty($number) && $number > 0 ){
    echo "je moet wel de fouten invullen";
}elseif(strlen($number)>2){
    echo "het zijn te veel fouten";
}else{
    echo "naam: ".ucfirst(strtolower($name));
    echo "<br>aantal fouten: ".$number;
    echo "<br>je cijfer is: ".$norm;
}

echo "<br><a href='1a.php'>Terug naar formulier</a>";
?>

