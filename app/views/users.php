<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Здарова!</title>
</head>
<body>
    <h1 class="header-frist">Добро пожаловать в шаблон :)))</h1>
    <?php foreach ($users as $user): ?>
        <p>Здарова <?= htmlspecialchars($user) ?></p>
    <?php endforeach; ?>

</body>
</html>
