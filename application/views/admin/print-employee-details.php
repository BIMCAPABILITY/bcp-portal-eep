<?php if($perf_data): ?>
    <section class="print_main_section">
        <section class="frame_main_one">
            <div class="frame_one">
                <div class="heading-text">
                    <h4>Employee Evaluation Portal</h4>
                </div>

                <div class="frame_one_data">
                    <div class="emp_info">
                        <div class="emp_info_img">
                            <img src="<?php echo base_url($perf_data->employee_image); ?>" alt="">
                        </div>
                        <div class="emp_info_basic">
                            <table>
                            <tr>
                                <td>Name&nbsp;</td>
                                <td><b><?php echo $perf_data->employee_first_name; ?> <?php echo $perf_data->employee_last_name; ?></b></td>
                            </tr>
                            <tr>
<<<<<<< HEAD
                                <td>Department&nbsp;</td> 
                                <td><b><?php echo $perf_data->department_name; ?></b></td>
                            </tr>
                            <tr>
                                <td>Role&nbsp;</td>
                                <td><b><?php echo $perf_data->employee_designation; ?></b></td>
                            </tr>
                            <tr>
                                <td>DOJ&nbsp;</td>
                                <td><b><?php echo $perf_data->employee_doj; ?></b></td>
                            </tr>
=======
                                <td>Role&nbsp;</td>
                                <td><b><?php echo $perf_data->employee_designation; ?></b></td>
                            </tr>
                           
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                            <tr>
                                <td>Level&nbsp;</td>
                                <?php if(($perf_data->emp_level)=='2'): ?>
                                <td><b>Employee</b></td>
                                <?php elseif(($perf_data->emp_level)=='3') : ?>
                                <td><b>Manager</b></td>
                                <?php else: ?> 
                                <?php endif; ?>  
                            </tr>
                            </table>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="emp_review">
                    <label for="">Last Review</label>
                        <div class="emp_review_box">
                            <div class="emp_review_block1">
                                <?php if($last_reviews): ?>
                                    <?php $last_reviewsstart_date = date("d-M-Y", strtotime($last_reviews->emp_performance_start_date)); ?>
                                <?php else: ?>
                                    <?php echo $last_reviewsstart_date = ""; ?>
                                <?php endif; ?>
                                <input type="text" class="form-control" value="<?php echo $last_reviewsstart_date; ?>">
                            </div>
                            <div class="emp_review_block2">
                            <?php if($last_reviews): ?>
                                <?php $main_avg = $last_reviews->total_emp_avg; ?>
                            <?php else: ?>
                                <?php $main_avg = ""; ?>
                            <?php endif; ?>
                            <input type="text" class="form-control" value="<?php echo $main_avg; ?>">
                            </div>
                        </div>
                        <label for="">Current Review</label>
                        <div class="emp_review_box">
                            <div class="emp_review_block1">
                                <?php 
                                    $start_date = date("d-M-Y", strtotime($perf_data->emp_performance_start_date));
                                ?>
                                <input type="text" class="form-control" value="<?php echo $start_date; ?>">
                            </div>
                            <div class="emp_review_block2">
                                <?php 
                                if(($perf_data->submit_manager_status)==2){
                                    $CurrentReview = $avg_data->total_emp_avg;
                                }else{
                                    $sumTotal = $perf_data->communication_emp_avg + $perf_data->knowledge_performance_emp_avg + $perf_data->quality_emp_avg + $perf_data->knowledge_emp_avg + $perf_data->software_emp_avg + $perf_data->reliability_emp_avg + $perf_data->time_management_emp_avg + $perf_data->productivity_emp_avg + $perf_data->p_initiative_proactive_emp_avg + $perf_data->p_creativity_problem_solving_emp_avg; 
                                    $avgTotal = $sumTotal / 10;
                                    $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                                    $CurrentReview = $emp_avg_report;
                                }
                                ?>
                                <input type="text" class="form-control" value="<?php echo $CurrentReview; ?>">
                            </div>
                        </div>
                    </div>
=======
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                </div>

            </div>
            <div class="frame_two">
<<<<<<< HEAD
            <section>
                <div class="goals-section-one">
                    <label for="">Current Goals</label>
                    <span>Immediate Goals</span>
                    <div class="goal-boxes">
                        <div class="goal-box">
                            <input type="text" class="form-control" value="<?php echo $perf_data->goals_description; ?>">
                            <label for="">Evaluatee to write goals</label>
                        </div>
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Supervisor to review goals</label>
                        </div>
                    </div>
                </div>
                <div class="goals-section-one">
                    <label for="">Short-Term Goals</label>
                    <span>Goals to be achieved within 6 months</span>
                    <div class="goal-boxes">
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Evaluatee to write goals</label>
                        </div>
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Supervisor to review goals</label>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="goals-section-one">
                    <label for="">Mid-Term Goals</label>
                    <span>Goals to be achieved within 12 months</span>
                    <div class="goal-boxes">
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Evaluatee to write goals</label>
                        </div>
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Supervisor to review goals</label>
                        </div>
                    </div>
                </div>
                <div class="goals-section-one">
                    <label for="">Long-Term Goals</label>
                    <span>Goals to be achieved within 18 months</span>
                    <div class="goal-boxes">
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Evaluatee to write goals</label>
                        </div>
                        <div class="goal-box">
                            <input type="text" class="form-control">
                            <label for="">Supervisor to review goals</label>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </section>

        <section class="frame_forth">
            <div class="full_scoring_boxes">
                <div class="full_score_box">
                    <label for="">EMPLOYEE AVERAGE</label>
                    <?php
                         $sumTotal = $perf_data->communication_emp_avg + $perf_data->knowledge_performance_emp_avg + $perf_data->quality_emp_avg + $perf_data->knowledge_emp_avg + $perf_data->software_emp_avg + $perf_data->reliability_emp_avg + $perf_data->time_management_emp_avg + $perf_data->productivity_emp_avg + $perf_data->p_initiative_proactive_emp_avg + $perf_data->p_creativity_problem_solving_emp_avg; 
                         $avgTotal = $sumTotal / 10;
                         $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                    ?>
                    <?php $main_avg = $emp_avg_report; ?>
                    <?php if($main_avg <= 1): ?>
                    <span>Unacceptable <?php echo $main_avg; ?></i></span>
                    <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                    <span>Unacceptable <?php echo $main_avg; ?></i></span>
                    <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                    <span>In Development <?php echo $main_avg; ?></i></span>
                    <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                    <span>On Target <?php echo $main_avg; ?></i></span>
                    <?php elseif($main_avg <= 5): ?>
                    <span>Above Target <?php echo $main_avg; ?></i></span>
                    <?php else: ?>
                    <span>Exceptional <?php echo $main_avg; ?></i></span>
                    <?php endif; ?>
                </div>
                <div class="full_score_box">
                    <label for="">MANAGER AVERAGE</label>
                    <?php if(($perf_data->submit_manager_status)==2): ?>
                    <?php if($avg_data !== 0): ?>
                        <div class="emp-d-avg-btn">
                            <?php $main_avg = $avg_data->total_emp_avg; ?>
                            <?php if($main_avg <= 1): ?>
                            <span>Unacceptable <?php echo $main_avg; ?></i></span>
                            <?php elseif($main_avg > 1 && $main_avg <= 2): ?>
                            <span>Unacceptable <?php echo $main_avg; ?></i></span>
                            <?php elseif($main_avg > 2 && $main_avg < 3): ?>
                            <span>In Development <?php echo $main_avg; ?></i></span>
                            <?php elseif($main_avg >=3 && $main_avg <=4): ?>
                            <span>On Target <?php echo $main_avg; ?></i></span>
                            <?php elseif($main_avg <= 5): ?>
                            <span>Above Target <?php echo $main_avg; ?></i></span>
                            <?php else: ?>
                            <span>Exceptional <?php echo $main_avg; ?></i></span>
                            <?php endif; ?>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>
                <?php else: ?>
                <span>Review Pending</span>
                <?php endif; ?>
                </div>
                <div class="full_score_box">
                    <label for="">EVALUATION PERIOD</label>
                    <?php 
                        if(($perf_data->evaluate_date_category)==30){
                        $period  = 'Monthly';
                        }elseif(($perf_data->evaluate_date_category)==90){
                        $period  = 'Quarterly';
                        }elseif(($perf_data->evaluate_date_category)==182){
                        $period  = 'Half Yearly';
                        }
                        elseif(($perf_data->evaluate_date_category)==365){
                        $period  = 'Yearly';
                        }else{
                        $period = '';
                        }
                    ?>
                    <span><?php echo $period; ?></span>
                </div>
                <div class="full_score_box">
                    <label for="">EVALUATION START DATE</label>
                    <?php 
                        $start_date = date("d-M-Y", strtotime($perf_data->emp_performance_start_date));
                    ?>
                    <span><?php echo $start_date; ?></span>
                </div>
                <div class="full_score_box">
                    <label for="">EVALUATION END DATE</label>
                    <?php 
                        $end_date = date("d-M-Y", strtotime($perf_data->emp_performance_end_date));
                    ?>
                    <span><?php echo $end_date; ?></span>
                </div>
=======
                <section class="performance-evaluation-metrics-img">
                    <h6>Performance Evaluation Metrics</h6>
                    <img src="<?php echo base_url('assets_admin/img/illustrations/chart-numbers.png'); ?>" alt="">
                </section>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
            </div>
        </section>

        <section class="frame_five">
            <div class="frame_five_cover">
