<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-right8"></i>
        </a>
        <span class="font-weight-semibold">Navigation</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="sidebar-user-material-body">
                <div class="card-body text-center">
                    <a href="#">
                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                    </a>
                    <h6 class="mb-0 text-white text-shadow-dark">Victoria Baker</h6>
                    <span class="font-size-sm text-white text-shadow-dark">Santa Ana, CA</span>
                </div>
                                            
                <div class="sidebar-user-material-footer">
                    <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                </div>
            </div>

            <div class="collapse" id="user-nav">
                <ul class="nav nav-sidebar">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-user-plus"></i>
                            <span>My profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-coins"></i>
                            <span>My balance</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-comment-discussion"></i>
                            <span>Messages</span>
                            <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-cog5"></i>
                            <span>Account settings</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-switch2"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="index" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="layout_nav_horizontal" class="nav-link">Horizontal navigation</a></li>
                        <li class="nav-item"><a href="sidebar_none" class="nav-link">No sidebar</a></li>
                        <li class="nav-item"><a href="sidebar_main" class="nav-link">1 sidebar</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">2 sidebars</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_secondary" class="nav-link">Secondary sidebar</a></li>
                                <li class="nav-item"><a href="sidebar_right" class="nav-link">Right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">3 sidebars</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_right_hidden" class="nav-link">Right sidebar hidden</a></li>
                                <li class="nav-item"><a href="sidebar_right_visible" class="nav-link">Right sidebar visible</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Content sidebars</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_content_left" class="nav-link">Left sidebar</a></li>
                                <li class="nav-item"><a href="sidebar_content_right" class="nav-link">Right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="layout_boxed" class="nav-link">Boxed layout</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="navbar_fixed_main" class="nav-link">Fixed main navbar</a></li>
                        <li class="nav-item"><a href="navbar_fixed_secondary" class="nav-link">Fixed secondary navbar</a></li>
                        <li class="nav-item"><a href="navbar_fixed_both" class="nav-link">Both navbars fixed</a></li>
                        <li class="nav-item"><a href="layout_fixed" class="nav-link">Fixed layout</a></li>
                    </ul>
                </li>
                
                <!-- /main -->

                <!-- Forms -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Forms</div> <i class="icon-menu" title="Forms"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="form_inputs" class="nav-link">Basic inputs</a></li>
                        <li class="nav-item"><a href="form_checkboxes_radios" class="nav-link">Checkboxes &amp; radios</a></li>
                        <li class="nav-item"><a href="form_select2" class="nav-link">Select2 selects</a></li>
                        <li class="nav-item"><a href="form_multiselect" class="nav-link">Bootstrap multiselect</a></li>
                        <li class="nav-item"><a href="form_input_groups" class="nav-link">Input groups</a></li>
                        <li class="nav-item"><a href="form_controls_extended" class="nav-link">Extended controls</a></li>
                        <li class="nav-item"><a href="form_floating_labels" class="nav-link">Floating labels</a></li>
                        <li class="nav-item"><a href="form_tag_inputs" class="nav-link">Tag inputs</a></li>
                        <li class="nav-item"><a href="form_dual_listboxes" class="nav-link">Dual Listboxes</a></li>
                        <li class="nav-item"><a href="form_validation" class="nav-link">Validation</a></li>
                        <li class="nav-item"><a href="form_wizard" class="nav-link">Form wizard</a></li>
                        <li class="nav-item"><a href="form_actions" class="nav-link">Form actions</a></li>
                        <li class="nav-item"><a href="form_inputs_grid" class="nav-link">Inputs grid</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-file-css"></i> <span>JSON forms</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="JSON forms">
                        <li class="nav-item"><a href="alpaca_basic" class="nav-link">Basic inputs</a></li>
                        <li class="nav-item"><a href="alpaca_advanced" class="nav-link">Advanced inputs</a></li>
                        <li class="nav-item"><a href="alpaca_controls" class="nav-link">Controls</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-spell-check"></i> <span>Text editors</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Text editors">
                        <li class="nav-item"><a href="editor_summernote" class="nav-link">Summernote editor</a></li>
                        <li class="nav-item"><a href="editor_ckeditor" class="nav-link">CKEditor</a></li>
                        <li class="nav-item"><a href="editor_trumbowyg" class="nav-link">Trumbowyg editor</a></li>
                        <li class="nav-item"><a href="editor_code" class="nav-link">Code editor</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-select2"></i> <span>Pickers</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Pickers">
                        <li class="nav-item"><a href="picker_date" class="nav-link">Date &amp; time pickers</a></li>
                        <li class="nav-item"><a href="picker_color" class="nav-link">Color pickers</a></li>
                        <li class="nav-item"><a href="picker_location" class="nav-link">Location pickers</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-insert-template"></i> <span>Form layouts</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form layouts">
                        <li class="nav-item"><a href="form_layout_vertical" class="nav-link">Vertical form</a></li>
                        <li class="nav-item"><a href="form_layout_vertical_styled" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="form_layout_horizontal" class="nav-link">Horizontal form</a></li>
                        <li class="nav-item"><a href="form_layout_horizontal_styled" class="nav-link disabled">Custom styles <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <!-- /forms -->

                <!-- Components -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Components</div> <i class="icon-menu" title="Components"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-grid"></i> <span>Basic components</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Basic components">
                        <li class="nav-item"><a href="components_modals" class="nav-link">Modals</a></li>
                        <li class="nav-item"><a href="components_dropdowns" class="nav-link">Dropdown menus</a></li>
                        <li class="nav-item"><a href="components_tabs" class="nav-link">Tabs component</a></li>
                        <li class="nav-item"><a href="components_pills" class="nav-link">Pills component</a></li>
                        <li class="nav-item"><a href="components_collapsible" class="nav-link">Collapsible</a></li>
                        <li class="nav-item"><a href="components_navs" class="nav-link">Navs</a></li>
                        <li class="nav-item"><a href="components_buttons" class="nav-link">Buttons</a></li>
                        <li class="nav-item"><a href="components_popups" class="nav-link">Tooltips and popovers</a></li>
                        <li class="nav-item"><a href="components_alerts" class="nav-link">Alerts</a></li>
                        <li class="nav-item"><a href="components_pagination" class="nav-link">Pagination</a></li>
                        <li class="nav-item"><a href="components_badges" class="nav-link">Badges</a></li>
                        <li class="nav-item"><a href="components_progress" class="nav-link">Progress</a></li>
                        <li class="nav-item"><a href="components_breadcrumbs" class="nav-link">Breadcrumbs</a></li>
                        <li class="nav-item"><a href="components_media" class="nav-link">Media objects</a></li>
                        <li class="nav-item"><a href="components_scrollspy" class="nav-link">Scrollspy</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-puzzle2"></i> <span>Content styling</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Content styling">
                        <li class="nav-item"><a href="content_page_header" class="nav-link">Page header</a></li>
                        <li class="nav-item"><a href="content_page_footer" class="nav-link disabled">Page footer <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="content_cards" class="nav-link">Cards</a></li>
                        <li class="nav-item"><a href="content_cards_content" class="nav-link">Card content</a></li>
                        <li class="nav-item"><a href="content_cards_layouts" class="nav-link">Card layouts</a></li>
                        <li class="nav-item"><a href="content_cards_header" class="nav-link">Card header elements</a></li>
                        <li class="nav-item"><a href="content_cards_footer" class="nav-link">Card footer elements</a></li>
                        <li class="nav-item"><a href="content_cards_draggable" class="nav-link">Draggable cards</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="content_text_styling" class="nav-link">Text styling</a></li>
                        <li class="nav-item"><a href="content_typography" class="nav-link">Typography</a></li>
                        <li class="nav-item"><a href="content_helpers" class="nav-link">Helper classes</a></li>
                        <li class="nav-item"><a href="content_helpers_flex" class="nav-link">Flex utilities</a></li>
                        <li class="nav-item"><a href="content_syntax_highlighter" class="nav-link">Syntax highlighter</a></li>
                        <li class="nav-item"><a href="content_grid" class="nav-link">Grid system</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-gift"></i> <span>Extra components</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Extra components">
                        <li class="nav-item"><a href="extra_pnotify" class="nav-link">PNotify notifications</a></li>
                        <li class="nav-item"><a href="extra_jgrowl_noty" class="nav-link">jGrowl and Noty notifications</a></li>
                        <li class="nav-item"><a href="extra_sweetalert" class="nav-link">SweetAlert notifications</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="extra_sliders_noui" class="nav-link">NoUI sliders</a></li>
                        <li class="nav-item"><a href="extra_sliders_ion" class="nav-link">Ion range sliders</a></li>
                        <li class="nav-item"><a href="extra_trees" class="nav-link">Dynamic tree views</a></li>
                        <li class="nav-item"><a href="extra_context_menu" class="nav-link">Context menu</a></li>
                        <li class="nav-item"><a href="extra_fab" class="nav-link">Floating action buttons</a></li>
                        <li class="nav-item"><a href="extra_session_timeout" class="nav-link">Session timeout</a></li>
                        <li class="nav-item"><a href="extra_idle_timeout" class="nav-link">Idle timeout</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-droplet2"></i> <span>Color system</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Color system">
                        <li class="nav-item"><a href="colors_primary" class="nav-link">Primary palette</a></li>
                        <li class="nav-item"><a href="colors_danger" class="nav-link">Danger palette</a></li>
                        <li class="nav-item"><a href="colors_success" class="nav-link">Success palette</a></li>
                        <li class="nav-item"><a href="colors_warning" class="nav-link">Warning palette</a></li>
                        <li class="nav-item"><a href="colors_info" class="nav-link">Info palette</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="colors_pink" class="nav-link">Pink palette</a></li>
                        <li class="nav-item"><a href="colors_violet" class="nav-link">Violet palette</a></li>
                        <li class="nav-item"><a href="colors_purple" class="nav-link">Purple palette</a></li>
                        <li class="nav-item"><a href="colors_indigo" class="nav-link">Indigo palette</a></li>
                        <li class="nav-item"><a href="colors_blue" class="nav-link">Blue palette</a></li>
                        <li class="nav-item"><a href="colors_teal" class="nav-link">Teal palette</a></li>
                        <li class="nav-item"><a href="colors_green" class="nav-link">Green palette</a></li>
                        <li class="nav-item"><a href="colors_orange" class="nav-link">Orange palette</a></li>
                        <li class="nav-item"><a href="colors_brown" class="nav-link">Brown palette</a></li>
                        <li class="nav-item"><a href="colors_grey" class="nav-link">Grey palette</a></li>
                        <li class="nav-item"><a href="colors_slate" class="nav-link">Slate palette</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-spinner2 spinner"></i> <span>Animations</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Animations">
                        <li class="nav-item"><a href="animations_css3" class="nav-link">CSS3 animations</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Velocity animations</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="animations_velocity_basic" class="nav-link">Basic usage</a></li>
                                <li class="nav-item"><a href="animations_velocity_ui" class="nav-link">UI pack effects</a></li>
                                <li class="nav-item"><a href="animations_velocity_examples" class="nav-link">Advanced examples</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-thumbs-up2"></i> <span>Icons</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Icons">
                        <li class="nav-item"><a href="icons_icomoon" class="nav-link">Icomoon</a></li>
                        <li class="nav-item"><a href="icons_material" class="nav-link">Material</a></li>
                        <li class="nav-item"><a href="icons_fontawesome" class="nav-link">Font awesome</a></li>
                    </ul>
                </li>
                <!-- /components -->

                <!-- Layout -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Layout</div> <i class="icon-menu" title="Layout options"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Page layouts</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Page layouts">
                        <li class="nav-item"><a href="layout_fixed_navbar" class="nav-link">Fixed navbar</a></li>
                        <li class="nav-item"><a href="layout_fixed_sidebar_custom" class="nav-link">Fixed sidebar - custom scroll</a></li>
                        <li class="nav-item"><a href="layout_fixed_sidebar_native" class="nav-link">Fixed sidebar - native scroll</a></li>
                        <li class="nav-item"><a href="layout_fixed_hideable_navbar" class="nav-link">Hideable navbar</a></li>
                        <li class="nav-item"><a href="layout_fixed_footer" class="nav-link">Fixed footer</a></li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="layout_boxed_default" class="nav-link">Boxed with default sidebar</a></li>
                        <li class="nav-item"><a href="layout_boxed_mini" class="nav-link">Boxed with mini sidebar</a></li>
                        <li class="nav-item"><a href="layout_boxed_full" class="nav-link">Boxed full width</a></li>
                        <li class="nav-item"><a href="layout_boxed_content" class="nav-link">Boxed content</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-indent-decrease2"></i> <span>Sidebars</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Sidebars">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Main sidebar</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_default_collapse" class="nav-link">Default collapsible</a></li>
                                <li class="nav-item"><a href="sidebar_default_hide" class="nav-link">Default hideable</a></li>
                                <li class="nav-item"><a href="sidebar_default_hidden" class="nav-link">Default hidden</a></li>
                                <li class="nav-item"><a href="sidebar_mini_collapse" class="nav-link">Mini collapsible</a></li>
                                <li class="nav-item"><a href="sidebar_mini_hide" class="nav-link">Mini hideable</a></li>
                                <li class="nav-item"><a href="sidebar_mini_hidden" class="nav-link">Mini hidden</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_default_color_dark" class="nav-link">Dark color</a></li>
                                <li class="nav-item"><a href="sidebar_default_color_custom" class="nav-link">Custom color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Secondary sidebar</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_secondary_after" class="nav-link">After default</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_before" class="nav-link">Before default</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_hidden" class="nav-link">Hidden by default</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_secondary_color_dark" class="nav-link">Dark color</a></li>
                                <li class="nav-item"><a href="sidebar_secondary_color_custom" class="nav-link">Custom color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Right sidebar</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_right_default_collapse" class="nav-link">Show - collapse main</a></li>
                                <li class="nav-item"><a href="sidebar_right_default_hide" class="nav-link">Show - hide main</a></li>
                                <li class="nav-item"><a href="sidebar_right_default_toggle" class="nav-link">Show - fix default width</a></li>
                                <li class="nav-item"><a href="sidebar_right_mini_toggle" class="nav-link">Show - fix mini width</a></li>
                                <li class="nav-item"><a href="sidebar_right_secondary_hide" class="nav-link">Show - hide secondary</a></li>
                                <li class="nav-item"><a href="sidebar_right_visible" class="nav-link">Visible by default</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_right_color_dark" class="nav-link">Dark color</a></li>
                                <li class="nav-item"><a href="sidebar_right_color_custom" class="nav-link">Custom color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Content sidebar</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="sidebar_content_left" class="nav-link">Left position</a></li>
                                <li class="nav-item"><a href="sidebar_content_left_stretch" class="nav-link">Left stretched</a></li>
                                <li class="nav-item"><a href="sidebar_content_left_hidden" class="nav-link">Left hidden</a></li>
                                <li class="nav-item"><a href="sidebar_content_right" class="nav-link">Right position</a></li>
                                <li class="nav-item"><a href="sidebar_content_right_stretch" class="nav-link">Right stretched</a></li>
                                <li class="nav-item"><a href="sidebar_content_right_hidden" class="nav-link">Right hidden</a></li>
                                <li class="nav-item"><a href="sidebar_content_sections" class="nav-link">Sectioned sidebar</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="sidebar_content_color_dark" class="nav-link">Dark color</a></li>
                                <li class="nav-item"><a href="sidebar_content_color_custom" class="nav-link">Custom color</a></li>
                                <li class="nav-item"><a href="sidebar_content_color_sections_custom" class="nav-link">Custom sections color</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="sidebar_components" class="nav-link">Sidebar components</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-menu3"></i> <span>Navbars</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Navbars">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Single navbar</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="navbar_single_top_static" class="nav-link">Single top static</a></li>
                                <li class="nav-item"><a href="navbar_single_top_fixed" class="nav-link">Single top fixed</a></li>
                                <li class="nav-item"><a href="navbar_single_bottom_static" class="nav-link">Single bottom static</a></li>
                                <li class="nav-item"><a href="navbar_single_bottom_fixed" class="nav-link">Single bottom fixed</a></li>
                                <li class="nav-item"><a href="navbar_single_header_before" class="nav-link">Before page header</a></li>
                                <li class="nav-item"><a href="navbar_single_header_after" class="nav-link">After page header</a></li>
                                <li class="nav-item"><a href="navbar_single_content_after" class="nav-link">After page content</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Multiple navbars</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="navbar_multiple_top_static" class="nav-link">Multiple top static</a></li>
                                <li class="nav-item"><a href="navbar_multiple_top_fixed" class="nav-link">Multiple top fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_bottom_static" class="nav-link">Multiple bottom static</a></li>
                                <li class="nav-item"><a href="navbar_multiple_bottom_fixed" class="nav-link">Multiple bottom fixed</a></li>
                                <li class="nav-item"><a href="navbar_multiple_top_bottom" class="nav-link">Multiple - top and bottom</a></li>
                                <li class="nav-item"><a href="navbar_multiple_secondary_sticky" class="nav-link">Multiple - secondary sticky</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Content navbar</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="navbar_component_single" class="nav-link">Single navbar</a></li>
                                <li class="nav-item"><a href="navbar_component_multiple" class="nav-link">Multiple navbars</a></li>
                            </ul>
                        </li>
                        <li class="nav-item-divider"></li>
                        <li class="nav-item"><a href="navbar_colors" class="nav-link">Color options</a></li>
                        <li class="nav-item"><a href="navbar_sizes" class="nav-link">Sizing options</a></li>
                        <li class="nav-item"><a href="navbar_hideable" class="nav-link">Hide on scroll</a></li>
                        <li class="nav-item"><a href="navbar_components" class="nav-link">Navbar components</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-sort"></i> <span>Vertical navigation</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Vertical navigation">
                        <li class="nav-item"><a href="navigation_vertical_collapsible" class="nav-link">Collapsible menu</a></li>
                        <li class="nav-item"><a href="navigation_vertical_accordion" class="nav-link">Accordion menu</a></li>
                        <li class="nav-item"><a href="navigation_vertical_bordered" class="nav-link">Bordered navigation</a></li>
                        <li class="nav-item"><a href="navigation_vertical_right_icons" class="nav-link">Right icons</a></li>
                        <li class="nav-item"><a href="navigation_vertical_badges" class="nav-link">Badges</a></li>
                        <li class="nav-item"><a href="navigation_vertical_disabled" class="nav-link">Disabled items</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-transmission"></i> <span>Horizontal navigation</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Horizontal navigation">
                        <li class="nav-item"><a href="navigation_horizontal_click" class="nav-link">Submenu on click</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_hover" class="nav-link">Submenu on hover</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_elements" class="nav-link">With custom elements</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_tabs" class="nav-link">Tabbed navigation</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_disabled" class="nav-link">Disabled navigation links</a></li>
                        <li class="nav-item"><a href="navigation_horizontal_mega" class="nav-link">Horizontal mega menu</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-tree5"></i> <span>Menu levels</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Menu levels">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-IE"></i> Second level</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="icon-firefox"></i> Second level with child</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-android"></i> Third level</a></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link"><i class="icon-apple2"></i> Third level with child</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-html5"></i> Fourth level</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-css3"></i> Fourth level</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link"><i class="icon-windows"></i> Third level</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chrome"></i> Second level</a></li>
                    </ul>
                </li>
                <!-- /layout -->

                <!-- Data visualization -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Data visualization</div> <i class="icon-menu" title="Data visualization"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-graph"></i> <span>Echarts library</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="ECharts library">
                        <li class="nav-item"><a href="echarts_lines" class="nav-link">Line charts</a></li>
                        <li class="nav-item"><a href="echarts_areas" class="nav-link">Area charts</a></li>
                        <li class="nav-item"><a href="echarts_columns_waterfalls" class="nav-link">Columns and waterfalls</a></li>
                        <li class="nav-item"><a href="echarts_bars_tornados" class="nav-link">Bars and tornados</a></li>
                        <li class="nav-item"><a href="echarts_scatter" class="nav-link">Scatter charts</a></li>
                        <li class="nav-item"><a href="echarts_pies_donuts" class="nav-link">Pies and donuts</a></li>
                        <li class="nav-item"><a href="echarts_funnels_calendars" class="nav-link">Funnels and calendars</a></li>
                        <li class="nav-item"><a href="echarts_candlesticks_others" class="nav-link">Candlesticks and others</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-statistics"></i> <span>D3 library</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="D3 library">
                        <li class="nav-item"><a href="d3_lines_basic" class="nav-link">Simple lines</a></li>
                        <li class="nav-item"><a href="d3_lines_advanced" class="nav-link">Advanced lines</a></li>
                        <li class="nav-item"><a href="d3_bars_basic" class="nav-link">Simple bars</a></li>
                        <li class="nav-item"><a href="d3_bars_advanced" class="nav-link">Advanced bars</a></li>
                        <li class="nav-item"><a href="d3_pies" class="nav-link">Pie charts</a></li>
                        <li class="nav-item"><a href="d3_circle_diagrams" class="nav-link">Circle diagrams</a></li>
                        <li class="nav-item"><a href="d3_tree" class="nav-link">Tree layout</a></li>
                        <li class="nav-item"><a href="d3_other" class="nav-link">Other charts</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stats-dots"></i> <span>Dimple library</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Dimple library">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Line charts</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="dimple_lines_horizontal" class="nav-link">Horizontal orientation</a></li>
                                <li class="nav-item"><a href="dimple_lines_vertical" class="nav-link">Vertical orientation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Bar charts</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="dimple_bars_horizontal" class="nav-link">Horizontal orientation</a></li>
                                <li class="nav-item"><a href="dimple_bars_vertical" class="nav-link">Vertical orientation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Area charts</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="dimple_area_horizontal" class="nav-link">Horizontal orientation</a></li>
                                <li class="nav-item"><a href="dimple_area_vertical" class="nav-link">Vertical orientation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Step charts</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="dimple_step_horizontal" class="nav-link">Horizontal orientation</a></li>
                                <li class="nav-item"><a href="dimple_step_vertical" class="nav-link">Vertical orientation</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="dimple_pies" class="nav-link">Pie charts</a></li>
                        <li class="nav-item"><a href="dimple_rings" class="nav-link">Ring charts</a></li>
                        <li class="nav-item"><a href="dimple_scatter" class="nav-link">Scatter charts</a></li>
                        <li class="nav-item"><a href="dimple_bubble" class="nav-link">Bubble charts</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stats-bars"></i> <span>C3 library</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="C3 library">
                        <li class="nav-item"><a href="c3_lines_areas" class="nav-link">Lines and areas</a></li>
                        <li class="nav-item"><a href="c3_bars_pies" class="nav-link">Bars and pies</a></li>
                        <li class="nav-item"><a href="c3_advanced" class="nav-link">Advanced examples</a></li>
                        <li class="nav-item"><a href="c3_axis" class="nav-link">Chart axis</a></li>
                        <li class="nav-item"><a href="c3_grid" class="nav-link">Grid options</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-google"></i> <span>Google charts</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Google charts">
                        <li class="nav-item"><a href="google_lines" class="nav-link">Line charts</a></li>
                        <li class="nav-item"><a href="google_bars" class="nav-link">Bar charts</a></li>
                        <li class="nav-item"><a href="google_pies" class="nav-link">Pie charts</a></li>
                        <li class="nav-item"><a href="google_scatter_bubble" class="nav-link">Bubble &amp; scatter charts</a></li>
                        <li class="nav-item"><a href="google_other" class="nav-link">Other charts</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-map5"></i> <span>Maps integration</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Maps integration">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Google maps</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="maps_google_basic" class="nav-link">Basics</a></li>
                                <li class="nav-item"><a href="maps_google_controls" class="nav-link">Controls</a></li>
                                <li class="nav-item"><a href="maps_google_markers" class="nav-link">Markers</a></li>
                                <li class="nav-item"><a href="maps_google_drawings" class="nav-link">Map drawings</a></li>
                                <li class="nav-item"><a href="maps_google_layers" class="nav-link ">Layers</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="maps_vector" class="nav-link">Vector maps</a></li>
                        <li class="nav-item"><a href="maps_echarts" class="nav-link disabled">ECharts maps <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <!-- /data visualization -->

                <!-- Extensions -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Extensions</div> <i class="icon-menu" title="Extensions"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-puzzle4"></i> <span>Extensions</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Extensions">
                        <li class="nav-item"><a href="extension_image_cropper" class="nav-link">Image cropper</a></li>
                        <li class="nav-item"><a href="extension_blockui" class="nav-link">Block UI</a></li>
                        <li class="nav-item"><a href="extension_dnd" class="nav-link">Drag and drop</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-popout"></i> <span>JQuery UI</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="jQuery UI">
                        <li class="nav-item"><a href="jqueryui_interactions" class="nav-link">Interactions</a></li>
                        <li class="nav-item"><a href="jqueryui_forms" class="nav-link">Forms</a></li>
                        <li class="nav-item"><a href="jqueryui_components" class="nav-link">Components</a></li>
                        <li class="nav-item"><a href="jqueryui_sliders" class="nav-link">Sliders</a></li>
                        <li class="nav-item"><a href="jqueryui_navigation" class="nav-link">Navigation</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-upload"></i> <span>File uploaders</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="File uploaders">
                        <li class="nav-item"><a href="uploader_plupload" class="nav-link">Plupload</a></li>
                        <li class="nav-item"><a href="uploader_bootstrap" class="nav-link">Bootstrap file uploader</a></li>
                        <li class="nav-item"><a href="uploader_dropzone" class="nav-link">Dropzone</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-calendar3"></i> <span>Event calendars</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Event calendars">
                        <li class="nav-item"><a href="fullcalendar_views" class="nav-link">Basic views</a></li>
                        <li class="nav-item"><a href="fullcalendar_styling" class="nav-link">Event styling</a></li>
                        <li class="nav-item"><a href="fullcalendar_formats" class="nav-link">Language and time</a></li>
                        <li class="nav-item"><a href="fullcalendar_advanced" class="nav-link">Advanced usage</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-sphere"></i> <span>Internationalization</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Internationalization">
                        <li class="nav-item"><a href="internationalization_switch_direct" class="nav-link">Direct translation</a></li>
                        <li class="nav-item"><a href="internationalization_switch_query" class="nav-link">Querystring parameter</a></li>
                        <li class="nav-item"><a href="internationalization_fallback" class="nav-link">Language fallback</a></li>
                        <li class="nav-item"><a href="internationalization_callbacks" class="nav-link">Callbacks</a></li>
                    </ul>
                </li>
                <!-- /extensions -->

                <!-- Tables -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Tables</div> <i class="icon-menu" title="Tables"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-table2"></i> <span>Basic tables</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Basic tables">
                        <li class="nav-item"><a href="table_basic" class="nav-link">Basic examples</a></li>
                        <li class="nav-item"><a href="table_sizing" class="nav-link">Table sizing</a></li>
                        <li class="nav-item"><a href="table_borders" class="nav-link">Table borders</a></li>
                        <li class="nav-item"><a href="table_styling" class="nav-link">Table styling</a></li>
                        <li class="nav-item"><a href="table_elements" class="nav-link">Table elements</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-grid7"></i> <span>Data tables</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Data tables">
                        <li class="nav-item"><a href="datatable_basic" class="nav-link">Basic initialization</a></li>
                        <li class="nav-item"><a href="datatable_styling" class="nav-link">Basic styling</a></li>
                        <li class="nav-item"><a href="datatable_advanced" class="nav-link">Advanced examples</a></li>
                        <li class="nav-item"><a href="datatable_sorting" class="nav-link">Sorting options</a></li>
                        <li class="nav-item"><a href="datatable_api" class="nav-link">Using API</a></li>
                        <li class="nav-item"><a href="datatable_data_sources" class="nav-link">Data sources</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-alignment-unalign"></i> <span>Data tables extensions</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Data tables extensions">
                        <li class="nav-item"><a href="datatable_extension_reorder" class="nav-link">Columns reorder</a></li>
                        <li class="nav-item"><a href="datatable_extension_row_reorder" class="nav-link">Row reorder</a></li>
                        <li class="nav-item"><a href="datatable_extension_fixed_columns" class="nav-link">Fixed columns</a></li>
                        <li class="nav-item"><a href="datatable_extension_fixed_header" class="nav-link">Fixed header</a></li>
                        <li class="nav-item"><a href="datatable_extension_autofill" class="nav-link">Auto fill</a></li>
                        <li class="nav-item"><a href="datatable_extension_key_table" class="nav-link">Key table</a></li>
                        <li class="nav-item"><a href="datatable_extension_scroller" class="nav-link">Scroller</a></li>
                        <li class="nav-item"><a href="datatable_extension_select" class="nav-link">Select</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Buttons</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="datatable_extension_buttons_init" class="nav-link">Initialization</a></li>
                                <li class="nav-item"><a href="datatable_extension_buttons_flash" class="nav-link">Flash buttons</a></li>
                                <li class="nav-item"><a href="datatable_extension_buttons_print" class="nav-link">Print buttons</a></li>
                                <li class="nav-item"><a href="datatable_extension_buttons_html5" class="nav-link">HTML5 buttons</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="datatable_extension_colvis" class="nav-link">Columns visibility</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-file-spreadsheet"></i> <span>Handsontable</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Handsontable">
                        <li class="nav-item"><a href="handsontable_basic" class="nav-link">Basic configuration</a></li>
                        <li class="nav-item"><a href="handsontable_advanced" class="nav-link">Advanced setup</a></li>
                        <li class="nav-item"><a href="handsontable_cols" class="nav-link">Column features</a></li>
                        <li class="nav-item"><a href="handsontable_cells" class="nav-link">Cell features</a></li>
                        <li class="nav-item"><a href="handsontable_types" class="nav-link">Basic cell types</a></li>
                        <li class="nav-item"><a href="handsontable_custom_checks" class="nav-link">Custom &amp; checkboxes</a></li>
                        <li class="nav-item"><a href="handsontable_ac_password" class="nav-link">Autocomplete &amp; password</a></li>
                        <li class="nav-item"><a href="handsontable_search" class="nav-link">Search</a></li>
                        <li class="nav-item"><a href="handsontable_context" class="nav-link">Context menu</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-versions"></i> <span>Responsive tables</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Responsive tables">
                        <li class="nav-item"><a href="table_responsive" class="nav-link">Responsive basic tables</a></li>
                        <li class="nav-item"><a href="datatable_responsive" class="nav-link">Responsive data tables</a></li>
                    </ul>
                </li>
                <!-- /tables -->

                <!-- Page kits -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Page kits</div> <i class="icon-menu" title="Page kits"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-grid6"></i> <span>General pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="General pages">
                        <li class="nav-item"><a href="general_feed" class="nav-link">Feed</a></li>
                        <li class="nav-item"><a href="general_embeds" class="nav-link">Embeds</a></li>
                        <li class="nav-item"><a href="general_faq" class="nav-link">FAQ page</a></li>
                        <li class="nav-item"><a href="general_knowledgebase" class="nav-link">Knowledgebase</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Blog</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="blog_classic_v" class="nav-link">Classic vertical</a></li>
                                <li class="nav-item"><a href="blog_classic_h" class="nav-link">Classic horizontal</a></li>
                                <li class="nav-item"><a href="blog_grid" class="nav-link">Grid</a></li>
                                <li class="nav-item"><a href="blog_single" class="nav-link">Single post</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="blog_sidebar_left" class="nav-link">Left sidebar</a></li>
                                <li class="nav-item"><a href="blog_sidebar_right" class="nav-link">Right sidebar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Timelines</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="timelines_left" class="nav-link">Left timeline</a></li>
                                <li class="nav-item"><a href="timelines_right" class="nav-link">Right timeline</a></li>
                                <li class="nav-item"><a href="timelines_center" class="nav-link">Centered timeline</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Gallery</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="gallery_grid" class="nav-link">Media grid</a></li>
                                <li class="nav-item"><a href="gallery_titles" class="nav-link">Media with titles</a></li>
                                <li class="nav-item"><a href="gallery_description" class="nav-link">Media with description</a></li>
                                <li class="nav-item"><a href="gallery_library" class="nav-link">Media library</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-wrench3"></i> <span>Service pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Service pages">
                        <li class="nav-item"><a href="service_sitemap" class="nav-link">Sitemap</a></li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Invoicing</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="invoice_template" class="nav-link">Invoice template</a></li>
                                <li class="nav-item"><a href="invoice_grid" class="nav-link">Invoice grid</a></li>
                                <li class="nav-item"><a href="invoice_archive" class="nav-link">Invoice archive</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Authentication</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="login_simple" class="nav-link">Simple login</a></li>
                                <li class="nav-item"><a href="login_advanced" class="nav-link">More login info</a></li>
                                <li class="nav-item"><a href="login_registration" class="nav-link">Simple registration</a></li>
                                <li class="nav-item"><a href="login_registration_advanced" class="nav-link">More registration info</a></li>
                                <li class="nav-item"><a href="login_unlock" class="nav-link">Unlock user</a></li>
                                <li class="nav-item"><a href="login_password_recover" class="nav-link">Reset password</a></li>
                                <li class="nav-item"><a href="login_hide_navbar" class="nav-link">Hide navbar</a></li>
                                <li class="nav-item"><a href="login_transparent" class="nav-link">Transparent box</a></li>
                                <li class="nav-item"><a href="login_background" class="nav-link">Background option</a></li>
                                <li class="nav-item"><a href="login_validation" class="nav-link">With validation</a></li>
                                <li class="nav-item"><a href="login_tabbed" class="nav-link">Tabbed form</a></li>
                                <li class="nav-item"><a href="login_modals" class="nav-link">Inside modals</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Error pages</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="error_403" class="nav-link">Error 403</a></li>
                                <li class="nav-item"><a href="error_404" class="nav-link">Error 404</a></li>
                                <li class="nav-item"><a href="error_405" class="nav-link">Error 405</a></li>
                                <li class="nav-item"><a href="error_500" class="nav-link">Error 500</a></li>
                                <li class="nav-item"><a href="error_503" class="nav-link">Error 503</a></li>
                                <li class="nav-item"><a href="error_offline" class="nav-link">Offline page</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="User pages">
                        <li class="nav-item"><a href="user_pages_list" class="nav-link">User list</a></li>
                        <li class="nav-item"><a href="user_pages_cards" class="nav-link">User cards</a></li>
                        <li class="nav-item"><a href="user_pages_profile" class="nav-link">Simple profile</a></li>
                        <li class="nav-item"><a href="user_pages_profile_tabbed" class="nav-link">Tabbed profile</a></li>
                        <li class="nav-item"><a href="user_pages_profile_cover" class="nav-link">Profile with cover</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-cube3"></i> <span>Application pages</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Application pages">
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Task manager</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="task_manager_grid" class="nav-link">Task grid</a></li>
                                <li class="nav-item"><a href="task_manager_list" class="nav-link">Task list</a></li>
                                <li class="nav-item"><a href="task_manager_detailed" class="nav-link">Task detailed</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Inbox</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="mail_list" class="nav-link">Mail list</a></li>
                                <li class="nav-item"><a href="mail_list_detached" class="nav-link">Mail list (detached)</a></li>
                                <li class="nav-item"><a href="mail_read" class="nav-link">Read mail</a></li>
                                <li class="nav-item"><a href="mail_write" class="nav-link">Write mail</a></li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item"><a href="chat_layouts" class="nav-link">Chat layouts</a></li>
                                <li class="nav-item"><a href="chat_options" class="nav-link">Chat options</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Search</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="search_basic" class="nav-link">Basic search results</a></li>
                                <li class="nav-item"><a href="search_users" class="nav-link">User search results</a></li>
                                <li class="nav-item"><a href="search_images" class="nav-link">Image search results</a></li>
                                <li class="nav-item"><a href="search_videos" class="nav-link">Video search results</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Job search</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="job_list_cards" class="nav-link">Cards view</a></li>
                                <li class="nav-item"><a href="job_list_list" class="nav-link">List view</a></li>
                                <li class="nav-item"><a href="job_detailed" class="nav-link">Job detailed</a></li>
                                <li class="nav-item"><a href="job_apply" class="nav-link">Apply</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Learning</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="learning_list" class="nav-link">List view</a></li>
                                <li class="nav-item"><a href="learning_grid" class="nav-link">Grid view</a></li>
                                <li class="nav-item"><a href="learning_detailed" class="nav-link">Detailed course</a></li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link">Ecommerce set</a>
                            <ul class="nav nav-group-sub">
                                <li class="nav-item"><a href="ecommerce_product_list" class="nav-link">Product list</a></li>
                                <li class="nav-item"><a href="ecommerce_product_grid" class="nav-link">Product grid</a></li>
                                <li class="nav-item"><a href="ecommerce_orders_history" class="nav-link">Orders history</a></li>
                                <li class="nav-item"><a href="ecommerce_customers" class="nav-link">Customers</a></li>
                                <li class="nav-item"><a href="ecommerce_pricing" class="nav-link">Pricing tables</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-atom2"></i> <span>Widgets</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                        <li class="nav-item"><a href="widgets_content" class="nav-link">Content widgets</a></li>
                        <li class="nav-item"><a href="widgets_stats" class="nav-link">Statistics widgets</a></li>
                        <li class="nav-item"><a href="widgets_menu" class="nav-link disabled">Menu widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                        <li class="nav-item"><a href="widgets_form" class="nav-link disabled">Form widgets <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
                    </ul>
                </li>
                <!-- /page kits -->

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>
<!-- /main sidebar -->
<script>
    var url = $(location).attr('href').split("/")[3];
    console.log(url);
    $('a[href='+url+']').addClass('active');
    $('a[href='+url+']').parents(':eq(2)').addClass('nav-item-expanded nav-item-open');
</script>