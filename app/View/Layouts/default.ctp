<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('font-awesome.css');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
<?php 

$userData = $this->Session->read('Auth.User');

?>

      <ul class="navbar-nav ml-auto">
            <li class="nav-item"><?php echo $this->Html->link('Home','/index/index',array('class' => 'nav-link')); ?></li>
            <?php if($this->Session->check('Auth.User')){ ?>
           	 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <?php echo $userData['fullname']; ?>
                </a>
                <div class="dropdown-menu">
                  <?php echo $this->Html->link('Settings','/users/logout', array('class' => 'dropdown-item')); ?>
                  <?php echo $this->Html->link('Logout','/users/logout', array('class' => 'dropdown-item')); ?>
                  
                </div>
              </li>


           	<?php } else{ ?>
            <li class="nav-item"><?php echo $this->Html->link('Login / Signup','/users/index',array('class' => 'nav-link')); ?></li>
          	<?php } ?>
      </ul>
    </div>
  </nav>

	<div class="container">
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
	<?php //echo $cakeVersion; ?>
  <?php
    echo $this->Html->script('jquery.min');
    echo $this->Html->script('bootstrap.bundle.min');
    echo $this->Html->script('bootstrap.min');
    echo $this->Html->script('jquery.easing.min');

  ?>         
</body>
</html>
