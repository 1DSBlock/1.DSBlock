<?php
echo $this->Html->css('../system/plugins/fullcalendar/fullcalendar.min', ['block' => 'css']);
// echo $this->Html->css('../system/plugins/fullcalendar/fullcalendar.print', ['block' => 'css']);

echo $this->Html->script('../system/plugins/fullcalendar/fullcalendar.min', ['block' => 'scriptBottom']);
echo $this->Html->script('../system/dist/js/pages/calendar.js', ['block' => 'scriptBottom']);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Calendar
  </h1>
</section>
 <!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">
          <!-- THE CALENDAR -->
          <div id="calendar"></div>
        </div><!-- /.box-body -->
      </div><!-- /. box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
