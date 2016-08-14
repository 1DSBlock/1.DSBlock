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
<?= __('Customer Service') ?>
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
            <?php echo $this->Form->create($entity, ['type' => 'file']); ?>
              <div class="box-body pad">
              	<?php echo $this->Form->input('topic', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Topic')]); ?>
                <?php echo $this->Form->input('template', ['error' => false, 'class' => 'textarea form-control', 'placeholder' => 'Template', 'style' => 'height: 400px']); ?>
                <?php echo $this->Form->error('template'); ?>
                <?php echo $this->Form->input('attach', ['type' => 'file']); ?>
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
