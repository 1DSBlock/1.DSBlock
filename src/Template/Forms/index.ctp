<div class="breadcrumb_category">
	<div class="container">
		<span class="name_cate_parent">Forms</span>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1></h1>
			<ol>
  			<?php
			foreach($forms as $form) :
			    $link = $this->Url->build(['controller' => 'Articles', 'action' => 'download', 'path' => $form->image_full_path, 'filename'=> $form->filename]);
			?>
				<li><a class="text-uppercase" href="<?php echo $link; ?>" target="_blank">
                  <i class="fa fa-paperclip" aria-hidden="true"></i>&nbsp;<?php echo $form->description; ?>
                </a></li>
			<?php endforeach; ?>
            </ol>
		</div>
	</div>

</div>
