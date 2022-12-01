<!-- ======= Hero Section ======= -->
<section id="" class="hero d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/back.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 my-5">
                <div class="login">
                    <div class="col-12 col-md-8 col-lg-6 box-form mx-auto shadow-none px-0">
                        <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;"
                            method="POST" action="<?= base_url(); ?>auth/resetpass">
                            <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="col-12 mb-5">
                                <div class="input-group bg-black py-2">
                                    <div class="input-group-text border-0 px-4">
                                        <span>
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control f-publicsans border-0" name="email"
                                        placeholder="Unique code" required>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="input-group bg-black py-2">
                                    <div class="input-group-text border-0 px-4">
                                        <span>
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control f-publicsans border-0" name="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-12 mb-5">
                                <div class="input-group bg-black py-2">
                                    <div class="input-group-text border-0 px-4 align-items-start pt-1">
                                        <span>
                                            <i class="fa fa-message"></i>
                                        </span>
                                    </div>
                                    <textarea type="text" class="form-control f-publicsans border-0" name="email"
                                        placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit"
                                    class="btn btn-login f-roboto rounded-pill px-5 py-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Hero -->