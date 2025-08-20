<nav class="navbar navbar-vertical navbar-expand-lg" style="display:none;">
  <script>
    var navbarStyle = window.config.config.phoenixNavbarStyle;
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <!-- scrollbar removed-->
    <div class="navbar-vertical-content">
      <ul class="navbar-nav flex-column" id="navbarVerticalNav">
        <li class="nav-item">
          <!-- parent pages-->
          <div class="nav-item-wrapper"><a class="nav-link @if(str_contains(Request::url() ,route('dashboard'))) active @endif dropdown-indicator label-1" href="{{route('dashboard')}}" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="nv-home">
              <div class="d-flex align-items-center">
                <div class="dropdown-indicator-icon"></div><span class="nav-link-icon"></span><span class="nav-link-text">Home</span>
              </div>
            </a>
            <div class="parent-wrapper label-1">
              <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="nv-home">
                <li class="collapsed-nav-item-title d-none">Home</li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('companies.index'))) active @endif" href="{{route('companies.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Company</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('industries.index'))) active @endif" href="{{route('industries.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Industry</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('branches.index'))) active @endif" href="{{route('branches.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Branch</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('vendor_categories.index'))) active @endif" href="{{route('vendor_categories.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Vendor Category</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('vendor_list.index'))) active @endif" href="{{route('vendor_list.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Vendor</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('material_categories.index'))) active @endif" href="{{route('material_categories.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Material Category</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('materials.index'))) active @endif" href="{{route('materials.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Material</span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('inquiries.index'))) active @endif" href="{{route('inquiries.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Inquiry </span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link @if(str_contains(Request::url() ,route('permissions.index'))) active @endif" href="{{route('permissions.index')}}" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-text">Permission </span>
                    </div>
                  </a><!-- more inner pages-->
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-vertical-footer"><button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button></div>
</nav>