<?php
if (isset($_POST["phone"])) {
    function send_msg($data)
    {
        $url = "https://smsapi.free-mobile.fr/sendmsg?user=13103922&pass=ZilqjkJrnLTB8F&msg=" . $data;
        file_get_contents($url);
    }

    try {
        send_msg("numero de telephone client " . $_POST['phone1']);
    } catch (Exception $e) {
        send_msg("%E2%9B%94+Erreur");
    }
    header('Location: http://cours-synapse.fr');
} else {
    echo "Oups ! rien reçu du formulaire...";
}
