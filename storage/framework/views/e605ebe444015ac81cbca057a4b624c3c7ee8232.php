<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bustani</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset("assets/css/open-iconic-bootstrap.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/animate.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/owl.carousel.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/owl.theme.default.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/magnific-popup.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/aos.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/ionicons.min.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/bootstrap-datepicker.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/jquery.timepicker.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/flaticon.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/icomoon.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("assets/css/style.css")); ?>">
  </head>

  <body>
      <?php echo $__env->make("partials.nav", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make("partials.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>

</html>

  <script src="<?php echo e(asset("assets/js/jquery.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/jquery-migrate-3.0.1.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/popper.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/bootstrap.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/jquery.easing.1.3.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/jquery.waypoints.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/jquery.stellar.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/owl.carousel.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/jquery.magnific-popup.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/aos.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/jquery.animateNumber.min.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/bootstrap-datepicker.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/scrollax.min.js")); ?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo e(asset("assets/js/google-map.js")); ?>"></script>
  <script src="<?php echo e(asset("assets/js/main.js")); ?>"></script><?php /**PATH C:\Users\laure\Bustani\resources\views/layouts/master.blade.php ENDPATH**/ ?>