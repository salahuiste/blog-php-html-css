<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.formlog{
			width:40%;
			background-color: #045FB4;
			border:2px solid rgb(235, 235, 224);
			border-radius: 10px;
			color:white;
		}
		.btn {
			background-color: #045FB4;
			border:2px solid rgb(235, 235, 224);
			border-radius: 10px;
			color:white;
			font-size:1em;
		}
	</style>
</head>
<body>
<div>
<form action="" method="post">
	<table class="formlog" align="center">
		<tr>
			<td>
				Nom:
			</td>
			<td>
				<input type="text" name="lastname" required>
			</td>
		</tr>
		<tr>
			<td>
				Prenom:
			</td>
			<td>
				<input type="text" name="firstname" required>
			</td>
		</tr>
		<tr>
			<td>
				Email:
			</td>
			<td>
				<input type="email" name="email" required>
			</td>
		</tr>
		<tr>
			<td>
				Commentaire:
			</td>
			<td>
				<textarea name="comment" required></textarea>
			</td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" value="comment" class="btn"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>