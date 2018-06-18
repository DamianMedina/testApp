<div id="skin-toolbox">
      <div class="panel">
        <div class="panel-heading"><span class="panel-icon"><i class="fa fa-gear text-primary"></i></span><span class="panel-title"> Theme Options</span></div>
        <div class="panel-body pn">
          <ul role="tablist" class="nav nav-list nav-list-sm pl15 pt10">
            <li class="active"><a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a></li>
            <li><a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a></li>
          </ul>
          <div class="tab-content p20 ptn pb15">
            <div id="toolbox-sidebar" role="tabpanel" class="tab-pane active">
              <form id="toolbox-sidebar-skin">
                <h4 class="mv20">Sidebar Skins</h4>
                <div class="skin-toolbox-swatches">
                  <div class="checkbox-custom fill mb5">
                    <input id="sidebarSkin3" type="radio" name="sidebarSkin" checked="" value="">
                    <label for="sidebarSkin3">Dark</label>
                  </div>
                  <div class="checkbox-custom fill checkbox-disabled mb5">
                    <input id="sidebarSkin1" type="radio" name="sidebarSkin" value="sidebar-light">
                    <label for="sidebarSkin1">Light</label>
                  </div>
                  <div class="checkbox-custom fill checkbox-light mb5">
                    <input id="sidebarSkin2" type="radio" name="sidebarSkin" value="sidebar-light light">
                    <label for="sidebarSkin2">Lighter</label>
                  </div>
                </div>
              </form>
            </div>
            <div id="toolbox-settings" role="tabpanel" class="tab-pane">
              <form id="toolbox-settings-misc">
                <h4 class="mv20 mtn">Layout Options</h4>
                <div class="form-group">
                  <div class="checkbox-custom fill mb5">
                    <input id="sidebar-option" type="checkbox" checked="">
                    <label for="sidebar-option">Fixed Sidebar</label>
                  </div>
                </div>
                <h4 class="mv20">Layout Options</h4>
                <div class="form-group">
                  <div class="radio-custom mb5">
                    <input id="fullwidth-option" type="radio" checked="" name="layout-option">
                    <label for="fullwidth-option">Fullwidth Layout</label>
                  </div>
                </div>
                <div class="form-group mb20 pointer-events-none">
                  <div class="radio-custom radio-disabled mb5">
                    <input id="boxed-option" type="radio" name="layout-option" disabled="">
                    <label for="boxed-option">Boxed Layout<b class="text-muted">(Coming Soon)</b></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="form-group mn br-t p10"><a id="clearLocalStorage" href="#" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a></div>
        </div>
      </div>
    </div>