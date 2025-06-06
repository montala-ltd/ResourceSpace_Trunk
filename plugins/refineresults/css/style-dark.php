<?php

include_once "../../../include/boot.php";

$k = getval('k', '');
if ((is_array($k) || trim($k) === '') && getval('noauth', '') != true) {
    include '../../../include/authenticate.php';
}

header("Content-type: text/css");

if (isset($user_pref_appearance)) {
    if ($user_pref_appearance == "device") {
        ?>
        @media (prefers-color-scheme: dark) {
        <?php
    }

    if ($user_pref_appearance == "dark" || $user_pref_appearance == "device") {
        ?>
        #refine_results_button {
            background-color: #545454;
        }
        #refine_results_button a,
        #refine_results_button a:visited,
        #refine_results_button a:link {
            color: white;
        }
        <?php
    }

    if ($user_pref_appearance == "device") {
        ?>
        }
        <?php
    }
}
