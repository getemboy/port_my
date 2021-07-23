<?php
$this->view('apps_top', $data);
?>

<div class="login-container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                <i class="fas fa-image"></i>
                </div>
                <div class="col-lg-12 login-title">
                    LOGIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method='post' enctype='multipart/form-data'>
                            <div class="form-group">
                                <label class="form-control-label">TETLE</label>
                                <input type="text" name='pic_title' class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">DESCRIPTION</label>
                                <input type="text" name='pic_desc' class="form-control" i>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">UPLODE</label>
                                <input type="file" name='pic_file' class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" name='pic_submit'  class="btn btn-outline-primary">LOGIN</button>
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