
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?php echo base_url('Employee'); ?>" class="app-brand-link">
              <img src="<?php echo base_url('assets_admin/img/logo/bimcap_logo3.png'); ?>" alt="logo">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item active">
              <a href="<?php echo base_url('Employee'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="<?php echo base_url('Employee/empDetailsPage'); ?>" class="menu-link">
                <i class='bx bx-user' ></i> &nbsp;&nbsp;&nbsp;
                <div data-i18n="Account Settings">Profile</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase"><span class="menu-header-text">Your Performance</span></li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bx-bar-chart-alt' ></i> &nbsp;&nbsp;&nbsp;
                <div data-i18n="Basic">Performance Page</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?php echo base_url('employee/set-employees-performance'); ?>" class="menu-link">
                    <div data-i18n="Basic">Add Performance</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url('employee/employee-performance-list'); ?>" class="menu-link">
                    <div data-i18n="Basic">Show Performance List</div>
                  </a>
                </li>
              </ul>
            </li>

            <?php if(($empinfo->emp_level)==3): ?>
              <li class="menu-header small text-uppercase"><span class="menu-header-text">Employee Evaluation</span></li>
              <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bx-reset' ></i> &nbsp;&nbsp;&nbsp;
                  <div data-i18n="Basic">Evaluation Page</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="<?php echo base_url('employee/evaluated-employee-list'); ?>" class="menu-link">
                      <div data-i18n="Basic">Employee List</div>
                    </a>
                  </li>
                </ul>
              </li>
            <?php else: ?>
            <?php endif; ?>

          </ul>
        </aside>
        <div class="layout-page">
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?php echo base_url($empinfo->employee_image); ?>" alt="employee profile" class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?php echo base_url($empinfo->employee_image); ?>" alt="employee profile" class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"><?php echo $empinfo->employee_first_name; ?></span>
                            <small class="text-muted"><?php echo $empinfo->employee_designation; ?></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url('Employee/empLogout'); ?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>