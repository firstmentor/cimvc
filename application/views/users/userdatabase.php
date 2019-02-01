<!DOCTYPE html>
<html>
<head>
	<title>User data</title>
</head>
<body>
	<?php print_r($users); ?>
	<h1>User Data</h1>

	<table>
		<tr>
			<td>First Name</td>
			<td>Account </td>
		</tr>
		<?php foreach($users as $user): ?>
		<tr>
		    <td><?php echo $user['firstname']; ?></td>
		    <td><?php echo $user['account'];?></td>

		    <!--<td><?php $user->firstname; ?></td> 
		    <td><?php  $user->account; ?></td>? -->
		</tr>    	
		<?php
	endforeach;
	?>
  








	</table>

</body>
</html>