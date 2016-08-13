<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <?= __('Customers') ?>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= __('Customers Manager') ?></h3>
              <?php echo $this->element('Admin/search'); ?>
            </div>
            <div class="box-header">
            <button type="button" class="btn btn-primary" id="addNew"><?php echo __('Add +'); ?></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th><?php echo $this->Paginator->sort('id', __('ID')); ?></th>
                  <th><?php echo $this->Paginator->sort('fullname', __('Fullname')); ?></th>
                  <th><?php echo $this->Paginator->sort('email', __('Email')); ?></th>
                  <th><?php echo $this->Paginator->sort('UserTypes.title', __('UserTypes')); ?></th>
                  <th><?php echo $this->Paginator->sort('birthday', __('Birthday')); ?></th>
                  <th><?php echo $this->Paginator->sort('phone', __('Phone')); ?></th>
                  <th><?php echo $this->Paginator->sort('created', __('Created')); ?></th>
                  <th></th>
                </tr>
                <?php if(!$rows->count()) : ?>
                <tr>
                  <td colspan="8" align="center">No data</td>
                </tr>
                <?php endif;?>
                <?php
                foreach($rows as $item) :
                ?>
                <tr>
                  <td><?= $item->id; ?></td>
                  <td><?= $item->fullname; ?></td>
                  <td><?= $item->email; ?></td>
                  <td><?= $item->user_type->title; ?></td>
                  <td><?= $item->birthday_full; ?></td>
                  <td><?= $item->phone; ?></td>
                  <td><?= $item->created_full; ?></td>
                  <td>
                  <button type="button" class="btn-xs btn-info detail-item" data-id="<?= $item->id; ?>"><?php echo __('Detail'); ?></button>
                  <button type="button" class="btn-xs btn-warning edit-item" data-id="<?= $item->id; ?>"><?php echo __('Edit'); ?></button>
                  <button type="button" class="btn-xs btn-danger delete-item" data-id="<?= $item->id; ?>"><?php echo __('Delete'); ?></button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
            <?php echo $this->element('Admin/paginate'); ?>
          </div>
          <!-- /.box -->
        </div>
    </div>
    </section>
