<?php 
$user = "Aslan";

echo "<script> 
    alert('Salem, $user!'); 
    </script>";

echo "<hr>";

$color = "cornsilk";
echo "<script> document.body.style.background = '$color'; </script>";

?>

<?php 
$data = ["Aslan", "Rasul", "Ismat"];
?>

<script>
    let students = <?= json_encode($data) ?>;
    students.forEach(s=>document.write(s + "<br>"));
</script>


<?php 
$isAdmin = true;

if($isAdmin) {
    echo "<script> console.log('Kosh keldiniz, admin') </script>";
} else {
    echo "<script> console.log('Siz admin emessiz') </script>";
}
?>

<?php 
$massage = "Sabaq satti otti!!!";

echo "

<script>
document.addEventListener('DOMContentLoaded', ()=> {
    const el = document.createElement('div');
    el.innerText = '$massage';
    el.style.color = 'red';
    document.body.appendChild(el);
});
</script>

";
?>


<?php 

$sum = 150;

echo "<script>
    function showTotal() {
        alert('Zhalpy summa: $sum tg');
    }
</script>";

?>

<button onclick="showTotal()">Natijesin koru</button>