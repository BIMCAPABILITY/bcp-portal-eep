
    <script src="<?php echo base_url('assets_admin/vendor/libs/jquery/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/popper/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/bootstrap.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/js/menu.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/vendor/libs/apex-charts/apexcharts.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/dashboards-analytics.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/parsley.js'); ?>"></script>
    <script src="<?php echo base_url('assets_admin/js/checkbox.js'); ?>"></script>

    <!-- Range -->

  <script>

          $(document).ready(function() {
            $("#vaild_email").hide();
            $("#login_email").keyup(function(){
                var email = $("#login_email").val();
                // console.log(email);
                if(email != ''){
                  $.ajax({
                  url:"<?php echo base_url(); ?>Admin/checkValidAccount",
                  method:"POST",
                  data:{email:email},
                  success:function(data){
                    if(data==1){
                      $("#vaild_email").show();
                    }else{
                      $("#vaild_email").hide();
                    }
                  }
                  });
                }
            });


            $(".edit-emp-range").addClass('hide');
            // Start Mind 
            let mind_total = 100;
            let mind_final = 0;
            $("#slider-range-mind1").keyup(function(){
              var mind1 = $("#slider-range-mind1").val();
              mind_final = mind_total - mind1;
              if((mind1) >= 1  && (mind1) <= 99){
                $("#slider-range-mind2").val(mind_final);
                $("#mind-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-mind2").val(' ');
                $("#mind-line").css("background-color", "red");
              }
            });

            $("#slider-range-mind2").keyup(function(){
              var mind2 = $("#slider-range-mind2").val();
              mind_final = mind_total - mind2;
              if((mind2) >= 1  && (mind2) <= 99){
                $("#slider-range-mind1").val(mind_final);
                $("#mind-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-mind1").val(' ');
                $("#mind-line").css("background-color", "red");
              }
            });
            
            // End Mind 

            // Start Energy 
            let energy_total = 100;
            let energy_final = 0;
            $("#slider-range-energy1").keyup(function(){
              var energy1 = $("#slider-range-energy1").val();
              energy_final = energy_total - energy1;
              if((energy1) >= 1 && (energy1) <= 99){
                $("#slider-range-energy2").val(energy_final);
                $("#energy-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-energy2").val(' ');
                $("#energy-line").css("background-color", "red");
              }
            });

            $("#slider-range-energy2").keyup(function(){
              var energy2 = $("#slider-range-energy2").val();
              energy_final = energy_total - energy2;
              if((energy2) >= 1 && (energy2) <= 99){
                $("#slider-range-energy1").val(energy_final);
                $("#energy-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-energy1").val(' ');
                $("#energy-line").css("background-color", "red");
              }
            });
            // End Energy

            // Start Nature 
            let nature_total = 100;
            let nature_final = 0;
            $("#slider-range-nature1").keyup(function(){
              var nature1 = $("#slider-range-nature1").val();
              nature_final = nature_total - nature1;
              if((nature1) >= 1 && (nature1) <= 99){
                $("#slider-range-nature2").val(nature_final);
                $("#nature-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-nature2").val(' ');
                $("#nature-line").css("background-color", "red");
              }
            });

            $("#slider-range-nature2").keyup(function(){
              var nature2 = $("#slider-range-nature2").val();
              nature_final = nature_total - nature2;
              if((nature2) >= 1 && (nature2) <= 99){
                $("#slider-range-nature1").val(nature_final);
                $("#nature-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-nature1").val(' ');
                $("#nature-line").css("background-color", "red");
              }
            });
            // End Nature

            // Start Tactics 
            let tactics_total = 100;
            let tactics_final = 0;
            $("#slider-range-tactics1").keyup(function(){
              var tactics1 = $("#slider-range-tactics1").val();
              tactics_final = tactics_total - tactics1;
              if((tactics1) >= 1 && (tactics1) <= 99){
                $("#slider-range-tactics2").val(tactics_final);
                $("#tactics-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-tactics2").val(' ');
                $("#tactics-line").css("background-color", "red");
              }
            });

            $("#slider-range-tactics2").keyup(function(){
              var tactics2 = $("#slider-range-tactics2").val();
              tactics_final = tactics_total - tactics2;
              if((tactics2) >= 1 && (tactics2) <= 99){
                $("#slider-range-tactics1").val(tactics_final);
                $("#tactics-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-tactics1").val(' ');
                $("#tactics-line").css("background-color", "red");
              }
            });
            // End Tactics

            // Start Identity 
            let identity_total = 100;
            let identity_final = 0;
            $("#slider-range-identity1").keyup(function(){
              var identity1 = $("#slider-range-identity1").val();
              identity_final = identity_total - identity1;
              if((identity1) >= 1 && (identity1) <= 99){
                $("#slider-range-identity2").val(identity_final);
                $("#identity-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-identity2").val(' ');
                $("#identity-line").css("background-color", "red");
              }
            });

            $("#slider-range-identity2").keyup(function(){
              var identity2 = $("#slider-range-identity2").val();
              identity_final = identity_total - identity2;
              if((identity2) >= 1 && (identity2) <= 99){
                $("#slider-range-identity1").val(identity_final);
                $("#identity-line").css("background-color", "#d6e0f5");
              }else{
                $(".edit-emp-range").addClass('show');
                $("#slider-range-identity1").val(' ');
                $("#identity-line").css("background-color", "red");
              }
            });
            // End Identity
        });

    </script>

    <!-- End -->

    <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
        ['Assessment', 'Employee Performance Report'],
        ['Good', <?php echo $grateful; ?>],
        ['Sufficient', <?php echo $good; ?>],
        ['Not Sufficient', <?php echo $average; ?>]
        ]);

        var options = {
        title: '',
        is3D: true,
        slices: {
            0: { color: '#3da73d' },
            1: { color: '#ffab00' },
            2: { color: '#e12929' },
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
    </script>

          <script type="text/javascript">
              $(document).ready(function(){
              $('#department_id').change(function(){
                  var department_id = $('#department_id').val();
                  if(department_id != ''){
                  $.ajax({
                  url:"<?php echo base_url(); ?>Admin/fetchDepartmentDrop",
                  method:"POST",
                  data:{department_id:department_id},
                  success:function(data)
                  {
                  $('#designation_id').html(data);
                  }
                  });
                  }
              });
              });
          </script>
    
          <script type="text/javascript">
              $(document).ready(function(){
              $('#main_employee_id').change(function(){

                  var employee_id = $('#main_employee_id').val();

                  if(employee_id != ''){
                      $.ajax({
                      url:"<?php echo base_url(); ?>Admin/fetchDDInput",
                      method:"POST",
                      data:{employee_id:employee_id},
                      success:function(data){
                          $('#department_name').val(data);
                      }
                      });
                  }
                  
                  if(employee_id != ''){
                      $.ajax({
                      url:"<?php echo base_url(); ?>Admin/fetchDesiInput",
                      method:"POST",
                      data:{employee_id:employee_id},
                      success:function(data){
                          $('#designation_name').val(data);
                      }
                      });
                  }
              });
              });
          </script>

      <script>
        //  Goals

        $(document).ready(function() {

        $("#goals1").click(function(){
              $("#goals2").attr("disabled", true);
              $("#goals_input2").attr("disabled", true);
              $("#goals_hidden2").attr("disabled", true);

              $("#goals3").attr("disabled", true);
              $("#goals_input3").attr("disabled", true);
              $("#goals_hidden3").attr("disabled", true);

              $("#goals4").attr("disabled", true);
              $("#goals_input4").attr("disabled", true);
              $("#goals_hidden4").attr("disabled", true);
            });

            $("#goals2").click(function(){
              $("#goals1").attr("disabled", true);
              $("#goals_input1").attr("disabled", true);
              $("#goals_hidden1").attr("disabled", true);

              $("#goals3").attr("disabled", true);
              $("#goals_input3").attr("disabled", true);
              $("#goals_hidden3").attr("disabled", true);

              $("#goals4").attr("disabled", true);
              $("#goals_input4").attr("disabled", true);
              $("#goals_hidden4").attr("disabled", true);
            });

            $("#goals3").click(function(){
              $("#goals1").attr("disabled", true);
              $("#goals_input1").attr("disabled", true);
              $("#goals_hidden1").attr("disabled", true);

              $("#goals2").attr("disabled", true);
              $("#goals_input2").attr("disabled", true);
              $("#goals_hidden2").attr("disabled", true);

              $("#goals4").attr("disabled", true);
              $("#goals_input4").attr("disabled", true);
              $("#goals_hidden4").attr("disabled", true);
            });

            $("#goals4").click(function(){
              $("#goals1").attr("disabled", true);
              $("#goals_input1").attr("disabled", true);
              $("#goals_hidden1").attr("disabled", true);

              $("#goals2").attr("disabled", true);
              $("#goals_input2").attr("disabled", true);
              $("#goals_hidden2").attr("disabled", true);

              $("#goals3").attr("disabled", true);
              $("#goals_input3").attr("disabled", true);
              $("#goals_hidden3").attr("disabled", true);
            });
        });

        // Edit Goals
      </script>

<script>
  $(document).ready(function(){


    $(document).ready(function(){
            $('#refresh-goals').click(function(){
                $("#goals1").attr("disabled", false);
                $("#goals2").attr("disabled", false);
                $("#goals3").attr("disabled", false);
                $("#goals4").attr("disabled", false);

                $("#goals_input1").attr("disabled", false);
                $("#goals_input2").attr("disabled", false);
                $("#goals_input3").attr("disabled", false);
                $("#goals_input4").attr("disabled", false);

                $("#goals_hidden1").attr("disabled", false);
                $("#goals_hidden2").attr("disabled", false);
                $("#goals_hidden3").attr("disabled", false);
                $("#goals_hidden4").attr("disabled", false);
            });
        });

    // #goals1

    $('#goals1').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden1 = $('#goals_hidden1').val();

        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Admin/fetchGoal1",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden1:goals_hidden1},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input1').val(response.goals_description);
            }
            });
        }
    });

    // #goals2

    $('#goals2').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden2 = $('#goals_hidden2').val();
        
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Admin/fetchGoal2",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden2:goals_hidden2},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input2').val(response.goals_description);
            }
            });
        }
    });

    $('#goals3').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden3 = $('#goals_hidden3').val();
        
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Admin/fetchGoal3",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden3:goals_hidden3},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input3').val(response.goals_description);
            }
            });
        }
    });

    $('#goals4').click(function(){
        var employee_id = $('#employee_id').val();
        var goals_hidden4 = $('#goals_hidden4').val();
        
        if(employee_id != ''){
            $.ajax({
            url:"<?php echo base_url(); ?>Admin/fetchGoal4",
            method:"POST",
            data:{employee_id:employee_id, goals_hidden4:goals_hidden4},
            success:function(data){
              response = jQuery.parseJSON(data);
              $('#goals_input4').val(response.goals_description);
            }
            });
        }
    });
  });
