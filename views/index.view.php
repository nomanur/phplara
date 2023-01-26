<!DOCTYPE html>
<html>
<head>
	<title>phplara</title>
</head>
<body>

	
	<ul>
		<?php foreach($results as $value) : ?>
			<?php if ($value->complete): ?>
				<strike>
			<?php endif ?>
		<li><?= $value->description ?></li>

			<?php if ($value->complete): ?>
				</strike>
			<?php endif ?>
		<?php endforeach ?>

	</ul>


</body>
</html>