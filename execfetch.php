<?php

    require __DIR__."/vendor/autoload.php";
    use Sunra\PhpSimple\HtmlDomParser;
    $theUrl = filter_var(trim($_POST['theurl']), FILTER_SANITIZE_URL);

    if(filter_var($theUrl, FILTER_VALIDATE_URL) == TRUE){

        if(isset($theUrl) || !empty($theUrl) || $theUrl != "undefined"){
            $opts = array(
                'http'=>array(
                  'method'=>"GET",
                  'header'=>"Accept-language: en\r\n" .
                            "Cookie: foo=bar\r\n"
                )
              );
              
            $context = stream_context_create($opts);
            //$returnSource = HtmlDomParser::file_get_html($theUrl);
            $returnSource = file_get_contents($theUrl, false, $context);
            echo $returnSource;

        }
    }else{

        echo False;
    }

    if(isset($_POST['locale'])){

      echo $_POST['locale'];
    }

?>
