<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/View/style/style.css">
    <title>Главная</title>
</head>
<body>
<div id="site">
    <h1>Новости дня:</h1>
    <ul>
        <?php //var_dump($news);
        foreach ($news as $txt) :?>
            <li>
                <a href="/Control/article.php?id=<?php echo $txt->getId();?>">
                    <h2><?php echo $txt->getTitle();?></h2>
                </a>
                    <p><?php echo $txt->getText();?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
