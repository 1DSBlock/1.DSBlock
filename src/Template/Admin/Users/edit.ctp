<!-- Content Header (Page header) -->
<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);
echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(".select2").select2();', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(function () {
    //bootstrap WYSIHTML5 - text editor
    $("#birthday").datepicker({
      format: "dd/mm/yyyy"
    });
  });', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
<?= __('Customers') ?>
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
            <?php echo $this->Form->create($entity); ?>
              <div class="box-body">
              	<?php echo $this->Form->input('fullname', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Fullname']); ?>
                <?php echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email']); ?>
                <?php echo $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'value' => '']); ?>
                <?php echo $this->Form->input('confirm-password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'value' => '']); ?>
                <div class="form-group"><label for="title"><?= __('UserTypes') ?></label>
                <?php
                echo $this->Form->select(
                    'user_type_id',
                    $userTypes,
                    ['class' => 'form-control select2']
                    );
                ?>
                </div>
                <?php echo $this->Form->input('birthday', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Birthday']); ?>
                <?php echo $this->Form->input('phone', ['class' => 'form-control', 'type' => 'number', 'placeholder' => 'Phone']); ?>
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
