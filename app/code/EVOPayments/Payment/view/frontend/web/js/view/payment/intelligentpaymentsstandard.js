define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'evopayments',
                component: 'EVOPayments_Payment/js/view/payment/method-renderer/evopaymentsstandard'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
