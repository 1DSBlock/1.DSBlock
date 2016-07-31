<?php
echo $this->element('Common/header');
echo $this->element('Common/top');
echo $this->element('Common/main-nav');
?>
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<?php 
echo $this->element('Common/footer');
?>
