<div class="section sec-2">
	<div class="container">
		<h2 class="title text-center">Thông tin liên hệ</h2>
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="box-grid">
					<div class="box">
						<img src="<?php echo e(asset('assets/frontend')); ?>/images/online.png" alt="image">
						<h3 class="box-title">Hỗ trợ trực tuyến</h3>
						<p>Liên hệ chúng tôi qua số điện thoại để được hỗ trợ</p>
						<a href="tel:<?php echo e(App\Models\CommonModel::get_setting('setting_phone')); ?>" class="button">Chat qua điện thoại</a>
					</div>
					<div class="box">
						<img src="<?php echo e(asset('assets/frontend')); ?>/images/zalo-logo.svg" alt="image">
						<h3 class="box-title">Chat qua Zalo</h3>
						<p>Hỗ trợ qua Zalo</p>
						<p>Hoạt động 24/7</p>
						<a href="https://zalo.me/<?php echo e(App\Models\CommonModel::get_setting('setting_zalo')); ?>" class="button">Chat qua Zalo</a>
					</div>
					<div class="box">
						<img src="<?php echo e(asset('assets/frontend')); ?>/images/email.png" alt="image">
						<h3 class="box-title">Hỗ trợ qua email</h3>
						<p>Gửi các thắc mắc, thông tin cần được hỗ trợ qua email</p>
						<a href="mailto:<?php echo e(App\Models\CommonModel::get_setting('setting_email')); ?>" class="button">Gửi email</a>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="contact-form">
					<h3 class="sub-title">Mọi thắc mắc, câu hỏi cần được hỗ trợ có thể gửi qua form dưới.</h3>
					<form action="#" id="frm">
						<div class="form-group">
							<input type="text" id="cname" class="form-control" placeholder="Họ tên">
						</div>
						<div class="form-group">
							<input type="text" id="cemail" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="text" id="cphone" class="form-control" placeholder="Số điện thoại">
						</div>
						<div class="form-group">
							<textarea id="cnote" rows="4" class="form-control"
								placeholder="Nội dung"></textarea>
						</div>
						<div class="form-group text-center">
							<a href="javascript:void(0)" class="button btncontact">Gửi</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php /**PATH F:\wamp64\www\baohanh\resources\views/frontend/bottom.blade.php ENDPATH**/ ?>