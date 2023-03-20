
<!-- Start Confirm -->
<?php if($findme == "confirm") {?>
<section class="bg-thank d-flex justify-content-center align-items-center mt-0 pt-0">
  <div class="container ">
    <div class="row">
      <div class="col-12 col-lg-8 col-xl-6 mx-auto thank-findme">
        <h1 class="f-lexend text-center fw-bold mt- pt-0">Thank you your application has been received! </h1>
        <p class="f-bevietnam text-center fw-bold mt-4">Our staff is working for you; the process validation can take until 48 working hours</p>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <a href="<?= base_url(); ?>">
                <button type="button" class="btn-thank mx-auto d-block btn my-3 fw-bold">
                    Home
                </button>
            </a>
          </div>
      </div>
      </div>
  </div>
</section>
<!-- End Confirm -->

<?php } else { ?>
<section id="" class="hero d-flex p-3 pt-md-5 " style="height: 1000px;">
  <div class="container">
    <div class="row">

      <!-- Start Country -->
      <?php if($findme == 1){ ?>
        <div class="col-12 mb-5 pb-5">
            <div class="link-back p-0">
                <a href="<?= base_url(); ?>link/service?service=8">
                    <img src="<?= base_url() ?>assets/img/backShadow.png" alt="">
                </a>
            </div>
        </div>
        <div class="px-md-5">
          <!-- Start Select Country  -->
          <div class="col-md-12">        
            <h5 class="fw-bold text-black text-start mb-3 text-findme">*Country</h5>
            <select class="custom-select country-select">
              <option selected >Select country</option>
              <option>Indonesia</option>
              <option>Australia</option>
              <option>Singapura</option>
            </select>
          </div>
          <!-- End Select Country  -->

          <!-- Start Select Province  -->
          <div class="col-md-12 my-5">        
            <h5 class="fw-bold text-black text-start mb-3 text-findme">*City</h5>
            <select class="custom-select country-select">
              <option selected >Select province</option>
              <option>Bali</option>
              <option>Jawa Barat</option>
              <option>Kalimantan Timur</option>
            </select>
          </div>
          <!-- End Select Province  -->

          <!-- Start Select Region  -->
          <div class="col-md-12 mb-5">        
            <h5 class="fw-bold text-black text-start text-findmetart mb-3 text-findme">*Region</h5>
            <select class="custom-select country-select">
              <option selected >Select Region</option>
              <option>Badung</option>
              <option>Gianyar</option>
              <option>Denpasar</option>
            </select>
          </div>
          <!-- End Select Region  -->

          <div class="d-flex justify-content-center align-items-center">
            <a href="<?= base_url(); ?>link/findme?findme=2">
                <button type="button" class="btn-unique-code mx-auto d-block btn my-3">
                    <div class="circle-btn-unique-code">
                        <i class="ri-arrow-right-line fs-4"></i>
                    </div>
                    <div class="pt-2 fw-semibold">
                        Next
                    </div>
                </button>
            </a>
          </div>


        </div>
      <?php }?>
      <!-- End Country -->
      
      <!-- Start Category -->
      <?php if($findme == 2){ ?>
        <div class="col-12 mb-5 pb-5">
            <div class="link-back p-0">
                <a href="<?= base_url(); ?>link/findme?findme=1">
                    <img src="<?= base_url() ?>assets/img/backShadow.png" alt="">
                </a>
            </div>
        </div>
        <div class="px-md-5">
          <!-- Start Select Category  -->
          <div class="col-md-12">        
            <h5 class=" fw-bold text-black text-start mb-3 text-findme">*Category</h5>
            <select class="custom-select country-select">
              <option selected >category</option>
              <option>Indonesia</option>
              <option>Australia</option>
              <option>Singapura</option>
            </select>
          </div>
          <!-- End Select Category  -->

          <!-- Start Other Category  -->
          <div class="col-md-12 my-5">
          <div class="d-flex align-items-center mb-1">
              <h5 class="fw-bold text-black text-start text-findme me-3">*Other category</h5>
              <span class="mb-2">
                <i class="ri-question-line "></i>
              </span>
            </div>
            <input class="country-select" type="text" placeholder="Link Here">
          </div>
          <!-- End Other Category  -->

          <!-- Start Other Category  -->
          <div class="col-md-12 mb-5">        
          <div class="d-flex align-items-center mb-1">
              <h5 class="fw-bold text-black text-start text-findme me-3">*Other category</h5>
              <span class="mb-2">
                <i class="ri-question-line "></i>
              </span>
            </div>
            <input class="country-select" type="text" placeholder="Link Here">
          </div>
          <!-- End Other Category  -->

          <div class="d-flex justify-content-center align-items-center">
            <a href="<?= base_url(); ?>link/findme?findme=3">
                <button type="button" class="btn-unique-code mx-auto d-block btn my-3">
                    <div class="circle-btn-unique-code">
                        <i class="ri-arrow-right-line fs-4"></i>
                    </div>
                    <div class="pt-2 fw-semibold">
                        Next
                    </div>
                </button>
            </a>
          </div>


        </div>
      <?php }?>
      <!-- End Category -->

      <!-- Start Name Bussiness -->
      <?php if($findme == 3){ ?>
        <div class="col-12 mb-5 pb-5">
            <div class="link-back p-0">

                <a href="<?= base_url(); ?>link/findme?findme=1">
                    <img src="<?= base_url() ?>assets/img/backShadow.png" alt="">
                </a>
            </div>
        </div>
        <div class="px-md-5">

          <!-- Start Name Bussiness -->
          <div class="col-md-12 ">        
            <h5 class=" fw-bold text-black text-start mb-3 text-findme">*Name of your business as reported in Googlemaps</h5>
            <input class="country-select" type="text" placeholder="name of your business">
          </div>
          <!-- End Name Bussiness -->

          <!-- Start Googlemaps link -->
          <div class="col-md-12 my-5">        
            <div class="d-flex align-items-center mb-1">
              <h5 class="fw-bold text-black text-start text-findme me-3">*Google maps link </h5>
              <span class="mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="ri-question-line "></i>
              </span>
            </div>
            <input class="country-select" type="text" placeholder="Link Here">
          </div>
          <!-- End Googlemaps link -->

          <!-- Start  Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-start">
                  <ol>
                    <li>Open Google Maps</li>
                    <li>Enter your business</li>
                    <li>Click share</li>
                    <li>Click the botton "share link"</li>
                    <li>Paste on our form "Google maps"</li>
                  </ol>
                  <div class="d-flex justify-content-center">
                    <img class="img-fluid" src="<?= base_url(); ?>assets/img/sharemaps.png" alt="sharemaps">
                  </div>
                </div>
              </div>
            </div>
          </div>
           <!-- End  Modal -->
          <!-- Start logo -->
          <div class="col-md-12 my-5 pt-5">        
            <h5 class=" fw-bolder text-black text-start mb-3 text-findme">*Enter image (logo/brand)</h5>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <label for="images" class="drop-container">
                  <span class="circle-upload-img d-flex justify-content-center align-items-center">
                    <i class="ri-add-line fs-1"></i>
                  </span>
                  <input class="d-none" type="file" id="images" accept="image/*" required>
                </label>
              </div>
              <div class="col-12 col-md-6 col-lg-8 text-black fw-bold "> 
                <p class="text-findme text-start">*Maximum....</p>
                <p class="text-findme text-start">*png, jpg,.....</p>
              </div>
            </div>
          </div>
          <!-- End logo -->

          <div class="text-center">
              <a href="<?= base_url(); ?>link/findme?findme=confirm"
                  class="btn-footer-signin mt-2 scrollto d-inline-flex align-items-center justify-content-center align-self-center f-lexend px-5 link-lp">
                  <span>Confirm</span>
              </a>
          </div>


        </div>
      <?php }?>
      <!-- End Name Bussiness -->

    </div>
  </div>
</section>
<?php }?>

