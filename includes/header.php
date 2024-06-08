<!-- /includes/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>My PHP Website</title>
</head>
<body>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>
    <header>
        <nav>
            <ul>
                <li class="<?= $currentPage == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
                <li class="<?= $currentPage == 'about.php' ? 'active' : '' ?>"><a href="about.php">About</a></li>
                <li class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>"><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
