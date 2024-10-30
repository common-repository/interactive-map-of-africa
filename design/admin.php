<?php $afr_map = $this->options; ?>
<form method="post" action="<?php echo admin_url( '/' ); ?>admin.php?page=afr-map">
<div id="map-admin">
  <div id="map-header">
    <p class="map-shortcode">Insert this shortcode <input type="text" value="[afr_map]" readonly> into any page or post to display the map.</p>
    <p class="map-btns"><span class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></span></p>
  </div>
  <div id="map-page">
    <div class="map-col-lt">
      <div id="map-preview">
        <?php include 'map.php'; ?>
      </div>
      <div class="map-settings">
        <div class="box-header individ-i">Settings</div>
        <div class="box-body">

          <div class="area"><p class="area-name">CENTRAL AFRICA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_1" value="1" <?php if ($afr_map['enbl_1'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_1" value="<?php echo $afr_map['upclr_1']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_1" value="<?php echo $afr_map['ovrclr_1']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_1" value="<?php echo $afr_map['dwnclr_1']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_1" value="<?php echo $afr_map['url_1']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_1">
                    <option value="_self" <?php if($afr_map['turl_1'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($afr_map['turl_1'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($afr_map['turl_1'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_1"><?php echo $afr_map['info_1']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">EASTERN AFRICA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_2" value="1" <?php if ($afr_map['enbl_2'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_2" value="<?php echo $afr_map['upclr_2']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_2" value="<?php echo $afr_map['ovrclr_2']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_2" value="<?php echo $afr_map['dwnclr_2']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_2" value="<?php echo $afr_map['url_2']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_2">
                    <option value="_self" <?php if($afr_map['turl_2'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($afr_map['turl_2'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($afr_map['turl_2'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_2"><?php echo $afr_map['info_2']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">NORTHERN AFRICA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_3" value="1" <?php if ($afr_map['enbl_3'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_3" value="<?php echo $afr_map['upclr_3']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_3" value="<?php echo $afr_map['ovrclr_3']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_3" value="<?php echo $afr_map['dwnclr_3']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_3" value="<?php echo $afr_map['url_3']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_3">
                    <option value="_self" <?php if($afr_map['turl_3'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($afr_map['turl_3'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($afr_map['turl_3'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_3"><?php echo $afr_map['info_3']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">SOUTHERN AFRICA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_4" value="1" <?php if ($afr_map['enbl_4'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_4" value="<?php echo $afr_map['upclr_4']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_4" value="<?php echo $afr_map['ovrclr_4']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_4" value="<?php echo $afr_map['dwnclr_4']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_4" value="<?php echo $afr_map['url_4']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_4">
                    <option value="_self" <?php if($afr_map['turl_4'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($afr_map['turl_4'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($afr_map['turl_4'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_4"><?php echo $afr_map['info_4']; ?></textarea></p></div>
            </div>
          </div>

          <div class="area"><p class="area-name">WESTERN AFRICA</p>
            <span class="chkbx"><input type="checkbox" name="enbl_5" value="1" <?php if ($afr_map['enbl_5'] == '1'){echo " checked";} ?>>&nbsp;Active</span>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_5" value="<?php echo $afr_map['upclr_5']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_5" value="<?php echo $afr_map['ovrclr_5']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_5" value="<?php echo $afr_map['dwnclr_5']; ?>" class="color-field" /></p>             
              </div>
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_5" value="<?php echo $afr_map['url_5']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_5">
                    <option value="_self" <?php if($afr_map['turl_5'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($afr_map['turl_5'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($afr_map['turl_5'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div>
              <div class="info"><p><textarea rows="5" name="info_5"><?php echo $afr_map['info_5']; ?></textarea></p></div>
            </div>
          </div>

        </div><!-- box-body / for areas -->
      </div><!-- map-settings / for areas -->

      <br>
      <div class="map-settings">
        <div class="box-header bulk-i">Bulk Edit</div>
        <div class="box-body">
          <div class="area"><p class="area-name">COLORS</p>
            <div class="inner-content">
              <div class="area-clrs">
                <p><label>Up Color</label><input type="text" name="upclr_all" value="<?php echo $afr_map['upclr_1']; ?>" class="color-field" /></p>              
                <p><label>Hover Color</label><input type="text" name="ovrclr_all" value="<?php echo $afr_map['ovrclr_1']; ?>" class="color-field" /></p>              
                <p><label>Click Color</label><input type="text" name="dwnclr_all" value="<?php echo $afr_map['dwnclr_1']; ?>" class="color-field" /></p>             
              </div><hr>
              <p><span class="submitbulk"><input type="submit" class="button button-primary" name="submit-clrs" value="Overwrite Colors"></span> <strong>Note: Clicking this button will overwrite the colors of the <u>entire</u> map.</strong></p>
            </div>
          </div>
          <div class="area"><p class="area-name">LINK</p>
            <div class="inner-content">
              <div class="area-url">
                <p class="link"><label>Link</label><input type="text" name="url_all" value="<?php echo $afr_map['url_1']; ?>" /></p>
                <p><label>Target</label>
                  <select name="turl_all">
                    <option value="_self" <?php if($afr_map['turl_1'] == '_self'){echo "selected";} ?>>Same Page</option>
                    <option value="_blank" <?php if($afr_map['turl_1'] == '_blank'){echo "selected";} ?>>New Page</option>
                    <option value="none" <?php if($afr_map['turl_1'] == 'none'){echo "selected";} ?>>None</option>
                  </select>
                </p>
              </div><hr>              
              <p><span class="submitbulk"><input type="submit" class="button button-primary" name="submit-url" value="Overwrite Links"></span> <strong>Note: Clicking this button will overwrite the links of <u>all</u> the regions.</strong></p>
            </div>
          </div>
          <div class="area"><p class="area-name">INFO.</p>
            <div class="inner-content">
              <div class="info"><p><textarea rows="5" name="info_all"><?php echo $afr_map['info_1']; ?></textarea></p></div><hr>
              <p><span class="submitbulk"><input type="submit" class="button button-primary" name="submit-info" value="Overwrite Info."></span> <strong>Note: Clicking this button will overwrite the info. of <u>all</u> the regions.</strong></p>
            </div>
          </div>
        </div><!-- box-body / for bulk -->
      </div><!-- map-settings / for bulk -->

    </div><!-- map-col-lt -->

    <!-- General Map Colors -->
    <div class="map-col-rt">
      <div class="map-settings">
        <div class="box-header shape-icon">General Settings</div>
        <div class="box-body">
          <div class="general-box"><span class="general-set i-border">Border Color</span><input type="text" name="borderclr" value="<?php echo $afr_map['borderclr']; ?>" class="color-field" /></div>
          <div class="general-box"><span class="general-set i-abbs">Visible Names</span><input type="text" name="visnames" value="<?php echo $afr_map['visnames']; ?>" class="color-field" /></div>
        </div><!-- box-body -->
      </div><!-- map-settings -->
      <p><strong>Hint:</strong> you can set any color as transparent to hide the object.</p>
      <a href="https://www.wpmapplugins.com/interactive-map-of-africa-wordpress-plugin.html" title="Interactive Map of Africa - Premium"><img src="<?php echo AFRMAP_URL . 'images/africa-premium.png'; ?>" alt="Interactive Map of Africa - Premium"></a>
    </div><!-- map-col-rt -->

    <input type="hidden" name="afr_map">
      <?php
      settings_fields(__FILE__);
      do_settings_sections(__FILE__);
      ?>
    <p class="map-btns"><span class="submit"><input type="submit" name="restore_default" id="submit" class="button" value="Restore Default"></span></p>
    <div class="scroll-top"><span class="scroll-top-icon"></span></div>
    <!--scroll-top script-->
    <script>
      jQuery(function(){jQuery(document).on( 'scroll', function(){ if (jQuery(window).scrollTop() > 100) {jQuery('.scroll-top').addClass('show');} else {jQuery('.scroll-top').removeClass('show');}});jQuery('.scroll-top').on('click', scrollToTop);});function scrollToTop() {verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;element = jQuery('body');offset = element.offset();offsetTop = offset.top -32;jQuery('html, body').animate({scrollTop: offsetTop}, 500, 'linear');}
    </script>

  </div><!-- map-page -->
</div><!-- map-admin -->
</form>
