<!-- /contact.php -->
<?php include 'includes/header.php'; ?>
<main>
    <h1>Contact Us</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Basic form validation
        if ($name && $email && $message) {
            echo "<p>Thank you, $name. Your message has been received.</p>";
        } else {
            echo "<p>Please fill out all fields.</p>";
        }
    }
    ?>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Send</button>
    </form>
</main>
<?php include 'includes/footer.php'; ?>
