<div class="main_nav">
    <a href="javascript:void(0)" class="closeNav">&nbsp;</a>
    <ul>
        @foreach ($menus as $key => $menu)
            @php
                $hasNav = !$loop->last && count($menu->children) ? true : false;
                $btnDefault = $menu->data->is_action_item ? true : false;
            @endphp
            <li @class(['has_nav' => $hasNav])>
                <a href="{{ route('index', $menu->data->slug) }}" @class(['btn_default' => $btnDefault])>{{ $menu->name }}</a>
                @if (count($menu->children))
                    @php
                        $menuColumns = true;
                    @endphp
                    <div @class(['floatingMenu', 'has_oneColumn' => $menuColumns])">
                        <div class="row">
                            @foreach ($menu->children as $ckey => $cmenu)
                                <div @class([
                                    'col-lg-12' => $menuColumns,
                                    'col-lg-6 col-md-12' => !$menuColumns,
                                ])="col-lg-6 col-md-12">
                                    <div class="floatingMenu_col">

                                        <h6>
                                            <span><img src="/bizionic/images/{{ $cmenu->data->menu_icon }}"
                                                    alt="{{ $cmenu->data->menu_icon }}" ></span>
                                            {{ $cmenu->name }}
                                            <em class="chevRowDown"><i class="fa fa-angle-down"
                                                    aria-hidden="true"></i></em>
                                        </h6>
                                        @if (count($cmenu->children))
                                            <div class="floatingMenu_col_list ">
                                                <ul>
                                                    @foreach ($cmenu->children as $cItemkey => $cMenuItem)
                                                        <li><a href="{{ url("/{$menu->data->slug}/{$cmenu->data->slug}/{$cMenuItem->data->slug}") }}"
                                                                class="">{{ $cMenuItem->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <small><i class="fa fa-angle-down" aria-hidden="true"></i></small>
                @endif
            </li>
        @endforeach
    </ul>
</div>
