<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | <?php echo htmlspecialchars($siteConfig["site_name"]); ?></title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php renderTopBar($topMenu, "about"); ?>

    <main class="container page-content">
        <h2 class="section-title">About Global Insight</h2>
        <div class="content-card">
            <p>
                <b>Global Insight</b> is a simple Bangladeshi and international news directory.
                Our goal is to help readers quickly access trusted sources from one place.
            </p>
            <p>
                We organize national, international, sports, technology, business, and entertainment
                links so you can compare coverage easily.
            </p>
        </div>
    </main>
</body>
</html>
