@push('head')
<script type="text/ng-template" id="demo.html">
    <div ng-controller="DemoCtrl">
        <div class="container-fluid">
            <p>{{ demo_author() }}</p>
            <p><a href="{{url('demo')}}" target="_blank">{{__('Demo in frontend')}}</a></p>
        </div>
        <div class="content-btn">
            <button class="btn btn-default btn-sm" ng-click="demo()"><i class="fa fa-smile-o fa-fw"></i> {{ __('Demo button') }}</button>
        </div>
    </div>
</script>
<script type="text/javascript">
    VnSapp.controller('DemoCtrl', function ($rootScope, $scope, Notification) {
        $rootScope.siteTitle = '{{__('Module demo')}}';
        $scope.demo = function () {
            Notification.success('{{ __('Demo button clicked') }}')
        }
    });
</script>
@endpush
@navbarcpanel([
    'icon' => 'fa fa-smile-o fa-fw',
    'label' => 'Module demo',
    'permission' => 'demo',
    'name' => 'root.demo',
    'url' => 'demo',
    'template' => 'demo.html'
])
