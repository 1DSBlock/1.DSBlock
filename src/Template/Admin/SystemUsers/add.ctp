
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
System Users
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="#">Examples</a></li>
<li class="active">Invoice</li>
</ol>
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
              	<?php echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email']); ?>
                <?php echo $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'value' => '']); ?>
                <?php echo $this->Form->input('confirm-password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'value' => '']); ?>
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