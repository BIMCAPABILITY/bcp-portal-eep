
<div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold "><a href="<?php echo base_url('employee/evaluated-employee-list'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
              <h4 class="fw-bold py-1 mb-1"><span class="text-muted fw-light"> Dashboard /  Employee List /</span> Employee Details</h4>
              <div class="row">
                <div class="col-md-12">

                <?php if($uploaded = $this->session->flashdata('emp_update_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('emp_not_updated')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                    </div>
                  
                    <?php if($uploaded = $this->session->flashdata('emp_update_score_success')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong><?php echo $uploaded; ?></strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      <?php elseif($tryAgain = $this->session->flashdata('emp_update_score_not')): ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong><?php echo $tryAgain; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      <?php endif; ?>
                   
                      <?php if($uploaded = $this->session->flashdata('upgradePer_upload_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('upgradePer_not_uploaded')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                    
                      <?php if($uploaded = $this->session->flashdata('signature_delete_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('signature_not_uploaded')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                </div>

    <br>
  
            <?php if ($re_evaluate): ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EMPLOYEE AVERAGE</span>
                                    <div>
                                        <?php if($emp_avg): ?>
                                        <?php if($emp_avg !== 0): ?>
                                                <div class="emp-d-avg-btn">
                                                    <?php 
                                                        $sumTotal = $re_evaluate->communication_emp_avg + $re_evaluate->knowledge_performance_emp_avg + $re_evaluate->quality_emp_avg + $re_evaluate->knowledge_emp_avg + $re_evaluate->software_emp_avg + $re_evaluate->reliability_emp_avg + $re_evaluate->time_management_emp_avg + $re_evaluate->productivity_emp_avg + $re_evaluate->p_initiative_proactive_emp_avg + $re_evaluate->p_creativity_problem_solving_emp_avg; 
                                                        $avgTotal = $sumTotal / 10;
                                                        $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                                                    ?>
                                                    <?php $main_avg = $emp_avg_report; ?>
                                                    <?php if($main_avg <= 1): ?>
                                                        <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                                        <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                                        <h6 class="card-title mb-2">Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                                        <h6 class="card-title mb-2">Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg <= 5): ?>
                                                        <h6 class="card-title mb-2">Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php else: ?>
                                                        <h6 class="card-title mb-2">Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php endif; ?>
                                                </div>
                                        <?php else: ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">MANAGER AVERAGE</span>
                                    <div>
                                        <?php if(($re_evaluate->submit_manager_status)==0): ?>
                                        <h6 class="card-title mb-2">review pending</h6>
                                        <?php else: ?>
                                                <?php if($emp_avg !== 0): ?>
                                                    <div class="emp-d-avg-btn">
                                                    <?php $main_avg = $emp_avg->total_emp_avg; ?>
                                                    <?php if($main_avg <= 1): ?>
                                                        <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                                                        <h6 class="card-title mb-2">Not sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                                                        <h6 class="card-title mb-2">Sufficient <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                                                        <h6 class="card-title mb-2">Good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php elseif($main_avg <= 5): ?>
                                                        <h6 class="card-title mb-2">Very good <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php else: ?>
                                                        <h6 class="card-title mb-2">Excellent <?php echo $main_avg; ?> <i class='bx bx-tachometer' ></i></h6>
                                                    <?php endif; ?>
                                                    </div>
                                                <?php else: ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </section>
                            </div>

                            <div class="col-lg-2 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EVALUATION PERIOD</span>
                                    <div>
                                            <h6 class="card-title mb-2">
                                            <?php 
                                                if(($re_evaluate->evaluate_date_category)==30){
                                                $period  = 'Monthly';
                                                }elseif(($re_evaluate->evaluate_date_category)==90){
                                                $period  = 'Quarterly';
                                                }elseif(($re_evaluate->evaluate_date_category)==182){
                                                $period  = 'Half Yearly';
                                                }
                                                elseif(($re_evaluate->evaluate_date_category)==365){
                                                $period  = 'Yearly';
                                                }else{
                                                $period = '';
                                                }
                                            ?>
                                            <?php echo $period; ?>
                                        </h6>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EVALUATION START DATE</span>
                                    <div>
                                        <h6 class="card-title mb-2">
                                            <?php 
                                                echo $start_date = date("d-M-Y", strtotime($re_evaluate->emp_performance_start_date));
                                            ?>
                                        </h6>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <section class="ui-card-info-sec">
                                    <span class="fw-semibold d-block mb-2">EVALUATION END DATE</span>
                                    <div>
                                        <h6 class="card-title mb-2">
                                            <?php 
                                                echo $start_date = date("d-M-Y", strtotime($re_evaluate->emp_performance_end_date));
                                            ?>
                                        </h6>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="card">
                    <div class="card-body bg-primary-b btn-justi-ed">
                                                
                            <span class="btn-re-justi">
                                <?php if(($re_evaluate->submit_manager_status)==2): ?>
                                    <button class="btn btn-md btn-primary" type="button" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="<span>Disabled</span>" disabled> Employee Performance Re-Evaluate</button>
                                <?php else: ?>
                                    <a class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#empScoreEdit" href="javascript:void(0);"> Employee Performance Re-Evaluate</a>
                                <?php endif; ?>
                            </span>
                            <span class="btn-re-justi">
                                <a href="<?php echo base_url('Employee/seeEmpPerList/'.$re_evaluate->main_employee_id); ?>" class="btn btn-primary">
                                    Performance History
                                </a>
                            </span>
                            <span class="btn-re-justi">
                            <?php if(($re_evaluate->submit_manager_status)==2): ?>
                                    <button href="javascript:void(0)" class="btn btn-primary" disabled>
                                    Lock Evaluation/Submit
                                    </button>
                                    <?php else: ?>
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#empScoreSubmit" class="btn btn-primary">
                                    Lock Evaluation/Submit
                                    </a>
                                <?php endif; ?>
                            </span>
                            <span class="btn-re-justi">
                                <a href="<?php echo base_url('Employee/printEmpDetails/'.$re_evaluate->emp_performance_id); ?>" class="btn btn-primary">
                                    Print
                                </a>
                            </span>
                           
                    </div>
                </div>
                
                    <div class="row">
                                <div class="card-body">
                                    <div class="row">
                                <div class="col-xl-12">
                                <div class="nav-align-top mb-2">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-communication" aria-controls="navs-justified-communication" aria-selected="true">
                                        Section 1
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge-performance" aria-controls="navs-justified-knowledge-performance" aria-selected="false">
                                        Section 2
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-quality" aria-controls="navs-justified-quality" aria-selected="false">
                                        Section 3
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge" aria-controls="navs-justified-knowledge" aria-selected="false">
                                        Section 4
                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-software" aria-controls="navs-justified-software" aria-selected="false">
                                        Section 5

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-reliability-professionalism" aria-controls="navs-justified-reliability-dependability" aria-selected="false">
                                        Section 6

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-time-management" aria-controls="navs-justified-time-management" aria-selected="false">
                                        Section 7

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-adaptability" aria-controls="navs-justified-adaptability" aria-selected="false">
                                        Section 8

                                        </button>
                                        </li>

                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-initiative-proactive" aria-controls="navs-justified-initiative-proactive" aria-selected="false">

                                        Section 9

                                        </button>
                                        </li>


                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-creativity-problem-solving" aria-controls="navs-justified-creativity-problem-solving" aria-selected="false">

                                        Section 10

                                        </button>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="navs-justified-communication" role="tabpanel">
                                            <div class="re-evaluate-head-top">
                                                <h4>Communication</h4>
                                            </div>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Swiftly answers to messages/calls to coordinate with colleagues 
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Messages are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php

                                                                if($re_evaluate->m_communication_question_1 === $re_evaluate->communication_question_1){
                                                                    $same_communication_question_1 = $re_evaluate->m_communication_question_1;
                                                                }else{
                                                                    $same_communication_question_1 = false;
                                                                }

                                                                if($re_evaluate->communication_question_1==0){
                                                                    $NA_communication_question_1 = 6;
                                                                }else{
                                                                    $NA_communication_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {                                                                    
                                                                if(($same_communication_question_1)==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_communication_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_1" value="<?php echo $re_evaluate->m_communication_question_1; ?>">
                                                        <input type="hidden" name="e_communication_question_1" value="<?php echo $re_evaluate->communication_question_1; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Proactively communicates with supervisors for questions, feedback, job challenges
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Keeps an open channel of communication with their supervisor to ensure all tasks are clear, deadlines are on track, and asks for feedback on their performance</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                        <?php
                                                            if($re_evaluate->m_communication_question_2 === $re_evaluate->communication_question_2){
                                                                $same_communication_question_2 = $re_evaluate->m_communication_question_2;
                                                            }else{
                                                                $same_communication_question_2 = false;
                                                            }

                                                            if($re_evaluate->communication_question_2==0){
                                                                $NA_communication_question_2 = 6;
                                                            }else{
                                                                $NA_communication_question_2 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {

                                                            if($same_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->m_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_2" value="<?php echo $re_evaluate->m_communication_question_2; ?>">
                                                        <input type="hidden" name="e_communication_question_2" value="<?php echo $re_evaluate->communication_question_2; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Communicates effectively with teammates to accomplish common goals and objectives
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($re_evaluate->m_communication_question_3 === $re_evaluate->communication_question_3){
                                                                $same_communication_question_3 = $re_evaluate->m_communication_question_3;
                                                            }else{
                                                                $same_communication_question_3 = false;
                                                            }

                                                            if($re_evaluate->communication_question_3==0){
                                                                $NA_communication_question_3 = 6;
                                                            }else{
                                                                $NA_communication_question_3 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->m_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_3" value="<?php echo $re_evaluate->m_communication_question_3; ?>">
                                                        <input type="hidden" name="e_communication_question_3" value="<?php echo $re_evaluate->communication_question_3; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Clear with time schedules for leave requests, sick leaves, offset hours <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Organizes their time clearly with the company’s calendar so that everybody is aware of their schedule, working conditions, and holiday plans</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($re_evaluate->m_communication_question_4 === $re_evaluate->communication_question_4){
                                                                $same_communication_question_4 = $re_evaluate->m_communication_question_4;
                                                            }else{
                                                                $same_communication_question_4 = false;
                                                            }

                                                            if($re_evaluate->communication_question_4==0){
                                                                $NA_communication_question_4 = 6;
                                                            }else{
                                                                $NA_communication_question_4 = false;
                                                            }


                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->m_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_4" value="<?php echo $re_evaluate->m_communication_question_4; ?>">
                                                        <input type="hidden" name="e_communication_question_4" value="<?php echo $re_evaluate->communication_question_4; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Communicates well with their client <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($re_evaluate->m_communication_question_5 === $re_evaluate->communication_question_5){
                                                                $same_communication_question_5 = $re_evaluate->m_communication_question_5;
                                                            }else{
                                                                $same_communication_question_5 = false;
                                                            }

                                                            if($re_evaluate->communication_question_5==0){
                                                                $NA_communication_question_5 = 6;
                                                            }else{
                                                                $NA_communication_question_5 = false;
                                                            }

                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->m_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="m_communication_question_5" value="<?php echo $re_evaluate->m_communication_question_5; ?>">
                                                        <input type="hidden" name="e_communication_question_5" value="<?php echo $re_evaluate->communication_question_5; ?>">
                                                    </tr>
                                                  
                                                    <tr class="remove_bb">
                                                        <td></td>
                                                        <td>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $re_evaluate->communication_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $re_evaluate->m_communication_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class='radio-inline'> <input type='radio' class='form-check-input both-checked' /></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_communication_emp_avg_old" value="<?php echo $re_evaluate->m_communication_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="communication_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->communication_comments; ?></textarea>
                                                            <input type="hidden" name="communication_comments_old" value="<?php echo $re_evaluate->communication_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_communication_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_communication_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-knowledge-performance" role="tabpanel">
                                            <h4>Knowledge & Performance</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Successfully executes the duties and responsibilities of their role as stated in their job descriptions
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>
                                                                        <ul>
                                                                        <li>BIM Consultants: Ability to model correctly until LOD300, produce schedules, input metadata in families</li>
                                                                        <li>BIM Coordinators: Quality check of BIM models and sheets, work in CDEs, ability to follow a BEP</li>
                                                                        <li>BIM Managers: Ability to manage a team, follow ISO19650, write and follow BEP, give feedback to team</li>
                                                                        <li>Directors: Ensures all teams are running smoothly, solves technical and operational issues for the teams</li>
                                                                        <li>Support: Encourages growth and progress of the company’s support department, constantly communicates to Directors for feedback and improvements</li>
                                                                        </ul>
                                                                    </span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($re_evaluate->m_knowledge_performance_question_1 === $re_evaluate->knowledge_performance_question_1){
                                                                $same_knowledge_performance_question_1 = $re_evaluate->m_knowledge_performance_question_1;
                                                            }else{
                                                                $same_knowledge_performance_question_1 = false;
                                                            }

                                                            if($re_evaluate->knowledge_performance_question_1==0){
                                                                $NA_knowledge_performance_question_1 = 6;
                                                            }else{
                                                                $NA_knowledge_performance_question_1 = false;
                                                            }
                                                    
                                                            $x = 1;
                                                            while($x <= 6) {
                                                            if($same_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->m_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($NA_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_1" value="<?php echo $re_evaluate->m_knowledge_performance_question_1; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_1" value="<?php echo $re_evaluate->knowledge_performance_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Completes work efficiently with a fast turnaround and avoids redundant work
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Able to maximize the use of their time to work quickly without delays and mistakes</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>

                                                            <?php
                                                                if($re_evaluate->m_knowledge_performance_question_2 === $re_evaluate->knowledge_performance_question_2){
                                                                    $same_knowledge_performance_question_2 = $re_evaluate->m_knowledge_performance_question_2;
                                                                }else{
                                                                    $same_knowledge_performance_question_2 = false;
                                                                }

                                                                if($re_evaluate->knowledge_performance_question_2==0){
                                                                    $NA_knowledge_performance_question_2 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_2" value="<?php echo $re_evaluate->m_knowledge_performance_question_2; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_2" value="<?php echo $re_evaluate->knowledge_performance_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Knowledge of your industry’s practices, regulations, and workflow
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proactively searches for new updates in BIM practices, add-ins, tools to solve project tasks and improve the workflow of the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_knowledge_performance_question_3 === $re_evaluate->knowledge_performance_question_3){
                                                                    $same_knowledge_performance_question_3 = $re_evaluate->m_knowledge_performance_question_3;
                                                                }else{
                                                                    $same_knowledge_performance_question_3 = false;
                                                                }

                                                                if($re_evaluate->knowledge_performance_question_3==0){
                                                                    $NA_knowledge_performance_question_3 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_3 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_3" value="<?php echo $re_evaluate->m_knowledge_performance_question_3; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_3" value="<?php echo $re_evaluate->knowledge_performance_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Desire to learn new skills and industry knowledge to improve and grow in your role <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Show the desire to learn more and expand your role to better support your team and project</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_knowledge_performance_question_4 === $re_evaluate->knowledge_performance_question_4){
                                                                    $same_knowledge_performance_question_4 = $re_evaluate->m_knowledge_performance_question_4;
                                                                }else{
                                                                    $same_knowledge_performance_question_4 = false;
                                                                }

                                                                if($re_evaluate->knowledge_performance_question_4==0){
                                                                    $NA_knowledge_performance_question_4 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_4" value="<?php echo $re_evaluate->m_knowledge_performance_question_4; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_4" value="<?php echo $re_evaluate->knowledge_performance_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Shows the ability to supervise a team to handle a project <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Shows signs of leadership to handle a team and guide them towards a common goal</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_knowledge_performance_question_5 === $re_evaluate->knowledge_performance_question_5){
                                                                    $same_knowledge_performance_question_5 = $re_evaluate->m_knowledge_performance_question_5;
                                                                }else{
                                                                    $same_knowledge_performance_question_5 = false;
                                                                }

                                                                if($re_evaluate->knowledge_performance_question_5==0){
                                                                    $NA_knowledge_performance_question_5 = 6;
                                                                }else{
                                                                    $NA_knowledge_performance_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledge_performance_question_5" value="<?php echo $re_evaluate->m_knowledge_performance_question_5; ?>">
                                                            <input type="hidden" name="e_knowledge_performance_question_5" value="<?php echo $re_evaluate->knowledge_performance_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $re_evaluate->knowledge_performance_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-primary">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-primary">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-primary">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <span>
                                                                    <?php  $comm_avg= $re_evaluate->m_knowledge_performance_emp_avg; ?>
                                                                        <?php if($comm_avg <= 1): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php elseif($comm_avg <= 5): ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                        <?php else: ?>
                                                                        <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                    <?php endif; ?>
                                                                </span>
                                                                &nbsp;
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class='radio-inline'> <input type='radio' class='form-check-input both-checked' /></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_knowledge_performance_emp_avg_old" value="<?php echo $re_evaluate->m_knowledge_performance_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="knowledge_performance_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->knowledge_performance_comments; ?></textarea>
                                                            <input type="hidden" name="knowledge_performance_comments_old" value="<?php echo $re_evaluate->knowledge_performance_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_knowledge_performance_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_knowledge_performance_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-quality" role="tabpanel">
                                            <h4>Quality & Organization</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Attention to details
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>The work produced is concise and free of mistakes, all decisions are deliberate to improve the quality of the work. The Presentation of the work is clean, clear and aligned</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_quality_question_1 === $re_evaluate->quality_question_1){
                                                                    $same_quality_question_1 = $re_evaluate->m_quality_question_1;
                                                                }else{
                                                                    $same_quality_question_1 = false;
                                                                }

                                                                if($re_evaluate->quality_question_1==0){
                                                                    $NA_quality_question_1 = 6;
                                                                }else{
                                                                    $NA_quality_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_1" value="<?php echo $re_evaluate->m_quality_question_1; ?>">
                                                            <input type="hidden" name="e_quality_question_1" value="<?php echo $re_evaluate->quality_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Produces high quality finished deliverables
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Produces clean modelling adhering to the LOD with accurate dimensions, no spelling mistakes, necessary metadata</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_quality_question_2 === $re_evaluate->quality_question_2){
                                                                    $same_quality_question_2 = $re_evaluate->m_quality_question_2;
                                                                }else{
                                                                    $same_quality_question_2 = false;
                                                                }

                                                                if($re_evaluate->quality_question_2==0){
                                                                    $NA_quality_question_2 = 6;
                                                                }else{
                                                                    $NA_quality_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_2" value="<?php echo $re_evaluate->m_quality_question_2; ?>">
                                                            <input type="hidden" name="e_quality_question_2" value="<?php echo $re_evaluate->quality_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Learns from mistakes and avoid recurrence
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Mistakes made result in growth and learning lessons to improve quality of work and not repeated again</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                             <?php
                                                                if($re_evaluate->m_quality_question_3 === $re_evaluate->quality_question_3){
                                                                    $same_quality_question_3 = $re_evaluate->m_quality_question_3;
                                                                }else{
                                                                    $same_quality_question_3 = false;
                                                                }

                                                                if($re_evaluate->quality_question_3==0){
                                                                    $NA_quality_question_3 = 6;
                                                                }else{
                                                                    $NA_quality_question_3 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_3" value="<?php echo $re_evaluate->m_quality_question_3; ?>">
                                                            <input type="hidden" name="e_quality_question_3" value="<?php echo $re_evaluate->quality_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Estimates how long a task will take to include for task discussion, task execution, and task quality control
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Sets realistic time allocation to allow for proper task execution without having to sacrifice quality control</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_quality_question_4 === $re_evaluate->quality_question_4){
                                                                    $same_quality_question_4 = $re_evaluate->m_quality_question_4;
                                                                }else{
                                                                    $same_quality_question_4 = false;
                                                                }

                                                                if($re_evaluate->quality_question_4==0){
                                                                    $NA_quality_question_4 = 6;
                                                                }else{
                                                                    $NA_quality_question_4 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_4" value="<?php echo $re_evaluate->m_quality_question_4; ?>">
                                                            <input type="hidden" name="e_quality_question_4" value="<?php echo $re_evaluate->quality_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5.  Follows company standards for file organization, file documentation, naming conventions, and BIM protocols
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Follows company standards for file organization, file documentation, naming conventions, and BIM protocols</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_quality_question_5 === $re_evaluate->quality_question_5){
                                                                    $same_quality_question_5 = $re_evaluate->m_quality_question_5;
                                                                }else{
                                                                    $same_quality_question_5 = false;
                                                                }

                                                                if($re_evaluate->quality_question_5==0){
                                                                    $NA_quality_question_5 = 6;
                                                                }else{
                                                                    $NA_quality_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_quality_question_5" value="<?php echo $re_evaluate->m_quality_question_5; ?>">
                                                            <input type="hidden" name="e_quality_question_5" value="<?php echo $re_evaluate->quality_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                            <?php  $comm_avg= $re_evaluate->quality_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_quality_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_quality_emp_avg_old" value="<?php echo $re_evaluate->m_quality_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="quality_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->quality_comments; ?></textarea>
                                                            <input type="hidden" name="quality_comments_old" value="<?php echo $re_evaluate->quality_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_quality_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_quality_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-knowledge" role="tabpanel">
                                            <h4>Knowledge of Job</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                                
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Understanding of BIM project standards and portfolio</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_knowledge_standards_and_portfolio === $re_evaluate->knowledge_standards_and_portfolio){
                                                                    $same_knowledge_standards_and_portfolio = $re_evaluate->m_knowledge_standards_and_portfolio;
                                                                }else{
                                                                    $same_knowledge_standards_and_portfolio = false;
                                                                }

                                                                if($re_evaluate->knowledge_standards_and_portfolio==0){
                                                                    $NA_knowledge_standards_and_portfolio = 6;
                                                                }else{
                                                                    $NA_knowledge_standards_and_portfolio = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledgejob_question_1" value="<?php echo $re_evaluate->m_knowledge_standards_and_portfolio; ?>">
                                                            <input type="hidden" name="e_knowledgejob_question_1" value="<?php echo $re_evaluate->knowledge_standards_and_portfolio; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Understanding of BIM project requirements</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_knowledge_bim_project_requirements === $re_evaluate->knowledge_bim_project_requirements){
                                                                    $same_knowledge_bim_project_requirements = $re_evaluate->m_knowledge_bim_project_requirements;
                                                                }else{
                                                                    $same_knowledge_bim_project_requirements = false;
                                                                }

                                                                if($re_evaluate->knowledge_bim_project_requirements==0){
                                                                    $NA_knowledge_bim_project_requirements = 6;
                                                                }else{
                                                                    $NA_knowledge_bim_project_requirements = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledgejob_question_2" value="<?php echo $re_evaluate->m_knowledge_bim_project_requirements; ?>">
                                                            <input type="hidden" name="e_knowledgejob_question_2" value="<?php echo $re_evaluate->knowledge_bim_project_requirements; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Knowledge of the construction industry including ARC, STR, MEP, and BIM standards</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_knowledge_of_the_construction_industry === $re_evaluate->knowledge_of_the_construction_industry){
                                                                    $same_knowledge_of_the_construction_industry = $re_evaluate->m_knowledge_of_the_construction_industry;
                                                                }else{
                                                                    $same_knowledge_of_the_construction_industry = false;
                                                                }

                                                                if($re_evaluate->knowledge_of_the_construction_industry==0){
                                                                    $NA_knowledge_of_the_construction_industry = 6;
                                                                }else{
                                                                    $NA_knowledge_of_the_construction_industry = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledgejob_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_knowledgejob_question_3" value="<?php echo $re_evaluate->m_knowledge_of_the_construction_industry; ?>">
                                                            <input type="hidden" name="e_knowledgejob_question_3" value="<?php echo $re_evaluate->knowledge_of_the_construction_industry; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bx-circle'></i></i>
                                                                </span>
                                                            <?php  $comm_avg= $re_evaluate->knowledge_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_knowledge_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_knowledge_emp_avg_old" value="<?php echo $re_evaluate->m_knowledge_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="knowledge_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->knowledge_comments; ?></textarea>
                                                            <input type="hidden" name="knowledge_comments_old" value="<?php echo $re_evaluate->knowledge_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_knowledge_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_knowledge_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="navs-justified-software" role="tabpanel">
                                            <h4>Knowledge of Software</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                       
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. BIM Tools (Revit, Naviswork, Autocad)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency with the tools required for BIM workflow</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_software_question_1 === $re_evaluate->software_question_1){
                                                                    $same_software_question_1 = $re_evaluate->m_software_question_1;
                                                                }else{
                                                                    $same_software_question_1 = false;
                                                                }

                                                                if($re_evaluate->software_question_1==0){
                                                                    $NA_software_question_1 = 6;
                                                                }else{
                                                                    $NA_software_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_1" value="<?php echo $re_evaluate->m_software_question_1; ?>">
                                                            <input type="hidden" name="e_software_question_1" value="<?php echo $re_evaluate->software_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. CDE Platforms (ACC, BIM360)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in Common Data Environments to allow seamless collaboration with the team</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_software_question_2 === $re_evaluate->software_question_2){
                                                                    $same_software_question_2 = $re_evaluate->m_software_question_2;
                                                                }else{
                                                                    $same_software_question_2 = false;
                                                                }

                                                                if($re_evaluate->software_question_2==0){
                                                                    $NA_software_question_2 = 6;
                                                                }else{
                                                                    $NA_software_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_2" value="<?php echo $re_evaluate->m_software_question_2; ?>">
                                                            <input type="hidden" name="e_software_question_2" value="<?php echo $re_evaluate->software_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Automation Tools (Elastic, Dynamo, etc)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in using automation tools to maximize efficiency in workflow</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_software_question_3 === $re_evaluate->software_question_3){
                                                                    $same_software_question_3 = $re_evaluate->m_software_question_3;
                                                                }else{
                                                                    $same_software_question_3 = false;
                                                                }

                                                                if($re_evaluate->software_question_3==0){
                                                                    $NA_software_question_3 = 6;
                                                                }else{
                                                                    $NA_software_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_3" value="<?php echo $re_evaluate->m_software_question_3; ?>">
                                                            <input type="hidden" name="e_software_question_3" value="<?php echo $re_evaluate->software_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Office Tools (Word, Excel, Outlook, PDF editing, etc)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in various office tools to keep information updated and transparent</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_software_question_4 === $re_evaluate->software_question_4){
                                                                    $same_software_question_4 = $re_evaluate->m_software_question_4;
                                                                }else{
                                                                    $same_software_question_4 = false;
                                                                }

                                                                if($re_evaluate->software_question_4==0){
                                                                    $NA_software_question_4 = 6;
                                                                }else{
                                                                    $NA_software_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_4" value="<?php echo $re_evaluate->m_software_question_4; ?>">
                                                            <input type="hidden" name="e_software_question_4" value="<?php echo $re_evaluate->software_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Management (Bitrix24, Zoom)
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proficiency in various aspects of Bitrix24 including using tasks, timetracking, commenting on tasks, swift communication, etc</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php

                                                                if($re_evaluate->m_software_question_5 === $re_evaluate->software_question_5){
                                                                    $same_software_question_5 = $re_evaluate->m_software_question_5;
                                                                }else{
                                                                    $same_software_question_5 = false;
                                                                }

                                                                if($re_evaluate->software_question_5==0){
                                                                    $NA_software_question_5 = 6;
                                                                }else{
                                                                    $NA_software_question_5 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_software_question_5" value="<?php echo $re_evaluate->m_software_question_5; ?>">
                                                            <input type="hidden" name="e_software_question_5" value="<?php echo $re_evaluate->software_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                    <td>
                                                    <div class="re-update-score-box">
                                                        <span class="indi-re-avg-emp">
                                                            Employee <i class='bx bx-circle'></i></i>
                                                        </span>
                                                            <?php  $comm_avg= $re_evaluate->software_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bx-circle'></i></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_software_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager both-checked-indi">
                                                                Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="m_software_emp_avg_old" value="<?php echo $re_evaluate->m_software_emp_avg; ?>">
                                                    </td>

                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="software_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->software_comments; ?></textarea>
                                                            <input type="hidden" name="software_comments_old" value="<?php echo $re_evaluate->software_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_software_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_software_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-reliability-professionalism" role="tabpanel">
                                            <h4>Reliability & Professionalism</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Organizes their time to allow for multiple daily tasks without issues
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Allocates time in their day properly to manage more than one task to be addressed</span>">
                                                                </i>
                                                                </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_reliability_question_1 === $re_evaluate->reliability_question_1){
                                                                    $same_reliability_question_1 = $re_evaluate->m_reliability_question_1;
                                                                }else{
                                                                    $same_reliability_question_1 = false;
                                                                }

                                                                if($re_evaluate->reliability_question_1==0){
                                                                    $NA_reliability_question_1 = 6;
                                                                }else{
                                                                    $NA_reliability_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_1" value="<?php echo $re_evaluate->m_reliability_question_1; ?>">
                                                            <input type="hidden" name="e_reliability_question_1" value="<?php echo $re_evaluate->reliability_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                2. Finishes tasks without constant supervision within set deadlines
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Self-sufficient with their skills and efficient with their questions to allow for their supervisor and teammates to work with minimum interruption</span>">
                                                                </i>                
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_reliability_question_2 === $re_evaluate->reliability_question_2){
                                                                    $same_reliability_question_2 = $re_evaluate->m_reliability_question_2;
                                                                }else{
                                                                    $same_reliability_question_2 = false;
                                                                }

                                                                if($re_evaluate->reliability_question_2==0){
                                                                    $NA_reliability_question_2 = 6;
                                                                }else{
                                                                    $NA_reliability_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_2" value="<?php echo $re_evaluate->m_reliability_question_2; ?>">
                                                            <input type="hidden" name="e_reliability_question_2" value="<?php echo $re_evaluate->reliability_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                3. Produces deliverables that are above expectation
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Proactively provides further information, data or drawings to compliment and support an argument to enhance deliverables</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_reliability_question_3 === $re_evaluate->reliability_question_3){
                                                                    $same_reliability_question_3 = $re_evaluate->m_reliability_question_3;
                                                                }else{
                                                                    $same_reliability_question_3 = false;
                                                                }

                                                                if($re_evaluate->reliability_question_3==0){
                                                                    $NA_reliability_question_3 = 6;
                                                                }else{
                                                                    $NA_reliability_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_3" value="<?php echo $re_evaluate->m_reliability_question_3; ?>">
                                                            <input type="hidden" name="e_reliability_question_3" value="<?php echo $re_evaluate->reliability_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                            4. Takes ownership of job duties and hold himself/herself accountable for them <span class="gray-font-scoring">(independent scoring)</span>
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Proud on their work to share with teammates to strengthen the knowledge and backbone of the team</span>">
                                                            </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_reliability_question_4 === $re_evaluate->reliability_question_4){
                                                                    $same_reliability_question_4 = $re_evaluate->m_reliability_question_4;
                                                                }else{
                                                                    $same_reliability_question_4 = false;
                                                                }

                                                                if($re_evaluate->reliability_question_4==0){
                                                                    $NA_reliability_question_4 = 6;
                                                                }else{
                                                                    $NA_reliability_question_4 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_4" value="<?php echo $re_evaluate->m_reliability_question_4; ?>">
                                                            <input type="hidden" name="e_reliability_question_4" value="<?php echo $re_evaluate->reliability_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Strive to cultivate and maintain positive working relationships and respect towards co-workers <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Maintains a respectful, collaborative environment to allow for good moral support in achieving team goals</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_reliability_question_5 === $re_evaluate->reliability_question_5){
                                                                    $same_reliability_question_5 = $re_evaluate->m_reliability_question_5;
                                                                }else{
                                                                    $same_reliability_question_5 = false;
                                                                }

                                                                if($re_evaluate->reliability_question_5==0){
                                                                    $NA_reliability_question_5 = 6;
                                                                }else{
                                                                    $NA_reliability_question_5 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_5" value="<?php echo $re_evaluate->m_reliability_question_5; ?>">
                                                            <input type="hidden" name="e_reliability_question_5" value="<?php echo $re_evaluate->reliability_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                6. Keeps a tidy workspace and proper care of the company’s equipment <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Maintains a clean working environment on the company’s premises, particularly for shared workstations. Takes care of their assigned work equipmen</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_reliability_question_6 === $re_evaluate->reliability_question_6){
                                                                    $same_reliability_question_6 = $re_evaluate->m_reliability_question_6;
                                                                }else{
                                                                    $same_reliability_question_6 = false;
                                                                }

                                                                if($re_evaluate->reliability_question_6==0){
                                                                    $NA_reliability_question_6 = 6;
                                                                }else{
                                                                    $NA_reliability_question_6 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_reliability_question_6" value="<?php echo $re_evaluate->m_reliability_question_6; ?>">
                                                            <input type="hidden" name="e_reliability_question_6" value="<?php echo $re_evaluate->reliability_question_6; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>
                                                            
                                                            <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $re_evaluate->reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                           
                                                            <input type="hidden" name="m_reliability_emp_avg_old" value="<?php echo $re_evaluate->m_reliability_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->reliability_comments; ?></textarea>
                                                            <input type="hidden" name="reliability_comments" value="<?php echo $re_evaluate->reliability_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_reliability_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_reliability_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-time-management" role="tabpanel">
                                            <h4>Task & Time Management</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                       
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                       
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                1. Adheres to the task deadlines set by the supervisor
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Manages to meet the task deadlines without having to extend them or go overdue</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_time_management_question_1 === $re_evaluate->time_management_question_1){
                                                                    $same_time_management_question_1 = $re_evaluate->m_time_management_question_1;
                                                                }else{
                                                                    $same_time_management_question_1 = false;
                                                                }

                                                                if($re_evaluate->time_management_question_1==0){
                                                                    $NA_time_management_question_1 = 6;
                                                                }else{
                                                                    $NA_time_management_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_1" value="<?php echo $re_evaluate->m_time_management_question_1; ?>">
                                                            <input type="hidden" name="e_time_management_question_1" value="<?php echo $re_evaluate->time_management_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            2. Updates on Task status and progress on Bitrix24
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Comments are updated daily regarding the status of the task including reporting the progress of the task, questions for the team are addressed, deadlines are monitored, and task summaries are provided when tasks are finished</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_time_management_question_2 === $re_evaluate->time_management_question_2){
                                                                    $same_time_management_question_2 = $re_evaluate->m_time_management_question_2;
                                                                }else{
                                                                    $same_time_management_question_2 = false;
                                                                }

                                                                if($re_evaluate->time_management_question_2==0){
                                                                    $NA_time_management_question_2 = 6;
                                                                }else{
                                                                    $NA_time_management_question_2 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_2" value="<?php echo $re_evaluate->m_time_management_question_2; ?>">
                                                            <input type="hidden" name="e_time_management_question_2" value="<?php echo $re_evaluate->time_management_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            3. Proactively informs if there are delays or issues with project tasks
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Informs the team and supervisor well ahead of time when a task’s deadline may be unrealistic and explain the challenges and how to address them in order to determine a more accurate timeline</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_time_management_question_3 === $re_evaluate->time_management_question_3){
                                                                    $same_time_management_question_3 = $re_evaluate->m_time_management_question_3;
                                                                }else{
                                                                    $same_time_management_question_3 = false;
                                                                }

                                                                if($re_evaluate->time_management_question_3==0){
                                                                    $NA_time_management_question_3 = 6;
                                                                }else{
                                                                    $NA_time_management_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_3" value="<?php echo $re_evaluate->m_time_management_question_3; ?>">
                                                            <input type="hidden" name="e_time_management_question_3" value="<?php echo $re_evaluate->time_management_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            4. Timetracks required working hours daily on Bitrix24
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_time_management_question_4 === $re_evaluate->time_management_question_4){
                                                                    $same_time_management_question_4 = $re_evaluate->m_time_management_question_4;
                                                                }else{
                                                                    $same_time_management_question_4 = false;
                                                                }

                                                                if($re_evaluate->time_management_question_4==0){
                                                                    $NA_time_management_question_4 = 6;
                                                                }else{
                                                                    $NA_time_management_question_4 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_4" value="<?php echo $re_evaluate->m_time_management_question_4; ?>">
                                                            <input type="hidden" name="e_time_management_question_4" value="<?php echo $re_evaluate->time_management_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Follows the scheduled work shift <span class="gray-font-scoring">(independent scoring)</span>
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Follows the scheduled work shifts specially with their WFH and Office hours</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_time_management_question_5 === $re_evaluate->time_management_question_5){
                                                                    $same_time_management_question_5 = $re_evaluate->m_time_management_question_5;
                                                                }else{
                                                                    $same_time_management_question_5 = false;
                                                                }

                                                                if($re_evaluate->time_management_question_5==0){
                                                                    $NA_time_management_question_5 = 6;
                                                                }else{
                                                                    $NA_time_management_question_5 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_time_management_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_time_management_question_5" value="<?php echo $re_evaluate->m_time_management_question_5; ?>">
                                                            <input type="hidden" name="e_time_management_question_5" value="<?php echo $re_evaluate->time_management_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $re_evaluate->time_management_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_time_management_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>

                                                            
                                                            <input type="hidden" name="m_time_management_emp_avg_old" value="<?php echo $re_evaluate->m_time_management_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="time_management_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->time_management_comments; ?></textarea>
                                                            <input type="hidden" name="time_management_comments" value="<?php echo $re_evaluate->time_management_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_time_management_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_time_management_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="tab-pane fade" id="navs-justified-adaptability" role="tabpanel">
                                            <h4>Adaptability & Proactivity</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">

                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            1. Adapts to new project standards, new job requirements in a short amount of time
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Can shift between teams easily and adapt to the new project’s requirements</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_adaptability_productivity_question_1 === $re_evaluate->adaptability_productivity_question_1){
                                                                    $same_adaptability_productivity_question_1 = $re_evaluate->m_adaptability_productivity_question_1;
                                                                }else{
                                                                    $same_adaptability_productivity_question_1 = false;
                                                                }

                                                                if($re_evaluate->adaptability_productivity_question_1==0){
                                                                $NA_adaptability_productivity_question_1 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_1" value="<?php echo $re_evaluate->m_adaptability_productivity_question_1; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_1" value="<?php echo $re_evaluate->adaptability_productivity_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            2. Takes initiatives to ask questions and solve potential issues that may affect the project
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Looks forward into the project to identify potential challenges and brings it up to the team to brainstorm for solutions or adapt the tasks and schedules to avoid these potential problems</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_adaptability_productivity_question_2 === $re_evaluate->adaptability_productivity_question_2){
                                                                    $same_adaptability_productivity_question_2 = $re_evaluate->m_adaptability_productivity_question_2;
                                                                }else{
                                                                    $same_adaptability_productivity_question_2 = false;
                                                                }

                                                                if($re_evaluate->adaptability_productivity_question_2==0){
                                                                $NA_adaptability_productivity_question_2 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_2" value="<?php echo $re_evaluate->m_adaptability_productivity_question_2; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_2" value="<?php echo $re_evaluate->adaptability_productivity_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            3. Learns new disciplines, software, and adapt this knowledge to projects
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Desires to learn new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_adaptability_productivity_question_3 === $re_evaluate->adaptability_productivity_question_3){
                                                                    $same_adaptability_productivity_question_3 = $re_evaluate->m_adaptability_productivity_question_3;
                                                                }else{
                                                                    $same_adaptability_productivity_question_3 = false;
                                                                }

                                                                if($re_evaluate->adaptability_productivity_question_3==0){
                                                                $NA_adaptability_productivity_question_3 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_3 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_3" value="<?php echo $re_evaluate->m_adaptability_productivity_question_3; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_3" value="<?php echo $re_evaluate->adaptability_productivity_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            4. Thinks outside the box to suggest new ideas, workflows, innovations and products to improve the project
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Provides critical thinking to search for optimal or alternative solutions for tasks to avoid time consuming and error prone solutions</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_adaptability_productivity_question_4 === $re_evaluate->adaptability_productivity_question_4){
                                                                    $same_adaptability_productivity_question_4 = $re_evaluate->m_adaptability_productivity_question_4;
                                                                }else{
                                                                    $same_adaptability_productivity_question_4 = false;
                                                                }

                                                                if($re_evaluate->adaptability_productivity_question_4==0){
                                                                $NA_adaptability_productivity_question_4 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_4 = false;
                                                                }


                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_4" value="<?php echo $re_evaluate->m_adaptability_productivity_question_4; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_4" value="<?php echo $re_evaluate->adaptability_productivity_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                        5. Handles multiple projects and teams simultaneously <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                        <i class='bx bx-info-circle'
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Able to supervise more than one team at once without loosing sight of each project’s requirements, goals and challenges</span>">
                                                        </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_adaptability_productivity_question_5 === $re_evaluate->adaptability_productivity_question_5){
                                                                    $same_adaptability_productivity_question_5 = $re_evaluate->m_adaptability_productivity_question_5;
                                                                }else{
                                                                    $same_adaptability_productivity_question_5 = false;
                                                                }

                                                                if($re_evaluate->adaptability_productivity_question_5==0){
                                                                $NA_adaptability_productivity_question_5 = 6;
                                                                }else{
                                                                $NA_adaptability_productivity_question_5 = false;
                                                                }

                                                                    
                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_adaptability_productivity_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_adaptability_productivity_question_5" value="<?php echo $re_evaluate->m_adaptability_productivity_question_5; ?>">
                                                            <input type="hidden" name="e_adaptability_productivity_question_5" value="<?php echo $re_evaluate->adaptability_productivity_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $re_evaluate->productivity_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_productivity_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                        
                                                            <input type="hidden" name="m_productivity_emp_avg_old" value="<?php echo $re_evaluate->m_productivity_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="productivity_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->productivity_comments; ?></textarea>
                                                            <input type="hidden" name="productivity_comments_old" value="<?php echo $re_evaluate->productivity_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_productivity_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_productivity_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="tab-pane fade" id="navs-justified-initiative-proactive" role="tabpanel">
                                            <h4>Initiative & Proactive</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Identifies potential issues</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_initiative_proactive_question_1 === $re_evaluate->initiative_proactive_question_1){
                                                                    $same_initiative_proactive_question_1 = $re_evaluate->m_initiative_proactive_question_1;
                                                                }else{
                                                                    $same_initiative_proactive_question_1 = false;
                                                                }

                                                                if($re_evaluate->initiative_proactive_question_1==0){
                                                                $NA_initiative_proactive_question_1 = 6;
                                                                }else{
                                                                $NA_initiative_proactive_question_1 = false;
                                                                }
                                                                    
                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_initiative_proactive_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_initiative_proactive_question_1" value="<?php echo $re_evaluate->m_initiative_proactive_question_1; ?>">
                                                            <input type="hidden" name="e_initiative_proactive_question_1" value="<?php echo $re_evaluate->initiative_proactive_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Proposes and suggests new ideas</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_initiative_proactive_question_2 === $re_evaluate->initiative_proactive_question_2){
                                                                    $same_initiative_proactive_question_2 = $re_evaluate->m_initiative_proactive_question_2;
                                                                }else{
                                                                    $same_initiative_proactive_question_2 = false;
                                                                }

                                                                if($re_evaluate->initiative_proactive_question_2==0){
                                                                $NA_initiative_proactive_question_2 = 6;
                                                                }else{
                                                                $NA_initiative_proactive_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_initiative_proactive_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_initiative_proactive_question_2" value="<?php echo $re_evaluate->m_initiative_proactive_question_2; ?>">
                                                            <input type="hidden" name="e_initiative_proactive_question_2" value="<?php echo $re_evaluate->initiative_proactive_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Going extra mile if needed</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_initiative_proactive_question_3 === $re_evaluate->initiative_proactive_question_3){
                                                                    $same_initiative_proactive_question_3 = $re_evaluate->m_initiative_proactive_question_3;
                                                                }else{
                                                                    $same_initiative_proactive_question_3 = false;
                                                                }

                                                                if($re_evaluate->initiative_proactive_question_3==0){
                                                                $NA_initiative_proactive_question_3 = 6;
                                                                }else{
                                                                $NA_initiative_proactive_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_initiative_proactive_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_initiative_proactive_question_3" value="<?php echo $re_evaluate->m_initiative_proactive_question_3; ?>">
                                                            <input type="hidden" name="e_initiative_proactive_question_3" value="<?php echo $re_evaluate->initiative_proactive_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $re_evaluate->p_initiative_proactive_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_p_initiative_proactive_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>
                                                            <input type="hidden" name="m_p_initiative_proactive_emp_avg_old" value="<?php echo $re_evaluate->m_p_initiative_proactive_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="initiative_proactive_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->initiative_proactive_comments; ?></textarea>
                                                            <input type="hidden" name="initiative_proactive_comments_old" value="<?php echo $re_evaluate->initiative_proactive_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_initiative_proactive_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_initiative_proactive_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="navs-justified-creativity-problem-solving" role="tabpanel">
                                            <h4>Creativity & Problem Solving</h4>
                                            <hr>
                                            <table class="table">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>INDICATOR</th>
                                                        <th>ASSESSMENT
                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance scores</span>"></i>
                                                            (Out of 5)
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p></p>
                                                        </td>
                                                        <td>
                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not sufficient</span>">1</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Sufficient</span>">2</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Good</span>">3</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Very good</span>">4</span>

                                                            <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Excellent</span>">5</span>
                                                        
                                                            <span class="radio-inline-num"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-offset="0,4"
                                                            data-bs-placement="right"
                                                            data-bs-html="true"
                                                            title="<span>Not Applicable</span>">N/A</span>

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Ability to think outside the box</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_creativity_problem_question_1 === $re_evaluate->creativity_problem_question_1){
                                                                    $same_creativity_problem_question_1 = $re_evaluate->m_creativity_problem_question_1;
                                                                }else{
                                                                    $same_creativity_problem_question_1 = false;
                                                                }

                                                                if($re_evaluate->creativity_problem_question_1==0){
                                                                $NA_creativity_problem_question_1 = 6;
                                                                }else{
                                                                $NA_creativity_problem_question_1 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_creativity_problem_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_creativity_problem_question_1" value="<?php echo $re_evaluate->m_creativity_problem_question_1; ?>">
                                                            <input type="hidden" name="e_creativity_problem_question_1" value="<?php echo $re_evaluate->creativity_problem_question_1; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Offers creative solutions</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_creativity_problem_question_2 === $re_evaluate->creativity_problem_question_2){
                                                                    $same_creativity_problem_question_2 = $re_evaluate->m_creativity_problem_question_2;
                                                                }else{
                                                                    $same_creativity_problem_question_2 = false;
                                                                }

                                                                if($re_evaluate->creativity_problem_question_2==0){
                                                                $NA_creativity_problem_question_2 = 6;
                                                                }else{
                                                                $NA_creativity_problem_question_2 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_creativity_problem_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_creativity_problem_question_2" value="<?php echo $re_evaluate->m_creativity_problem_question_2; ?>">
                                                            <input type="hidden" name="e_creativity_problem_question_2" value="<?php echo $re_evaluate->creativity_problem_question_2; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Explores new ideas</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                if($re_evaluate->m_creativity_problem_question_3 === $re_evaluate->creativity_problem_question_3){
                                                                    $same_creativity_problem_question_3 = $re_evaluate->m_creativity_problem_question_3;
                                                                }else{
                                                                    $same_creativity_problem_question_3 = false;
                                                                }

                                                                if($re_evaluate->creativity_problem_question_3==0){
                                                                $NA_creativity_problem_question_3 = 6;
                                                                }else{
                                                                $NA_creativity_problem_question_3 = false;
                                                                }

                                                                $x = 1;
                                                                while($x <= 6) {
                                                                if($same_creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->m_creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($NA_creativity_problem_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="m_creativity_problem_question_3" value="<?php echo $re_evaluate->m_creativity_problem_question_3; ?>">
                                                            <input type="hidden" name="e_creativity_problem_question_3" value="<?php echo $re_evaluate->creativity_problem_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr class="remove_bb">
                                                            <td>
                                                                <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                            </td>
                                                            <td>

                                                            <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bx-circle'></i></i>
                                                            </span>
                                                                <?php  $comm_avg= $re_evaluate->p_creativity_problem_solving_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bx-circle'></i></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_p_creativity_problem_solving_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger">Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning">Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success">Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager both-checked-indi">
                                                                    Employee / Manager &nbsp;<label class="radio-inline"> <input type="radio" class="form-check-input both-checked"></label>
                                                                </span>
                                                            </div>

                                                            
                                                            <input type="hidden" name="m_p_creativity_problem_solving_emp_avg_old" value="<?php echo $re_evaluate->m_p_creativity_problem_solving_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td colspan="2">
                                                            <h4>Employee comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="creativity_problem_solving_comments" id="" cols="3" rows="3" disabled><?php echo $re_evaluate->creativity_problem_solving_comments; ?></textarea>
                                                            <input type="hidden" name="creativity_problem_solving_comments_old" value="<?php echo $re_evaluate->creativity_problem_solving_comments; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Manager comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="m_creativity_problem_solving_comments" cols="3" rows="3" disabled><?php echo $re_evaluate->m_creativity_problem_solving_comments; ?></textarea>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            <?php endif ?>
            </div>

            <div class="row">
            <div class="col-lg-12 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                        <div id="chart_div_emp" style="width:100%; height: 700px;"></div>
                        </div>
                    </div>
                </div>
            </div>                                           
                                                        
          </div>
        </div>



              <div class="modal fade" id="empScoreEdit" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="modalCenterTitle">Are you sure you want to Re-Evaluate the score?</h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                          ></button>
                      </div>
                      <div class="modal-footer footer-flex">
                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                          Close
                          </button>
                          <a href="<?php echo base_url('Employee/updateReEvalution/'.$re_evaluate->emp_performance_id); ?>"><button type="button" class="btn btn-info">Go For Re-Evaluate</button></a>
                      </div>
                  </div>
                  </div>
              </div>
            </div>
         
            <div class="modal fade" id="empScoreSubmit" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Are you sure you'd like to submit this evaluation? Changes can't be made after the final submission.</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-footer footer-flex">
                    <hr>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                        </button>
                        <form action="<?php echo base_url('Employee/upgradePerStatusbyManager'); ?>" method="POST">
                            <input type="hidden" name="performance_id" value="<?php echo $re_evaluate->emp_performance_id; ?>">                                      
                            <button type="submit" class="btn btn-success">Submit</button>                                        
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
         

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>

          <?php 
            $start_date = $re_evaluate->emp_performance_start_date;
            $new_start_date = date("M-y", strtotime($start_date));

            $end_date = $re_evaluate->emp_performance_end_date;
            $new_end_date = date("M-y", strtotime($end_date));        
          ?>

          google.charts.load('current', {packages: ['corechart', 'bar']});
          google.charts.setOnLoadCallback(drawAnnotations);

          function drawAnnotations() {
                var data = google.visualization.arrayToDataTable([
                  ['Profile', 'Employee', 'Employee'],
                  ['Communication', 1, 5],
                  ['Knowledge & Performance', 1, 5],
                  ['Quality & Organization', 1, 5],
                  ['Knowledge of Job', 1, 5],
                  ['Knowledge of Software', 1, 5],
                  ['Reliability & Professionalism', 1, 5],
                  ['Task & Time Management', 1, 5],
                  ['Adaptability & Proactivity', 1, 5],
                  ['Initiative & Proactive', 1, 5],
                  ['Creativity & Problem Solving', 1, 5]
                ]);

                var data = google.visualization.arrayToDataTable([
                  ['Profile', 'Employee', {type: 'string', role: 'annotation'},
                  'Manager', {type: 'string', role: 'annotation'}],
                  ['Communication', <?php echo $re_evaluate->communication_emp_avg; ?>, '<?php echo $re_evaluate->communication_emp_avg; ?>', <?php echo $re_evaluate->m_communication_emp_avg; ?>, '<?php echo $re_evaluate->m_communication_emp_avg; ?>'],
                  ['Knowledge & Performance', <?php echo $re_evaluate->knowledge_performance_emp_avg; ?>, '<?php echo $re_evaluate->knowledge_performance_emp_avg; ?>', <?php echo $re_evaluate->m_knowledge_performance_emp_avg; ?>, '<?php echo $re_evaluate->m_knowledge_performance_emp_avg; ?>'],
                  ['Quality & Organization', <?php echo $re_evaluate->quality_emp_avg; ?>, '<?php echo $re_evaluate->quality_emp_avg; ?>', <?php echo $re_evaluate->m_quality_emp_avg; ?>, '<?php echo $re_evaluate->m_quality_emp_avg; ?>'],
                  ['Knowledge of Job', <?php echo $re_evaluate->knowledge_emp_avg; ?>, '<?php echo $re_evaluate->knowledge_emp_avg; ?>', <?php echo $re_evaluate->m_knowledge_emp_avg; ?>, '<?php echo $re_evaluate->m_knowledge_emp_avg; ?>'],
                  ['Knowledge of Software', <?php echo $re_evaluate->software_emp_avg; ?>, '<?php echo $re_evaluate->software_emp_avg; ?>', <?php echo $re_evaluate->m_software_emp_avg; ?>, '<?php echo $re_evaluate->m_software_emp_avg; ?>'],
                  ['Reliability & Professionalism', <?php echo $re_evaluate->reliability_emp_avg; ?>, '<?php echo $re_evaluate->reliability_emp_avg; ?>', <?php echo $re_evaluate->m_reliability_emp_avg; ?>, '<?php echo $re_evaluate->m_reliability_emp_avg; ?>'],
                  ['Task & Time Management', <?php echo $re_evaluate->time_management_emp_avg; ?>, '<?php echo $re_evaluate->time_management_emp_avg; ?>', <?php echo $re_evaluate->m_time_management_emp_avg; ?>, '<?php echo $re_evaluate->m_time_management_emp_avg; ?>'],
                  ['Adaptability & Proactivity', <?php echo $re_evaluate->productivity_emp_avg; ?>, '<?php echo $re_evaluate->productivity_emp_avg; ?>', <?php echo $re_evaluate->m_productivity_emp_avg; ?>, '<?php echo $re_evaluate->m_productivity_emp_avg; ?>'],
                  ['Initiative & Proactive', <?php echo $re_evaluate->p_initiative_proactive_emp_avg; ?>, '<?php echo $re_evaluate->p_initiative_proactive_emp_avg; ?>', <?php echo $re_evaluate->m_p_initiative_proactive_emp_avg; ?>, '<?php echo $re_evaluate->m_p_initiative_proactive_emp_avg; ?>'],
                  ['Creativity & Problem Solving', <?php echo $re_evaluate->p_creativity_problem_solving_emp_avg; ?>, '<?php echo $re_evaluate->p_creativity_problem_solving_emp_avg; ?>', <?php echo $re_evaluate->m_p_creativity_problem_solving_emp_avg; ?>, '<?php echo $re_evaluate->m_p_creativity_problem_solving_emp_avg; ?>']
                ]);

                var options = {
                  title: 'Your Performance Start Date - <?php echo $new_start_date; ?> / End Date - <?php echo $new_end_date; ?>',
                  chartArea: {width: '50%'},
                  hAxis: {
                    title: 'Total Score',
                    minValue: 5,
                    maxValue: 5
                  },
                  vAxis: {
                    title: 'Total Score',
                    minValue: 5,
                    maxValue: 5
                  },
                  annotations: {
                    alwaysOutside: true,
                    textStyle: {
                      fontSize: 16,
                      auraColor: 'none',
                      color: '#3264c8 '
                    },
                    boxStyle: {
                      stroke: '#cbd8f1',
                      strokeWidth: 1,
                      gradient: {
                        color1: '#cbd8f1',
                        color2: '#cbd8f1',
                        x1: '0%', y1: '0%',
                        x2: '100%', y2: '100%'
                      }
                    }
                  }
                };
                var chart = new google.visualization.BarChart(document.getElementById('chart_div_emp'));
                chart.draw(data, options);
              }
    </script>