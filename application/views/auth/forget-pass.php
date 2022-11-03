<div class="login bg-forgot-pass">
    <div class="container">
        <div class="row d-flex d-lg-inline-grid justify-content-center justify-content-lg-start">
            <div class="col-10 col-sm-8 col-md-6 col-lg-5 box-form">
                <a href="<?= base_url(); ?>auth/login" class="link-back">
                    <img src="assets/img/freedy/back.png" alt="">
                </a>
                <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                    action="<?= base_url(); ?>auth/resetpass">
                    <div class="col-12 mb-4 text-center">
                        <span class="my-3 title f-poppins">Forgot Password</span>
                        <img src="assets/img/freedy/logo.png" alt="">
                    </div>
                    <div class="col-12 mb-auto">
                        <label for="email" class="form-label f-publicsans">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control f-publicsans" name="email" id="email" placeholder="Email" required>
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="submit" class="btn btn-login f-roboto">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer-login col-12"></div>