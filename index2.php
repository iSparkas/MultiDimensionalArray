<?php 
// note this can be done in really easier way just putting foreach in table, but this adds more flexibility to expand the system later.
	
	// create get functions for flexibility
	function getCity($key){global $multiCity; return $multiCity[$key]['City'];}
	function getCountry($key){global $multiCity; return $multiCity[$key]['Country'];}
	function getContinent($key){global $multiCity; return $multiCity[$key]['Continent'];}

	
	// set up array
	$multiCity = array(
		array('City'=>'Tokyo','Country' => 'Japan', 'Continent'=> 'Asia'),
		array('City'=>'Mexico City','Country' => 'Mexico', 'Continent'=> 'North America'),
		array('City'=>'New York City','Country' => 'USA', 'Continent'=> 'North America'),
		array('City'=>'Mumbai','Country' => 'India', 'Continent'=> 'Asia'),
		array('City'=>'Seul','Country' => 'Korea', 'Continent'=> 'Asia'),
		array('City'=>'Shanghai','Country' => 'China', 'Continent'=> 'Asia'),
		array('City'=>'Lagos','Country' => 'Nigeria', 'Continent'=> 'Africa'),
		array('City'=>'Buenos Aires','Country' => 'Argentina', 'Continent'=> 'South America'),
		array('City'=>'Cairo','Country' => 'Egipt', 'Continent'=> 'Africa'),
		array('City'=>'London','Country' => 'UK', 'Continent'=> 'Europe'),
	);
	
?>
<!DOCTYPE HTML>
<HTML>
<head>
	<style type="text/css">
	td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
	th {text-align:center;}
	table {border-collapse: collapse; border: 1px solid black;width:70%;margin:0px auto;}
	</style>
	<title>Multi-dimensional Array</title>
</head>
<body>
<table>
<tr>
	<td>
		City
	</td>
	
	<td>
		Country
	</td>
	
	<td>
		Continent
	</td>
<?php 
	$i = 0;
	// don't wanna use while since will be waste of resources so simply use do , with a tricky -1 (since DO loop repeats count(multiCity) +1 times)
	do{
		echo "<tr>";
		echo "<td>".getCity($i)."</td>";
		echo "<td>".getCountry($i)."</td>";
		echo "<td>".getContinent($i)."</td>";
		echo "</tr>";
	}while($i++ < count($multiCity) -1)

?>
</table>
</body>
</HTML>