<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>vikas</h1>
</body>
<?php print_r($pn);  ?> <!-- arry form foreach loop-->
<table>

	<tr>
		<td>Name</td>
		<td>Account</td>
	</tr>
	<?php foreach($pn as $pn1): ?>
	<tr>
		<td><?php echo $pn1['firstname'] ?></td>
		<td><?php echo $pn1['Account'] ?></td>
	</tr>	
     <?php endforeach ?>




</table>
</html>