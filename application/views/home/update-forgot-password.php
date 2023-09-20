<section class="vh-100" style="background-color: #3773e9;">
    <span for="" class="text-swich-login"><a href="<?php echo base_url('home'); ?>">Back</a></span>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
       
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="<?php echo base_url('assets_admin/img/backgrounds/login-bg.png') ?>"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form id="formAuthentication" method="POST" class="mb-3" action="<?php echo base_url('Login/setForgotPassword'); ?>" data-parsley-validate data-toggle="validator" enctype="multipart/form-data">
                  <h3>Update Password</h3>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="new_password">New Password</label>
                    <input id="new_password" class="form-control" name="new_password" type="password" placeholder="············" required data-parsley-trigger="keyup" />
                  </div>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" class="form-control" name="confirm_password" type="password" placeholder="············" required data-parsley-trigger="keyup" />
                  </div>
                  <div class="pt-1 mb-4">
                  <div class="mb-3"><button class="btn btn-primary d-grid w-100" type="submit">Submit</button></div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

