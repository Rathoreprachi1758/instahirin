<div class="main_nav">
    <a href="javascript:void(0)" class="closeNav">&nbsp;</a>
    <ul>
        @foreach($menus as $key => $menu)
        @php
            $hasNav = (!$loop->last && count($menu->children)) ? true : false;
            $btnDefault = ($menu->data->is_action_item) ?  true : false;
            $customClass = ($menu->data->is_action_item) ?  $menu->data->is_action_item : '';
            $floatingMenuClass = 'floatingMenu '.$menu->data->slug.'Floating_menu';

        @endphp
        <li @class(['has_nav'=>$hasNav])>
            <a href="{{route('index',$menu->data->slug)}}" @class([$customClass=>$btnDefault])>{{$menu->name}}<small><i class="fa fa-angle-down" aria-hidden="true"></i></small></a>
            @if(count($menu->children))
            @php
                $menuColumns = true;
            @endphp
            <div @class([$floatingMenuClass=>true])>
                <div class="row">
                    @foreach($menu->children as $ckey => $cmenu)
                    @php
                        $hasChilCustomClass = ($cmenu->data->is_action_item) ?  true : false;
                        $chilcustomClass = ($cmenu->data->is_action_item) ?  $cmenu->data->is_action_item : '';
                    @endphp                            
                    <div @class([$chilcustomClass=>$hasChilCustomClass])>
                        <div class="floatingMenu_col">
                            <h6>
                                <span></span>
                                {{ $cmenu->name }}
                                <em class="chevRowDown"><i class="fa fa-angle-down" aria-hidden="true"></i></em>
                            </h6>
                            @if(count($cmenu->children))
                            <div class="floatingMenu_col_list ">
                                <div class="floatingMenu_info">
                                    <div class="row">
                                    @foreach($cmenu->children as $segmentKey => $segment)
                                    @if(count($segment->children))
                                    @php
                                        $hasSegmentClass = ($segment->data->is_action_item) ?  true : false;
                                        $segmentcustomClass = ($segment->data->is_action_item) ?  $segment->data->is_action_item : '';
                                        $lastOuterClass = $loop->last ? 'innerColum_menu_outer border_0' : 'innerColum_menu_outer';
                                    @endphp
                                        <div @class([$segmentcustomClass=>$hasSegmentClass])>
                                        <div @class([$lastOuterClass=>true])>
                                            @foreach($segment->children as $cItemkey => $cMenuItem)
                                                    
                                                        <div class="innerColum_menu">
                                                            @php
                                                            $cMenuItemName = $cMenuItem->name == 'spacer' ? '' : $cMenuItem->name; 
                                                            @endphp
                                                            <strong>{{$cMenuItemName}}</strong>
                                                            @if(count($cMenuItem->children))
                                                            <ul>
                                                                @foreach($cMenuItem->children as $childItemkey => $childMenuItem)
                                                                @php
                                                                $hasChildMenuItemClass = ($childMenuItem->data->is_action_item) ?  true : false;
                                                                $childMenuItemClass = ($childMenuItem->data->is_action_item) ?  $childMenuItem->data->is_action_item : '';

                                                                @endphp                                                                
                                                                <li @class([$childMenuItemClass=>$hasChildMenuItemClass])><a href="{{url("/{$menu->data->slug}/{$cmenu->data->slug}/{$cMenuItem->data->slug}/{$childMenuItem->data->slug}")}}" class="  ">{{$childMenuItem->name}}</a> </li>
                                                                @endforeach 
                                                            </ul>
                                                            @endif
                                                        </div>
                                                    
                                                @endforeach
                                                </div>
                                        </div>
                                    @endif
                                    @endforeach                                                                    
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    <div class=" col-lg-3 col-md-3  pl-0">
                        @include('partials.menu_address')
                    </div>
                </div>
            </div>
            @endif
        </li>
        @endforeach
    </ul>
</div>