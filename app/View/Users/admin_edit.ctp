<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
         <div class="row">
        <div class="col-md-6">
               <div class="card">
               <div class="card-header">Add User</div>
               <div class="card-body">
                     <?php echo $this->Form->create('User'); ?>
      <?php 		echo $this->Form->input('id'); ?>
         <?php echo $this->Form->input('fullname',array('div' =>'form-group','class'=>'form-control')); ?>
         <?php echo $this->Form->input('email',array('div' =>'form-group','class'=>'form-control')); ?>

         <?php echo $this->Form->input('username',array('div' =>'form-group','class'=>'form-control')); ?>

         <?php 
         $options = array('label' => 'Register','div' => array('class' => 'submit'),'class'=>'btn btn-default');

         echo $this->Form->end($options); ?>
               </div>
               </div>

         </div>
     </div>