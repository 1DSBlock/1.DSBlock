<?php
use Cake\Routing\Router;

echo $this->element('slides');
?>
<div class="wrapper_color">
			<div class="container">
				<h2 class="name_cate product_"><a>CHÀO MỪNG ĐẾN VỚI DSBLOCK</a></h2>
				<div class="wrap_product">
						<div class="item_product">
							<?php
							echo $this->Html->link(
							    $this->Html->image("introductions.jpg", array(
							        "alt" => "GIỚI THIỆU"
							    )),
							    $pages['introductions'],
							    array("class" => "img_product", "escape" => false)
							    );
							echo $this->Html->link('GIỚI THIỆU', $pages['introductions']->page_url->route_link, ['class' => 'name_product']);
							?>
						</div>
						<div class="item_product">
							<?php
							echo $this->Html->link(
							    $this->Html->image("qa.jpg", array(
							        "alt" => "CÂU HỎI THƯỜNG GẶP"
							    )),
							    $pages['qa'],
							    array("class" => "img_product", "escape" => false)
							    );
							echo $this->Html->link('CÂU HỎI THƯỜNG GẶP', $pages['qa']->page_url->route_link, ['class' => 'name_product']);
							?>
						</div>
						<div class="item_product">
							<?php
							echo $this->Html->link(
							    $this->Html->image("about-us.jpg", array(
							        "alt" => "VỀ CHÚNG TÔI"
							    )),
							    $pages['about-us'],
							    array("class" => "img_product", "escape" => false)
						    );
							echo $this->Html->link('VỀ CHÚNG TÔI', $pages['about-us']->page_url->route_link, ['class' => 'name_product']);
							?>
						</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
