<!-- Content Header (Page header) -->
<?php
echo $this->Html->scriptBlock('$(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
<?= __('Products') ?>
</h1>
</section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo __('Edit'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($entity, ['type' => 'file']); ?>
              <div class="box-body">
                <?php echo $this->Form->input('name', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Name']); ?>
                <?php echo $this->Form->input('provider', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Provider']); ?>
                <?php echo $this->Form->input('description', ['class' => 'textarea form-control', 'placeholder' => 'Description']); ?>
                <?php echo $this->Form->input('image', ['type' => 'file']); ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo __('Save'); ?></button>
                <button type="button" class="btn btn-default back"><?php echo __('Back'); ?></button>
              </div>
              <?php echo $this->Form->hidden('id'); ?>
            <?php echo $this->Form->end();?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        </div>
</section>
