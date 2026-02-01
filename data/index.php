<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pete's Little Lunch Box | Data</title>
    <link rel="icon" type="image/svg+xml" href="../images/flare-logos/favicon.png">
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

    <?php require_once 'includes/db.php'; ?>

    <?php require_once 'includes/header.php';?>

    <main>
        <?php include 'includes/menu-items.php'; ?>
        <?php include 'includes/menu-categories.php'; ?>
        <?php include 'includes/bagel-options.php'; ?>
        <?php include 'includes/bread-options.php'; ?>
        <?php include 'includes/cheese-options.php'; ?>
        <?php include 'includes/topping-options.php'; ?>
        <?php include 'includes/dressing-options.php'; ?>
        <?php include 'includes/size-options.php'; ?>
    </main>
    <a href="#top" class="back-to-top-btn">BACK TO TOP?</a>
    
    <footer class="site-footer">
        <img src="../images/flare-logos/flare-logo-light.svg" alt="Flare Logo">
    </footer>
    <?php require_once 'includes/close-db.php'; ?>
</body>
</html>
