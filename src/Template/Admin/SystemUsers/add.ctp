
<!-- Content Header (Page header) -->
<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);
echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(".select2").select2();', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
System Users
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
                <?php echo $this->Form->input('fullname', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Fullname']); ?>
              	<?php echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email']); ?>
                <?php echo $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'value' => '']); ?>
                <?php echo $this->Form->input('confirm-password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'value' => '']); ?>
                <div class="form-group"><label for="title">Role</label>
                <?php
                echo $this->Form->select(
                    'role_id',
                    $roles,
                    ['class' => 'form-control select2']
                    );
                ?>
                </div>
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
