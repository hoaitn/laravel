var backend = angular.module('angular_backend', ['ui.bootstrap'], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{%');
    $interpolateProvider.endSymbol('%}');
});

backend.controller('UserController', function ($scope, $http) {

    var self = this;

    self.status_text_verified = status_text_verified;
    self.status_text_blocked = status_text_blocked;
    self.status_text_pending = status_text_pending;
    self.btn_text_block = btn_text_block;
    self.btn_text_unblock = btn_text_unblock;


    $http.get('user/list').success(function (data) {
        self.users = angular.fromJson(data);
        jQuery('.overlay').hide();
    });

    self.alerts = [];

    self.closeAlert = function (index) {
        self.alerts.splice(index, 1);
    };

    /*
    * Get user's status class
    * */
    self.getUserStatus = function (blocked, verified) {
        return {
            'label-danger': blocked,
            'label-warning': (!blocked && !verified),
            'label-success': (!blocked && verified)
        }
    };

    /*
     * Set button text
     * */
    self.getButtonText = function (blocked) {
        if(blocked)
            return self.btn_text_unblock;
        else
            return self.btn_text_block;
    };

    /*
     * Get user's status text
     * */
    self.getUserStatusText = function (blocked, verified) {
        if(blocked)
            return self.status_text_blocked;
        else if(verified)
            return self.status_text_verified;
        else
            return self.status_text_pending;
    };

    self.changeBlockStatus = function (id) {
        var ajax_config = {
            method: 'POST',
            url: 'user/change_block_status',
            data: {user_id: id}
        };

        $http(ajax_config)
            .success(function (data) {
                var user_status = angular.element(document.querySelector('#uid-' + id));
                user_status.removeClass("label-danger label-success label-danger");

                if (data.blocked) {
                    user_status.addClass("label-danger");
                    user_status.text(self.status_text_blocked);
                } else if (data.verified) {
                    user_status.addClass("label-success");
                    user_status.text(self.status_text_verified);
                } else {
                    user_status.addClass("label-warning");
                    user_status.text(self.status_text_pending);
                }

            })
            .error(function (data, status) {
                self.alerts.push({type: 'danger', msg: data.message});
            });
    };
});