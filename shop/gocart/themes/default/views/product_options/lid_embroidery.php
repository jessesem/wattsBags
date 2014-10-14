<div class="control-group">
<div class="option-header">
    <div class="option-number pull-left"><h3><?php echo $num ?></h3></div>
    <div class="option-title"><h3>Add Lid Embroidery</h3></div>
</div>

<div class="controls yes-no">

    <input id="embroidery1" type="radio" name="option[lid_embroidery][selected]" value="Yes" checked="yes">
    <label for="embroidery1">Yes</label>

    <input id="embroideryno" type="radio" name="option[lid_embroidery][selected]" value="No">
    <label for="embroideryno">No</label>

</div>

<div id="embroidery1update">
    <div class="control-group">
        <p class="lid-select-alert">Click on the option title you would like used on your bag.</p>
        <h5>Lid Embroidery Position</h5>
        <div class="controls emb-position">
            <input type="radio" id="logoo1" name="option[lid_embroidery][position]" value="Logo Horizontal" >
            <label for="logoo1">
                <div class="position">Logo Horizontal</div>
                <div class="position-img"><img style="" id="logo-text-lid" src="<?php echo base_url()?>assets/img/emb_logo_horizontal.jpg" /></div>
                <div class="position-popup"><a href="<?php echo base_url()?>assets/img/emb_logo_horizontal_big.jpg" data-lightbox="top-1"><span class="icon typcn typcn-zoom-in"></span></a></div>
            </label>
            <input type="radio" id="logoo2" name="option[lid_embroidery][position]" value="Logo Vertical" >
            <label for="logoo2">
                <div class="position">Logo Vertical</div>
                <div class="position-img"><img style="" id="logo-text-lid" src="<?php echo base_url()?>assets/img/emb_logo_vertical.jpg" /></div>
                <div class="position-popup"><a href="<?php echo base_url()?>assets/img/emb_logo_vertical_big.jpg" data-lightbox="top-2"><span class="icon typcn typcn-zoom-in"></span></a></div>
            </label>
            <input type="radio" id="logoo3" name="option[lid_embroidery][position]" value="Text Horizontal" >
            <label for="logoo3">
                <div class="position">Text Horizontal</div>
                <div class="position-img"><img style="" id="logo-text-lid" src="<?php echo base_url()?>assets/img/emb_text_horizontal.jpg" /></div>
                <div class="position-popup"><a href="<?php echo base_url()?>assets/img/emb_text_horizontal_big.jpg" data-lightbox="top-3"><span class="icon typcn typcn-zoom-in"></span></a></div>
            </label>
            <input type="radio" id="logoo4" name="option[lid_embroidery][position]" value="Text Vertical" >
            <label for="logoo4">
                <div class="position">Text Vertical</div>
                <div class="position-img"><img style="" id="logo-text-lid" src="<?php echo base_url()?>assets/img/emb_text_vertical.jpg" /></div>
                <div class="position-popup"><a href="<?php echo base_url()?>assets/img/emb_text_vertical_big.jpg" data-lightbox="top-4"><span class="icon typcn typcn-zoom-in"></span></a></div>
            </label>


        </div>
    </div>
    <div id="div1logo" style="display:none;">
        <p class="text-note"><strong>NOTE</strong> All text embroidery will be placed on the bag exactly as it is typed. If you would like all capital letters, type it that way. Please proof read and double check all text. Any changes to embroidery once the bag has been embroidered or delivered will require an additional fee.</p>
        <div class="control-group sub-options">
            <label class="control-label">Company Name</label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][company_name]" value="" class="span4 validate[maxSize[10]]" >
                <small>*We have most company logos on file. If we do not have your logo, we will contact you.</small>
            </div>
        </div>


        <div class="control-group sub-options">
            <label class="control-label">Thread Color</label>
            <div class="controls">
                <input type="text" name="option[lid_embroidery][thread_color]" value="" class="span4 validate[maxSize[10]]">
                <small>*To match your standard corporate colors, please fill in the box “standard”.</small>
            </div>
        </div>

        <div class="control-group sub-options">
            <label class="control-label">Optional Text</label>
            <div class="controls">
                <input type="text" name="option[lid_embroidery][optional_text]" value="" class="span4 validate[maxSize[10]]">
                <small>Optional Text Placed below Logo</small>
            </div>
        </div>

        <div class="control-group sub-options additional-notes">
            <label class="control-label">Additional Notes</label>
            <div class="controls">

                <textarea type="text" name="option[lid_embroidery][additional_notes]" value="" class="span4"></textarea>
                <small>If you have any additional embroidery instructions or notes, please type them here.</small>
            </div>
        </div>

    </div>
    <div id="div2logo" style="display:none;">
        <p class="text-note"><strong>NOTE</strong> All text embroidery will be placed on the bag exactly as it is typed. If you would like all capital letters, type it that way. Please proof read and double check all text. Any changes to embroidery once the bag has been embroidered or delivered will require an additional fee.</p>
        <div class="control-group sub-options">
            <label class="control-label"> Line 1</label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][line_1]" value="" class="span4 validate[maxSize[10]]" >
            </div>
        </div>


        <div class="control-group sub-options">
            <label class="control-label"> Line 1 Font</label>
            <div class="controls">
                <select name="option[lid_embroidery][line_1_font]" id="fontchange" style="float:left;">
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
                <div id="fontpreview" style="font-family: 'ProximaNova-Semibold', sans-serif; float:left; margin-left: 15px; margin-top: 4px; font-size:20px;">Preview</div>
            </div>
            <small class="script-note" id="script-1">Script selections may have to be adjusted to compensate for text length and certain letter combinations. Embroidery proofs are available upon request.</small>
        </div>

        <div id="line1-1-other" class="control-group sub-options other-font">
            <label class="control-label"></label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][line_1_other_font]" value="" class="span4 validate[maxSize[10]]" >
                <small>Please type in the name of the font you would like to use.</small>
            </div>
        </div>

        <div class="control-group sub-options">
            <label class="control-label"> Line 2</label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][line_2]" value="" class="span4 validate[maxSize[10]]" >
            </div>
        </div>


        <div class="control-group sub-options">
            <label class="control-label"> Line 2 Font</label>
            <div class="controls">
                <select id="fontchange1" style="float:left;" name="option[lid_embroidery][line_2_font]">
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
                <div id="fontpreview1" style="font-family: 'ProximaNova-Semibold', sans-serif; float:left; margin-left: 15px; margin-top: 4px; font-size:20px;">Preview</div>
            </div>
            <small class="script-note" id="script-2">Script selections may have to be adjusted to compensate for text length and certain letter combinations. Embroidery proofs are available upon request.</small>
        </div>

        <div id="line1-2-other" class="control-group sub-options other-font">
            <label class="control-label"></label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][line_2_other_font]" value="" class="span4 validate[maxSize[10]]" >
                <small>Please type in the name of the font you would like to use.</small>
            </div>
        </div>

        <div class="control-group sub-options">
            <label class="control-label"> Line 3</label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][line_3]" value="" class="span4 validate[maxSize[10]]" >
            </div>
        </div>


        <div class="control-group sub-options">
            <label class="control-label"> Line 3 Font</label>
            <div class="controls">
                <select name="option[lid_embroidery][line_3_font]" id="fontchange2" style="float:left;">
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
                <div id="fontpreview2" style="font-family: 'ProximaNova-Semibold', sans-serif; float:left; margin-left: 15px; margin-top: 4px; font-size:20px;">Preview</div>
            </div>
            <small class="script-note" id="script-3">Script selections may have to be adjusted to compensate for text length and certain letter combinations. Embroidery proofs are available upon request.</small>
        </div>

        <div id="line1-3-other" class="control-group sub-options other-font">
            <label class="control-label"></label>
            <div class="controls">

                <input type="text" name="option[lid_embroidery][line_3_other_font]" value="" class="span4 validate[maxSize[10]]" >
                <small>Please type in the name of the font you would like to use.</small>
            </div>
        </div>

        <div class="control-group sub-options additional-notes">
            <label class="control-label">Additional Notes</label>
            <div class="controls">

                <textarea type="text" value="option[lid_embroidery][additional_notes]" class="span4"></textarea>
                <small>If you have any additional embroidery instructions or notes, please type them here.</small>
            </div>
        </div>

    </div>
</div>
</div><!-- End of Lid Embroidery -->
