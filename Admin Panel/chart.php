<?php
 
$dataPoints = array( 
	array("y" => 443373.64, "label" => "Germany" ),
	array("y" => 442435.94, "label" => "France" ),
	array("y" => 441842.55, "label" => "China" ),
	array("y" => 441828.55, "label" => "Russia" ),
	array("y" => 441039.99, "label" => "Switzerland" ),
	array("y" => 44765.215, "label" => "Japan" ),
	array("y" => 44612.453, "label" => "Netherlands" )
);

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"cto");
$test=array();
$count=0;

$res = mysqli_query($link, " SELECT * FROM `item` " );
while ($row=mysqli_fetch_array($res)) {
    $test[$count]["label"] = $row["name"];
    $test[$count]["y"] = $row["price"];
    $count=$count+1;
    
}
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Gold Reserves"
	},
	axisY: {
		title: "Gold Reserves (in tonnes)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>       