<!-- Content Header (Page header) -->
<?php
$this->Html->scriptBlock('$(function () {
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
Q & A
</h1>
</section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add new</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($entity); ?>
              <div class="box-body">
              	<?php echo $this->Form->input('name', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Name']); ?>
                <?php echo $this->Form->input('answer', ['class' => 'textarea form-control', 'placeholder' => 'Answer']); ?>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-default back">Back</button>
              </div>
            <?php echo $this->Form->end();?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        </div>
</section>
