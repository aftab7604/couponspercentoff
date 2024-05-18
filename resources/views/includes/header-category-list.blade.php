<div class="category-container">
    <div class="category">
        <ul>
            @forelse($categories as $category)
            <li>
                <a href="{{url('category/'.$category['slug'])}}">
                    <img src="{{asset('uploads/category/'.$category['logo'])}}" alt="{{$category['name']}}" width="58px" height="58px">
                    <span>{{$category['name']}}</span>
                </a>
            </li>
            @empty
            @endforelse
            
            
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
</div>