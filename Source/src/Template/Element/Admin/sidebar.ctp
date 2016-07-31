<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Articles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $this->Url->build(['controller' => 'articles', 'action' => 'lists']); ?>"><i class="fa fa-circle-o"></i>Articles Manager</a></li>
            <li><a href="<?php echo $this->Url->build(['controller' => 'article_categories', 'action' => 'lists']); ?>"><i class="fa fa-circle-o"></i> Article Categories Manager</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo $this->Url->build(['controller' => 'forms', 'action' => 'lists']); ?>">
            <i class="fa fa-edit"></i> <span>Forms Manager</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'lists']); ?>">
            <i class="fa fa-users"></i> <span>Customers Manager</span>
          </a>
        </li>
        <li class="header">SYSTEM</li>
        <li>
          <a href="<?php echo $this->Url->build(['controller' => 'system_users', 'action' => 'lists']); ?>">
            <i class="fa fa-users"></i> <span>System Users Manager</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>