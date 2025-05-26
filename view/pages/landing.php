<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="../css/landing.css">
    <script src="../js/landing.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>MelodyeHub</h1>
            </div>

            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="../pages/landing.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Lendas</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
                </ul>
            </div>

            <div class="search-box">
                <input type="text" class="search-text" placeholder="Pesquisar...">
                <div class="search-btn">
                    <i class="fas fa-search loupe-purple" style="color: #9617b7;"></i>
                    <i class="fas fa-search loupe-white" style="color: white;"></i>
                </div>
            </div>

            <div class="login-button">
                <button><a href="../pages/login.php">Login</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><i class="fas fa-bars" style="color: white; font-size: 1.5rem;"></i></button>
            </div>
        </nav>

        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Lendas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
            </ul>

            <div class="login-button">
                <button><a href="../pages/login.php">Login</a></button>
            </div>
        </div>
    </header>

    <main>
        <div class="corpo-site">
            <div class="card-container">
                <div class="card-1 floating">
                    <div>
                        <h1>Mundo da Música</h1>
                        <h2>Explore & Descubra</h2>
                        <p>Mergulhe no universo musical com as melhores lendas, histórias e descobertas sobre o mundo da música.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>MelodyeHub</h1>
                <p>Tudo Sobre o Mundo da Música!</p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Blog</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Tecnologia</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Aventuras</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Música</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Produtos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">App</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Nuvem</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Se inscreva</h3>

                <p>
                    Digite seu e-mail para ser notificado sobre nossas novidades!
                </p>

                <div id="input_group">
                    <input type="email" id="email" placeholder="Seu e-mail">
                    <button>
                        <i class="fas fa-envelope"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169 2024 todos os direitos reservados
        </div>
    </footer>
    <script>
        // Registrar ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Animação do Header
        gsap.to("header", {
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power2.out"
        });

        // Animação do Logo
        gsap.to(".logo", {
            opacity: 1,
            x: 0,
            duration: 0.8,
            delay: 0.2,
            ease: "power2.out"
        });

        // Animação dos itens do menu (um por um)
        gsap.to(".nav-item", {
            opacity: 1,
            y: 0,
            duration: 0.6,
            delay: 0.4,
            stagger: 0.1,
            ease: "power2.out"
        });

        // Animação da caixa de busca
        gsap.to(".search-box", {
            opacity: 1,
            scale: 1,
            y: "-50%",
            duration: 0.8,
            delay: 0.6,
            ease: "back.out(1.7)"
        });

        // Animação do botão de login
        gsap.to(".login-button", {
            opacity: 1,
            x: 0,
            duration: 0.8,
            delay: 0.8,
            ease: "power2.out"
        });

        // Animação do card principal
        gsap.to(".card-1", {
            opacity: 1,
            x: 0,
            rotateY: 0,
            duration: 1.2,
            delay: 1,
            ease: "power3.out"
        });

        // Animação do conteúdo do card (sequencial)
        gsap.to(".card-1 h1", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: 1.5,
            ease: "power2.out"
        });

        gsap.to(".card-1 h2", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: 1.7,
            ease: "power2.out"
        });

        gsap.to(".card-1 p", {
            opacity: 1,
            y: 0,
            duration: 0.8,
            delay: 1.9,
            ease: "power2.out"
        });

        // Animação do footer com ScrollTrigger
        gsap.to("footer", {
            scrollTrigger: {
                trigger: "footer",
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            },
            opacity: 1,
            y: 0,
            duration: 1,
            ease: "power2.out"
        });

        // Animação dos links do footer
        gsap.to(".footer-list", {
            scrollTrigger: {
                trigger: ".footer-list",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out"
        });

        // Animação das redes sociais
        gsap.to("#footer_social_media .footer-link", {
            scrollTrigger: {
                trigger: "#footer_social_media",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 1,
            scale: 1,
            duration: 0.6,
            stagger: 0.1,
            ease: "back.out(1.7)"
        });

        // Animação de hover no card
        const card = document.querySelector('.card-1');
        
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                scale: 1.05,
                rotateY: 5,
                duration: 0.3,
                ease: "power2.out"
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                scale: 1,
                rotateY: 0,
                duration: 0.3,
                ease: "power2.out"
            });
        });

        // Animação de pulsar no botão de login
        gsap.to(".login-button button", {
            scale: 1.05,
            duration: 2,
            yoyo: true,
            repeat: -1,
            ease: "power2.inOut"
        });

        // Menu mobile
        function menuShow() {
            let menuMobile = document.querySelector('.mobile-menu');
            if (menuMobile.classList.contains('open')) {
                gsap.to(menuMobile, {
                    opacity: 0,
                    y: -20,
                    duration: 0.3,
                    onComplete: () => {
                        menuMobile.classList.remove('open');
                        menuMobile.style.display = 'none';
                    }
                });
            } else {
                menuMobile.style.display = 'block';
                menuMobile.classList.add('open');
                gsap.fromTo(menuMobile, 
                    { opacity: 0, y: -20 },
                    { opacity: 1, y: 0, duration: 0.3 }
                );
            }
        }

        // Animação contínua de background do card
        gsap.to(".card-1", {
            backgroundPosition: "200% 0%",
            duration: 4,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    </script>
</body>

</html>