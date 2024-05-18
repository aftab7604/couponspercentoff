<nav class="navbar">
    <div class="col-12">        
        <div class="navbar-header">
            <a href="javascript:void(0);" class="h-bars"></a>
            <a class="navbar-brand" href="{{route("home")}}"><img src="{{asset('assets/images/logo.jpeg')}}" style="width:100%" alt="COUPONSPERCENTOFF"></a>
        </div>
        <ul class="nav navbar-nav navbar-left">            
            <li class="">
                <div class="menu">
                    <ul>
                        <li><a href="{{route("home")}}">Home</a></li>
                        <li><a href="{{route("home.blogs")}}">Blog</a></li>
                        <li><a href="{{route("home.about-us")}}">About Us</a></li>
                        <li><a href="{{route("home.contact-us")}}">Contact Us</a></li>
                        
                        {{-- <li><a href="javascript:void(0)">UI Kit</a>
                            <ul>
                                <li><span><i class="zmdi zmdi-label"></i> List</span>
                                    <ul>
                                        <li> <a href="ui_kit.html" >UI KIT</a> </li>                    
                                        <li> <a href="alerts.html" >Alerts</a> </li>                    
                                        <li> <a href="collapse.html" >Collapse</a> </li>
                                        <li> <a href="colors.html" >Colors</a> </li>
                                    </ul>
                                </li>
                                <li><span><i class="zmdi zmdi-label"></i> List</span>
                                    <ul>
                                        <li> <a href="dialogs.html" >Dialogs</a> </li>
                                        <li> <a href="icons.html" >Icons</a> </li>                    
                                        <li> <a href="list-group.html" >List Group</a> </li>
                                        <li> <a href="media-object.html" >Media Object</a> </li>
                                    </ul>
                                </li>
                                <li><span><i class="zmdi zmdi-label"></i> List</span>
                                    <ul>
                                        <li> <a href="modals.html" >Modals</a> </li>
                                        <li> <a href="notifications.html" >Notifications</a></li>                    
                                        <li> <a href="progressbars.html" >Progress Bars</a></li>
                                        <li> <a href="range-sliders.html" >Range Sliders</a></li>
                                    </ul>
                                </li>
                                <li><span><i class="zmdi zmdi-label"></i> List</span>
                                    <ul>
                                        <li> <a href="sortable-nestable.html" >Sortable &amp; Nestable</a></li>
                                        <li> <a href="tabs.html" >Tabs</a></li>
                                        <li> <a href="waves.html" >Waves</a></li>
                                    </ul>
                                </li>                    
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-sm-down">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-addon">
                        <i class="zmdi zmdi-search"></i>
                    </span>
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
            {{-- <li><a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li> --}}
            {{-- <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li> --}}
        </ul>
    </div>
</nav>