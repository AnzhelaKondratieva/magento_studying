define([
    'uiComponent',
    'jquery',
    'ko'
], function (Component, $, ko) {
    'use strict';
    return Component.extend({
        stock: ko.observable(''),
        isLoading: ko.observable(false),
        url: '',
        initialize: function () {
            this._super();
            this.showStock();
            return this;
        },
        showStock: function () {
            this.isLoading(true);
            var self = this;
            $.ajax({
                url: self.url,
                type: 'post',
                dataType: 'json'})
                .done(function (data) {
                    if (data.qty) {
                        self.stock(data.qty);
                    }
                }).always(function () {
                self.isLoading(false);
            });
        }
    });
});
