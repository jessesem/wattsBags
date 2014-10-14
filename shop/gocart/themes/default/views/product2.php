<script>
    window.onload = function()
    {
        $('.product').equalHeights();
    }
</script>
<div class="row-fluid">
  <div class="span4" id="primary-img">
        <?php
        $photo  = theme_img('no_picture.png', lang('no_image_available'));
        $product->images    = array_values($product->images);

        if(!empty($product->images[0]))
        {
          $primary    = $product->images[0];
          foreach($product->images as $photo)
          {
            if(isset($photo->primary))
            {
              $primary    = $photo;
            }
          }

          $photo  = '<img class="responsiveImage" src="'.base_url('uploads/images/medium/'.$primary->filename).'" alt="'.$product->seo_title.'"/>';
        }
        echo $photo
        ?>
      </div>

    <div class="span8 pull-right">
        
        <div class="row-fluid">
            <div class="span12">
                <div class="page-header">
                    <h2>
                        <?php echo $product->name;?>
                        <?php if($this->session->userdata('admin')): ?>
                        <a class="btn" title="<?php echo lang('edit_product'); ?>" href="<?php echo  site_url($this->config->item('admin_folder').'/products/form/'.$product->id); ?>"><i class="icon-pencil"></i></a>
                        <?php endif; ?>
                    </h2>
                    <div>
                      <?php if($product->saleprice > 0):?>
                          <h3 class="product-price pull-left"><?php echo format_currency($product->saleprice); ?></h3>
                          <small class="on-sale">ON SALE</small>
                      <?php else: ?>
                          <span class="product_price"><?php echo format_currency($product->price); ?></span>
                          <!-- <small><?php echo lang('product_price');?></small> -->
                      <?php endif;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid description">
            <div class="span12">
                <?php echo $product->description;?>
            </div>
        </div>
        
        <div class="row-fluid">
            <div class="span4 sku-pricing">
                <?php if(!empty($product->sku)):?><div><?php echo lang('sku');?>: <?php echo $product->sku; ?></div><?php endif;?>&nbsp;
            </div>
            <?php if((bool)$product->track_stock && $product->quantity < 1 && config_item('inventory_enabled')):?>
            <div class="span4 out-of-stock">
                <div><?php echo lang('out_of_stock');?></div>
            </div>
            <?php endif;?>
        </div>
        
        <div class="row-fluid order">
          <div class="span12">
            <h3>Order Options</h3>
            <div class="product-cart-form">

              <form id="formID" action="<?php echo site_url()?>/cart/add_to_cart" class="form-horizontal" method="post" accept-charset="utf-8">
                <input type="hidden" name="cartkey" value="">
                <input type="hidden" name="id" value="1">
                <fieldset>

                  <div class="control-group">
                    <div class="option-header">
                      <div class="option-number pull-left"><h3>1</h3></div>
                      <div class="option-title"><h3>Choose Size *</h3></div>
                    </div>
                    <div class="controls">
                      <input type="radio" id="logoo1yes" name="option[131]" value="40" checked="yes" >
                      <label for="logoo1yes">40 Inch</label>
                      <input type="radio" id="logoo2no" name="option[131]" value="40" >
                      <label for="logoo2no">30 Inch</label>
                      <input type="radio" id="logoo2no3" name="option[131]" value="30" >
                    </div>
                  </div>

                  <div class="control-group">
                    <div class="option-header">
                      <div class="option-number pull-left"><h3>2</h3></div>
                      <div class="option-title"><h3>Choose Color *</h3></div>
                    </div>
                    <div class="controls">

                      <span id="color_indicator"></span>
                      <ol id="colors" class='selectable'></ol>

                      <input id="colorname" name="option[130]" type="hidden" value="" >

                    </div>
                  </div>

                  <div class="control-group">
                    <div class="option-header">
                      <div class="option-number pull-left"><h3>3</h3></div>
                      <div class="option-title"><h3>Select With or Without Wheels? *</h3></div>
                    </div>

                    <div class="controls">
                      <input type="radio" id="logoo1yes" name="option[132]" value="Yes" checked="yes" >
                      <label for="logoo1yes">Yes</label>
                      <input type="radio" id="logoo2no" name="option[132]" value="324" >
                      <label for="logoo2no">No</label>
                    </div>
                  </div>


                  <div class="control-group">
                    <div class="option-header">
                      <div class="option-number pull-left"><h3>4</h3></div>
                      <div class="option-title"><h3>Select Rigged or Lightened? *</h3></div>
                    </div>

                    <div class="controls">
                      <input type="radio" id="logoo1yesr" name="option[133]" value="Rigid" checked="yes" >
                      <label for="logoo1yesr">Rigged</label>
                      <input type="radio" id="logoo2nol" name="option[133]" value="Lightened"  >
                      <label for="logoo2nol">Lightened</label>
                    </div>
                  </div>

                  <div class="control-group"> 
                    <div id="emb">
                      <?php $productname=$product->name;

                      switch ($productname) {
                        case "Professional Sales Bag A":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Professional Sales Bag B":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Professional Sales Bag C":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Professional Sales Bag D":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Professional Sales Bag E":
                        $this->load->view('emb/type1.php');
                        break;

                        case "Biotronik Implant Bag":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Large Neuromodulation Bag":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Small Neuromodulation Bag":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Boston Scientific S-ICD Bag":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Biotronik Implant Bag":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Oversized Sales Bags":
                        $this->load->view('emb/type1.php');
                        break;
                        case "Rapido Bags":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Attain Delivery System Bag":
                        $this->load->view('emb/type2.php');
                        break;
                        case "CPS Bag":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Biotronik Scout Pro Bag":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Top Loading Catheter Bag":
                        $this->load->view('emb/type3.php');
                        break;
                        case "Mini Trainer Bag":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Athletic Trainer Bag 1":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Athletic Trainer Bag 2":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Athletic Trainer Bag 3":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Athletic Trainer Bag 4":
                        $this->load->view('emb/type2.php');
                        break;
                        case "Athletic Trainer Bag 5":
                        $this->load->view('emb/type2.php');
                        break;


                        case "City Corp Computer Bag":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Lead Vest Duffel Bag":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Salesman Computer Briefcase":
                        $this->load->view('emb/type2.php');
                        break;

                        case "Equipment Travel Duffel Bag":
                        $this->load->view('emb/type2.php');
                        break;

                        case "Straight Zippered Duffel Bag":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Demo Kit":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Biotronik Demo Kit Bag":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Accessory Bag":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Accessory Bag":
                        $this->load->view('emb/type3.php');
                        break;

                        case "Carryon Bag":
                        $this->load->view('emb/type1.php');
                        break;

                      }
                      ?>

                    </div>


                    <div class="control-group">
                      <div class="option-header">
                        <div class="option-number pull-left"><h3>8</h3></div>
                        <div class="option-title"><h3>Add Quantity *</h3></div>
                      </div>
                      <div class="controls">
                        <input class="span2" type="text" name="quantity" value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button class="btn btn-primary btn-large" type="submit" value="submit"><i class="icon-shopping-cart icon-white"></i> Add to Cart</button>
                      </div>
                    </div>

                  </fieldset>
                </form>
              </div>

            </div>
        </div>
       
        
    </div>
    
    <?php if(!empty($product->related_products)):?>
    <div class="related_products">
        <div class="row-fluid">
            <div class="span4">
                <h3 style="margin-top:20px;"><?php echo lang('related_products_title');?></h3>
                <ul class="thumbnails"> 
                <?php foreach($product->related_products as $relate):?>
                    <li class="span2 product">
                        <?php
                        $photo  = theme_img('no_picture.png', lang('no_image_available'));
                        
                        
                        
                        $relate->images = array_values((array)json_decode($relate->images));
                        
                        if(!empty($relate->images[0]))
                        {
                            $primary    = $relate->images[0];
                            foreach($relate->images as $photo)
                            {
                                if(isset($photo->primary))
                                {
                                    $primary    = $photo;
                                }
                            }

                            $photo  = '<img src="'.base_url('uploads/images/thumbnails/'.$primary->filename).'" alt="'.$relate->seo_title.'"/>';
                        }
                        ?>
                        <a class="thumbnail" href="<?php echo site_url($relate->slug); ?>">
                            <?php echo $photo; ?>
                        </a>
                        <h5 style="margin-top:5px;"><a href="<?php echo site_url($relate->slug); ?>"><?php echo $relate->name;?></a>
                        <?php if($this->session->userdata('admin')): ?>
                        <a class="btn" title="<?php echo lang('edit_product'); ?>" href="<?php echo  site_url($this->config->item('admin_folder').'/products/form/'.$relate->id); ?>"><i class="icon-pencil"></i></a>
                        <?php endif; ?>
                        </h5>

                        <div>
                            <?php if($relate->saleprice > 0):?>
                                <span class="price-slash"><?php echo lang('product_reg');?> <?php echo format_currency($relate->price); ?></span>
                                <span class="price-sale"><?php echo lang('product_sale');?> <?php echo format_currency($relate->saleprice); ?></span>
                            <?php else: ?>
                                <span class="price-reg"><?php echo lang('product_price');?> <?php echo format_currency($relate->price); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if((bool)$relate->track_stock && $relate->quantity < 1 && config_item('inventory_enabled')) { ?>
                            <div class="stock_msg"><?php echo lang('out_of_stock');?></div>
                        <?php } ?>
                    </li>
                <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif;?>

