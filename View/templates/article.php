<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/../View/style/style.css">
    <title>Новость</title>
</head>
<body>
<div id="site">
    <?php //var_dump($newsOne); ?>
    <strong><?php echo $newsOne->getTitle(); ?></strong>
    <p><?php echo $newsOne->getText(); ?></p>
</div>
</body>
</html>
