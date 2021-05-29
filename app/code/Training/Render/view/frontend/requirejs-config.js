var config = {
    config: {
        mixins: {
            'Magento_Catalog/js/catalog-add-to-cart': {
                'Training_Render/js/catalog-add-to-cart/mixin': true
            },
            'Magento_Checkout/js/action/place-order': {
                'Training_Render/js/checkout/action/place-order/mixin': false
            }
        }
    }
};
