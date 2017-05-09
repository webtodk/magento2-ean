/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*browser:true*/
/*global define*/
define(
    [
        'Magento_Checkout/js/view/payment/default',
        'jquery',
        "mage/validation"
    ],
    function (Component,$) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Webto_EAN/payment/ean',
                eanNumber: '',
                eanCompany: '',
                eanRekv: '',
                eanRef: ''
            },
            
            initObservable: function () {
                this._super()
                    .observe('eanNumber')
                    .observe('eanCompany')
                    .observe('eanRekv')
                    .observe('eanRef');
                return this;
            },
            
            getData: function () {
                return {
                	"method": this.item.method,
                    "additional_data": {
                    	'ean_number': this.eanNumber(),
                    	'ean_company': this.eanCompany(),
                    	'ean_rekv': this.eanRekv(),
                    	'ean_ref': this.eanRef()                    	
                    }
                };
            },
            
            validate: function () {
                var form = 'form[data-role=ean-form]';
                return $(form).validation() && $(form).validation('isValid');
            },

            /** Returns send check to info */
            getMailingAddress: function() {
                return window.checkoutConfig.payment.checkmo.mailingAddress;
            },
        });
    }
);
