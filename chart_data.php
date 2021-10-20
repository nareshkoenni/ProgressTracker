<?php
 include 'dbcon.php';
 $sqlQuery = "SELECT c.class_name, avg(sc.percentage) FROM student_classes sc, classes c where sc.class_id=c.id GROUP BY sc.class_id";
$resultset = mysqli_query($conn, $sqlQuery) or die("database error:". mysqli_error($conn));
$population = "{";
$count=0;
while( $records = mysqli_fetch_array($resultset) ) {
	$population.='"'.$records[0].'":'.$records[1].',';  
        $count++;
}
if($count==0){
    $population.='"'.NoData.'":0,';  
}
$population=rtrim($population,",");
$population.="}";
$data[] = $population;
echo json_encode($data);
mysqli_close($conn);
exit;
?>