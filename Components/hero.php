<style>
  .my-text {
    /* font-size: 40px; */
    /* font-weight: bold; */
    /* text-align: center; */
    /* overflow: hidden; */
  }

  .my-text .char {
    transform: translateY(100%);
    opacity: 0;
  }

  #agua {
    background-image: url('Assets/image/bg.gif');
    background-size: cover;
    background-repeat: no-repeat;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 100vh;
    /* filter: grayscale(100%); */
    z-index: -2;
    background-attachment: fixed;
  }

/* 
  @media screen and (max-width : 768px) {
    #agua{
      height: 80vh;
    }
  } */
</style>

<div id="agua">
  <div class="w-full h-full" style="background-color: rgb(7 2 49);
    opacity: 0.7;"></div>
</div>

<section id="hero" class="mt-0">
  <!-- Hero -->
  <div class="">
    <div class=" from-violet-600/[.15] via-transparent">
      <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8">
        <div class="flex justify-center"> </div>
        <div class="flex justify-center"> </div>
        <!-- Title -->
        <div class="max-w-3xl text-center mx-auto">
          <h1 class="block font-medium text-gray-200 text-4xl sm:text-5xl md:text-6xl lg:text-7xl my-text">
            <?php echo lang('hero_titre'); ?>
          </h1>
        </div>
        <!-- End Title -->

        <div class="max-w-3xl text-center mx-auto">
          <p class="text-lg text-gray-300" data-aos="fade-up"> <?php echo lang('hero_paragraphe'); ?></p>
        </div>

        <!-- Buttons -->
        <div class="text-center">
          <a data-aos="zoom-in" class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 shadow-lg shadow-transparent hover:shadow-blue-700/50 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-6 dark:focus:ring-offset-gray-800" href="#devis">
            <?php echo lang('obtenir_devis'); ?>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m9 18 6-6-6-6" />
            </svg>
          </a>
        </div>
        <!-- End Buttons -->
      </div>
    </div>
  </div>
  <!-- End Hero -->
</section>

<script>
  let myText = new SplitType('.my-text');
  let tl = new TimelineMax();

  tl.to('.my-text .char', {
    y: 0,
    opacity: 1,
    stagger: 0.02,
    duration: 0.2
  });

  //  document.querySelector('.char').style.overflow ='none'
</script>