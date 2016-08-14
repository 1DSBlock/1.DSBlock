<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= __('UserTreatments') ?>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= __('UserTreatments Manager') ?></h3>
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
                   <th><?php echo $this->Paginator->sort('Users.fullname', __('Fullname')); ?></th>
                  <th><?php echo $this->Paginator->sort('contract_number', __('Contract Number')); ?></th>
                  <th><?php echo $this->Paginator->sort('contract_sign_date', __('Contract Signature Date')); ?></th>
                  <th><?php echo $this->Paginator->sort('contract_price', __('Contract Price')); ?></th>
                  <th><?php echo $this->Paginator->sort('treatment_date', __('Treatment Date')); ?></th>
                  <th><?php echo $this->Paginator->sort('Owners.fullname', __('Saller')); ?></th>
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
                  <td><?= $item->user->fullname; ?></td>
                  <td><?= $item->contract_number; ?></td>
                  <td><?= $item->contract_sign_date_full; ?></td>
                  <td><?= $item->contract_price; ?></td>
                  <td><?= $item->treatment_date_full; ?></td>
                  <td><?= $item->owner->fullname; ?></td>
                  <td>
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
