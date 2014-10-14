<?php include('header.php'); ?>
<div class="container container-box">
    <form method="post" action="<? echo base_url()?>index.php/page1/geturl" class="form-horizontal" role="form">
        <input class="text input" name="productUrl_0" type="hidden" placeholder="Text input" value="<?php echo set_value('productUrl_0'); ?>"/>
        <input  name="priceInput" type="hidden" placeholder="Text input" value="<?php echo set_value('priceInput'); ?>" />
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                   <label class="control-label">Description:d *              	
    </label>
                    <input class="form-control"
                           type="text" name="description"  
                           placeholder="Description" 
                           value="<?php echo set_value('description'); ?>" required  />
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Quantity: *</label>
                    <select name="quantity" class="form-control editable-dropdown-field">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>  
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>  
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label">By when do you need it?: *</label>
                    <input class="form-control datepicker-field simple-cursor" 
                           type="text" name="by_when_do_you_need_it"  
                           value="<?php
                           echo date('l dS M Y', strtotime("+8 days"));
                           ?>" required/>                    
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Additional description:</label>
                    <input class="form-control" 
                           type="text" name="additional_description"  
                           placeholder="Enter colour, size or other necessary description" 
                           value="<?php echo set_value('additional_description'); ?>"  />
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input  type="checkbox"  
                                    name="alternative_accepted" value="yes" <?php if ($click == 'ship') {
                               echo ' disabled';
                           } ?> > Alternative accepted?:
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input name="agreement"  value="yes" type="checkbox" checked="checked" class="pull_left" disabled="disabled">
                            <div class="bold">I understand that:</div> <?php if ($click == 'ship'): ?>
                                1. An acknowledged receipt for the full value of the item, shipping costs and taxes - as per Med-way's quote - will confirm the order<br> 2. Warranty terms are those given by the seller on this page and any claims must be handled by the customer directly with the foreign vendor<br> 3. Any warranty-related charges will be paid for by the customer.<br> 4. Item will be delivered to the customer. Tick box ticked, and cannot be unticked. A necessary field.
<?php else: ?>
                                1. An acknowledged receipt for the deposit requested will confirm the order <br>2. Warranty terms will reflect those given by the seller on this page and any such claims will be handled by Med-way.<br> 3. Once the item arrives in Malta it will be delivered and payment in cash for the outstanding amount will be given to the delivery-man.
<?php endif; ?>
                        </label>
                    </div>
                </div>        
            </div>        
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button id="myclosebuttonattoolbar" class="btn btn-primary">close</button>
            </div>
        </div>


    </form>
    <div class="modal" id="modal1">
        <div class="content">
            <a class="close switch" gumby-trigger="|#modal1"><i class="icon-cancel" /></i></a>
            <div class="row">
                <div class="ten columns centered text-center">
                    <h2> I understand that.</h2>
                    <p>Terms Terms Terms. Terms Terms Terms Terms Terms Terms Terms Terms Terms Terms Terms Terms</p>
                    <p class="btn primary medium">
                        <a href="#" class="switch" gumby-trigger="|#modal1">Close Modal</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementsByTagName("title")[0].innerHTML;
</script>
<script>
$('#myclosebuttonattoolbar')
        .click(function () {
            // Opens www.example.com in the current tab
                $('#mytoolbar123buyitgfromabcpref').hide();
        $('#mytoolbar123shiptgfromabcnow').hide();
        $('#mytoolbar123buyitgfromabcnow').toggle();
        
            
        
        });
        </script>

<?php include('footer.php'); ?>