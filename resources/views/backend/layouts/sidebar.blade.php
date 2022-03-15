<div class="sidebar" data-color="rose" data-background-color="black">
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            TV
          </a>
          <a href="{{url('b2b/')}}" class="simple-text logo-normal">
            Trade Valy
          </a></div>
        <div class="sidebar-wrapper">
          <div class="user">
            <div class="photo">
              <img src="{{asset('assets/backend/img/default-avatar.png')}}" />
            </div>
            <div class="user-info">
              <a data-toggle="collapse" href="#collapseExample" class="username">
                <span>
                  {{Auth::guard('admin')->user()->name}}
                  <b class="caret"></b>
                </span>
              </a>
              <div class="collapse" id="collapseExample">
                <ul class="nav">
                  <li class="nav-item {{ request()->is('b2b/profile') ? 'active' : '' }} ">
                    <a class="nav-link" href="{{url('b2b/profile')}}">
                      <span class="sidebar-mini"> MP </span>
                      <span class="sidebar-normal"> My Profile </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->is('b2b/add') ? 'active' : '' }} ">
                    <a class="nav-link" href="{{url('b2b/add')}}">
                      <span class="sidebar-mini"> AA </span>
                      <span class="sidebar-normal"> Add Admin </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('b2b/reset_password')}}">
                      <span class="sidebar-mini"> CP </span>
                      <span class="sidebar-normal"> Change Password</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <ul class="nav">
            <li class="nav-item {{ request()->is('b2b/dashboard') ? 'active' : '' }} ">
              <a class="nav-link" href="{{url('b2b/dashboard')}}">
                <i class="material-icons">dashboard</i>
                <p> Dashboard </p>
              </a>
            </li>
            <li class="nav-item {{ request()->is('b2b/category/*') ? 'active' : '' }} ">
              <a class="nav-link" href="{{url('b2b/category/index')}}">
                <i class="material-icons">dashboard</i>
                <p> Category </p>
              </a>
            </li>
            <li class="nav-item {{ request()->is('b2b/package/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                <i class="material-icons">image</i>
                <p> Packeges
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="pagesExamples">
                <ul class="nav">
                  <li class="nav-item {{ request()->is('b2b/package/index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('b2b/package/index')}}">
                      <span class="sidebar-mini"> AP </span>
                      <span class="sidebar-normal">All packeges </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->is('b2b/package/add') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('b2b/package/add')}}">
                      <span class="sidebar-mini"> +P </span>
                      <span class="sidebar-normal">Add Package </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="{{url('b2b/package/features')}}">
                      <span class="sidebar-mini"> RS </span>
                      <span class="sidebar-normal"> Features </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item {{ request()->is('b2b/component/*') ? 'active' : '' }}">
              <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                <i class="material-icons">apps</i>
                <p> Components
                  <b class="caret"></b>
                </p>
              </a>
              <div class="collapse" id="componentsExamples">
                <ul class="nav">
                  <li class="nav-item {{ request()->is('b2b/component/banner/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('b2b/component/banner/index')}}">
                      <span class="sidebar-mini"> B </span>
                      <span class="sidebar-normal"> Banners </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->is('b2b/top_menu/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('b2b/top_menu/index')}}">
                      <span class="sidebar-mini"> A </span>
                      <span class="sidebar-normal"> Top Menu </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->is('b2b/about/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('b2b/about/index')}}">
                      <span class="sidebar-mini"> A </span>
                      <span class="sidebar-normal"> About </span>
                    </a>
                  </li>
                  <li class="nav-item {{ request()->is('b2b/tradeShow/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('b2b/tradeShow/index')}}">
                      <span class="sidebar-mini"> TS </span>
                      <span class="sidebar-normal"> Trade Shows </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                      <span class="sidebar-mini"> SL </span>
                      <span class="sidebar-normal">Lorem
                        <b class="caret"></b>
                      </span>
                    </a>
                    <div class="collapse" id="componentsCollapse">
                      <ul class="nav">
                        <li class="nav-item ">
                          <a class="nav-link" href="#0">
                            <span class="sidebar-mini"> BI </span>
                            <span class="sidebar-normal"> All Banners </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>