<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo (!empty($seo_title)) ? $seo_title .' - ' : ''; echo $this->config->item('company_name'); ?></title>


<?php if(isset($meta)):?>
	<?php echo $meta;?>
<?php else:?>
<meta name="Keywords" content="Shopping Cart, eCommerce, Code Igniter">
<meta name="Description" content="Go Cart is an open source shopping cart built on the Code Igniter framework">
<?php endif;?>
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Lobster|Indie+Flower|Shadows+Into+Light|Pacifico|Anton|Crafty+Girls|Changa+One|Audiowide|Chewy|Playball|Permanent+Marker|Rock+Salt|Black+Ops+One' rel='stylesheet' type='text/css'>

<?php echo theme_css('bootstrap.min.css', true);?>
<?php echo theme_css('validationEngine.jquery.css', true);?>
<?php echo theme_css('bootstrap-responsive.min.css', true);?>
<?php echo theme_css('typicons.min.css', true);?>

<?php echo theme_css('styles.css', true);?>

<?php echo theme_css('lightbox.css', true);?>

<?php echo theme_css('responsive.css', true);?>

<?php echo theme_js('jquery.js', true);?>
<?php echo theme_js('jquery.validationEngine-en.js', true);?>
<?php echo theme_js('jquery.validationEngine.js', true);?>
<?php echo theme_js('bootstrap.min.js', true);?>
<?php echo theme_js('squard.js', true);?>
<?php echo theme_js('equal_heights.js', true);?>
<?php echo theme_js('jquery-ui.min.js', true);?>
<?php echo theme_js('bootbox.js', true);?>
<?php echo theme_js('lightbox.min.js', true);?>
<?php
//with this I can put header data in the header instead of in the body.
if(isset($additional_header_info))
{
	echo $additional_header_info;
}

?>

