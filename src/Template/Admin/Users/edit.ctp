<!-- Content Header (Page header) -->
<?php
echo $this->Html->css('../system/plugins/select2/select2.min', ['block' => 'css']);
echo $this->Html->script('../system/plugins/select2/select2.full.min', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(".select2").select2();', ['block' => 'scriptBottom']);
echo $this->Html->scriptBlock('$(function () {
    //bootstrap WYSIHTML5 - text editor
    $("#birthday").datepicker({
      format: "dd/mm/yyyy"
    });
  });', ['block' => 'scriptBottom']);
?>
<section class="content-header">
<h1>
<?= __('Customers') ?>
</h1>
</section>
  <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo __('Edit'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($entity); ?>
              <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab"><?= __('Info') ?></a></li>
                  <li><a href="#tab_2" data-toggle="tab"><?= __('Medical History') ?></a></li>
                  <li><a href="#tab_3" data-toggle="tab"><?= __('Info Others') ?></a></li>
                  <li><a href="#tab_4" data-toggle="tab"><?= __('Medical Assessment') ?></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <?php echo $this->Form->input('fullname', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Fullname')]); ?>
                    <?php echo $this->Form->input('email', ['class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email']); ?>
                    <?php echo $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => __('Password'), 'value' => '']); ?>
                    <?php echo $this->Form->input('confirm-password', ['class' => 'form-control', 'type' => 'password', 'placeholder' => __('Confirm Password'), 'value' => '']); ?>
                    <div class="form-group"><label for="title"><?= __('UserTypes') ?></label>
                    <?php
                    echo $this->Form->select(
                        'user_type_id',
                        $userTypes,
                        ['class' => 'form-control select2']
                        );
                    ?>
                    </div>
                    <?php echo $this->Form->input('birthday', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Birthday')]); ?>
                    <?php echo $this->Form->input('phone', ['class' => 'form-control', 'type' => 'number', 'placeholder' => __('Phone')]); ?>

                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="form-group">
                    <label for="title"><?= __('Medical History') ?></label>
                     <?php
                    $list = !empty($entity->user_medical_histories) ?
                    (new \Cake\Collection\Collection($entity->user_medical_histories))->extract('medical_history_id')->toArray() : [];
                    echo $this->Form->select(
                        'medical_history_id',
                        $medicals,
                        ['class' => 'form-control select2', 'multiple' => 'multiple', 'default' => $list, 'style' => 'width: 100%']
                        );
                    ?>
                    </div>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                    <?php echo $this->Form->input('passport', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Passport')]); ?>
                    <?php echo $this->Form->input('identity', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Identity')]); ?>
                    <?php echo $this->Form->input('job', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Job')]); ?>
                    <?php echo $this->Form->input('company', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Company')]); ?>
                    <?php echo $this->Form->input('position', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Position')]); ?>
                    <?php echo $this->Form->input('address', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => __('Address')]); ?>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_4">
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_4_1" data-toggle="tab"><?= __('Tab 1') ?></a></li>
                        <li><a href="#tab_4_2" data-toggle="tab"><?= __('Tab 2') ?></a></li>
                        <li><a href="#tab_4_3" data-toggle="tab"><?= __('Tab 3') ?></a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_4_1"> 
                          <?php echo $this->Form->input('current_complaints', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => __('Các vấn đề về y tế và bệnh đang cần được lưu tâm')]); ?>
                          <?php echo $this->Form->input('current_medication', ['class' => 'form-control', 'type' => 'textarea', 'placeholder' => __('Thuốc đang sử dụng - tên, liều lượng, cách sử dụng')]); ?>

                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Family history - Indicate which relative(s) and give details</h3>
                            </div><!-- /.box-header -->                              
                              <?php foreach ($familyHistory as $key=>$name): ?>
                                <?php echo $this->Form->input('familyHistory['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>
                                <?php if (!empty($familyHistory[$key]['extension']['type'])): ?>
                                  <?php echo $this->Form->input('familyHistory['. $key .'][type]', ['class' => 'form-control', 'type' => 'text']); ?>                               
                                <?php endif; ?>                                                          
                              <?php endforeach; ?>
                           </div><!-- /.box -->                          

                           <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Past Medical history (Bệnh đã từng mắc)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($pastMedicalHistory as $key=>$name): ?>
                                <?php echo $this->Form->input('pastMedicalHistory['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>
                                <?php if (!empty($pastMedicalHistory[$key]['extension']['type'])): ?>
                                  <?php echo $this->Form->input('pastMedicalHistory['. $key .'][type]', ['class' => 'form-control', 'type' => 'text']); ?>                               
                                <?php endif; ?>
                                                          
                              <?php endforeach; ?>                           
                           </div><!-- /.box -->                             
                          
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane " id="tab_4_2"> 
                          <?php echo $this->Form->input('previous_surgical_operations', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Please specify (Ghi rõ):')]); ?>

                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Previous Aesthtic treatment (Điều trị thẩm mĩ trước đây)</h3>
                            </div><!-- /.box-header -->
                            <?php echo $this->Form->radio(
                                'previous_aesthtic_treatments',
                                [                                  
                                    ['value' => 'b', 'text' => 'Botox'],
                                    ['value' => 'f', 'text' => 'Filler'],
                                    ['value' => 'l', 'text' => 'Laser treatment (Điều trị laser)'],
                                ]
                            ); ?> 
                          </div><!-- /.box -->

                          <?php echo $this->Form->input('othera_aesthtic_treatments', ['class' => 'form-control', 'type' => 'text', 'placeholder' => __('Please specify (Ghi rõ):')]); ?>
                          
                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Gynecological history for Female (Vấn đề phụ khoa đối với nữ giới)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($urinologicalHistoryFemale as $key=>$name): ?>
                                <?php echo $this->Form->input('urinologicalHistoryFemale['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box -->

                           <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Urinological history for male(Vấn đề tiết niệu đối với nam giới)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($urinologicalHistoryMale as $key=>$name): ?>
                                <?php echo $this->Form->input('urinologicalHistoryMale['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box -->                        
                          
                        </div><!-- /.tab-pane -->
                        <div class="tab-pane " id="tab_4_3">                           
                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Sleep (Giấc ngủ)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($sleep as $key=>$name): ?>
                                <?php echo $this->Form->input('sleep['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box -->

                           <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Known allergies (Dị ứng trước đây)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($knowAllergie as $key=>$name): ?>
                                <?php echo $this->Form->input('knowAllergie['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box -->  

                           <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Gastro - Intestinal problems (Về dạ dày - đường ruột)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($gastroIntestinalProblem as $key=>$name): ?>
                                <?php echo $this->Form->input('gastroIntestinalProblem['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box -->                       
                          
                          <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Locomotor system problems (Vấn đề về hệ thống vận động)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($locomotorSystemProblem as $key=>$name): ?>
                                <?php echo $this->Form->input('locomotorSystemProblem['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box --> 

                           <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Regular exercise (tập thể dục đều đặn)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($regularExercise as $key=>$name): ?>
                                <?php echo $this->Form->input('regularExercise['. $key .']', ['type' => 'checkbox', 'label' => $key]); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box -->                            

                           <div class="box box-info">
                            <div class="box-header with-border">
                              <h3 class="box-title">Emotional well-being(Cảm xúc)</h3>
                            </div><!-- /.box-header -->
                              <?php foreach ($emotionalWellBeing as $key=>$name): ?>
                                <?php echo $this->Form->input('emotionalWellBeing['. $key .']', array(    
                                    'options' => array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10),
                                    'label' => $key,
                                    'default' => '0',
                                    'empty' => '(choose one)'
                                )); ?>                            
                              <?php endforeach; ?>                            
                           </div><!-- /.box --> 
                        </div><!-- /.tab-pane -->
                      </div><!-- /.tab-content -->
                    </div><!-- nav-tabs-custom -->

                  </div><!-- /.tab-pane -->
                  
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->

              </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo __('Save'); ?></button>
                <button type="button" class="btn btn-default back"><?php echo __('Back'); ?></button>
              </div>
              <?php echo $this->Form->hidden('id'); ?>
            <?php echo $this->Form->end();?>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        </div>
</section>
