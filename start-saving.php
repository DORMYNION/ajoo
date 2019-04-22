<?php include 'part/header.php'; ?>


<!-- Banner
================================================== -->
<div class="extra-banner">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center"><h1>Start Saving</h1></div>
      <div class="col-md-9 text-left"><img src="asset/img/large-plane-line.png" /></div>
    </div>
  </div>

</div><!-- /.banner -->



<!-- Green Banner
================================================== -->
<div class="green-banner wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>"Save and accomplish your financial goals the smart way."</p>
      </div>
    </div>
  </div>
</div><!-- /.green-banner -->

<div class="container" style="margin:50px 30px">
  <div class="row">
    <div class="col-md-12">
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
                <div class="form-group ml-auto" style="padding-bottom:30px;">
                  <!-- <span id="addHelpInline" class="text-muted " >Click Add to add more people.</span> -->
                  <button type="button" name="add" class="btn btn-primary btn-large" id="add" aria-describedby="addHelpInline">Add Participant</button>
                </div>
              </div>
            </div>


            <div class="clearfix"></div>
          </form>
        </div>
      </div>
      </div>

<!--. Start Saving Ends
  ================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
  //Add Input Fields
  $(document).ready(function() {
      var max_fields = 7; //Maximum allowed input fields
      var wrapper    = $(".wrapper"); //Input fields wrapper
      var add_button = $("#add"); //Add button class or ID
      var x = 1; //Initial input field is set to 1
      var y = 4;

      //When user click on add input button
      $(add_button).click(function(e){
          e.preventDefault();
          //Check maximum allowed input fields
          if(x < max_fields){
              x++; //input field increment
              y++;
               //add input field
              $(wrapper).append('<div><div class="form-group col-md-6"> <label for="input_array_name[]">'+ y +'.Name</label> <input type="text" name="input_array_name[]" class="form-control" id="input_name_'+ y +'"> </div> <div class="form-group col-md-5"> <label for="input_array_tel[]">'+ y +'. Tel</label> <input type="text" name="input_array_tel[]" class="form-control" id="input_tel_'+ y +'"> </div> <button type="button"  class="pt-5 close remove_field col-md-1" aria-label="Close" style="color:#000;"><span aria-hidden="true">&times;</span></button></div></div>');
          }
    });

      //when user click on remove button
      $(wrapper).on("click",".remove_field", function(e){
          e.preventDefault();
          $(this).parent('div').remove(); //remove inout field
      x--; //inout field decrement
          y--; //inout field decrement
      })
  });
  </script>





  <?php include 'part/footer.php'; ?>