<style type="text/css">
	.selectable li.ui-selecting { border: 1px solid red; }
	.selectable li.ui-selected { border: 1px solid #E47911; }
	.selectable { list-style-type: none; margin: 0; padding: 0; }
	.selectable li { border: 1px solid #003399; margin: 3px; padding: 3px; float: left; text-align: center; }
    .selectable li div { padding: 5px; width: 60px; height: 60px; }
    .selectable li.text { color: #006699; font-weight: bold; }
</style>
<script>
$(function() {
    var sizesList = $('#sizes');
    var sizeIndicator = $('#size_indicator');

    var sizes = [
        {id: 1, name: '40 inch', value:'40' },
        {id: 2, name: '30 inch', value:'30'},
        {id: 3, name: '20 inch', value:'20'}
    ];


    $.each(sizes, function() {
        sizesList.append(
            $('<li>').attr({id: 'size_' + this.id})
                     .data('info', this)
                     .text(this.name)
                     .addClass('text')
        );
    });

    sizesList.selectable({
        selected: function(event, ui) {
            var total = $(ui.selected).siblings('li.ui-selected').length + 1;
            if(total > 1) {
                $(ui.selected).removeClass('ui-selected');

            } else {
                var size = $(ui.selected).data('info').name;
                var value = $(ui.selected).data('info').value;
                sizeIndicator.data('selected', size).text(size);
                $("#sizename").val(value);
            }
        }
    });

    sizesList.children('li').hover(function() {
        sizeIndicator.text($(this).data('info').name);

    }, function() {
        sizeIndicator.text(sizeIndicator.data('selected'));
    });

    $('#show').click(function() {
        var color = colorsList.find('li.ui-selected').eq(0).data('info');
        var size = sizesList.find('li.ui-selected').eq(0).data('info');

        if(typeof color != 'undefined') {
            alert('Color selected: ' + color.name + ', id: ' + color.id);
        }

        if(typeof size != 'undefined') {
            alert('Size selected: ' + size.name + ', id: ' + size.id);
        }
    });
});
</script>


</head>

<body>

	<div class="navbar navbar-fixed-top nav-top">
		<div class="navbar-inner">
			<div class="container">
				
				<div class="nav-collapse collapse">
					<ul class="nav navbar-right">
						<li><a href="http://awsmlabs.github.io/wattsBags/">Customer Reviews</a></li>
						<li><a href="http://awsmlabs.github.io/wattsBags/">News</a></li>
						<li><a href="http://awsmlabs.github.io/wattsBags/">801-756-7252</a></li>
			        </ul>
					
				</div>
			</div>
		</div>
	</div>

	<div class="navbar navbar-fixed-top nav-main">
		<div class="navbar-inner">
			<div class="container">

				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand" href="<?php echo site_url();?>"><img src="<?php echo base_url()?>/assets/img/logo.svg" id="logo" onerror="img/logo.png"></a>
				
				<div class="nav-collapse collapse">
					<ul class="nav navbar-right">
						<li><a href="http://awsmlabs.github.io/wattsBags/">Home</a></li>
						<li><a href="http://awsmlabs.github.io/wattsBags/">Services</a></li>
						<li><a href="http://awsmlabs.github.io/wattsBags/">Testimonials</a></li>
						<li><a href="<?php echo site_url();?>" class="active">Products</a></li>
						<li><a href="http://awsmlabs.github.io/wattsBags/">Contact</a></li>
			        </ul>
					
				</div>
			</div>
		</div>
	</div>
	<div class="navbar navbar-fixed-top navbar-sub">
		<div class="navbar-inner subnav">
			<div class="container">

				<div class="nav-collapse">
<!-- 					<ul class="nav">
						< ?php if(isset($this->categories[0])):?>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">< ?php echo lang('catalog');?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								< ?php foreach($this->categories[0] as $cat_menu):?>
								<li <?php echo $cat_menu->active ? 'class="active"' : false; ?>><a href="< ?php echo site_url($cat_menu->slug);?>">< ?php echo $cat_menu->name;?></a></li>
								< ?php endforeach;?>
							</ul>
						</li>	
						< ?php
						endif;
						
						
						?>
					</ul>
 -->					
					<ul class="nav pull-right">
						
						<?php if($this->Customer_model->is_logged_in(false, false)):?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo lang('account');?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo  site_url('secure/my_account');?>"><?php echo lang('my_account')?></a></li>
									<li><a href="<?php echo  site_url('secure/my_downloads');?>"><?php echo lang('my_downloads')?></a></li>
									<li class="divider"></li>
									<li><a href="<?php echo site_url('secure/logout');?>"><?php echo lang('logout');?></a></li>
								</ul>
							</li>
						<?php else: ?>
							<li><a href="<?php echo site_url('secure/login');?>"><?php echo lang('login');?></a></li>
						<?php endif; ?>
							<li>
								<a href="<?php echo site_url('cart/view_cart');?>">
								<?php
								if ($this->go_cart->total_items()==0)
								{
									echo lang('empty_cart');
								}
								else
								{
									if($this->go_cart->total_items() > 1)
									{
										echo sprintf (lang('multiple_items'), $this->go_cart->total_items());
									}
									else
									{
										echo sprintf (lang('single_item'), $this->go_cart->total_items());
									}
								}
								?>
								</a>
							</li>
					</ul>
					
</div>
			</div>
		</div>
	</div>

	
	<div class="content">
		<div class="container">
		<!-- <?php if(!empty($base_url) && is_array($base_url)):?>
			<div class="row">
				<div class="span12">
					<ul class="breadcrumb">
						<?php
						$url_path	= '';
						$count	 	= 1;
						foreach($base_url as $bc):
							$url_path .= '/'.$bc;
							if($count == count($base_url)):?>
								<li class="active"><?php echo $bc;?></li>
							<?php else:?>
								<li><a href="<?php echo site_url($url_path);?>"><?php echo $bc;?></a></li> <span class="divider">/</span>
							<?php endif;
							$count++;
						endforeach;?>
 					</ul>
				</div>
			</div>
		<?php endif;?> -->
		
		<?php if ($this->session->flashdata('message')):?>
			<div class="alert alert-info">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php endif;?>
		
		<?php if ($this->session->flashdata('error')):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $this->session->flashdata('error');?>
			</div>
		<?php endif;?>
		
		<?php if (!empty($error)):?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">×</a>
				<?php echo $error;?>
			</div>
		<?php endif;?>
		

<?php
/*
End header.php file
*/