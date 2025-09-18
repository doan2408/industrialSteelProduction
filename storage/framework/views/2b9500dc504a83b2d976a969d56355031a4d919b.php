<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="<?php echo e(route('dashboard-profile')); ?>"><i data-feather="settings"></i></a>
    <?php if(\Auth::user()->avatar!=''): ?>
    <img class="img-90 rounded-circle" src="<?php echo e(\Auth::user()->avatar); ?>" alt="">
    <?php else: ?>
    <img class="img-90 rounded-circle" src="<?php echo e(asset('assets/admin')); ?>/assets/images/dashboard/1.png" alt="">
    <?php endif; ?>
    <a href="<?php echo e(route('dashboard-profile')); ?>">
        <h6 class="mt-3 f-14 f-w-600"><?php echo e(\Auth::user()->name); ?></h6></a>
    </div>
    <nav>
    <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">           
        <ul class="nav-menu custom-scrollbar">
			
			<li class="sidebar-main-title">
            <div>
                <h6>Nội dung             </h6>
            </div>
            </li>
            <li><a class="nav-link menu-title link-nav" href="<?php echo e(asset('dashboard')); ?>"><i data-feather="home"></i><span>Trang chủ</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-page')); ?>"><i data-feather="edit"></i><span>Trang tĩnh</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-customer')); ?>"><i data-feather="edit"></i><span>Khách hàng</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-student')); ?>"><i data-feather="edit"></i><span>Sinh viên</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-services')); ?>"><i data-feather="edit"></i><span>Dịch vụ</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-project')); ?>"><i data-feather="edit"></i><span>Dự án</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-menu')); ?>"><i data-feather="edit"></i><span>Menu</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-brand')); ?>"><i data-feather="edit"></i><span>Thương hiệu</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-news')); ?>"><i data-feather="edit"></i><span>Tin tức</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-news-cate')); ?>"><i data-feather="edit"></i><span>Nhóm tin tức</span></a></li>
            <li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-product')); ?>"><i data-feather="edit"></i><span>Sản phẩm</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-product-cate')); ?>"><i data-feather="edit"></i><span>Nhóm sản phẩm</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-department')); ?>"><i data-feather="edit"></i><span>Phòng ban</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-timeline')); ?>"><i data-feather="edit"></i><span>Dấu mốc lịch sử</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-slide')); ?>"><i data-feather="edit"></i><span>Slide</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('view-slide1')); ?>"><i data-feather="edit"></i><span>Slide mobile</span></a></li>
			
            <li class="sidebar-main-title">
            <div>
                <h6>Cấu hình            </h6>
            </div>
            </li>
            <li><a class="nav-link menu-title link-nav" href="<?php echo e(route('dashboard-setting','general')); ?>"><i data-feather="box"></i><span>Thông tin chung</span></a></li>
            <li><a class="nav-link menu-title link-nav" href="<?php echo e(route('dashboard-setting','website')); ?>"><i data-feather="layout"></i><span>Giao diện</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('dashboard-setting','home')); ?>"><i data-feather="layout"></i><span>Trang chủ</span></a></li>
			<li><a class="nav-link menu-title link-nav" href="<?php echo e(route('dashboard-setting','about')); ?>"><i data-feather="layout"></i><span>Giới thiệu</span></a></li>
            <li><a class="nav-link menu-title link-nav" href="<?php echo e(route('dashboard-setting','image')); ?>"><i data-feather="layout"></i><span>Ảnh/Logo</span></a></li>
        </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
    </nav>
</header>
<?php /**PATH D:\laragon\www\htc\resources\views/admin/layout/left.blade.php ENDPATH**/ ?>