<?php
$servername = "db";
$username = "root";
$password = "mysql";
$dbname = "dynamische_pagina";

try {
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Check connection
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    <script>
        console.log("Connected successfully");
    </script>
    <?php
} catch(PDOException $e) {
    ?>
    <script>
        console.log("<?php echo "Connection failed: " . $e->getMessage()?>");
    </script>
    <?php
    die;
}
?>