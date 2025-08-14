<?php

include 'libs/load.php';

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <?php load_template('_head');  ?>
</head>

<body>

<style>
    html,
    body {
        height: 100%;
    }

    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    /* 3  username and phone added*/
    .form-signin input[name="username"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;


    }

    .form-signin input[name="phone"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        border-top-right-radius: 0;

    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        /* 3 */
        border-top-left-radius: 0;
        border-top-right-radius: 0;

    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
    <?php  load_template('_theme');  ?>
    <header data-bs-theme="dark">
        <div class="collapse text-bg-dark" id="navbarHeader">
            <?php  load_template('_header');  ?>

        </div>
    </header>
    <main>


        <?php load_template('_signup');  ?>
    </main>



    <?php  load_template('_footer');  ?>
    <script src="./assets/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
</body>

</html>