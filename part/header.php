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
    @import url("asset/css/jquery.ui.accordion.min.css");
    @import url("asset/css/views.css");
    @import url("asset/css/ckeditor.css");
    @import url("asset/css/animate.min.css");
    @import url("asset/css/main.css");
    @import url("asset/css/app.css");
    @import url("asset/css/customs.css");
  </style>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <script type="text/javascript" src="asset/js/modernizr.js"></script>
  <script type="text/javascript" src="asset/js/jquery.once.js"></script>
  <script type="text/javascript" src="asset/js/jquery.ui.core.min.js"></script>
  <script type="text/javascript" src="asset/js/jquery.ui.widget.min.js"></script>
  <script type="text/javascript" src="asset/js/jquery.ui.accordion.min.js"></script>
  <script type="text/javascript" src="asset/js/appmeasurement.js"></script>
  <script type="text/javascript" src="asset/js/main.js"></script>
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
                      <button type="button" class="btn start-saving" data-toggle="modal" data-target="#startSavingModal">Start Saving</button>
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

    <!-- Start Saving
      ================================================== -->
      <div class="modal fade" id="startSavingModal" tabindex="-1" role="dialog" aria-labelledby="startSavingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="startSavingModalLabel">Start Saving</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form name="submit-to-google-sheet">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name_group">Name of Group</label>
                    <input type="text" name="name_group" id="name_group" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="name_sponsor">Name of Sponsor</label>
                    <input type="text" name="name_sponsor" id="name_sponsor" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="tel_sponsor">Tel of Sponsor</label>
                    <input type="text" name="tel_sponsor" id="tel_sponsor" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="email_sponsor">Email of Sponsor</label>
                    <input type="text" name="email_sponsor" id="email_sponsor" class="form-control">
                  </div>

                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Start Saving</button>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="">
                    <div class="form-group col-md-6">
                      <label for="input_array_name[]">1. Name</label>
                      <input id="input_name_1" type="text" name="input_array_name[]" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="input_array_tel">1. Tel</label>
                      <input id="input_tel_1" type="text" name="input_array_tel[]" class="form-control">
                    </div>
                  </div>

                  <div class="">
                    <div class="form-group col-md-6">
                      <label for="input_array_name[]">2. Name</label>
                      <input id="input_name_2" type="text" name="input_array_name[]" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="input_array_tel[]">2. Tel</label>
                      <input id="input_tel_2" type="text" name="input_array_tel[]" class="form-control">
                    </div>
                  </div>

                  <div class="">
                    <div class="form-group col-md-6">
                      <label for="input_array_name[]">3. Name</label>
                      <input id="input_name_3" type="text" name="input_array_name[]" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="input_array_tel[]">3. Tel</label>
                      <input id="input_tel_3" type="text" name="input_array_tel[]" class="form-control">
                    </div>
                  </div>

                  <div class="wrapper">
                    <div class="form-group col-md-6">
                      <label for="input_array_name[]">4. Name</label>
                      <input id="input_name_4" type="text" name="input_array_name[]" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                      <label for="input_array_tel[]">4. Tel</label>
                      <input id="input_tel_4" type="text" name="input_array_tel[]" class="form-control">
                    </div>
                  </div>

                  <div class="col-12 form-inline">
                    <small id="addHelpInline" class="text-muted ">
                      Click Add to add more people.
                    </small>
                    <div class="form-group ml-auto" style="padding-bottom:30px;">
                      <button type="button" name="add" class="btn btn-primary btn-large" id="add" aria-describedby="addHelpInline">Add Participant</button>
                    </div>
                  </div>
                </div>


                <div class="clearfix"></div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    <!--. Start Saving Ends
      ================================================== -->

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
