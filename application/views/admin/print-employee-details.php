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
                </div>

            </div>
            <div class="frame_two">
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
            </div>
        </section>

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
                                    <label for="">2. Completes work efficiently with a fast turnaround and avoids redundant work</label>
                                    <span>Able to maximize the use of their time to work quickly without delays and mistakes</span>
                                    </td>
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
                                    <label for="">3. Knowledge of your industry’s practices, regulations, and workflow</label>
                                    <span>Proactively searches for new updates in BIM practices, add-ins, tools to solve project tasks and improve the workflow of the team</span>
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
                                        echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_new' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
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
                                    <label for="">4. Desire to learn new skills and industry knowledge to improve and grow in your role <i>(independent scoring)</i></label>
                                    <span>Show the desire to learn more and expand your role to better support your team and project</span>
                                    </td>
                                    <td class="quation_radio">
                                    <?php
                                        if($perf_data->m_knowledge_performance_question_4 === $perf_data->knowledge_performance_question_4){
                                            $same_knowledge_performance_question_4 = $perf_data->m_knowledge_performance_question_4;
                                        }else{
                                            $same_knowledge_performance_question_4 = false;
                                        }

                                        if($perf_data->knowledge_performance_question_4==0){
                                            $NA_knowledge_performance_question_4 = 6;
                                        }else{
                                            $NA_knowledge_performance_question_4 = false;
                                        }


                                        $x = 1;
                                        while($x <= 6) {
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
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
                                    <label for="">5. Shows the ability to supervise a team to handle a project <i>(for Supervisors only, independent scoring)</i></label>
                                    <span>Shows signs of leadership to handle a team and guide them towards a common goal</span>
                                    </td>
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
                                            <h5>Knowledge of Software</h5>
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
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
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
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
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
                                        }

                                        $x = 1;
                                        while($x <= 6) {

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
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
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
                                    }

                                    $x = 1;
                                    while($x <= 6) {
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
                                    }
                                    $x++;
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
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
                                        }


                                        $x = 1;
                                        while($x <= 6) {
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
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
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
                                        }

                                        $x = 1;
                                        while($x <= 6) {
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
                                    <label for="">1. Adheres to the task deadlines set by the supervisor</label>
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
                                    <label for="">4. Timetracks required working hours daily on Bitrix24</i></label>
                                    <span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>
                                    </td>
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
                                    <label for="">5. Follows the scheduled work shift <i>(independent scoring)</i></label>
                                    <span>Follows the scheduled work shifts specially with their WFH and Office hours</span>
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
                                    }

                                    $x = 1;
                                    while($x <= 6) {
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
                                    }
                                    $x++;
                                    }
                                    ?>
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
                                            <h5>Initiative & Proactive</h5>
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
                                            }

                                            $x = 1;
                                            while($x <= 6) {                                                                    
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
                                            }
                                            $x++;
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
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
                                        }

                                        $x = 1;
                                        while($x <= 6) {

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
                                        }
                                        $x++;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="evaluation_quation_cover">
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
                                    }

                                    $x = 1;
                                    while($x <= 6) {
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
                                        }

                                        $x = 1;
                                        while($x <= 6) {

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
                                        }
                                        $x++;
                                        }
                                        ?>
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
                    <section class="frame_thrid">
                        <div class="score_box">
                        <label for="">Score</label>
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
                        <div class="score-img-cover">
                            <img src="<?php echo base_url('assets_admin/img/illustrations/score-legends.png'); ?>" alt="">
                        </div>
                        </div>
                    </section>
                    <div class="evaluation_text_f12">
                        <span>
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
                        </div>
                    </div>
                </div>
            </section>


        </section>

<?php else: ?>
    <h4 class="fw-bold "><a href="<?php echo base_url('employee/employee-performance-list'); ?>"><i class="bx bx-left-arrow-alt"></i> BACK</a></h4>
<?php endif; ?>

<script>
  window.onload = function () {
    window.print();
}
</script>