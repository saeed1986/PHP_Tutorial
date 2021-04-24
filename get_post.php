<?php
/*
if (isset($_GET['name'])) {
    $name = htmlentities($_GET['name']); //htmlentities ist written for the better security of our page
    echo $name;
    print_r($_GET);
}
if (isset($_POST['name'])) {
    $name = htmlentities($_POST['name']); //htmlentities ist written for the better security of our page
    echo $name;
    print_r($_POST);
}


if (isset($_REQUEST['name'])) {
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']); //htmlentities ist written for the better security of our page
    echo $name;
}

echo $_SERVER['QUERY_STRING'];
*/


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>

</html>