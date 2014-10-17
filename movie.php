<html>

<body>

<?php 
$movie=$_POST['movie']; 
$category=$_POST['category']; 

$movies = array(
	"comedy" => array("The Hangover","Knocked Up","Due Date"),
	"drama" => array("The Shawshank Redemption","The Green Mile","Requiem for a Dream"),
	"horror" => array("Halloween","The Conjuring","The Shining")
	);
$arrlength=count($movies);
$exists=false;

for($x=0;$x<$arrlength;$x++) {
  $pos = strpos($movies[$category][$x], $movie);
  if ($pos !== false) {
    echo $movies[$category][$x];
	echo "<br>";
	$exists=true;
	}
}

if ($exists == false) {
	echo "No movies found";
	}
?>

</body>
</html> 