<!-- SIDEBAR --> 
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <a href="{{url('admin/profile/index')}}">
            @if(!Auth::user()->image)
                <img src="{{url('assets/admin_panel/images/user-avatar.png')}}" class="rounded-circle user-photo" alt="User Profile Picture">
            @else
                <img src="{{url('storage')}}/{{Auth::user()->image}}" class="rounded-circle user-photo" alt="{{Auth::user()->employee->first_name}}">
            @endif
            </a>
            <div class="dropdown" style="margin-top: 2px">
                <a href="{{url('admin/profile/index')}}" class="user-name">
                    @if(Auth::user())
                        <strong>Hello! {{Auth::user()->employee->first_name}}</strong>
                    @else
                        -
                    @endif
                </a>  
                <span><small style="font-size: 11px">{{Auth::user()->employee->department->name}}</small></span>
            </div>
            <hr>
        </div>

        <ul class="nav nav-tabs" style="margin: 0px 20px 0px 20px;">
            @if(\Entrust::ability('admin','dashboard,inquiry.accept,inquiry.reject,inquiry.payment,inquiry.send.mail,profile,induction,job,task,repair,client,report'))
            <li class="nav-item">
                <a class="nav-link @show('admin.dashboard.*') @show('profile.*') @show('admin.inquiry.*') @show('induction.*') @show('job.*') @show('repair.*') @show('task.*') @show('task.*') @show('inspection.*') @show('client.*') @show('report.*')" data-toggle="tab" href="#hr_menu">Main</a>
            </li>
            @endif

            @if(\Entrust::ability('admin','master.data,perm.manage,registration,question'))  
            <li class="nav-item">
                <a class="nav-link @show('master.data.*') @show('user.role.*') @show('employee.*') @show('department.*') @show('registration.*') @show('question.*')" 
                data-toggle="tab" href="#project_menu">Config</a>
            </li>
            @endif
        </ul>

        <div class="tab-content p-l-0 p-r-0" style="margin: 0px 20px 0px 20px;">
            <div class="tab-pane animated fadeIn @show('admin.dashboard.*') @show('profile.manage.*') @show('induction.*') @show('admin.inquiry.*') @show('admin.job.*') @show('admin.repair.*') @show('admin.task.*') @show('admin.section.*') @show('admin.client.*') @show('admin.inspection.*') @show('admin.report.*')" id="hr_menu">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">

                        @if(\Entrust::can('dashboard'))
                        <li class="@active('admin.dashboard.*')"><a href="{{url('/admin')}}"><i class="fa fa-chart-bar"></i><span>Dashboard</span></a></li>
                        @endif

                        @if(\Entrust::can('inquiry.list','inquiry.accept','inquiry.reject','inquiry.payment','inquiry.send.mail'))
                        <li class="@active('admin.inquiry.list')">
                            <a href="#Clients" class="has-arrow"><i class="fa fa-sticky-note"></i><span>Inquiries</span></a>
                            <ul>
                                <li><a href="{{url('admin/inquiries')}}">Inquiry List</a></li>
                                <li><a href="{{url('admin/inquiries/create')}}">Create Inquiry</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(\Entrust::can('induction'))
                        <li class="@active('induction.index')">
                            <a href="{{url('admin/induction/index')}}"><i class="fa fa-network-wired"></i>
                                My Inductions
                            </a>
                        </li>
                        @endif

                        @if(\Entrust::can('job'))
                        <li class="@active('admin.job.*')">
                            <a href="#Clients" class="has-arrow"><i class="fa fa-tasks"></i><span>Job Manage</span></a>
                            <ul>
                                <li><a href="{{url('admin/job/index')}}">Jobs</a></li>
                                <li><a href="{{url('admin/section/index')}}">Sections</a></li>
                                <li><a href="{{url('admin/task/index')}}">Tasks</a></li>
                                <li><a href="{{url('admin/job/master-config')}}">Master Data</a></li>
                            </ul>
                        </li>
                        @endif

                        @if(\Entrust::can('inspection'))
                        <li class="@active('admin.inspection.*')">
                            <a href="{{url('admin/inspection/index')}}"><i class="fa fa-bug"></i>
                                Inspection Manage
                            </a>
                        </li>
                        @endif

                        @if(\Entrust::can('repair'))
                        <li class="@active('admin.repair.*')">
                            <a href="{{url('admin/repair/index')}}"><i class="fa fa-cogs"></i>
                                Asset Maintenance
                            </a>
                        </li>
                        @endif

                        @if(\Entrust::can('client'))
                        <li class="@active('admin.client.*')">
                            <a href="{{url('admin/client/index')}}"><i class="fa fa-users"></i>
                                Client Manage
                            </a>
                        </li>
                        @endif

                        @if(\Entrust::can('report'))
                        <li class="@active('admin.report.*')">
                            <a href="#Clients" class="has-arrow"><i class="fa fa-chart-bar"></i><span>Report Manage</span></a>
                            <ul>
                                <li><a href="{{url('admin/report/employee-work-summery')}}">Work Summery</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="tab-pane animated fadeIn @show('master.data.*') @show('perm.manage.*') @show('user.role.*') @show('employee.*') @show('department.*') @show('registration.*') @show('question.*')" id="project_menu">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        
                        @if(\Entrust::can('master.data'))
                        <li class="@active('user.role.*')">
                            <a href="#Clients" class="has-arrow"><i class="icon-lock"></i><span>User Roles</span></a>
                            <ul>
                                <li><a href="{{url('admin/user/role/list')}}">User Roles List</a></li>
                            </ul>
                        </li>
                        <li class="@active('employee.*')">
                            <a href="#Clients" class="has-arrow"><i class="icon-users"></i><span>Employee</span></a>
                            <ul>
                                <li><a href="{{url('admin/employee/list')}}">Employee List</a></li>
                            </ul>
                        </li>
                        <li class="@active('department.*')">
                            <a href="#Clients" class="has-arrow"><i class="icon-puzzle"></i><span>Departments</span></a>
                            <ul>
                                <li><a href="{{url('admin/department/list')}}">Department List</a></li>
                            </ul>
                        </li>
                        <li class="@active('master.data.*')">
                            <a href="#Clients" class="has-arrow"><i class="icon-users"></i><span>Master Data</span></a>
                            <ul>
                                <li><a href="{{url('admin/master/designation')}}">Designation</a></li>
                                <li><a href="{{url('admin/master/cost-type')}}">Cost Type</a></li>
                            </ul>
                        </li>
                        @endif
                        
                        <li class="@active('registration')">
                            <a href="#Clients" class="has-arrow"><i class="icon-puzzle"></i><span>Reg. Requests</span></a>
                            <ul>
                                <li class="@active('registration.index')"><a href="{{url('admin/registration/index')}}">Request List</a></li>
                            </ul>
                        </li>
                        
                        <li class="@active('question.*')">
                            <a href="#Clients" class="has-arrow"><i class="icon-puzzle"></i><span>Questions</span></a>
                            <ul>
                                <!-- <li class="@active('certification.index')"><a href="{{url('admin/certification/index')}}">Certification List</a></li> -->
                                <li class="@active('question')"><a href="{{url('admin/question/index')}}">Question List</a></li>
                            </ul>
                        </li>

                        @if(\Entrust::can('perm.manage')) 
                        <li class="@active('perm.manage.*')">
                            <a href="#Clients" class="has-arrow"><i class="icon-puzzle"></i><span>Permission</span></a>
                            <ul>
                                <li><a href="{{url('admin/permisson/list')}}">Permission Manage</a></li>
                            </ul>
                        </li>  
                        @endif

                    </ul>                        
                </nav>                    
            </div>      
        </div>          
    </div>
</div>
<!-- SIDEBAR