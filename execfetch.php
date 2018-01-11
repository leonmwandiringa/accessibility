<?php

    $theUrl = filter_var(trim($_POST['theurl']), FILTER_SANITIZE_URL);

    if(filter_var($theUrl, FILTER_VALIDATE_URL) == TRUE){

        if(isset($theUrl) || !empty($theUrl) || $theUrl != "undefined"){

            $returnSource = file_get_contents($theUrl);
            echo $returnSource;

        }
    }else{

        echo False;
    }

    if(isset($_POST['locale'])){

      echo $_POST['locale'];
    }

?>
