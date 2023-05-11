<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operattor Logika</title>
	<link rel="stylesheet" type="text/css" href="http://elearning.bsi.ac.id/assets/css/bootstrap.min.css">
</head>
<body>
	<h1>Logika AND</h1>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRUE && TRUE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE && TRUE ?></td>
			</tr>
			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?= TRUE && FALSE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE && FALSE ?></td>
			</tr>
		</tbody>

		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>
	</table>

	<h1>Logika OR</h1>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRUE || TRUE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE || TRUE ?></td>
			</tr>
			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?= TRUE || FALSE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE || FALSE ?></td>
			</tr>
		</tbody>

		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>
	</table>

	<h1>Logika XOR</h1>
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>TRUE</td>
				<td>TRUE</td>
				<td><?= TRUE XOR TRUE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>TRUE</td>
				<td><?= FALSE XOR TRUE ?></td>
			</tr>
			<tr>
				<td>TRUE</td>
				<td>FALSE</td>
				<td><?= TRUE XOR FALSE ?></td>
			</tr>
			<tr>
				<td>FALSE</td>
				<td>FALSE</td>
				<td><?= FALSE XOR FALSE ?></td>
			</tr>
		</tbody>

		<tfoot>
			<tr>
				<th>a</th>
				<th>b</th>
				<th>c</th>
			</tr>
		</tfoot>
	</table>


</body>
</html>