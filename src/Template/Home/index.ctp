<?php
use Cake\Routing\Router;

echo $this->element('slides');
?>
<div class="wrapper_color">
			<div class="container">
				<h2 class="name_cate product_"><a>WELCOME TO DSBLOCK</a></h2>
				<div class="wrap_product">
						<div class="item_product">
							<?php
							echo $this->Html->link(
							    $this->Html->image("introductions.jpg", array(
							        "alt" => "Introductions"
							    )),
							    $pages['introductions'],
							    array("class" => "img_product", "escape" => false)
							    );
							echo $this->Html->link('INTRODUCTIONS', $pages['introductions'], ['class' => 'name_product']);
							?>
						</div>
						<div class="item_product">
							<?php
							echo $this->Html->link(
							    $this->Html->image("qa.jpg", array(
							        "alt" => "Q & A"
							    )),
							    $pages['qa'],
							    array("class" => "img_product", "escape" => false)
							    );
							echo $this->Html->link('Q & A', $pages['qa'], ['class' => 'name_product']);
							?>
						</div>
						<div class="item_product">
							<?php
							echo $this->Html->link(
							    $this->Html->image("about-us.jpg", array(
							        "alt" => "About Us"
							    )),
							    $pages['about-us'],
							    array("class" => "img_product", "escape" => false)
						    );
							echo $this->Html->link('ABOUT US', $pages['about-us'], ['class' => 'name_product']);
							?>
						</div>
						<div class="clearfix"></div>
				</div>
			</div>
		</div>
