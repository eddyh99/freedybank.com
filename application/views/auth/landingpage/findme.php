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
            <h5 class=" fw-bold text-black text-start mb-3 text-findme">*Other category </h5>
            <input class="country-select" type="text" placeholder="Link Here">
          </div>
          <!-- End Other Category  -->

          <!-- Start Other Category  -->
          <div class="col-md-12 mb-5">        
            <h5 class=" fw-bold text-black text-start mb-3 text-findme">*Other category </h5>
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
            <h5 class=" fw-bold text-black text-start mb-3 text-findme">*Google maps link </h5>
            <input class="country-select" type="text" placeholder="Link Here">
          </div>
          <!-- End Googlemaps link -->


          <!-- Start logo -->
          <div class="col-md-12 my-5 pt-5">        
            <h5 class=" fw-bolder text-black text-start mb-3 text-findme">*Enter image (logo/brand)</h5>
            <div class="row">
              <div class="col-12 col-md-6">
                <label for="images" class="drop-container">
                  <span class="circle-upload-img d-flex justify-content-center align-items-center">
                    <i class="ri-add-line fs-1"></i>
                  </span>
                  <input class="d-none" type="file" id="images" accept="image/*" required>
                </label>
              </div>
              <div class="col-12 col-md-6 text-black fw-bold "> 
                <p class="text-findme">*Maximum....</p>
                <p class="text-findme">*png, jpg,.....</p>
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