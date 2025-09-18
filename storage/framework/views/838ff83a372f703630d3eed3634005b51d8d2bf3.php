<footer class="site-footer footer-gray-1">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.2s">
							<div class="widget border-0">
								<h4 class="m-b20 text-white font-weight-300 text-uppercase">Thanh bình H.T.C Việt
									nam
								</h4>
								<div class="grid-content">
									<ul>
										<li>
											<h4>Nhà máy 1</h4>
										</li>
										<li>
											<strong>Địa chỉ:</strong>
											<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_map1')); ?>" target="_blank"><?php echo e(App\Models\CommonModel::get_setting('setting_address1')); ?></a>
										</li>
										<li>
											<strong>Hotline:</strong>
											<a href="tel:<?php echo e(App\Models\CommonModel::get_setting('setting_hotline1')); ?>"><?php echo e(App\Models\CommonModel::get_setting('setting_hotline1')); ?></a>
										</li>
										<li>
											<strong>Email:</strong>
											<a href="mailto:<?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?>"><?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?></a>
										</li>
									</ul>
									<ul>
										<li>
											<h4>Nhà máy 2</h4>
										</li>
										<li>
											<strong>Địa chỉ:</strong>
											<a href="<?php echo e(App\Models\CommonModel::get_setting('setting_map2')); ?>" target="_blank"><?php echo e(App\Models\CommonModel::get_setting('setting_address2')); ?></a>
										</li>
										<li>
											<strong>Hotline:</strong>
											<a href="tel:<?php echo e(App\Models\CommonModel::get_setting('setting_hotline2')); ?>"><?php echo e(App\Models\CommonModel::get_setting('setting_hotline2')); ?></a>
										</li>
										<li>
											<strong>Email:</strong>
											<a href="mailto:<?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?>"><?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="widget">
								<h4>Kết nối với chúng tôi</h4>
								<ul class="list-inline m-a0">
									<li><a href="<?php echo e(App\Models\CommonModel::get_setting('setting_facebook')); ?>" class="site-button facebook sharp"><i
												class="fab fa-facebook-f"></i></a></li>
									<li><a href="<?php echo e(App\Models\CommonModel::get_setting('setting_google')); ?>" class="site-button google-plus sharp"><i
												class="fab fa-google-plus-g"></i></a></li>
									<li><a href="<?php echo e(App\Models\CommonModel::get_setting('setting_linkedin')); ?>" class="site-button linkedin sharp"><i
												class="fab fa-linkedin-in"></i></a></li>
									<li><a href="<?php echo e(App\Models\CommonModel::get_setting('setting_instagram')); ?>" class="site-button instagram sharp"><i
												class="fab fa-instagram"></i></a></li>
									<li><a href="<?php echo e(App\Models\CommonModel::get_setting('setting_twitter')); ?>" class="site-button twitter sharp"><i
												class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.4s">
							<div class="widget border-0">
								<h4 class="m-b20 text-white font-weight-300 text-uppercase">
									Các phòng ban
								</h4>
								<div class="grid-content">
									<?php 
									$datalist = $department; 
									$pagesize_slide = 7;
									$pagecount = floor((count($datalist) - 1) / $pagesize_slide) + 1;
									for ($i = 0; $i < $pagecount; $i++) {
									?>
									<ul class="list-2">
										<?php 
										for ($j = ($i * $pagesize_slide); $j < ($i + 1) * $pagesize_slide; $j++) {
											if ($j < count($datalist)) {
										?>
										<li>
											<strong><?php echo e($datalist[$j]->name); ?>:</strong>
											<a href="tel:<?php echo e($datalist[$j]->phone); ?>"><?php echo e($datalist[$j]->phone); ?></a>
										</li>
										<?php }} ?>
										
									</ul>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- footer bottom part -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center">
							<span>Copyright © <span class="current-year">2025</span> all rights
								reserved. | Thiết kế bởi <a href="https://pubweb.vn">Pubweb.vn</a></span>
						</div>
					</div>
				</div>
			</div>
		</footer><?php /**PATH D:\laragon\www\htc\resources\views/frontend/footer.blade.php ENDPATH**/ ?>