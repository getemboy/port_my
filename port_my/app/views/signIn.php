<?php
$this->view('apps_top', $data);
?>

<div class="login-container">
<?php check_message() ?>
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                <i class="fas fa-sign-in-alt"></i>
                </div>
                <div class="col-lg-12 login-title">
                    SIGN IN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method='post'>

                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" name='username_s' class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="email" name="email_s" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="pass_s" class="form-control" i>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">REPEAT PASSWORD</label>
                                <input type="password" name="pass2_s class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                            </div>

                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">SIGN IN</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>

<?php
$this->view('apps_bottom', $data);
?>