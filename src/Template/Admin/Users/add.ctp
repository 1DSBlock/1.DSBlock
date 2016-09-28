<!-- Content Header (Page header) -->
<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);
echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(function () {
    $("#birthday").datepicker({
      format: "dd/mm/yyyy"
    });
    $(".select2").select2();
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
              <h3 class="box-title"><?php echo __('Add new'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($entity); ?>
              <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab"><?= __('Info') ?></a></li>
                  <li><a href="#tab_2" data-toggle="tab"><?= __('Medical History') ?></a></li>
                  <li><a href="#tab_3" data-toggle="tab"><?= __('Info Others') ?></a></li>
                  <li><a href="#tab_4" data-toggle="tab"><?= __('Medical Assessment') ?></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <?php echo $this->Form->input('fullname', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Fullname')]); ?>
                    <?php echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email']); ?>
                    <?php echo $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => __('Password'), 'value' => '']); ?>
                    <?php echo $this->Form->input('confirm-password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => __('Confirm Password'), 'value' => '']); ?>
                    <div class="form-group"><label for="title"><?= __('UserTypes') ?></label>
                    <?php
                    echo $this->Form->select(
                        'user_type_id',
                        $userTypes,
                        ['class' => 'form-control select2']
                        );
                    ?>
                    </div>
                    <?php echo $this->Form->input('birthday', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Birthday')]); ?>
                    <?php echo $this->Form->input('phone', ['class' => 'form-control', 'type' => 'number', 'placeholder' => __('Phone')]); ?>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                    <label for="title"><?= __('Medical History') ?></label>
                    <?php
                    echo $this->Form->select(
                        'medical_history_id',
                        $medicals,
                        ['class' => 'form-control select2', 'multiple' => 'multiple', 'style' => 'width: 100%']
                        );
                    ?>                                          
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <?php echo $this->Form->input('passport', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Passport')]); ?>
                    <?php echo $this->Form->input('identity', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Identity')]); ?>
                    <?php echo $this->Form->input('job', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Job')]); ?>
                    <?php echo $this->Form->input('company', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Company')]); ?>
                    <?php echo $this->Form->input('position', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Position')]); ?>
                    <?php echo $this->Form->input('address', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => __('Address')]); ?>
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="tab_4">
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_4_1" data-toggle="tab"><?= __('Tab 1') ?></a></li>
                        <li><a href="#tab_4_2" data-toggle="tab"><?= __('Tab 2') ?></a></li>
                        <li><a href="#tab_4_3" data-toggle="tab"><?= __('Tab 3') ?></a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_4_1">                          
                          <ul>
                          <?php foreach ($familyHistory as $key=>$name): ?>
                            <?php echo $this->Form->input($key, ['type' => 'checkbox', 'value' => $name]); ?>                            
                          <?php endforeach; ?>
                          </ul> 
                        </div><!-- /.tab-pane -->
                      </div><!-- /.tab-content -->
                    </div><!-- nav-tabs-custom -->

                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
                    </div><!-- nav-tabs-custom -->

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
