

<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

                        <div class="container">
							<div class="row mb_30 justify-content-lg-between">
                                <div class="col-md-12 pd-20 card-box " >
                                    <div class="profile-photo">
                                        
                                       <img src="<?=base_url()?>admin/assets/img/user.png" alt="" />
                                        <div
                                            class="modal fade"
                                            id="modal"
                                            tabindex="-1"
                                            role="dialog"
                                            aria-labelledby="modalLabel"
                                            aria-hidden="true"
                                        >
                                            <div
                                                class="modal-dialog modal-dialog-centered"
                                                role="document"
                                            >
                                                <div class="modal-content">
                                                    <div class="modal-body pd-5">
                                                        <div class="img-container">
                                                            <img
                                                                id="image"
                                                                src="vendors/images/photo2.jpg"
                                                                alt="Picture"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input
                                                            type="submit"
                                                            value="Update"
                                                            class="btn btn-primary"
                                                        />
                                                        <button
                                                            type="button"
                                                            class="btn btn-default"
                                                            data-dismiss="modal"
                                                        >
                                                            Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="text-center h5 mb-0"><?= $user->user_name ?></h5>
                                    <p class="text-center text-muted font-14">
                                        <!-- Lorem ipsum dolor sit amet -->
                                    </p>
                                    <div class="profile-info">
                                        <h5 class="mb-20 h5 text-blue">Contact Information</h5>
                                        <ul>
                                            <li>
                                                <span>Contact</span>
                                            <?= $user->user_contact ?>
                                            </li>
                                            <li>
                                                <span>Phone Number:</span>
                                                <?= $user->user_contact ?>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    
        </div>
        <div class="col-md-6 offset-md-1 border rounded mt-5 bg-light h-25">
                          <div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
										<ul class="nav nav-tabs customtab" role="tablist">
										
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#setting"
													role="tab"
													>Profile Settings</a
												>
											</li>
										</ul>
										<div class="tab-content">
											<!-- Timeline Tab start -->
											<div
												class="tab-pane fade show active"
												id="timeline"
												role="tabpanel"
											>
												<div class="pd-20">
                                                    <div class="profile-setting">
                                                        <form action="<?= base_url('Base/updateProfile/'.$user->id) ?>" method="post">
                                                            <ul class="profile-edit-list row">
                                                                <li class="weight-500 col-md-6">
                                                                    <h4 class="text-blue h5 mb-20">
                                                                        Edit Your Profile 
                                                                    </h4>
                                                                    <div class="form-group">
                                                                        <label>Username</label>
                                                                        <input
                                                                        class="form-control form-control-lg"
                                                                        type="text"
                                                                        value="<?=$user->user_name?>"
                                                                        name="username"
                                                                        />
                                                                </div>
                                                                    <div class="form-group">
                                                                        <label>Contact</label>
                                                                        <input
                                                                        class="form-control form-control-lg"
                                                                        type="number"
                                                                        value="<?=$user->user_contact ?>"
                                                                        name="contact" 
                                                                        />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Password</label>
                                                                        <input
                                                                        class="form-control form-control-lg"
                                                                        type="text"
                                                                        value="<?=$user->user_password?>"
                                                                        name="password"
                                                                        >
                                                                    </div>
                                                                    <div class="form-group mb-0">
                                                                        <input
                                                                        type="submit"
                                                                        class="btn btn-primary"
                                                                        value="Update Information"
                                                                        />
                                                                    </div>
                                                                </li>										
                                                            </ul>
                                                        </form>
                                                    </div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/assets/vendors/styles/core.css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/assets/vendors/styles/style.css" />
	