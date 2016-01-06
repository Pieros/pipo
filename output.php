<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<table border="1">
	<thead>
		<tr>
			<td>
				latitude
			</td>
			<td>
				longtitude
			</td>
			<td>
				location
			</td>
		</tr>
	</thead>
	<tbody>
<?php
$myfile = fopen("logs.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(($line=fgets($myfile))!="") {
  if ($line!= null){
  	echo '<tr>';
  	$params = explode(",", $line);
  	foreach ($params as &$value) {
    	echo '<td>';
    	echo $value;
    	echo '</td>';
	}
	echo '</tr>';
	}


}
fclose($myfile);
?>
</tbody>
</table>
</body>
</html>
