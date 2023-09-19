

  <div class="main-container card">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12" >
                            <div class="title">
                                <h4>User Detail</h4>
                            </div>
                            <nav  aria-label="breadcrumb" role="navigation" >
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url('Dashboard') ?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                      All User
                                    </li>
                                </ol>
                               
                            </nav>
                           
                        </div>
                        <div class="add-user-btn">
								<a href="<?= base_url('Auth/addUser') ?>"><input type="submit"
								value="Add User"
								name=""
								id=""></a>
							</div>
                        <!-- <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    5 Aug 2023
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                    </div> -->
                </div>
            </div>
        </div>


        <!-- data table simple -->

        <div class="card-box mb-30 card">
            <div class="pd-20">
                <!-- <h4 class="text-blue h4">All Admins</h4> -->
                <!-- <p class="mb-0">
								you can find more options
								<a
									class="text-primary"
									href="https://datatables.net/"
									target="_blank"
									>Click Here</a
								>
							</p> -->

            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th class="table-plus datatable-nosort">User Name</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Roll(section)</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
						if (!empty($user)) {
                            $i = 0;
                            foreach ($user as $row) {
                                $i++;               
                                echo"<tr>
                                <td>$i</td>
                                <td>$row->username</td>
                                <td>$row->password</td>
                                <td>$row->email</td>
                                <td>$row->contact</td>
                                <td>$row->role	</td>";?>
                                
                               <td>
                                    <div class="dropdown">
                                        <a
                                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                        <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="<?= site_url('Auth/profile/'.$row->userid)?>"
                                            ><i class="dw dw-eye"></i> View</a
                                            >
                                            <a class="dropdown-item" href="<?= site_url('Auth/edit_user/'.$row->userid)?>"
                                            ><i class="dw dw-edit2"></i> Edit</a
                                            >
                                            <a class="dropdown-item" href="<?= site_url('Auth/delete_user/'.$row->userid)?>"
                                                ><i class="dw dw-delete-3"></i> Delete</a
                                            >
                                        </div>
                                    </div>
					          </td>
                              </tr>
                            <?php   }
                                } else {
                                    echo "<tr><td colspan='4'>Order(s) not available.</td></tr>";
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <div class="footer-wrap pd-20 mb-20 card-box">
        Add Admin
        <a href="#Adduser.html" target="_blank" style="text-decoration: none;">&#43</a>
    </div> -->
    	
    </div>
    </div>
    <!-- welcome modal start -->
    <!-- <div class="welcome-modal">
        <button class="welcome-modal-close">
            <i class="bi bi-x-lg"></i>
        </button>
        <iframe class="w-100 border-0" src="https://embed.lottiefiles.com/animation/31548"></iframe>
        <div class="text-center">
            <h3 class="h5 weight-500 text-center mb-2">
                Open source
                <span role="img" aria-label="gratitude">❤️</span>
            </h3>
            <div class="pb-2">
                <a class="github-button" href="https://github.com/dropways/deskapp"
                    data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                    data-size="large" data-show-count="true"
                    aria-label="Star dropways/deskapp dashboard on GitHub">Star</a>
                <a class="github-button" href="https://github.com/dropways/deskapp/fork"
                    data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-repo-forked"
                    data-size="large" data-show-count="true"
                    aria-label="Fork dropways/deskapp dashboard on GitHub">Fork</a>
            </div>
        </div>
        <div class="text-center mb-1">
            <div>
                <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-light btn-block btn-sm">
                    <span class="text-danger weight-600">STAR US</span>
                    <span class="weight-600">ON GITHUB</span>
                    <i class="fa fa-github"></i>
                </a>
            </div>
            <script async defer="defer" src="https://buttons.github.io/buttons.js"></script>
        </div>
        <a href="https://github.com/dropways/deskapp" target="_blank" class="btn btn-success btn-sm mb-0 mb-md-3 w-100">
            DOWNLOAD
            <i class="fa fa-download"></i>
        </a>
        <p class="font-14 text-center mb-1 d-none d-md-block">
            Available in the following technologies:
        </p>
        <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
            <i class="fa fa-html5"></i>
        </div>
    </div> -->
    <!-- <button class="welcome-modal-btn">
        <i class="fa fa-download"></i> Download
    </button> -->
    <!-- welcome modal end -->
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="vendors/scripts/datatable-setting.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>