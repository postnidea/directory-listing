<div class="row">
	<div class="col-md-6">
		<?php echo $this->Form->create('User',array('url' => 'add')); ?>
      
        <?php echo $this->Form->input('username',array('div' =>'form-group','class'=>'form-control'));
        echo $this->Form->input('password',array('div' =>'form-group','class'=>'form-control'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author'),
            'div' =>'form-group','class'=>'form-control'
        ));
    ?>

<?php 
$options = array('label' => 'Submit','div' => array('class' => 'submit'),'class'=>'btn btn-default');

echo $this->Form->end($options); ?>
	</div>
	<div class="col-md-6">
		============ block 2 ============
	</div>

</div>

	
