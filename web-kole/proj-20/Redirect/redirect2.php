
<?php 
echo "
<p style='color: red;
font-weight: bold;
font-size: 50px;
text-align: center;
width: 100%;
height: 100%;
display: flex;
justify-content: center;
align-items: center;'> 

Сіз 3 секундтан кейін бетке өтесіз

</p>
";
header("Refresh: 3; url=login2.php");
exit;
?>
