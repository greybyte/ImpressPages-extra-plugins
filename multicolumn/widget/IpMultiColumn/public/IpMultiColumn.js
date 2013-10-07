/**
 * 
 * IpMultiColumn Widget Controller
 * 
 * @package ImpressPages
 * @copyright Copyright (C) 2011 ImpressPages LTD.
 * @license GNU/GPL, see ip_license.html
 */

function IpWidget_IpMultiColumn(widgetObject) {

    this.widgetObject = widgetObject;
    this.manageInit = manageInit; 
    this.prepareData = prepareData;

    function manageInit() {
        //get widget data currently stored in the database
        var instanceData = this.widgetObject.data('ipWidget').data;
        
        //if widget has been already initialized
        if (instanceData.base_id) { 
            //set input value
            this.widgetObject.find('input[name="base_id"]').val(instanceData.base_id);
        } else {
            //leave input empty
        }
    }

    function prepareData() {
        //create simple data object. It will be returned as the data to be stored.
        var data = Object();
        data.base_id = this.widgetObject.find('input[name="base_id"]').val();
        $(this.widgetObject).trigger('preparedWidgetData.ipWidget', [ data ]);
    }

};