</script>

    <script>
      $(document).ready(() => {
          $("#upload").change(function () {
              const file = this.files[0];
              if (file) {
                  let reader = new FileReader();
                  reader.onload = function (event) {
                      $("#imgPreview")
                        .attr("src", event.target.result);
                  };
                  reader.readAsDataURL(file);
              }
          });
      });
  </script>

  <script>
    $(document).ready(function () {

      // start communication

      $(".communication_checkSelect1").attr('disabled', true);
      $(".communication_checkSelect2").attr('disabled', true);
      $(".communication_checkSelect3").attr('disabled', true);
      $(".communication_checkSelect4").attr('disabled', true);
      $(".communication_checkSelect5").attr('disabled', true);

      $(".checkSelect_communication").change(function() {

        if ($(this).val() == "1") {

          $('.communication_checkSelect2').prop('checked', false);
          $('.communication_checkSelect3').prop('checked', false);
          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);
          
          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', true);
          $(".communication_checkSelect3").attr('disabled', true);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.communication_checkSelect3').prop('checked', false);
          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', true);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.communication_checkSelect4').prop('checked', false);
          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', true);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.communication_checkSelect5').prop('checked', false);

          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', false);
          $(".communication_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".communication_checkSelect1").attr('disabled', false);
          $(".communication_checkSelect2").attr('disabled', false);
          $(".communication_checkSelect3").attr('disabled', false);
          $(".communication_checkSelect4").attr('disabled', false);
          $(".communication_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });
      
      // end communication

      // start productivity

      $(".productivity_checkSelect1").attr('disabled', true);
      $(".productivity_checkSelect2").attr('disabled', true);
      $(".productivity_checkSelect3").attr('disabled', true);
      $(".productivity_checkSelect4").attr('disabled', true);
      $(".productivity_checkSelect5").attr('disabled', true);

      $(".checkSelect_productivity").change(function() {

        if ($(this).val() == "1") {

          $('.productivity_checkSelect2').prop('checked', false);
          $('.productivity_checkSelect3').prop('checked', false);
          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);
          
          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', true);
          $(".productivity_checkSelect3").attr('disabled', true);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.productivity_checkSelect3').prop('checked', false);
          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', true);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.productivity_checkSelect4').prop('checked', false);
          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', true);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.productivity_checkSelect5').prop('checked', false);

          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', false);
          $(".productivity_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".productivity_checkSelect1").attr('disabled', false);
          $(".productivity_checkSelect2").attr('disabled', false);
          $(".productivity_checkSelect3").attr('disabled', false);
          $(".productivity_checkSelect4").attr('disabled', false);
          $(".productivity_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // start quality

      $(".quality_checkSelect1").attr('disabled', true);
      $(".quality_checkSelect2").attr('disabled', true);
      $(".quality_checkSelect3").attr('disabled', true);
      $(".quality_checkSelect4").attr('disabled', true);
      $(".quality_checkSelect5").attr('disabled', true);

      $(".checkSelect_quality").change(function() {

        if ($(this).val() == "1") {

          $('.quality_checkSelect2').prop('checked', false);
          $('.quality_checkSelect3').prop('checked', false);
          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);
          
          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', true);
          $(".quality_checkSelect3").attr('disabled', true);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.quality_checkSelect3').prop('checked', false);
          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', true);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.quality_checkSelect4').prop('checked', false);
          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', true);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.quality_checkSelect5').prop('checked', false);

          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', false);
          $(".quality_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".quality_checkSelect1").attr('disabled', false);
          $(".quality_checkSelect2").attr('disabled', false);
          $(".quality_checkSelect3").attr('disabled', false);
          $(".quality_checkSelect4").attr('disabled', false);
          $(".quality_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });


      // end quality


      // start Knowledge of Job

      $(".knowledge_checkSelect1").attr('disabled', true);
      $(".knowledge_checkSelect2").attr('disabled', true);
      $(".knowledge_checkSelect3").attr('disabled', true);
      $(".knowledge_checkSelect4").attr('disabled', true);
      $(".knowledge_checkSelect5").attr('disabled', true);

      $(".checkSelect_knowledge").change(function() {

        if ($(this).val() == "1") {

          $('.knowledge_checkSelect2').prop('checked', false);
          $('.knowledge_checkSelect3').prop('checked', false);
          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);
          
          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', true);
          $(".knowledge_checkSelect3").attr('disabled', true);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.knowledge_checkSelect3').prop('checked', false);
          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', true);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.knowledge_checkSelect4').prop('checked', false);
          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', true);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.knowledge_checkSelect5').prop('checked', false);

          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', false);
          $(".knowledge_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".knowledge_checkSelect1").attr('disabled', false);
          $(".knowledge_checkSelect2").attr('disabled', false);
          $(".knowledge_checkSelect3").attr('disabled', false);
          $(".knowledge_checkSelect4").attr('disabled', false);
          $(".knowledge_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end knowlege of job

      // start Knowledge of Software

      $(".software_checkSelect1").attr('disabled', true);
      $(".software_checkSelect2").attr('disabled', true);
      $(".software_checkSelect3").attr('disabled', true);
      $(".software_checkSelect4").attr('disabled', true);
      $(".software_checkSelect5").attr('disabled', true);

      $(".checkSelect_software").change(function() {

        if ($(this).val() == "1") {

          $('.software_checkSelect2').prop('checked', false);
          $('.software_checkSelect3').prop('checked', false);
          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);
          
          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', true);
          $(".software_checkSelect3").attr('disabled', true);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.software_checkSelect3').prop('checked', false);
          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', true);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.software_checkSelect4').prop('checked', false);
          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', true);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.software_checkSelect5').prop('checked', false);

          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', false);
          $(".software_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".software_checkSelect1").attr('disabled', false);
          $(".software_checkSelect2").attr('disabled', false);
          $(".software_checkSelect3").attr('disabled', false);
          $(".software_checkSelect4").attr('disabled', false);
          $(".software_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Knowledge of Software

      // start Reliability & Dependability

      $(".reliability_dependability_checkSelect1").attr('disabled', true);
      $(".reliability_dependability_checkSelect2").attr('disabled', true);
      $(".reliability_dependability_checkSelect3").attr('disabled', true);
      $(".reliability_dependability_checkSelect4").attr('disabled', true);
      $(".reliability_dependability_checkSelect5").attr('disabled', true);

      $(".checkSelect_reliability_dependability").change(function() {

        if ($(this).val() == "1") {

          $('.reliability_dependability_checkSelect2').prop('checked', false);
          $('.reliability_dependability_checkSelect3').prop('checked', false);
          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);
          
          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', true);
          $(".reliability_dependability_checkSelect3").attr('disabled', true);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.reliability_dependability_checkSelect3').prop('checked', false);
          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', true);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.reliability_dependability_checkSelect4').prop('checked', false);
          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', true);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.reliability_dependability_checkSelect5').prop('checked', false);

          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', false);
          $(".reliability_dependability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".reliability_dependability_checkSelect1").attr('disabled', false);
          $(".reliability_dependability_checkSelect2").attr('disabled', false);
          $(".reliability_dependability_checkSelect3").attr('disabled', false);
          $(".reliability_dependability_checkSelect4").attr('disabled', false);
          $(".reliability_dependability_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Reliability & Dependability

      // start Time Management

      $(".time_management_checkSelect1").attr('disabled', true);
      $(".time_management_checkSelect2").attr('disabled', true);
      $(".time_management_checkSelect3").attr('disabled', true);
      $(".time_management_checkSelect4").attr('disabled', true);
      $(".time_management_checkSelect5").attr('disabled', true);

      $(".checkSelect_time_management").change(function() {

        if ($(this).val() == "1") {

          $('.time_management_checkSelect2').prop('checked', false);
          $('.time_management_checkSelect3').prop('checked', false);
          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);
          
          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', true);
          $(".time_management_checkSelect3").attr('disabled', true);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.time_management_checkSelect3').prop('checked', false);
          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', true);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.time_management_checkSelect4').prop('checked', false);
          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', true);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.time_management_checkSelect5').prop('checked', false);

          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', false);
          $(".time_management_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".time_management_checkSelect1").attr('disabled', false);
          $(".time_management_checkSelect2").attr('disabled', false);
          $(".time_management_checkSelect3").attr('disabled', false);
          $(".time_management_checkSelect4").attr('disabled', false);
          $(".time_management_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Time Management

      // start Adaptability

      
      $(".adaptability_checkSelect1").attr('disabled', true);
      $(".adaptability_checkSelect2").attr('disabled', true);
      $(".adaptability_checkSelect3").attr('disabled', true);
      $(".adaptability_checkSelect4").attr('disabled', true);
      $(".adaptability_checkSelect5").attr('disabled', true);

      $(".checkSelect_adaptability").change(function() {

        if ($(this).val() == "1") {

          $('.adaptability_checkSelect2').prop('checked', false);
          $('.adaptability_checkSelect3').prop('checked', false);
          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);
          
          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', true);
          $(".adaptability_checkSelect3").attr('disabled', true);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.adaptability_checkSelect3').prop('checked', false);
          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', true);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.adaptability_checkSelect4').prop('checked', false);
          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', true);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.adaptability_checkSelect5').prop('checked', false);

          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', false);
          $(".adaptability_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".adaptability_checkSelect1").attr('disabled', false);
          $(".adaptability_checkSelect2").attr('disabled', false);
          $(".adaptability_checkSelect3").attr('disabled', false);
          $(".adaptability_checkSelect4").attr('disabled', false);
          $(".adaptability_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

    // end Adaptability

    // start Initiative & Proactive

      $(".initiative_proactive_checkSelect1").attr('disabled', true);
      $(".initiative_proactive_checkSelect2").attr('disabled', true);
      $(".initiative_proactive_checkSelect3").attr('disabled', true);
      $(".initiative_proactive_checkSelect4").attr('disabled', true);
      $(".initiative_proactive_checkSelect5").attr('disabled', true);

      $(".checkSelect_initiative_proactive").change(function() {

        if ($(this).val() == "1") {

          $('.initiative_proactive_checkSelect2').prop('checked', false);
          $('.initiative_proactive_checkSelect3').prop('checked', false);
          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);
          
          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', true);
          $(".initiative_proactive_checkSelect3").attr('disabled', true);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.initiative_proactive_checkSelect3').prop('checked', false);
          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', true);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.initiative_proactive_checkSelect4').prop('checked', false);
          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', true);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.initiative_proactive_checkSelect5').prop('checked', false);

          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', false);
          $(".initiative_proactive_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".initiative_proactive_checkSelect1").attr('disabled', false);
          $(".initiative_proactive_checkSelect2").attr('disabled', false);
          $(".initiative_proactive_checkSelect3").attr('disabled', false);
          $(".initiative_proactive_checkSelect4").attr('disabled', false);
          $(".initiative_proactive_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

      // end Initiative & Proactive

      // start Creativity & Problem Solving

      $(".creativity_problem_solving_checkSelect1").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect2").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
      $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

      $(".checkSelect_creativity_problem_solving").change(function() {

        if ($(this).val() == "1") {

          $('.creativity_problem_solving_checkSelect2').prop('checked', false);
          $('.creativity_problem_solving_checkSelect3').prop('checked', false);
          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);
          
          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "2") {

          $('.creativity_problem_solving_checkSelect3').prop('checked', false);
          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "3") {

          $('.creativity_problem_solving_checkSelect4').prop('checked', false);
          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', true);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "4") {

          $('.creativity_problem_solving_checkSelect5').prop('checked', false);

          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', true);

        }if ($(this).val() == "5") {
          $(".creativity_problem_solving_checkSelect1").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect2").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect3").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect4").attr('disabled', false);
          $(".creativity_problem_solving_checkSelect5").attr('disabled', false);
        }
        else {
         
        }
      });

    });
  </script>

<div class="bs-toast toast toast-placement-ex m-2 fade bg-danger top-0 end-0 edit-emp-range" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
  <div class="toast-header">
    <i class="bx bx-bell me-2"></i>
    <div class="me-auto fw-semibold">Validation error</div>
    <small>1 sec ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">Please enter valid number!!</div>
</div>

</body>
</html>