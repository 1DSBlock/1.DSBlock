<!-- Content Header (Page header) -->
<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);
echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(".select2").select2();', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(function () {
    $("#contract-sign-date, #treatment-date").datepicker({
      format: "dd/mm/yyyy"
    });
    $(".textarea").wysihtml5();
  });', ['block' => 'scriptBottom']);
echo $this->Html->script('../system/dist/js/pages/user_treatment.js', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
<?= __('UserTreatments') ?>
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
              <div class="box-body">
                <div class="form-group"><label for="title"><?= __('Users') ?></label>
                <?php
                echo $this->Form->select(
                    'user_id',
                    $users,
                    ['empty' => __('-- Choose An User --'), 'class' => 'form-control select2']
                    );
                ?>
                </div>
              	<?php echo $this->Form->input('contract_number', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Contract Number')]); ?>
                <?php echo $this->Form->input('contract_sign_date', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Contract Signature Date')]); ?>
                <?php echo $this->Form->input('contract_price', ['class' => 'form-control', 'type' => 'number', 'placeholder' => __('Contract Price')]); ?>
                <?php echo $this->Form->input('treatment_date', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Treatment Date')]); ?>
                <?php echo $this->Form->input('treatment_content', ['class' => 'form-control', 'type' => 'file']); ?>
                <?php echo $this->Form->input('treatment_result', ['class' => 'form-control', 'type' => 'file']); ?>
                <div class="form-group"><label for="title"><?= __('Products') ?></label>
                <?php
                echo $this->Form->select(
                    'product_id',
                    $products,
                    ['class' => 'form-control select2']
                    );
                ?>
                </div>
                <div class="form-group"><label for="title"><?= __('Saller') ?></label>
                <?php
                echo $this->Form->select(
                    'saller_id',
                    $sallers,
                    ['empty' => __('-- Choose An Saller --'), 'class' => 'form-control select2']
                    );
                ?>
                </div>
                <?php echo $this->Form->input('note', ['class' => 'textarea form-control', 'placeholder' => __('Note')]); ?>
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
