<header id='nav' style="background-color: transparent; z-index:999" class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm py-4   fixed">
  <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between" aria-label="Global">
    <a class="sm:order-1 flex-none text-xl font-semibold dark:text-white" href="#hero">EASYCODE</a>
    <div class="sm:order-3 flex items-center gap-x-2">
      <button type="button" class="sm:hidden hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-gray-700 dark:text-white dark:hover:bg-white/10 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment" aria-label="Toggle navigation">
        <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" x2="21" y1="6" y2="6" />
          <line x1="3" x2="21" y1="12" y2="12" />
          <line x1="3" x2="21" y1="18" y2="18" />
        </svg>
        <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 6 6 18" />
          <path d="m6 6 12 12" />
        </svg>
      </button>
      <a class="hidden md:inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 shadow-lg shadow-transparent hover:shadow-blue-700/50 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white py-3 px-6 dark:focus:ring-offset-gray-800" href="#devis">
      <?php echo lang('obtenir_devis'); ?>
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6" />
        </svg>
      </a>
      <div class="hs-dropdown relative inline-flex">
        <?php
            
        if ($_SESSION['lang'] == 'fr') { ?>

          <button id="hs-dropdown-custom-trigger" type="button" class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            <img class="w-8 h-8 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Flag_of_Switzerland_%28Pantone%29.svg/langfr-225px-Flag_of_Switzerland_%28Pantone%29.svg.png" alt="Maria">
          </button>

          <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700" aria-labelledby="hs-dropdown-custom-trigger">
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="?lang=en">
              <img class="w-8 h-8 rounded-full" src="https://www.shutterstock.com/image-vector/british-flag-icon-standard-color-600nw-2331384833.jpg"> English
            </a>
          </div>


        <?php } else {  ?>

          <button id="hs-dropdown-custom-trigger" type="button" class="hs-dropdown-toggle py-1 ps-1 pe-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            <img class="w-8 h-8 rounded-full" src="https://www.shutterstock.com/image-vector/british-flag-icon-standard-color-600nw-2331384833.jpg">
          </button>

          <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700" aria-labelledby="hs-dropdown-custom-trigger">
            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700" href="?lang=fr">
              <img class="w-8 h-8 rounded-full" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Flag_of_Switzerland_%28Pantone%29.svg/langfr-225px-Flag_of_Switzerland_%28Pantone%29.svg.png" alt="Maria"> Français
            </a>
          </div>


        <?php  }

        ?>

      </div>
    </div>
    <div id="navbar-alignment" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2">
      <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
        <a class="font-medium text-lg  text-white hover:text-gray-400 dark:text-white dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white" href="#timeline"><?php echo lang('header_propos'); ?></a>
        <a class="font-medium text-lg text-white hover:text-gray-400 dark:text-white dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white" href="#service"><?php echo lang('header_service'); ?></a>
        <a class="font-medium text-lg text-white hover:text-gray-400 dark:text-white dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white" href="#projet"><?php echo lang('header_projet'); ?></a>
        <a class="font-medium text-lg text-white hover:text-gray-400 dark:text-white dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white" href="#equipe"><?php echo lang('header_equipe'); ?></a>
        <a class="font-medium text-lg text-white hover:text-gray-400 dark:text-white dark:hover:text-gray-500 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white" href="#testimony"><?php echo lang('header_temoignage'); ?></a>
      </div>

    </div>
  </nav>
</header>