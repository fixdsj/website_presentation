<?php
    mail('contact@francoisxavier-desaintjean.fr', 'Envoi depuis le formulaire de Contact', $_POST['message'], 'From: contact@francoisxavier-desaintjean.fr');
    ?>