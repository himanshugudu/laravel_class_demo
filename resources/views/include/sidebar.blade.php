<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{!!URL::route('home')!!}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="#" class="">
                          <i class="icon_document_alt"></i>
                          <span>Login details</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ route('user.index') }}">Admin Details</a></li>
              <li><a class="" href="{{ route('user.edit') }}">User Details</a></li>
              <li><a class="" href="{!!URL::route('formvalid')!!}">Form Validation</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Catalog</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{!!URL::route('general')!!}">Elements</a></li>
              <li><a class="" href="{!!URL::route('buttons')!!}">Buttons</a></li>
              <li><a class="" href="{!!URL::route('grid')!!}">Grids</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="{!!URL::route('widgets')!!}">
                          <i class="icon_genius"></i>
                          <span>Design</span>
                      </a>
          </li>
          <li>
            <a class="" href="{{ route('sale.index') }}">
                          <i class="icon_piechart"></i>
                          <span>Sales</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{!!URL::route('table')!!}">Basic Table</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Marketing</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{!!URL::route('profile')!!}">Profile</a></li>
              <!--<li><a class="" href="{!!URL::route('login')!!}"><span>Login Page</span></a></li>-->
              <li><a class="" href="{!!URL::route('blank')!!}">Blank Page</a></li>
              <li><a class="" href="{!!URL::route('buttons')!!}">404 Error</a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->