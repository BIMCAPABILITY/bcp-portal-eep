<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold "><a href="<?php echo base_url('admin/employees-list'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
    <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light"> Dashboard /</span> Performance List</h4>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>Evaluated By</th>
                        <th>EVALUATE Period </th>
                        <th>EVALUATE Start</th>
                        <th>EVALUATE End</th>
                        <th>View Details</th>
                        <th>Print</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php if($emp_per_list): ?>
                        <?php foreach( $emp_per_list as $data ): ?>
                            <?php if(($data->employee_performance_status)==1): ?>
                                <?php if(($data->submit_manager_status)==2): ?>
                                <tr class="emp_normal submit-manager-list-bg">
                                <?php elseif(($data->submit_employee_status)==1): ?>
                                <tr class="emp_normal submit-selft-list-bg">
                                <?php endif; ?>    
                                    <?php if(($data->submit_manager_status)==2): ?>
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
                                           echo $end_date = date("d-M-Y", strtotime($data->emp_performance_end_date));
                                         ?>
                                    </td>
                                    <td><a class="btn btn-xs btn-success" href="<?php echo base_url('Admin/showEmployeeScoreInfo/'.$data->emp_performance_id); ?>">see more <i class="bx bx-subdirectory-left"></i></a>
<<<<<<< HEAD
                                    <td><a href="<?php echo base_url('Admin/printEmpDetails/'.$data->emp_performance_id); ?>"><i class='bx bx-printer'></i></a></td>
=======
                                    <td>
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="<?php echo "#empPrintOP".$data->emp_performance_id; ?>">
                                            <i class='bx bx-printer'></i>
                                        </a>
                                    </td>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                                </tr>

                            <?php else: ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td>
                                Empty Performance!!
                            </td>
                        </tr>
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
    </div>
</div>

<<<<<<< HEAD
=======
<?php if($emp_per_list): ?>
<?php foreach( $emp_per_list as $data ): ?>
    <div class="modal fade" id="<?php echo "empPrintOP".$data->emp_performance_id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">If you are having problems printing the evaluation page, apply these <a href="<?php echo base_url("assets_admin/img/illustrations/eep-print-settings.png"); ?>" target="_blank"><i class='bx bxs-cog'></i> settings.</a></h5>
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
                <a href="<?php echo base_url('Admin/printEmpDetails/'.$data->emp_performance_id); ?>" class="btn btn-primary">
                    Print
                </a>
            </div>
        </div>
        </div>
    </div>

<?php endforeach; ?>
<?php endif; ?>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
