<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold "><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
    <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light"> Dashboard /</span> Performance List</h4>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Evaluated By</th>
                            <th>Evaluation Period</th>
                            <th>Evaluation Start</th>
                            <th>Evaluation End</th>
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
                                        <td>
                                            <a class="btn btn-xs btn-success" href="<?php echo base_url('Employee/ReEvaluateForm/'.$data->emp_performance_id); ?>">see more <i class="bx bx-subdirectory-left"></i></a>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url('Employee/printEmpDetails/'.$data->emp_performance_id); ?>"><i class='bx bx-printer'></i></a>
                                        </td>
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
            </ul>
        </nav>
    </div>
</div>

