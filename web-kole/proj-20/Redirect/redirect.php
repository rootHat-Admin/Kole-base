<?php 

$user_loggin_in = true;

if (!$user_loggin_in) {
    header("Location: login.php");
    exit;
} else {
    echo "Juiege kir Aslan!! :)";
}

?>

<?php 
echo "Siz 3 secundtan kein betke otesiz";
header("Refresh:3 url=login2.php")
?>