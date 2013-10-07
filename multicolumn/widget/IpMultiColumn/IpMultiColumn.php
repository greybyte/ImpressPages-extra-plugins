<?php
/**
 * @package ImpressPages

 *
 */
namespace Modules\extra\multicolumn\widget;

if (!defined('CMS')) exit;

class IpMultiColumn extends \Modules\standard\content_management\Widget {
	
	public function getTitle() {
        //global $parametersMod;
        //return $parametersMod->getValue('standard', 'content_management', 'widget_text', 'menu_mod_multicolumn');
        return "Multi Column";
    }
	
	public function managementHtml($instanceId, $data, $layout) {
		// use $instanceId as seed for the names of our blocks because it is unique.
		// but since we will get a new instanceId after page is published, we need
		// to persist it in widget data.
		if (!array_key_exists('base_id', $data) || !$data['base_id']) {
			$data['base_id'] = $instanceId;
		}
		return parent::managementHtml($instanceId, $data, $layout);
	}
}