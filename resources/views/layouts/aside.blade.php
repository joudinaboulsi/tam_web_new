<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
              <h3>Tam</h3>
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Layouts -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        <!-- Home Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'sliderCms' || Route::currentRouteName() == 'sliderCreate' || Route::currentRouteName() == 'sliderEdit' ? 'active' : '' }}">
            <a href="{{ route('sliderCms') }}" class="menu-link">
              <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Sliders">Sliders</div>
            </a>
        </li>

        <!-- About -->
        <li class="menu-item {{ Route::currentRouteName() == 'aboutCms' || Route::currentRouteName() == 'missionCms' || Route::currentRouteName() == 'visionCms' ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="About">About</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::currentRouteName() == 'aboutCms' ? 'active' : '' }}">
                    <a href="{{ Route('aboutCms') }}" class="menu-link">
                        <div data-i18n="About us">About us </div>
                    </a>
                </li>
                <li class="menu-item {{ Route::currentRouteName() == 'missionCms' ? 'active' : '' }}">
                    <a href="{{ route('missionCms') }}" class="menu-link">
                        <div data-i18n="Mission">Mission</div>
                    </a>
                </li>
                <li class="menu-item {{ Route::currentRouteName() == 'visionCms' ? 'active' : '' }}">
                    <a href="{{ route('visionCms') }}" class="menu-link">
                        <div data-i18n="Vision">Vision</div>
                    </a>
                </li>
              
            </ul>
        </li>

        <!-- Service Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'serviceCms' ? 'active' : '' }}">
            <a href="{{ route('serviceCms') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Services Page">Services Page</div>
            </a>
        </li>

        <!-- Product Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'productCms' || Route::currentRouteName() == 'productCreate' || Route::currentRouteName() == 'productEdit' ? 'active' : '' }}">
            <a href="{{ route('productCms') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Products Page">Products Page</div>
            </a>
        </li>

        <!-- Projects Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'projectCms' || Route::currentRouteName() == 'projectCreate' || Route::currentRouteName() == 'projectEdit' ? 'active' : '' }}">
            <a href="{{ route('projectCms') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Projects Page">Projects Page</div>
            </a>
        </li>

        <!-- Clients Pages -->
        <li class="menu-item {{ Route::currentRouteName() == 'clientCms' || Route::currentRouteName() == 'clientCreate' || Route::currentRouteName() == 'clientEdit' ? 'active' : '' }}">
            <a href="{{ route('clientCms') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Clients Page">Clients Page</div>
            </a>
        </li>

        <!-- Testimonial -->
        <li class="menu-item {{ Route::currentRouteName() == 'testimonialCms' ? 'active' : '' }}">
            <a href="{{ route('testimonialCms') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Testimonials">Testimonials</div>
            </a>
        </li>

         <!-- Contact -->
         <li class="menu-item {{ Route::currentRouteName() == 'contactCms' ? 'active' : '' }}">
            <a href="{{ route('contactCms') }}" class="menu-link">
                <i class='bx bxs-dock-top me-2'></i>
                <div data-i18n="Contact">Contact</div>
            </a>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>

        <!-- Settings -->
        <li class="menu-item {{ Route::currentRouteName() == 'settingsCms' ? 'active' : '' }}">
            <a href="{{ route('settingsCms') }}" class="menu-link">
                <i class="bx bx-cog me-2"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>

        <!-- SEO -->
        <li class="menu-item {{ Route::currentRouteName() == 'seoCms' ? 'active' : '' }}">
            <a href="{{ route('seoCms') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Seo">Seo</div>
            </a>
        </li> 

        <!-- Logout -->
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Logout">Logout</div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
