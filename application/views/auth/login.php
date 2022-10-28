<div class="login bg-login">
    <div class="container">
        <div class="row d-flex d-lg-inline-grid justify-content-center justify-content-lg-start">
            <div class="col-10 col-sm-8 col-md-6 col-lg-5 box-form">
                <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                    action="<?= base_url(); ?>member">
                    <div class="col-12 mb-4 text-center">
                        <span class="my-3 title f-poppins">LOGIN</span>
                        <img src="<?= base_url(); ?>assets/img/freedy/logo.png" alt="">
                    </div>
                    <div class="col-12 mb-4">
                        <label for="email" class="form-label f-publicsans">Email</label>
                        <div class="input-group">
                            <input type="text" class="form-control f-publicsans" id="email" placeholder="Confirm email">
                            <div class="input-group-text">
                                <span>
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <label for="password" class="form-label f-publicsans">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control f-publicsans" id="password"
                                placeholder="Confirm password">
                            <div class="input-group-text">
                                <span>
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer"
                                        toggle="#password"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-auto">
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url(); ?>auth/signup" class="f-publicsans">Sign up</a>
                            <a href="<?= base_url(); ?>auth/forget_pass" class="f-publicsans">Forgot password?</a>
                        </div>
                    </div>
                    <div class="col-12 d-grid gap-2">
                        <button type="submit" class="btn btn-login f-roboto">Log in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="footer-login col-12"></div>