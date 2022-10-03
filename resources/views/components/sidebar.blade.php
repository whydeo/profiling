<div>
    <!-- Sidebar outter -->
    <div class="main-sidebar sidebar-style-2">
        <!-- sidebar wrapper -->
        <aside id="sidebar-wrapper">
            <!-- sidebar brand -->
            <div class="sidebar-brand">
                <a href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <!-- menu header -->
                <li class="menu-header">General</li>
                <!-- menu item -->
                @if (auth()->user()->role=="admin")
                    
                
                <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Route::is('index') ? 'active' : '' }}">
                    <a href="{{ route('index') }}">
                        <i class="fas fa-fire"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li class="{{ Route::is('berita.index') ? 'active' : '' }}">
                    <a href="{{ route('berita.index') }}">
                        <i class="fas fa-fire"></i>
                        <span>berita</span>
                    </a>
                </li>
                <li class="{{ Route::is('profile') ? 'active' : '' }}">
                    <a href="{{ route('profile') }}">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                @elseif (auth()->user()->role=="user")    
                      <li class="{{ Route::is('influencer.create') ? 'active' : '' }}">
                          <a href="{{ route('influencer.create') }}">
                              <i class="fas fa-user"></i>
                              <span>influencer</span>
                          </a>
                      </li>
                      @endif
            </ul>
        </aside>
    </div>
</div>