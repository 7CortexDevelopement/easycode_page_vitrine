<?php 
$error = false;
$msg = "Notre équipe a bien réceptionné votre message ";

function envoyerEmail($destinataire, $sujet, $message, $expediteur ) {
    // En-têtes du message
    $headers = "From: $expediteur\r\n";
    $headers .= "Reply-To: $expediteur\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    // Envoi de l'e-mail
    $envoi = mail($destinataire, $sujet, $message, $headers);

    // var_dump($envoi);

    // Vérification si l'e-mail a été envoyé avec succès
    return $envoi;
}


if (isset($_POST['contact'])) {

    $destinataire = 'rubs99rstd@gmail.com';
    $sujet = "Demande de devis easycode";
    $message = '<p>Email de l\'expéditeur : ' . $_POST['email'] . '</p><p>Téléphone : ' . $_POST['phone'] .'<p>Nom : ' . $_POST['nom'] . '</p><p>Ville : ' . $_POST['ville'] . '</p><p>' . $_POST['msg'] . '</p>';
    $expediteur = $_POST['email'];


    if (!envoyerEmail($destinataire, $sujet, $message, $expediteur)) {
        
        $error = true;
        $msg = "Une erreur est survenue lors de l'envoi de votre message.";
    };
}

?>

<?php if (isset($_POST['contact'])) {

?>

<div id="dismiss-alert" class="fixed bottom-2 right-2  hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4  <?php echo $error ?  "dark:bg-red-800 dark:border-red-900 dark:text-white" : " dark:bg-teal-800 dark:border-teal-900 dark:text-white" ?>" role="alert">
  <div class="flex">
    <div class="flex-shrink-0">
      <svg class="flex-shrink-0 size-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="m9 12 2 2 4-4"/></svg>
    </div>
    <div class="ms-2">
      <div class="text-sm font-medium">
        <?php echo $msg ?>
      </div>
    </div>
    <div class="ps-3 ms-auto">
      <div class="-mx-1.5 -my-1.5">
        <button type="button" class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600 dark:bg-transparent dark:hover:bg-teal-800/50  dark:text-teal-600" data-hs-remove-element="#dismiss-alert">
          <span class="sr-only">Dismiss</span>
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
      </div>
    </div>
  </div>
</div>

<?php }

?>


<section id="devis">
    <!-- Contact Us -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                    Contactez-nous
                </h1>
                <p class="mt-1 text-gray-600 dark:text-gray-400">
                    Nous serions ravis de discuter de la manière dont nous pouvons vous aider.
                </p>
            </div>
        </div>

        <div class="mt-12 max-w-lg mx-auto">
            <!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">
                <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
                    Demandez un devis
                </h2>

                <form method="POST">
                    <div class="grid gap-4 lg:gap-6">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="hs-firstname-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Nom</label>
                                <input type="text" name="nom" id="hs-firstname-contacts-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>

                            <div>
                                <label for="hs-lastname-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">ville</label>
                                <input type="text" name="ville" id="hs-lastname-contacts-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <div>
                                <label for="hs-email-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
                                <input type="email" name="email" id="hs-email-contacts-1" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>

                            <div>
                                <label for="hs-phone-number-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Téléphone</label>
                                <input type="text" name="phone" id="hs-phone-number-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div>
                            <label for="hs-about-contacts-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Message</label>
                            <textarea placeholder="Veuillez nous décrire la façon dont nous pouvons vous aider dans les grandes lignes" id="hs-about-contacts-1" name="msg" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"></textarea>
                        </div>
                    </div>
                    <!-- End Grid -->

                    <div class="mt-6 grid">
                        <button type="submit" name="contact" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Soumettre</button>
                    </div>

                    
                </form>
            </div>
            <!-- End Card -->
        </div>

        
    </div>
    <!-- End Contact Us -->
</section>