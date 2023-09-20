
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

<<<<<<< HEAD
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
=======
    $(".knowledge_performance_checkSelect1").attr('disabled', true);
    $(".knowledge_performance_checkSelect2").attr('disabled', true);
    $(".knowledge_performance_checkSelect3").attr('disabled', true);
    $(".knowledge_performance_checkSelect4").attr('disabled', true);
    $(".knowledge_performance_checkSelect5").attr('disabled', true);

    $(".checkSelect_knowledge_performance").change(function() {

      if ($(this).val() == "1") {

        $('.knowledge_performance_checkSelect2').prop('checked', false);
        $('.knowledge_performance_checkSelect3').prop('checked', false);
        $('.knowledge_performance_checkSelect4').prop('checked', false);
        $('.knowledge_performance_checkSelect5').prop('checked', false);
        
        $(".knowledge_performance_checkSelect1").attr('disabled', false);
        $(".knowledge_performance_checkSelect2").attr('disabled', true);
        $(".knowledge_performance_checkSelect3").attr('disabled', true);
        $(".knowledge_performance_checkSelect4").attr('disabled', true);
        $(".knowledge_performance_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "2") {

        $('.knowledge_performance_checkSelect3').prop('checked', false);
        $('.knowledge_performance_checkSelect4').prop('checked', false);
        $('.knowledge_performance_checkSelect5').prop('checked', false);

        $(".knowledge_performance_checkSelect1").attr('disabled', false);
        $(".knowledge_performance_checkSelect2").attr('disabled', false);
        $(".knowledge_performance_checkSelect3").attr('disabled', true);
        $(".knowledge_performance_checkSelect4").attr('disabled', true);
        $(".knowledge_performance_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "3") {

        $('.knowledge_performance_checkSelect4').prop('checked', false);
        $('.knowledge_performance_checkSelect5').prop('checked', false);

        $(".knowledge_performance_checkSelect1").attr('disabled', false);
        $(".knowledge_performance_checkSelect2").attr('disabled', false);
        $(".knowledge_performance_checkSelect3").attr('disabled', false);
        $(".knowledge_performance_checkSelect4").attr('disabled', true);
        $(".knowledge_performance_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "4") {

        $('.knowledge_performance_checkSelect5').prop('checked', false);

        $(".knowledge_performance_checkSelect1").attr('disabled', false);
        $(".knowledge_performance_checkSelect2").attr('disabled', false);
        $(".knowledge_performance_checkSelect3").attr('disabled', false);
        $(".knowledge_performance_checkSelect4").attr('disabled', false);
        $(".knowledge_performance_checkSelect5").attr('disabled', true);

      }
      if ($(this).val() == "5") {
        $(".knowledge_performance_checkSelect1").attr('disabled', false);
        $(".knowledge_performance_checkSelect2").attr('disabled', false);
        $(".knowledge_performance_checkSelect3").attr('disabled', false);
        $(".knowledge_performance_checkSelect4").attr('disabled', false);
        $(".knowledge_performance_checkSelect5").attr('disabled', false);
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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

<<<<<<< HEAD
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
=======
    $(".team_management_checkSelect1").attr('disabled', true);
    $(".team_management_checkSelect2").attr('disabled', true);
    $(".team_management_checkSelect3").attr('disabled', true);
    $(".team_management_checkSelect4").attr('disabled', true);
    $(".team_management_checkSelect5").attr('disabled', true);

    $(".checkSelect_team_management").change(function() {

      if ($(this).val() == "1") {

        $('.team_management_checkSelect2').prop('checked', false);
        $('.team_management_checkSelect3').prop('checked', false);
        $('.team_management_checkSelect4').prop('checked', false);
        $('.team_management_checkSelect5').prop('checked', false);
        
        $(".team_management_checkSelect1").attr('disabled', false);
        $(".team_management_checkSelect2").attr('disabled', true);
        $(".team_management_checkSelect3").attr('disabled', true);
        $(".team_management_checkSelect4").attr('disabled', true);
        $(".team_management_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "2") {

        $('.team_management_checkSelect3').prop('checked', false);
        $('.team_management_checkSelect4').prop('checked', false);
        $('.team_management_checkSelect5').prop('checked', false);

        $(".team_management_checkSelect1").attr('disabled', false);
        $(".team_management_checkSelect2").attr('disabled', false);
        $(".team_management_checkSelect3").attr('disabled', true);
        $(".team_management_checkSelect4").attr('disabled', true);
        $(".team_management_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "3") {

        $('.team_management_checkSelect4').prop('checked', false);
        $('.team_management_checkSelect5').prop('checked', false);

        $(".team_management_checkSelect1").attr('disabled', false);
        $(".team_management_checkSelect2").attr('disabled', false);
        $(".team_management_checkSelect3").attr('disabled', false);
        $(".team_management_checkSelect4").attr('disabled', true);
        $(".team_management_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "4") {

        $('.team_management_checkSelect5').prop('checked', false);

        $(".team_management_checkSelect1").attr('disabled', false);
        $(".team_management_checkSelect2").attr('disabled', false);
        $(".team_management_checkSelect3").attr('disabled', false);
        $(".team_management_checkSelect4").attr('disabled', false);
        $(".team_management_checkSelect5").attr('disabled', true);

      }if ($(this).val() == "5") {
        $(".team_management_checkSelect1").attr('disabled', false);
        $(".team_management_checkSelect2").attr('disabled', false);
        $(".team_management_checkSelect3").attr('disabled', false);
        $(".team_management_checkSelect4").attr('disabled', false);
        $(".team_management_checkSelect5").attr('disabled', false);
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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