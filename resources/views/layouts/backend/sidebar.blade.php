 <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" style="max-width: 48px" class="img-circle" src="{{\Auth::user()->getAvatarurl()}}"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{\Auth::user()->getNameOrEmail(true)}}</strong>
                             </span> <span class="text-muted text-xs block">{{\Auth::user()->role->name}} <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="{{route('my.profile')}}">Profile</a></li>                            
                            <li class="divider"></li>
                            <li><a href="{{route('auth.logout')}}">Logout</a></li>
                        </ul>
                    </div>
                    <small>{{getOption('site_name')}}</small>
                    <div class="logo-element">
                        Rollo
                    </div>
                </li>                
                <li>
                    <a href="{{route('dashboard.index')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                @if(auth()->user()->isAdmin())
                <li class="">
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">RBAC</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href="{{route('users.index')}}">Users</a></li>
                        @if(auth()->user()->isSuperAdmin())
                            <li><a href="{{route('roles.index')}}">Roles</a></li>
                            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                        @endif
                    </ul>
                </li>  
                @endif
                  
                @if(auth()->user()->isAdmin())
                <li>
                    <a href="{{route('anggota.index')}}"><i class="fa fa-user"></i> <span class="nav-label">Anggota</span></a>
                </li>
                <li>
                    <a href="{{route('posts.index')}}"><i class="fa fa-pie-chart"></i> <span class="nav-label">Posts</span></a>
                </li>

                <li>
                    <a href="{{route('static.pages.index')}}"><i class="fa fa-pie-chart"></i> <span class="nav-label">Pages</span></a>
                </li>
                <li>
                    <a href="{{route('gallery.index')}}"><i class="fa fa-pie-chart"></i> <span class="nav-label">Gallery</span></a>
                </li>
                
                <li>
                    <a href="{{route('theme.options.general')}}"><i class="fa fa-wrench"></i><span class="nav-label"> Theme Options</span></a>
                </li>

                <li>
                    <a href="{{route('setting.general')}}"><i class="fa fa-gear"></i><span class="nav-label"> Settings</span></a>
                </li>

                <li>
                    <a href="{{route('menus.index')}}"><i class="fa fa-wrench"></i><span class="nav-label"> Menus</span></a>
                </li>
                @endif                
                

                <li>
                    <a target="_blank" href="{{route('page.index')}}"><i class="fa fa-home"></i> <span class="nav-label">Visit Site</span></a>
                </li>            
            </ul>

        </div>
    </nav>