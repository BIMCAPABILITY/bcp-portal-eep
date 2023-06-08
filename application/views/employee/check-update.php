<div class="content-wrapper">
            <div class="container-xxl flex-grow-1">
            <h4 class="fw-bold py-3 mb-1"><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
              <div class="row">
                <div class="col-md-12">
                <span class="emp-list-addbtn">

                <form action="<?php echo base_url('Employee/submitByEmployeePerformance/'.$empinfo->emp_performance_id); ?>">
                    <?php
                      if(($empinfo->submit_employee_status)==1){
                        $hide_btn = 'disabled';
                      }else{
                        $hide_btn = '';
                      }
                    ?>
                    <button type="submit" class="btn btn-success" <?php echo  $hide_btn; ?>>Submit Your Performance</button>
                </form>

                </span>
                  <div class="card">
                    <div class="card-body">
                          <div class="d-flex align-items-start align-items-sm-center gap-4">
                          <img
                            src="<?php echo base_url($empdata->employee_image); ?>"
                            alt="user-avatar"
                            class="d-block rounded img-d-emp-print"
                          /> 
                        <div class="emp_info">
                            <div>
                                <h3><?php echo $empdata->employee_first_name; ?> <?php echo $empdata->employee_last_name; ?></h3>
                            </div>
                            <div id="emp-d-dd">
                                <span><i class='bx bxs-briefcase-alt-2'></i> <?php echo $empdata->department_name; ?></span> / <span><?php echo $empdata->employee_designation; ?></span></span>
                            </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-1 col-md-4 col-sm-4 col-sm-4 col-xs-6">
                            <label for="email" class="form-label"><b>E-mail:</b> </label>
                            <span><?php echo $empdata->employee_email; ?></span>
                           
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="organization" class="form-label"><b>Phone Number:</b> </label>
                            <span><?php echo $empdata->employee_number; ?></span>                          
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="address" class="form-label"><b>Address:</b> </label>
                            <span><?php echo $empdata->employee_address; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="state" class="form-label"><b>City:</b></label>
                            <span><?php echo $empdata->employee_city; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label class="form-label" for="country"><b>Country:</b></label>
                            <span><?php echo $empdata->employee_country; ?></span>
                          </div>
                          <div class="mb-1 col-md-4 col-sm-4 col-xs-6">
                            <label for="designation" class="form-label"><b>Date Of Joining:</b> </label>
                            <span>
                                <?php 
                                    echo $start_date = date("d-M-Y", strtotime($empdata->employee_doj));
                                ?>
                            </span>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
