<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
       <h4 class="fw-bold"><a href="<?php echo base_url('Admin'); ?>"><i class='bx bx-left-arrow-alt'></i> BACK</a></h4>
       <span class="d-flex add-salary-btn-flex">
        <h4 class="fw-bold py-1 mb-3"><span class="text-muted fw-light"> Dashboard / </span> Employee List</h4>
        <button class="add-salary-btn" data-bs-toggle="modal" data-bs-target="#addSalaryModal">Add Salary</button>
       </span>

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
        </div>
        <div class="col-md-12">
            <?php if($uploaded = $this->session->flashdata('emp_delete_success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?php echo $uploaded; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php elseif($tryAgain = $this->session->flashdata('emp_delete_success')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <strong><?php echo $tryAgain; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <?php if($uploaded = $this->session->flashdata('emp_update_success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?php echo $uploaded; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php elseif($tryAgain = $this->session->flashdata('emp_not_updated')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <strong><?php echo $tryAgain; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-12">
            <?php if($uploaded = $this->session->flashdata('emp_update_status_success')): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
            <strong><?php echo $uploaded; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <?php elseif($tryAgain = $this->session->flashdata('emp_update_status_not')): ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <strong><?php echo $tryAgain; ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead class="table-light">
                    <tr>
                    <th>Employee</th>
                    <th>Currency</th>
                    <th>Salary</th>
                    <th>Date</th>
                    <th>Salary Status</th>
                    <th>Status</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php if($salary): ?>
                    <?php foreach ($salary as $data): ?>
                        <tr>
                            <td>
                              <div class="avatar-edit">
                                  <img src="<?php echo base_url($data->employee_image); ?>" alt="admin profile" class="w-px-40 h-auto rounded-circle">&nbsp;
                                  <a href="<?php echo base_url('Admin/showEmployeeInfo/'.$data->main_employee_id); ?>"><strong><?php echo $data->employee_first_name; ?> <i class='bx bx-link' ></i></strong></a>
                              </div>
                            </td>
                            <td><?php echo $data->salary_currency; ?></td>
                            <td><?php echo $this->encryption->decrypt($data->salary_amount); ?></td>
                            <td><?php echo $data->salary_date; ?></td>
                            <?php if(($data->salary_status)=='1'): ?>
                                <td><span class="badge bg-label-success me-1">Added</span></td>
                            <?php else: ?>
                                <td><span class="badge bg-label-danger">Empty</span></td>
                            <?php endif; ?>  

                            <?php if(($data->employee_status)=='1'): ?>
                                <td><span class="badge bg-label-success me-1">Active</span></td>
                            <?php else: ?>
                                <td><span class="badge bg-label-danger">Inactive</span></td>
                            <?php endif; ?>  
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="<?php echo '#empSalary'.$data->main_employee_id; ?>" href="javascript:void(0);"
                                            >
                                            <i class='bx bxs-pencil'></i> Add Salary
                                        </a>
                                        <a class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="<?php echo '#empEditSalary'.$data->salary_id; ?>" href="javascript:void(0);"
                                            >
                                            <i class="bx bx-edit-alt me-1"></i> Edit Salary
                                        </a>
                                    </div>
                                </div>
                            </td>
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


<?php if($salary): ?>
<form action="<?php echo base_url('Admin/postEmployeeSalary'); ?>" method="POST">
    <div class="modal fade" id="addSalaryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel2">Upload Employee Salary</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <span class="seprator-hr"></span>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="select-emp-salary">
                                <label for="" class="font-s-13">Select Employee</label>
                                <select class="form-control form-control-md" name="employee_id">
                                    <option selected disabled>Please select employee</option>
                                    <?php foreach ($empdata as $data): ?>
                                        <option value="<?php echo $data->main_employee_id; ?>"><?php echo $data->employee_first_name; ?> <?php echo $data->employee_last_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="font-s-13">Currency</label>
                            <select class="form-control" id="currency" name="salary_currency">
                                <option>Select Currency</option>
                                <option value="AFN">Afghan Afghani</option>
                                <option value="ALL">Albanian Lek</option>
                                <option value="DZD">Algerian Dinar</option>
                                <option value="AOA">Angolan Kwanza</option>
                                <option value="ARS">Argentine Peso</option>
                                <option value="AMD">Armenian Dram</option>
                                <option value="AWG">Aruban Florin</option>
                                <option value="AUD">Australian Dollar</option>
                                <option value="AZN">Azerbaijani Manat</option>
                                <option value="BSD">Bahamian Dollar</option>
                                <option value="BHD">Bahraini Dinar</option>
                                <option value="BDT">Bangladeshi Taka</option>
                                <option value="BBD">Barbadian Dollar</option>
                                <option value="BYR">Belarusian Ruble</option>
                                <option value="BEF">Belgian Franc</option>
                                <option value="BZD">Belize Dollar</option>
                                <option value="BMD">Bermudan Dollar</option>
                                <option value="BTN">Bhutanese Ngultrum</option>
                                <option value="BTC">Bitcoin</option>
                                <option value="BOB">Bolivian Boliviano</option>
                                <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                <option value="BWP">Botswanan Pula</option>
                                <option value="BRL">Brazilian Real</option>
                                <option value="GBP">British Pound Sterling</option>
                                <option value="BND">Brunei Dollar</option>
                                <option value="BGN">Bulgarian Lev</option>
                                <option value="BIF">Burundian Franc</option>
                                <option value="KHR">Cambodian Riel</option>
                                <option value="CAD">Canadian Dollar</option>
                                <option value="CVE">Cape Verdean Escudo</option>
                                <option value="KYD">Cayman Islands Dollar</option>
                                <option value="XOF">CFA Franc BCEAO</option>
                                <option value="XAF">CFA Franc BEAC</option>
                                <option value="XPF">CFP Franc</option>
                                <option value="CLP">Chilean Peso</option>
                                <option value="CNY">Chinese Yuan</option>
                                <option value="COP">Colombian Peso</option>
                                <option value="KMF">Comorian Franc</option>
                                <option value="CDF">Congolese Franc</option>
                                <option value="CRC">Costa Rican ColÃ³n</option>
                                <option value="HRK">Croatian Kuna</option>
                                <option value="CUC">Cuban Convertible Peso</option>
                                <option value="CZK">Czech Republic Koruna</option>
                                <option value="DKK">Danish Krone</option>
                                <option value="DJF">Djiboutian Franc</option>
                                <option value="DOP">Dominican Peso</option>
                                <option value="XCD">East Caribbean Dollar</option>
                                <option value="EGP">Egyptian Pound</option>
                                <option value="ERN">Eritrean Nakfa</option>
                                <option value="EEK">Estonian Kroon</option>
                                <option value="ETB">Ethiopian Birr</option>
                                <option value="EUR">Euro</option>
                                <option value="FKP">Falkland Islands Pound</option>
                                <option value="FJD">Fijian Dollar</option>
                                <option value="GMD">Gambian Dalasi</option>
                                <option value="GEL">Georgian Lari</option>
                                <option value="DEM">German Mark</option>
                                <option value="GHS">Ghanaian Cedi</option>
                                <option value="GIP">Gibraltar Pound</option>
                                <option value="GRD">Greek Drachma</option>
                                <option value="GTQ">Guatemalan Quetzal</option>
                                <option value="GNF">Guinean Franc</option>
                                <option value="GYD">Guyanaese Dollar</option>
                                <option value="HTG">Haitian Gourde</option>
                                <option value="HNL">Honduran Lempira</option>
                                <option value="HKD">Hong Kong Dollar</option>
                                <option value="HUF">Hungarian Forint</option>
                                <option value="ISK">Icelandic KrÃ³na</option>
                                <option value="INR">Indian Rupee</option>
                                <option value="IDR">Indonesian Rupiah</option>
                                <option value="IRR">Iranian Rial</option>
                                <option value="IQD">Iraqi Dinar</option>
                                <option value="ILS">Israeli New Sheqel</option>
                                <option value="ITL">Italian Lira</option>
                                <option value="JMD">Jamaican Dollar</option>
                                <option value="JPY">Japanese Yen</option>
                                <option value="JOD">Jordanian Dinar</option>
                                <option value="KZT">Kazakhstani Tenge</option>
                                <option value="KES">Kenyan Shilling</option>
                                <option value="KWD">Kuwaiti Dinar</option>
                                <option value="KGS">Kyrgystani Som</option>
                                <option value="LAK">Laotian Kip</option>
                                <option value="LVL">Latvian Lats</option>
                                <option value="LBP">Lebanese Pound</option>
                                <option value="LSL">Lesotho Loti</option>
                                <option value="LRD">Liberian Dollar</option>
                                <option value="LYD">Libyan Dinar</option>
                                <option value="LTL">Lithuanian Litas</option>
                                <option value="MOP">Macanese Pataca</option>
                                <option value="MKD">Macedonian Denar</option>
                                <option value="MGA">Malagasy Ariary</option>
                                <option value="MWK">Malawian Kwacha</option>
                                <option value="MYR">Malaysian Ringgit</option>
                                <option value="MVR">Maldivian Rufiyaa</option>
                                <option value="MRO">Mauritanian Ouguiya</option>
                                <option value="MUR">Mauritian Rupee</option>
                                <option value="MXN">Mexican Peso</option>
                                <option value="MDL">Moldovan Leu</option>
                                <option value="MNT">Mongolian Tugrik</option>
                                <option value="MAD">Moroccan Dirham</option>
                                <option value="MZM">Mozambican Metical</option>
                                <option value="MMK">Myanmar Kyat</option>
                                <option value="NAD">Namibian Dollar</option>
                                <option value="NPR">Nepalese Rupee</option>
                                <option value="ANG">Netherlands Antillean Guilder</option>
                                <option value="TWD">New Taiwan Dollar</option>
                                <option value="NZD">New Zealand Dollar</option>
                                <option value="NIO">Nicaraguan CÃ³rdoba</option>
                                <option value="NGN">Nigerian Naira</option>
                                <option value="KPW">North Korean Won</option>
                                <option value="NOK">Norwegian Krone</option>
                                <option value="OMR">Omani Rial</option>
                                <option value="PKR">Pakistani Rupee</option>
                                <option value="PAB">Panamanian Balboa</option>
                                <option value="PGK">Papua New Guinean Kina</option>
                                <option value="PYG">Paraguayan Guarani</option>
                                <option value="PEN">Peruvian Nuevo Sol</option>
                                <option value="PHP">Philippine Peso</option>
                                <option value="PLN">Polish Zloty</option>
                                <option value="QAR">Qatari Rial</option>
                                <option value="RON">Romanian Leu</option>
                                <option value="RUB">Russian Ruble</option>
                                <option value="RWF">Rwandan Franc</option>
                                <option value="SVC">Salvadoran ColÃ³n</option>
                                <option value="WST">Samoan Tala</option>
                                <option value="SAR">Saudi Riyal</option>
                                <option value="RSD">Serbian Dinar</option>
                                <option value="SCR">Seychellois Rupee</option>
                                <option value="SLL">Sierra Leonean Leone</option>
                                <option value="SGD">Singapore Dollar</option>
                                <option value="SKK">Slovak Koruna</option>
                                <option value="SBD">Solomon Islands Dollar</option>
                                <option value="SOS">Somali Shilling</option>
                                <option value="ZAR">South African Rand</option>
                                <option value="KRW">South Korean Won</option>
                                <option value="XDR">Special Drawing Rights</option>
                                <option value="LKR">Sri Lankan Rupee</option>
                                <option value="SHP">St. Helena Pound</option>
                                <option value="SDG">Sudanese Pound</option>
                                <option value="SRD">Surinamese Dollar</option>
                                <option value="SZL">Swazi Lilangeni</option>
                                <option value="SEK">Swedish Krona</option>
                                <option value="CHF">Swiss Franc</option>
                                <option value="SYP">Syrian Pound</option>
                                <option value="STD">São Tomé and Príncipe Dobra</option>
                                <option value="TJS">Tajikistani Somoni</option>
                                <option value="TZS">Tanzanian Shilling</option>
                                <option value="THB">Thai Baht</option>
                                <option value="TOP">Tongan pa'anga</option>
                                <option value="TTD">Trinidad & Tobago Dollar</option>
                                <option value="TND">Tunisian Dinar</option>
                                <option value="TRY">Turkish Lira</option>
                                <option value="TMT">Turkmenistani Manat</option>
                                <option value="UGX">Ugandan Shilling</option>
                                <option value="UAH">Ukrainian Hryvnia</option>
                                <option value="AED">United Arab Emirates Dirham</option>
                                <option value="UYU">Uruguayan Peso</option>
                                <option value="USD">US Dollar</option>
                                <option value="UZS">Uzbekistan Som</option>
                                <option value="VUV">Vanuatu Vatu</option>
                                <option value="VEF">Venezuelan BolÃ­var</option>
                                <option value="VND">Vietnamese Dong</option>
                                <option value="YER">Yemeni Rial</option>
                                <option value="ZMK">Zambian Kwacha</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="font-s-13">Date</label>
                            <input type="date" class="form-control" name="salary_date" value="" placeholder="Date">
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="font-s-13">Salary</label>
                            <input type="number" class="form-control" name="salary_amount" value="" placeholder="Enter Salary">
                        </div>
                    </div>
                </div>
                <div class="modal-footer footer-flex">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php endif; ?>


<?php if($salary): ?>
<?php foreach ($salary as $data): ?>
<form action="<?php echo base_url('Admin/editEmployeeSalary'); ?>" method="POST">
    <div class="modal fade" id="<?php echo 'empEditSalary'.$data->salary_id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel2">Upload Employee Salary</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <span class="seprator-hr"></span>
                <div class="modal-body">
                    <input type="hidden" name="salary_id" value="<?php echo $data->salary_id; ?>">
                    <div class="row">
                    <div class="col-lg-4">
                            <label for="" class="font-s-13">Currency</label>
                            <select class="form-control" id="currency" name="salary_currency">
                                <option value="<?php echo $data->salary_currency; ?>" selected><?php echo $data->salary_currency; ?></option>
                                <option value="AFN">Afghan Afghani</option>
                                <option value="ALL">Albanian Lek</option>
                                <option value="DZD">Algerian Dinar</option>
                                <option value="AOA">Angolan Kwanza</option>
                                <option value="ARS">Argentine Peso</option>
                                <option value="AMD">Armenian Dram</option>
                                <option value="AWG">Aruban Florin</option>
                                <option value="AUD">Australian Dollar</option>
                                <option value="AZN">Azerbaijani Manat</option>
                                <option value="BSD">Bahamian Dollar</option>
                                <option value="BHD">Bahraini Dinar</option>
                                <option value="BDT">Bangladeshi Taka</option>
                                <option value="BBD">Barbadian Dollar</option>
                                <option value="BYR">Belarusian Ruble</option>
                                <option value="BEF">Belgian Franc</option>
                                <option value="BZD">Belize Dollar</option>
                                <option value="BMD">Bermudan Dollar</option>
                                <option value="BTN">Bhutanese Ngultrum</option>
                                <option value="BTC">Bitcoin</option>
                                <option value="BOB">Bolivian Boliviano</option>
                                <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
                                <option value="BWP">Botswanan Pula</option>
                                <option value="BRL">Brazilian Real</option>
                                <option value="GBP">British Pound Sterling</option>
                                <option value="BND">Brunei Dollar</option>
                                <option value="BGN">Bulgarian Lev</option>
                                <option value="BIF">Burundian Franc</option>
                                <option value="KHR">Cambodian Riel</option>
                                <option value="CAD">Canadian Dollar</option>
                                <option value="CVE">Cape Verdean Escudo</option>
                                <option value="KYD">Cayman Islands Dollar</option>
                                <option value="XOF">CFA Franc BCEAO</option>
                                <option value="XAF">CFA Franc BEAC</option>
                                <option value="XPF">CFP Franc</option>
                                <option value="CLP">Chilean Peso</option>
                                <option value="CNY">Chinese Yuan</option>
                                <option value="COP">Colombian Peso</option>
                                <option value="KMF">Comorian Franc</option>
                                <option value="CDF">Congolese Franc</option>
                                <option value="CRC">Costa Rican ColÃ³n</option>
                                <option value="HRK">Croatian Kuna</option>
                                <option value="CUC">Cuban Convertible Peso</option>
                                <option value="CZK">Czech Republic Koruna</option>
                                <option value="DKK">Danish Krone</option>
                                <option value="DJF">Djiboutian Franc</option>
                                <option value="DOP">Dominican Peso</option>
                                <option value="XCD">East Caribbean Dollar</option>
                                <option value="EGP">Egyptian Pound</option>
                                <option value="ERN">Eritrean Nakfa</option>
                                <option value="EEK">Estonian Kroon</option>
                                <option value="ETB">Ethiopian Birr</option>
                                <option value="EUR">Euro</option>
                                <option value="FKP">Falkland Islands Pound</option>
                                <option value="FJD">Fijian Dollar</option>
                                <option value="GMD">Gambian Dalasi</option>
                                <option value="GEL">Georgian Lari</option>
                                <option value="DEM">German Mark</option>
                                <option value="GHS">Ghanaian Cedi</option>
                                <option value="GIP">Gibraltar Pound</option>
                                <option value="GRD">Greek Drachma</option>
                                <option value="GTQ">Guatemalan Quetzal</option>
                                <option value="GNF">Guinean Franc</option>
                                <option value="GYD">Guyanaese Dollar</option>
                                <option value="HTG">Haitian Gourde</option>
                                <option value="HNL">Honduran Lempira</option>
                                <option value="HKD">Hong Kong Dollar</option>
                                <option value="HUF">Hungarian Forint</option>
                                <option value="ISK">Icelandic KrÃ³na</option>
                                <option value="INR">Indian Rupee</option>
                                <option value="IDR">Indonesian Rupiah</option>
                                <option value="IRR">Iranian Rial</option>
                                <option value="IQD">Iraqi Dinar</option>
                                <option value="ILS">Israeli New Sheqel</option>
                                <option value="ITL">Italian Lira</option>
                                <option value="JMD">Jamaican Dollar</option>
                                <option value="JPY">Japanese Yen</option>
                                <option value="JOD">Jordanian Dinar</option>
                                <option value="KZT">Kazakhstani Tenge</option>
                                <option value="KES">Kenyan Shilling</option>
                                <option value="KWD">Kuwaiti Dinar</option>
                                <option value="KGS">Kyrgystani Som</option>
                                <option value="LAK">Laotian Kip</option>
                                <option value="LVL">Latvian Lats</option>
                                <option value="LBP">Lebanese Pound</option>
                                <option value="LSL">Lesotho Loti</option>
                                <option value="LRD">Liberian Dollar</option>
                                <option value="LYD">Libyan Dinar</option>
                                <option value="LTL">Lithuanian Litas</option>
                                <option value="MOP">Macanese Pataca</option>
                                <option value="MKD">Macedonian Denar</option>
                                <option value="MGA">Malagasy Ariary</option>
                                <option value="MWK">Malawian Kwacha</option>
                                <option value="MYR">Malaysian Ringgit</option>
                                <option value="MVR">Maldivian Rufiyaa</option>
                                <option value="MRO">Mauritanian Ouguiya</option>
                                <option value="MUR">Mauritian Rupee</option>
                                <option value="MXN">Mexican Peso</option>
                                <option value="MDL">Moldovan Leu</option>
                                <option value="MNT">Mongolian Tugrik</option>
                                <option value="MAD">Moroccan Dirham</option>
                                <option value="MZM">Mozambican Metical</option>
                                <option value="MMK">Myanmar Kyat</option>
                                <option value="NAD">Namibian Dollar</option>
                                <option value="NPR">Nepalese Rupee</option>
                                <option value="ANG">Netherlands Antillean Guilder</option>
                                <option value="TWD">New Taiwan Dollar</option>
                                <option value="NZD">New Zealand Dollar</option>
                                <option value="NIO">Nicaraguan CÃ³rdoba</option>
                                <option value="NGN">Nigerian Naira</option>
                                <option value="KPW">North Korean Won</option>
                                <option value="NOK">Norwegian Krone</option>
                                <option value="OMR">Omani Rial</option>
                                <option value="PKR">Pakistani Rupee</option>
                                <option value="PAB">Panamanian Balboa</option>
                                <option value="PGK">Papua New Guinean Kina</option>
                                <option value="PYG">Paraguayan Guarani</option>
                                <option value="PEN">Peruvian Nuevo Sol</option>
                                <option value="PHP">Philippine Peso</option>
                                <option value="PLN">Polish Zloty</option>
                                <option value="QAR">Qatari Rial</option>
                                <option value="RON">Romanian Leu</option>
                                <option value="RUB">Russian Ruble</option>
                                <option value="RWF">Rwandan Franc</option>
                                <option value="SVC">Salvadoran ColÃ³n</option>
                                <option value="WST">Samoan Tala</option>
                                <option value="SAR">Saudi Riyal</option>
                                <option value="RSD">Serbian Dinar</option>
                                <option value="SCR">Seychellois Rupee</option>
                                <option value="SLL">Sierra Leonean Leone</option>
                                <option value="SGD">Singapore Dollar</option>
                                <option value="SKK">Slovak Koruna</option>
                                <option value="SBD">Solomon Islands Dollar</option>
                                <option value="SOS">Somali Shilling</option>
                                <option value="ZAR">South African Rand</option>
                                <option value="KRW">South Korean Won</option>
                                <option value="XDR">Special Drawing Rights</option>
                                <option value="LKR">Sri Lankan Rupee</option>
                                <option value="SHP">St. Helena Pound</option>
                                <option value="SDG">Sudanese Pound</option>
                                <option value="SRD">Surinamese Dollar</option>
                                <option value="SZL">Swazi Lilangeni</option>
                                <option value="SEK">Swedish Krona</option>
                                <option value="CHF">Swiss Franc</option>
                                <option value="SYP">Syrian Pound</option>
                                <option value="STD">São Tomé and Príncipe Dobra</option>
                                <option value="TJS">Tajikistani Somoni</option>
                                <option value="TZS">Tanzanian Shilling</option>
                                <option value="THB">Thai Baht</option>
                                <option value="TOP">Tongan pa'anga</option>
                                <option value="TTD">Trinidad & Tobago Dollar</option>
                                <option value="TND">Tunisian Dinar</option>
                                <option value="TRY">Turkish Lira</option>
                                <option value="TMT">Turkmenistani Manat</option>
                                <option value="UGX">Ugandan Shilling</option>
                                <option value="UAH">Ukrainian Hryvnia</option>
                                <option value="AED">United Arab Emirates Dirham</option>
                                <option value="UYU">Uruguayan Peso</option>
                                <option value="USD">US Dollar</option>
                                <option value="UZS">Uzbekistan Som</option>
                                <option value="VUV">Vanuatu Vatu</option>
                                <option value="VEF">Venezuelan BolÃ­var</option>
                                <option value="VND">Vietnamese Dong</option>
                                <option value="YER">Yemeni Rial</option>
                                <option value="ZMK">Zambian Kwacha</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="font-s-13">Date</label>
                            <input type="date" class="form-control" name="salary_date" value="<?php echo $data->salary_date; ?>" placeholder="Date">
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="font-s-13">Salary</label>
                            <input type="number" class="form-control" name="salary_amount" value="<?php echo $this->encryption->decrypt($data->salary_amount); ?>" placeholder="Enter Salary">
                        </div>
                    </div>
                </div>
                <div class="modal-footer footer-flex">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>


<?php if($salary): ?>
<?php foreach ($salary as $data): ?>
<form action="<?php echo base_url('Admin/postEmployeeSalary'); ?>" method="POST">
    <div class="modal fade" id="<?php echo 'empSalary'.$data->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLabel2">Upload Employee Salary</h5>
                    <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                    ></button>
                </div>
                <span class="seprator-hr"></span>
                <div class="modal-body">
                    <input type="hidden" name="employee_id" value="<?php echo $data->main_employee_id; ?>">
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="" class="font-s-13">Currency</label>
                            <input type="text" class="form-control" name="salary_currency" value="" placeholder="Enter Currency">
                        </div>
                        <div class="col-lg-4">
                            <label for="" class="font-s-13">Date</label>
                            <input type="date" class="form-control" name="salary_date" value="" placeholder="Date">
                        </div>
                        <div class="col-lg-5">
                            <label for="" class="font-s-13">Salary</label>
                            <input type="number" class="form-control" name="salary_amount" value="" placeholder="Enter Salary">
                        </div>
                    </div>
                </div>
                <div class="modal-footer footer-flex">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                    </button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>

<?php if($salary): ?>
<?php foreach ($salary as $data): ?>
<form action="<?php echo base_url('Admin/deletesalary'); ?>" method="POST">
    <div class="modal fade" id="<?php echo 'empDelete'.$data->main_employee_id; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel2">Delete Employee Information?</h5>
                <br><br>
                <input type="hidden" name="main_employee_id" value="<?php echo $data->main_employee_id; ?>">
                <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                ></button>
            </div>
            <div class="modal-footer footer-flex">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Close
                </button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>