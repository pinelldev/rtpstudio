<?php require_once "includes/header.php"?>
    
    <?php

        $links = new LinkController();
        $links->getLink();
    ?>

<?php require_once "includes/footer.php"?>