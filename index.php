<?php
session_start();

// Définir la langue par défaut (par exemple, le français)
if (!isset($_GET['lang'])) {
    $_SESSION['lang'] =  'fr';
}else{
  $_SESSION['lang'] =  $_GET['lang'];
}

// Inclure le fichier de traduction approprié
include_once('Lang/' . $_SESSION['lang'] . '.php');

// Fonction pour récupérer la traduction d'une clé donnée
function lang($key) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $key;
}
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>" class="dark ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Easycode</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/bold/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="icon" type="image/x-icon" href="easycode.ico">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
  <script src="https://unpkg.com/split-type"></script>


</head>

<body class="gradient" >
  <?php include("Components/header.php") ?>
  <div class="sm:container md:container md:mx-auto">

    <?php include("Components/hero.php") ?>
    <?php include("Components/timeline.php") ?>
    <?php include("Components/sevice.php") ?>
    <?php include("Components/projet.php") ?>
    <?php include("Components/equipe.php") ?>
    <?php include("Components/testimony.php") ?>
    <?php include("Components/devis.php") ?>
    <?php include("Components/footer.php") ?>
  </div>
  <!-- script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      // offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 800, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: true, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-top', // defines which position of the element regarding to window should trigger the animation

    });
  </script>


  <script src="./node_modules/preline/dist/preline.js"></script>
  <script src="script/navbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      // Optional parameters
      // direction: 'vertical',
      loop: true,
      slidesPerView: 1,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        }
      },

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },


    });
  </script>

</body>

</html>