<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_manufacturers_select.php 15882 2010-04-11 16:37:54Z wilt $
 */
  $content = '<div class="SidebarListContainer GuidedFilterContainer navigation-frame leftNavDepartmentsContainer clearfix ShopFor">';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '">';
  $content .= '<div id="Shop For1" class="collapse accordionWrapper"> ';
  $content .= '<ul id="Shop For1Accordion" class="accordion" data-accordion="" role="tablist">';
  $content .= '<li class="accordion-navigation active">';
  $content .= ' <a id="Shop-For1Title" href="javascript:void(0)" class="disclosable accordion-header">';
  $content .= BOX_HEADING_MANUFACTURERS.'</a>';
  $content .= '<div role="tabpanel" id="Shop-For1-disclosable" class="accordion-content content active">';
  //$content.= zen_draw_form('manufacturers_form', zen_href_link(FILENAME_DEFAULT, '', $request_type, false), 'get');
  $content .= '<ul  class="nav ">';
  $content .= zen_draw_hidden_field('main_page', FILENAME_DEFAULT);
  for ($i = 1, $n = sizeof($manufacturer_sidebox_array); $i < $n && $i <= 15; $i++) {
  //$content .= zen_draw_radio_field('manufacturers_id', $manufacturer_sidebox_array[$i][id],false,'onchange="this.form.submit();" class="manufactures_input"').'<span>'.$manufacturer_sidebox_array[$i][text].'</span><br class="clearBoth">';
  $content .= "<li><a class='a-list-item' href='".zen_href_link(FILENAME_DEFAULT, 'manufacturers_id='.$manufacturer_sidebox_array[$i][id])."' class='manufactures_input'>".$manufacturer_sidebox_array[$i][text].'</a></li>';
}
  
  $content .= "</ul>";
  //if(sizeof($manufacturer_sidebox_array)>15){
  	$content .= '<a class="brand_more" href="'.zen_href_link(FILENAME_DEFINE_MANUFACTURER).'">see more</a>';
  //}
  //$content .= '</form>';
  $content .= '</div></li></ul></div></div>  ';  
  $content .= '</div>';
?>

