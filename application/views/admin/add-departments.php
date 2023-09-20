
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold "><a href="<?php echo base_url('Admin'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
              <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light"> Dashboard / </span> Add Departments</h4>
              <div class="row">
                <div class="col-xl">
                <?php if($uploaded = $this->session->flashdata('department_upload_success')): ?>
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><?php echo $uploaded; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?php elseif($tryAgain = $this->session->flashdata('department_not_uploaded')): ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                      <strong><?php echo $tryAgain; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="card mb-4">
                    <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="<?php echo base_url('Admin/postDepartmentData'); ?>"  data-parsley-validate data-toggle="validator" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Department Name <span class="isrequired">*</span></label>
                          <input type="text" class="form-control" name="department_name" id="basic-default-fullname" placeholder="Accounts Management" required data-parsley-trigger="keyup" />
                        </div>
                        <div class="mb-3">
                        <label for="designation" class="form-label">Status <span class="isrequired">*</span></label>
                            <select class="form-select" name="department_status" id="exampleFormControlSelect1" aria-label="Default select example" required>
                            <option selected="" disabled>Please select status</option>
                            <option value="1">Active</option>
<<<<<<< HEAD
                            <option value="2">Deactivate</option>
=======
                            <option value="2">Inactive</option>
>>>>>>> 8ce454d (new update employee portal v1.1.0)
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           