<div class="app-body">
        <div class="left-sidebar">
            <nav class="sidebar-menu">
                <ul id="nav-accordion">
                    <li>
                        <a href="{{route('home')}}">
                            <i class="ti-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="sub-menu">
                        <a href="{{ route('post.create')}}">
                            <i class="ti-plus"></i>
                            <span>New Post</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('post.index')}}">
                            <i class="ti-layout-tab"></i>
                            <span>Blog Posts</span>
                        </a>
                    </li>

                    <!--<li class="sub-menu">
                        <a href="">
                            <i class="ti-layers"></i>
                            <span>Categories</span>
                        </a>
                    </li>-->
                    
                    <li class="sub-menu">
                        <a href="{{route('draft.index')}}">
                            <i class="ti-pencil-alt"></i>
                            <span>Drafts</span><span class="badge badge-primary ml-2"></span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="ti-calendar"></i>
                            <span>Events</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('general.index')}}">General Meetings</a></li>
                            <li><a href="{{route('annual.index')}}">Annual Meetings</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="{{route('meeting.index')}}">
                            <i class="ti-download"></i>
                            <span>Meeting Materials</span>
                        </a>
                    </li>

                    <li class="header">ADMINISTRATION</li>

                    <li class="sub-menu">
                        <a href="{{route('user.index')}}">
                            <i class="ti-user"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{route('role.index')}}">
                            <i class="fa fa-tasks"></i>
                            <span> Roles</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class=" ti-unlock"></i><span> Logout</span></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>    
                    </li>

                </ul>
            </nav>
        </div>
 </div>