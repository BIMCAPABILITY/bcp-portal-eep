
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold "><a href="<?php echo base_url('Admin'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
              <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light">Dashboard / </span> Add Employee</h4>
              <div class="row">
              <form id="formAccountSettings" method="POST" action="<?php echo base_url('Admin/postEmployeeData'); ?>"  data-parsley-validate data-toggle="validator" enctype="multipart/form-data">
                <div class="col-md-12">
                  <?php if($uploaded = $this->session->flashdata('emp_upload_success')): ?>
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <strong><?php echo $uploaded; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?php elseif($tryAgain = $this->session->flashdata('emp_upload_success')): ?>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                      <strong><?php echo $tryAgain; ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    <?php endif; ?>



                    <?php if($uploaded = $this->session->flashdata('email_not_vaild')): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                    <strong><?php echo $uploaded; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <?php endif; ?>

                  </div>
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <div class="holder">
                          <img
                            src="<?php echo base_url('assets_admin/img/icons/profile-upload.png'); ?>"
                            alt="user-avatar"
                            class="d-block rounded"
                            height="100"
                            width="100"
                            id="imgPreview"
                          /> 
                        </div>
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                              name="employee_image"
                              required data-parsley-trigger="keyup"
                            />
                          </label>
                          <p class="text-muted mb-0">Allowed JPG, JPEG or PNG. Image Resolution: 225px * 225px. Max size of 800K </p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">First Name <span class="isrequired">*</span></label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="employee_first_name"
                              placeholder="John"
                              autofocus
                              required data-parsley-trigger="keyup"
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name <span class="isrequired">*</span></label>
                            <input class="form-control" type="text" name="employee_last_name" id="lastName" placeholder="Doe" required data-parsley-trigger="keyup" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail <span>*</span></label>
                            <input
                              class="form-control"
                              type="email"
                              id="login_email"
                              name="employee_email"
                              placeholder="john.doe@example.com"
                              required data-parsley-trigger="keyup"
                            />
                            <span id="vaild_email">
                              <label for="">This email Id already exist!!</label>
                            </span>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Phone Number <span class="isrequired">*</span></label>
                            <div class="form-group md-group show-label">
                              <input class="form-control" name="employee_number" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+1 " required data-parsley-trigger="keyup">
                            </div>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="address" class="form-label">Address <span class="isrequired">*</span></label>
                            <input type="text" class="form-control" id="address" name="employee_address" placeholder="Address" required data-parsley-trigger="keyup" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">City <span class="isrequired">*</span></label>
                            <input class="form-control" type="text" id="city" name="employee_city" placeholder="City" required data-parsley-trigger="keyup"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <div class="form-group md-group show-label">
                            <label class="form-label" for="country">Country <span class="isrequired">*</span></label>
                               
                                <span class="child-label-ed w-100-d">

                                <select name="employee_country" id="address-country" class="select2 form-select form-control" required data-parsley-trigger="keyup">
                                  <option value="" selected="">Select Country</option>
                                  <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antartica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo, the Democratic Republic of the</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                    <option value="Croatia">Croatia (Hrvatska)</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="France Metropolitan">France, Metropolitan</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                                    <option value="Holy See">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong" selected>Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran (Islamic Republic of)</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia, Federated States of</option>
                                                    <option value="Moldova">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                    <option value="Saint LUCIA">Saint LUCIA</option>
                                                    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                                    <option value="Span">Spain</option>
                                                    <option value="SriLanka">Sri Lanka</option>
                                                    <option value="St. Helena">St. Helena</option>
                                                    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Viet Nam</option>
                                                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                                    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                  <option value="ax">Åland Islands</option></select>
                              </span> 
                              </div>
                            </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label">Departments <span class="isrequired">*</span></label>
                            <select id="department_id" name="employee_department" class="select2 form-select" required data-parsley-trigger="keyup">
                              <option value="">Select Departments</option>
                              <?php if($departments): ?>
                                  <?php foreach($departments as $data): ?>
                                    <option value="<?php echo $data->department_id; ?>"><?php echo $data->department_name; ?></option>
                                  <?php endforeach; ?>
                              <?php endif; ?>
                            </select> 
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label">Designation <span class="isrequired">*</span></label>
                            <select id="designation_id" name="employee_designation" class="select2 form-select" required data-parsley-trigger="keyup">
                            </select>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label">Date Of Joining <span class="isrequired">*</span></label>
                            <input class="form-control" name="employee_doj" type="date" id="html5-date-input" required data-parsley-trigger="keyup">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label">Date Of Termination</label>
                            <input class="form-control" type="date" name="employee_dot" id="html5-date-input">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label">Employee Password <span class="isrequired">*</span></label>
                            <input class="form-control" name="emp_password" type="password" id="html5-date-input" required data-parsley-trigger="keyup">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="designation" class="form-label">Level</label>
                            <select class="select2 form-select" name="emp_level" id="">
                                <option value="" selected disabled>Enter Level</option>
                                <option value="2">Employee</option>
                                <option value="3">Manager</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Reset</button>
                        </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
