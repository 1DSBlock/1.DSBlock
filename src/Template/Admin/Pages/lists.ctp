<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Pages
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pages Manager</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-header">
            <button type="button" class="btn btn-primary" id="addNew"><?php echo __('Add +') ?></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Page</th>
                  <th>Key</th>
                  <th>Link</th>
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
                  <td><?= $item->name; ?></td>
                  <td><?= $item->keylink; ?></td>
                  <td><?= $item->page_url->link; ?></td>
                  <td>
                  <button type="button" class="btn-xs btn-warning edit-item" data-id="<?= $item->id; ?>"><?php echo __('Edit'); ?></button>
                  </td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <!-- /.box-body -->
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
    </div>
    </section>
