<?php
$siteConfig = [
    "site_name" => "Global Insight",
    "facebook_url" => "https://www.facebook.com/",
];

$topMenu = [
    "about" => ["label" => "About Us", "url" => "about.php", "icon" => ""],
    "contact" => ["label" => "Contact", "url" => "contact.php", "icon" => ""],
    "login" => ["label" => "Login", "url" => "login.php", "icon" => "fas fa-user-circle"],
];

function renderTopBar(array $topMenu, string $activeKey = ""): void
{
    ?>
    <div class="top-bar">
        <div class="container top-bar-flex">
            <div class="date-time" id="current-date">
                <i class="far fa-calendar-alt"></i> <?php echo date("l, F j, Y"); ?>
            </div>
            <div class="top-nav-links">
                <?php foreach ($topMenu as $key => $item): ?>
                    <a
                        href="<?php echo htmlspecialchars($item["url"]); ?>"
                        class="<?php echo $key === $activeKey ? "active" : ""; ?><?php echo $key === "login" ? " login-link" : ""; ?>"
                    >
                        <?php if (!empty($item["icon"])): ?>
                            <i class="<?php echo htmlspecialchars($item["icon"]); ?>"></i>
                        <?php endif; ?>
                        <?php echo htmlspecialchars($item["label"]); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php
}
