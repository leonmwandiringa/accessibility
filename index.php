<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <title>Soruce Extarction</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <style>

        /*the loader style*/
          .theloader {
            display: none;
            width: 5em;
            margin: 10% auto;
          }
          .theloader2 {
            display: block;
            width: 5em;
            margin: 10% auto;
          }

          @-webkit-keyframes rotate {
            0% {
              -webkit-transform: translateY(0%);
            }
            30% {
              -webkit-transform: translateY(-0.25em);
            }
            50% {
              -webkit-transform: translateY(0%);
            }
            70% {
              -webkit-transform: translateY(0.25em);
            }
          }

          .theloader .theinner1, .theloader .theinner2, .theloader .theinner3 {
            display: inline-block;
            margin: 0.125em;
            width: 0.5em;
            height: 0.5em;
            border: 1px solid lightgray;
            border-radius: 1em;
            background-color: lightgray;
            -webkit-transform-origin: 50%;
            -webkit-animation-duration: 0.75s;
            -webkit-animation-name: rotate;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
          }

          .theloader .theinner2 {
            -webkit-animation-delay: 0.1875s;
          }

          .theloader .theinner3 {
            -webkit-animation-delay: 0.375s;
          }
          .theloader2 .theinner1, .theloader2 .theinner2, .theloader2 .theinner3 {
            display: inline-block;
            margin: 0.125em;
            width: 0.5em;
            height: 0.5em;
            border: 1px solid lightgray;
            border-radius: 1em;
            background-color: lightgray;
            -webkit-transform-origin: 50%;
            -webkit-animation-duration: 0.75s;
            -webkit-animation-name: rotate;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
          }

          .theloader2 .theinner2 {
            -webkit-animation-delay: 0.1875s;
          }

          .theloader2 .theinner3 {
            -webkit-animation-delay: 0.375s;
          }
          /* end of preloader*/

          .sourceCodeBlock{

            display:none;
          }
          .url-extract-hammertime{
            position: fixed;
            bottom: 2px;
          }

          .url-extract{

            transition: 1s all;

          }
          .codeExec1{
            display: none;
          }
          .showpage{

            display: none;
          }
          #codeExec, #controls, #controls2, #leftInsightsbtn{

            display: none;
          }
          /* iframing code */
          @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,300);
  body {
    font-family: 'Open Sans', sans-serif;
    background-color: #FFFAF6;
  }
  /*Basic Phone styling*/
  
  .phone {
    border: 40px solid #ddd;
    border-width: 55px 7px;
    border-radius: 40px;
    margin: 50px auto;
    overflow: hidden;
    transition: all 0.5s ease;
  }
  
  .phone iframe {
    border: 0;
    width: 100%;
    height: 100%;
  }
  /*Different Perspectives*/
  
  .phone.view_1 {
    transform: rotateX(50deg) rotateY(0deg) rotateZ(-50deg);
    box-shadow: -3px 3px 0 #BBB, -6px 6px 0 #BBB, -9px 9px 0 #BBB, -12px 12px 0 #BBB, -14px 10px 20px #666;
  }
  
  .phone.view_2 {
    transform: rotateX(0deg) rotateY(-60deg) rotateZ(0deg);
    box-shadow: 5px 1px 0 #BBB, 9px 2px 0 #BBB, 12px 3px 0 #BBB, 15px 4px 0 #BBB, 0 7px 20px #999;
  }
  
  .phone.view_3 {
    transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    box-shadow: 0px 3px 0 #BBB, 0px 4px 0 #BBB, 0px 5px 0 #BBB, 0px 7px 0 #BBB, 0px 10px 20px #666;
  }
  /*Controls*/

  #views {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 200px;
  }
  
  #views button {
    width: 198px;
    border: 1px solid #bbb;
    background-color: #fff;
    height: 40px;
    margin: 10px 0;
    color: #666;
    transition: all 0.2s;
  }
  
  #views button:hover {
    color: #444;
    background-color: #eee;
  }
  
  @media (max-width:900px) {
    #wrapper {
      transform: scale(0.8, 0.8);
    }
  }
  
  @media (max-width:700px) {
    #wrapper {
      transform: scale(0.6, 0.6);
    }
  }
  
  @media (max-width:500px) {
    #wrapper {
      transform: scale(0.4, 0.4);
    }
  }
  /* end of iframing */
  /* start of overlay */
  .overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 999999;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 12%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}



.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
/* end of overlay */
/* the circular progress */

    </style>

