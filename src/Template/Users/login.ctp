<div class="breadcrumb_category">
    <div class="container">
        <span class="name_cate_parent">Đăng nhập</span>
    </div>
</div>
<div class="container">
  <?php echo $this->Form->create(null, ['class' => 'form-signin']); ?>

    <?php echo $this->Flash->render('auth'); ?>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mật khẩu" required>

    <button class="btn btn-lg submit_contact btn-block" type="submit">Đăng nhập</button>
    <?php echo $this->Form->end(); ?>

</div> <!-- /container -->

