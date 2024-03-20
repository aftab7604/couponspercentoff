<aside id="leftsidebar" class="sidebar">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    {{-- <div class="image"><a href="profile.html"><img src="assets/images/profile_av.jpg" alt="User"></a></div> --}}
                    <div class="detail">
                        <h4>{{Auth::guard("admin")->user()->name}}</h4>
                        <small>{{Auth::guard("admin")->user()->email}}</small>                        
                    </div>
                    <a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a>
                    <a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a>
                    <a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>
                    <a href="chat.html" title="Chat App"><i class="zmdi zmdi-comments"></i></a>
                    <a href="{{route("admin.logout")}}" title="Sign out"><i class="zmdi zmdi-power"></i></a>
                </div>
            </li>
            {{-- <li class="header">MAIN</li> --}}
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                <ul class="ml-menu">
                    <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="{{route("admin")}}">Home</a> </li>
                    <li class="{{ request()->is('admin/categories') ? 'active' : '' }}"><a href="{{route('admin.categories')}}">Categories</a></li>
                    <li class="{{ request()->is('admin/stores') ? 'active' : '' }}"><a href="{{route('admin.stores')}}">Stores</a></li>
                    <li class="{{ request()->is('admin/coupons') ? 'active' : '' }}"><a href="{{route('admin.coupons')}}">Coupons</a></li>
                    <li class="{{ request()->is('admin/blogs') ? 'active' : '' }}"><a href="{{route('admin.blogs')}}">Blogs</a></li>
                    <li class="{{ request()->is('admin/pages') ? 'active' : '' }}"><a href="{{route('admin.pages')}}">Pages</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>