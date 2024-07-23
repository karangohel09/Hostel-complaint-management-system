<html>
	<head>
		<style>
			*{
				.error{
					color: #ff0000;
				}
			}
		</style>
	</head>
	<body>
<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p>*<?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
</body>
</html>