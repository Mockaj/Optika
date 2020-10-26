<!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Netist Admin panel</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'/uvod') !== false) {echo 'active';} ?>" href="uvod">
                  <i class="fas fa-th-list"></i>
                  <span>Nástěnka</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'/stranky') !== false) {echo 'active';} ?>" href="stranky">
                  <i class="fas fa-globe-africa"></i>
                  <span>Stránky</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'/novinky') !== false) {echo 'active';} ?>" href="novinky">
                  <i class="fas fa-user"></i>
                  <span>Novinky</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'/znacky') !== false) {echo 'active';} ?>" href="znacky">
                  <i class="fas fa-user"></i>
                  <span>Značky</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if (stripos($_SERVER['REQUEST_URI'],'/produkty') !== false) {echo 'active';} ?>" href="produkty">
                  <i class="fas fa-box"></i>
                  <span>Produkty</span>
                </a>
              </li>           
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->