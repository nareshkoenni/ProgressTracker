<?php
$classid=$_GET["classid"];

include 'dbcon.php';
$sql="insert into  student_classes(student_id,class_id,percentage,remarks) values(?,?,?,?)";
$stmt = mysqli_prepare($conn, $sql);
 
if(!empty($_POST['students'])){
    echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
    foreach($_POST['students'] as $selected){
       // echo $sql."</br>";
       mysqli_stmt_bind_param($stmt, "iiis", $selected,$classid,$p,$rem);  
       $p=0;
       $rem="NA";
      // echo $sql;
       mysqli_stmt_execute($stmt);
    }
    echo "<script>alert('Students are assigned'); window.location = 'classes.php'</script>"; 
}
mysqli_close($conn);

?>

