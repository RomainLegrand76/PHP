<?php include "./fonction/callPage.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Site Dieppe</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>    
    <?php
        include "./include/header.php";
    ?>
    <main>
        <?php
            callPage();
        ?>
    </main>
    <?php
        include "./include/footer.php";
    ?>
</body>
</html>