</div>
<script>
$(function(){ 
    $('.category_container').each(function(){
        $(this).children().equalHeights();
    }); 
});
</script>
<script>
    $(document).ready(function(){
       $("#fontchange").change(function() {
    //alert($(this).val());
    $('#fontpreview').css("font-family", $(this).val());

});
       });
    </script>

    <script>
    $(document).ready(function(){
       $("#fontchange1").change(function() {
    //alert($(this).val());
    $('#fontpreview1').css("font-family", $(this).val());

});
       });
    </script>


<script>
    $(document).ready(function(){
       $("#fontchange2").change(function() {
    //alert($(this).val());
    $('#fontpreview2').css("font-family", $(this).val());

});
       });
    </script>

    <script>
    $(document).ready(function(){
       $("#fontchange20").change(function() {
    //alert($(this).val());
    $('#fontpreview20').css("font-family", $(this).val());

});
       });
    </script>
     <script>
    $(document).ready(function(){
       $("#fontchange21").change(function() {
    //alert($(this).val());
    $('#fontpreview21').css("font-family", $(this).val());

});
       });
    </script>
   <script>
    $(document).ready(function(){
       $("#fontchange31").change(function() {
    //alert($(this).val());
    $('#fontpreview31').css("font-family", $(this).val());

});
       });
    </script>

    <script>
    $(document).ready(function(){
       $("#fontchange30").change(function() {
    //alert($(this).val());
    $('#fontpreview30').css("font-family", $(this).val());

});
       });
    </script>
    
    <script>
    $(document).ready(function(){
        $( "#color_1" ).addClass( "ui-selectee ui-selected" );
    });
    </script>

     <script>
    $(document).ready(function(){
        
        $("#color_2 , #color_3").click(function(){
  bootbox.alert("This color will take one  week extra .");
});
        
    });
    </script>



 

    
    <script>
    $(document).ready(function(){
       $( "#logoh" ).click(function() {
 $("#logoh").css("box-shadow","10px 10px 5px #888888");
$("#textv").css("box-shadow","");
$("#logov").css("box-shadow","");
$("#texth").css("box-shadow","");
  $('#div1logo').fadeIn('slow');
             $('#div2logo').hide();


});
       });
    </script>
    
    <script>
    $(document).ready(function(){
       $( "#logov" ).click(function() {
           $("#logov").css("box-shadow","10px 10px 5px #888888");
$("#texth").css("box-shadow","");
$("#logoh").css("box-shadow","");
$("#textv").css("box-shadow","");

 $('#div1logo').fadeIn('slow');
            $('#div2logo').hide();


});
       });
    </script>
    
    <script>
    $(document).ready(function(){
       $( "#texth" ).click(function() {
$("#texth").css("box-shadow","10px 10px 5px #888888");
$("#textv").css("box-shadow","");
$("#logoh").css("box-shadow","");
$("#logov").css("box-shadow","");
 $('#div2logo').fadeIn('slow');
              $('#div1logo').hide();


});
       });
    </script>
    
    <script>
    $(document).ready(function(){
       $( "#textv" ).click(function() {
$("#textv").css("box-shadow","10px 10px 5px #888888");
$("#texth").css("box-shadow","");
$("#logoh").css("box-shadow","");
$("#logov").css("box-shadow","");

  $('#div2logo').fadeIn('slow');
  $('#div1logo').hide();
 


});
       });
    </script>


    
     
            