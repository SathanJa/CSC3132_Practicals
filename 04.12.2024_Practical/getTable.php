<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Name</title>
</head>
<body>
<?php
//get the db connection file
require_once 'dbconf.php';
require_once 'myfunc.php';
//PrintTable("teacher",$connect);
//echo $_SERVER['PHP_SELF']; //get the file name
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		<table>
			<tr>
				<td align="right">Name:</td>
				<td><input type="text" name="name" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Search" /></td>
			</tr>
		</table>

<?php
if (isset($_GET['name']) && $_GET['name'] != '') {
	SearchData($_GET['name'],$connect);
}
	
?>
</body>
</html>
