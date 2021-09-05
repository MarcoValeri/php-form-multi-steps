<?php
// Require initialize.php and related code
require_once('./private/initialize.php');
?>

<!-- HEAD -->
<?php
// Include head of the page
include(INCLUDES_PATH . 'head.php');
?>
</head> <!-- Close the head tag as required into the head.php file -->

<!-- BODY -->
<body>

    <!-- HEADER -->
    <?php
    // Include header.php and related code
    include(INCLUDES_PATH . 'header.php');
    ?>

    <!-- CONTACT FORM -->
    <?php
    // Include contact_form.php and related code
    include(INCLUDES_PATH . 'contact_form.php');
    ?>


</body>

<!-- FOOTER -->
<?php
// Include footer of the page
include(INCLUDES_PATH . 'footer.php');
?>