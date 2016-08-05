<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Forms</h1>
			<ul>
			<?php foreach($forms as $form) :?>
				<li><?php echo $form->description; ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>