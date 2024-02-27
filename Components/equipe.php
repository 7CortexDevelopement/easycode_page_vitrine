<?php

$equipe = [
    [
        "photo" => "Assets/image/equipe/kylian.png",
        "name" => "Kylian Cavagna",
        // "job" =>  lang('equipe_job_1'),
        "linkedin" => "https://www.linkedin.com/in/kylian-cavagna-68216a1b2/",

    ],
    [
        "photo" => "Assets/image/equipe/john.jpg",
        "name" => "John Larsson",
        // "job" => lang('equipe_job_1'),
        "linkedin" => "",

    ],
    [
        "photo" => "Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        // "job" => lang('equipe_job_1'),
        "linkedin" => "www.linkedin.com/in/rubens-mensah",

    ],

]

?>

<style>
    .swiper {
        margin-top: 100px;

    }

    .swiper-wrapper {
        padding: 100px 0;
    }

    .swiper-button-prev,
    .swiper-button-next {
        color: white;
        border: white 1px solid;
        border-radius: 100%;
        width: 40px;
        height: 40px;
        top: 0;
        right: 0;
        top: 30px;
    }

    .swiper-button-prev {
        right: 50px;
        left: unset;
    }

    .swiper-button-prev:after,
    .swiper-button-next:after {
        font-size: 20px !important;
    }

    @media screen and (max-width : 768px) {
        .swiper-button-prev {
            right: 50%;
            left: unset;
            margin: 0 5px;
        }

        .swiper-button-next {
            left: 50%;
            right: unset;
            margin: 0 5px;
        }
    }
</style>
<section id="equipe">
    <h1 class="block font-medium text-gray-200 text-4xl sm:text-5xl md:text-6xl  text-center" data-aos="fade-up"><?php echo lang('equipe_section_title'); ?></h1>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="swiper-wrapper ">
            <!-- Slides -->

            <?php
            foreach ($equipe as $e) { ?>

                <div class="text-center swiper-slide px-7 md:px-0">
                    <img class="rounded-xl sm:size-48  mx-auto" src="<?php echo $e["photo"] ?>" alt="Image Description" data-aos="zoom-in">
                    <div class="mt-2 sm:mt-4" data-aos="zoom-in">
                        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-gray-200">
                            <?php echo $e["name"] ?>
                        </h3>

                        <div class="mt-2 sm:mt-auto space-x-2.5">

                            <?php
                            if ($e["linkedin"] != "") { ?>

                                <a class="inline-flex justify-center items-center text-white rounded-full hover:text-gray-800 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="<?php echo $e["linkedin"] ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256">
                                        <path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"></path>
                                    </svg>
                                </a>


                            <?php }

                            ?>


                        </div>

                    </div>
                </div>


            <?php  }

            ?>
        </div>
        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->


        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
    </div>
</section>