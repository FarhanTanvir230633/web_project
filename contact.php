<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | <?php echo htmlspecialchars($siteConfig["site_name"]); ?></title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php renderTopBar($topMenu, "contact"); ?>

    <main class="container page-content">
        <h2 class="section-title">Contact Us</h2>
        <div class="content-card">
            <p>Email: <a href="mailto:contact@globalinsightnews.com">contact@globalinsightnews.com</a></p>
            <p>Facebook: <a href="<?php echo htmlspecialchars($siteConfig["facebook_url"]); ?>" target="_blank" rel="noopener noreferrer">Visit our page</a></p>
        </div>
    </main>
</body>
</html>
