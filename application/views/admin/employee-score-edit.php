<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="<?php echo base_url('Admin/showEmployeeScoreInfo/'.$re_evaluate->emp_performance_id); ?>"><i class='bx bx-left-arrow-alt'></i> Employee Performance</a> /</span> Edit Employee Performance</h4>
        <form id="formAccountSettings" method="POST" action="<?php echo base_url('Admin/submitEditEmpScore'); ?>" data-parsley-validate data-toggle="validator">
                        <input type="hidden" name='performance_id' value='<?php echo $re_evaluate->emp_performance_id; ?>'>
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
                                <div class="mb-3 col-md-6">
                                    <label for="designation" class="form-label">EVALUATION Start</label>
                                    <input class="form-control" type="date" name="performance_start_date" value="<?php echo $re_evaluate->emp_performance_start_date; ?>">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="designation" class="form-label">EVALUATION End</label>
                                    <input class="form-control" type="date" name="performance_end_date" value="<?php echo $re_evaluate->emp_performance_end_date; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12">                                
                                        <div class="nav-align-top mb-2">
                                        <li class="nav-item">
                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-communication" aria-controls="navs-justified-communication" aria-selected="true">
                                      Communication
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge-performance" aria-controls="navs-justified-knowledge-performance" aria-selected="false">
                                    Knowledge & Performance
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-quality" aria-controls="navs-justified-quality" aria-selected="false">
                                    Quality & Organization
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-knowledge" aria-controls="navs-justified-knowledge" aria-selected="false">
                                      Knowledge of Job
                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-software" aria-controls="navs-justified-software" aria-selected="false">
                                      Knowledge of Software

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-reliability-reliability-professionalism" aria-controls="navs-justified-reliability-dependability" aria-selected="false">
                                    Reliability & Professionalism

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-time-management" aria-controls="navs-justified-time-management" aria-selected="false">
                                    Task & Time Management

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-adaptability" aria-controls="navs-justified-adaptability" aria-selected="false">
                                    Adaptability & Proactivity

                                    </button>
                                    </li>

                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-initiative-proactive" aria-controls="navs-justified-initiative-proactive" aria-selected="false">

                                    Initiative & Proactive

                                    </button>
                                    </li>


                                    <li class="nav-item">
                                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-creativity-problem-solving" aria-controls="navs-justified-creativity-problem-solving" aria-selected="false">

                                    Creativity & Problem Solving

                                    </button>
                                    </li>
                                    <div class="tab-content">

                                    <div class="tab-pane fade show active" id="navs-justified-communication" role="tabpanel">
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
                                                            $x = 1;
                                                            while($x <= 5) {
                                                            if($re_evaluate->m_communication_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input m-checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1_old' class='form-check-input checked-edit' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_1' class='form-check-input' value='$x' /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="communication_question_1_old" value="<?php echo $re_evaluate->m_communication_question_1; ?>">
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
                                                            $x = 1;
                                                            while($x <= 5) {
                                                            if($re_evaluate->m_communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input  m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_2==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="communication_question_2_old" value="<?php echo $re_evaluate->m_communication_question_2; ?>">
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
                                                            $x = 1;
                                                            while($x <= 5) {
                                                            if($re_evaluate->m_communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_3==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="communication_question_3_old" value="<?php echo $re_evaluate->m_communication_question_3; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                4. Clear with time schedules for leave requests, sick leaves, offset hours
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
                                                            $x = 1;
                                                            while($x <= 5) {
                                                            if($re_evaluate->m_communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_4==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="communication_question_4_old" value="<?php echo $re_evaluate->m_communication_question_4; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Communicates well with their client
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
                                                            $x = 1;
                                                            while($x <= 5) {
                                                            if($re_evaluate->m_communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->communication_question_5==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='communication_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <input type="hidden" name="communication_question_5_old" value="<?php echo $re_evaluate->m_communication_question_5; ?>">
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bxs-square-rounded'></i>
                                                            </span> 
                                                            <?php  $comm_avg= $re_evaluate->communication_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bxs-square-rounded'></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_communication_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <input type="hidden" name="m_communication_emp_avg_old" value="<?php echo $re_evaluate->m_communication_emp_avg; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="communication_comments" cols="3" rows="3"><?php echo $re_evaluate->communication_comments; ?></textarea>
                                                            <input type="hidden" name="communication_comments_old" value="<?php echo $re_evaluate->communication_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-knowledge-performance" role="tabpanel">
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
                                                            $x = 1;
                                                            while($x <= 5) {
                                                            if($re_evaluate->m_knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                            }elseif($re_evaluate->knowledge_performance_question_1==$x){
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            else{
                                                                echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_1' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                            }
                                                            $x++;
                                                            }
                                                            ?>
                                                            <input type="hidden" name="knowledge_performance_question_1_old" value="<?php echo $re_evaluate->m_knowledge_performance_question_1; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='productivity_absence_or_minimum' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_performance_question_2_old" value="<?php echo $re_evaluate->m_knowledge_performance_question_2; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_performance_question_3_old" value="<?php echo $re_evaluate->m_knowledge_performance_question_3; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            4. Desire to learn new skills and industry knowledge to improve and grow in your role
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_performance_question_4_old" value="<?php echo $re_evaluate->m_knowledge_performance_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            5. Shows the ability to supervise a team to handle a project
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_performance_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_performance_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_performance_question_5_old" value="<?php echo $re_evaluate->m_knowledge_performance_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bxs-square-rounded'></i>
                                                            </span> 
                                                            <?php  $comm_avg= $re_evaluate->knowledge_performance_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bxs-square-rounded'></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_knowledge_performance_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <input type="hidden" name="m_productivity_emp_avg_old" value="<?php echo $re_evaluate->m_productivity_emp_avg; ?>">
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="productivity_comments" cols="3" rows="3" placeholder="Please Enter Comments"><?php echo $re_evaluate->productivity_comments; ?></textarea>
                                                            <input type="hidden" name="productivity_comments_old" value="<?php echo $re_evaluate->productivity_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-quality" role="tabpanel">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_1' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="quality_question_1_old" value="<?php echo $re_evaluate->m_quality_question_1; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="quality_question_2_old" value="<?php echo $re_evaluate->m_quality_question_2; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="quality_question_3_old" value="<?php echo $re_evaluate->m_quality_question_3; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="quality_question_4_old" value="<?php echo $re_evaluate->m_quality_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            5. Follows the correct workflow set for modelling and drawings
                                                            <i class='bx bx-info-circle'
                                                                data-bs-toggle="tooltip"
                                                                data-bs-offset="0,4"
                                                                data-bs-placement="right"
                                                                data-bs-html="true"
                                                                title="<span>Follows the company work protocol for naming of files, families, etc. Files are organized correctly in the server</span>">
                                                            </i>
                                                        </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->quality_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='quality_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="quality_question_5_old" value="<?php echo $re_evaluate->m_quality_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bxs-square-rounded'></i>
                                                            </span> 
                                                            <?php  $comm_avg= $re_evaluate->quality_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bxs-square-rounded'></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_quality_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <input type="hidden" name="m_quality_emp_avg_old" value="<?php echo $re_evaluate->m_quality_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="quality_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->quality_comments; ?></textarea>
                                                            <input type="hidden" name="quality_comments_old" value="<?php echo $re_evaluate->quality_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-knowledge" role="tabpanel">
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
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Understanding of BIM project standards and portfolio</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_standards_and_portfolio==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_standards_and_portfolio' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_standards_and_portfolio_old" value="<?php echo $re_evaluate->m_knowledge_standards_and_portfolio; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Understanding of BIM project requirements</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_bim_project_requirements==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_bim_project_requirements' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_bim_project_requirements_old" value="<?php echo $re_evaluate->m_knowledge_bim_project_requirements; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Knowledge of the construction industry including ARC, STR, MEP, and BIM standards</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->knowledge_of_the_construction_industry==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='knowledge_of_the_construction_industry' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="knowledge_of_the_construction_industry_old" value="<?php echo $re_evaluate->m_knowledge_of_the_construction_industry; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bxs-square-rounded'></i>
                                                            </span> 
                                                            <?php  $comm_avg= $re_evaluate->knowledge_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bxs-square-rounded'></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_knowledge_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <input type="hidden" name="m_knowledge_emp_avg_old" value="<?php echo $re_evaluate->m_knowledge_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="knowledge_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->knowledge_comments; ?></textarea>
                                                            <input type="hidden" name="knowledge_comments_old" value="<?php echo $re_evaluate->knowledge_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>



                                    <div class="tab-pane fade" id="navs-justified-software" role="tabpanel">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_1' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="software_question_1_old" value="<?php echo $re_evaluate->m_software_question_1; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="software_question_2_old" value="<?php echo $re_evaluate->m_software_question_2; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="software_question_3_old" value="<?php echo $re_evaluate->m_software_question_3; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="software_question_4_old" value="<?php echo $re_evaluate->m_software_question_4; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                                5. Follows the correct workflow set for modelling and drawings
                                                                <i class='bx bx-info-circle'
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-offset="0,4"
                                                                    data-bs-placement="right"
                                                                    data-bs-html="true"
                                                                    title="<span>Follows the company work protocol for naming of files, families, etc. Files are organized correctly in the server</span>">
                                                                </i>
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->software_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='software_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="software_question_5_old" value="<?php echo $re_evaluate->m_software_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                    <td>
                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-emp">
                                                                Employee <i class='bx bxs-square-rounded'></i>
                                                            </span> 
                                                            <?php  $comm_avg= $re_evaluate->software_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>

                                                        <div class="re-update-score-box">
                                                            <span class="indi-re-avg-manager">
                                                                Manager <i class='bx bxs-square-rounded'></i>
                                                            </span>
                                                            <?php  $comm_avg= $re_evaluate->m_software_emp_avg; ?>
                                                            <?php if($comm_avg <= 1): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php elseif($comm_avg <= 5): ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php else: ?>
                                                            <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                            <?php endif; ?>
                                                        </div>
                                                        <input type="hidden" name="m_software_emp_avg_old" value="<?php echo $re_evaluate->m_software_emp_avg; ?>">
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="software_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->software_comments; ?></textarea>
                                                            <input type="hidden" name="software_comments_old" value="<?php echo $re_evaluate->software_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-reliability-reliability-professionalism" role="tabpanel">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_1==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_1' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="reliability_question_1_old" value="<?php echo $re_evaluate->m_reliability_question_1; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_2==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="reliability_question_2_old" value="<?php echo $re_evaluate->m_reliability_question_2; ?>">
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_3==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="reliability_question_3_old" value="<?php echo $re_evaluate->m_reliability_question_3; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                            4. Takes ownership of job duties and hold himself/herself accountable for them
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_4==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="reliability_question_4_old" value="<?php echo $re_evaluate->m_reliability_question_4; ?>">

                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>
                                                                5. Strive to cultivate and maintain positive working relationships and respect towards co-workers
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_5==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="reliability_question_5_old" value="<?php echo $re_evaluate->m_reliability_question_5; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                        <p>
                                                            6. Keeps a tidy workspace and proper care of the company’s equipment
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
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->reliability_question_6==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='reliability_question_6' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="reliability_question_6_old" value="<?php echo $re_evaluate->m_reliability_question_6; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bxs-square-rounded'></i>
                                                                </span> 
                                                                <?php  $comm_avg= $re_evaluate->reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bxs-square-rounded'></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_reliability_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <input type="hidden" name="m_reliability_emp_avg_old" value="<?php echo $re_evaluate->m_reliability_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="reliability_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->reliability_comments; ?></textarea>
                                                            <input type="hidden" name="reliability_comments" value="<?php echo $re_evaluate->reliability_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-time-management" role="tabpanel">
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
                                                              $x = 1;
                                                              while($x <= 5) {
                                                              if($re_evaluate->m_time_management_question_1==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                              }elseif($re_evaluate->time_management_question_1==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              else{
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_1' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              $x++;
                                                              }
                                                          ?>
                                                          <input type="hidden" name="time_management_question_1_old" value="<?php echo $re_evaluate->m_time_management_question_1; ?>">
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
                                                              $x = 1;
                                                              while($x <= 5) {
                                                              if($re_evaluate->m_time_management_question_2==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                              }elseif($re_evaluate->time_management_question_2==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              else{
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              $x++;
                                                              }
                                                          ?>
                                                          <input type="hidden" name="time_management_question_2_old" value="<?php echo $re_evaluate->m_time_management_question_2; ?>">
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
                                                              $x = 1;
                                                              while($x <= 5) {
                                                              if($re_evaluate->m_time_management_question_3==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                              }elseif($re_evaluate->time_management_question_3==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              else{
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              $x++;
                                                              }
                                                          ?>
                                                          <input type="hidden" name="time_management_question_3_old" value="<?php echo $re_evaluate->m_time_management_question_3; ?>">
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
                                                              $x = 1;
                                                              while($x <= 5) {
                                                              if($re_evaluate->m_time_management_question_4==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                              }elseif($re_evaluate->time_management_question_4==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              else{
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              $x++;
                                                              }
                                                          ?>
                                                          <input type="hidden" name="time_management_question_4_old" value="<?php echo $re_evaluate->m_time_management_question_4; ?>">
                                                      </td>
                                                  </tr>
                                                  <tr class="remove_bb">
                                                      <td>
                                                            <p>
                                                                5. Follows the scheduled work shift
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
                                                              $x = 1;
                                                              while($x <= 5) {
                                                              if($re_evaluate->m_time_management_question_5==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                              }elseif($re_evaluate->time_management_question_5==$x){
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              else{
                                                                  echo "<label class='radio-inline'> <input type='radio' name='time_management_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                              }
                                                              $x++;
                                                              }
                                                          ?>
                                                          <input type="hidden" name="time_management_question_5_old" value="<?php echo $re_evaluate->m_time_management_question_5; ?>">
                                                      </td>
                                                  </tr>
                                                  <tr class="remove_bb">
                                                      <td>
                                                          <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                      </td>
                                                      <td>

                                                          <div class="re-update-score-box">
                                                              <span class="indi-re-avg-emp">
                                                                  Employee <i class='bx bxs-square-rounded'></i>
                                                              </span> 
                                                              <?php  $comm_avg= $re_evaluate->time_management_emp_avg; ?>
                                                              <?php if($comm_avg <= 1): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg <= 5): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php else: ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php endif; ?>
                                                          </div>

                                                          <div class="re-update-score-box">
                                                              <span class="indi-re-avg-manager">
                                                                  Manager <i class='bx bxs-square-rounded'></i>
                                                              </span>
                                                              <?php  $comm_avg= $re_evaluate->m_time_management_emp_avg; ?>
                                                              <?php if($comm_avg <= 1): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php elseif($comm_avg <= 5): ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php else: ?>
                                                              <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                              <?php endif; ?>
                                                          </div>
                                                          <input type="hidden" name="m_time_management_emp_avg_old" value="<?php echo $re_evaluate->m_time_management_emp_avg; ?>">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td colspan="2">
                                                          <h4>Comments
                                                              <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                              </i>
                                                          </h4>
                                                          <textarea class="form-control" name="time_management_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->time_management_comments; ?></textarea>
                                                          <input type="hidden" name="time_management_comments" value="<?php echo $re_evaluate->time_management_comments; ?>">
                                                      </td>
                                                  </tr>
                                              </tbody>
                                        </table>
                                    </div>


                                    <div class="tab-pane fade" id="navs-justified-adaptability" role="tabpanel">
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
                                                          $x = 1;
                                                          while($x <= 5) {
                                                          if($re_evaluate->m_adaptability_productivity_question_1==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }elseif($re_evaluate->adaptability_productivity_question_1==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          else{
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_1' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                          }
                                                      ?>
                                                      <input type="hidden" name="adaptability_productivity_question_1_old" value="<?php echo $re_evaluate->m_adaptability_productivity_question_1; ?>">
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
                                                          $x = 1;
                                                          while($x <= 5) {
                                                          if($re_evaluate->m_adaptability_productivity_question_2==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }elseif($re_evaluate->adaptability_productivity_question_2==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          else{
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_2' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                          }
                                                      ?>
                                                      <input type="hidden" name="adaptability_productivity_question_2_old" value="<?php echo $re_evaluate->m_adaptability_productivity_question_2; ?>">
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
                                                          $x = 1;
                                                          while($x <= 5) {
                                                          if($re_evaluate->m_adaptability_productivity_question_3==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }elseif($re_evaluate->adaptability_productivity_question_3==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          else{
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_3' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                          }
                                                      ?>
                                                      <input type="hidden" name="adaptability_productivity_question_3_old" value="<?php echo $re_evaluate->m_adaptability_productivity_question_3; ?>">
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
                                                          $x = 1;
                                                          while($x <= 5) {
                                                          if($re_evaluate->m_adaptability_productivity_question_4==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }elseif($re_evaluate->adaptability_productivity_question_4==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          else{
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_4' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                          }
                                                      ?>
                                                      <input type="hidden" name="adaptability_productivity_question_4_old" value="<?php echo $re_evaluate->m_adaptability_productivity_question_4; ?>">
                                                  </td>
                                              </tr>
                                              <tr class="remove_bb">
                                                  <td>
                                                    <p>
                                                      5. Handles multiple projects and teams simultaneously
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
                                                          $x = 1;
                                                          while($x <= 5) {
                                                          if($re_evaluate->m_adaptability_productivity_question_5==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                          }elseif($re_evaluate->adaptability_productivity_question_5==$x){
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          else{
                                                              echo "<label class='radio-inline'> <input type='radio' name='adaptability_productivity_question_5' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                          }
                                                          $x++;
                                                          }
                                                      ?>
                                                      <input type="hidden" name="adaptability_productivity_question_5_old" value="<?php echo $re_evaluate->m_adaptability_productivity_question_5; ?>">
                                                  </td>
                                              </tr>
                                              <tr class="remove_bb">
                                                  <td>
                                                      <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                  </td>
                                                  <td>

                                                  <?php  $comm_avg= $re_evaluate->productivity_emp_avg; ?>

                                                      <div class="re-update-score-box">
                                                          <span class="indi-re-avg-emp">
                                                              Employee <i class='bx bxs-square-rounded'></i>
                                                          </span> 
                                                          <?php  $comm_avg= $re_evaluate->productivity_emp_avg; ?>
                                                          <?php if($comm_avg <= 1): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-warning" disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg <= 5): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php else: ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php endif; ?>
                                                      </div>

                                                      <div class="re-update-score-box">
                                                          <span class="indi-re-avg-manager">
                                                              Manager <i class='bx bxs-square-rounded'></i>
                                                          </span>
                                                          <?php  $comm_avg= $re_evaluate->m_productivity_emp_avg; ?>
                                                          <?php if($comm_avg <= 1): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-warning" disabled disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php elseif($comm_avg <= 5): ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php else: ?>
                                                          <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                          <?php endif; ?>
                                                      </div>
                                                      <input type="hidden" name="m_productivity_emp_avg_old" value="<?php echo $re_evaluate->m_productivity_emp_avg; ?>">
                                                  </td>
                                              </tr>
                                              <tr>
                                                  <td colspan="2">
                                                      <h4>Comments
                                                          <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                          </i>
                                                      </h4>
                                                      <textarea class="form-control" name="productivity_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->productivity_comments; ?></textarea>
                                                      <input type="hidden" name="productivity_comments" value="<?php echo $re_evaluate->productivity_comments; ?>">
                                                  </td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="tab-pane fade" id="navs-justified-initiative-proactive" role="tabpanel">
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
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Ability to learn new project standards in a short amount of time</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_initiative_proactive_ability_to_learn_new_project==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_ability_to_learn_new_project' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_ability_to_learn_new_project==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_ability_to_learn_new_project_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_ability_to_learn_new_project' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="initiative_proactive_ability_to_learn_new_project_old" value="<?php echo $re_evaluate->m_initiative_proactive_ability_to_learn_new_project; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Ability to adjust depending on the project needs</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_initiative_proactive_adjust_depending_on_the_project==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_adjust_depending_on_the_project' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_adjust_depending_on_the_project==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_adjust_depending_on_the_project_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_adjust_depending_on_the_project' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="initiative_proactive_adjust_depending_on_the_project_old" value="<?php echo $re_evaluate->m_initiative_proactive_adjust_depending_on_the_project; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Ability to work on multiple projects</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_initiative_proactive_work_on_multiple_projects==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_work_on_multiple_projects' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_work_on_multiple_projects==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_work_on_multiple_projects_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_work_on_multiple_projects' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="initiative_proactive_work_on_multiple_projects_old" value="<?php echo $re_evaluate->m_initiative_proactive_work_on_multiple_projects; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>4. Ability to learn new disciplines, software, and adapt this knowledge to new challenges</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_initiative_proactive_learn_new_disciplines_software==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_learn_new_disciplines_software' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->initiative_proactive_learn_new_disciplines_software==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_learn_new_disciplines_software_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='initiative_proactive_learn_new_disciplines_software' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="initiative_proactive_learn_new_disciplines_software_old" value="<?php echo $re_evaluate->m_initiative_proactive_learn_new_disciplines_software; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                        </td>
                                                        <td>

                                                        <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bxs-square-rounded'></i>
                                                                </span> 
                                                                <?php  $comm_avg= $re_evaluate->p_initiative_proactive_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning" disabled disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bxs-square-rounded'></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_p_initiative_proactive_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning" disabled disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <input type="hidden" name="m_p_initiative_proactive_emp_avg_old" value="<?php echo $re_evaluate->m_p_initiative_proactive_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="initiative_proactive_comments" cols="3" rows="3"><?php echo $re_evaluate->initiative_proactive_comments; ?></textarea>
                                                            <input type="hidden" name="initiative_proactive_comments_old" value="<?php echo $re_evaluate->initiative_proactive_comments; ?>">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                    </div>

                                    <div class="tab-pane fade" id="navs-justified-creativity-problem-solving" role="tabpanel">
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
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>1. Ability to learn new project standards in a short amount of time</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_creativity_problem_solving_learn_new_project==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_learn_new_project' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_solving_learn_new_project==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_learn_new_project_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_learn_new_project' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="creativity_problem_solving_learn_new_project_old" value="<?php echo $re_evaluate->m_creativity_problem_solving_learn_new_project; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>2. Ability to adjust depending on the project needs</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_creativity_problem_solving_depending_project_needs==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_depending_project_needs' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_solving_depending_project_needs==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_depending_project_needs_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_depending_project_needs' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="creativity_problem_solving_depending_project_needs_old" value="<?php echo $re_evaluate->m_creativity_problem_solving_depending_project_needs; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>3. Ability to work on multiple projects</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_creativity_problem_solving_work_multiple_projects==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_work_multiple_projects' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_solving_work_multiple_projects==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_work_multiple_projects_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_work_multiple_projects' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="creativity_problem_solving_work_multiple_projects_old" value="<?php echo $re_evaluate->m_creativity_problem_solving_work_multiple_projects; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                        <td>
                                                            <p>4. Ability to learn new disciplines, software, and adapt this knowledge to new challenges</p>
                                                        </td>
                                                        <td>
                                                            <?php
                                                                $x = 1;
                                                                while($x <= 5) {
                                                                if($re_evaluate->m_creativity_problem_solving_knowledge_to_new_challenges==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_knowledge_to_new_challenges' class='form-check-input m-checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp;&nbsp; </label>";
                                                                }elseif($re_evaluate->creativity_problem_solving_knowledge_to_new_challenges==$x){
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_knowledge_to_new_challenges_old' class='form-check-input checked-edit' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                else{
                                                                    echo "<label class='radio-inline'> <input type='radio' name='creativity_problem_solving_knowledge_to_new_challenges' class='form-check-input' value='$x' disabled /> &nbsp;&nbsp;&nbsp; </label>";
                                                                }
                                                                $x++;
                                                                }
                                                            ?>
                                                            <input type="hidden" name="creativity_problem_solving_knowledge_to_new_challenges_old" value="<?php echo $re_evaluate->m_creativity_problem_solving_knowledge_to_new_challenges; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr class="remove_bb">
                                                            <td>
                                                                <p><strong>Average <i class='bx bx-calculator'></i></strong></p>
                                                            </td>
                                                            <td>

                                                        <div class="re-update-score-box">
                                                                <span class="indi-re-avg-emp">
                                                                    Employee <i class='bx bxs-square-rounded'></i>
                                                                </span> 
                                                                <?php  $comm_avg= $re_evaluate->p_creativity_problem_solving_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning" disabled disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>

                                                            <div class="re-update-score-box">
                                                                <span class="indi-re-avg-manager">
                                                                    Manager <i class='bx bxs-square-rounded'></i>
                                                                </span>
                                                                <?php  $comm_avg= $re_evaluate->m_p_creativity_problem_solving_emp_avg; ?>
                                                                <?php if($comm_avg <= 1): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 1 && $comm_avg <= 2): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-danger" disabled>Not sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg > 2 && $comm_avg < 3): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-warning" disabled disabled>Sufficient <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg >=3 && $comm_avg <=4): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php elseif($comm_avg <= 5): ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Very good <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php else: ?>
                                                                <button type="button" class="btn-p-avg btn btn-outline-success" disabled>Excellent <?php echo $comm_avg; ?> <i class='bx bx-tachometer' ></i></button>
                                                                <?php endif; ?>
                                                            </div>
                                                            <input type="hidden" name="m_p_creativity_problem_solving_emp_avg_old" value="<?php echo $re_evaluate->m_p_creativity_problem_solving_emp_avg; ?>">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <h4>Comments
                                                                <i class='bx bx-info-circle' data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="<i class='bx bx-trending-up bx-xs' ></i> <span>Add performance comments</span>">
                                                                </i>
                                                            </h4>
                                                            <textarea class="form-control" name="creativity_problem_solving_comments" id="" cols="3" rows="3"><?php echo $re_evaluate->creativity_problem_solving_comments; ?></textarea>
                                                            <input type="hidden" name="creativity_problem_solving_comments_old" value="<?php echo $re_evaluate->creativity_problem_solving_comments; ?>">
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
            </div>
        </form>
        </div>