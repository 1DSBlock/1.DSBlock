<?php
echo $this->element('Common/header');
echo $this->element('Common/main-nav');
?>
<div class="content">
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
</div>
<?php 
echo $this->element('Common/footer');
?>
