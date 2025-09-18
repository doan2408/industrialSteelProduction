<div class="dd nestable_menu" id="nestable">
	<ol class="dd-list">
		<?php
		if(isset($menu) && count($menu)>0){
			foreach ($menu as $item) {
				if ($item->parent_id == 0) {
				?>
				<li class="dd-item dd3-item" data-id="<?php echo e($item->id); ?>">
					<div class="dd-handle dd3-handle"></div>
					<div class="dd3-content">
						<?php echo e($item->name); ?>

						<span class="action_menu">
							<a href="javascript:;" onclick="edit_menu(<?php echo e($item->id); ?>,'<?php echo e($item->name); ?>','<?php echo e($item->url); ?>','<?php echo e(route('post-quick-add')); ?>','<?php echo e($item->megamenu); ?>')"><i class="fa fa-edit"></i></a>  
							<a href="javascript:;" onclick="delete_menu(<?php echo e($item->id); ?>,'<?php echo e(route('post-quick-delete')); ?>','content_menu_edit')"><i class="fa fa-trash"></i></a>
						</span>
						<span class="link_menu"><?php echo e($item->url); ?></span>											
					</div>
					<?php
					$check_child_1 = 0;
					foreach ($menu as $item_check) {
						if ($item_check->parent_id == $item->id) {
							$check_child_1++;
						}
					}
					if ($check_child_1 > 0) {
						echo '<ol class="dd-list">';
						foreach ($menu as $item1) {													
							if ($item1->parent_id == $item->id) {
								?>
							<li class="dd-item dd3-item" data-id="<?php echo e($item1->id); ?>">
								<div class="dd-handle dd3-handle"></div>
								<div class="dd3-content">
									
									<?php echo e($item1->name); ?>

									<span class="action_menu"><a href="javascript:;" onclick="edit_menu(<?php echo e($item1->id); ?>,'<?php echo e($item1->name); ?>','<?php echo e($item1->url); ?>','<?php echo e(route('post-quick-add')); ?>','<?php echo e($item1->megamenu); ?>')"><i class="fa fa-edit"></i></a>  
									<a href="javascript:;" onclick="delete_menu(<?php echo e($item1->id); ?>,'<?php echo e(route('post-quick-delete')); ?>','content_menu_edit')"><i class="fa fa-trash"></i></a></span>
									<span class="link_menu"><?php echo e($item1->url); ?></span>	
									
								</div>
								<?php
								$check_child_2 = 0;
								foreach ($menu as $item_check1) {
									if ($item_check1->parent_id == $item1->id) {
										$check_child_2++;
									}
								}
								if ($check_child_2 > 0) {
									echo '<ol class="dd-list">';
									foreach ($menu as $item2) {
										if ($item2->parent_id == $item1->id) {
											?>
										<li class="dd-item dd3-item" data-id="<?php echo e($item2->id); ?>">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content">
												
												<?php echo e($item2->name); ?>

												<span class="action_menu"><a href="javascript:;" onclick="edit_menu(<?php echo e($item2->id); ?>,'<?php echo e($item2->name); ?>','<?php echo e($item2->url); ?>','<?php echo e(route('post-quick-add')); ?>','<?php echo e($item2->megamenu); ?>')"><i class="fa fa-edit"></i></a>  
												<a href="javascript:;" onclick="delete_menu(<?php echo e($item2->id); ?>,'<?php echo e(route('post-quick-delete')); ?>','content_menu_edit')"><i class="fa fa-trash"></i></a></span>
												<span class="link_menu"><?php echo e($item2->url); ?></span>	
											
											</div>
										</li>
										<?php
									}
								}
								echo '</ol>';
							}
							?>
							</li>
							<?php
						}
					}
					echo '</ol>';
				}
				?>
				</li>
				<?php
				}	
			}
											
		}
		?>
	</ol>
</div><?php /**PATH F:\wamp64\www\htc\resources\views/admin/menu/ajax.blade.php ENDPATH**/ ?>