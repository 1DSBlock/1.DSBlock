<?php
$this->Html->scriptBlock('$(function () {
    $(\'[data-toggle="tooltip"]\').tooltip();
  });', ['block' => 'scriptBottom']);
?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= __('Questions') ?>
      </h1>

    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= __('Questions Manager') ?></h3>
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
                  <th><?php echo $this->Paginator->sort('name', __('Name')); ?></th>
                  <th></th>
                </tr>
                <?php if(!$rows->count()) : ?>
                <tr>
                  <td colspan="3" align="center">No data</td>
                </tr>
                <?php endif;?>
                <?php
                foreach($rows as $item) :
                ?>
                <tr>
                  <td><?= $item->id; ?></td>
                  <td><a href="#" data-toggle="tooltip" title="<?= $item->name; ?>">
                  <?php
                  echo $this->Text->truncate(
                      $item->name,
                      100,
                      [
                          'ellipsis' => '...',
                          'exact' => false
                      ]
                  );
                  ?>
                  </a></td>
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
