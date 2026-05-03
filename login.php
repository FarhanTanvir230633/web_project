<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | <?php echo htmlspecialchars($siteConfig["site_name"]); ?></title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php renderTopBar($topMenu, "login"); ?>

    <main class="container page-content">
        <h2 class="section-title">Member Login</h2>
        <div class="content-card login-card">
            <form action="#" method="post">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </main>
</body>
</html>