</head>
<body>
<!-- navigation -->
<div class="container-fluid">
<div id="insightsleft" class="overlay">

  <a href="javascript:void(0)" class="closebtn" style="color: white; opacitty: 1;" id="closeleftbtn">&times;</a>
  <div class="overlay-content">
  <h3 class="text-center" style="color: white; opacity: 1; margin: 0 0 10px;"> Page Title: <span id="pagetitle"></span></h3>
  <div class="col-sm-12">
  <div class="theloader2 loaddd" style="position: absolute; left: 50%; background: black; border-radius: 2px; z-index: 99999;">
  <!-- style="position: absolute;left: 50%;" -->
      <span class="theinner1"></span>
      <span class="theinner2"></span>
      <span class="theinner3"></span>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
    <p class="lead">Total Page size size: <span id="pgsize"></span></p>
    <div class="progress">
      <div class="progress-bar progress-bar-success jsbar" role="progressbar" style="">
        <span id="jsval"></span>Javascript
      </div>
      <div class="progress-bar progress-bar-warning cssbar" role="progressbar" style="">
      <span id="cssval"></span>CSS 
      </div>
      <div class="progress-bar progress-bar-danger imgbar" role="progressbar" style="">
      <span id="imgval"></span> Images
      </div>
    </div>
    <!--bars  -->
        <div class="col-sm-4">
        <h4 class="text-center"> Page Load Speed</h4>
            <div class="well well-lg">
                
                <p class="lead" id="pgspeed"></p>
            </div>
        </div>
        <div class="col-sm-4">
        <h4 class="text-center"> Page Usability</h4>
            <div class="well well-lg">
                
                <p class="lead" id="pgusability"></p>
            </div>
        </div>
    
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading">Links</div>
    <div class="panel-body">
      
      <table class="table table-reponsive table-striped table-bordered">
        <tr>
            <td> Number of Links</td>
            <td id="numberoflinks"></td>
        </tr>
        <tr>
            <td> Internal Domain Links</td>
            <td id="internallinks"></td>
        </tr>
        <tr>
            <td> External Domain Links</td>
            <td id="externallinks"></td>
        </tr>
        <tr>
            <td> External Links To Microsoft</td>
            <td id="externallinkstomicrosoft"></td>
        </tr>
        <tr>
            <td> External Tracked Microsoft Links</td>
            <td id="externaltrackedtomicrosoft"></td>
        </tr>
      </table>
    
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="panel panel-default">
    <div class="panel-heading"></div>
    <div class="panel-body">
      
    
      </div>
    </div>
  </div>
  <!-- meta details -->
  <div class="col-sm-12">
    <div class="panel panel-default">
    <div class="panel-heading"><h2 id="meta"> Meta Tags</h2></div>
    <div class="panel-body">
      <table class="table table-responsive table-bordered">
        <thead>
          <tr style="background: #84afff; color: white;"> 
            <th>Meta Type</th>
            <th>Content</th>
            <th>Status</th>
          </tr>
          <tr>
            <th>Meta Title</th>
            <td id="meta-title-txt"></td>
            <td id="meta-title-status"></td>
          </tr>
          <tr class="active">
            <th>Meta Description</th>
            <td id="meta-desc-txt"></td>
            <td id="meta-desc-status"></td>
          </tr>
          <tr>                      
          <th>Meta Keywords</th>
          <td id="meta-keywords-txt"></td>
          <td id="meta-keywords-status"></td>

          </tr>
        </thead>

      </table>
    
      </div>
    </div>
  </div>


  </div>
</div>
<button id="leftInsightsbtn" style="margin: 10px 0 10px 10px;" class="btn btn-default pull-left" type="button">&#9776; View Page Insight</button>
<!-- <button id="rightInsightsbtn" style="margin: 10px 10px 10px 10px;" class="btn btn-default pull-right" type="button">&#9776; View Page Insight</button> -->


  <div class="btn-group" id="controls2" style="z-index: 999; z-index: 999;position: absolute;
    display: inline-block;
    margin: 10px; right: 10px;">
    
    <a href="javascript:void(0)" class="btn btn-primary" id="iphone6">iPhone 6</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="galaxys5">Galaxy S6</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="ipad1">iPad</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="ipadpro">iPad pro</a>
  </div>

</div>
    <nav class="navbar navbar-inverse sitenavigation navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Insights Tool</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <!-- <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul> -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="theloader">
      <span class="theinner1"></span>
      <span class="theinner2"></span>
      <span class="theinner3"></span>
    </div>
    <p class="showpage text-center" style="margin-top: 40px;">
    <span style="display: block; margin: 10px 0; font-size: 32px; font-weight: 700;">Test Page</span>
    <a href="javascript:void(0)" class="btn btn-default btn-lg showthepage">Run The Test</a></p>
    <!--source code exec-->      
    <div class="codeExec1"></div>
    <div class="codeExecBody" style="display: none;"></div>
    <div class="codeExec3"></div>
