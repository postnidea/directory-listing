       <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
         <div class="row">
            <div class="col-md-5">
               <div class="card">
               <div class="card-header">Add User</div>
               <div class="card-body">
                    <?php echo $this->Form->create('Category',array('url'=>'add')); ?>
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
            <div class="col-md-7">
               <div class="table-responsive">
                  <div id="datatable2_wrapper" class="dataTables_wrapper form-inline no-footer">
                     <table class="table table-bordered" id="datatable2" >
                        <thead>
                           <tr>
                            
                              <th>ID</th>
                              <th>Parent ID</th>
                              <th>Name</th>
                              
                              <th><?php echo __('Actions'); ?></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              foreach ($categories as $category): ?>
                           <tr>
                             
                              <td><?php echo h($category['Category']['id']) ?></td>
                              <td><?php echo h($category['Category']['parent_id']); ?>
                              </td>
                              <td><?php echo h($category['Category']['name']) ; ?>
                              </td>
                              
                             
                             
                              <td>
                                 <?php echo $this->Html->link('','edit/'.$category['Category']['id'], array('class' => 'fa fa-edit')); ?>
                                 <?php echo $this->Html->link(
    'Delete',
    array('controller' => 'categories', 'action' => 'admin_delete', $category['Category']['id']),
    array('confirm' => 'Are you sure you wish to delete this recipe?')
); ?>

                                 
                              </td>
                           </tr>
                           <?php endforeach; ?>
                        </tbody>
                     </table>
                </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="pull-left">
                        <div class="dataTables_info" id="datatable2_info" role="status" aria-live="polite">
                           <?php
                              echo $this->Paginator->counter(array(
                              'format' => __('Showing {:start} to {:end} of {:count} entries')
                              ));
                           ?>
                        </div>
                     </div>
                     <div class="pull-right">
                        <div class="dataTables_paginate paging_bs_normal" id="datatable2_paginate">
                           <?php if( $this->Paginator->params['paging']['Category']['pageCount'] > 1 ){ ?>
                           <ul class="pagination">
                              <?php
                                 echo $this->Paginator->prev('<< ' . __(''), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                                 echo $this->Paginator->numbers(
                                    array('separator' => '', 
                                       'currentTag' => 'a', 
                                       'tag' => 'li', 
                                       'currentClass' => 
                                       'active'));

                                 echo $this->Paginator->next(__('') . ' >>', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                              ?>
                           </ul>
                           <?php } ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
</div>