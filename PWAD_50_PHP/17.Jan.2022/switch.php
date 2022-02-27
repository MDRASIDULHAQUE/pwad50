<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" >
        <select name="cat" id="">
            <option value="News">News</option>
            <option value="Weather">Weather</option>
            <option value="Sports">Sports</option>
        </select>
        <input type="submit" name="submit" value="GO">
    </form>

    <?php
    if(isset($_GET['submit'])){
        $cat = $_GET['cat'];
    switch($cat){
        case "News":echo "You have selected news Category";
        break;
        case "Weather":echo "You have selected Weather Category";
        break;
        case "Sports":echo "You have selected Sports Category";
        break;
        default:echo "You have selected other Category";
        break;
    }

    }
     
     ?>
</body>
</html>