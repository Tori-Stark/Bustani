<?php $__env->startSection('content'); ?>

<div class="hero-wrap hero-bread" style="background-image: url('assets/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
          <h1 class="mb-0 bread">Products</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10 mb-5 text-center">
                  <ul class="product-category">
                      <li><a href="#" class="active">All</a></li>
                      <li><a href="#">Vegetables</a></li>
                      <li><a href="#">Fruits</a></li>
                      <li><a href="#">Juice</a></li>
                      <li><a href="#">Dried</a></li>
                  </ul>
              </div>
          </div>
          <div class="row">

              <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="product">
                    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <a href="#" class="img-prod"><img class="img-fluid" src="assets/images/product-2.jpg" alt="Colorlib Template">
                          <div class="overlay"></div>
                      </a>
                      <div class="text py-3 pb-4 px-3 text-center">
                          <h3><a href="#"><?php echo e($product->name); ?></a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p class="price"><span>$<?php echo e($product->price); ?></span></p>
                              </div>
                          </div>
                          <div class="bottom-area d-flex px-3">
                              <div class="m-auto d-flex">
                                  <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                      <span><i class="ion-ios-menu"></i></span>
                                  </a>
                                  
                              </div>
                          </div>
                      </div>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </div>


              </div>
          </div>
          <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>

      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
            <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
            <span>Get e-mail updates about our latest shops and special offers</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Enter email address">
              <input type="submit" value="Subscribe" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mike/Desktop/Bustani/resources/views/client/products/index.blade.php ENDPATH**/ ?>