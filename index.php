<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Panda Store</title>
</head>

<body>
    <?php
    session_start();
    include "admin/config.php";
    include "layouts/header.php";
    include "layouts/type.php";
    include "layouts/outstanding.php";
    include "layouts/banner.php";
    // include "layouts/sentence.php";
    include "layouts/like.php";
    include "layouts/footer.php";

    ?>

</body>

</html>