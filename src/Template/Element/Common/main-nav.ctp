<header>
	<div class="navtop">
		<div class="container">
			<div class="center">
				<span>Hãy gọi cho chúng tôi để được tư vấn: <a href="tel:0983 358 188"><strong>098 3358 188</strong></a></span>
				<span class="mxh">
                    <a href="https://www.facebook.com/tebaotuoi/?fref=ts" target="_blank" rel="nofollow" class="facebook">FB</a>
					<a href="https://www.youtube.com/channel/UCG_H1Su6YfYtjXwYEExtKnw" target="_blank" rel="nofollow" class="youtobe">Youtube</a>
				</span>
                <div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<a href="/" class="logo"><?php echo $this->Html->image('logo.png', ['alt' => 'logo']);?>LIỆU PHÁP TẾ BÀO TƯƠI TẠI CHLB ĐỨC Trẻ hơn – Khoẻ hơn – Giàu có hơn
			</a>
			<ul class="navmenu">
				<li class=""><a href="<?= $this->Url->build($pages['introductions']->page_url->route_link) ?>">GIỚI THIỆU</a><span></span></li>
				<li class=""><a href="<?= $this->Url->build($pages['forms']->page_url->route_link) ?>">FORMS</a><span></span></li>
				<li class=""><a href="<?= $this->Url->build($pages['qa']->page_url->route_link) ?>">CÂU HỎI<br>THƯỜNG GẶP</a><span></span></li>
			<?php if(empty($this->request->session()->check('Auth.User'))) : ?>
				<li class=""><a href="<?= $this->Url->build($pages['login']->page_url->route_link) ?>">ĐĂNG NHẬP</a><span></span>
				</li>
			<?php else: ?>
				<li class="">
				<a href="#">Chào <?php echo $this->request->session()->read('Auth.User.fullname'); ?></a>,
				<a href="<?= $this->Url->build($pages['logout']->page_url->route_link) ?>">THOÁT</a><span></span>
				</li>
			<?php endif; ?>
				<div class="clearfix"></div>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</header>
<div class="container dropmenu">
	<div class="navfixed">
		<div class="dropdown dropdown_menu">
			<button class="dropdown-toggle" type="button" data-toggle="dropdown">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand"><?php echo $this->Html->image('logo.png', ['alt' => 'logo']);?></a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
				<li class=""><a href="<?= $this->Url->build($pages['introductions']->page_url->route_link) ?>">GIỚI THIỆU</a><span></span></li>
				<li class=""><a href="<?= $this->Url->build($pages['forms']->page_url->route_link) ?>">FORMS</a><span></span></li>
				<li class=""><a href="<?= $this->Url->build($pages['qa']->page_url->route_link) ?>">CÂU HỎI<br>THƯỜNG GẶP</a><span></span></li>
				<li class=""><a href="<?= $this->Url->build($pages['login']->page_url->route_link) ?>">ĐĂNG NHẬP</a><span></span></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
