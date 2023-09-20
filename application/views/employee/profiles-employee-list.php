<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold "><a href="<?php echo base_url('Employee'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
        <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light"> Dashboard / </span> Employee Profile List</h4>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead class="table-light">
                    <tr>
                    <th>Employee</th>
                    <th>Email</th>
                    <th>Departments</th>
                    <th>Designation</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php if($empdata): ?>
                    <?php foreach ($empdata as $data): ?>
                        <tr>
                            <td>
                              <div class="avatar-edit">
                                  <img src="<?php echo base_url($data->employee_image); ?>" alt="admin profile" class="w-px-40 h-auto rounded-circle">&nbsp;
                                  <a href="<?php echo base_url('Employee/showEmployeeProfile/'.$data->main_employee_id); ?>"><strong><?php echo $data->employee_first_name; ?> <i class='bx bx-link' ></i></strong></a>
                              </div>
                            </td>
                            <td><?php echo $data->employee_email; ?></td>
                            <td><?php echo $data->department_name; ?></td>
                            <td><?php echo $data->employee_designation; ?></td>

                            <?php if(($data->employee_status)=='1'): ?>
                                <td><span class="badge bg-label-success me-1">Active</span></td>
                            <?php else: ?>
                                <td><span class="badge bg-label-danger">Inactive</span></td>
                            <?php endif; ?>  
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr class="empty_td">
                        <td><strong><i class='bx bxs-quote-alt-left'></i> Employee Details Empty <i class='bx bxs-quote-alt-right' ></i></strong></td>
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



