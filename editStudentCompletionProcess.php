<?php

include 'dbcon.php';
$sql="update  student_classes set percentage=?,remarks=? where id=?";
$stmt = mysqli_prepare($conn, $sql);
 
if(!empty($_POST['percentage'])){
    echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
    for($i=0;$i<count($_POST['percentage']);$i++){
       // echo $sql."</br>";
       mysqli_stmt_bind_param($stmt, "isi", $_POST['percentage'][$i],$_POST['remarks'][$i],$_POST['id'][$i]);  
      // echo $sql;
       mysqli_stmt_execute($stmt);
    }
    echo "<script>alert('Student Completion is marked'); window.location = 'classes.php'</script>"; 
}
mysqli_close($conn);

?>

