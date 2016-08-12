<?php
if(empty($params['class']) || $params['class'] == 'error') :
?>
<div class="alert alert-danger">
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;<?= h($message) ?>
</div>
<?php else : ?>
<div class="alert alert-success">
<i class="fa fa-exclamation-circle" aria-hidden="true"></i>&nbsp;<?= h($message) ?>
</div>
<?php endif; ?>
