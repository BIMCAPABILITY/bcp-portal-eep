<div class="content-wrapper">
    <div class="container-xxl flex-grow-2 container-p-y">
        <h4 class="fw-bold"><a href="<?php echo base_url('Employee/showEmpPerformance/'.$empinfo->emp_performance_id); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
        <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light">Performance Details /</span> Edit Performance</h4>
            <form id="formAccountSettings" method="POST" action="<?php echo base_url('Employee/updateEmpPerformance'); ?>" data-parsley-validate data-toggle="validator">

                           <!-- Hidden -->
                           <input type="hidden" name='employee_id' value='<?php echo $empinfo->main_employee_id; ?>'>
                           <input type="hidden" name='performance_id' value='<?php echo $empinfo->emp_performance_id; ?>'>
                           <!-- End Hidden -->

                        <div class="card mb-3 emp-per-start-end">
                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label for="designation" class="form-label">EVALUATION Period </label>
                                    <select name="evaluate_date_category" id="evaluate_date_category" class="form-control" required>
                                        <option selected disabled>Select Period</option>
<<<<<<< HEAD
                                        <option value="30">Monthly</option>
                                        <option value="90">Quarterly</option>
                                        <option value="182">Half Yearly</option>
                                        <option value="365">Yearly</option>
=======
                                        <option value="90">Mid-Probation</option>
                                        <option value="182">Regularization</option>
                                        <option value="182">Bi-Annual</option>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="designation" class="form-label">EVALUATION Start</label>
                                    <input class="form-control" type="date" name="emp_performance_start_date" id="start_date" value="<?= date('Y-m-d'); ?>" required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="designation" class="form-label">EVALUATION End</label>
                                    <input class="form-control" id="end_date" type="date" value="" disabled>
<<<<<<< HEAD
                                    <input type="hidden" name="emp_performance_end_date" id="end_date_set" value="">                                 
=======
                                    <input type="hidden" name="emp_performance_end_date" id="end_date_set" value="">
                                    <input type="hidden" name="old_performance_end_date" value="<?php echo $empinfo->emp_performance_end_date; ?>">                              
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="nav-align-top mb-2">
                                            <ul class="nav nav-tabs nav-fill" role="tablist">
<<<<<<< HEAD
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
=======

                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Goals</span>">
                                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-goals" aria-controls="navs-justified-goals" aria-selected="true">
                                                            Goals
                                                        </button>
                                                    </li>
                    
                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Quality & Organization</span>">
                                                    <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-quality-organization" aria-controls="navs-justified-quality-organization" aria-selected="true">
                                                    Section 1
                                                    </button>
                                                    </li>

                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Knowledge & Performance</span>">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge-performance" aria-controls="navs-justified-knowledge-performance" aria-selected="false">
                                                        Section 2
                                                        </button>
                                                    </li>

                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Communication</span>">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-communication" aria-controls="navs-justified-communication" aria-selected="false">
                                                            Section 3
                                                        </button>
                                                    </li>
                                                    
                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Task & Time Management</span>">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-time-management" aria-controls="navs-justified-time-management" aria-selected="false">
                                                        Section 4
                                                        </button>
                                                    </li>

                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Team Management</span>">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-team-management" aria-controls="navs-justified-team-management" aria-selected="false">
                                                        Section 5
                                                        </button>
                                                    </li>

                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Reliability & Professionalism</span>">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-reliability-professionalism" aria-controls="navs-justified-reliability-dependability" aria-selected="false">
                                                            Section 6
                                                        </button>
                                                    </li>

                                                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title="" data-bs-original-title="<span>Adaptability & Proactivity</span>">
                                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-adaptability" aria-controls="navs-justified-adaptability" aria-selected="false">
                                                            Section 7
                                                        </button>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">

                                    <div class="tab-pane fade show active" id="navs-justified-goals" role="tabpanel">
                                            <h4>Goals</h4>
                                            <hr>
                                            <div class="supervisor-goals-flex">
                                                <section class="supervisor-goals-section">
                                                    <div class="goals-section-one">
                                                        <label for="">Current Goals</label>
                                                        <span>Immediate Goals</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea name="goals_emp_words_immediate" class="form-control" cols="5" rows="3"><?php echo $goal->goals_emp_words_immediate; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="goals-section-one">
                                                        <label for="">Short-Term Goals</label>
                                                        <span>Goals to be achieved within 6 months</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea name="goals_emp_words_short_term" class="form-control" cols="5" rows="3"><?php echo $goal->goals_emp_words_short_term; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                                <section class="supervisor-goals-section">
                                                    <div class="goals-section-one">
                                                        <label for="">Mid-Term Goals</label>
                                                        <span>Goals to be achieved within 12 months</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea name="goals_emp_words_mid_term" class="form-control" cols="5" rows="3"><?php echo $goal->goals_emp_words_mid_term; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="goals-section-one">
                                                        <label for="">Long-Term Goals</label>
                                                        <span>Goals to be achieved within 18 months</span>
                                                        <div class="goal-boxes">
                                                            <div class="goal-box">
                                                                <textarea name="goals_emp_words_long_term" class="form-control" cols="5" rows="3"><?php echo $goal->goals_emp_words_long_term; ?></textarea>
                                                                <label for="">Evaluatee to write goals</label>
                                                            </div>
                                                            <div class="goal-box">
                                                                <textarea class="form-control" cols="5" rows="3" disabled></textarea>
                                                                <label for="">Supervisor to review goals</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>

                                                <div class="tab-pane fade" id="navs-justified-quality-organization" role="tabpanel">
                                                        <h4>Quality & Organization</h4>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>
