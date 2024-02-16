<?php

$equipe = [
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ],
    [
        "photo" => "../Assets/image/equipe/rubens.png",
        "name" => "Rubens Mensah",
        "job" => "Chef de projets digitaux",
        "linkedin" => "www.linkedin.com/in/rubens-mensah",
        "mail" => "mailto:rubs99rstd@gmail.com",
    ]
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

    .swiper-button-prev:after , .swiper-button-next:after{
        font-size: 20px !important;
    }
</style>
<section id="equipe">
    <h1 class="block font-medium text-gray-200 text-4xl sm:text-5xl md:text-6xl  text-center">NOTRE EQUIPE</h1>
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

                <div class="text-center swiper-slide ">
                    <img class="rounded-xl sm:size-48  mx-auto" src="<?php echo $e["photo"] ?>" alt="Image Description">
                    <div class="mt-2 sm:mt-4">
                        <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-gray-200">
                            <?php echo $e["name"] ?>
                        </h3>
                        <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-gray-400">
                            <?php echo $e["job"] ?>
                        </p>
                        <div class="mt-2 sm:mt-auto space-x-2.5">
                            <a class="inline-flex justify-center items-center text-white rounded-full hover:text-gray-800 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="<?php echo $e["linkedin"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256">
                                    <path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"></path>
                                </svg>
                            </a>
                            <a class="inline-flex justify-center items-center text-white rounded-full hover:text-gray-800 dark:hover:text-gray-200 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="<?php echo $e["mail"] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 256 256">
                                    <path d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z"></path>
                                </svg>
                            </a>

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