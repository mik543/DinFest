<?php
/**
 * @package Unlimited Elements
 * @author UniteCMS.net
 * @copyright (C) 2017 Unite CMS, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('UNLIMITED_ELEMENTS_INC') or die('Restricted access');

class UniteCreatorParamsEditor{
	
	const TYPE_MAIN = "main";
	const TYPE_ITEMS = "items";
	
	private $type = null;
	private $isHiddenAtStart = false;
	private $isItemsType = false;
	private $hasCats = false;
	
	private static $isDialogsPut = false;
	
	
	/**
	 * validate that the object is inited
	 */
	private function validateInited(){
		if(empty($this->type))
			UniteFunctionsUC::throwError("UniteCreatorParamsEditor error: editor not inited");
	}
	
	/**
	 * put category dialogs html
	 */
	public function putHtml_catDialogs(){
		
		if(self::$isDialogsPut == true)
			return(false);
				
		?>

			<div id="uc_dialog_attribute_category_addsection"  title="<?php esc_html_e("Add Section","unlimited_elements")?>" 
				 data-title_edit="<?php _e("Edit Section","unlimited_elements")?>" 
				 data-title_add="<?php _e("Add Section","unlimited_elements")?>" 
				 data-button_add="<?php _e("Add Section","unlimited_elements")?>" 
				 data-button_update="<?php _e("Update Section","unlimited_elements")?>" 
				 
				 style="display:none;">
				
				<div class="dialog_edit_title_inner unite-inputs mtop_20 mbottom_20" >
			
					<div class="unite-inputs-label">
						<?php esc_html_e("Section Title", "unlimited_elements")?>:
					</div>
					
					<input type="text" class="unite-input-wide uc-section-title">
					
					<div class="unite-inputs-sap"></div>
					<br>
					<br>
					<a id="uc_dialog_attribute_category_button_addsection" href="javascript:void(0)" class="unite-button-primary uc-button-add-section"><?php _e("Add Section", "unlimited_elements");?></a>
					
					<div class="unite-dialog-error mtop_10 uc-error-message" data-error_empty="<?php _e("Please fill the section title","unlimited_elements")?>" style="display:none"></div>
					
				</div>
				
			</div>
		
		<?php 
		self::$isDialogsPut = true;
		
	}
	
	/**
	 * output html of the params editor
	 */
	public function outputHtmlTable(){
					
		$this->validateInited();
		
		$style="";
		if($this->isHiddenAtStart == true)
			$style = "style='display:none'";
		
		$addClass = "";
		if($this->hasCats)
			$addClass .= " uc-has-cats";	
		 
		?>
			<div id="attr_wrapper_<?php echo esc_attr($this->type) ?>" class="uc-attr-wrapper unite-inputs <?php echo $addClass?>" data-type="<?php echo esc_attr($this->type)?>" <?php echo UniteProviderFunctionsUC::escAddParam($style)?> >
				
				<?php if($this->hasCats == true):?>
					<div class="uc-attr-cats-wrapper">
						
						<!-- Content Tab -->
						
						<div class="uc-attr-cats-tab uc-attr-tab-content">
							<?php _e("Content","unlimited_elements")?>							
							
							<a href="javascript:void(0)" title="<?php _e("Add Section","unlimited_elements")?>" class="uc-attr-cats__button-add" data-sectiontab="content">+</a>
						</div>
						
						<ul id="uc_attr_list_sections_content" class="uc-attr-list-sections" data-tab="content">
							<li id="cat_general_general" data-id="cat_general_general" class="uc-active" >
								<span class="uc-attr-list__section-title">
									<?php _e("General","unlimited_elements")?> 
								</span>
								<span class="uc-attr-list__section-numitems"></span>
																
								<i class="uc-attr-list-sections__icon-edit fas fa-pen uc-hide-on-movemode" title="<?php _e("Edit Section", "unlimited_elements")?>"></i>
																
								<i class="uc-attr-list-sections__icon-move fas fa-bullseye uc-show-on-movemode" title="<?php _e("Move Here", "unlimited_elements")?>"></i>
								
							</li>
						</ul>
						
						<!-- Style Tab -->
						
						<div class="uc-attr-cats-tab uc-attr-tab-style">
							<?php _e("Style","unlimited_elements")?>
							
							<a href="javascript:void(0)" title="<?php _e("Add Section","unlimited_elements")?>" class="uc-attr-cats__button-add" data-sectiontab="style">+</a>
							
						</div>
						<ul id="uc_attr_list_sections_style" class="uc-attr-list-sections" data-tab="style">
						</ul>
						
						<div class="uc-attr-cats-buttons-wrapper" xstyle="background-color:green;">
							
							<a id="uc_attr_button_switch_move_mode" class="unite-button-secondary uc-hide-on-movemode" href="javascript:void(0)"><?php _e("Move Mode", "unlimited_elements")?></a>
							
							<a id="uc_attr_button_stop_move_mode" class="unite-button-secondary uc-show-on-movemode" href="javascript:void(0)"><?php _e("Stop Move Mode", "unlimited_elements")?></a>
							
						</div>
						
						<div id="uc_attr_cats_selected_text" class="uc-attr-cats-selected-text">
							<span id="uc_attr_cats_selected_text_number"></span>
							<?php _e("selected", "unlimited_elements")?>, 
							
							<a id="uc_attr_cats_selected_clear" href="javascript:void(0)" class="uc-attr-cats-selected-text-link" title="<?php _e("Clear Selected Attributes")?>">
								<?php _e("clear","unlimited_elements")?>
							</a>							
						</div>
						
					</div>
					
				<?php endif?>
				<div class="uc-attr-table-wrapper">
					
					<table class="uc-table-params unite_table_items">
						<thead>
							<tr>
								<th width="50px">
									<!--  
									<span class="uc-show-on-movemode" title="<?php _e("Select / Deselect All", "unlimited_elements")?>">
										<input type='checkbox' class='uc-check-param-move-select-all'>
									</span>
									-->
								</th>
								<th width="200px">
									<?php esc_html_e("Title", "unlimited_elements")?>
								</th>
								<th width="160px">
									<?php esc_html_e("Name", "unlimited_elements")?>
								</th>
								<th width="100px">
									<?php esc_html_e("Type", "unlimited_elements")?>
								</th>
								<th width="270px">
									<?php esc_html_e("Attribute", "unlimited_elements")?>
								</th>
								<th width="200px">
									<?php esc_html_e("Operations", "unlimited_elements")?>
								</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					
					<div class="uc-text-empty-params mbottom_20" style="display:none">
							<?php esc_html_e("No Attributes Found", "unlimited_elements")?>
					</div>
					
					<a class="uc-button-add-param unite-button-secondary" href="javascript:void(0)"><?php esc_html_e("Add Attribute", "unlimited_elements");?></a>
					
					<?php if($this->isItemsType):?>
					
					<a class="uc-button-add-imagebase unite-button-secondary mleft_10" href="javascript:void(0)"><?php esc_html_e("Add Image Base Fields", "unlimited_elements");?></a>
					
					<?php endif?>
				
				</div>	<!-- table wrapper -->
				
			</div>
			
			<!-- params editor dialogs -->
			
			<?php 
			if($this->hasCats == true)
				$this->putHtml_catDialogs();
			?>
			
		<?php 
	}

	
	/**
	 * set hidden at start. must be run before init
	 */
	public function setHiddenAtStart(){
		$this->isHiddenAtStart = true;
	}
	
	
	/**
	 * 
	 * init editor by type
	 */
	public function init($type, $hasCats = false){
		
		if($hasCats === true)
			$this->hasCats = true;
		
		switch($type){
			case self::TYPE_MAIN:
			break;
			case self::TYPE_ITEMS:
				$this->isItemsType = true;
			break;
			default:
				UniteFunctionsUC::throwError("Wrong editor type: {$type}");
			break;
		}
		
		
		$this->type = $type;
	}
	
	
}