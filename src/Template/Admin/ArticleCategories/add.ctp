<!-- Content Header (Page header) -->
<?php
$this->Html->scriptBlock('$(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
Article Categories
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
              <div class="box-body">
              	<?php echo $this->Form->input('title', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Title']); ?>
              	<?php echo $this->Form->input('alias', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Alias']); ?>
                <?php echo $this->Form->input('description', ['class' => 'textarea form-control', 'placeholder' => 'Description']); ?>
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
