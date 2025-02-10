<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Restez informé des dernières actualités technologiques avec ZenovaTech. Découvrez les innovations, tendances et nouveautés du monde numérique. Profitez d'une veille technologique complète pour rester à jour.">
    <title>Dépannage informatique à distance - Actualités</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="icon" href="Image/ZENOVATECH.ico">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/actua.css">
    <style>
        @media (max-width: 768px) {
            .bubble {
                display: none;
            }

            .bubble,
            #chatBtn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Importation de la barre de navigation -->
    <?php include 'Integration/nav.php'; ?>
    <?php include 'Integration/add.html'; ?>

    <h1 class="GrosTitre">Les dernières actualités technologique !</h1>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <div class="carousel-container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper" id="article-container">
                <!-- Les articles seront injectés ici -->
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <script>
        async function fetchArticles() {
            const apiKey = "6319ee9dfa9471e9525bbaa587e8aa0b";
            const url = `http://api.mediastack.com/v1/news?access_key=${apiKey}&categories=technology&languages=fr&limit=5`;

            try {
                const response = await fetch(url);
                const data = await response.json();

                if (data.data && data.data.length > 0) {
                    displayArticles(data.data);
                } else {
                    displayLocalImages();
                }
            } catch (error) {
                console.error("Erreur lors du chargement des articles :", error);
                displayLocalImages();
            }
        }

        function displayArticles(articles) {
            const container = document.getElementById("article-container");
            container.innerHTML = ""; // Nettoyer avant d'ajouter du contenu

            articles.forEach(article => {
                const slide = document.createElement("div");
                slide.classList.add("swiper-slide");

                // Vérifier si une image est fournie, sinon utiliser une image par défaut
                const imageUrl = article.image && article.image.startsWith("http") ? article.image : "Image/actualiteCybersecurite.jpg";

                slide.innerHTML = `
                <img src="${imageUrl}" alt="${article.title}">
                <h3>${article.title}</h3>
                <p>${article.description || "Pas de description disponible."}</p>
                <a href="${article.url}" target="_blank">Lire l'article</a>
            `;
                container.appendChild(slide);
            });

            initializeSwiper();
        }

        function displayLocalImages() {
            const container = document.getElementById("article-container");
            container.innerHTML = ""; // Nettoyer le contenu précédent

            // Liste des images locales (elles doivent être dans le dossier "images/")
            const localImages = [
                "Image/actualiteCybersecurite.jpg",
                "Image/actualiteSamsung.jpg",
                "Image/actuialiteWindows.jpg",
                "Image/actualiteApple.jpg",
                "Image/actualiteAdobe.jpg"
            ];

            localImages.forEach(imgUrl => {
                const slide = document.createElement("div");
                slide.classList.add("swiper-slide");
                slide.innerHTML = `<img src="${imgUrl}" alt="Image locale">`;
                container.appendChild(slide);
            });

            initializeSwiper();
        }

        function initializeSwiper() {
            setTimeout(() => {
                new Swiper(".mySwiper", {
                    loop: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev"
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true
                    },
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false
                    }
                });
            }, 100); // Petit délai pour s'assurer que le DOM est mis à jour
        }

        fetchArticles();
    </script>

    <?php include 'Integration/nousContacter.html'; ?>

</body>

</html>