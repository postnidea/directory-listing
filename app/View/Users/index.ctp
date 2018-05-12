<div class="row">
	<div class="col-md-5 offset-1">
		<div class="card">
			<div class="card-header">Register</div>
			<div class="card-body">
			<?php echo $this->Flash->render() ?>
			<?php echo $this->Form->create('User',array('url' => 'add')); ?>
      
        	<?php echo $this->Form->input('fullname',array('div' =>'form-group','class'=>'form-control')); ?>
        	<?php echo $this->Form->input('email',array('div' =>'form-group','class'=>'form-control')); ?>

        	<?php echo $this->Form->input('username',array('div' =>'form-group','class'=>'form-control')); ?>

        	<?php echo $this->Form->input('password',array('div' =>'form-group','class'=>'form-control')); ?>

			<?php 
			$options = array('label' => 'Register','div' => array('class' => 'submit'),'class'=>'btn btn-default');

			echo $this->Form->end($options); ?>
			</div>

		</div>
	</div>
	<div class="col-md-5">
		<div class="card">
		<div class="card-header">Login</div>
			<div class="card-body">
			<?php echo $this->Flash->render('auth'); ?>
			<?php echo $this->Form->create('User',array('url' => 'login')); ?>
		    <?php echo $this->Form->input('username',array('div' =>'form-group','class'=>'form-control')); ?>
		    <?php echo $this->Form->input('password',array('div' =>'form-group','class'=>'form-control')); ?>
		    <?php 
			$options = array('label' => 'Login','div' => array('class' => 'submit'),'class'=>'btn btn-default');

			echo $this->Form->end($options); ?>
			</div>
		</div>
	</div>
</div>

	
