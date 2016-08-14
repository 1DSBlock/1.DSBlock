<!-- Content Header (Page header) -->
<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);

echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(".select2").select2();', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
<?= __('Articles') ?>
</h1>
</section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo __('Add new'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($entity); ?>
              <div class="box-body pad">
              	<?php echo $this->Form->input('title', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Title']); ?>
              	<?php echo $this->Form->input('alias', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Alias']); ?>
              	<div class="form-group"><label for="title">Category</label>
              	<?php
                echo $this->Form->select(
                    'article_category_id',
                    $categories,
                    ['empty' => 'None', 'class' => 'form-control select2']
                    );
                ?>
                </div>
                <?php echo $this->Form->input('description', ['error' => false, 'class' => 'textarea form-control', 'placeholder' => 'Description']); ?>
                <?php echo $this->Form->error('description'); ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo __('Save'); ?></button>
                <button type="button" class="btn btn-default back"><?php echo __('Back'); ?></button>
              </div>
            <?php echo $this->Form->end();?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        </div>
</section>
