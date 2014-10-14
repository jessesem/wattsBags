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

<!--         <div class="row-fluid description">
            <div class="span12">
                < ?php echo $product->description; ?>
            </div>
        </div>
 -->        
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

              <form id="formID" action="<?php echo site_url("cart/add_to_cart") ?>" class="form-horizontal" method="post" accept-charset="utf-8">
                <input type="hidden" name="cartkey" value="">
                <input type="hidden" name="id" value="<?= $product_id; ?>">
                <fieldset>
                <?php
                $i = 0;
                foreach($product_options as $option):
                        $i++;
                        $type = 'default';
                        if (strpos($option, '>') !== false)
                        {
                            $a = explode('>', $option);
                            $a = array_map('trim', $a);
                            $option = $a[0];
                            $type = $a[1];
                        }
                ?>
                    <?php $this->load->view("product_options/" . $option, array('num' => $i, 'type' => $type)) ?>
                <?php endforeach; ?>
                    
                  <button class="btn btn-primary btn-large pull-right" type="submit" value="submit">Add to Cart</button>
                    
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
$(function(){ 
  $('#data123').tooltip({
    'placement': 'top'
  });
});
</script>
<script>
$(function(){ 
  $('#data124').tooltip({
    'placement': 'top'
  });
});
</script>


<script>
$('#embroidery1, #embroideryno').change(function(){
  if ($("#embroidery1").is(":checked")) {
    $('#embroidery1update').fadeIn('slow');
    $("#embroidery2").attr("disabled", true);
  }
  else if ($("#embroideryno").is(":checked")){
    $('#embroidery1update').fadeOut('slow');
    $("#logo-text-lid").css( "border", "" );
  }                   
});
</script>


<script>
$('#embroidery3, #embroidery3no').change(function(){
  if ($("#embroidery3").is(":checked")) {
    $('#embroidery3update').fadeIn('slow');
  }
  else if ($("#embroidery3no").is(":checked")){
    $('#embroidery3update').fadeOut('slow');
  }                   
});
</script>

<script>
$('#embroidery4, #embroidery4no').change(function(){
  if ($("#embroidery4").is(":checked")) {
    $('#embroidery4update').fadeIn('slow');
  }
  else if ($("#embroidery4no").is(":checked")){
    $('#embroidery4update').fadeOut('slow');
  }                   
});
</script>






<script>
$(document).ready(function () {                            
  $("#logoo1,#logoo2, #logoo3,#logoo4").change(function () {
    if ($("#logoo1").is(":checked")) {
      $('#div1logo').fadeIn('slow');
      $('#div2logo').hide();



    }
    else if ($("#logoo2").is(":checked")) {
      $('#div1logo').fadeIn('slow');
      $('#div2logo').hide();
    }
    else if ($("#logoo3").is(":checked")) {
      $('#div2logo').fadeIn('slow');
      $('#div1logo').hide();
    }
    else {
      $('#div2logo').fadeIn('slow');
      $('#div1logo').hide();
    }
  });        
});
</script>


<script>
$(document).ready(function(){
  $("#formID").validationEngine('attach');
});
</script>



<script>
$(document).ready(function(){
    $("#fontchange").change(function() {
    //alert($(this).val());
    $('#fontpreview').css("font-family", $(this).val());
    
    if ($(this).val() == "Other") {
      $('#line1-1-other').addClass("show");
      $('#fontpreview').css("font-family", 'ProximaNova-Bold');
    
    } else if ($(this).val() == "'Black Chancery'"){
      $('#script-1').addClass("show");

    } else{
      $('#line1-1-other').removeClass("show");
      $('#script-1').removeClass("show");
    }

  });

});
</script>

<script>
$(document).ready(function(){
  $("#fontchange1").change(function() {
    //alert($(this).val());
    $('#fontpreview1').css("font-family", $(this).val());

    if ($(this).val() == "Other") {
        $('#line1-2-other').addClass("show");
        $('#fontpreview1').css("font-family", 'ProximaNova-Bold');
    
    } else if ($(this).val() == "'Black Chancery'"){
      $('#script-2').addClass("show");

    } else{
      $('#line1-2-other').removeClass("show");
      $('#script-2').removeClass("show");
    }
  });
});
</script>


