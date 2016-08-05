
<!-- jQuery 2.2.3 -->
<?php 
echo $this->Html->script('../system/plugins/jQuery/jquery-2.2.3.min');
?>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>
<?php 
// <!-- Bootstrap 3.3.6 -->
echo $this->Html->script('../system/bootstrap/js/bootstrap.min');
// <!-- Morris.js charts -->
echo $this->Html->script('../system/plugins/morris/morris.min');
// <!-- Sparkline -->
echo $this->Html->script('../system/plugins/sparkline/jquery.sparkline.min');
// <!-- jvectormap -->
echo $this->Html->script('../system/plugins/jvectormap/jquery-jvectormap-1.2.2.min');
echo $this->Html->script('../system/plugins/jvectormap/jquery-jvectormap-world-mill-en');
// <!-- jQuery Knob Chart -->
echo $this->Html->script('../system/plugins/knob/jquery.knob');
?>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<?php 
echo $this->Html->script('../system/plugins/daterangepicker/daterangepicker');
// <!-- datepicker -->
echo $this->Html->script('../system/plugins/datepicker/bootstrap-datepicker');
// <!-- Bootstrap WYSIHTML5 -->
echo $this->Html->script('../system/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min');
// <!-- Slimscroll -->
echo $this->Html->script('../system/plugins/slimScroll/jquery.slimscroll.min');
// <!-- FastClick -->
echo $this->Html->script('../system/plugins/fastclick/fastclick');
// <!-- AdminLTE App -->
echo $this->Html->script('../system/dist/js/app.min');
// <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
// echo $this->Html->script('../system/dist/js/pages/dashboard.js');
// <!-- AdminLTE for demo purposes -->
echo $this->Html->script('../system/dist/js/demo.js');

echo $this->Html->script('../system/dist/js/pages/common.js', ['block' => 'scriptBottom']);
?>