<div id="codeExec">
  <!-- <div class="center-block col-md-8 col-md-push-2">
    <div class="form-group col-xs-6">
      <label for="iframeWidth">Width:</label>
      <input type="number" id="iframeWidth" class="form-control"/>
    </div>
    <div class="form-group col-xs-6">
      <label for="iframeHeight">Height:</label>
      <input type="number" id="iframeHeight" class="form-control"/>
    </div>
  </div> -->
<div class="container-fluid">
    <div id="wrapper">
      <div class="phone view_3" id="phone_1">
        <iframe src="" id="frame_1"></iframe>
      </div>
    </div>
 </div>

</div>

<div class="container-fluid thecontainer">
  <div class="container">
  <div class="search form" style="margin-top: 40px;">
  
  <h1 class="text-center theheader"> Fetch Pre developed Sites Source</h1>

        <form id="url-extract" class="url-extract">
  <!-- <div class="center-block col-md-8 col-md-push-2" id="controls">

    <div class="form-group col-xs-6" style="z-index: 9999999">
      <label for="iframeWidth">Width:</label>
      <input type="number" id="iframeWidth" class="form-control"/>
    </div>
    <div class="form-group col-xs-6" style="z-index: 9999999">
      <label for="iframeHeight">Height:</label>
      <input type="number" id="iframeHeight" class="form-control"/>
    </div>

  </div> -->
            <div class="center-block urltextbox">
                <div class="form-group col-md-8 col-md-push-2">
                <label for="url" class="sr-only"> Enter Url</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-save"></i></span>
                          <input type="text" class="form-control col-md-8" id="fetch-url-link" required>   
                      <span class="input-group-btn">
                          <a href="javascript:void(0)" class="btn btn-default" id="fetch-btn"> Fetch Url</a>
                      </span>
                    </div>
                </div>
            </div>
        <!-- <div class="sourceCodeBlock" data-grid="container">
            <div class="c-textarea">
                <label class="c-label" for="default-textarea-6">Label</label>
                <textarea id="default-textarea-6" class="f-scroll f-flex" name="textarea-default" cols="100" rows="10"></textarea>
            </div>
        </div> -->
            <!-- <div class="form-group sourceCodeBlock">
                <textarea class="theSource form-control" id="theSource"></textarea>
            </div> -->
        </form>


    </div>
    </div>
    </div>
    <script src="./assets/js/jquery-3.2.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js" id="intjs"></script>
    
  <script>

      $(document).ready(function(){
        "use strict";
        /**
        *i apologise wrote spaghetti code on  this one, refactoring and making use of es6 on the way, forgive me urs truly - "No need for talk lets do this"
         */

          var enteredUrl, testUrl, googleResults,  googleXhr, xhr, responseSource, linkreltag, theBodyContent,pageImages, pageLinksNumber, pageLinks, linkAriaLabel, framwt, framht, linkExternal, linkInternal, linkExternalMicrosoft, linkMicrosoftOcd, internalLinksdta;
          // var mwfjs = "http://assets.onestore.ms/cdnfiles/external/mwf/long/v1/v1.20.0/scripts/mwf-auto-init-main.var.min.js";
          // var mwfcss = "https://assets.onestore.ms/cdnfiles/external/mwf/long/v1/v1.20.0/css/mwf-west-european-green-default.min.css";
          // var btrpcss = "./assets/css/bootstrap.min.css";
          // var btrpjs = "./assets/js/bootstrap.min.js";
          var phone = document.getElementById("phone_1"),
              iframe = document.getElementById("frame_1");

          var thfn = $("phone_1");

        // listen to the show content event
          $(".showthepage").click(function(){
            $("#phone_1 iframe").attr("src", enteredUrl);
            $(".sitenavigation").hide();
            $(".showpage").hide(500);
            $("#codeExec, #controls, #controls2, #leftInsightsbtn").fadeIn(1000);

              //$(".theheader").hide(200);
              
              // $(".sourceCodeBlock").show(500, function(){

              //   $("link[rel='stylesheet']").attr("href", mwfcss);
              //   $("#intjs").attr("src", mwfjs);

              // });


          });
          $("#closeleftbtn").click(function(){

            closeLeftNav();

          });
          $("#leftInsightsbtn").click(function(){

            openLeftNav();
          });
//screen size events
          $("#iphone6").click(function(){

            $("#phone_1").css({"width":"375px","height":"667px"});

          });
          $("#galaxys5").click(function(){

            $("#phone_1").css({"width":"360px","height":"640px"});

          });

          $("#ipad1").click(function(){

            $("#phone_1").css({"width":"768px","height":"1024px"});

          });

          $("#ipadpro").click(function(){

            $("#phone_1").css({"width":"1024px","height":"1366px"});

          });

          $("#iframeWidth").blur(function(){

            framwt = $(this).val();
            if(framwt == "" || framwt == undefined){
               thfn.css("width", framwt);
               updateIframe();
            }
          });
          $("#iframeHeight").blur(function(){

            framht = $(this).val();
            if(framht == "" || framht == undefined){
              thfn.css("height", framht);
              updateIframe();
            }
          });

          $("#fetch-btn").click(function(e){

            enteredUrl = $("#fetch-url-link").val();
            //check validity
            if(enteredUrl == null || enteredUrl == ""){

              e.preventDefault();
              console.log("blocked");
            }else{

              execInput(enteredUrl);

            }
            
          });
          
                    //run the accessibilty test here
          function checkAccesibiltyAndPass(responseSource){

            //console.log(responseSource);
            $(".codeExec1").append(responseSource);
            $(".codeExec1 link, .codeExec1 script, .codeExec1 style").remove();
            //let theBodyOnly = $(".codeExec1");

            $(".codeExecBody").append(theBodyOnly);
            //define the links
            pageLinks = $(".codeExec1 #BodyContent a");
            pageLinksNumber = pageLinks.length;

            //write to a file
            $("#numberoflinks").text(pageLinksNumber);

            //check each of the link for validation
            linkAriaLabel = [];
            linkExternal = [];
            linkInternal = [];
            linkMicrosoftOcd = [];
            linkExternalMicrosoft = [];
            pageLinks.each(function(){
              //check if there is are aria label tags
              
              if($(this).attr("href") != undefined){
                //linkAriaLabel.push($(this).attr("href"));
                //check for external links

                if($(this).attr("href").search(/xbox.com/) == -1){

                  linkExternal.push($(this).attr("href"));
                  $("#externallinks").text(linkExternal.length);
                  
                  

                }else{

                  linkInternal.push($(this));
                  $("#internallinks").text(linkInternal.length);

                }

              }


            });
            //console.log(responseSource);
            console.log(linkInternal);
            //console.log(pageLinksNumber);
            //console.log(linkAriaLabel);

              //check for microsoft trackable links
            if(linkExternal.length > 0){
              for(var goext=0; goext < linkExternal.length; goext++){

                if(linkExternal[goext].search(/microsoft.com/g) != -1){

                  linkExternalMicrosoft.push(linkExternal[goext]);

                }
              }
              $("#externallinkstomicrosoft").text(linkExternalMicrosoft.length);
            }
            if(linkExternalMicrosoft.length > 0){

              for(var mcrocd=0; mcrocd < linkExternalMicrosoft.length; mcrocd++){

                if(linkExternalMicrosoft[mcrocd].search(/\?icid=/) != -1){

                  linkMicrosoftOcd.push(linkExternalMicrosoft[mcrocd]);

                }

              }
              $("#externaltrackedtomicrosoft").text(linkMicrosoftOcd.length);

            }

            checkMetaTags();
          }
          //run the meta tags checker
          function checkMetaTags(){
                var metaTitle, metaDescription, metaKeywords;
                var headerHolder = $(".codeExec1");
                metaDescription = $(".codeExec1 meta[name='description']").attr("content");
                metaKeywords = $(".codeExec1 meta[name='keywords']").attr("content");
                metaTitle = $(".codeExec1 title").text();
                //console.log(metaDescription+" "+ metaKeywords +" "+metaTitle);

                $("#meta-title-txt").text(metaTitle);
                $("#meta-desc-txt").text(metaDescription);
                $("#meta-keywords-txt").text(metaKeywords);
                //meta status
                if(metaTitle.length > 60){
                  $("#meta-title-status").text("Title is too long. its "+(metaTitle.length-60)+" Long. Must be Between 50 - 60")
                  }else if(metaTitle.length > 50 && metaTitle.length < 60){

                    $("#meta-title-status").text("Its all Good. Title is in the right standards");
                  }else if(metaTitle.length < 50){

                    $("#meta-title-status").text("Title is Set But 50 - 60 chars is the best");
                }

                if(metaDescription.length > 160){

                  $("#meta-desc-status").text("The Description is "+metaDescription.length - 160+" Long. It should be less than 160 chars");

                }else{

                  $("#meta-desc-status").text("The Description is in the right range of characters");
                }

                if(metaKeywords.length > 160){

                  $("#meta-keywords-status").text("The Keywords is "+metaKeywords.length - 160+" Long. It should be less than 160 chars");

                }else{

                  $("#meta-keywords-status").text("The Keywords are the right range of characters");
                }

              }

          //search for microsoft external links
          function runGoogleAnalytics(enteredUrl){
            testUrl = "https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url="+enteredUrl+"&strategy=mobile&key=AIzaSyB_9OpSpNIFlv6VEQjRzkeOTjxKPOdErqU";
            googleXhr = new XMLHttpRequest();
            googleXhr.open("GET", testUrl, true);

            googleXhr.onerror = function(){

              console.log("error bro");

            }
            googleXhr.onload = function(){
              $(".loaddd").fadeIn(500);
              $(".loaddd").show(500);
              if(this.status == 200){
                $(".loaddd").fadeOut(500);
                var jsval, htmlval, cssval, imgval, pgsize, htmll, pgspeed, pgusability;

                googleResults = JSON.parse(this.responseText);
                console.log(googleResults);

                $("#pagetitle").text(googleResults.title);
                
                jsval = Number(googleResults.pageStats.javascriptResponseBytes);
                htmlval = Number(googleResults.pageStats.htmlResponseBytes);
                cssval = Number(googleResults.pageStats.cssResponseBytes);
                imgval = Number(googleResults.pageStats.imageResponseBytes);
                pgspeed = googleResults.ruleGroups.SPEED.score;
                pgusability = googleResults.ruleGroups.USABILITY.score;

                pgsize = (jsval + htmlval + cssval + imgval)/1048576;
                //console.log(pgsize);
                $("#pgspeed").text(pgspeed+"%");
                $("#pgusability").text(pgusability+"%");
                $("#jsval").text((jsval/1048576).toPrecision(3)+"mb ");
                //$("#htmlval").text((htmlval/1048576).toPrecision(3)+"mb ");
                $("#cssval").text((cssval/1048576).toPrecision(3)+"mb ");
                $("#imgval").text((imgval/1048576).toPrecision(3)+"mb ");
                htmll = (((htmlval/1048576)/pgsize)/3)*100;

                $("#pgsize").text(" "+pgsize.toPrecision(3)+" mb ");

                $("#jsval").parent().css("width",((jsval/1048576)/pgsize)*100+htmll+"%");
                
                $("#cssval").parent().css("width",((cssval/1048576)/pgsize)*100+htmll+"%");
                $("#imgval").parent().css("width",((imgval/1048576)/pgsize)*100+htmll+"%");
              }

            }
            googleXhr.send();

          }

          //execute the request
          function execInput(enteredUrl){

            $(".theloader").show(500);

              xhr = new XMLHttpRequest();

              xhr.open("POST", "execfetch.php", true);

              xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

              xhr.onerror = function(){

                console.log("error");

              }
              //run the code when everything is set
              xhr.onload = function(){
                if(this.status==200){
                  $(".theloader").hide(1000); 

                    $(".showpage").fadeIn(700).delay(400);
                    $(".theheader").fadeOut(600);
                    $(".url-extract").addClass("url-extract-hammertime");

                  responseSource = this.responseText;
                  // run the func
                  runGoogleAnalytics(enteredUrl);
                  checkAccesibiltyAndPass(responseSource);


                }
              
              }

              xhr.send("theurl="+enteredUrl);

          }

          // iframing code
          /*Only needed for the controls*/


/*View*/
function updateView(view) {
  if (view) {
    phone.className = "phone view_" + view;
    
  }
}

/*Controls*/
function updateIframe() {
  iframe.src = document.getElementById("fetch-url-link").value;

  phone.style.width = document.getElementById("iframeWidth").value + "px";
  phone.style.height = document.getElementById("iframeHeight").value + "px";

  /*Idea by /u/aerosole*/
  document.getElementById("wrapper").style.perspective = (
    document.getElementById("iframePerspective").checked ? "1000px" : "none"
  );
}
updateIframe();

/*Events*/
document.getElementById("controls").addEventListener("change", function() {
  updateIframe();
});

//insights tab from left
function openLeftNav() {
    document.getElementById("insightsleft").style.width = "100%";
}

function closeLeftNav() {
    document.getElementById("insightsleft").style.width = "0%";
}


      });
  </script>
  </body>
  </html>