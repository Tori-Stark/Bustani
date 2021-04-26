<?php $__env->startSection('content'); ?>

<div class="hero-wrap hero-bread" style="background-image: url('../assets/images/bg_1.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="/products">Product</a></span> <span>Product Single</span></p>
          <h1 class="mb-0 bread">Single Product</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 mb-5 ftco-animate">
                  <a href=<?php echo e("assets/images/product-images/".$product->image); ?> class="image-popup"><img src="<?php echo e(asset( "assets/images/product-images/". $product->product_image)); ?>" class="img-fluid" alt="Colorlib Template"></a>
              </div>
              <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                  <h3><?php echo e($product->name); ?></h3>
                  <div class="rating d-flex">
                          <p class="text-left mr-4">
                              <a href="#" class="mr-2"><?php echo e($productRating[0]->rating_average); ?></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                              <a href="#"><span class="ion-ios-star-outline"></span></a>
                          </p>
                          <p class="text-left mr-4">
                              <a href="#" class="mr-2" style="color: #000;">100<span style="color: #bbb;">Rating</span></a>
                          </p>
                          <p class="text-left">
                              <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                          </p>
                      </div>
                  <div class="d-flex">
                    <div class="pricing">
                      <p class="price"><span>Ksh. <?php echo e($product->price); ?></span></p>
                    </div>
                  </div>
                  <p><?php echo e($product->description); ?></p>

                  <p><a href="#" class="btn btn-secondary py-3 px-5">Contact goes here</a></p>
                  <p><a href="#" class="btn btn-secondary py-3 px-5">Email goes here</a></p>




</div>

      </div>
  </section>

  <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="comment mt-4 text-justify"> <img src=<?php echo e(userImage($comment->profile_photo)); ?> alt="" class="rounded-circle" width="40" height="40">
                    <h4><?php echo e($comment->name); ?></h4> <span>- <?php echo e($comment->created_at); ?></span> <br>
                    <p><?php echo e($comment->comment); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form" action=<?php echo e(route('products.addRating')); ?> >
                    <?php echo method_field('POST'); ?>
                        <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="comment" id="comment" msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group"> <label for="name">Rating (1 to 5)</label> <input type="range" class="custom-range" min="1" max="5" id="customRange2" name="rating" value=1> </div>

                   <input type="hidden" name="product_id" value=<?php echo e($product->id); ?>>
                    <div class="form-group">
                        <p class="text-secondary">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                    </div>

                    <?php if(Auth::user()): ?>

                    <div class="form-group"> <button type="submit" id="post" class="btn btn-primary">Post Comment</button> </div>

                    <?php else: ?>

                    <a href="/login" class="btn btn-primary" style="margin-bottom:10px;">Login to leave a comment</a>


                    <?php endif; ?>
                </form>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mike/Desktop/Bustani/resources/views/buyer/show.blade.php ENDPATH**/ ?>