<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Controle de estoque</title>
</head>
<body>
	<h1>Listagem de produtos</h1>
	<table class="table">
		<?php foreach ($produtos as $p): ?>
		<tr>
			<td> <?= $p->nome ?> </td>
            <td> <?= $p->valor ?> </td>
            <td> <?= $p->descricao ?> </td>
            <td> <?= $p->quantidade ?> </td>
            <td>
            	<a href="/produto/mostra?id=<?= $p->id ?>">
            		<span class="large material-icons">search</span>
            	</a>
            </td>
		</tr>
	<?php endforeach ?>
	</table>
</body>
</html>