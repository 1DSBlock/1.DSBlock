<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);
echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(".select2").select2();', ['block' => 'scriptBottom']);
echo $this->Html->script('../system/dist/js/pages/pages.js', ['block' => 'scriptBottom']);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Pages
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Examples</a></li>
<li class="active">Invoice</li>
</ol>
</section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($entity); ?>
              <div class="box-body">
              	<?php echo $this->Form->input('name', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Name']); ?>
              	<?php echo $this->Form->radio('type', $articlesType, ['default' => 0, 'class' => 'form-control type-select']); ?>
              	<div class="form-group articles-list">
              	<label for="title">Articles</label>
              	<?php 
                echo $this->Form->select(
                    'article_id',
                    $articles,
                    ['class' => 'form-control select2']
                    );
                ?>
                </div>
                <div class="form-group categories-list">
                <label for="title">Categories</label>
              	<?php 
                echo $this->Form->select(
                    'article_category_id',
                    $categories,
                    ['class' => 'form-control select2']
                    );
                ?>
                </div>
                <?php echo $this->Form->input('link', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Link']); ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default back">Back</button>
              </div>
              <?php echo $this->Form->hidden('id'); ?>
            <?php echo $this->Form->end();?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        </div>
</section>