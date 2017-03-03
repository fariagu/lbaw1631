<?php $var = 2; ?>

<?php if($var == 0) {  ?>
	
		<?php include('navbar-left.php'); ?>
		
		<?php include('navbar-center-visitor.php'); ?>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
	
	<?php }else if($var == 1){ ?>
	
		<?php include('navbar-left.php'); ?>
		
		<?php include('navbar-center.php'); ?>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
		
	<?php }else if($var == 2) { ?>
		
		<?php include('navbar-left.php'); ?>
		
		<?php include('navbar-center.php'); ?>
		<?php include('navbar-admin.php'); ?>
		
		<?php include('navbar-search.php'); ?>
		<?php include('navbar-right.php'); ?>
		
<?php } ?>