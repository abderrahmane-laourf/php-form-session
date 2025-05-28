<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="delete_cookie">delet the cookies</a>
    <?php
   
if(empty($_COOKIE["favColor"])){
    echo "❌ The cookie does NOT exist.";
} else {
    echo "✅ The cookie exists: " . $_COOKIE["favColor"];
}
?>

</body>
</html>

