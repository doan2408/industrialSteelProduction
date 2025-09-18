<header>
	<div class="container">
		<div class="header-wrap">
			<a href="<?php echo e(asset('')); ?>" class="logo">
				<img src="<?php echo e(App\Models\CommonModel::get_setting('website_logo')); ?>" alt="logo">
			</a>
			<ul class="nav">
				<li class="nav-header d-lg-none d-flex">
					<a href="<?php echo e(asset('')); ?>" class="logo">
						<img src="<?php echo e(App\Models\CommonModel::get_setting('website_logo')); ?>" alt="logo">
					</a>
					<span class="close-nav"><i class="fa-solid fa-xmark"></i></span>
				</li>
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
								<li class="nav-item <?php if($check_1 == true): ?> has-dropdown <?php endif; ?>">
									<a href="<?php echo e($i_menu->url); ?>" class="nav-link"><?php echo e($i_menu->name); ?></a>
									<?php if($check_1 == true): ?>
										<ul class="dropdown-menu">
											<?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i_menu1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($i_menu1->parent_id == $i_menu->id): ?>
													<li><a href="<?php echo e($i_menu1->url); ?>" class="nav-link"><?php echo e($i_menu1->name); ?></a></li>
												<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</ul>
									<?php endif; ?>
								</li>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>

			</ul>
			<?php $cartdata = \Cart::getContent(); ?>
			<div class="menu-right">
				<span class="search-btn" role="button" tabindex="-1">
					<i class="fa-regular fa-magnifying-glass"></i>
				</span>
				<a href="<?php echo e(route('cart')); ?>" class="cart-btn" role="button" tabindex="-1">
					<i class="fa-regular fa-cart-shopping"></i>
					<span class="quick-num"><?php echo e($cartdata->count()); ?></span>
				</a>

				<?php if(\Auth::check()): ?>
					<a href="<?php echo e(route('logout')); ?>" class="login" role="button" tabindex="-1">
						<i class="fa-regular fa-user"></i>
					</a>
				<?php else: ?>
					<a href="<?php echo e(route('login')); ?>" class="login" role="button" tabindex="-1">
						<i class="fa-regular fa-user"></i>
					</a>

				<?php endif; ?>
				<span class="menu-toggler">
					<i class="fa-solid fa-bars"></i>
				</span>
			</div>
		</div>
	</div>
</header>
<div class="search-popup">
	<div class="search-content">
		<div class="container">
			<form method="post" action="<?php echo e(route('psearch')); ?>">
						<?php echo csrf_field(); ?>
			<div class="search-header">
				<i class="fa-regular fa-magnifying-glass"></i>
				<input type="text" class="autocomplete" name="keyword" id="search" placeholder="TÌM KIẾM">
				<span class="close-search" role="button" tabindex="-1">
					<i class="fa-regular fa-xmark"></i>
				</span>
			</div>
			</form>
			<div class="search-body">
				<div class="search-result">
					<p>Tìm kiếm phổ biến</p>
					 <?php if(isset($lkeyword) && count($lkeyword)>0): ?>
					<?php $__currentLoopData = $lkeyword; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="<?php echo e(route('search',array($item->name,'null','null'))); ?>"><?php echo e($item->name); ?></a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
				</div>
				<div class="search-product">
					<p>Được đề xuất</p>
					<div class="product-section header-search-result">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/header.blade.php ENDPATH**/ ?>