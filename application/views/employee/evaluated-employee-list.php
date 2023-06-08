<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold "><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
    <h4 class="fw-bold py-1 mb-1"><span class="text-muted fw-light"> Dashboard / </span> Employee Performance Result</h4>
    
        <?php if(($empdata->employee_status)==2): ?>
            <div class="page_d_msg">
                <h2>Your account deactivated</h2>
                <a href="<?php echo base_url('Employee'); ?>">Back</a>
            </div>
        <?php else: ?>
            <section class="color_indicators_sec">
                <span>
                    <img src="<?php echo base_url('assets_admin/icons/danger.png'); ?>" alt=""> &nbsp;<b>ASSESSMENT < 2</b> &nbsp;&nbsp;
                    <img src="<?php echo base_url('assets_admin/icons/warning.png'); ?>" alt=""> &nbsp;<b>ASSESSMENT > 2 and < 3</b> &nbsp;&nbsp;
                    <img src="<?php echo base_url('assets_admin/icons/success.png'); ?>" alt=""> &nbsp;<b>ASSESSMENT > 3</b> &nbsp;&nbsp;
                </span>
            </section>
            <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Employee</th>
                        <th>Evaluated By</th>
                        <th>Evaluation PERIOD</th>
                        <th>Evaluation Start</th>
                        <th>Evaluation End</th>
                        <th>Employee Average</th>
                        <th>Manager Average</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php if($rerformancedata): ?>
                        <?php foreach($rerformancedata as $data ): ?>
                            <?php if(($data->submit_employee_status)==1 && ($data->employee_status)==1) : ?>
                                <?php $manager_main_avg = $data->total_emp_avg; ?>
                            <?php if(($manager_main_avg <= 2) && ($data->submit_manager_status==2) && ($manager_main_avg > 0)): ?>
                                <tr class="emp_improved">
                            <?php else: ?>
                                <tr class="emp_normal">
                            <?php endif; ?>
                            <td>
                                <div class="avatar3">
                                    <img src="<?php echo base_url($data->employee_image); ?>" alt="<?php echo $data->employee_first_name; ?>" class="w-px-40 h-auto rounded-circle">&nbsp;
                                    <strong><a href="<?php echo base_url('Employee/ReEvaluateForm/'.$data->emp_performance_id); ?>"><?php echo $data->employee_first_name; ?> <?php echo $data->employee_last_name; ?>  <i class='bx bx-link' ></i></a></strong>
                                </div>
                            </td>
                            <?php if($data->manager_name): ?>
                                <td><?php echo $data->manager_name; ?></td>
                            <?php else: ?>
                                <td>Self</td>
                            <?php endif; ?>
                            <td>
                                <?php 
                                    if(($data->evaluate_date_category)==30){
                                    $period  = 'Monthly';
                                    }elseif(($data->evaluate_date_category)==90){
                                    $period  = 'Quarterly';
                                    }elseif(($data->evaluate_date_category)==182){
                                    $period  = 'Half Yearly';
                                    }
                                    elseif(($data->evaluate_date_category)==365){
                                    $period  = 'Yearly';
                                    }else{
                                    $period = '';
                                    }
                                    echo $period;
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $start_date = date("d-M-Y", strtotime($data->emp_performance_start_date));
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $start_date = date("d-M-Y", strtotime($data->emp_performance_end_date));
                                ?>
                            </td>

                            <?php 
                                  $sumTotal = $data->communication_emp_avg + $data->knowledge_performance_emp_avg + $data->quality_emp_avg + $data->knowledge_emp_avg + $data->software_emp_avg + $data->reliability_emp_avg + $data->time_management_emp_avg + $data->productivity_emp_avg + $data->p_initiative_proactive_emp_avg + $data->p_creativity_problem_solving_emp_avg; 
                                  $avgTotal = $sumTotal / 10;
                                  $emp_main_avg = number_format((float)$avgTotal, 2, '.', '');
                                ?>

                            <?php if($emp_main_avg <= 1): ?>
                                <td class="set_td_size set_bg_result_dr"><?php echo $emp_main_avg; ?></td>
                            <?php elseif($emp_main_avg > 1 && $emp_main_avg <= 2): ?>

                                <td class="set_bg_result_r"><?php echo $emp_main_avg; ?></td>
                            <?php elseif($emp_main_avg > 2 && $emp_main_avg < 3): ?>
                                <td class="set_td_size set_bg_result_w bg-warning"><?php echo $emp_main_avg; ?></td>

                            <?php elseif($emp_main_avg >=3 && $emp_main_avg <=4): ?>
                                <td class="set_td_size set_bg_result_g"><?php echo $emp_main_avg; ?></td>

                            <?php elseif($emp_main_avg <= 5): ?>
                                <td class="set_td_size set_bg_result_g"><?php echo $emp_main_avg; ?></td>
                            <?php else: ?>
                                <td class="set_td_size set_bg_result_g"><?php echo $emp_main_avg; ?></td>
                            <?php endif; ?>

                            <?php if(($data->submit_manager_status)==2): ?>
                                <?php $manager_main_avg = $data->total_emp_avg; ?>
                                <?php if($manager_main_avg <= 1): ?>
                                <td class="set_td_size set_bg_result_dr"><?php echo $manager_main_avg; ?></td>
                                <?php elseif($manager_main_avg > 1 && $manager_main_avg <= 2): ?>

                                    <td class="set_bg_result_r"><?php echo $manager_main_avg; ?></td>
                                <?php elseif($manager_main_avg > 2 && $manager_main_avg < 3): ?>
                                    <td class="set_td_size set_bg_result_w bg-warning"><?php echo $manager_main_avg; ?></td>

                                <?php elseif($manager_main_avg >=3 && $manager_main_avg <=4): ?>
                                    <td class="set_td_size set_bg_result_g"><?php echo $manager_main_avg; ?></td>

                                <?php elseif($manager_main_avg <= 5): ?>
                                    <td class="set_td_size set_bg_result_g"><?php echo $manager_main_avg; ?></td>
                                <?php else: ?>
                                    <td class="set_td_size set_bg_result_g"><?php echo $manager_main_avg; ?></td>
                                <?php endif; ?>
                            <?php else: ?>
                                <td class="set_td_size set_bg_review_dr">review pending</td>
                            <?php endif; ?>
                            </tr>
                            <?php else: ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                    <?php endif; ?>
                </tbody>
                </table>
            </div>
        </div>
        <nav class="Page navigation">
            <ul class="pagination justify-content-center">
                <?php  echo $this->pagination->create_links(); ?>
            </ul>
        </nav>
        <?php endif; ?>
    </div>
</div>



<?php if($rerformancedata): ?>
<?php foreach( $rerformancedata as $data ): ?>
    <div class="modal fade" id="<?php echo 'empComment_Communication'.$data->emp_performance_id; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                    <div class="model_comment_text">
                        <p><?php echo $data->communication_comments; ?></p>
                    </div>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>


<?php if($rerformancedata): ?>
<?php foreach( $rerformancedata as $data ): ?>
    <div class="modal fade" id="<?php echo 'empComment_Performance'.$data->emp_performance_id; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                    <div class="model_comment_text">
                        <p><?php echo $data->performance_comments; ?></p>
                    </div>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>


<?php if($rerformancedata): ?>
<?php foreach( $rerformancedata as $data ): ?>
    <div class="modal fade" id="<?php echo 'empComment_Quality'.$data->emp_performance_id; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                    <div class="model_comment_text">
                        <p><?php echo $data->quality_comments; ?></p>
                    </div>
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>


