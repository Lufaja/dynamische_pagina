<?php include "data.php";
$sql = "SELECT * FROM characters ORDER BY name ASC";
$result = $conn->query($sql);
$results = $result->fetchAll(PDO::FETCH_ASSOC);
$conn = null;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo count($results)?> characters uit de database</h1>

</header>
<div id="container">
<?php
foreach($results as $result){
    echo '
        <a class="item" href="character.php?name=', $result["name"], '">
            <div class="left">
                <img class="avatar" src="resources/images/', $result["avatar"], '">
            </div>
            <div class="right">
                <h2>', $result["name"], '</h2>
                <div class="stats">
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-heart"></i></span> ', $result["health"], '</li>
                        <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> ', $result["attack"], '</li>
                        <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> ', $result["defense"], '</li>
                    </ul>
                </div>
            </div>
            <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
        </a>
        ';
};
?>
</div>
<footer>&copy; Lukas van Hulst 2023</footer>
</body>
</html>