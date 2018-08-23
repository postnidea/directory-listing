    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
        <?php echo $this->Form->input('username',array('div' =>'form-group','class'=>'form-control','placeholder'=>'username')); ?>
         <?php echo $this->Form->input('password',array('div' =>'form-group','class'=>'form-control','placeholder'=>'password')); ?>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                 <?php echo $this->Form->checkbox('remember',array('placeholder'=>'password')); ?> Remember Password</label>
            </div>
           </div>

         <?php 
      $options = array('label' => 'Login','div' => array('class' => ''),'class'=>'btn btn-primary btn-block');

      echo $this->Form->end($options); ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
