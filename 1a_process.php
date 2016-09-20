<?php
//print_r($_POST);


if($_POST['name'] == ""){
    echo "je moet wel je naam in komen te vullen <br>";
}else{
    echo "naam ".ucfirst(strtolower($_POST["name"]))."<br>";
}

if($_POST['number'] == ""){
    echo "je moet wel aantal fouten in te vullen <br>";
}elseif($_POST['number'] >= 100){
    echo "je kan niet meer dan 99 fouten hebben";
}else{
echo "aantal fouten ".$_POST["number"]."<br>";
}

echo "<a href='1a.php'>Terug naar formulier</a>";
?>

