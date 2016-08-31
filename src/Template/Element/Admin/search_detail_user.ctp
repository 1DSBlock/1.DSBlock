<div class="box-tools">
<?php echo $this->Form->create(); ?>
<div class="input-group input-group-sm" style="width: 500px;">
    <div class="input-group-btn search-panel">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span id="search_concept"><?php echo __('Fullname'); ?></span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#fullname"><?php echo __('Fullname'); ?></a></li>
          <li><a href="#email">Email</a></li>
          <li><a href="#user_types"><?php echo __('UserTypes'); ?></a></li>
          <li><a href="#age"><?php echo __('Age'); ?></a></li>
          <li><a href="#phone"><?php echo __('Phone'); ?></a></li>
        </ul>
    </div>
    <div class="input-group-btn search-panel-operator">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span id="search_concept_2"><?php echo __('Chọn'); ?></span> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li class="fullname email user_types age phone"><a href="#equals_to"><?php echo __('='); ?></a></li>
          <li class="fullname email user_types age phone"><a href="#not_equals_to"><?php echo __('!='); ?></a></li>
          <li class="fullname email user_types phone"><a href="#like"><?php echo __('LIKE'); ?></a></li>
          <li class="age"><a href="#greater_than"><?php echo __('>'); ?></a></li>
          <li class="age"><a href="#less_than"><?php echo __('<'); ?></a></li>
        </ul>
    </div>
  <input type="text" value="<?php echo !empty($this->request->data('keyword')) ? $this->request->data('keyword') : ''; ?>" name="keyword" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">
  <input type="hidden" value="" name="search_by" id="search_by" />
  <input type="hidden" value="" name="operator" id="operator" />
  <div class="input-group-btn">
    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
  </div>

</div>
<?php echo $this->Form->end(); ?>
</div>

