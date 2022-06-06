<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
$con = mysqli_connect("localhost","y8u9i","1234","sungkyul");
$name = $_POST['a1'];
$name = addslashes($name);
$mess = $_POST['a2'];
$mess = addslashes($mess); $sql = "insert into tbk (
name,
mess
)"; $sql = $sql. "values (
'$name',
'$mess'
)";
if($con
->query($sql)){ 
echo '<script>alert("success inserting")</script>'; 
}else{ 
echo '<script>alert("fail to insert sql")</script>';
}
mysqli_close($mysqli);
?>
<script>
location.href = "simple.html";
</script>


</html>