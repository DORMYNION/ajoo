<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Ajoo Platform">
  <meta name="theme-color" content="#0082C2">

  <title>Ajoo Platform | Home</title>

  <link rel="shortcut icon" href="#" type="image/vnd.microsoft.icon">

        <!-- Stylesheets  -->
  <style type="text/css" media="all">
    @import url("asset/css/animate.min.css");
    @import url("asset/css/customs.css");
    @import url("asset/css/main.css");
    @import url("asset/css/app.css");
  </style>

  <script type="text/javascript" src="asset/js/modernizr.js"></script>
</head>
	<body>
		<!--[if lt IE 9]>
		    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

    <div class="site-wrapper">


      <!-- Top Navbar
      ================================================== -->
      <header class="navbar navbar-microsite" role="navigation">
        <div class="container  wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
          <div class="row navbar-container">
            <div class="col-md-4 navbar-header ">
              <a class="navbar-brand" href="index.php"><img src="asset/img/logo.png" alt="" class="img-responsive"></a>
              <button type="button" class="btn navbar-btn pull-right menu-toggle visible-sm visible-xs" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars fa-2x"></span>
              </button>
            </div>
            <div class="col-md-8 navbar-collapse collapse">
              <div class="region region-mainbuttons">
                <div id="block-block-16" class="block block-block">
                  <div class="content">
                    <div>
                      <!-- <button type="button" class="btn start-saving" data-toggle="modal" data-target="#startSavingModal">Start Saving</button> -->
                      <a class="start-saving" href="start-saving.php">Start Saving</a>
                      <!-- <a class="start-saving" href="javascript:void(0)" onClick="clickMe('clickSaving','savingCont')" id="clickSaving">Start Saving</a>
                      <a class="login" href="javascript:void(0)" onClick="clickMe('clickLogin','loginCont')" id="clickLogin"> Login</a> -->
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav navbar-nav" style="margin-left:-170px;">
                	<li class="menu-844 first active"><a href="index.php">Home</a></li>
                	<li class="menu-844 "><a href="what.php">What is Ajoo Platform?</a></li>
                  <li class="menu-843"><a href="why.php">Why Ajoo Platform?</a></li>
                  <li class="menu-842"><a href="how.php">How it works</a></li>
                  <li class="menu-846 last"><a href="faq.php">FAQs</a></li>

              </ul>
            </div>
          </div>
        </div> <!-- /.container -->
      </header> <!-- /.navbar -->


    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxYmzO2NNsbWsuFEo9u4wMqTOHjnG8o1p5-GjZZWTVE8gICkeY/exec'
      const form = document.forms['submit-to-google-sheet']

      form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => console.log('Success!', response))
        .catch(error => console.log('Error!', error.message))
      })
    </script>
