<div class="footer">
			<div class="container">
		<div class="logo_ft">
			<a href="/" class="logo"><?php echo $this->Html->image('logo.png', ['alt' => 'logo']);?>
				<br>LIỆU PHÁP TẾ BÀO TƯƠI TẠI CHLB ĐỨC Trẻ hơn – Khoẻ hơn – Giàu có hơn
			</a>
			<div class="mxh">
				<a href="https://www.facebook.com/tebaotuoi/?fref=ts" class="facebook" target="_blank" rel="nofollow"></a>
				<a href="https://www.youtube.com/channel/UCG_H1Su6YfYtjXwYEExtKnw" class="youtobe" target="_blank" rel="nofollow"></a>
			</div>

		</div>
					<div class="ground_info">
			<div class="address">
				<strong>Tế Bào Tươi</strong>
				<br>
				11A, đường P, Khu phố Mỹ Giang 1A, P.Tân Phong, Q.7, TP.HCM
			</div>
			<div class="mail">Email:<a href="mailto:clients@ds-block.com"> clients@ds-block.com </a>
				<br> Website: <a href="/" target="_blank" rel="nofollow">www.ds-block.com</a>
			</div>
			<div class="hotline">
				<strong>Hotline:</strong>
				<br>
				<a href="tel:098 3358 188">098 3358 188</a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="clearfix"></div>
</div>
<div id="goTop" class="gotoppage"><?php echo $this->Html->image('gotop.png', ['alt' => 'Lên đầu trang']);?></div>

<?php
echo $this->Html->script('jquery.min');
echo $this->Html->script('notify');
echo $this->Html->script('notify-metro');
echo $this->Html->script('bootstrap.min');
echo $this->Html->script('dropdowns-enhancement');
echo $this->Html->script('masonry.pkgd.min');
echo $this->Html->script('jquery.flexslider');
echo $this->Html->script('owl.carousel');
echo $this->Html->script('progressbar.min');
echo $this->Html->script('progressbar');
echo $this->Html->script('embedyoutube');
echo $this->Html->script('jquery.prettyPhoto');
echo $this->Html->script('jquery.validate');
echo $this->Html->script('website');
?>
<?= $this->fetch('scriptBottom') ?>
</body>
</html>
