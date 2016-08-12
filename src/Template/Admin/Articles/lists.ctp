<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Articles Manager</h3>
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
                  <th><?php echo $this->Paginator->sort('title', __('Title')); ?></th>
                  <th>Alias</th>
                  <th><?php echo $this->Paginator->sort('ArticleCategories.title', __('Category')); ?></th>
                  <th><?php echo $this->Paginator->sort('created', __('Created')); ?></th>
                  <th></th>
                </tr>
                <?php if(!$rows->count()) : ?>
                <tr>
                  <td colspan="5" align="center">No data</td>
                </tr>
                <?php endif;?>
                <?php
                foreach($rows as $item) :
                    $categoryName = '';
                    if(!empty($item->article_category)) {
                        $categoryName = $item->article_category->title;
                    }
                ?>
                <tr>
                  <td><?= $item->id; ?></td>
                  <td><?= $item->title; ?></td>
                  <td><?= $item->alias; ?></td>
                  <td><?= $categoryName; ?></td>
                  <td><?= $item->created; ?></td>
                  <td>
                  <button type="button" class="btn-xs btn-warning edit-item" data-id="<?= $item->id; ?>"><?php echo __('Edit'); ?></button>
                  <button type="button" class="btn-xs btn-danger delete-item" data-id="<?= $item->id; ?>"><?php echo __('Xoá'); ?></button>
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
