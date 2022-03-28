<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>Produk Ms GLow</title>
</head>

<body>
	<table class="table table-bordered">
		<tr style="text-align:center">
			<th>No</th>
			<th>Nama Produk</th>
			<th>Stok Barang</th>
		</tr>
		<?php $no = 1;
		foreach ($produk as $p) : ?>
			<tr>
				<td style="text-align:center"><?= $no++; ?></td>
				<td><?= $p->nama_produk; ?></td>
				<td><?= $p->stok; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<script type="text/javascript">
		window.print();
	</script>

</body>

</html>