<script>
$(document).ready(function(){
  $("#fontchange2").change(function() {
    //alert($(this).val());
    $('#fontpreview2').css("font-family", $(this).val());

    if ($(this).val() == "Other") {
      $('#line1-3-other').addClass("show");
      $('#fontpreview2').css("font-family", 'ProximaNova-Bold');
    
     } else if ($(this).val() == "'Black Chancery'"){
      $('#script-3').addClass("show");

    } else{
      $('#line1-3-other').removeClass("show");
      $('#script-3').removeClass("show");
    }

  });
});
</script>

<script>
$(document).ready(function(){
  $("#fontchange20").change(function() {
    //alert($(this).val());
      $('#fontpreview20').css("font-family", $(this).val());

      if ($(this).val() == "Other") {
        $('#line2-1-other').addClass("show");
        $('#fontpreview20').css("font-family", 'ProximaNova-Bold');
      
      } else if ($(this).val() == "'Black Chancery'"){
      $('#script-4').addClass("show");

      } else{
        $('#line2-1-other').removeClass("show");
        $('#script-4').removeClass("show");
      }

    });
  });
</script>
<script>
$(document).ready(function(){
  $("#fontchange21").change(function() {
    //alert($(this).val());
    $('#fontpreview21').css("font-family", $(this).val());

      if ($(this).val() == "Other") {
        $('#line2-2-other').addClass("show");
        $('#fontpreview21').css("font-family", 'ProximaNova-Bold');
      
      } else if ($(this).val() == "'Black Chancery'"){
      $('#script-5').addClass("show");

      } else{
        $('#line2-2-other').removeClass("show");
        $('#script-5').removeClass("show");
      }

});
});
</script>
<script>
$(document).ready(function(){
  $("#fontchange31").change(function() {
  //alert($(this).val());
  $('#fontpreview31').css("font-family", $(this).val());

    if ($(this).val() == "Other") {
      $('#line3-2-other').addClass("show");
      $('#fontpreview31').css("font-family", 'ProximaNova-Bold');
    
     } else if ($(this).val() == "'Black Chancery'"){
    $('#script-7').addClass("show");

    } else{
      $('#line3-2-other').removeClass("show");
      $('#script-7').removeClass("show");
    }

  });
});
</script>

<script>
  $(document).ready(function(){
    $("#fontchange30").change(function() {
      //alert($(this).val());
      $('#fontpreview30').css("font-family", $(this).val());

      if ($(this).val() == "Other") {
        $('#line3-1-other').addClass("show");
        $('#fontpreview30').css("font-family", 'ProximaNova-Bold');
      
      } else if ($(this).val() == "'Black Chancery'"){
      $('#script-6').addClass("show");

      } else{
        $('#line3-1-other').removeClass("show");
        $('#script-6').removeClass("show");
      }

    });
  });
</script>




<script>
$(document).ready(function(){
  $( "#logo-text-lid" ).click(function() {

    $("#embroidery1").trigger('click');

  });
});
</script>

<script>
$(document).ready(function(){
  $( "#side-embroidery" ).click(function() {

    $("#embroidery3").trigger('click');

  });
});
</script>

<script>
$(document).ready(function(){
  $( "#end-embroidery" ).click(function() {

    $("#embroidery4").trigger('click');


  });
});
</script>

<script>
$(document).ready(function(){
    $("#color_1").addClass("ui-selectee ui-selected");
    
    $("#color_1").click(function(){
      $("p.color-alert").removeClass("show");
    });
    
    $("#color_2 , #color_3").click(function(){
      $("p.color-alert").addClass("show");
    });
    
    $("#rigid-select").click(function(){
      $("p.rigid-desc").addClass("show");
      $("p.lightened-desc").removeClass("show");
    });
    
    $("#lightened-select").click(function(){
      $("p.rigid-desc").removeClass("show");
      $("p.lightened-desc").addClass("show");
    });
    
    $("#divider-option-1-select").click(function(){
      $("p.divider-option-1-desc").addClass("show");
      $("p.divider-option-2-desc").removeClass("show");
    });
    
    $("#divider-option-2-select").click(function(){
      $("p.divider-option-1-desc").removeClass("show");
      $("p.divider-option-2-desc").addClass("show");
    });
});
</script>




    
     
            