<header class="site-header mo-left header-transparent header navstyle3">
	<div class="sticky-header main-bar-wraper navbar-expand-lg">
		<div class="main-bar clearfix ">
			<div class="container clearfix">
				<div class="d-flex align-items-center justify-content-between">
					<div class="logo-header mostion logo-white">
						<a href="<?php echo e(asset('')); ?>">
							<img src="<?php echo e(App\Models\CommonModel::get_setting('website_logo')); ?>" alt="image">
						</a>
					</div>

					<div class="header-nav navbar-collapse collapse justify-content-center">
						<div class="logo-header d-md-block d-lg-none">
							<a href="<?php echo e(asset('')); ?>"><img src="<?php echo e(App\Models\CommonModel::get_setting('website_logo')); ?>" alt="image"></a>
							<span class="navbar-toggler" type="button" tabindex="-1">
								<i class="fa-regular fa-xmark"></i>
							</span>
						</div>
						<ul class="nav navbar-nav">
							<?php if(isset($menu) && count($menu) > 0): ?>
							<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($i_menu->parent_id == 0): ?>
							<?php
							$check_1 = false;
							foreach ($menu as $chec) {
								if ($chec->parent_id == $i_menu->id) {
									$check_1 = true;
								}
							}
							?>
							<li>
								<a href="<?php echo e($i_menu->url); ?>"><?php echo e($i_menu->name); ?>  <?php if($check_1 == true): ?><i class="fas fa-chevron-down"></i><?php endif; ?></a>
								<?php if($check_1 == true): ?>
								<ul class="sub-menu tab-content">
									<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_menu1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if($i_menu1->parent_id == $i_menu->id): ?>
									<?php
									$check_2 = false;
									foreach ($menu as $chec1) {
										if ($chec1->parent_id == $i_menu1->id) {
											$check_2 = true;
										}
									}
									?>
									<li>
										<a href="<?php echo e($i_menu1->url); ?>"><?php echo e($i_menu1->name); ?> 
											<?php if($check_2 == true): ?><i class="fas fa-angle-right"></i><?php endif; ?>
										</a>
										<?php if($check_2 == true): ?>
										<ul class="sub-menu">
											<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_menu2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<?php if($i_menu2->parent_id == $i_menu1->id): ?>
											<li><a href="<?php echo e($i_menu2->url); ?>" class="nav-link"><?php echo e($i_menu2->name); ?></a></li>
											<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
										<?php endif; ?>
									</li>
									<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
								<?php endif; ?>
							</li>
							<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php endif; ?>
						</ul>
						<div class="dlab-social-icon">
							<ul>
								<li><a class="site-button facebook sharp-sm fab fa-facebook-f"
										href="javascript:void(0);"></a></li>
								<li><a class="site-button twitter sharp-sm fab fa-twitter"
										href="javascript:void(0);"></a></li>
								<li><a class="site-button linkedin sharp-sm fab fa-linkedin-in"
										href="javascript:void(0);"></a></li>
								<li><a class="site-button instagram sharp-sm fab fa-instagram"
										href="javascript:void(0);"></a></li>
							</ul>
						</div>
					</div>

					<div class="extra-nav">
						<div class="extra-cell">
							<button id="quik-search-btn" type="button" class="site-button-link"><i
									class="fa-regular fa-magnifying-glass"></i></button>
						</div>
						<div class="extra-cell">
							<button class="navbar-toggler collapsed navicon justify-content-end" type="button"
								tabindex="-1">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
					<div class="dlab-quik-search">
						<form action="#">
							<input name="search" value="" type="text" class="form-control"
								placeholder="Nhập từ khóa tìm kiếm...">
							<span id="quik-search-remove"><i class="fa-regular fa-xmark"></i></span>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php /**PATH D:\laragon\www\htc\resources\views/frontend/header.blade.php ENDPATH**/ ?>