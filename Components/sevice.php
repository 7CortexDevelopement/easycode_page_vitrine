<?php 
$service = [
    ['title' => lang('service_title_1'), 'desc' => lang('service_desc_1') ],
    ['title' => lang('service_title_2'), 'desc' => lang('service_desc_2') ],
    ['title' => lang('service_title_3'), 'desc' => lang('service_desc_3') ],
    ['title' => lang('service_title_4'), 'desc' => lang('service_desc_4') ]
];

?>

<section id="service">

    <h1 data-aos="fade-up" class="block font-medium text-gray-200 text-4xl sm:text-5xl md:text-6xl  text-center"><?php echo lang('service_section_title'); ?></h1>
    
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php 
            foreach ($service as $s) {?>
                   <div data-aos="zoom-in" class="flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700 dark:border-t-blue-500 dark:shadow-slate-700/[.7]">
                <div class="p-4 md:p-5">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white text-center">
                        <?php echo $s["title"] ?>
                    </h3>
                    <p class="mt-2 text-gray-500 dark:text-gray-400">
                    <?php echo $s["desc"] ?>
                    </p>
                  
                </div>
            </div>
            <?php  }
            
            ?>
        
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
</section>