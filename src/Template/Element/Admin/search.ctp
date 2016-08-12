
<div class="box-tools"><?php echo $this->Form->create(); ?>
<div class="input-group input-group-sm" style="width: 150px;">

  <input type="text" value="<?php echo !empty($this->request->data('keyword')) ? $this->request->data('keyword') : ''; ?>" name="keyword" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

  <div class="input-group-btn">
    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
  </div>

</div><?php echo $this->Form->end(); ?>
</div>

