<?php

   $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
   require_once( $parse_uri[0] . 'wp-load.php' );
   
   $alias = $_POST['alias'];
   $id = $_POST['id'];
   $defaultVal = nl2br($_POST['defaultVal']);

?>
<div class="unlimited-wrap">
   <h3 class="heading" data-default="<?php echo $alias; ?>"><?php echo $alias; ?></h3>
	<div class="expand-wrap">
		<div class="wrap repeater-wrap" data-name="<?php echo $id; ?>" data-type="unlimited">
		   <div class="one_half">
		      <label class="template-title" for="alias-<?php echo $id; ?>">
		         <?php _e('Template Alias', ALM_NAME); ?>:
		      </label>
		      <?php 
		         echo '<input type="text" id="alias-'.$id.'" class="_alm_repeater_alias" value="'.$alias.'" maxlength="55">';
		      ?>
		   </div>
		   <div class="one_half">
	         <label class="template-title" for="id-<?php echo $id; ?>">
	            <?php _e('Template ID', ALM_NAME); ?>:
            </label>
            <input type="text" class="disabled-input" id="id-<?php echo $id; ?>" value="<?php echo $id; ?>" readonly="readonly">
		   </div>
         				
         <label class="template-title" for="template-<?php echo $id; ?>">
            <?php _e('Enter the HTML and PHP code for this template', ALM_NAME); ?>:
         </label>
         
			<div class="textarea-wrap">
   			<?php include( ALM_PATH . 'admin/includes/components/layout-list.php'); ?>
				<textarea rows="10" id="<?php echo $id; ?>" class="_alm_repeater"><?php echo $defaultVal; ?></textarea>
				<script>
               var editor_<?php echo $id; ?> = CodeMirror.fromTextArea(document.getElementById("<?php echo $id; ?>"), {
                 mode:  "application/x-httpd-php",
                 lineNumbers: true,
                 lineWrapping: true,
                 indentUnit: 0,
                 matchBrackets: true,
                 viewportMargin: Infinity,
                 extraKeys: {"Ctrl-Space": "autocomplete"},
               });
             </script>
			</div>
			
			<input type="submit" value="<?php _e('Save Template', ALM_NAME); ?>" class="button button-primary save-repeater" data-editor-id="<?php echo $id; ?>">
			<div class="saved-response">&nbsp;</div>
			
			<p class="alm-delete"><a href="javascript:void(0);"><?php _e('Delete', ALM_NAME); ?></a></p>
		</div> 					           
	</div>
	<div class="clear"></div>
</div>