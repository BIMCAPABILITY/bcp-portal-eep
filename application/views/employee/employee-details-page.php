
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold "><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
              <h4 class="fw-bold py-1 mb-4"><span class="text-muted fw-light">Dashboard / </span> Profile Details</h4>
              <div class="row">
                <div class="col-md-12">
                  <?php if($uploaded = $this->session->flashdata('self_emp_update_success')): ?>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <strong><?php echo $uploaded; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <?php elseif($tryAgain = $this->session->flashdata('self_emp_not_updated')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                          <strong><?php echo $tryAgain; ?></strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                        <?php if($uploaded = $this->session->flashdata('emp_profile_added_success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong><?php echo $uploaded; ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if($uploaded = $this->session->flashdata('emp_profile_updated_success')): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <strong><?php echo $uploaded; ?></strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                  </div>
                </div>

                <?php if($individual=='0'): ?>
                  <div class="col-md-12">
                  <div class="card mb-2">
                    <div class="card-body">
                        <span class="emp_edit_btn">
                            <?php if(($empdata->employee_status)==2): ?>
                              <a href="javascript:void(0)" class="badge bg-label-danger">Option Disabled</a>
                            <?php else: ?>
                              <a href="<?php echo base_url('employee/add-employee-profile'); ?>"><i class='bx bx-plus'></i> Add Details</a>
                            <?php endif; ?>
                            
                        </span>
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded img-d-emp"
                          /> 
                        <div class="emp_info">
                            <div>
                                <h3><?php echo $empdata->employee_first_name; ?> <?php echo $empdata->employee_last_name; ?></h3>
                            </div>
                            <div id="emp-d-dd">
                                <span><i class='bx bxs-briefcase-alt-2'></i> <?php echo $empdata->department_name; ?></span> / <span><?php echo $empdata->employee_designation; ?></span></span>
                            </div>
                            
                            <?php if($empinfo): ?>
                                <div class="emp-d-avg-btn">
                                  <span class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                      <div class="dropdown-menu" style="">
                                          <a class="dropdown-item" href="<?php echo base_url('Admin/printEmpDetails/'.$empdata->main_employee_id); ?>"><i class='bx bx-printer'></i> Print</a>
                                          <?php if($signature_img!==0): ?>
                                            <div class="signature_img_sec">
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="<?php echo '#deleteSignature'.$empdata->main_employee_id; ?>" href="javascript:void(0);"><i class='bx bxs-trash' ></i> Delete Signature</a>
                                            </div>
                                          <?php else: ?>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="<?php echo '#addSignature'.$empdata->main_employee_id; ?>" href="javascript:void(0);"><i class='bx bx-pencil'></i> Add Signature</a>
                                          <?php endif; ?>
                                      </div>
                                  </span>
                                </div>
                            <?php else: ?>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label"><b>E-mail:</b> </label>
                            <span><?php echo $empdata->employee_email; ?></span>
                           
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label"><b>Phone Number:</b> </label>
                            <span><?php echo $empdata->employee_number; ?></span>                          
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label"><b>Address:</b> </label>
                            <span><?php echo $empdata->employee_address; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label"><b>City:</b></label>
                            <span><?php echo $empdata->employee_city; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country"><b>Country:</b></label>
                            <span><?php echo $empdata->employee_country; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label"><b>Date Of Joining:</b> </label>
                            <span>
                                <?php 
                                    echo $start_date = date("d-M-Y", strtotime($empdata->employee_doj));
                                ?>
                            </span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <?php 
                                if(($empdata->emp_level)==2){
                                  $level = 'Employee';
                                }elseif(($empdata->emp_level)==3){
                                  $level = 'Manager';
                                }else{
                                  $level = 'Select Level';
                                }
                            ?>
                            <label class="form-label" for="country"><b>Level:</b></label>
                            <span><?php echo $level; ?></span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label"><b>Status:</b> </label>
                                <?php if(($empdata->employee_status)=='1'): ?>
                                    <span class="badge bg-label-success me-1">Active</span>
                                <?php else: ?>
                                    <span class="badge bg-label-danger">Deactivate</span>
                                <?php endif; ?>  
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <?php else: ?>
                  <div class="col-md-12">
                  <div class="card mb-2">
                    <div class="card-body ed-bg">
                        <span class="emp_edit_btn">
                            <?php if(($empdata->employee_status)==2): ?>
                                 <a href="javascript:void(0)" class="badge bg-label-danger">Option Disabled</a>
                            <?php else: ?>
                                <?php if(($emp_check_level->emp_level)==2): ?>
                                  <?php if(($individual->ed_submit_status)==2): ?>
                                      <a href="<?php echo base_url('employee/edit-employee-profile'); ?>"><i class='bx bx-edit-alt'></i> Edit Details</a>
                                  <?php else: ?>
                                      <a href="<?php echo base_url('employee/add-employee-profile'); ?>"><i class='bx bx-plus'></i> Add Details</a>
                                  <?php endif; ?>
                                <?php else: ?>
                                  <?php if(($individual->ed_submit_status)==2): ?>
                                      <a href="<?php echo base_url('employee/edit-employee-profile'); ?>"><i class='bx bx-edit-alt'></i> Edit Details</a>
                                  <?php else: ?>
                                      <a href="<?php echo base_url('employee/add-employee-profile'); ?>"><i class='bx bx-plus'></i> Add Details</a>
                                  <?php endif; ?>
                            <?php endif; ?>
                            <?php endif; ?>

                        </span>
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded img-d-emp"
                          /> 
                        <div class="emp_info">

                            <table class="ed-table-s">
                            <tbody>
                              <tr>
                                <td class="label-gry">Name &nbsp;&nbsp;</td>
                                <td> 
                                  <div class="ed-heah-name"> 
                                    <?php echo $empdata->employee_first_name; ?> <?php echo $empdata->employee_last_name; ?>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="label-gry">Department &nbsp;&nbsp;</td>
                                <td>
                                  <div>
                                    <?php echo $empdata->department_name; ?>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="label-gry">Role</td>
                                <td>
                                  <div>
                                    <?php echo $empdata->employee_designation; ?>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                              <td class="label-gry">DOJ</td>
                                <td>
                                  <span>
                                      <?php 
                                          echo $start_date = date("d-M-Y", strtotime($individual->ed_individual_profile_doj));
                                      ?>
                                  </span>
                                </td>
                              </tr>
                              <tr>
                                <td class="label-gry">
                                  <span>Skills&nbsp;&nbsp;&nbsp;</span>
                                </td>
                                <td>
                                <div class="eep-status-cover set-width-check">
                                <span class="form-check">
                                    <div><label for="disabledCheck1"> ARC </label></div>

                                            <?php if(($skills->ed_arc)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>

                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> STR </label></div>

                                            <?php if(($skills->ed_str)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>

                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> MEP </label></div>

                                            <?php if(($skills->ed_mep)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>

                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> MGMT </label></div>
                                            <?php if(($skills->ed_mgmt)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> DOCS </label></div>
                                            <?php if(($skills->ed_docs)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> 4D </label></div>
                                            <?php if(($skills->ed_4d)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> CLASH </label></div>
                                            <?php if(($skills->ed_clash)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> DYNA </label></div>
                                            <?php if(($skills->ed_dyna)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> RNDR </label></div>
                                            <?php if(($skills->ed_rndr)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> MRKT </label></div>
                                            <?php if(($skills->ed_mrkt)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                        <span class="form-check">
                                            <div><label for="disabledCheck1"> BD </label></div>
                                            <?php if(($skills->ed_bd)==1):?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled checked>
                                            <?php else: ?>
                                                <input class="form-check-input" type="checkbox" value="1" id="disabledCheck1" disabled>
                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="label-gry" style="position: absolute;">Goals</td>
                                <td>
                                    <?php if(($goal->goals_type)=="2023 Week 18") : ?>
                                      <span> 
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Immediate Goals" aria-label="Immediate Goals"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals1" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2023 Week 18</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden1" class="form-control" value="2023 Week 18">
                                                <input type="text" name="goals_description" id="goals_input1" name="" class="form-control" value="<?php echo $goal->goals_description; ?>" disabled />
                                            </span>
                                        </div>
                                    </span>
                                    &nbsp;&nbsp;
                                    <?php elseif(($goal->goals_type)=="2023 Week 45"): ?>
                                    <span> 
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Short term goals to be achieved within 6 months" aria-label="Short term goals to be achieved within 6 months"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals2" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2023 Week 45</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden2" class="form-control" value="2023 Week 45">
                                                <input type="text" name="goals_description" id="goals_input2" class="form-control" value="<?php echo $goal->goals_description; ?>" disabled />
                                            </span>
                                        </div>
                                    </span>
                                    &nbsp;&nbsp;
                                    <?php elseif(($goal->goals_type)=="2024 Week 18"): ?>
                                      <span> 
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Mid term goals to be achieved within 12 months" aria-label="Mid term goals to be achieved within 12 months"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals3" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2024 Week 18</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden3" class="form-control" value="2024 Week 18">
                                                <input type="text" name="goals_description" id="goals_input3" class="form-control" value="<?php echo $goal->goals_description; ?>" disabled />
                                            </span>
                                        </div>
                                    </span>
                                    &nbsp;&nbsp;
                                    <?php elseif(($goal->goals_type)=="2024 Week 45"): ?>
                                      <span> 
                                        <i class="bx bx-info-circle" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="bottom" data-bs-html="true" data-bs-original-title="Long term goals to be achieved within 18 months" aria-label="Long term goals to be achieved within 18 months"></i>
                                        <div class="btn-group">
                                            <button type="button" id="goals4" class="btn btn-xs btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">2024 Week 45</button>
                                            <span class="dropdown-menu" style="">
                                                <input type="hidden" name="goals_type" id="goals_hidden4" class="form-control" value="2024 Week 45">
                                                <input type="text" name="goals_description" id="goals_input4" class="form-control" value="<?php echo $goal->goals_description; ?>" disabled />
                                            </span>
                                        </div>
                                    </span>
                                    <?php else: ?>
                                    <?php endif; ?>
                                </td>
                              </tr>
                              <tr class="mb-5-emp-edit">
                                <td class="label-gry" style="position: absolute;">Level</td>
                                <td>
                                  <?php

                                      if(($empdata->emp_level)==2){
                                        $level = 'Employee';
                                      }elseif(($empdata->emp_level)==3){
                                        $level = 'Manager';
                                      }else{
                                        $level = 'Select Level';
                                      }

                                  ?>
                                  <div><?php echo $level; ?></div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      <div>
                          <div class="eep-status-cover">
                              <span class="label-gry">Status &nbsp;&nbsp;&nbsp;</span>
                                <span class="form-check">
                                    <div><label for="disabledCheck1"> PART </label></div>
                                    <?php if(($status->ed_part_full)==1):?>
                                        <input class="form-check-input" name="test" type="radio" value="1" id="disabledCheck1" disabled checked>
                                    <?php else: ?>
                                        <input class="form-check-input" name="test" type="radio" value="1" id="disabledCheck1" disabled>
                                    <?php endif; ?>
                                </span>
                                <span class="form-check">
                                    <div><label for="disabledCheck1"> FULL </label></div>
                                    <?php if(($status->ed_part_full)==2):?>
                                        <input class="form-check-input" name="test" type="radio" value="2" id="disabledCheck1" disabled checked>
                                    <?php else: ?>
                                        <input class="form-check-input" name="test" type="radio" value="2" id="disabledCheck1" disabled>
                                    <?php endif; ?>
                                </span>
                            </div>
                          </div>
                      </div>
                    </div>
                    <hr class="my-0" />

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                              <div class="ed-basic-mid">
                                  <div class="ed-head-t">
                                      <label for="">Experience</label>
                                  </div>
                                  <div>
                                    <textarea name="" class="form-control" cols="20" rows="10" disabled><?php echo $experience->ed_experience; ?></textarea>
                                  </div>
                                  <?php if($salary): ?>
                                  <div class="ed-head-t">
                                      <label for="">Salary History</label>
                                  </div>
                                   
                                        <div class="row">
                                            <div class="col-lg-6"></div>
                                              <div class="col-lg-6">
                                                  <span class="child-label-ed">
                                                  <label for="">Currency</label>
                                                  <input type="text" class="form-control" name="ed_salary_currency" value="<?php echo $salary->ed_salary_currency; ?>" style="width:60px;" disabled>
                                                  </span>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <label for="" class="font-s-13">Date</label>
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date" value="<?php echo $salary->ed_salary_date; ?>" disabled>
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="" class="font-s-13">Salary</label>
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount" value="<?php echo $salary->ed_salary_amount; ?>" disabled>
                                                </span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date" value="<?php echo $salary->ed_salary_date2; ?>" disabled>
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount" value="<?php echo $salary->ed_salary_amount2; ?>" disabled>
                                                </span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date" value="<?php echo $salary->ed_salary_date3; ?>" disabled>
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount" value="<?php echo $salary->ed_salary_amount3; ?>" disabled>
                                                </span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-6">
                                                <span class="child-label-ed" style="">
                                                    <input type="date" class="form-control" name="ed_salary_date" value="<?php echo $salary->ed_salary_date4; ?>" disabled>
                                                </span>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="child-label-ed">
                                                <input type="text" class="form-control" name="ed_salary_amount" value="<?php echo $salary->ed_salary_amount4; ?>" disabled>
                                                </span>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                      
                                    <?php endif; ?>

                                  <div class="ed-basic-mid">
                                      <div class="ed-head-t">
                                          <label for="">Qualification</label>
                                      </div>
                                      <span>
                                      <textarea name="ed_qualification_text" class="form-control" cols="30" rows="10" disabled><?php echo $qualification->ed_qualification_text; ?></textarea>
                                    </span> 
                                  </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <div class="ed-basic-mid">
                                    <div class="ed-head-t">
                                        <div class="ed-basic-mid">
                                            <div class="ed-head-t">
                                                <label for="">Personal Details</label>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_email; ?>" disabled>
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Contact</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_contact; ?>" disabled>
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Age</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_age; ?>" disabled>
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Interest</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_intrest; ?>" disabled>
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Address</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_address; ?>" disabled>
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for=""></label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_city; ?>" placeholder="City" disabled>
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed w-100-d">
                                                <label for=""></label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_country; ?>" placeholder="Country" disabled>
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Movie</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_movie; ?>" disabled>
                                              </span> 
                                            </div>
                                            <div class="d-flex">
                                            <span class="child-label-ed w-100-d">
                                                <label for="">Book</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_book; ?>" disabled>
                                              </span>
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">TV Show</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_tvshow; ?>" disabled>
                                              </span> 
                                            </div>
                                            <div class="d-flex">
                                            <span class="child-label-ed w-100-d">
                                                <label for="">Color</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_color; ?>" disabled>
                                              </span>
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <label for="">Music</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_music; ?>" disabled>
                                              </span> 
                                            </div>
                                            <div class="d-flex">
                                            <span class="child-label-ed w-100-d">
                                                <label for="">Food</label>
                                                <input type="text" class="form-control" value="<?php echo $individual->ed_individual_profile_food; ?>" disabled>
                                              </span>
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed w-100-d">
                                                <input type="hidden" class="form-control" value="" disabled>
                                              </span>
                                            </div>

                                            <div class="ed-head-t">
                                                <label for="">Personality</label>
                                            </div>

                                            <div class="d-flex">
                                              <span class="child-label-ed">
                                                <label for="">Type</label>
                                                <input type="text" class="form-control" value="<?php echo $personality->ed_personality_type; ?>" disabled>
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed">
                                                <label for="">Role</label>
                                                <input type="text" class="form-control" value="<?php echo $personality->ed_personality_role; ?>" disabled>
                                              </span>
                                            </div>
                                            <div class="d-flex">
                                              <span class="child-label-ed">
                                                <label for="">Code</label>
                                                <input type="text" class="form-control" value="<?php echo $personality->ed_personality_code; ?>" disabled>
                                              </span> 
                                              &nbsp;&nbsp;&nbsp;
                                              <span class="child-label-ed">
                                                <label for="">Strategy</label>
                                                <input type="text" class="form-control" value="<?php echo $personality->ed_personality_strategy; ?>" disabled>
                                              </span>
                                            </div>
                                            <br>

                                            <label for="">Mind &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <span class="slider-range-value-style" id=""><?php echo $personality->min_value_mind; ?></span>%
                                                <span style="flex-basis: 260px"></span>
                                                <span class="slider-range-value-style" id=""><?php echo $personality->max_value_mind; ?></span>%
                                            </div>
                                            <div class="eep-status-cover d-flex">
                                                <span class="personality-lable-point">Extroverted</span>
                                                   <span>
                                                        <div class="slider-hidden-style"></div>
                                                   </span>
                                                <span class="personality-lable-point">Introverted</span>
                                            </div>

                                            <label for="">Energy &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <span class="slider-range-value-style" id=""><?php echo $personality->min_value_energy; ?></span>%
                                                <span style="flex-basis: 260px"></span>
                                                <span class="slider-range-value-style" id=""><?php echo $personality->max_value_energy; ?></span>%
                                            </div>
                                            <div class="eep-status-cover d-flex">
                                                <span class="personality-lable-point">Intuitive</span>
                                                   <span>
                                                      <div class="slider-hidden-style"></div>
                                                   </span>
                                                <span class="personality-lable-point">Observant</span>
                                            </div>

                                            <label for="">Nature &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <span class="slider-range-value-style" id=""><?php echo $personality->min_value_nature; ?></span>%
                                                <span style="flex-basis: 260px"></span>
                                                <span class="slider-range-value-style" id=""><?php echo $personality->max_value_nature; ?></span>%
                                            </div>
                                            <div class="eep-status-cover d-flex">
                                                <span class="personality-lable-point">Thinking</span>
                                                   <span>
                                                      <div class="slider-hidden-style"></div>
                                                   </span>
                                                <span class="personality-lable-point">Feeling</span>
                                            </div>

                                            <label for="">Tactics &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <span class="slider-range-value-style" id=""><?php echo $personality->min_value_tactics; ?></span>%
                                                <span style="flex-basis: 260px"></span>
                                                <span class="slider-range-value-style" id=""><?php echo $personality->max_value_tactics; ?></span>%
                                            </div>
                                            <div class="eep-status-cover d-flex">
                                                <span class="personality-lable-point">Judging</span>
                                                   <span>
                                                   <div class="slider-hidden-style"></div>
                                                   </span>
                                                <span class="personality-lable-point">Prospecting</span>
                                            </div>

                                            <label for="">Identity &nbsp;&nbsp;</label>
                                            <div class="range-number-style">
                                                <span class="slider-range-value-style" id=""><?php echo $personality->min_value_identity; ?></span>%
                                                <span style="flex-basis: 260px"></span>
                                                <span class="slider-range-value-style" id=""><?php echo $personality->max_value_identity; ?></span>%
                                            </div>
                                            <div class="eep-status-cover d-flex">
                                                <span class="personality-lable-point">Judging</span>
                                                   <span>
                                                   <div class="slider-hidden-style"></div>
                                                   </span>
                                                <span class="personality-lable-point">Prospecting</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                              </div>
                            <div class="col-lg-4">
                            <div class="ed-basic-mid">
                                <div class="ed-head-t">
                                    <label for="">Software Expertise</label>
                                </div>
                                <div class="range-number-style">
                                    &nbsp; &nbsp; &nbsp;
                                    <span class="slider-range-software">BASIC</span>
                                    <span style="flex-basis: 120px"></span>
                                    <span class="slider-range-software">BIMCAP</span>
                                </div>
                                <div class="eep-status-cover software-mb-2 software-mb-2  d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Revit-logo.jpg'); ?>" alt="Software Logo">
                                        </span>
                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_revit==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Navisworks-logo.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_navisworks==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/AutoCad-logoo.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_autocad==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/rhinoceros-3d-logo-G.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_rhinoceros==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/3Ds-max-grey.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_3dsmax==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/iconoDynMad.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_iconodynmad==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Enscape-loog.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_enscape==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/AGACAD-icon-copy.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_agacad==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/SketchUp-Logo.jpg'); ?>" alt="Software Logo">
                                        </span>
                                        
                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_sketchup==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Microsoft_Word-Logo.wine-edited.jpg'); ?>" alt="Software Logo">
                                        </span>


                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_msword==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Microsoft-Excel-Logo-edited.jpg'); ?>" alt="Software Logo">
                                        </span>

                                       <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_msexcel==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Photoshop-logo.jpg'); ?>" alt="Software Logo">
                                        </span>

                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_photoshop==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Ai-logo.jpg'); ?>" alt="Software Logo">
                                        </span>


                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_ai==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/InDesign-Logo-1024x998-edited.jpg'); ?>" alt="Software Logo">
                                        </span>


                                         <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_indesign==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                                  <div class="eep-status-cover software-mb-2 d-flex">
                                        <span class="ed-soft-icons">
                                          <img src="<?php echo base_url('assets_admin/img/software/Ae-logo.jpg'); ?>" alt="Software Logo">
                                        </span>
                                        <?php
                                            $x = 1;
                                            while($x <= 10) {
                                            if($software->ed_software_ae==$x){
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' checked disabled /></span>";
                                            }else{
                                                echo "<span class='form-check'><input type='radio' class='form-check-input' value='$x' disabled /></span>";
                                            }
                                            $x++;
                                            }
                                        ?>
                                  </div>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>


               

