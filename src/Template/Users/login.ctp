<div class="breadcrumb_category">
    <div class="container">
        <span class="name_cate_parent">Login</span>
    </div>
</div>
<div class="container">
  <?php echo $this->Form->create(null, ['class' => 'form-signin']); ?>

    <?php echo $this->Flash->render('auth'); ?>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg submit_contact btn-block" type="submit">Sign in</button>
    <?php echo $this->Form->end(); ?>

</div> <!-- /container -->

