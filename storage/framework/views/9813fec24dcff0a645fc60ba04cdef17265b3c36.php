<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Login | Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Login | Admin & Dashboard" name="description" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('assets/admin')); ?>/assets/images/favicon.png"> 
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/fontawesome.css">
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/icofont.css">
        <!-- Themify icon-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/themify.css">
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/flag-icon.css">
        <!-- Feather icon-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/feather-icon.css">
        <!-- Plugins css start-->
        <!-- Plugins css Ends-->
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/bootstrap.css">
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/style.css">
        <link id="color" rel="stylesheet" href="<?php echo e(asset('assets/admin')); ?>/assets/css/color-1.css" media="screen">
        <!-- Responsive css-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin')); ?>/assets/css/responsive.css">
    </head>

    <body>
      
        <section>         
            <div class="container-fluid p-0">
                <div class="row">
                <div class="col-12">
                    <div class="login-card">
                    <form class="theme-form login-form" method="post" action="<?php echo e(route('dashboard-login-post')); ?>">
									<?php echo csrf_field(); ?>
                        <h4>Đăng nhập</h4>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                              <?php echo e(Form::text('email','',array('class'=>'form-control'))); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                                <input class="form-control" type="password" name="password">
                        
                            </div>
                        </div>
                        <?php echo $__env->make('admin.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/jquery-3.5.1.min.js"></script>
        <!-- feather icon js-->
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/icons/feather-icon/feather.min.js"></script>
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
        <!-- Sidebar jquery-->
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/sidebar-menu.js"></script>
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/config.js"></script>
        <!-- Bootstrap js-->
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/popper.min.js"></script>
        <script src="<?php echo e(asset('assets/admin')); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- Plugins JS start-->
      
    </body>
</html><?php /**PATH D:\laragon\www\htc\resources\views/admin/login.blade.php ENDPATH**/ ?>