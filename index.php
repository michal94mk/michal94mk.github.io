<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SolidWood</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightbox.css">
</head>
<body>
    <?php
        if(!empty($_POST["send"])) {
            $userName = $_POST["userName"];
            $userEmail = $_POST["userEmail"];
            $userMessage = $_POST["userMessage"];
            $toEmail = $_POST["dsadadadas@gmail.com"];

            $emailHeaders = "Name: " . $userName .
            "\r\n Email: " . $userEmail .
            "\r\n Message: " . $userMessage . "\r\n";

            if(mail($toEmail, $userName, $emailHeaders)) {
                $message = "Twoja wiadomość została dostarczona.";
            }
        }
    ?>
    <header>
        <div class="header-content">
            <h1>SolidWood</h1>
            <div class="hamburger" onclick="toggleMenu()">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <nav>
                <ul id="navLinks">
                    <li><a href="#section1">Strona główna</a></li>
                    <li><a href="#section2">O nas</a></li>
                    <li><a href="#section3">Usługi</a></li>
                    <li><a href="#section4">Projekty</a></li>
                    <li><a href="#section5">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <section id="section1">
        <p>Witaj na stronie naszego zakładu stolarskiego! Jesteśmy specjalistami w dziedzinie stolarki, oferujemy kompleksowe rozwiązania dla Twoich potrzeb. Zapraszamy do zapoznania się z naszą ofertą i do skorzystania z naszych usług!</p>
    </section>

    <section id="section2">
        <div class="about-heading">
            <h1>O nas</h1>
        </div>
        <div class="about-container">
            <div class="about-image">
                <img src="images/aboutus_webp.webp" alt="about">
            </div>
            <div class="about-content">
                <p>Nasz zakład stolarski istnieje od ponad 20 lat, a nasze doświadczenie pozwala nam świadczyć usługi na najwyższym poziomie. Nasz zespół składa się z wykwalifikowanych stolarzy, którzy dbają o każdy detal, aby zapewnić Ci produkty najwyższej jakości. Jesteśmy dumni z naszych osiągnięć i zadowolenia naszych klientów. Poznaj nas bliżej i przekonaj się, dlaczego jesteśmy najlepszym wyborem!</p>
            </div>
        </div>
    </section>

    <section id="section3">
        <div class="services-heading">
            <h1>Usługi</h1>
        </div>
        <div class="services-container">
            <div class="card">
                <div class="services-image">
                    <img src="images/customade.jpg">
                </div>
                <h2>Meble na zamówienie</h2>
                <p>Nasza firma oferuje możliwość zamówienia mebli według własnego projektu. Nasz zespół stolarzy zadba o to, aby spełnić Twoje oczekiwania, dostarczając meble dopasowane do Twoich potrzeb.</p>
            </div>
            <div class="card">
                <div class="services-image">
                    <img src="images/repair.jpg">
                </div>
                <h2>Renowacje i naprawy</h2>
                <p>Prowadzimy profesjonalne usługi renowacyjne oraz naprawy mebli. Niezależnie od tego, czy potrzebujesz odświeżyć istniejące meble, czy naprawić uszkodzenia, nasz zespół jest gotowy do działania.</p>
            </div>
            <div class="card">
                <div class="services-image">
                    <img src="images/consulting.jpg">
                </div>
                <h2>Doradztwo stolarskie</h2>
                <p>Nasi doświadczeni stolarze służą profesjonalnym doradztwem w zakresie wyboru materiałów, projektowania mebli oraz wykonawstwa. Skorzystaj z naszej wiedzy i doświadczenia!</p>
            </div>
        </div>
    </section>

    <section id="section4">
        <div class="projects-heading">
            <h1>Projekty</h1>
        </div>
        <div class="projects-content">
            <div class="gallery">
                <a href="images/test1.jpg" data-lightbox="furnitures" data-title="Furniture1">
                    <img src="images/test1.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture2">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture3">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture4">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture5">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture6">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture7">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture8">
                    <img src="images/customade.jpg">
                </a>
                <a href="images/customade.jpg" data-lightbox="furnitures" data-title="Furniture9">
                    <img src="images/customade.jpg">
                </a>
            </div>
        </div>
    </section>
    

    <section id="section5">
        <div class="contact-content">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.0507634690077!2d-122.08398988488295!3d37.42248797981631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858094bb6e9799%3A0xb28c2a00a33ea3ac!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1649997492442!5m2!1sen!2sus" width="100%" height="auto" allowfullscreen="" loading="lazy" style="border: none;"></iframe>
            </div>
            <div class="contact-form">
                <h1>Kontakt</h1>
                <p>Skontaktuj się z nami, aby uzyskać więcej informacji.</p>
                <form method="POST">
                    <input type="text" placeholder="Name" name="userName" class="contact-form-text" required>
                    <input type="text" placeholder="Email" name="userEmail" class="contact-form-text" required>
                    <textarea placeholder="Message" name="userMessage" class="contact-form-textarea" required></textarea>
                    <input type="submit" value="Wyślij" name="send" class="contact-form-button">
                    <?php if(!empty($message)) { ?>
                    <div class="success">
                        <strong><?php echo $message; ?></strong>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </section>
    </main>
    <footer>
        <div class="footer-section">
            <p class="footer-addres">Adres:</p>
            <p>Warszawa</p>
            <p>ul. Słoneczna 123</p>
            <p>00-976 Warszawa</p>
            <p class="footer-contact">Kontakt</p>
            <p>Email: <a href="mailto:contact@example.com">contact@example.com</a></p>
            <p>Telefon: <a href="tel:+1234567890">+1234567890</a></p>
        </div>
        <div class="footer-section">
            <h3>Menu</h3>
            <ul>
                <li><a href="#section1">Strona główna</a></li>
                <li><a href="#section2">O nas</a></li>
                <li><a href="#section3">Usługi</a></li>
                <li><a href="#section4">Projekty</a></li>
                <li><a href="#section5">Kontakt</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Social Media</h3>
            <ul class="social-icons">
                <li><a href="https://facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://youtube.com" class="youtube"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://instagram.com" class="instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 SolidWood. Wszelkie prawa zastrzeżone.</p>
        </div>
    </footer>     
    <script src="main.js"></script>
    <script src="lightbox-plus-jquery.js"></script>
</body>
</html>
