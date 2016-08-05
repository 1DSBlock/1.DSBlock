<?php 
use Cake\Routing\Router;

echo $this->element('slides');
?>
<div class="wrapper_color">
			<div class="container">
				<h2 class="name_cate product_"><a>WELCOME TO DSBLOCK</a></h2>
				<div class="wrap_product">
						<div class="item_product">
							<a href="<?php echo Router::url('introductions.html'); ?> class="img_product">
								<img src="img/introductions.jpg" alt="repair-aktiv-creme">
							</a>
							<a href="<?php echo Router::url('introductions.html'); ?>" class="name_product">INTRODUCTIONS</a>
						</div>
						<div class="item_product">
							<a href="<?php echo Router::url('q&a.html'); ?>" class="img_product">
								<img src="img/qa.jpg" alt="repair-aktiv-creme">
							</a>
							<a href="<?php echo Router::url('q&a.html'); ?>" class="name_product">Q & A</a>
						</div>
						<div class="item_product">
							<a href="<?php echo Router::url('about-us.html'); ?>" class="img_product">
								<img src="img/about-us.jpg" alt="repair-aktiv-creme">
							</a>
							<a href="<?php echo Router::url('about-us.html'); ?>" class="name_product">ABOUT US</a>
						</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>