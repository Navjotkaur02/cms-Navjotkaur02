<?php include 'includes/header.php'; ?>
<main>
    <h1>About Us</h1>
    <?php
    $team = [
        ["name" => "John Doe", "role" => "CEO", "image" => "most-charming-ceos-in-korean-dramas-2.jpeg", "description" => "John has over 20 years of experience in the tech industry, leading teams to success."],
        ["name" => "Jane Smith", "role" => "CTO", "image" => "jane-image.jpeg","description" => "Jane is a tech visionary with a passion for innovation and problem-solving."],
        ["name" => "Emily Jones", "role" => "CFO", "image" => "the-rise-of-women-entrepreneurs-1030x686.jpg", "description" => "Emily has a strong background in finance and has been instrumental in our growth."],
    ];
    ?>
    <h2>Our Team</h2>
    <div class="team">
        <?php foreach ($team as $member): ?>
            <div class="team-member">
                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>">
                <h3><?= $member['name'] ?></h3>
                <p><strong><?= $member['role'] ?></strong></p>
                <p><?= $member['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php include 'includes/footer.php'; ?>
