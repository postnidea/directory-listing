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
		echo $this->Html->css('sb-admin.css');
		echo $this->Html->css('dataTables.bootstrap4.css');
		//echo $this->Html->css('style');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php echo $this->element('admin-sidebar');?>
  </nav>
  <div class="content-wrapper">
      <?php echo $this->Flash->render(); ?>
      <?php echo $this->fetch('content'); ?>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php echo $this->element('admin-footer');?>
  </div>
</body>
	<?php
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap.bundle.min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('jquery.easing.min');
		echo $this->Html->script('Chart.min');
		echo $this->Html->script('jquery.dataTables');
		echo $this->Html->script('dataTables.bootstrap4');
		echo $this->Html->script('sb-admin.min');
		echo $this->Html->script('sb-admin-datatables.min');
		echo $this->Html->script('sb-admin-charts.min');
	?>
</html>
