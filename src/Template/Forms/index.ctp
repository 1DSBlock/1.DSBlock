<div class="breadcrumb_category">
	<div class="container">
		<span class="name_cate_parent">Forms</span>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1></h1>
			
  			<div class="list-group">
  			<?php 
			$index = 1;
			foreach($forms as $form) : 
			    $link = $this->Url->build(['controller' => 'Articles', 'action' => 'download', 'path' => $form->image_full_path, 'filename'=> $form->filename]);
			?>
				<a href="<?php echo $link; ?>" target="_blank" class="list-group-item">
                  <h4 class="list-group-item-heading"><?php echo $index++ . '.' . $form->description; ?><i class="fa fa-paperclip" aria-hidden="true"></i></h4>
                </a>
			<?php endforeach; ?>
  			</div>
		</div>
	</div>

</div>