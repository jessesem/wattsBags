<div class="control-group">
    <div class="option-header">
        <div class="option-number pull-left"><h3><?php echo $num ?></h3></div>
        <div class="option-title"><h3>Add Front Embroidery</h3></div>
    </div>

    <div class="controls yes-no pull-left">

        <input id="embroidery3" type="radio" name="option[front_embroidery][selected]" value="Yes">
        <label for="embroidery3">Yes</label>

        <input id="embroidery3no" type="radio" name="option[front_embroidery][selected]" value="No" checked="yes">
        <label for="embroidery3no">No</label>

    </div>

    <div class="position-container">
        <div class="position-img next"><img style="" id="logo-text-lid" src="<?php echo base_url()?>assets/img/emb_side.jpg" /></div>
        <div class="position-popup"><a href="<?php echo base_url()?>assets/img/emb_side_big.jpg" data-lightbox="side"><span class="icon typcn typcn-zoom-in"></span></a></div>
    </div>

    <div id="embroidery3update" style="display:none;">
        <p class="text-note"><strong>NOTE</strong> All text embroidery will be placed on the bag exactly as it is typed. If you would like all capital letters, type it that way. Please proof read and double check all text. Any changes to embroidery once the bag has been embroidered or delivered will require an additional fee.</p>
        <div class="control-group sub-options">
            <label class="control-label"> Line 1</label>
            <div class="controls">
                <input type="text" name="option[front_embroidery][line_1]" value="" class="span4 validate[maxSize[10]]" >
            </div>
        </div>
        <div class="control-group sub-options">
            <label class="control-label"> Line 1 Font</label>
            <div class="controls">
                <select id="fontchange20" style="float:left;" name="option[front_embroidery][line_1_font]">
                    <option value="">Choose One</option>
                    <option value="'Times New Roman', serif">Block</option>
                    <option value="'Athletic Regular'">Athlectic Block</option>
                    <option value="'Black Chancery'">Script</option>
                    <option value="'Trajan Pro Regular'">St. Jude Font</option>
                    <option value="'Arial', sans-seric">Medtronic Font</option>
                    <option value="'Trebuchet MS', Helvetica, sans-serif">Biotronik Font</option>
                    <option value="'Times New Roman', serif">Boston Scientific Font</option>
                    <option value="Other">Other Font</option>
                </select>
                <div id="fontpreview20" style="font-family: 'ProximaNova-Semibold', sans-serif; float:left; margin-left: 15px; margin-top: 4px; font-size:20px;">Preview</div>
            </div>
            <small class="script-note" id="script-4">Script selections may have to be adjusted to compensate for text length and certain letter combinations. Embroidery proofs are available upon request.</small>
        </div>

        <div id="line2-1-other" class="control-group sub-options other-font">
            <label class="control-label"></label>
            <div class="controls">
                <input type="text" name="option[front_embroidery][line_1_other_font]" value="" class="span4 validate[maxSize[10]]" >
                <small>Please type in the name of the font you would like to use.</small>
            </div>
        </div>

        <div class="control-group sub-options">
            <label class="control-label"> Line 2</label>
            <div class="controls">

                <input type="text" name="option[front_embroidery][line_2]" value="" class="span4 validate[maxSize[10]]" >
            </div>
        </div>


        <div class="control-group sub-options">
            <label class="control-label"> Line 2 Font</label>
            <div class="controls">
                <select id="fontchange21" name="option[front_embroidery][line_2_font]" style="float:left;">
                    <option value="">Choose One</option>
                    <option value="'Times New Roman', serif">Block</option>
                    <option value="'Athletic Regular'">Athlectic Block</option>
                    <option value="'Black Chancery'">Script</option>
                    <option value="'Trajan Pro Regular'">St. Jude Font</option>
                    <option value="'Arial', sans-seric">Medtronic Font</option>
                    <option value="'Trebuchet MS', Helvetica, sans-serif">Biotronik Font</option>
                    <option value="'Times New Roman', serif">Boston Scientific Font</option>
                    <option value="Other">Other Font</option>
                </select>
                <div id="fontpreview21" style="font-family: 'ProximaNova-Semibold', sans-serif; float:left; margin-left: 15px; margin-top: 4px; font-size:20px;">Preview</div>
            </div>
            <small class="script-note" id="script-5">Script selections may have to be adjusted to compensate for text length and certain letter combinations. Embroidery proofs are available upon request.</small>
        </div>

        <div id="line2-2-other" class="control-group sub-options other-font">
            <label class="control-label"></label>
            <div class="controls">

                <input type="text" name="option[front_embroidery][line_2_other_font]" value="" class="span4 validate[maxSize[10]]" >
                <small>Please type in the name of the font you would like to use.</small>
            </div>
        </div>

        <div class="control-group sub-options additional-notes">
            <label class="control-label">Additional Notes</label>
            <div class="controls">

                <textarea type="text" value="option[front_embroidery][additional_notes]" class="span4"></textarea>
                <small>If you have any additional embroidery instructions or notes, please type them here.</small>
            </div>
        </div>

    </div>
</div><!-- End of Front Embroidery -->
