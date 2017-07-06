<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sorting Multidimensional Arrays</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
/*This page create a multidimenstional array
*of names and grades.
*The array is then sorted twice:
*once by name and once by grade.
*/

//crate the array
//Array structure:
//studentID=>array('name'=>'Name','grade'=>XX.X)

$student=array(
	256=>array('name'=>'Jon','grade'=>98.5),
	2=>array('name'=>'Vance','grade'=>85.1),
	9=>array('name'=>'Stephen','grade'=>94.0),
	361=>array('name'=>'Steve','grade'=>85.1),
	68=>array('name'=>'Rob','grade'=>74.6)
	);

//Name sorting function:

function name_sort($x,$y){
	return strcasecmp($x['name'], $y['name']);
}

//Grade sorting function:
//Sort in DESCENDING order

function grade_sort($x,$y){
	return ($x['grade']<$y['grade']);
}

//print the array as is:

echo '<h2>Array As Is</h2><pre>'.print_r($student,1).'</pre>';

//sort by name:

uasort($student, 'name_sort');
echo '<h2>Array Sorted By Name</h2><pre>'.print_r($student,1).'</pre>';

//sort by grade:

uasort($student, 'grade_sort');
echo '<h2>Array Sorted By Grade</h2><pre>'.print_r($student,1).'</pre>';
?>

</body>
</html>