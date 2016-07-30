<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Articles
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Articles Manager</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                </tr>
                <?php if(!$rows->count()) : ?>
                <tr>
                  <td colspan="4" align="center">No data</td>
                </tr>
                <?php endif;?>
                <?php
                foreach($rows as $item) :
                ?>
                <tr>
                  <td><?= $item->id; ?></td>
                  <td><?= $item->title; ?></td>
                  <td><?= $item->created->toString(); ?></td>
                  <td><span class="label label-success">Approved</span></td>
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