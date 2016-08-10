<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
Salers
</h1>
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
              	<?php echo $this->Form->input('fullname', ['class' => 'form-control', 'type' => 'text', 'placeholder' => 'Fullname']); ?>
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
