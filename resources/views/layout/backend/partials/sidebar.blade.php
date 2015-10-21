<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hoai Nam Tran</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        @include('layout.backend.partials.searchbar')
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{url('admin/dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>                
            </li>
            <li>
                <a href="{{url('admin/users')}}">
                    <i class="fa fa-fw fa-user"></i>
                    <span>Manage user</span>                    
                </a>               
            </li>            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>