<<<<<<< HEAD
                <div class="frame_quations_sec">
                    <div class="frame_quations_box">
                        <div class="evaluation_quation_sec">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="head_quation_title">
                                        <h5>Communication</h5>
                                    </div>
                                </td>
                                <td>
                                    <div class="head_quation_title">
                                    <ul class="score_numbers">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>N/A</li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">1. Swiftly answers to messages/calls to coordinate with colleagues</label>
                                <span>Messages, surveys, and polls are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                        if($perf_data->m_communication_question_1 === $perf_data->communication_question_1){
                                            $same_communication_question_1 = $perf_data->m_communication_question_1;
                                        }else{
                                            $same_communication_question_1 = false;
                                        }

                                        if($perf_data->communication_question_1==0){
                                            $NA_communication_question_1 = 6;
                                        }else{
                                            $NA_communication_question_1 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {                                                                    
                                        if(($same_communication_question_1)==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_communication_question_1==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->communication_question_1==$x){
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
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">2. Proactively communicates with supervisors for questions, feedback, job challenges</label>
                                <span>Keeps an open channel of communication with their supervisor to ensure all tasks are clear, deadlines are on track, and asks for feedback on their performance</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                    if($perf_data->m_communication_question_2 === $perf_data->communication_question_2){
                                        $same_communication_question_2 = $perf_data->m_communication_question_2;
                                    }else{
                                        $same_communication_question_2 = false;
                                    }

                                    if($perf_data->communication_question_2==0){
                                        $NA_communication_question_2 = 6;
                                    }else{
                                        $NA_communication_question_2 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {

                                    if($same_communication_question_2==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_communication_question_2==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->communication_question_2==$x){
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
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">3. Communicates effectively with teammates to accomplish common goals and objectives</label>
                                <span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                if($perf_data->m_communication_question_3 === $perf_data->communication_question_3){
                                    $same_communication_question_3 = $perf_data->m_communication_question_3;
                                }else{
                                    $same_communication_question_3 = false;
                                }

                                if($perf_data->communication_question_3==0){
                                    $NA_communication_question_3 = 6;
                                }else{
                                    $NA_communication_question_3 = false;
                                }

                                $x = 1;
                                while($x <= 6) {
                                if($same_communication_question_3==$x){
                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                }elseif($perf_data->m_communication_question_3==$x){
                                    echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                }elseif($perf_data->communication_question_3==$x){
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
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">4. Clear with time schedules for leave requests, sick leaves, offset hours <i>(independent scoring)</i></label>
                                <span>Organizes their time clearly with the company’s calendar so that everybody is aware of their schedule, working conditions, and holiday plans</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                    if($perf_data->m_communication_question_4 === $perf_data->communication_question_4){
                                        $same_communication_question_4 = $perf_data->m_communication_question_4;
                                    }else{
                                        $same_communication_question_4 = false;
                                    }

                                    if($perf_data->communication_question_4==0){
                                        $NA_communication_question_4 = 6;
                                    }else{
                                        $NA_communication_question_4 = false;
                                    }


                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_communication_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_communication_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->communication_question_4==$x){
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
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">5. Communicates well with their client <i>(for Supervisors only, independent scoring)</i></label>
                                <span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                    if($perf_data->m_communication_question_5 === $perf_data->communication_question_5){
                                        $same_communication_question_5 = $perf_data->m_communication_question_5;
                                    }else{
                                        $same_communication_question_5 = false;
                                    }

                                    if($perf_data->communication_question_5==0){
                                        $NA_communication_question_5 = 6;
                                    }else{
                                        $NA_communication_question_5 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_communication_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_communication_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->communication_question_5==$x){
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
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="frame_quations_sec">
                    <div class="frame_quations_box">
                        <div class="evaluation_quation_sec">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="head_quation_title">
                                        <h5>Quality & Organization</h5>
                                    </div>
                                </td>
                                <td>
                                    <div class="head_quation_title">
                                    <ul class="score_numbers">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                        <li>4</li>
                                        <li>5</li>
                                        <li>N/A</li>
                                    </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">1. Attention to details</label>
                                <span>The work produced is concise and free of mistakes, all decisions are deliberate to improve the quality of the work. The Presentation of the work is clean, clear and aligned</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                        if($perf_data->m_quality_question_1 === $perf_data->quality_question_1){
                                            $same_quality_question_1 = $perf_data->m_quality_question_1;
                                        }else{
                                            $same_quality_question_1 = false;
                                        }

                                        if($perf_data->quality_question_1==0){
                                            $NA_quality_question_1 = 6;
                                        }else{
                                            $NA_quality_question_1 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {                                                                    
                                        if(($same_quality_question_1)==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_quality_question_1==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->quality_question_1==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_quality_question_1==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">2. Produces high quality finished deliverables</label>
                                <span>Produces clean modelling adhering to the LOD with accurate dimensions, no spelling mistakes, necessary metadata</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                    if($perf_data->m_quality_question_2 === $perf_data->quality_question_2){
                                        $same_quality_question_2 = $perf_data->m_quality_question_2;
                                    }else{
                                        $same_quality_question_2 = false;
                                    }

                                    if($perf_data->quality_question_2==0){
                                        $NA_quality_question_2 = 6;
                                    }else{
                                        $NA_quality_question_2 = false;
=======

                <div class="frame_quations_sec">
                    <div class="frame_quations_box">
                        <div class="evaluation_quation_sec">
                        <section class="goals-sec-main">
                            <div class="goals-section-one">
                                <label for="">Current Goals</label>
                                <span>Immediate Goals</span>
                                <div class="goal-boxes">
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_emp_words_immediate; ?></textarea>
                                        <label for="">Evaluatee to write goals</label>
                                    </div>
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_supervisor_words_immediate; ?></textarea>
                                        <label for="">Supervisor to review goals</label>
                                    </div>
                                </div>
                            </div>
                            <div class="goals-section-one">
                                <label for="">Short-Term Goals</label>
                                <span>Goals to be achieved within 6 months</span>
                                <div class="goal-boxes">
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_emp_words_short_term; ?></textarea>
                                        <label for="">Evaluatee to write goals</label>
                                    </div>
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_supervisor_words_short_term; ?></textarea>
                                        <label for="">Supervisor to review goals</label>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="goals-sec-main">
                            <div class="goals-section-one">
                                <label for="">Mid-Term Goals</label>
                                <span>Goals to be achieved within 12 months</span>
                                <div class="goal-boxes">
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_emp_words_mid_term; ?></textarea>
                                        <label for="">Evaluatee to write goals</label>
                                    </div>
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_supervisor_words_mid_term; ?></textarea>
                                        <label for="">Supervisor to review goals</label>
                                    </div>
                                </div>
                            </div>
                            <div class="goals-section-one">
                                <label for="">Long-Term Goals</label>
                                <span>Goals to be achieved within 18 months</span>
                                <div class="goal-boxes">
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_emp_words_long_term; ?></textarea>
                                        <label for="">Evaluatee to write goals</label>
                                    </div>
                                    <div class="goal-box line-clamp3">
                                        <textarea name="" class="form-control" id="" cols="30" rows="4"><?php echo $goals->goals_supervisor_words_long_term; ?></textarea>
                                        <label for="">Supervisor to review goals</label>
                                    </div>
                                </div>
                            </div>
                        </section>


                        </div>
                    </div>
                </div>                  

                <div class="frame_quations_sec">
                    <div class="frame_quations_box">
                        <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
                                            <h5>Quality & Organization</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">1. Attention to details <span class="gray-font-subtitle">(sets the highest score in this category)</span></label>
                                    <span>The work produced is concise and free of mistakes, all decisions are deliberate to improve the quality of the work. The Presentation of the work is clean, clear and aligned</span>                                </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_quality_question_1 === $perf_data->quality_question_1){
                                                $same_quality_question_1 = $perf_data->m_quality_question_1;
                                            }else{
                                                $same_quality_question_1 = false;
                                            }

                                            if($perf_data->quality_question_1==0){
                                                $NA_quality_question_1 = 6;
                                            }else{
                                                $NA_quality_question_1 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
                                            if(($same_quality_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_quality_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->quality_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_quality_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">2. Produces high quality finished deliverables</label>
                                    <span>Produces clean modelling adhering to the LOD with accurate dimensions, no spelling mistakes, necessary metadata</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_quality_question_2 === $perf_data->quality_question_2){
                                            $same_quality_question_2 = $perf_data->m_quality_question_2;
                                        }else{
                                            $same_quality_question_2 = false;
                                        }

                                        if($perf_data->quality_question_2==0){
                                            $NA_quality_question_2 = 6;
                                        }else{
                                            $NA_quality_question_2 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {

                                        if($same_quality_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_quality_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->quality_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_quality_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">3. Learns from mistakes and avoid recurrence</label>
                                    <span>Mistakes made result in growth and learning lessons to improve quality of work and not repeated again</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_quality_question_3 === $perf_data->quality_question_3){
                                        $same_quality_question_3 = $perf_data->m_quality_question_3;
                                    }else{
                                        $same_quality_question_3 = false;
                                    }

                                    if($perf_data->quality_question_3==0){
                                        $NA_quality_question_3 = 6;
                                    }else{
                                        $NA_quality_question_3 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }

                                    $x = 1;
                                    while($x <= 6) {
<<<<<<< HEAD

                                    if($same_quality_question_2==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_quality_question_2==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->quality_question_2==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_quality_question_2==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                    if($same_quality_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_quality_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->quality_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_quality_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }
                                    $x++;
                                    }
                                    ?>
<<<<<<< HEAD
                                </td>
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">3. Learns from mistakes and avoid recurrence</label>
                                <span>Mistakes made result in growth and learning lessons to improve quality of work and not repeated again</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                if($perf_data->m_quality_question_2 === $perf_data->quality_question_2){
                                    $same_quality_question_2 = $perf_data->m_quality_question_2;
                                }else{
                                    $same_quality_question_2 = false;
                                }

                                if($perf_data->quality_question_2==0){
                                    $NA_quality_question_2 = 6;
                                }else{
                                    $NA_quality_question_2 = false;
                                }

                                $x = 1;
                                while($x <= 6) {
                                if($same_quality_question_2==$x){
                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                }elseif($perf_data->m_quality_question_2==$x){
                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                }elseif($perf_data->quality_question_2==$x){
                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                }elseif($NA_quality_question_2==$x){
                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                }
                                else{
                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                }
                                $x++;
                                }
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">4. Estimates how long a task will take to include for task discussion, task execution, and task quality control</label>
                                <span>Sets realistic time allocation to allow for proper task execution without having to sacrifice quality control</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                    if($perf_data->m_quality_question_4 === $perf_data->quality_question_4){
                                        $same_quality_question_4 = $perf_data->m_quality_question_4;
                                    }else{
                                        $same_quality_question_4 = false;
                                    }

                                    if($perf_data->quality_question_4==0){
                                        $NA_quality_question_4 = 6;
                                    }else{
                                        $NA_quality_question_4 = false;
                                    }


                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_quality_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_quality_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->quality_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_quality_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="evaluation_quation_cover">
                                <label for="">5. Follows company standards for file organization, file documentation, naming conventions, and BIM protocols</label>
                                <span>Follows company standards for file organization, file documentation, naming conventions, and BIM protocols</span>
                                </td>
                                <td class="quation_radio">
                                <?php
                                    if($perf_data->m_quality_question_5 === $perf_data->quality_question_5){
                                        $same_quality_question_5 = $perf_data->m_quality_question_5;
                                    }else{
                                        $same_quality_question_5 = false;
                                    }

                                    if($perf_data->quality_question_5==0){
                                        $NA_quality_question_5 = 6;
                                    }else{
                                        $NA_quality_question_5 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_quality_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_quality_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->quality_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_quality_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <br>
=======
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">4. Estimates how long a task will take to include for task discussion, task execution, and task quality control</label>
                                    <span>Sets realistic time allocation to allow for proper task execution without having to sacrifice quality control</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_quality_question_4 === $perf_data->quality_question_4){
                                            $same_quality_question_4 = $perf_data->m_quality_question_4;
                                        }else{
                                            $same_quality_question_4 = false;
                                        }

                                        if($perf_data->quality_question_4==0){
                                            $NA_quality_question_4 = 6;
                                        }else{
                                            $NA_quality_question_4 = false;
                                        }


                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_quality_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_quality_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->quality_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_quality_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">5. Follows company standards for file organization, file documentation, naming conventions, and BIM protocols</label>
                                    <span>Follows company standards for file organization, file documentation, naming conventions, and BIM protocols</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_quality_question_5 === $perf_data->quality_question_5){
                                            $same_quality_question_5 = $perf_data->m_quality_question_5;
                                        }else{
                                            $same_quality_question_5 = false;
                                        }

                                        if($perf_data->quality_question_5==0){
                                            $NA_quality_question_5 = 6;
                                        }else{
                                            $NA_quality_question_5 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_quality_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_quality_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->quality_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_quality_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="remove_bb">
                                <td colspan="2" class="head_quation_title">
                                <br>
                                    <h5>Employee comments
                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                        </i>
                                    </h5>
                                    <textarea class="form-control" name="quality_comments" id="" cols="3" rows="5" disabled><?php echo $perf_data->quality_comments; ?></textarea>
                                    <input type="hidden" name="quality_comments_old" value="<?php echo $perf_data->quality_comments; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="head_quation_title">
                                <br>
                                    <h5>Manager comments
                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                        </i>
                                    </h5>
                                    <textarea class="form-control" name="m_quality_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_quality_comments; ?></textarea>
                                </td>
                            </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
            <section class="frame_five">
                <div class="frame_five_cover">
                    <div class="frame_quations_sec">
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
                                            <h5>Knowledge & Performance</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">1. Successfully executes the duties and responsibilities of their role as stated in their job descriptions</label>
                                    <span>BIM Consultants: Ability to model correctly until LOD300, produce schedules, input metadata in families</span>
                                    <span>BIM Coordinators: Quality check of BIM models and sheets, work in CDEs, ability to follow a BEP</span>
                                    <span>BIM Managers: Ability to manage a team, follow ISO19650, write and follow BEP, give feedback to team</span>
                                    <span>Directors: Ensures all teams are running smoothly, solves technical and operational issues for the teams</span>
                                    <span>Support: Encourages growth and progress of the company’s support department, constantly communicates to Directors for feedback and improvements</span>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_knowledge_performance_question_1 === $perf_data->knowledge_performance_question_1){
                                                $same_knowledge_performance_question_1 = $perf_data->m_knowledge_performance_question_1;
                                            }else{
                                                $same_knowledge_performance_question_1 = false;
                                            }

                                            if($perf_data->knowledge_performance_question_1==0){
                                                $NA_knowledge_performance_question_1 = 6;
                                            }else{
                                                $NA_knowledge_performance_question_1 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
                                            if(($same_knowledge_performance_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_knowledge_performance_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->knowledge_performance_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_knowledge_performance_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">2. Completes work efficiently with a fast turnaround and avoids redundant work</label>
                                    <span>Able to maximize the use of their time to work quickly without delays and mistakes</span>
                                    </td>
=======
                                    <label for="">2. Understanding of the Project <span class="gray-font-subtitle">(For BIM Team only)</span></label>
                                    <span>Knows their project inside-out, have clear details and understanding of project and its requirements and is able to give the clarity to the team members</span>                                    </td>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_knowledge_performance_question_2 === $perf_data->knowledge_performance_question_2){
                                            $same_knowledge_performance_question_2 = $perf_data->m_knowledge_performance_question_2;
                                        }else{
                                            $same_knowledge_performance_question_2 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_2==0){
                                            $NA_knowledge_performance_question_2 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_2 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {

                                        if($same_knowledge_performance_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_performance_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_performance_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_performance_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">3. Knowledge of your industry’s practices, regulations, and workflow</label>
=======
                                    <label for="">3. Completes work efficiently with a fast turnaround and avoids redundant work</label>
                                    <span>Able to maximize the use of their time to work quickly without delays and mistakes</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_knowledge_performance_question_3 === $perf_data->knowledge_performance_question_3){
                                            $same_knowledge_performance_question_3 = $perf_data->m_knowledge_performance_question_3;
                                        }else{
                                            $same_knowledge_performance_question_3 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_3==0){
                                            $NA_knowledge_performance_question_3 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_3 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {

                                        if($same_knowledge_performance_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_performance_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_performance_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_performance_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">4. Knowledge of your industry’s practices, regulations, and workflow</label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    <span>Proactively searches for new updates in BIM practices, add-ins, tools to solve project tasks and improve the workflow of the team</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
<<<<<<< HEAD
                                    if($perf_data->m_knowledge_performance_question_3 === $perf_data->knowledge_performance_question_3){
                                        $same_knowledge_performance_question_3 = $perf_data->m_knowledge_performance_question_3;
                                    }else{
                                        $same_knowledge_performance_question_3 = false;
                                    }

                                    if($perf_data->knowledge_performance_question_3==0){
                                        $NA_knowledge_performance_question_3 = 6;
                                    }else{
                                        $NA_knowledge_performance_question_3 = false;
=======
                                    if($perf_data->m_knowledge_performance_question_4 === $perf_data->knowledge_performance_question_4){
                                        $same_knowledge_performance_question_4 = $perf_data->m_knowledge_performance_question_4;
                                    }else{
                                        $same_knowledge_performance_question_4 = false;
                                    }

                                    if($perf_data->knowledge_performance_question_4==0){
                                        $NA_knowledge_performance_question_4 = 6;
                                    }else{
                                        $NA_knowledge_performance_question_4 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }

                                    $x = 1;
                                    while($x <= 6) {
<<<<<<< HEAD
                                    if($same_knowledge_performance_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_knowledge_performance_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->knowledge_performance_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_knowledge_performance_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                    if($same_knowledge_performance_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_knowledge_performance_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->knowledge_performance_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_knowledge_performance_question_4==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">4. Desire to learn new skills and industry knowledge to improve and grow in your role <i>(independent scoring)</i></label>
=======
                                    <label for="">5. Ability to educate team members <span class="gray-font-subtitle">(independent scoring)</span></label>
                                    <span>Able to clearly address, identify learning challenges and roadblocks. Also design and manage workshops for the company</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_knowledge_performance_question_5 === $perf_data->knowledge_performance_question_5){
                                        $same_knowledge_performance_question_5 = $perf_data->m_knowledge_performance_question_5;
                                    }else{
                                        $same_knowledge_performance_question_5 = false;
                                    }

                                    if($perf_data->knowledge_performance_question_5==0){
                                        $NA_knowledge_performance_question_5 = 6;
                                    }else{
                                        $NA_knowledge_performance_question_5 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_knowledge_performance_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_knowledge_performance_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->knowledge_performance_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_knowledge_performance_question_5==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">6. Desire to learn new skills and industry knowledge to improve and grow in your role <i>(independent scoring)</i></label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    <span>Show the desire to learn more and expand your role to better support your team and project</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
<<<<<<< HEAD
                                        if($perf_data->m_knowledge_performance_question_4 === $perf_data->knowledge_performance_question_4){
                                            $same_knowledge_performance_question_4 = $perf_data->m_knowledge_performance_question_4;
                                        }else{
                                            $same_knowledge_performance_question_4 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_4==0){
                                            $NA_knowledge_performance_question_4 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_4 = false;
=======
                                        if($perf_data->m_knowledge_performance_question_6 === $perf_data->knowledge_performance_question_6){
                                            $same_knowledge_performance_question_6 = $perf_data->m_knowledge_performance_question_6;
                                        }else{
                                            $same_knowledge_performance_question_6 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_6==0){
                                            $NA_knowledge_performance_question_6 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_6 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }


                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD
                                        if($same_knowledge_performance_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_performance_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_performance_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_performance_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_knowledge_performance_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_performance_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_performance_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_performance_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">5. Shows the ability to supervise a team to handle a project <i>(for Supervisors only, independent scoring)</i></label>
=======
                                    <label for="">7. Shows the ability to supervise a team to handle a project <i>(for Supervisors only, independent scoring)</i></label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    <span>Shows signs of leadership to handle a team and guide them towards a common goal</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
<<<<<<< HEAD
                                        if($perf_data->m_knowledge_performance_question_5 === $perf_data->knowledge_performance_question_5){
                                            $same_knowledge_performance_question_5 = $perf_data->m_knowledge_performance_question_5;
                                        }else{
                                            $same_knowledge_performance_question_5 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_5==0){
                                            $NA_knowledge_performance_question_5 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_5 = false;
=======
                                        if($perf_data->m_knowledge_performance_question_7 === $perf_data->knowledge_performance_question_7){
                                            $same_knowledge_performance_question_7 = $perf_data->m_knowledge_performance_question_7;
                                        }else{
                                            $same_knowledge_performance_question_7 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_7==0){
                                            $NA_knowledge_performance_question_7 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_7 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD
                                        if($same_knowledge_performance_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_performance_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_performance_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_performance_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_knowledge_performance_question_7==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_performance_question_7==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_performance_question_7==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_performance_question_7==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
<<<<<<< HEAD
=======
                                <tr class="remove_bb">
                                    
                                    <td colspan="2" class="head_quation_title">
                                    <br><br>
                                        <h5>Employee comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="knowledge_performance_comments" cols="3" rows="5" disabled><?php echo $perf_data->knowledge_performance_comments; ?></textarea>
                                        <input type="hidden" name="knowledge_performance_comments_old" value="<?php echo $perf_data->knowledge_performance_comments; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="head_quation_title">
                                        <br><br>
                                        <h5>Manager comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="m_knowledge_performance_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_knowledge_performance_comments; ?></textarea>
                                    </td>
                                </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="frame_quations_sec">
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
<<<<<<< HEAD
                                            <h5>Knowledge of Software</h5>
=======
                                            <h5>Communication</h5>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">1. BIM Tools (Revit, Naviswork, Autocad)</label>
                                    <span>Proficiency with the tools required for BIM workflow</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_software_question_1 === $perf_data->software_question_1){
                                                $same_software_question_1 = $perf_data->m_software_question_1;
                                            }else{
                                                $same_software_question_1 = false;
                                            }

                                            if($perf_data->software_question_1==0){
                                                $NA_software_question_1 = 6;
                                            }else{
                                                $NA_software_question_1 = false;
=======
                                    <label for="">1. Communicates effectively with teammates to accomplish common goals and objectives <span class="gray-font-subtitle"> (sets the highest score in this category)</span></label>
                                    <span>Messages, surveys, and polls are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup </span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_communication_question_1 === $perf_data->communication_question_1){
                                                $same_communication_question_1 = $perf_data->m_communication_question_1;
                                            }else{
                                                $same_communication_question_1 = false;
                                            }

                                            if($perf_data->communication_question_1==0){
                                                $NA_communication_question_1 = 6;
                                            }else{
                                                $NA_communication_question_1 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
<<<<<<< HEAD
                                            if(($same_software_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_software_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->software_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_software_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='software_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                            if(($same_communication_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_communication_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->communication_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_communication_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">2. CDE Platforms (ACC, BIM360)</label>
                                    <span>Proficiency in Common Data Environments to allow seamless collaboration with the team</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_software_question_2 === $perf_data->software_question_2){
                                            $same_software_question_2 = $perf_data->m_software_question_2;
                                        }else{
                                            $same_software_question_2 = false;
                                        }

                                        if($perf_data->software_question_2==0){
                                            $NA_software_question_2 = 6;
                                        }else{
                                            $NA_software_question_2 = false;
=======
                                    <label for="">2. Swiftly answers to messages/calls to coordinate with colleagues </label>
                                    <span>Messages, surveys, and polls are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_communication_question_2 === $perf_data->communication_question_2){
                                            $same_communication_question_2 = $perf_data->m_communication_question_2;
                                        }else{
                                            $same_communication_question_2 = false;
                                        }

                                        if($perf_data->communication_question_2==0){
                                            $NA_communication_question_2 = 6;
                                        }else{
                                            $NA_communication_question_2 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {

<<<<<<< HEAD
                                        if($same_software_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_software_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->software_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_software_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_communication_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_communication_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->communication_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_communication_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">3. Automation Tools (Elastic, Dynamo, etc)</label>
                                    <span>Proficiency in using automation tools to maximize efficiency in workflow</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_software_question_3 === $perf_data->software_question_3){
                                        $same_software_question_3 = $perf_data->m_software_question_3;
                                    }else{
                                        $same_software_question_3 = false;
                                    }

                                    if($perf_data->software_question_3==0){
                                        $NA_software_question_3 = 6;
                                    }else{
                                        $NA_software_question_3 = false;
=======
                                    <label for="">3. Proactively communicates with supervisors for questions, feedback, job challenges</label>
                                    <span>Keeps an open channel of communication with their supervisor to ensure all tasks are clear, deadlines are on track, and asks for feedback on their performance</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_communication_question_3 === $perf_data->communication_question_3){
                                        $same_communication_question_3 = $perf_data->m_communication_question_3;
                                    }else{
                                        $same_communication_question_3 = false;
                                    }

                                    if($perf_data->communication_question_3==0){
                                        $NA_communication_question_3 = 6;
                                    }else{
                                        $NA_communication_question_3 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }

                                    $x = 1;
                                    while($x <= 6) {
<<<<<<< HEAD
                                    if($same_software_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_software_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->software_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_software_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='software_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                    if($same_communication_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_communication_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->communication_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_communication_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">4. Office Tools (Word, Excel, Outlook, PDF editing, etc)</label>
                                    <span>Proficiency in various office tools to keep information updated and transparent</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_software_question_4 === $perf_data->software_question_4){
                                            $same_software_question_4 = $perf_data->m_software_question_4;
                                        }else{
                                            $same_software_question_4 = false;
                                        }

                                        if($perf_data->software_question_4==0){
                                            $NA_software_question_4 = 6;
                                        }else{
                                            $NA_software_question_4 = false;
=======
                                    <label for="">4. Communicates effectively with teammates to accomplish common goals and objectives</label>
                                    <span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_communication_question_4 === $perf_data->communication_question_4){
                                            $same_communication_question_4 = $perf_data->m_communication_question_4;
                                        }else{
                                            $same_communication_question_4 = false;
                                        }

                                        if($perf_data->communication_question_4==0){
                                            $NA_communication_question_4 = 6;
                                        }else{
                                            $NA_communication_question_4 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }


                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD
                                        if($same_software_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_software_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->software_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_software_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_communication_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_communication_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->communication_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_communication_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">5. Management (Bitrix24, Zoom)</label>
                                    <span>Proficiency in various aspects of Bitrix24 including using tasks, timetracking, commenting on tasks, swift communication, etc</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_software_question_5 === $perf_data->software_question_5){
                                            $same_software_question_5 = $perf_data->m_software_question_5;
                                        }else{
                                            $same_software_question_5 = false;
                                        }

                                        if($perf_data->software_question_5==0){
                                            $NA_software_question_5 = 6;
                                        }else{
                                            $NA_software_question_5 = false;
=======
                                    <label for="">5. Clear with time schedules for leave requests, sick leaves, offset hours <i>(independent scoring)</i></label>
                                    <span>Organizes their time clearly with the company’s calendar so that everybody is aware of their schedule, working conditions, and holiday plans</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_communication_question_5 === $perf_data->communication_question_5){
                                            $same_communication_question_5 = $perf_data->m_communication_question_5;
                                        }else{
                                            $same_communication_question_5 = false;
                                        }

                                        if($perf_data->communication_question_5==0){
                                            $NA_communication_question_5 = 6;
                                        }else{
                                            $NA_communication_question_5 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD
                                        if($same_software_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_software_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->software_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_software_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_communication_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_communication_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->communication_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_communication_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
<<<<<<< HEAD
=======
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">6. Communicates well with their client <i>(for BIM Coordinators, BIM Managers, Support team, independent scoring)</i></label>
                                    <span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_communication_question_6 === $perf_data->communication_question_6){
                                            $same_communication_question_6 = $perf_data->m_communication_question_6;
                                        }else{
                                            $same_communication_question_6 = false;
                                        }

                                        if($perf_data->communication_question_6==0){
                                            $NA_communication_question_6 = 6;
                                        }else{
                                            $NA_communication_question_6 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_communication_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_communication_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->communication_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_communication_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="remove_bb">
                                <td colspan="2" class="head_quation_title">
                                    <br><br><br><br><br><br><br><br><br><br>
                                    <h5>Employee comments
                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                        </i>
                                    </h5>
                                    <textarea class="form-control" name="communication_comments" cols="3" rows="5" disabled><?php echo $perf_data->communication_comments; ?></textarea>
                                    <input type="hidden" name="communication_comments_old" value="<?php echo $perf_data->communication_comments; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="head_quation_title">
                                <br><br>
                                    <h5>Manager comments
                                        <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                        </i>
                                    </h5>
                                    <textarea class="form-control" name="m_communication_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_communication_comments; ?></textarea>
                                </td>
                            </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="frame_five_cover">
                <div class="frame_quations_sec">
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
<<<<<<< HEAD
                                            <h5>Knowledge of Job</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">1. Understanding of BIM project standards and portfolio</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_knowledge_standards_and_portfolio === $perf_data->knowledge_standards_and_portfolio){
                                                $same_knowledge_standards_and_portfolio = $perf_data->m_knowledge_standards_and_portfolio;
                                            }else{
                                                $same_knowledge_standards_and_portfolio = false;
                                            }

                                            if($perf_data->knowledge_standards_and_portfolio==0){
                                                $NA_knowledge_standards_and_portfolio = 6;
                                            }else{
                                                $NA_knowledge_standards_and_portfolio = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
                                            if(($same_knowledge_standards_and_portfolio)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_knowledge_standards_and_portfolio==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->knowledge_standards_and_portfolio==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_knowledge_standards_and_portfolio==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">2. Understanding of BIM project requirements</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_knowledge_bim_project_requirements === $perf_data->knowledge_bim_project_requirements){
                                            $same_knowledge_bim_project_requirements = $perf_data->m_knowledge_bim_project_requirements;
                                        }else{
                                            $same_knowledge_bim_project_requirements = false;
                                        }

                                        if($perf_data->knowledge_bim_project_requirements==0){
                                            $NA_knowledge_bim_project_requirements = 6;
                                        }else{
                                            $NA_knowledge_bim_project_requirements = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {

                                        if($same_knowledge_bim_project_requirements==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_knowledge_bim_project_requirements==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->knowledge_bim_project_requirements==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_knowledge_bim_project_requirements==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">3. Knowledge of the construction industry including ARC, STR, MEP, and BIM standards</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_knowledge_of_the_construction_industry === $perf_data->knowledge_of_the_construction_industry){
                                        $same_knowledge_of_the_construction_industry = $perf_data->m_knowledge_of_the_construction_industry;
                                    }else{
                                        $same_knowledge_of_the_construction_industry = false;
                                    }

                                    if($perf_data->knowledge_of_the_construction_industry==0){
                                        $NA_knowledge_of_the_construction_industry = 6;
                                    }else{
                                        $NA_knowledge_of_the_construction_industry = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_knowledge_of_the_construction_industry==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_knowledge_of_the_construction_industry==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->knowledge_of_the_construction_industry==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_knowledge_of_the_construction_industry==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="frame_quations_sec">
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
                                            <h5>Reliability & Professionalism</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">1. Organizes their time to allow for multiple daily tasks without issues</label>
                                    <span>Allocates time in their day properly to manage more than one task to be addressed</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_reliability_question_1 === $perf_data->reliability_question_1){
                                                $same_reliability_question_1 = $perf_data->m_reliability_question_1;
                                            }else{
                                                $same_reliability_question_1 = false;
                                            }

                                            if($perf_data->reliability_question_1==0){
                                                $NA_reliability_question_1 = 6;
                                            }else{
                                                $NA_reliability_question_1 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
                                            if(($same_reliability_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_reliability_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->reliability_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_reliability_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">2. Finishes tasks without constant supervision within set deadlines</label>
                                    <span>Self-sufficient with their skills and efficient with their questions to allow for their supervisor and teammates to work with minimum interruption</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_2 === $perf_data->reliability_question_2){
                                            $same_reliability_question_2 = $perf_data->m_reliability_question_2;
                                        }else{
                                            $same_reliability_question_2 = false;
                                        }

                                        if($perf_data->reliability_question_2==0){
                                            $NA_reliability_question_2 = 6;
                                        }else{
                                            $NA_reliability_question_2 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {

                                        if($same_reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">3. Produces deliverables that are above expectation</label>
                                    <span>Proactively provides further information, data or drawings to compliment and support an argument to enhance deliverables</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_reliability_question_3 === $perf_data->reliability_question_3){
                                        $same_reliability_question_3 = $perf_data->m_reliability_question_3;
                                    }else{
                                        $same_reliability_question_3 = false;
                                    }

                                    if($perf_data->reliability_question_3==0){
                                        $NA_reliability_question_3 = 6;
                                    }else{
                                        $NA_reliability_question_3 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">4. Takes ownership of job duties and hold himself/herself accountable for them <i>(independent scoring)</i></label>
                                    <span>Proud on their work to share with teammates to strengthen the knowledge and backbone of the team</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_4 === $perf_data->reliability_question_4){
                                            $same_reliability_question_4 = $perf_data->m_reliability_question_4;
                                        }else{
                                            $same_reliability_question_4 = false;
                                        }

                                        if($perf_data->reliability_question_4==0){
                                            $NA_reliability_question_4 = 6;
                                        }else{
                                            $NA_reliability_question_4 = false;
                                        }


                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">5. Strive to cultivate and maintain positive working relationships and respect towards co-workers <i>(independent scoring) </i></label>
                                    <span>Maintains a respectful, collaborative environment to allow for good moral support in achieving team goals</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_5 === $perf_data->reliability_question_5){
                                            $same_reliability_question_5 = $perf_data->m_reliability_question_5;
                                        }else{
                                            $same_reliability_question_5 = false;
                                        }

                                        if($perf_data->reliability_question_5==0){
                                            $NA_reliability_question_5 = 6;
                                        }else{
                                            $NA_reliability_question_5 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">6. Keeps a tidy workspace and proper care of the company’s equipment <i>(independent scoring)</i></label>
                                    <span>Maintains a clean working environment on the company’s premises, particularly for shared workstations. Takes care of their assigned work equipmen</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_6 === $perf_data->reliability_question_6){
                                            $same_reliability_question_6 = $perf_data->m_reliability_question_6;
                                        }else{
                                            $same_reliability_question_6 = false;
                                        }

                                        if($perf_data->reliability_question_6==0){
                                            $NA_reliability_question_6 = 6;
                                        }else{
                                            $NA_reliability_question_6 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section class="frame_five">
                <div class="frame_five_cover">
                    <div class="frame_quations_sec">
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
=======
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            <h5>Task & Time Management</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">1. Adheres to the task deadlines set by the supervisor</label>
=======
                                    <label for="">1. Adheres to the task deadlines set by the supervisor <span class="gray-font-subtitle">(sets the highest score in this category)</span></label>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    <span>Manages to meet the task deadlines without having to extend them or go overdue</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_time_management_question_1 === $perf_data->time_management_question_1){
                                                $same_time_management_question_1 = $perf_data->m_time_management_question_1;
                                            }else{
                                                $same_time_management_question_1 = false;
                                            }

                                            if($perf_data->time_management_question_1==0){
                                                $NA_time_management_question_1 = 6;
                                            }else{
                                                $NA_time_management_question_1 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
                                            if(($same_time_management_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_time_management_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->time_management_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_time_management_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">2. Updates on Task status and progress on Bitrix24</label>
                                    <span>Comments are updated daily regarding the status of the task including reporting the progress of the task, questions for the team are addressed, deadlines are monitored, and task summaries are provided when tasks are finished</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_time_management_question_2 === $perf_data->time_management_question_2){
                                            $same_time_management_question_2 = $perf_data->m_time_management_question_2;
                                        }else{
                                            $same_time_management_question_2 = false;
                                        }

                                        if($perf_data->time_management_question_2==0){
                                            $NA_time_management_question_2 = 6;
                                        }else{
                                            $NA_time_management_question_2 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {

                                        if($same_time_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_time_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->time_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_time_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">3. Proactively informs if there are delays or issues with project tasks</label>
                                    <span>Informs the team and supervisor well ahead of time when a task’s deadline may be unrealistic and explain the challenges and how to address them in order to determine a more accurate timeline</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_time_management_question_3 === $perf_data->time_management_question_3){
                                        $same_time_management_question_3 = $perf_data->m_time_management_question_3;
                                    }else{
                                        $same_time_management_question_3 = false;
                                    }

                                    if($perf_data->time_management_question_3==0){
                                        $NA_time_management_question_3 = 6;
                                    }else{
                                        $NA_time_management_question_3 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_time_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_time_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->time_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_time_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">4. Timetracks required working hours daily on Bitrix24</i></label>
                                    <span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>
                                    </td>
=======
                                    <label for="">4. Organizes their time to allow for multiple daily tasks without issues </label>
                                    <span>Allocates time in their day properly to manage more than one task to be addressed</span>
                                </td>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_time_management_question_4 === $perf_data->time_management_question_4){
                                            $same_time_management_question_4 = $perf_data->m_time_management_question_4;
                                        }else{
                                            $same_time_management_question_4 = false;
                                        }

                                        if($perf_data->time_management_question_4==0){
                                            $NA_time_management_question_4 = 6;
                                        }else{
                                            $NA_time_management_question_4 = false;
                                        }


                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_time_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_time_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->time_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_time_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">5. Follows the scheduled work shift <i>(independent scoring)</i></label>
                                    <span>Follows the scheduled work shifts specially with their WFH and Office hours</span>
=======
                                    <label for="">5. Timetracks required working hours daily on Bitrix24</i></label>
                                    <span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_time_management_question_5 === $perf_data->time_management_question_5){
                                            $same_time_management_question_5 = $perf_data->m_time_management_question_5;
                                        }else{
                                            $same_time_management_question_5 = false;
                                        }

                                        if($perf_data->time_management_question_5==0){
                                            $NA_time_management_question_5 = 6;
                                        }else{
                                            $NA_time_management_question_5 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_time_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_time_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->time_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_time_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
<<<<<<< HEAD
=======
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">6. Follows the scheduled work shift <i>(independent scoring)</i></label>
                                    <span>Follows the scheduled work shifts specially with their WFH and Office hours</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_time_management_question_6 === $perf_data->time_management_question_6){
                                            $same_time_management_question_6 = $perf_data->m_time_management_question_6;
                                        }else{
                                            $same_time_management_question_6 = false;
                                        }

                                        if($perf_data->time_management_question_6==0){
                                            $NA_time_management_question_6 = 6;
                                        }else{
                                            $NA_time_management_question_6 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_time_management_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_time_management_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->time_management_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_time_management_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="remove_bb">
                                    <td colspan="2" class="head_quation_title">
                                        <br><br><br><br><br><br><br><br><br><br><br>
                                        <h5>Employee comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="time_management_comments" id="" cols="3" rows="5" disabled><?php echo $perf_data->time_management_comments; ?></textarea>
                                        <input type="hidden" name="time_management_comments" value="<?php echo $perf_data->time_management_comments; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="head_quation_title">
                                        <br><br>
                                        <h5>Manager comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="m_time_management_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_time_management_comments; ?></textarea>
                                    </td>
                                </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="frame_quations_sec">
=======
                <div class="frame_quations_sec">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
<<<<<<< HEAD
                                            <h5>Adaptability & Proactivity</h5>
=======
                                            <h5>Team Management</h5>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">1. Adapts to new project standards, new job requirements in a short amount of time</label>
                                    <span>Can shift between teams easily and adapt to the new project’s requirements</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_adaptability_productivity_question_1 === $perf_data->adaptability_productivity_question_1){
                                                $same_adaptability_productivity_question_1 = $perf_data->m_adaptability_productivity_question_1;
                                            }else{
                                                $same_adaptability_productivity_question_1 = false;
                                            }

                                            if($perf_data->adaptability_productivity_question_1==0){
                                                $NA_adaptability_productivity_question_1 = 6;
                                            }else{
                                                $NA_adaptability_productivity_question_1 = false;
=======
                                    <label for="">1. Ability to Manage the team, identify their skills and allocate task <span class="gray-font-subtitle">(sets the highest score in this category)</span></label>
                                    <span>BIM Coordinators: Attends the questions and concerns of the modellers and identify if there are any potential skills mismatch or outstanding candidates.</span> <span>BIM Managers: Ensure the team is compatible in terms of skills, knowledge and communication. Identify if there are any potential skills mismatches or outstanding candidates</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_team_management_question_1 === $perf_data->team_management_question_1){
                                                $same_team_management_question_1 = $perf_data->m_team_management_question_1;
                                            }else{
                                                $same_team_management_question_1 = false;
                                            }

                                            if($perf_data->team_management_question_1==0){
                                                $NA_team_management_question_1 = 6;
                                            }else{
                                                $NA_team_management_question_1 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
<<<<<<< HEAD
                                            if(($same_adaptability_productivity_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_adaptability_productivity_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->adaptability_productivity_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_adaptability_productivity_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                            if(($same_team_management_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_team_management_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->team_management_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_team_management_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">2. Takes initiatives to ask questions and solve potential issues that may affect the project</label>
                                    <span>Looks forward into the project to identify potential challenges and brings it up to the team to brainstorm for solutions or adapt the tasks and schedules to avoid these potential problems</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_adaptability_productivity_question_2 === $perf_data->adaptability_productivity_question_2){
                                            $same_adaptability_productivity_question_2 = $perf_data->m_adaptability_productivity_question_2;
                                        }else{
                                            $same_adaptability_productivity_question_2 = false;
                                        }

                                        if($perf_data->adaptability_productivity_question_2==0){
                                            $NA_adaptability_productivity_question_2 = 6;
                                        }else{
                                            $NA_adaptability_productivity_question_2 = false;
=======
                                    <label for="">2. Prepare and administer employee’s performance evaluation </label>
                                    <span>Evaluates the performance of team members, provides feedback for improvement, and suggest follow-up actions</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_team_management_question_2 === $perf_data->team_management_question_2){
                                            $same_team_management_question_2 = $perf_data->m_team_management_question_2;
                                        }else{
                                            $same_team_management_question_2 = false;
                                        }

                                        if($perf_data->team_management_question_2==0){
                                            $NA_team_management_question_2 = 6;
                                        }else{
                                            $NA_team_management_question_2 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {

<<<<<<< HEAD
                                        if($same_adaptability_productivity_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_adaptability_productivity_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->adaptability_productivity_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_adaptability_productivity_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_team_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_team_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->team_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_team_management_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">3. Learns new disciplines, software, and adapt this knowledge to projects</label>
                                    <span>Desires to learn new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_adaptability_productivity_question_3 === $perf_data->adaptability_productivity_question_3){
                                        $same_adaptability_productivity_question_3 = $perf_data->m_adaptability_productivity_question_3;
                                    }else{
                                        $same_adaptability_productivity_question_3 = false;
                                    }

                                    if($perf_data->adaptability_productivity_question_3==0){
                                        $NA_adaptability_productivity_question_3 = 6;
                                    }else{
                                        $NA_adaptability_productivity_question_3 = false;
=======
                                    <label for="">3. Observe for the team’s compatibility</label>
                                    <span>Monitor the different personalities within the team to avoid clashes, conflicts and encourage good team collaboration</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_team_management_question_3 === $perf_data->team_management_question_3){
                                        $same_team_management_question_3 = $perf_data->m_team_management_question_3;
                                    }else{
                                        $same_team_management_question_3 = false;
                                    }

                                    if($perf_data->team_management_question_3==0){
                                        $NA_team_management_question_3 = 6;
                                    }else{
                                        $NA_team_management_question_3 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }

                                    $x = 1;
                                    while($x <= 6) {
<<<<<<< HEAD
                                    if($same_adaptability_productivity_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_adaptability_productivity_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->adaptability_productivity_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_adaptability_productivity_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                    if($same_team_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_team_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->team_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_team_management_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">4. Thinks outside the box to suggest new ideas, workflows, innovations and products to improve the project</label>
                                    <span>Provides critical thinking to search for optimal or alternative solutions for tasks to avoid time consuming and error prone solutions</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_adaptability_productivity_question_4 === $perf_data->adaptability_productivity_question_4){
                                            $same_adaptability_productivity_question_4 = $perf_data->m_adaptability_productivity_question_4;
                                        }else{
                                            $same_adaptability_productivity_question_4 = false;
                                        }

                                        if($perf_data->adaptability_productivity_question_4==0){
                                            $NA_adaptability_productivity_question_4 = 6;
                                        }else{
                                            $NA_adaptability_productivity_question_4 = false;
=======
                                    <label for="">4. Bitrix24 Time Reports and Team’s Time Tracking <span class="gray-font-subtitle">(only for BIM Managers)</span></label>
                                    <span>Ensuring that the team members are properly time tracking an average of 8 hours daily and justifying that the time spent on the tasks are fair to the amount of work</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_team_management_question_4 === $perf_data->team_management_question_4){
                                            $same_team_management_question_4 = $perf_data->m_team_management_question_4;
                                        }else{
                                            $same_team_management_question_4 = false;
                                        }

                                        if($perf_data->team_management_question_4==0){
                                            $NA_team_management_question_4 = 6;
                                        }else{
                                            $NA_team_management_question_4 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }


                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD
                                        if($same_adaptability_productivity_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_adaptability_productivity_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->adaptability_productivity_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_adaptability_productivity_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_team_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_team_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->team_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_team_management_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">5. Handles multiple projects and teams simultaneously <i>(for Supervisors only, independent scoring)</i></label>
                                    <span>Able to supervise more than one team at once without loosing sight of each project’s requirements, goals and challenges</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_adaptability_productivity_question_5 === $perf_data->adaptability_productivity_question_5){
                                            $same_adaptability_productivity_question_5 = $perf_data->m_adaptability_productivity_question_5;
                                        }else{
                                            $same_adaptability_productivity_question_5 = false;
                                        }

                                        if($perf_data->adaptability_productivity_question_5==0){
                                            $NA_adaptability_productivity_question_5 = 6;
                                        }else{
                                            $NA_adaptability_productivity_question_5 = false;
=======
                                    <label for="">5. Ensuring the team has all the tools and licenses necessary for the project <span class="gray-font-subtitle">(only for BIM Managers)</span></label>
                                    <span>Ensuring that the team members are properly time tracking an average of 8 hours daily and justifying that the time spent on the tasks are fair to the amount of work</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_team_management_question_5 === $perf_data->team_management_question_5){
                                            $same_team_management_question_5 = $perf_data->m_team_management_question_5;
                                        }else{
                                            $same_team_management_question_5 = false;
                                        }

                                        if($perf_data->team_management_question_5==0){
                                            $NA_team_management_question_5 = 6;
                                        }else{
                                            $NA_team_management_question_5 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD
                                        if($same_adaptability_productivity_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_adaptability_productivity_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->adaptability_productivity_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_adaptability_productivity_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_team_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_team_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->team_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_team_management_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
<<<<<<< HEAD
=======
                                <tr class="remove_bb">
                                    <td colspan="2" class="head_quation_title">
                                        <br><br><br><br><br><br><br><br>
                                        <h5>Employee comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="team_management_comments" id="" cols="3" rows="5" disabled><?php echo $perf_data->team_management_comments; ?></textarea>
                                        <input type="hidden" name="team_management_comments_old" value="<?php echo $perf_data->team_management_comments; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="head_quation_title">
                                        <br><br>
                                        <h5>Manager comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="m_team_management_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_team_management_comments; ?></textarea>
                                    </td>
                                </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <br>
=======
            </section>
            <section class="frame_five">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                <div class="frame_five_cover">
                <div class="frame_quations_sec">
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
<<<<<<< HEAD
                                            <h5>Initiative & Proactive</h5>
=======
                                            <h5>Reliability & Professionalism</h5>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">1. Identifies potential issues</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_initiative_proactive_question_1 === $perf_data->initiative_proactive_question_1){
                                                $same_initiative_proactive_question_1 = $perf_data->m_initiative_proactive_question_1;
                                            }else{
                                                $same_initiative_proactive_question_1 = false;
                                            }

                                            if($perf_data->initiative_proactive_question_1==0){
                                                $NA_initiative_proactive_question_1 = 6;
                                            }else{
                                                $NA_initiative_proactive_question_1 = false;
=======
                                    <label for="">1. Finishes tasks without constant supervision within set deadlines</label>
                                    <span>Self-sufficient with their skills and efficient with their questions to allow for their supervisor and teammates to work with minimum interruption</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_reliability_question_1 === $perf_data->reliability_question_1){
                                                $same_reliability_question_1 = $perf_data->m_reliability_question_1;
                                            }else{
                                                $same_reliability_question_1 = false;
                                            }

                                            if($perf_data->reliability_question_1==0){
                                                $NA_reliability_question_1 = 6;
                                            }else{
                                                $NA_reliability_question_1 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
<<<<<<< HEAD
                                            if(($same_initiative_proactive_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_initiative_proactive_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->initiative_proactive_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_initiative_proactive_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                            if(($same_reliability_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_reliability_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->reliability_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_reliability_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">2. Proposes and suggests new ideas</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_initiative_proactive_question_2 === $perf_data->initiative_proactive_question_2){
                                            $same_initiative_proactive_question_2 = $perf_data->m_initiative_proactive_question_2;
                                        }else{
                                            $same_initiative_proactive_question_2 = false;
                                        }

                                        if($perf_data->initiative_proactive_question_2==0){
                                            $NA_initiative_proactive_question_2 = 6;
                                        }else{
                                            $NA_initiative_proactive_question_2 = false;
=======
                                    <label for="">2. Produces deliverables that are above expectation</label>
                                    <span>Proactively provides further information, data or drawings to compliment and support an argument to enhance deliverables</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_2 === $perf_data->reliability_question_2){
                                            $same_reliability_question_2 = $perf_data->m_reliability_question_2;
                                        }else{
                                            $same_reliability_question_2 = false;
                                        }

                                        if($perf_data->reliability_question_2==0){
                                            $NA_reliability_question_2 = 6;
                                        }else{
                                            $NA_reliability_question_2 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {

<<<<<<< HEAD
                                        if($same_initiative_proactive_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_initiative_proactive_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->initiative_proactive_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_initiative_proactive_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
<<<<<<< HEAD
                                    <label for="">3. Going extra mile if needed <i class="extra_space_hidden">ExploresExploresExplores new ideasExplores new ideasExplores new ideasExplores new ideasExplores new ideas</i></label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_initiative_proactive_question_3 === $perf_data->initiative_proactive_question_3){
                                        $same_initiative_proactive_question_3 = $perf_data->m_initiative_proactive_question_3;
                                    }else{
                                        $same_initiative_proactive_question_3 = false;
                                    }

                                    if($perf_data->initiative_proactive_question_3==0){
                                        $NA_initiative_proactive_question_3 = 6;
                                    }else{
                                        $NA_initiative_proactive_question_3 = false;
=======
                                    <label for="">3. Takes ownership of job duty and holds himself/herself accountable for them</label>
                                    <span>Proud of their work to share with teammates to strengthen the knowledge and backbone of the team</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_reliability_question_3 === $perf_data->reliability_question_3){
                                        $same_reliability_question_3 = $perf_data->m_reliability_question_3;
                                    }else{
                                        $same_reliability_question_3 = false;
                                    }

                                    if($perf_data->reliability_question_3==0){
                                        $NA_reliability_question_3 = 6;
                                    }else{
                                        $NA_reliability_question_3 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }

                                    $x = 1;
                                    while($x <= 6) {
<<<<<<< HEAD
                                    if($same_initiative_proactive_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_initiative_proactive_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->initiative_proactive_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_initiative_proactive_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                    if($same_reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_reliability_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
<<<<<<< HEAD
=======
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">4. Strive to cultivate and maintain positive working relationships and respect toward co-workers</i></label>
                                    <span>Maintains a respectful, collaborative environment to allow for good moral support in achieving team goals</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_4 === $perf_data->reliability_question_4){
                                            $same_reliability_question_4 = $perf_data->m_reliability_question_4;
                                        }else{
                                            $same_reliability_question_4 = false;
                                        }

                                        if($perf_data->reliability_question_4==0){
                                            $NA_reliability_question_4 = 6;
                                        }else{
                                            $NA_reliability_question_4 = false;
                                        }


                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_4==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">5. Keeps a tidy workspace and proper care of the company’s equipment </label>
                                    <span>Maintains a clean working environment on the company’s premises, particularly for shared workstations. Takes care of their assigned work equipment</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_5 === $perf_data->reliability_question_5){
                                            $same_reliability_question_5 = $perf_data->m_reliability_question_5;
                                        }else{
                                            $same_reliability_question_5 = false;
                                        }

                                        if($perf_data->reliability_question_5==0){
                                            $NA_reliability_question_5 = 6;
                                        }else{
                                            $NA_reliability_question_5 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_5==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">6. Attends and addresses company’s mandatory events/queries <i>(independent scoring)</i></label>
                                    <span>Including workshops, weekly meetings, surveys and questions addressed to the entire company</span>                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_reliability_question_6 === $perf_data->reliability_question_6){
                                            $same_reliability_question_6 = $perf_data->m_reliability_question_6;
                                        }else{
                                            $same_reliability_question_6 = false;
                                        }

                                        if($perf_data->reliability_question_6==0){
                                            $NA_reliability_question_6 = 6;
                                        }else{
                                            $NA_reliability_question_6 = false;
                                        }

                                        $x = 1;
                                        while($x <= 6) {
                                        if($same_reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_reliability_question_6==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr class="remove_bb">
                                    <td colspan="2" class="head_quation_title">
                                        <h5>Employee comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="5" disabled><?php echo $perf_data->reliability_comments; ?></textarea>
                                        <input type="hidden" name="reliability_comments" value="<?php echo $perf_data->reliability_comments; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="head_quation_title">
                                        <h5>Manager comments
                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                            </i>
                                        </h5>
                                        <textarea class="form-control" name="m_reliability_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_reliability_comments; ?></textarea>
                                    </td>
                                </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <div class="frame_quations_sec">
<<<<<<< HEAD
                        <div class="frame_quations_box">
                            <div class="evaluation_quation_sec">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="head_quation_title">
                                            <h5>Creativity & Problem Solving</h5>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="head_quation_title">
                                        <ul class="score_numbers">
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li>5</li>
                                            <li>N/A</li>
                                        </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">1. Ability to think outside the box</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                            if($perf_data->m_creativity_problem_question_1 === $perf_data->creativity_problem_question_1){
                                                $same_creativity_problem_question_1 = $perf_data->m_creativity_problem_question_1;
                                            }else{
                                                $same_creativity_problem_question_1 = false;
                                            }

                                            if($perf_data->creativity_problem_question_1==0){
                                                $NA_creativity_problem_question_1 = 6;
                                            }else{
                                                $NA_creativity_problem_question_1 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
                                            if(($same_creativity_problem_question_1)==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_creativity_problem_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->creativity_problem_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_creativity_problem_question_1==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">2. Offers creative solutions</label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_creativity_problem_question_2 === $perf_data->creativity_problem_question_2){
                                            $same_creativity_problem_question_2 = $perf_data->m_creativity_problem_question_2;
                                        }else{
                                            $same_creativity_problem_question_2 = false;
                                        }

                                        if($perf_data->creativity_problem_question_2==0){
                                            $NA_creativity_problem_question_2 = 6;
                                        }else{
                                            $NA_creativity_problem_question_2 = false;
=======
                            <div class="frame_quations_box">
                                <div class="evaluation_quation_sec">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="head_quation_title">
                                                <h5>Adaptability & Proactivity</h5>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="head_quation_title">
                                            <ul class="score_numbers">
                                                <li>1</li>
                                                <li>2</li>
                                                <li>3</li>
                                                <li>4</li>
                                                <li>5</li>
                                                <li>N/A</li>
                                            </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="evaluation_quation_cover">
                                        <label for="">1. Adapts to new project standards, new job requirements in a short amount of time <span class="gray-font-subtitle">(sets the highest score in this category)</span></label>
                                        <span>Can shift between teams easily and adapt to the new project’s requirements</span>
                                    </td>
                                        <td class="quation_radio">
                                        <?php
                                                if($perf_data->m_adaptability_productivity_question_1 === $perf_data->adaptability_productivity_question_1){
                                                    $same_adaptability_productivity_question_1 = $perf_data->m_adaptability_productivity_question_1;
                                                }else{
                                                    $same_adaptability_productivity_question_1 = false;
                                                }

                                                if($perf_data->adaptability_productivity_question_1==0){
                                                    $NA_adaptability_productivity_question_1 = 6;
                                                }else{
                                                    $NA_adaptability_productivity_question_1 = false;
                                                }

                                                $x = 1;
                                                while($x <= 6) {                                                                    
                                                if(($same_adaptability_productivity_question_1)==$x){
                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                }elseif($perf_data->m_adaptability_productivity_question_1==$x){
                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input m-checked-edit' value='$x' disabled/> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                }elseif($perf_data->adaptability_productivity_question_1==$x){
                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                }elseif($NA_adaptability_productivity_question_1==$x){
                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                }
                                                else{
                                                    echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                }
                                                $x++;
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="evaluation_quation_cover">
                                        <label for="">2. Takes initiatives to ask questions and solve potential issues that may affect the project</label>
                                        <span>Looks forward into the project to identify potential challenges and brings it up to the team to brainstorm for solutions or adapt the tasks and schedules to avoid these potential problems</span>                                    </td>
                                        <td class="quation_radio">
                                        <?php
                                            if($perf_data->m_adaptability_productivity_question_2 === $perf_data->adaptability_productivity_question_2){
                                                $same_adaptability_productivity_question_2 = $perf_data->m_adaptability_productivity_question_2;
                                            }else{
                                                $same_adaptability_productivity_question_2 = false;
                                            }

                                            if($perf_data->adaptability_productivity_question_2==0){
                                                $NA_adaptability_productivity_question_2 = 6;
                                            }else{
                                                $NA_adaptability_productivity_question_2 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {

                                            if($same_adaptability_productivity_question_2==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_adaptability_productivity_question_2==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->adaptability_productivity_question_2==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_adaptability_productivity_question_2==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="evaluation_quation_cover">
                                        <label for="">3. Learns new disciplines, software, and adapt this knowledge to projects</label>
                                        <span>Desires to gain new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>                                    </td>
                                        <td class="quation_radio">
                                        <?php
                                        if($perf_data->m_adaptability_productivity_question_3 === $perf_data->adaptability_productivity_question_3){
                                            $same_adaptability_productivity_question_3 = $perf_data->m_adaptability_productivity_question_3;
                                        }else{
                                            $same_adaptability_productivity_question_3 = false;
                                        }

                                        if($perf_data->adaptability_productivity_question_3==0){
                                            $NA_adaptability_productivity_question_3 = 6;
                                        }else{
                                            $NA_adaptability_productivity_question_3 = false;
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }

                                        $x = 1;
                                        while($x <= 6) {
<<<<<<< HEAD

                                        if($same_creativity_problem_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_creativity_problem_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->creativity_problem_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_creativity_problem_question_2==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                        if($same_adaptability_productivity_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->m_adaptability_productivity_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($perf_data->adaptability_productivity_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }elseif($NA_adaptability_productivity_question_3==$x){
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                        }
                                        else{
                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                        }
                                        $x++;
                                        }
                                        ?>
<<<<<<< HEAD
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">3. Explores new ideas <i class="extra_space_hidden">ExploresExploresExplores new ideasExplores new ideasExplores new ideasExplores new ideasExplores new ideas</i></label>
                                    <span></span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                    if($perf_data->m_creativity_problem_question_3 === $perf_data->creativity_problem_question_3){
                                        $same_creativity_problem_question_3 = $perf_data->m_creativity_problem_question_3;
                                    }else{
                                        $same_creativity_problem_question_3 = false;
                                    }

                                    if($perf_data->creativity_problem_question_3==0){
                                        $NA_creativity_problem_question_3 = 6;
                                    }else{
                                        $NA_creativity_problem_question_3 = false;
                                    }

                                    $x = 1;
                                    while($x <= 6) {
                                    if($same_creativity_problem_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->m_creativity_problem_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($perf_data->creativity_problem_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }elseif($NA_creativity_problem_question_3==$x){
                                        echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    else{
                                        echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="print_index_comm_sec">
                <div class="legends_info_box">
                    <div class="h-80">
                        <div class="card-body">
                            <div class="head_quation_title">
                                <h5>Performance Index</h5>
                            </div>
                            <ul class="p-0 m-0 perf_index_print_text">
                                <li class="d-flex mb-2 pb-1">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <span class="scores-title"><b>Exceptional (4.50 - 5.00)</b> - The employee has exceeded performance criteria by a wide margin in all key objective areas; and clearly and measurably achieved all objectives set for the review period</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-2 pb-1">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <span class="scores-title"><b>Above Target (3.50 - 4.49)</b> - The employee has either achieved expected performance criteria in respect to all objectives, or has exceeded in one or two critical objectives areas while meeting expectations in lesser priority objective areas</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-2 pb-1">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <span class="scores-title"><b>On Target (3.00 - 3.49)</b> - The employee has either achieved the expected performance criteria in all key objective areas or, has exceeded performance in a critical objectives area with the result that a lesser priority objective area may have underachieved. </span>
                                    </div>
                                </li>
                                <li class="d-flex mb-2 pb-1">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <span class="scores-title"><b>In Development (2.00 - 2.99)</b> - The employee has generally met the performance criteria for assigned objectives with the exception of one or two areas. </span>
                                    </div>
                                </li>
                                <li class="d-flex mb-2 pb-1">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                    <span class="scores-title"><b>Unacceptable Performance (1.00 - 1.99)</b> - The employee has failed to meet the performance criteria in critical objectives areas. </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="legends_info_box">
                    <div class="perf_summary_sec">
                        <textarea name="" class="form-control" cols="10" rows="3" placeholder="Summary & Next Steps"></textarea>
                    </div>
=======
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="evaluation_quation_cover">
                                        <label for="">4. Thinks outside the box to suggest new ideas, workflows, innovations and products to improve the project</label>
                                        <span>Provides critical thinking to search for optimal or alternative solutions for tasks to avoid time consuming and error prone solutions</span>
                                        </td>
                                        <td class="quation_radio">
                                        <?php
                                            if($perf_data->m_adaptability_productivity_question_4 === $perf_data->adaptability_productivity_question_4){
                                                $same_adaptability_productivity_question_4 = $perf_data->m_adaptability_productivity_question_4;
                                            }else{
                                                $same_adaptability_productivity_question_4 = false;
                                            }

                                            if($perf_data->adaptability_productivity_question_4==0){
                                                $NA_adaptability_productivity_question_4 = 6;
                                            }else{
                                                $NA_adaptability_productivity_question_4 = false;
                                            }


                                            $x = 1;
                                            while($x <= 6) {
                                            if($same_adaptability_productivity_question_4==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_adaptability_productivity_question_4==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->adaptability_productivity_question_4==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_adaptability_productivity_question_4==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="evaluation_quation_cover">
                                        <label for="">5. Handles multiple projects and teams simultaneously <i>(for Supervisors only, independent scoring)</i></label>
                                        <span>Able to supervise more than one team at once without loosing sight of each project’s requirements, goals and challenges</span>
                                        </td>
                                        <td class="quation_radio">
                                        <?php
                                            if($perf_data->m_adaptability_productivity_question_5 === $perf_data->adaptability_productivity_question_5){
                                                $same_adaptability_productivity_question_5 = $perf_data->m_adaptability_productivity_question_5;
                                            }else{
                                                $same_adaptability_productivity_question_5 = false;
                                            }

                                            if($perf_data->adaptability_productivity_question_5==0){
                                                $NA_adaptability_productivity_question_5 = 6;
                                            }else{
                                                $NA_adaptability_productivity_question_5 = false;
                                            }

                                            $x = 1;
                                            while($x <= 6) {
                                            if($same_adaptability_productivity_question_5==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input both-checked' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->m_adaptability_productivity_question_5==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($perf_data->adaptability_productivity_question_5==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }elseif($NA_adaptability_productivity_question_5==$x){
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='0' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            else{
                                                echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                            }
                                            $x++;
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="remove_bb">
                                        <td colspan="2" class="head_quation_title">
                                            <h5>Employee comments
                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                </i>
                                            </h5>
                                            <textarea class="form-control" name="productivity_comments" id="" cols="3" rows="5" disabled><?php echo $perf_data->productivity_comments; ?></textarea>
                                            <input type="hidden" name="productivity_comments_old" value="<?php echo $perf_data->productivity_comments; ?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="head_quation_title">
                                            <h5>Manager comments
                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                </i>
                                            </h5>
                                            <textarea class="form-control" name="m_productivity_comments" cols="3" rows="5" placeholder="Please enter you comment" disabled><?php echo $perf_data->m_productivity_comments; ?></textarea>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="print_index_comm_sec">
                <div class="legends_info_box head_quation_title">
                    <h5>Summary & Next Steps</h5><span class="gray-font-subtitle">Supervisor to comment</span>
                    <div class="perf_summary_sec">
                        <textarea name="" class="form-control" cols="10" rows="10" disabled><?php echo $goals->supervisor_summary; ?></textarea>
                    </div>
                </div>
                <div class="legends_info_box">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                    <section class="frame_thrid">
                        <div class="score_box">
                        <label for="">Score</label>
                        <?php 
                            if(($perf_data->submit_manager_status)==2){
                                $CurrentReview = $avg_data->total_emp_avg;
                            }else{
<<<<<<< HEAD
                                $sumTotal = $perf_data->communication_emp_avg + $perf_data->knowledge_performance_emp_avg + $perf_data->quality_emp_avg + $perf_data->knowledge_emp_avg + $perf_data->software_emp_avg + $perf_data->reliability_emp_avg + $perf_data->time_management_emp_avg + $perf_data->productivity_emp_avg + $perf_data->p_initiative_proactive_emp_avg + $perf_data->p_creativity_problem_solving_emp_avg; 
                                $avgTotal = $sumTotal / 10;
                                $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                                $CurrentReview = $emp_avg_report;
                            }
                        ?>
                        <input type="text" class="form-control" value="<?php echo $CurrentReview; ?>">
                        <div class="score-img-cover">
                            <img src="<?php echo base_url('assets_admin/img/illustrations/score-legends.png'); ?>" alt="">
=======

                                $countloop = array(
                                    "quality_emp_avg" => $perf_data->quality_emp_avg,
                                    "knowledge_performance_emp_avg" => $perf_data->knowledge_performance_emp_avg,
                                    "communication_emp_avg" => $perf_data->communication_emp_avg,
                                    "time_management_emp_avg" => $perf_data->time_management_emp_avg,
                                    "team_management_emp_avg" => $perf_data->team_management_emp_avg,
                                    "reliability_emp_avg" => $perf_data->reliability_emp_avg,
                                    "productivity_emp_avg" => $perf_data->productivity_emp_avg
                                );

                                $allcounter = 1;
                                $store_AVG = null;
                                foreach($countloop as $run){

                                    if($run == 0){
                                        
                                    }else{
                                        $store_AVG = $allcounter++;
                                    }
                                }

                                if($store_AVG){
                                    $sumTotal = $perf_data->communication_emp_avg + $perf_data->knowledge_performance_emp_avg + $perf_data->quality_emp_avg + $perf_data->team_management_emp_avg + $perf_data->reliability_emp_avg + $perf_data->time_management_emp_avg + $perf_data->productivity_emp_avg; 
                                    $avgTotal = $sumTotal / $store_AVG;
                                    $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                                    $CurrentReview = $emp_avg_report;
                                }else{
                                    $emp_avg_report = null;
                                }

                            }
                        ?>
                        <input type="text" class="form-control" value="<?php echo $CurrentReview; ?>">
                        <div class="evaluation_text_f12">
                            <span>The Score is the average of all the evaluation criteria excluding the N/A items. Score of 3.5 and above is required to pass the evaluation.</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                        </div>
                        </div>
                    </section>
                    <div class="evaluation_text_f12">
                        <span>
<<<<<<< HEAD
                            The content of this appraisal has been agreed by both the employee and employer and it serves as anofficial document to indicate the progress of the employee
                        </span>
                    </div>
                    <div class="perf_signature_sec evaluation_text_f12">
                        <div class="signature_box">
                            <!-- <img src="<?php //echo base_url('assets_admin/img/nadeem_s1.png'); ?>" alt=""> -->
                            <span><b>Employee’s Signature</b></span>
                        </div>
                        <div class="signature_box evaluation_text_f12">
                            <!-- <img src="<?php //echo base_url('assets_admin/img/nadeem_s1.png'); ?>" alt=""> -->
                            <span><b>Supervisor’s Signature</b></span>
=======
                            The content of this appraisal has been agreed by both the employee and employer and it serves as an official document to indicate the progress of the employee
                        </span>
                    </div>
                <div class="emp_review">
                    <div class="emp_review_box">
                    <label for="">Last Review</label>
                            <div class="emp_review_block1">
                                <?php if($last_reviews): ?>
                                    <?php $last_reviewsstart_date = date("d-M-Y", strtotime($last_reviews->emp_performance_start_date)); ?>
                                <?php else: ?>
                                    <?php echo $last_reviewsstart_date = ""; ?>
                                <?php endif; ?>
                                <input type="text" class="form-control" value="<?php echo $last_reviewsstart_date; ?>">
                            </div>
                            <div class="emp_review_block2">
                            <?php if($last_reviews): ?>
                                <?php $main_avg = $last_reviews->total_emp_avg; ?>
                            <?php else: ?>
                                <?php $main_avg = ""; ?>
                            <?php endif; ?>
                            <input type="text" class="form-control" value="<?php echo $main_avg; ?>">
                            </div>
                    </div>
                    
                        <div class="emp_review_box">
                        <label for="">Current Review</label>
                            <div class="emp_review_block1">
                                <?php 
                                    $start_date = date("d-M-Y", strtotime($perf_data->emp_performance_start_date));
                                ?>
                                <input type="text" class="form-control" value="<?php echo $start_date; ?>">
                            </div>
                            <div class="emp_review_block2">
                                <?php 
                                if(($perf_data->submit_manager_status)==2){
                                    $CurrentReview = $avg_data->total_emp_avg;
                                }else{


                                    $countloop = array(
                                        "quality_emp_avg" => $perf_data->quality_emp_avg,
                                        "knowledge_performance_emp_avg" => $perf_data->knowledge_performance_emp_avg,
                                        "communication_emp_avg" => $perf_data->communication_emp_avg,
                                        "time_management_emp_avg" => $perf_data->time_management_emp_avg,
                                        "team_management_emp_avg" => $perf_data->team_management_emp_avg,
                                        "reliability_emp_avg" => $perf_data->reliability_emp_avg,
                                        "productivity_emp_avg" => $perf_data->productivity_emp_avg
                                    );

                                    $allcounter = 1;
                                    $store_AVG = null;
                                    foreach($countloop as $run){

                                        if($run == 0){
                                            
                                        }else{
                                            $store_AVG = $allcounter++;
                                        }
                                    }

                                    if($store_AVG){
                                        $sumTotal = $perf_data->communication_emp_avg + $perf_data->knowledge_performance_emp_avg + $perf_data->quality_emp_avg + $perf_data->team_management_emp_avg + $perf_data->reliability_emp_avg + $perf_data->time_management_emp_avg + $perf_data->productivity_emp_avg; 
                                        $avgTotal = $sumTotal / $store_AVG;
                                        $emp_avg_report = number_format((float)$avgTotal, 2, '.', '');
                                        $CurrentReview = $emp_avg_report;
                                    }else{
                                        $emp_avg_report = null;
                                    }
                                    
                                }
                                ?>
                                <input type="text" class="form-control" value="<?php echo $CurrentReview; ?>">
                            </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                        </div>
                    </div>
                </div>
            </section>
<<<<<<< HEAD

=======
                            
>>>>>>> 8ce454d (new update employee portal v1.1.0)

        </section>

<?php else: ?>
    <h4 class="fw-bold "><a href="<?php echo base_url('employee/employee-performance-list'); ?>"><i class="bx bx-left-arrow-alt"></i> BACK</a></h4>
<?php endif; ?>

<script>
  window.onload = function () {
    window.print();
}
</script>