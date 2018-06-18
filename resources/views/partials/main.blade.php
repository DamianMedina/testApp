<div id="main">
      <!--
      ---------------------------------------------------------------+
      "#sidebar_left" Helper Classes:
      -------------------------------------------------------------------+
      * Positioning Classes:
      '.affix' - Sets Sidebar Left to the fixed position
      * Available Skin Classes:
      .sidebar-dark (default no class needed)
      .sidebar-light
      .sidebar-light.light
      -------------------------------------------------------------------+
      Example: <aside id="sidebar_left" class="affix sidebar-light">
      Results: Fixed Left Sidebar with light/white background
      -----------------------------------------------------------------
      -->
      <!-- Start: Sidebar-->
      <aside id="sidebar_left" class="nano nano-light affix">
        <!--Navbar Branding-->
        <div class="navbar-branding"><a href="dashboard.html" class="navbar-brand"><span class="text-white">Ruby</span> Admin</a><span id="toggle_sidemenu_l" class="ad ad-lines"></span></div>
        <!-- Start: Sidebar Left Content-->
        <div class="sidebar-left-content nano-content">
          <!-- Start: Sidebar Header-->
          <header class="sidebar-header">
            <!-- Sidebar Widget - Author-->
            <div class="sidebar-widget author-widget">
              <div class="media"><a href="#" class="media-left"><img src="assets/img/avatars/3.jpg" class="img-responsive"></a>
                <div class="media-body">
                  <div class="media-links"></div>
                  <div class="media-author">Ryan Harrison</div><a href="#" class="sidebar-menu-toggle">User Menu</a><a href="pages_login(alt).html">Logout</a>
                </div>
              </div>
            </div>
            <!-- Sidebar Widget - Menu (slidedown)-->
            <div class="sidebar-widget menu-widget">
              <div class="row text-center mbn">
                <div class="col-xs-4"><a href="dashboard.html" data-toggle="tooltip" data-placement="top" title="Dashboard" class="text-primary"><span class="glyphicon glyphicon-home"></span></a></div>
                <div class="col-xs-4"><a href="pages_messages.html" data-toggle="tooltip" data-placement="top" title="Messages" class="text-info"><span class="glyphicon glyphicon-inbox"></span></a></div>
                <div class="col-xs-4"><a href="pages_profile.html" data-toggle="tooltip" data-placement="top" title="Tasks" class="text-alert"><span class="fa fa-asterisk"></span></a></div>
              </div>
              <div class="row text-center mbn">
                <div class="col-xs-4"><a href="pages_timeline.html" data-toggle="tooltip" data-placement="top" title="Activity" class="text-system"><span class="fa fa-desktop"></span></a></div>
                <div class="col-xs-4"><a href="pages_profile.html" data-toggle="tooltip" data-placement="top" title="Settings" class="text-danger"><span class="fa fa-gears"></span></a></div>
                <div class="col-xs-4"><a href="pages_gallery.html" data-toggle="tooltip" data-placement="top" title="Cron Jobs" class="text-warning"><span class="fa fa-flask"></span></a></div>
              </div>
            </div>
            <!-- Sidebar Widget - Search (hidden)-->
            <div class="sidebar-widget search-widget hidden">
              <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input id="sidebar-search" type="text" placeholder="Search..." class="form-control">
              </div>
            </div>
          </header>
          <!-- Start: Sidebar Menu-->
          <ul class="nav sidebar-menu">
            <li class="sidebar-label pt30">Menu</li>
            <li><a href="pages_calendar.html"><span class="fa fa-calendar"></span><span class="sidebar-title">Contactos</span><span class="sidebar-title-tray"><span class="label label-xs bg-primary">New</span></span></a></li>
            <li><a href="documentation/"><span class="glyphicon glyphicon-book"></span><span class="sidebar-title">Cotizador</span></a></li>
            <li class="active"><a href="dashboard.html"><span class="glyphicon glyphicon-home"></span><span class="sidebar-title">Dashboard</span></a></li>
            <li class="sidebar-label pt15">Theme Tools</li>
            <li><a href="#" class="accordion-toggle"><span class="fa fa-columns"></span><span class="sidebar-title">Admin Layouts</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="#" class="accordion-toggle"><span class="fa fa fa-arrows-h"></span>                  Sidebars<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="layout_sidebar-left-static.html">Left Static</a></li>
                    <li><a href="layout_sidebar-left-fixed.html">Left Fixed</a></li>
                    <li><a href="layout_sidebar-left-widgets.html">Left Widgets</a></li>
                    <li><a href="layout_sidebar-left-minified.html">Left Minified</a></li>
                    <li><a href="layout_sidebar-left-light.html">Left White</a></li>
                    <li><a href="layout_sidebar-right-static.html">Right Static</a></li>
                    <li><a href="layout_sidebar-right-fixed.html">Right Fixed</a></li>
                    <li><a href="layout_sidebar-right-menu.html">Right w/Menu</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-hand-o-up"></span>                  Topbar<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="layout_topbar.html">Default Style</a></li>
                    <li><a href="layout_topbar-menu.html">Default w/Menu</a></li>
                    <li><a href="layout_topbar-alt.html">Alternate Style</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-arrows-v"></span>                  Content Body<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="layout_content-blank.html">Blank Starter</a></li>
                    <li><a href="layout_content-fixed.html">Fixed Window</a></li>
                    <li><a href="layout_content-heading.html">Content Heading</a></li>
                    <li><a href="layout_content-tabs.html">Content Tabs</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-pause"></span>                  Content Trays<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="layout_tray-left.html">Tray Left Static</a></li>
                    <li><a href="layout_tray-left-fixed.html">Tray Left Fixed</a></li>
                    <li><a href="layout_tray-right.html">Tray Right Static</a></li>
                    <li><a href="layout_tray-right-fixed.html">Tray Right Fixed</a></li>
                    <li><a href="layout_tray-both.html">Left + Right Static</a></li>
                    <li><a href="layout_tray-both-fixed.html">Left + Right Fixed</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-plus-square-o"></span>                  Boxed Layout<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="layout_boxed.html">Default</a></li>
                    <li><a href="layout_boxed-horizontal.html">Horizontal Menu</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-arrow-circle-o-up"></span>                  Horizontal Menu<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="layout_horizontal-sm.html">Small Size</a></li>
                    <li><a href="layout_horizontal-md.html">Medium Size</a></li>
                    <li><a href="layout_horizontal-lg.html">Large Size</a></li>
                    <li><a href="layout_horizontal-light.html">Light Skin</a></li>
                    <li><a href="layout_horizontal-topbar.html">With Topbar</a></li>
                    <li><a href="layout_horizontal-topbar-alt.html">With Alt Topbar</a></li>
                    <li><a href="layout_horizontal-collapsed.html">Collapsed onLoad</a></li>
                    <li><a href="layout_horizontal-boxed.html">In Boxed Layout</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#" class="accordion-toggle"><span class="glyphicon glyphicon-fire"></span><span class="sidebar-title">Admin Plugins</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="admin_plugins-panels.html"><span class="glyphicon glyphicon-book"></span> Admin Panels</a></li>
                <li><a href="admin_plugins-modals.html"><span class="glyphicon glyphicon-modal-window"></span> Admin Modals</a></li>
                <li><a href="admin_plugins-dock.html"><span class="glyphicon glyphicon-equalizer"></span> Admin Dock</a></li>
              </ul>
            </li>
            <li><a href="#" class="accordion-toggle"><span class="glyphicon glyphicon-check"></span><span class="sidebar-title">Admin Forms</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="admin_forms-elements.html"><span class="glyphicon glyphicon-shopping-cart"></span> Admin Elements</a></li>
                <li><a href="admin_forms-widgets.html"><span class="glyphicon glyphicon-calendar"></span> Admin Widgets</a></li>
                <li><a href="admin_forms-layouts.html"><span class="fa fa-desktop"></span> Admin Layouts</a></li>
                <li><a href="admin_forms-wizard.html"><span class="fa fa-clipboard"></span> Admin Wizard</a></li>
                <li><a href="admin_forms-validation.html"><span class="glyphicon glyphicon-check"></span> Admin Validation</a></li>
              </ul>
            </li>
            <li class="sidebar-label pt20">Systems</li>
            <li><a href="#" class="accordion-toggle"><span class="fa fa-diamond"></span><span class="sidebar-title">Widget Packages</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="widgets_tile.html"><span class="fa fa-cube"></span> Tile Widgets</a></li>
                <li><a href="widgets_panel.html"><span class="fa fa-desktop"></span> Panel Widgets</a></li>
                <li><a href="widgets_scroller.html"><span class="fa fa-columns"></span> Scroller Widgets</a></li>
                <li><a href="widgets_data.html"><span class="fa fa-dot-circle-o"></span> Admin Widgets</a></li>
              </ul>
            </li>
            <li><a href="#" class="accordion-toggle"><span class="glyphicon glyphicon-shopping-cart"></span><span class="sidebar-title">Ecommerce</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li class="active"><a href="ecommerce_dashboard.html"><span class="glyphicon glyphicon-shopping-cart"></span> Dashboard<span class="label label-xs bg-primary">New</span></a></li>
                <li><a href="ecommerce_products.html"><span class="glyphicon glyphicon-tags"></span> Products</a></li>
                <li><a href="ecommerce_orders.html"><span class="fa fa-money"></span> Orders</a></li>
                <li><a href="ecommerce_customers.html"><span class="fa fa-users"></span> Customers</a></li>
                <li><a href="ecommerce_settings.html"><span class="fa fa-gears"></span> Store Settings</a></li>
              </ul>
            </li>
            <!-- sidebar resources-->
            <li class="sidebar-label pt20">Elements</li>
            <li><a href="#" class="accordion-toggle"><span class="fa fa-asterisk"></span><span class="sidebar-title">UI Elements</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="ui_alerts.html"><span class="fa fa-warning"></span> Alerts</a></li>
                <li><a href="ui_animations.html"><span class="fa fa-spinner"></span> Animations</a></li>
                <li><a href="ui_buttons.html"><span class="fa fa-plus-square-o"></span> Buttons</a></li>
                <li><a href="ui_typography.html"><span class="fa fa-text-width"></span> Typography</a></li>
                <li><a href="ui_portlets.html"><span class="fa fa-archive"></span> Portlets</a></li>
                <li><a href="ui_progress-bars.html"><span class="fa fa-bars"></span> Progress Bars</a></li>
                <li><a href="ui_tabs.html"><span class="fa fa-toggle-off"></span> Tabs</a></li>
                <li><a href="ui_icons.html"><span class="fa fa-hand-o-right"></span> Icons</a></li>
                <li><a href="ui_grid.html"><span class="fa fa-th-large"></span> Grid</a></li>
              </ul>
            </li>
            <li><a href="#" class="accordion-toggle"><span class="fa fa-align-justify"></span><span class="sidebar-title">Form Elements</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="form_inputs.html"><span class="fa fa-magic"></span> Basic Inputs</a></li>
                <li><a href="form_plugins.html"><span class="fa fa-bell-o"></span> Plugin Inputs<span class="label label-xs bg-primary">New</span></a></li>
                <li><a href="form_editors.html"><span class="fa fa-clipboard"></span> Editors</a></li>
                <li><a href="form_treeview.html"><span class="fa fa-tree"></span> Treeview</a></li>
                <li><a href="form_nestable.html"><span class="fa fa-tasks"></span> Nestable</a></li>
                <li><a href="form_image-tools.html"><span class="fa fa-cloud-upload"></span> Image Tools<span class="label label-xs bg-primary">New</span></a></li>
                <li><a href="form_uploaders.html"><span class="fa fa-cloud-upload"></span> Uploaders</a></li>
                <li><a href="form_notifications.html"><span class="fa fa-bell-o"></span> Notifications</a></li>
                <li><a href="form_content-sliders.html"><span class="fa fa-exchange"></span> Content Sliders</a></li>
              </ul>
            </li>
            <li><a href="#" class="accordion-toggle"><span class="glyphicon glyphicon-tower"></span><span class="sidebar-title">Plugins</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="#" class="accordion-toggle"><span class="glyphicon glyphicon-globe"></span> Maps<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="maps_basic.html">Basic Maps</a></li>
                    <li><a href="maps_vector.html">Vector Maps</a></li>
                    <li><a href="maps_full.html">Full Map</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-area-chart"></span> Charts<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="charts_highcharts.html">Highcharts</a></li>
                    <li><a href="charts_d3.html">D3 Charts</a></li>
                    <li><a href="charts_flot.html">Flot Charts</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-table"></span> Tables<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="tables_basic.html"> Basic Tables</a></li>
                    <li><a href="tables_footable.html"> FooTables</a></li>
                    <li><a href="tables_pricing.html"> Pricing Tables</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-flask"></span> Misc<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="misc_tour.html"> Site Tour</a></li>
                    <li><a href="misc_timeout.html"> Session Timeout</a></li>
                    <li><a href="misc_nprogress.html"> Page Progress Loader</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#" class="accordion-toggle"><span class="glyphicon glyphicon-duplicate"></span><span class="sidebar-title">Pages</span><span class="caret"></span></a>
              <ul class="nav sub-nav">
                <li><a href="#" class="accordion-toggle"><span class="fa fa-gears"></span> Utility<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="pages_confirmation.html" target="_blank">Confirmation<span class="label label-xs bg-primary">New</span></a></li>
                    <li><a href="pages_login.html" target="_blank"> Login</a></li>
                    <li><a href="pages_login(alt).html" target="_blank">Login Alt<span class="label label-xs bg-primary">New</span></a></li>
                    <li><a href="pages_register.html" target="_blank"> Register</a></li>
                    <li><a href="pages_register(alt).html" target="_blank">Register Alt<span class="label label-xs bg-primary">New</span></a></li>
                    <li><a href="pages_screenlock.html" target="_blank"> Screenlock</a></li>
                    <li><a href="pages_screenlock(alt).html" target="_blank">Screenlock Alt<span class="label label-xs bg-primary">New</span></a></li>
                    <li><a href="pages_forgotpw.html" target="_blank"> Forgot Password</a></li>
                    <li><a href="pages_forgotpw(alt).html" target="_blank">Forgot Pass Alt<span class="label label-xs bg-primary">New</span></a></li>
                    <li><a href="pages_coming-soon.html" target="_blank">Coming Soon</a></li>
                    <li><a href="pages_404.html"> 404 Error</a></li>
                    <li><a href="pages_500.html"> 500 Error</a></li>
                    <li><a href="pages_404(alt).html"> 404 Error Alt</a></li>
                    <li><a href="pages_500(alt).html"> 500 Error Alt</a></li>
                  </ul>
                </li>
                <li><a href="#" class="accordion-toggle"><span class="fa fa-desktop"></span> Basic<span class="caret"></span></a>
                  <ul class="nav sub-nav">
                    <li><a href="pages_search-results.html">Search Results<span class="label label-xs bg-primary">New</span></a></li>
                    <li><a href="pages_profile.html"> Profile</a></li>
                    <li><a href="pages_timeline.html"> Timeline Split</a></li>
                    <li><a href="pages_timeline-single.html"> Timeline Single</a></li>
                    <li><a href="pages_faq.html"> FAQ Page</a></li>
                    <li><a href="pages_calendar.html"> Calendar</a></li>
                    <li><a href="pages_messages.html"> Messages</a></li>
                    <li><a href="pages_messages(alt).html"> Messages Alt</a></li>
                    <li><a href="pages_gallery.html"> Gallery</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- sidebar bullets-->
            <li class="sidebar-label pt20">Projects</li>
            <li class="sidebar-proj"><a href="#projectOne"><span class="fa fa-bookmark text-primary"></span><span class="sidebar-title">Executive Meeting</span></a></li>
            <li class="sidebar-proj"><a href="#projectTwo"><span class="fa fa-bookmark text-info"></span><span class="sidebar-title">HelpDesk Redesign</span></a></li>
            <li class="sidebar-proj"><a href="#projectTwo"><span class="fa fa-bookmark text-danger"></span><span class="sidebar-title">Sony Board Meeting</span></a></li>
            <li class="sidebar-proj"><a href="#projectThree"><span class="fa fa-bookmark text-warning"></span><span class="sidebar-title">Apple Tech Conference</span></a></li>
          </ul>
        </div>
      </aside>
      <!-- Start: Content-Wrapper-->
      <section id="content_wrapper">
        <!-- Start: Topbar-->
        <header id="topbar" class="badges-mod alt">
          <div class="topbar-left">
            <ol class="breadcrumb">
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="admin_forms-elements.html">Form Elements</a></li>
              <li><a href="maps_basic.html">Plugins Pages</a></li>
              <li><a href="ui_alerts.html">UI Elements</a></li>
              <li><a href="documentation/">Documentation</a></li>
            </ol>
          </div>
          <div class="topbar-right"><a href="#" class="topbar-icon"><span class="fa fa-search"></span></a><a href="#" data-toggle="button" class="topbar-icon topbar-menu-toggle ml40"><span class="badge badge-strikemaster offset-badge">6</span><span class="fa fa-magic"></span></a>
            <div class="topbar-icon-wrap ml40">
              <button data-toggle="dropdown" class="topbar-icon dropdown-toggle"><span class="badge badge-primary">5</span><span class="fa fa-bell va-m"></span></button>
              <div role="menu" class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn">
                <div class="panel mbn">
                  <div class="panel-menu"><span class="panel-icon"><i class="fa fa-clock-o"></i></span><span class="panel-title fw600"> Recent Activity</span>
                    <button type="button" class="btn btn-xs pull-right"><i class="fa fa-refresh"></i></button>
                  </div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                    <ol class="timeline-list">
                      <li class="timeline-item">
                        <div class="timeline-icon bg-alert"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Michael</b> Added to his store:<a href="#">Ipod</a></div>
                        <div class="timeline-date">1:25am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-alert"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Sara</b> Added his store:<a href="#">Notebook</a></div>
                        <div class="timeline-date">3:05am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created invoice for:<a href="#">Software</a></div>
                        <div class="timeline-date">4:15am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created invoice for:<a href="#">Apple</a></div>
                        <div class="timeline-date">7:45am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created invoice for:<a href="#">Software</a></div>
                        <div class="timeline-date">4:15am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created invoice for:<a href="#">Apple</a></div>
                        <div class="timeline-date">7:45am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-alert"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Michael</b> Added his store:<a href="#">Ipod</a></div>
                        <div class="timeline-date">8:25am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-system"><span class="fa fa-fire"></span></div>
                        <div class="timeline-desc"><b>Admin</b> created invoice for:<a href="#">Software</a></div>
                        <div class="timeline-date">4:15am</div>
                      </li>
                      <li class="timeline-item">
                        <div class="timeline-icon bg-alert"><span class="fa fa-tags"></span></div>
                        <div class="timeline-desc"><b>Sara</b> Added to his store:<a href="#">Notebook</a></div>
                        <div class="timeline-date">3:05am</div>
                      </li>
                    </ol>
                  </div>
                  <div class="panel-footer text-center p7"><a href="#" class="link-unstyled"> View All</a></div>
                </div>
              </div>
            </div>
            <div class="topbar-icon-wrap ml35">
              <button data-toggle="dropdown" class="topbar-icon dropdown-toggle"><span class="badge badge-mandy">5</span><span class="fa fa-comments va-m"></span></button>
              <div role="menu" class="dropdown-menu dropdown-menu-offset dropdown-persist w350 animated animated-shorter fadeIn">
                <div class="panel mbn">
                  <div class="panel-menu"><span class="panel-title fw600">Messages</span></div>
                  <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                    <div class="br-n p10">
                      <div class="chat-widget">
                        <div class="media">
                          <div class="media-left"><a href="#"><img alt="64x64" src="assets/img/avatars/3.jpg" class="media-object"></a></div>
                          <div class="media-body"><span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught<small> - 12:30am</small></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body"><span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons<small> - 12:30am</small></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                          </div>
                          <div class="media-right"><a href="#"><img alt="64x64" src="assets/img/avatars/1.jpg" class="media-object"></a></div>
                        </div>
                        <div class="media">
                          <div class="media-left"><a href="#"><img alt="64x64" src="assets/img/avatars/2.jpg" class="media-object"></a></div>
                          <div class="media-body"><span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught<small> - 12:30am</small></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body"><span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons<small> - 12:30am</small></h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                          </div>
                          <div class="media-right"><a href="#"><img alt="64x64" src="assets/img/avatars/1.jpg" class="media-object"></a></div>
                        </div>
                        <div class="media">
                          <div class="media-left"><a href="#"><img alt="64x64" src="assets/img/avatars/2.jpg" class="media-object"></a></div>
                          <div class="media-body"><span class="media-status online"></span>
                            <h5 class="media-heading">Courtney Faught<small> - 12:30am</small></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                          </div>
                        </div>
                        <div class="media">
                          <div class="media-body"><span class="media-status offline"></span>
                            <h5 class="media-heading">Joe Gibbons<small> - 12:30am</small></h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                          </div>
                          <div class="media-right"><a href="#"><img alt="64x64" src="assets/img/avatars/1.jpg" class="media-object"></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer text-center p7"><a href="#" class="link-unstyled"> View All</a></div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <!-- Start: Topbar-Dropdown-->
        <div id="topbar-dropmenu" class="alt">
          <div class="topbar-menu row">
            <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-primary light"><span class="glyphicon glyphicon-inbox text-white"></span><span class="metro-title">Messages</span></a></div>
            <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-info light"><span class="glyphicon glyphicon-user text-white"></span><span class="metro-title">Users</span></a></div>
            <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-success light"><span class="glyphicon glyphicon-headphones text-white"></span><span class="metro-title">Support</span></a></div>
            <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-system light"><span class="glyphicon glyphicon-facetime-video text-white"></span><span class="metro-title">Videos</span></a></div>
            <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-warning light"><span class="fa fa-gears text-white"></span><span class="metro-title">Settings</span></a></div>
            <div class="col-xs-4 col-sm-2"><a href="#" class="metro-tile bg-alert light"><span class="glyphicon glyphicon-picture text-white"></span><span class="metro-title">Pictures</span></a></div>
          </div>
        </div>
        <!-- Begin: Content-->
        <section id="content" class="table-layout animated fadeIn">
          <!-- begin: .tray-center-->
          <div class="tray tray-center">
            <!-- Admin-panels-->
            <div class="admin-panels">
              <div class="row">
                <!-- Three Pane Widget-->
                <div class="col-md-12 admin-grid">
                  <!-- dashboard activity-->
                  <div id="p01" data-panel-title="false" class="panel sort-disable">
                    <div class="panel-heading"><span class="panel-title hidden-xs hidden"> Recent Activity</span>
                      <ul class="nav panel-tabs panel-tabs-left">
                        <!-- Demo Note: all hrefs set to #tab1_1-->
                        <li class="active"><a href="#tab1_1" data-toggle="tab"> User Activity</a></li>
                        <li><a href="#tab1_1" data-toggle="tab" class="hidden-xs"> Popular Items</a></li>
                        <li><a href="#tab1_1" data-toggle="tab"> Conversions</a></li>
                      </ul>
                    </div>
                    <div class="panel-body pn">
                      <div class="tab-content">
                        <div id="tab1_1" role="tabpanel" class="tab-pane active">
                          <div class="row">
                            <!-- Chart Column-->
                            <div class="col-md-12">
                              <h5 class="ml5 mt20 ph10 pb5 br-b fw600 hidden">Visitors<small class="pull-right fw600">13,253<span class="text-primary">(8,251 unique)</span></small></h5>
                              <div id="ecommerce_chart1" style="height: 430px;"></div>
                            </div>
                            <div class="col-md-6 pl40 pln-lg">
                              <h3 class="mt30 mbn ph10 pb25 fw300">Top Referrals</h3>
                              <table class="table mbn tc-med-1">
                                <thead>
                                  <tr class="hidden">
                                    <th>Source</th>
                                    <th>Count</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><span>Google.com</span></td>
                                    <td class="text-right">1.597</td>
                                  </tr>
                                  <tr>
                                    <td><span>Yahoo.com</span></td>
                                    <td class="text-right">1.296</td>
                                  </tr>
                                  <tr class="br-b">
                                    <td><span>Templatemonster.com</span></td>
                                    <td class="text-right"> 783</td>
                                  </tr>
                                  <tr>
                                    <td class="pt30 pb30"><a href="#" class="text-primary">View Report</a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="col-md-6 pr40">
                              <h3 class="mt30 mbn ph10 pb25 fw300 pl40">Top Search Terms</h3>
                              <table class="table mbn tc-med-1">
                                <thead>
                                  <tr class="hidden">
                                    <th>Source</th>
                                    <th>Count</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><span>admin theme</span></td>
                                    <td class="text-right">1.597</td>
                                  </tr>
                                  <tr>
                                    <td><span>admin dashboard</span></td>
                                    <td class="text-right">1.296</td>
                                  </tr>
                                  <tr class="br-b">
                                    <td><span>dashboard theme</span></td>
                                    <td class="text-right">783</td>
                                  </tr>
                                  <tr>
                                    <td class="pt30 pb30"><a href="#" class="text-primary">View Report</a></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Circle Stats-->
              <div class="row text-center">
                <div class="col-lg-3 col-sm-6">
                  <div class="panel">
                    <div class="panel-body pl40 pr40">
                      <div id="c1" title="1,425" value="35" data-circle-color="twilight" class="info-circle"></div>
                      <h3 class="fw300 mt30"> New Orders</h3>
                      <p class="ffs mt10">3% increase 1W AGO</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="panel">
                    <div class="panel-body pl40 pr40">
                      <div id="c2" title="64,487" value="75" data-circle-color="primary" class="info-circle"></div>
                      <h3 class="fw300 mt30"> Total Sales Gross</h3>
                      <p class="ffs mt10">13% increase 1W AGO</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="panel">
                    <div class="panel-body pl40 pr40">
                      <div id="c3" title="248" value="18" data-circle-color="info" class="info-circle"></div>
                      <h3 class="fw300 mt30"> Total Sales Gross</h3>
                      <p class="ffs mt10">2.7% Decrease 1W AGO</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="panel">
                    <div class="panel-body pl40 pr40">
                      <div id="c4" title="4,487" value="42" data-circle-color="smalt" class="info-circle"></div>
                      <h3 class="fw300 mt30"> Unique Visits</h3>
                      <p class="ffs mt10">3% increase 1W AGO</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 admin-grid">
                  <!-- Calendar Widget-->
                  <div id="p02" class="panel panel-widget calendar-widget calendar-alt">
                    <div class="panel-heading br-b"><span class="panel-title"> Calendar Widget</span></div>
                    <div class="panel-body bg-white p15">
                      <div id="calendar-widget"></div>
                    </div>
                  </div>
                  <!-- Column Graph-->
                </div>
                <div class="col-md-6 admin-grid">
                  <div id="pchart9" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title"> Column Graph</span></div>
                    <div class="panel-body text-center">
                      <div class="row">
                        <div class="col-lg-7 mt20">
                          <div id="high-column"></div>
                        </div>
                        <div class="col-lg-5 offset-7">
                          <table class="table text-left">
                            <tbody>
                              <tr>
                                <td class="br-n"><span class="fa fa-circle text-facebook fs14 mr10 va-t m4"></span>Facebook</td>
                                <td class="br-n fw700">54%</td>
                              </tr>
                              <tr>
                                <td class="br-n"><span class="fa fa-circle text-twitter fs14 mr10 va-t m4"></span>Twitter</td>
                                <td class="br-n fw700">25%</td>
                              </tr>
                              <tr>
                                <td class="br-n"><span class="fa fa-circle text-behance fs14 mr10 va-t m4"></span>Behance</td>
                                <td class="br-n fw700">39%</td>
                              </tr>
                              <tr>
                                <td class="br-n"><span class="fa fa-circle text-dribble fs14 mr10 va-t m4"></span>Dribbble</td>
                                <td class="br-n fw700">17%</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div><a href="#" class="text-primary text-uppercase link link-sm">Add social network</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <!-- Stats Top Graph Bot-->
                  <div id="p7" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Area Graph</span></div>
                    <div class="row">
                      <div class="col-md-4 ml35 mt30 mb30">
                        <!-- RD SelectMenu-->
                        <label for="select-1" class="mnw-210">
                          <select id="select-1" class="rd-mailform-select">
                            <option value="Search state">Search state</option>
                            <option value="Search state 2">Search state 2</option>
                            <option value="Search state 3">Search state 3</option>
                          </select>
                        </label>
                      </div>
                      <div class="col-lg-4 pull-right mr30 mt35">
                        <div class="panel-body pn">
                          <div class="admin-form">
                            <table class="table mbn">
                              <tbody>
                                <tr>
                                  <td class="fw600 text-right text-secondary">54%</td>
                                  <td class="va-m fw400 text-muted">Male</td>
                                  <td class="fw600 text-right text-secondary">46%</td>
                                  <td class="va-m fw400 text-muted">Female</td>
                                  <td class="fs14 fw600 text-right text-secondary">46%</td>
                                  <td class="va-m fw400 text-muted">Unemployed</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div id="high-line3" style="width: 100%; height: 371px; margin: 0 auto"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <!-- Geo Map + Table Stats-->
                  <div id="p9" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Visitor Geograph</span></div>
                    <div class="row">
                      <div class="col-md-4 ml35 mt30 mb30">
                        <!-- RD SelectMenu-->
                        <label for="select-2" class="mnw300">
                          <select id="select-2" class="rd-mailform-select">
                            <option value="United states of america">United states of america</option>
                            <option value="China">China</option>
                            <option value="Italy">Italy</option>
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="panel-body">
                        <div class="col-lg-9">
                          <div id="WidgetMap" style="width: 100%; height: 490px;" class="jvector-colors hide-jzoom"></div>
                        </div>
                        <div class="col-lg-3">
                          <div class="row">
                            <div class="col-lg-12 col-sm-3">
                              <div class="row">
                                <div class="col-sm-6 col-lg-4 mt10">
                                  <div id="c5" value="21" width="15" data-circle-color="twilight" class="info-circle"></div>
                                </div>
                                <div class="col-sm-6 col-lg-8">
                                  <h1 class="text-secondary-v1 fw700"> 21%</h1>
                                  <h3 class="ffs">New York</h3>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-sm-3">
                              <div class="row">
                                <div class="col-sm-6 col-lg-4 mt10">
                                  <div id="c6" value="47" width="15" data-circle-color="primary" class="info-circle"></div>
                                </div>
                                <div class="col-sm-6 col-lg-8">
                                  <h1 class="text-secondary-v1 fw700"> 47%</h1>
                                  <h3 class="ffs">Texas</h3>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-sm-3">
                              <div class="row">
                                <div class="col-sm-6 col-lg-4 mt10">
                                  <div id="c7" value="14" width="15" data-circle-color="info" class="info-circle"></div>
                                </div>
                                <div class="col-sm-6 col-lg-8">
                                  <h1 class="text-secondary-v1 fw700"> 14%</h1>
                                  <h3 class="ffs">Missouri</h3>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12 col-sm-3">
                              <div class="row">
                                <div class="col-sm-6 col-lg-4 mt10">
                                  <div id="c8" value="24" width="15" data-circle-color="smalt" class="info-circle"></div>
                                </div>
                                <div class="col-sm-6 col-lg-8">
                                  <h1 class="text-secondary-v1 fw700"> 24%</h1>
                                  <h3 class="ffs">California</h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Task Widget-->
              <div class="row">
                <div class="col-lg-6">
                  <div id="p05" class="panel panel-widget task-widget task-alt">
                    <div class="panel-heading"><span class="panel-title"> Task-List Widget</span></div>
                    <div class="panel-body pl30 pr30">
                      <h3 class="mb30 mt20 text-muted fs18 fw300"> Personal Tasks</h3>
                      <ul class="task-list task-current">
                        <li class="task-item mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task1" type="checkbox">
                              <label for="task1"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task2" type="checkbox">
                              <label for="task2"></label>
                            </div>
                          </div>
                          <div class="task-desc">Add new servers to design board</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task3" type="checkbox">
                              <label for="task3"></label>
                            </div>
                          </div>
                          <div class="task-desc">Finish building prototype for Sony</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task4" type="checkbox">
                              <label for="task4"></label>
                            </div>
                          </div>
                          <div class="task-desc">Order new building supplies for Microsof</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task5" type="checkbox">
                              <label for="task5"></label>
                            </div>
                          </div>
                          <div class="task-desc">Add new servers to design board</div>
                          <div class="task-menu"></div>
                        </li>
                      </ul>
                      <h3 class="mb30 mt50 text-muted fs18 fw300">Completed Tasks</h3>
                      <ul class="task-list task-completed">
                        <li class="task-item item-checked mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task7" type="checkbox" checked="">
                              <label for="task7"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item item-checked mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task8" type="checkbox" checked="">
                              <label for="task8"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item item-checked mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task9" type="checkbox" checked="">
                              <label for="task9"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item item-checked mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task10" type="checkbox" checked="">
                              <label for="task10"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item item-checked mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task11" type="checkbox" checked="">
                              <label for="task11"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                        <li class="task-item item-checked mt10">
                          <div class="task-handle">
                            <div class="checkbox-custom">
                              <input id="task12" type="checkbox" checked="">
                              <label for="task12"></label>
                            </div>
                          </div>
                          <div class="task-desc">Create documentation for launch</div>
                          <div class="task-menu"></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Search List-->
                </div>
                <div class="col-lg-6">
                  <div id="p17" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Crawler List</span></div>
                    <div class="panel-body pn pl30 pr30">
                      <table class="table mbn tc-med-1 tc-bold-last">
                        <tbody>
                          <tr>
                            <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/img/15</td>
                            <td>7%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/popular</td>
                            <td>14%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/news/3</td>
                            <td>31%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/featured/16</td>
                            <td>49%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/featured/16</td>
                            <td>94%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="fa fa-chain va-t mr10 fs18 pt5"></span>pages.com/featured/16</td>
                            <td>5%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- Country List-->
                  <div id="p16" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Country List</span></div>
                    <div class="panel-body pn pl30 pr30">
                      <table class="table mbn tc-med-1 tc-bold-last">
                        <tbody>
                          <tr>
                            <td class="pt10 pb15"><span class="flag-sm flag-us mr10 va-b top-5"></span><span>United States</span></td>
                            <td>24%</td>
                          </tr>
                          <tr>
                            <td class="pt10 pb15"><span class="flag-sm flag-de mr10 va-b top-5"></span><span>Germany</span></td>
                            <td>7%</td>
                          </tr>
                          <tr>
                            <td class="pt10 pb15"><span class="flag-sm flag-fr mr10 va-b top-5"></span><span>France</span></td>
                            <td>14%</td>
                          </tr>
                          <tr>
                            <td class="pt10 pb15"><span class="flag-sm flag-tr mr10 va-b top-5"></span><span>Turkey</span></td>
                            <td>31%</td>
                          </tr>
                          <tr>
                            <td class="pt10 pb15"><span class="flag-sm flag-es mr10 va-b top-5"></span><span>Spain</span></td>
                            <td>22%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- Browser List-->
                  <div id="p18" class="panel">
                    <div class="panel-heading br-b"><span class="panel-title">Tabs</span></div>
                    <div class="panel-body pn pl30 pr30">
                      <table class="table mbn tc-med-1 tc-bold-last">
                        <tbody>
                          <tr>
                            <td class="pt20 pb20"><span class="mr10 mt1 fa fa-chrome"></span>Google Chrome</td>
                            <td>54%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="mr10 mt1 fa fa-opera"></span>Opera</td>
                            <td>18%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="mr10 mt1 fa fa-firefox"></span>FireFox</td>
                            <td>25%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="mr10 mt1 fa fa-safari"></span>Safari</td>
                            <td>49%</td>
                          </tr>
                          <tr>
                            <td class="pt20 pb20"><span class="mr10 mt1 fa fa-internet-explorer"></span>Explorer</td>
                            <td>94%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- begin: .tray-right-->
          <aside data-tray-height="match" class="tray tray-right tray270 pn hidden">
            <!-- store activity timeline-->
            <ol class="timeline-list pl5 mt5">
              <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
                <div class="timeline-date">1:25am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Notebook</a></div>
                <div class="timeline-date">3:05am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
                <div class="timeline-date">4:15am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
                <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                <div class="timeline-date">5:25am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Apple Inc.</a></div>
                <div class="timeline-date">7:45am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
                <div class="timeline-date">8:25am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Watch</a></div>
                <div class="timeline-date">9:35am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-system"><span class="fa fa-fire"></span></div>
                <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
                <div class="timeline-date">4:15am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
                <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                <div class="timeline-date">5:25am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Software</a></div>
                <div class="timeline-date">4:15am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-warning"><span class="fa fa-pencil"></span></div>
                <div class="timeline-desc"><b>Laura</b> edited her work experience</div>
                <div class="timeline-date">5:25am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-success"><span class="fa fa-usd"></span></div>
                <div class="timeline-desc"><b>Admin</b> created a new invoice for:<a href="#">Apple Inc.</a></div>
                <div class="timeline-date">7:45am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                <div class="timeline-desc"><b>Michael</b> Added a new item to his store:<a href="#">Ipod</a></div>
                <div class="timeline-date">8:25am</div>
              </li>
              <li class="timeline-item">
                <div class="timeline-icon bg-dark light"><span class="fa fa-tags"></span></div>
                <div class="timeline-desc"><b>Sara</b> Added a new item to his store:<a href="#">Watch</a></div>
                <div class="timeline-date">9:35am</div>
              </li>
            </ol>
          </aside>
        </section>
        <!-- Page Footer-->
        <!-- Begin: Page Footer-->
        <footer id="content-footer" class="affix">
          <div class="row">
            <div class="col-md-6"><span class="footer-legal">&copy; 2016. All Rights Reserved. Ruby Admin</span></div>
            <div class="col-md-6 text-right"><span class="footer-meta">60GB of 350GB Free</span><a href="#content" class="footer-return-top"><span class="fa fa-angle-up"></span></a></div>
          </div>
        </footer>
      </section>
      <!-- Start: Right Sidebar-->
      <aside id="sidebar_right" class="nano affix">
        <!-- Start: Sidebar Right Content-->
        <div class="sidebar-right-content nano-content">
          <div class="tab-block sidebar-block br-n">
            <ul class="nav nav-tabs tabs-border nav-justified hidden">
              <li class="active"><a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a></li>
              <li><a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a></li>
              <li><a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a></li>
            </ul>
            <div class="tab-content br-n">
              <div id="sidebar-right-tab1" class="tab-pane active">
                <h5 class="title-divider text-muted mb20">Server Statistics<span class="pull-right">2013<i class="fa fa-caret-down ml5"></i></span></h5>
                <div class="progress mh5">
                  <div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%" class="progress-bar progress-bar-primary"><span class="fs11">DB Request</span></div>
                </div>
                <div class="progress mh5">
                  <div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%" class="progress-bar progress-bar-info"><span class="fs11 text-left">Server Load</span></div>
                </div>
                <div class="progress mh5">
                  <div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%" class="progress-bar progress-bar-warning"><span class="fs11 text-left">Server Connections</span></div>
                </div>
                <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                <div class="row">
                  <div class="col-xs-5">
                    <h3 class="text-primary mn pl5">132</h3>
                  </div>
                  <div class="col-xs-7 text-right">
                    <h3 class="text-success-dark mn"><i class="fa fa-caret-up"></i> 13.2%</h3>
                  </div>
                </div>
                <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                <div class="row">
                  <div class="col-xs-5">
                    <h3 class="text-primary mn pl5">212</h3>
                  </div>
                  <div class="col-xs-7 text-right">
                    <h3 class="text-success-dark mn"><i class="fa fa-caret-up"></i> 25.6%</h3>
                  </div>
                </div>
                <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                <div class="row">
                  <div class="col-xs-5">
                    <h3 class="text-primary mn pl5">82.5</h3>
                  </div>
                  <div class="col-xs-7 text-right">
                    <h3 class="text-danger mn"><i class="fa fa-caret-down"></i> 17.9%</h3>
                  </div>
                </div>
                <h5 class="title-divider text-muted mt40 mb20">Server Statistics<span class="pull-right text-primary fw600">USA</span></h5>
              </div>
              <div id="sidebar-right-tab2" class="tab-pane"></div>
              <div id="sidebar-right-tab3" class="tab-pane"></div>
            </div>
          </div>
        </div>
      </aside>
    </div>