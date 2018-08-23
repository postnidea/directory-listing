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
           <?php echo $this->Form->create('Category'); ?>
           <?php    echo $this->Form->input('id'); ?>
                    <?php
                      $category_options = array();
                      foreach($existing_categories as $category){
                      $category_options[$category['Category']['id']]=$category['Category']['name'];

                      }
                     ?>
                    <?php echo $this->Form->select('parent_id', $category_options,array('div' =>'form-group','class'=>'form-control','label' => 'Select Parent')); ?>
                    
                    <?php echo $this->Form->input('name',array('div' =>'form-group','class'=>'form-control','label' => 'Category')); ?>
                    <?php 
         $options = array('label' => 'Add','div' => array('class' => 'submit'),'class'=>'btn btn-default');

         echo $this->Form->end($options); ?>
               </div>
               </div>

         </div>
     </div>