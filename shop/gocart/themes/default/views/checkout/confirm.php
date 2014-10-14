<div class="page-header">
	<h2><?php echo lang('form_checkout');?></small></h2>
</div>
	
<?php include('order_details.php');?>
<?php include('summary.php');?>

<form action="<?php echo site_url('checkout/place_order') ?>" method="post">
<?php include('credit_card_details.php'); ?>

<div class="row">
	<div class="span12">
		<input type="submit" class="btn btn-primary btn-large btn-block"  value="<?php echo lang('submit_order') ?>" >
	</div>
</div>
</form>