<<<<<<< HEAD
                                                                    
=======

>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
                                                                        if($empinfo->communication_question_1==0){
                                                                            $NA_communication_question_1 = 6;
                                                                        }else{
                                                                            $NA_communication_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                        <p>
                                                                            1. Attention to details <span class="gray-font-scoring">(sets the highest score in this category)</span>
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
                                                                        if($empinfo->quality_question_1==0){
                                                                            $NA_quality_question_1 = 6;
                                                                        }else{
                                                                            $NA_quality_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_communication_question_1" value="<?php echo $empinfo->communication_question_1; ?>">
=======
                                                                        <input type="hidden" name="e_quality_question_1" value="<?php echo $empinfo->quality_question_1; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
                                                                        if($empinfo->communication_question_2==0){
                                                                            $NA_communication_question_2 = 6;
                                                                        }else{
                                                                            $NA_communication_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_communication_question_2" value="<?php echo $empinfo->communication_question_2; ?>">
                                                                    </td>
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
                                                                        if($empinfo->communication_question_3==0){
                                                                            $NA_communication_question_3 = 6;
                                                                        }else{
                                                                            $NA_communication_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
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
                                                                        if($empinfo->quality_question_2==0){
                                                                            $NA_quality_question_2 = 6;
                                                                        }else{
                                                                            $NA_quality_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_communication_question_3" value="<?php echo $empinfo->communication_question_3; ?>">
=======
                                                                        <input type="hidden" name="e_quality_question_2" value="<?php echo $empinfo->quality_question_2; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
                                                                        if($empinfo->communication_question_4==0){
                                                                            $NA_communication_question_4 = 6;
                                                                        }else{
                                                                            $NA_communication_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
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
                                                                        if($empinfo->quality_question_3==0){
                                                                            $NA_quality_question_3 = 6;
                                                                        }else{
                                                                            $NA_quality_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_communication_question_4" value="<?php echo $empinfo->communication_question_4; ?>">
=======
                                                                        <input type="hidden" name="e_quality_question_3" value="<?php echo $empinfo->quality_question_3; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
                                                                        if($empinfo->communication_question_5==0){
                                                                            $NA_communication_question_5 = 6;
                                                                        }else{
                                                                            $NA_communication_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
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
                                                                        if($empinfo->quality_question_4==0){
                                                                            $NA_quality_question_4 = 6;
                                                                        }else{
                                                                            $NA_quality_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_communication_question_5" value="<?php echo $empinfo->communication_question_5; ?>">
=======
                                                                        <input type="hidden" name="e_quality_question_4" value="<?php echo $empinfo->quality_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>
                                                                            5. Follows company standards for file organization, file documentation, naming conventions, and BIM protocols
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
                                                                        if($empinfo->quality_question_5==0){
                                                                            $NA_quality_question_5 = 6;
                                                                        }else{
                                                                            $NA_quality_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_quality_question_5" value="<?php echo $empinfo->quality_question_5; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
<<<<<<< HEAD
                                                                        <textarea class="form-control" name="communication_comments" cols="3" rows="3"><?php echo $empinfo->communication_comments; ?></textarea>
=======
                                                                        <textarea class="form-control" name="quality_comments" id="" cols="3" rows="3"><?php echo $empinfo->quality_comments; ?></textarea>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
=======
                                                                        <p id="communication_text_Q1">
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
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_performance_question_1==0){
                                                                            $NA_knowledge_performance_question_1 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_1" value="<?php echo $empinfo->knowledge_performance_question_1; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
=======
                                                                        <p>
                                                                            2. Understanding of the Project <span class="gray-font-scoring">(For BIM Team only)</span>
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
                                                                                title="<span>Knows their project inside-out, have clear details and understanding of project and its requirements and is able to give the clarity to the team members</span>">
                                                                            </i>
                                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_performance_question_2==0){
                                                                            $NA_knowledge_performance_question_2 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_2==$x){ 
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_2" value="<?php echo $empinfo->knowledge_performance_question_2; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
=======
                                                                        <p>
                                                                            3. Completes work efficiently with a fast turnaround and avoids redundant work
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
                                                                                title="<span>Able to maximize the use of their time to work quickly without delays and mistakes</span>">
                                                                            </i>
                                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_performance_question_3==0){
                                                                            $NA_knowledge_performance_question_3 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_3" value="<?php echo $empinfo->knowledge_performance_question_3; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
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
=======
                                                                        <p>
                                                                            4. Knowledge of your industry’s practices, regulations, and workflow
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
                                                                                title="<span>Proactively searches for new updates in BIM practices, add-ins, tools to solve project tasks and improve the workflow of the team</span>">
                                                                            </i>
                                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_performance_question_4==0){
                                                                            $NA_knowledge_performance_question_4 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_4" value="<?php echo $empinfo->knowledge_performance_question_4; ?>">
                                                                    </td>
                                                                </tr>
<<<<<<< HEAD
                                                                <tr class="remove_bb">
                                                                <td>
                                                                        <p>
                                                                            5. Shows the ability to supervise a team to handle a project <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
=======

                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>
                                                                            5. Ability to educate team members <span class="gray-font-scoring">(independent scoring)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
<<<<<<< HEAD
                                                                                title="<span>Shows signs of leadership to handle a team and guide them towards a common goal</span>">
=======
                                                                                title="<span>Able to clearly address, identify learning challenges and roadblocks. Also design and manage workshops for the company</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                            </i>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_performance_question_5==0){
                                                                            $NA_knowledge_performance_question_5 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_5" value="<?php echo $empinfo->knowledge_performance_question_5; ?>">
                                                                    </td>
                                                                </tr>
<<<<<<< HEAD
=======

                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>
                                                                            6. Desire to learn new skills and industry knowledge to improve and grow in your role <span class="gray-font-scoring">(independent scoring)</span>
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
                                                                        if($empinfo->knowledge_performance_question_6==0){
                                                                            $NA_knowledge_performance_question_6 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_6 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_6' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_6" value="<?php echo $empinfo->knowledge_performance_question_6; ?>">
                                                                    </td>
                                                                </tr>

                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>
                                                                            7. Desire to learn new skills and industry knowledge to improve and grow in your role <span class="gray-font-scoring">(independent scoring)</span>
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
                                                                        if($empinfo->knowledge_performance_question_7==0){
                                                                            $NA_knowledge_performance_question_7 = 6;
                                                                        }else{
                                                                            $NA_knowledge_performance_question_7 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_performance_question_7==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_performance_question_7==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_7' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_performance_question_7" value="<?php echo $empinfo->knowledge_performance_question_7; ?>">
                                                                    </td>
                                                                </tr>


>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="productivity_comments" cols="3" rows="3" placeholder="Please Enter Comments"><?php echo $empinfo->productivity_comments; ?></textarea>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

<<<<<<< HEAD
                                                    <div class="tab-pane fade" id="navs-justified-quality" role="tabpanel">
                                                        <h4>Quality & Organization</h4>
=======
                                                    <div class="tab-pane fade" id="navs-justified-communication" role="tabpanel">
                                                        <div class="re-evaluate-head-top">
                                                            <h4>Communication</h4>
                                                        </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>
<<<<<<< HEAD

=======
                                                                    
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
                                                                        1. Attention to details
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>The work produced is concise and free of mistakes, all decisions are deliberate to improve the quality of the work. The Presentation of the work is clean, clear and aligned</span>">
                                                                        </i>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->quality_question_1==0){
                                                                            $NA_quality_question_1 = 6;
                                                                        }else{
                                                                            $NA_quality_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_quality_question_1" value="<?php echo $empinfo->quality_question_1; ?>">
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
                                                                        if($empinfo->quality_question_2==0){
                                                                            $NA_quality_question_2 = 6;
                                                                        }else{
                                                                            $NA_quality_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_quality_question_2" value="<?php echo $empinfo->quality_question_2; ?>">
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
                                                                        if($empinfo->quality_question_3==0){
                                                                            $NA_quality_question_3 = 6;
                                                                        }else{
                                                                            $NA_quality_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_quality_question_3" value="<?php echo $empinfo->quality_question_3; ?>">
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
                                                                        if($empinfo->quality_question_4==0){
                                                                            $NA_quality_question_4 = 6;
                                                                        }else{
                                                                            $NA_quality_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_quality_question_4" value="<?php echo $empinfo->quality_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        5. Follows company standards for file organization, file documentation, naming conventions, and BIM protocols
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
                                                                        if($empinfo->quality_question_5==0){
                                                                            $NA_quality_question_5 = 6;
                                                                        }else{
                                                                            $NA_quality_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->quality_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_quality_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_quality_question_5" value="<?php echo $empinfo->quality_question_5; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="quality_comments" id="" cols="3" rows="3"><?php echo $empinfo->quality_comments; ?></textarea>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>1. Understanding of BIM project standards and portfolio</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_standards_and_portfolio==0){
                                                                            $NA_knowledge_standards_and_portfolio = 6;
                                                                        }else{
                                                                            $NA_knowledge_standards_and_portfolio = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_standards_and_portfolio==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_standards_and_portfolio==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_standards_and_portfolio" value="<?php echo $empinfo->knowledge_standards_and_portfolio; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>2. Understanding of BIM project requirements</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_bim_project_requirements==0){
                                                                            $NA_knowledge_bim_project_requirements = 6;
                                                                        }else{
                                                                            $NA_knowledge_bim_project_requirements = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_bim_project_requirements==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_bim_project_requirements==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_bim_project_requirements" value="<?php echo $empinfo->knowledge_bim_project_requirements; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>3. Knowledge of the construction industry including ARC, STR, MEP, and BIM standards</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->knowledge_of_the_construction_industry==0){
                                                                            $NA_knowledge_of_the_construction_industry = 6;
                                                                        }else{
                                                                            $NA_knowledge_of_the_construction_industry = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->knowledge_of_the_construction_industry==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_knowledge_of_the_construction_industry==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_knowledge_of_the_construction_industry" value="<?php echo $empinfo->knowledge_of_the_construction_industry; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="knowledge_comments" id="" cols="3" rows="3"><?php echo $empinfo->knowledge_comments; ?></textarea>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

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
                                                                        if($empinfo->software_question_1==0){
                                                                            $NA_software_question_1 = 6;
                                                                        }else{
                                                                            $NA_software_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->software_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_software_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_software_question_1" value="<?php echo $empinfo->software_question_1; ?>">
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
                                                                        if($empinfo->software_question_2==0){
                                                                            $NA_software_question_2 = 6;
                                                                        }else{
                                                                            $NA_software_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->software_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_software_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_software_question_2" value="<?php echo $empinfo->software_question_2; ?>">
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
                                                                        if($empinfo->software_question_3==0){
                                                                            $NA_software_question_3 = 6;
                                                                        }else{
                                                                            $NA_software_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->software_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_software_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_software_question_3" value="<?php echo $empinfo->software_question_3; ?>">
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
                                                                        if($empinfo->software_question_4==0){
                                                                            $NA_software_question_4 = 6;
                                                                        }else{
                                                                            $NA_software_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->software_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_software_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_software_question_4" value="<?php echo $empinfo->software_question_4; ?>">
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
                                                                        if($empinfo->software_question_5==0){
                                                                            $NA_software_question_5 = 6;
                                                                        }else{
                                                                            $NA_software_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->software_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_software_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='software_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_software_question_5" value="<?php echo $empinfo->software_question_5; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="software_comments" id="" cols="3" rows="3"><?php echo $empinfo->software_comments; ?></textarea>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>
                                                                            1. Organizes their time to allow for multiple daily tasks without issues
=======
                                                                        <p id="communication_text_Q1">
                                                                            1. Communicates effectively with teammates to accomplish common goals and objectives <span class="gray-font-scoring"> (sets the highest score in this category)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
<<<<<<< HEAD
                                                                                title="<span>Allocates time in their day properly to manage more than one task to be addressed</span>">
=======
                                                                                title="<span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                            </i>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
<<<<<<< HEAD
                                                                        if($empinfo->reliability_question_1==0){
                                                                            $NA_reliability_question_1 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                        if($empinfo->communication_question_1==0){
                                                                            $NA_communication_question_1 = 6;
                                                                        }else{
                                                                            $NA_communication_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_reliability_question_1" value="<?php echo $empinfo->reliability_question_1; ?>">
=======
                                                                        <input type="hidden" name="e_communication_question_1" value="<?php echo $empinfo->communication_question_1; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
                                                                        <p>
                                                                            2. Finishes tasks without constant supervision within set deadlines
=======
                                                                    <p id="communication_text_Q2">
                                                                        2. Swiftly answers to messages/calls to coordinate with colleagues
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Messages, surveys, and polls are answered immediately as if you were working in the office. Productivity cannot be affected by a WFH setup</span>">
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                    <?php
                                                                        if($empinfo->communication_question_2==0){
                                                                            $NA_communication_question_2 = 6;
                                                                        }else{
                                                                            $NA_communication_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_communication_question_2" value="<?php echo $empinfo->communication_question_2; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p id="communication_text_Q3">
                                                                            3. Proactively communicates with supervisors for questions, feedback, job challenges
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
<<<<<<< HEAD
                                                                                title="<span>Self-sufficient with their skills and efficient with their questions to allow for their supervisor and teammates to work with minimum interruption</span>">
                                                                            </i>                
=======
                                                                                title="<span>Keeps an open channel of communication with their supervisor to ensure all tasks are clear, deadlines are on track, and asks for feedback on their performance</span>">
                                                                            </i>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
<<<<<<< HEAD
                                                                        if($empinfo->reliability_question_2==0){
                                                                            $NA_reliability_question_2 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                        if($empinfo->communication_question_3==0){
                                                                            $NA_communication_question_3 = 6;
                                                                        }else{
                                                                            $NA_communication_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_reliability_question_2" value="<?php echo $empinfo->reliability_question_2; ?>">
=======
                                                                        <input type="hidden" name="e_communication_question_3" value="<?php echo $empinfo->communication_question_3; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
                                                                    <p>
                                                                        3. Produces deliverables that are above expectation
=======
                                                                    <p id="communication_text_Q4">
                                                                        4. Communicates effectively with teammates to accomplish common goals and objectives 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
<<<<<<< HEAD
                                                                            title="<span>Proactively provides further information, data or drawings to compliment and support an argument to enhance deliverables</span>">
=======
                                                                            title="<span>Communicates clearly and effectively with teammates to help each other with your tasks to be more efficient together, avoid mistakes, and provide technical support for the team</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
<<<<<<< HEAD
                                                                        if($empinfo->reliability_question_3==0){
                                                                            $NA_reliability_question_3 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                        if($empinfo->communication_question_4==0){
                                                                            $NA_communication_question_4 = 6;
                                                                        }else{
                                                                            $NA_communication_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_reliability_question_3" value="<?php echo $empinfo->reliability_question_3; ?>">
=======
                                                                        <input type="hidden" name="e_communication_question_4" value="<?php echo $empinfo->communication_question_4; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
<<<<<<< HEAD
                                                                    <p>
                                                                        4. Takes ownership of job duties and hold himself/herself accountable for them <span class="gray-font-scoring">(independent scoring)</span>
=======
                                                                    <p id="communication_text_Q5">
                                                                        5. Clear with time schedules for leave requests, sick leaves, offset hours <span class="gray-font-scoring">(independent scoring)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
<<<<<<< HEAD
                                                                            title="<span>Proud on their work to share with teammates to strengthen the knowledge and backbone of the team</span>">
=======
                                                                            title="<span>Organizes their time clearly with the company’s calendar so that everybody is aware of their schedule, working conditions, and holiday plans</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
<<<<<<< HEAD
                                                                        if($empinfo->reliability_question_4==0){
                                                                            $NA_reliability_question_4 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                        if($empinfo->communication_question_5==0){
                                                                            $NA_communication_question_5 = 6;
                                                                        }else{
                                                                            $NA_communication_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_reliability_question_4" value="<?php echo $empinfo->reliability_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        5. Strive to cultivate and maintain positive working relationships and respect towards co-workers <span class="gray-font-scoring">(independent scoring)</span>
=======
                                                                        <input type="hidden" name="e_communication_question_5" value="<?php echo $empinfo->communication_question_5; ?>">
                                                                    </td>
                                                                </tr>

                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p id="communication_text_Q5">
                                                                        6. Communicates well with their client <span class="gray-font-scoring">(for BIM Coordinators, BIM Managers, Support team, independent scoring)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
<<<<<<< HEAD
                                                                            title="<span>Maintains a respectful, collaborative environment to allow for good moral support in achieving team goals</span>">
=======
                                                                            title="<span>Understands properly the requests of the client, set expectations correctly, and asks the necessary questions to execute the project without problems and delays</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
<<<<<<< HEAD
                                                                        if($empinfo->reliability_question_5==0){
                                                                            $NA_reliability_question_5 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
=======
                                                                        if($empinfo->communication_question_6==0){
                                                                            $NA_communication_question_6 = 6;
                                                                        }else{
                                                                            $NA_communication_question_6 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->communication_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_communication_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='communication_question_6' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
<<<<<<< HEAD
                                                                        <input type="hidden" name="e_reliability_question_5" value="<?php echo $empinfo->reliability_question_5; ?>">
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
                                                                        if($empinfo->reliability_question_6==0){
                                                                            $NA_reliability_question_6 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_6 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_6" value="<?php echo $empinfo->reliability_question_6; ?>">
=======
                                                                        <input type="hidden" name="e_communication_question_6" value="<?php echo $empinfo->communication_question_6; ?>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
<<<<<<< HEAD
                                                                        <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="3"><?php echo $empinfo->reliability_comments; ?></textarea>
=======
                                                                        <textarea class="form-control" name="communication_comments" cols="3" rows="3"><?php echo $empinfo->communication_comments; ?></textarea>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
<<<<<<< HEAD
                                                                        1. Adheres to the task deadlines set by the supervisor
=======
                                                                        1. Adheres to the task deadlines set by the supervisor <span class="gray-font-scoring">(sets the highest score in this category)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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
                                                                        if($empinfo->time_management_question_1==0){
                                                                            $NA_time_management_question_1 = 6;
                                                                        }else{
                                                                            $NA_time_management_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->time_management_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_time_management_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_time_management_question_1" value="<?php echo $empinfo->time_management_question_1; ?>">
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
                                                                        if($empinfo->time_management_question_2==0){
                                                                            $NA_time_management_question_2 = 6;
                                                                        }else{
                                                                            $NA_time_management_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->time_management_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_time_management_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_time_management_question_2" value="<?php echo $empinfo->time_management_question_2; ?>">
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
                                                                        if($empinfo->time_management_question_3==0){
                                                                            $NA_time_management_question_3 = 6;
                                                                        }else{
                                                                            $NA_time_management_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->time_management_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_time_management_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_time_management_question_3" value="<?php echo $empinfo->time_management_question_3; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
<<<<<<< HEAD
                                                                        4. Timetracks required working hours daily on Bitrix24
=======
                                                                        4. Organizes their time to allow for multiple daily tasks without issues 
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
<<<<<<< HEAD
                                                                            title="<span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>">
=======
                                                                            title="<span>Allocates time in their day properly to manage more than one task to be addressed</span>">
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->time_management_question_4==0){
                                                                            $NA_time_management_question_4 = 6;
                                                                        }else{
                                                                            $NA_time_management_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->time_management_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_time_management_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_time_management_question_4" value="<?php echo $empinfo->time_management_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
<<<<<<< HEAD
                                                                            5. Follows the scheduled work shift <span class="gray-font-scoring">(independent scoring)</span>
                                                                            <i class='bx bx-info-circle'
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-offset="0,4"
                                                                                data-bs-placement="right"
                                                                                data-bs-html="true"
                                                                                title="<span>Follows the scheduled work shifts specially with their WFH and Office hours</span>">
                                                                            </i>
                                                                        </p>
=======
                                                                        5. Timetracks required working hours daily on Bitrix24
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Timetracks accurately their tasks to reflect their daily work without forgetting to start or pause tasks. Every working day should result in a range between 8 to 10 hours, producing an average of 160 hours per month</span>">
                                                                        </i>
                                                                    </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->time_management_question_5==0){
                                                                            $NA_time_management_question_5 = 6;
                                                                        }else{
                                                                            $NA_time_management_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->time_management_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_time_management_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_time_management_question_5" value="<?php echo $empinfo->time_management_question_5; ?>">
                                                                    </td>
                                                                </tr>
<<<<<<< HEAD
=======

                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        6. Follows the scheduled work shift <span class="gray-font-scoring">(independent scoring)</span>
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
                                                                        if($empinfo->time_management_question_6==0){
                                                                            $NA_time_management_question_6 = 6;
                                                                        }else{
                                                                            $NA_time_management_question_6 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->time_management_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_time_management_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='time_management_question_6' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_time_management_question_6" value="<?php echo $empinfo->time_management_question_6; ?>">
                                                                    </td>
                                                                </tr>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="time_management_comments" id="" cols="3" rows="3"><?php echo $empinfo->time_management_comments; ?></textarea>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

<<<<<<< HEAD
=======
                                                    <div class="tab-pane fade" id="navs-justified-team-management" role="tabpanel">
                                                        <h4>Team Management</h4>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        1. Ability to Manage the team, identify their skills and allocate task <span class="gray-font-scoring">(sets the highest score in this category)</span>
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>BIM Coordinators: Attends the questions and concerns of the modellers and identify if there are any potential skills mismatch or outstanding candidates.</span> <span>BIM Managers: Ensure the team is compatible in terms of skills, knowledge and communication. Identify if there are any potential skills mismatches or outstanding candidates</span>">
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->team_management_question_1==0){
                                                                            $NA_team_management_question_1 = 6;
                                                                        }else{
                                                                            $NA_team_management_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->team_management_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_team_management_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_team_management_question_1" value="<?php echo $empinfo->team_management_question_1; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        2. Prepare and administer employee’s performance evaluation 
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Evaluates the performance of team members, provides feedback for improvement, and suggest follow-up actions</span>">
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->team_management_question_2==0){
                                                                            $NA_team_management_question_2 = 6;
                                                                        }else{
                                                                            $NA_team_management_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->team_management_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_team_management_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_team_management_question_2" value="<?php echo $empinfo->team_management_question_2; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        3. Observe for the team’s compatibility
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Monitor the different personalities within the team to avoid clashes, conflicts and encourage good team collaboration</span>">
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->team_management_question_3==0){
                                                                            $NA_team_management_question_3 = 6;
                                                                        }else{
                                                                            $NA_team_management_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->team_management_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_team_management_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_team_management_question_3" value="<?php echo $empinfo->team_management_question_3; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                    4. Bitrix24 Time Reports and Team’s Time Tracking <span class="gray-font-scoring">(only for BIM Managers)</span>
                                                                    <i class='bx bx-info-circle'
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-offset="0,4"
                                                                        data-bs-placement="right"
                                                                        data-bs-html="true"
                                                                        title="<span>Ensuring that the team members are properly time tracking an average of 8 hours daily and justifying that the time spent on the tasks are fair to the amount of work</span>">
                                                                    </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->team_management_question_4==0){
                                                                            $NA_team_management_question_4 = 6;
                                                                        }else{
                                                                            $NA_team_management_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->team_management_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_team_management_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_team_management_question_4" value="<?php echo $empinfo->team_management_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        5. Ensuring the team has all the tools and licenses necessary for the project <span class="gray-font-scoring">(only for BIM Managers)</span>
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Making sure that the teams have all the tools, licenses including the necessary computer specs, softwares and data for the project</span>">
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->team_management_question_5==0){
                                                                            $NA_team_management_question_5 = 6;
                                                                        }else{
                                                                            $NA_team_management_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->team_management_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_team_management_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='team_management_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_team_management_question_5" value="<?php echo $empinfo->team_management_question_5; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="team_management_comments" id="" cols="3" rows="3"><?php echo $empinfo->team_management_comments; ?></textarea>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        1. Finishes tasks without constant supervision within set deadlines
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
                                                                        if($empinfo->reliability_question_1==0){
                                                                            $NA_reliability_question_1 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_1" value="<?php echo $empinfo->reliability_question_1; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        2. Produces deliverables that are above expectation
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
                                                                        if($empinfo->reliability_question_2==0){
                                                                            $NA_reliability_question_2 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_2" value="<?php echo $empinfo->reliability_question_2; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        3. Takes ownership of job duty and holds himself/herself accountable for them 
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Proud of their work to share with teammates to strengthen the knowledge and backbone of the team</span>">
                                                                        </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->reliability_question_3==0){
                                                                            $NA_reliability_question_3 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_3" value="<?php echo $empinfo->reliability_question_3; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        4. Strive to cultivate and maintain positive working relationships and respect toward co-workers
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
                                                                        if($empinfo->reliability_question_4==0){
                                                                            $NA_reliability_question_4 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_4" value="<?php echo $empinfo->reliability_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                    5. Keeps a tidy workspace and proper care of the company’s equipment
                                                                    <i class='bx bx-info-circle'
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-offset="0,4"
                                                                        data-bs-placement="right"
                                                                        data-bs-html="true"
                                                                        title="<span>Maintains a clean working environment on the company’s premises, particularly for shared workstations. Takes care of their assigned work equipment</span>">
                                                                    </i>
                                                                    </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->reliability_question_5==0){
                                                                            $NA_reliability_question_5 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_5" value="<?php echo $empinfo->reliability_question_5; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
                                                                        6. Attends and addresses company’s mandatory events/queries  <span class="gray-font-scoring">(independent scoring)</span>
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Including workshops, weekly meetings, surveys and questions addressed to the entire company</span>">
                                                                        </i>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->reliability_question_6==0){
                                                                            $NA_reliability_question_6 = 6;
                                                                        }else{
                                                                            $NA_reliability_question_6 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->reliability_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_reliability_question_6==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_reliability_question_6" value="<?php echo $empinfo->reliability_question_6; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="3"><?php echo $empinfo->reliability_comments; ?></textarea>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
>>>>>>> 8ce454d (new update employee portal v1.1.0)

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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
<<<<<<< HEAD
                                                                        1. Adapts to new project standards, new job requirements in a short amount of time
=======
                                                                        1. Adapts to new project standards, new job requirements in a short amount of time <span class="gray-font-scoring">(sets the highest score in this category)</span>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
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
                                                                        if($empinfo->adaptability_productivity_question_1==0){
                                                                            $NA_adaptability_productivity_question_1 = 6;
                                                                        }else{
                                                                            $NA_adaptability_productivity_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->adaptability_productivity_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }elseif($NA_adaptability_productivity_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_adaptability_productivity_question_1" value="<?php echo $empinfo->adaptability_productivity_question_1; ?>">
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
<<<<<<< HEAD
                                                                    </p>
=======
                                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->adaptability_productivity_question_2==0){
                                                                            $NA_adaptability_productivity_question_2 = 6;
                                                                        }else{
                                                                            $NA_adaptability_productivity_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->adaptability_productivity_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_adaptability_productivity_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_adaptability_productivity_question_2" value="<?php echo $empinfo->adaptability_productivity_question_2; ?>">
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
<<<<<<< HEAD
                                                                            title="<span>Desires to learn new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>">
                                                                        </i>
                                                                    </p>
=======
                                                                            title="<span>Desires to gain new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>">
                                                                        </i>
                                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->adaptability_productivity_question_3==0){
                                                                            $NA_adaptability_productivity_question_3 = 6;
                                                                        }else{
                                                                            $NA_adaptability_productivity_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->adaptability_productivity_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_adaptability_productivity_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_adaptability_productivity_question_3" value="<?php echo $empinfo->adaptability_productivity_question_3; ?>">
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
<<<<<<< HEAD
                                                                    </p>
=======
                                                                        </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->adaptability_productivity_question_4==0){
                                                                            $NA_adaptability_productivity_question_4 = 6;
                                                                        }else{
                                                                            $NA_adaptability_productivity_question_4 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->adaptability_productivity_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_adaptability_productivity_question_4==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_adaptability_productivity_question_4" value="<?php echo $empinfo->adaptability_productivity_question_4; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                    <p>
<<<<<<< HEAD
                                                                        5. Handles multiple projects and teams simultaneously <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                        <i class='bx bx-info-circle'
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-offset="0,4"
                                                                            data-bs-placement="right"
                                                                            data-bs-html="true"
                                                                            title="<span>Able to supervise more than one team at once without loosing sight of each project’s requirements, goals and challenges</span>">
                                                                        </i>
                                                                        </p>
=======
                                                                    5. Handles multiple projects and teams simultaneously <span class="gray-font-scoring">(for Supervisors only, independent scoring)</span>
                                                                    <i class='bx bx-info-circle'
                                                                        data-bs-toggle="tooltip"
                                                                        data-bs-offset="0,4"
                                                                        data-bs-placement="right"
                                                                        data-bs-html="true"
                                                                        title="<span>Able to supervise more than one team at once without loosing sight of each project’s requirements, goals and challenges</span>">
                                                                    </i>
                                                                    </p>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->adaptability_productivity_question_5==0){
                                                                            $NA_adaptability_productivity_question_5 = 6;
                                                                        }else{
                                                                            $NA_adaptability_productivity_question_5 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->adaptability_productivity_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_adaptability_productivity_question_5==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_adaptability_productivity_question_5" value="<?php echo $empinfo->adaptability_productivity_question_5; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="productivity_comments" id="" cols="3" rows="3"><?php echo $empinfo->productivity_comments; ?></textarea>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

<<<<<<< HEAD

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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>1. Identifies potential issues</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->initiative_proactive_question_1==0){
                                                                            $NA_initiative_proactive_question_1 = 6;
                                                                        }else{
                                                                            $NA_initiative_proactive_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->initiative_proactive_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_initiative_proactive_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_1_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_initiative_proactive_question_1" value="<?php echo $empinfo->initiative_proactive_question_1; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>2. Proposes and suggests new ideas</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->initiative_proactive_question_2==0){
                                                                            $NA_initiative_proactive_question_2 = 6;
                                                                        }else{
                                                                            $NA_initiative_proactive_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->initiative_proactive_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_initiative_proactive_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_2_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_initiative_proactive_question_2" value="<?php echo $empinfo->initiative_proactive_question_2; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>3. Going extra mile if needed</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->initiative_proactive_question_3==0){
                                                                            $NA_initiative_proactive_question_3 = 6;
                                                                        }else{
                                                                            $NA_initiative_proactive_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->initiative_proactive_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_initiative_proactive_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_question_3_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_initiative_proactive_question_3" value="<?php echo $empinfo->initiative_proactive_question_3; ?>">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="initiative_proactive_comments" cols="3" rows="3"><?php echo $empinfo->initiative_proactive_comments; ?></textarea>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>1. Ability to think outside the box</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->creativity_problem_question_1==0){
                                                                            $NA_creativity_problem_question_1 = 6;
                                                                        }else{
                                                                            $NA_creativity_problem_question_1 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->creativity_problem_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_creativity_problem_question_1==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_1_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_creativity_problem_question_1" value="<?php echo $empinfo->creativity_problem_question_1; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>2. Offers creative solutions</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->creativity_problem_question_2==0){
                                                                            $NA_creativity_problem_question_2 = 6;
                                                                        }else{
                                                                            $NA_creativity_problem_question_2 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->creativity_problem_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_creativity_problem_question_2==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_2_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_creativity_problem_question_2" value="<?php echo $empinfo->creativity_problem_question_2; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
                                                                        <p>3. Explores new ideas</p>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if($empinfo->creativity_problem_question_3==0){
                                                                            $NA_creativity_problem_question_3 = 6;
                                                                        }else{
                                                                            $NA_creativity_problem_question_3 = false;
                                                                        }
                                                                        $x = 1;
                                                                        while($x <= 6) {
                                                                        if($empinfo->creativity_problem_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        elseif($NA_creativity_problem_question_3==$x){
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input checked-edit' value='0' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        else{
                                                                            echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_question_3_new' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_creativity_problem_question_3" value="<?php echo $empinfo->creativity_problem_question_3; ?>">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="creativity_problem_solving_comments" id="" cols="3" rows="3"><?php echo $empinfo->creativity_problem_solving_comments; ?></textarea>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
=======
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                                </div>
                                            </div>
                                        </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-success me-2">Update changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                            </div>
                    </div>
                </div>
            </div>
            </form>
        </div>