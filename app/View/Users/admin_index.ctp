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
            <div class="col-md-7">
               <div class="table-responsive">
                  <div id="datatable2_wrapper" class="dataTables_wrapper form-inline no-footer">
                     <table class="table table-bordered" id="datatable2" >
                        <thead>
                           <tr>
                            
                              <th><?php echo $this->Paginator->sort('id'); ?></th>
                              <th><?php echo $this->Paginator->sort('name'); ?></th>
                              <th><?php echo $this->Paginator->sort('email'); ?></th>
                              
                              <th><?php echo __('Actions'); ?></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              foreach ($users as $user): ?>
                           <tr>
                             
                              <td><?php echo h($user['User']['id']) ?></td>
                              <td><?php echo h($user['User']['fullname']); ?>
                              </td>
                              <td><?php echo $this->Text->excerpt($this->Text->autoLinkEmails($user['User']['email']), 'method', 80, ''); ?>
                              </td>
                              
                             
                             
                              <td>
                                 <?php echo $this->Html->link('','edit/'.$user['User']['id'], array('class' => 'fa fa-edit')); ?>
                                 <?php echo $this->Html->link(
    'Delete',
    array('controller' => 'users', 'action' => 'admin_delete', $user['User']['id']),
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
                           <?php if( $this->Paginator->params['paging']['User']['pageCount'] > 1 ){ ?>
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