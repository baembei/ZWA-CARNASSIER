<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carnassier Offical Store</title>
    <link rel="stylesheet" href="style/style-main.css">
</head>
<body>
    <?php include 'headers/header.php'; ?>
    <div class="fullscreen-video-container section">
        <video autoplay muted loop class="fullscreen-video">
            <source src="references/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="video-overlay">
            <h2 class="collection">Winter Collection 2024</h2>
            <a href="#" class="discover-collection">discover the collection</a>
        </div>
    </div>

    <div class="main_page_discover section">
        <div class="discover">
            <img src="references/elordi1.jpeg" alt="Men" class="discover-image">
            <div class="label">
                <p>Handbags</p>
                <a href="#men">Discover</a>
            </div>
        </div>
        <div class="discover">
            <img src="references/lily2.jpeg" alt="Women" class="discover-image">
            <div class="label">
                <p>Shoes</p>
                <a href="#women">Discover</a>
            </div>
        </div>
    </div>

    <div class="pre-fall section">
        <div class="overlay">
            <div class="home-overlay">
                <h2 class="collection">Pre-Fall 2024</h2>
                <a href="#" class="discover-collection">discover the collection</a>
            </div>
        </div>
        <img src="references/main.jpeg" alt="Accessories" class="product-image">
    </div>

    <div class="winter section">
        <div class="overlay">
            <div class="home-overlay">
                <h2 class="collection">Winter 2024</h2>
                <a href="#" class="discover-collection">discover the collection</a>
            </div>
        </div>
        <img src="references/billie1.jpeg" alt="Accessories" class="product-image">
    </div>

    <?php include 'footers/footer-section.php'; ?>

    <script src="javascript/header.js"></script>



<!--    ILL ADD THIS CODE CSS FILE LATER, IT'S JUST A TEST-->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let isScrolling = false;
            let currentSectionIndex = 0;
            const sections = document.querySelectorAll('.section');
            const header = document.querySelector('header');

            // Threshold for touchpad scrolls
            const scrollThreshold = 50;

            function smoothScrollToSection(index) {
                if (isScrolling) return;
                isScrolling = true;

                const targetSection = sections[index];
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: 'smooth',
                });

                setTimeout(() => {
                    isScrolling = false;
                }, 800);

                currentSectionIndex = index;
                updateHeaderClass(index);
            }

            function updateHeaderClass(index) {
                if (index === 0) {
                    header.className = 'transparent-header';
                } else if (index === 1) {
                    header.className = 'transparent-header-black';
                } else if (index === 2 || index === 3) {
                    header.className = 'transparent-header';
                } else {
                    header.className = 'transparent-header-black';
                }
            }

            let lastDeltaY = 0;

            window.addEventListener('wheel', function(event) {
                event.preventDefault();

                const deltaY = event.deltaY;
                if (Math.abs(deltaY) < scrollThreshold) return;

                if (deltaY > 0 && currentSectionIndex < sections.length - 1) {
                    smoothScrollToSection(currentSectionIndex + 1);
                } else if (deltaY < 0 && currentSectionIndex > 0) {
                    smoothScrollToSection(currentSectionIndex - 1);
                }

                lastDeltaY = deltaY;
            }, { passive: false });

            window.addEventListener('keydown', function(event) {
                if (event.key === 'ArrowUp' || event.key === 'ArrowDown') {
                    event.preventDefault();

                    if (event.key === 'ArrowDown' && currentSectionIndex < sections.length - 1) {
                        smoothScrollToSection(currentSectionIndex + 1);
                    } else if (event.key === 'ArrowUp' && currentSectionIndex > 0) {
                        smoothScrollToSection(currentSectionIndex - 1);
                    }
                }
            });

            updateHeaderClass(currentSectionIndex);
        });
    </script>
</body>
</html>