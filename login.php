<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION["logged"]) && $_SESSION["logged"]){ ?>
<h1>
    Ciao <?php echo $_SESSION["username"] ?>
</h1>
<form action="./logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
<?php } else{ ?>
    <h2>
        Mi dispiace non hai i permessi
    </h2>
    
<?php } ?>
</body>
</html>