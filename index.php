<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal | Bangladesh Newspaper Collection</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <?php renderTopBar($topMenu); ?>

    <header class="main-header">
        <div class="container text-center">
            <div class="logo">
                <h1>GLOBAL<span>INSIGHT</span></h1>
                <p>THE ULTIMATE NEWS AGGREGATOR</p>
            </div>
        </div>
    </header>

    <nav class="navbar">
        <div class="container">
            <ul class="nav-links">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#national">National</a></li>
                <li><a href="#international">International</a></li>
                <li><a href="#sports">Sports</a></li>
                <li><a href="#tech">Technology</a></li>
                <li><a href="#business">Business</a></li>
                <li><a href="#entertainment">Entertainment</a></li>
            </ul>
        </div>
    </nav>

    <div class="ticker-container">
        <div class="ticker-label">BREAKING</div>
        <marquee behavior="scroll" direction="left">
            <span>• Bangladesh secures new trade agreement with European Union</span>
            <span>• Tech giants announce major investment in Dhaka's Hi-Tech park</span>
            <span>• World Cup qualifiers: Bangladesh prepares for next big match</span>
        </marquee>
    </div>

    <main class="container main-content">

        <section id="national" class="news-section">
            <h2 class="section-title">National News Portal</h2>
            <div class="news-grid-container">

                <a href="https://www.prothomalo.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://vectorseek.com/wp-content/uploads/2023/10/Prothom-Alo-Logo-Vector.svg-.png" alt="Prothom Alo"></div>
                    <div class="paper-label">Daily Prothom alo</div>
                </a>

                <a href="https://www.bd-pratidin.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://th.bing.com/th/id/R.52e36b28b46bc20038b466456b4dc931?rik=Irt0ScZtzkRh3g&pid=ImgRaw&r=0" alt="Bangladesh Pratidin"></div>
                    <div class="paper-label">Bangladesh Pratidin</div>
                </a>

                <a href="https://www.ittefaq.com.bd" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://images.seeklogo.com/logo-png/63/1/the-daily-ittefaq-logo-png_seeklogo-630308.png" alt="Ittefaq"></div>
                    <div class="paper-label">Ittefaq</div>
                </a>

                <a href="https://www.kalerkantho.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse3.mm.bing.net/th/id/OIP.rXTUyEr0Y158AXktFGwo4QHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Kaler Kantho"></div>
                    <div class="paper-label">Daily kaler kantho</div>
                </a>

                <a href="https://www.dailynayadiganta.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse2.mm.bing.net/th/id/OIP.Ae3Kytx_VaPyTNapekWz0gAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Naya Diganta"></div>
                    <div class="paper-label">Daily Naya Diganta</div>
                </a>

                <a href="https://www.jugantor.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse2.mm.bing.net/th/id/OIP.xFNC8y6qh8EwePqx9DasDAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Jugantor"></div>
                    <div class="paper-label">Jugantor</div>
                </a>

                <a href="https://www.manabzamin.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse1.mm.bing.net/th/id/OIP._Az_8IkkVG83spe_7RdoSwHaCo?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Manab Zamin"></div>
                    <div class="paper-label">Daily Manab Zamin</div>
                </a>

                <a href="https://www.bonikbarta.net" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse1.mm.bing.net/th/id/OIP.TdJvxf_RYWIED-RYLxBm5wHaBQ?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bonik Barta"></div>
                    <div class="paper-label">Bonik Barta</div>
                </a>
            </div>
        </section>

        <section id="international" class="news-section">
            <h2 class="section-title title-int">International Media</h2>
            <div class="news-grid-container">
                <a href="https://www.bbc.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse2.mm.bing.net/th/id/OIP.up20BvTm1hYwGxpHCRsubwHaEK?w=500&h=281&rs=1&pid=ImgDetMain&o=7&rm=3" alt="BBC"></div>
                    <div class="paper-label">BBC World News</div>
                </a>
                <a href="https://www.cnn.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://logos-marcas.com/wp-content/uploads/2020/11/CNN-Logotipo-1984-2014.jpg" alt="CNN"></div>
                    <div class="paper-label">CNN International</div>
                </a>
                <a href="https://www.aljazeera.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Aljazeera_eng.svg" alt="Al Jazeera"></div>
                    <div class="paper-label">Al Jazeera English</div>
                </a>
            </div>
        </section>

        <section id="sports" class="news-section">
            <h2 class="section-title title-sports">Sports Center</h2>
            <div class="news-grid-container">
                <a href="https://www.espn.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse1.mm.bing.net/th/id/OIP.COkjYIWe49d7qWYLJFWxsgHaEc?w=1536&h=922&rs=1&pid=ImgDetMain&o=7&rm=3" alt="ESPN"></div>
                    <div class="paper-label">ESPN Sports</div>
                </a>
                <a href="https://www.cricbuzz.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse2.mm.bing.net/th/id/OIP.VyIVobiktWXo4Z6baQCTZAHaEL?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Cricbuzz"></div>
                    <div class="paper-label">Cricbuzz Live</div>
                </a>
            </div>
        </section>

        <section id="tech" class="news-section">
            <h2 class="section-title title-tech">Technology & Business</h2>
            <div class="news-grid-container">
                <a href="https://www.theverge.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://tse2.mm.bing.net/th/id/OIP.hSnHg7dG_ZFNjKjCvS6D2AHaFm?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Verge"></div>
                    <div class="paper-label">The Verge</div>
                </a>
                <a href="https://techcrunch.com" target="_blank" class="news-item">
                    <div class="logo-box"><img src="https://assets-global.website-files.com/64ed9cbec6161d2d4ad77e98/653c45a14883ce7853e9127a_TechCrunch.png" alt="TechCrunch"></div>
                    <div class="paper-label">TechCrunch</div>
                </a>
            </div>
        </section>

        <section id="business" class="news-section">
            <h2 class="section-title title-business">Business & Finance</h2>
            <div class="news-grid-container">

                <a href="https://www.bonikbarta.net" target="_blank" class="news-item">
                    <div class="logo-box">
                        <img src="https://th.bing.com/th/id/OIP.NovfL_7SVq7uvIJZDNDM2gHaHa?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bonik Barta">
                    </div>
                    <div class="paper-label">Bonik Barta</div>
                </a>

                <a href="https://sharebiz.net" target="_blank" class="news-item">
                    <div class="logo-box">
                        <img src="https://tse1.mm.bing.net/th/id/OIP.maiifXbvsyChdG4PT4rR_AAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="ShareBiz">
                    </div>
                    <div class="paper-label">Share Biz</div>
                </a>

                <a href="https://www.tbsnews.net" target="_blank" class="news-item">
                    <div class="logo-box">
                        <img src="https://vignette.wikia.nocookie.net/logopedia/images/6/67/TBS_NEWS_2018.png/revision/latest?cb=20200405031126" alt="TBS News">
                    </div>
                    <div class="paper-label">The Business Standard</div>
                </a>

            </div>
        </section>

        <section id="entertainment" class="news-section">
            <h2 class="section-title title-entertainment">Entertainment & Lifestyle</h2>
            <div class="news-grid-container">

                <a href="https://www.ananda-alo.com" target="_blank" class="news-item">
                    <div class="logo-box">
                        <img src="https://tse4.mm.bing.net/th/id/OIP.uaCh5R8nKva302T2M5YJFQAAAA?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Ananda Alo">
                    </div>
                    <div class="paper-label">Ananda Alo</div>
                </a>

                <a href="http://www.dhallywood24.com" target="_blank" class="news-item">
                    <div class="logo-box">
                        <img src="https://yt3.googleusercontent.com/ytc/AIdro_lLtGSFyOLdaHTB8IcoKzccU3CSjdusqeHfyoCPkmCC2Q=s900-c-k-c0x00ffffff-no-rj" alt="Dhallywood24">
                    </div>
                    <div class="paper-label">Dhallywood 24</div>
                </a>

                <a href="https://icetoday.net" target="_blank" class="news-item">
                    <div class="logo-box">
                        <img src="https://th.bing.com/th/id/OIP.hQxiHrFYl5A2DIi4cQq5gAAAAA?o=7rm=3&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Ice Today">
                    </div>
                    <div class="paper-label">Ice Today</div>
                </a>

            </div>
        </section>
    </main>

    <footer class="main-footer">
        <section id="about-site" class="about-site-section">
            <div class="container">
                <div class="about-content">
                    <h3>All Bangladesh Newspapers in One Click</h3>
                    <p>
                        <b>Global Insight</b> provides a listing of almost all Bangladesh, English, and Online Newspapers available in Bangla.
                        From major national dailies to local city news, we bring the world of news to your fingertips.
                        Whether you are living at home or part of the Probashi community in the USA, UK, or Canada,
                        you can compare news items across several newspapers instantly.
                    </p>
                    <p class="tags">
                        <strong>Readers Tag us as:</strong>
                        Bangladesh newspaper, Bangla newspaper, All BD news, Online Bangla news,
                        Bangladeshi Patrika, BD news 24, Today's Bangla news paper.
                    </p>
                </div>
            </div>
        </section>
        <p>
            Follow us:
            <a href="<?php echo htmlspecialchars($siteConfig["facebook_url"]); ?>" target="_blank" rel="noopener noreferrer">
                <i class="fab fa-facebook"></i> Facebook
            </a>
        </p>
        <p>&copy; 2026 Global Insight News Aggregator | Designed for Professional Portals</p>
    </footer>

</body>
</html>
