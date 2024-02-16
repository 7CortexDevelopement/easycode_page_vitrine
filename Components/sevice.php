<?php 
$service = [
    ['title' => 'Créez votre portfolio en ligne', 'desc' => 'Notre application vous aide à créer et à gérer facilement votre portefeuille en ligne, afin de présenter vos compétences et réalisations de manière professionnelle.' ],
    ['title' => 'Lancez votre site e-commerce', 'desc' => "Créez et gérez votre propre boutique en ligne pour vendre vos produits ou services, avec des fonctionnalités avancées de gestion des stocks, de paiement sécurisé et d' expérience client optimisée." ],
    ['title' => "Optez pour l'automatisation des tâches ", 'desc' => "Nos solutions de gestion personnalisées offrent des outils avancés pour gérer efficacement les différents aspects de votre entreprise, tels que la gestion de stock, la comptabilité, le suivi des employés et bien plus encore." ],
    ['title' => "Transformez votre idée en réalité", 'desc' => "Nous sommes là pour concrétiser votre idée personnalisée en une application fonctionnelle et intuitive, répondant parfaitement à vos besoins spécifiques." ]
];

?>

<section id="service">

    <h1 data-aos="fade-up" class="block font-medium text-gray-200 text-4xl sm:text-5xl md:text-6xl  text-center">NOS SERVICES</h1>
    
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