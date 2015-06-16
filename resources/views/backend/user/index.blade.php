@extends('layouts.backend')

@section('content')

    <script type="text/javascript">

        var status_text_verified = '{{ Lang::get('backend/ui.user_status_verified') }}';
        var status_text_pending = '{{ Lang::get('backend/ui.user_status_pending') }}';
        var status_text_blocked = '{{ Lang::get('backend/ui.user_status_blocked') }}';
        var btn_text_block = '{{ Lang::get('backend/ui.user_btn_block') }}';
        var btn_text_unblock = '{{ Lang::get('backend/ui.user_btn_unblock') }}';
    </script>

    <div class="row" ng-controller="UserController as userCtrl" ng-cloak>
        {{--Alert box--}}
        <div class="col-xs-12">
            <div>
                <alert class="alert-dismissable" type="{% alert.type %}" ng-repeat="alert in userCtrl.alerts" close="closeAlert($index)">
                    <h4><i class="icon fa fa-ban"></i>{{ Lang::get('backend/error.alert_box_title') }}</h4>
                    {% alert.msg %}
                </alert>
            </div>
        </div>
        {{--End--}}

        <div class="col-xs-12">

            <div class="box">
                <div class="overlay">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
                <div class="box-header">
                    <h3 class="box-title">{{ Lang::get('backend/ui.user_list_box_title') }}</h3>

                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right"
                                   style="width: 150px;" placeholder="Search">

                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody ng-repeat="user in userCtrl.users">
                        <tr>
                            <td>{% user.id %}</td>
                            <td>{% user.name %}</td>
                            <td>{% user.email %}</td>
                            <td>{% user.created_at %}</td>
                            <td>
          						  <span  id="uid-{% user.id %}" class="label" ng-class="userCtrl.getUserStatus(user.blocked, user.verified)" ng-bind="userCtrl.getUserStatusText(user.blocked, user.verified)">
          						  </span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" ng-click="userCtrl.changeBlockStatus(user.id)" ng-bind="userCtrl.getButtonText(user.blocked)">
                                </button>
                                <button ng-if="!user.verified" type="button" class="btn btn-sm btn-warning">
                                    {{ Lang::get('backend/ui.user_btn_verify') }}
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection