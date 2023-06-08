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
                                        <option value="30">Monthly</option>
                                        <option value="90">Quarterly</option>
                                        <option value="182">Half Yearly</option>
                                        <option value="365">Yearly</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="designation" class="form-label">EVALUATION Start</label>
                                    <input class="form-control" type="date" name="emp_performance_start_date" id="start_date" value="<?= date('Y-m-d'); ?>" required />
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label for="designation" class="form-label">EVALUATION End</label>
                                    <input class="form-control" id="end_date" type="date" value="" disabled>
                                    <input type="hidden" name="emp_performance_end_date" id="end_date_set" value="">                                 
                                </div>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>
                                                                    
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
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_communication_question_1" value="<?php echo $empinfo->communication_question_1; ?>">
                                                                    </td>
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
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_communication_question_3" value="<?php echo $empinfo->communication_question_3; ?>">
                                                                    </td>
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
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_communication_question_4" value="<?php echo $empinfo->communication_question_4; ?>">
                                                                    </td>
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
                                                                        }
                                                                        $x++;
                                                                        }
                                                                        ?>
                                                                        <input type="hidden" name="e_communication_question_5" value="<?php echo $empinfo->communication_question_5; ?>">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <h4>Comments
                                                                            <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                            </i>
                                                                        </h4>
                                                                        <textarea class="form-control" name="communication_comments" cols="3" rows="3"><?php echo $empinfo->communication_comments; ?></textarea>
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

                                                                        <span class="radio-inline-num" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<span>Not Applicable</span>">N/A</span>

                                                                    </td>
                                                                </tr>
                                                                <tr class="remove_bb">
                                                                    <td>
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
                                                                    </p>
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
                                                                            title="<span>Desires to learn new knowledge to expand their skill set with further education, experimenting with new software and tools, and provide new solutions to their workflow</span>">
                                                                        </i>
                                                                    </p>
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
                                                                    </p>
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