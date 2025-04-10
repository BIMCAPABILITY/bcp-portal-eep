<div class="min-vh-100 bg-primary d-flex align-items-center">
    <div class="container">
        <!-- Authentication -->
        <div id="alerts-container" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
            <?php if($uploaded = $this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible alert-floating" role="alert">
                    <strong><?php echo $uploaded; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if($uploaded = $this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible alert-floating" role="alert">
                    <strong><?php echo $uploaded; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="authentication-wrapper authentication-basic container-p-y">
                    <div class="authentication-inner py-4">
                    <!-- Forgot Password -->
                    <div class="card">
                        <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4">
                            <a href="<?php echo base_url(''); ?>" class="app-brand-link gap-2">
                                <img src="<?php echo base_url('assets/img/logo/bimcap_logo.png'); ?>" alt="" style="width: 60px;">
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2">Forgot Password? 🔒</h4>
                        <p class="mb-3">Create your new password for your account</p>
                        <form id="formAuthentication" class="mb-3" action="<?php echo base_url('auth/Login/submitForgotPassword'); ?>" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Password</label>
                                <input type="text" class="form-control" id="" name="new_password" placeholder="Enter new password" autofocus="">
                                <?php if($this->session->flashdata('new_password_error')): ?>
                                    <small class="text-danger"><?php echo $this->session->flashdata('new_password_error'); ?></small>
                                <?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Repeat Password</label>
                                <input type="text" class="form-control" id="" name="repeat_password" placeholder="Enter repeat password" autofocus="">
                                <?php if($this->session->flashdata('repeat_password_error')): ?>
                                    <small class="text-danger"><?php echo $this->session->flashdata('repeat_password_error'); ?></small>
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-primary d-grid w-100">Submit</button>
                        </form>
                        <div class="text-center">
                            <a href="<?php echo base_url('auth/login') ?>" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                            </a>
                        </div>
                        </div>
                    </div>
                    <!-- /Forgot Password -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>