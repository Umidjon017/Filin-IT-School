<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img alt="image" src="{{ asset('front/assets/img/logo/logo_nav.png') }}" class="header-logo" />
                <span class="logo-name">{{ __("ФИЛИН IT") }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
           
            <li class="dropdown {{ request()->routeIs('admin.dashboard*') ? 'active' : ''  }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Главная") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.header-buttons*') ? 'active' : ''  }}">
                <a href="{{ route('admin.header-buttons.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Кнопки в хедере") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.footer-buttons*') ? 'active' : ''  }}">
                <a href="{{ route('admin.footer-buttons.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Кнопки в футере") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.training-programs*') ? 'active' : ''  }}">
                <a href="{{ route('admin.training-programs.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Программы обучения") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.telephone-address*') ? 'active' : ''  }}">
                <a href="{{ route('admin.telephone-address.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Телефон и Адрес") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.banners*') ? 'active' : ''  }}">
                <a href="{{ route('admin.banners.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Баннер") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.block-text*') ? 'active' : ''  }}">
                <a href="#" class="menu-toggle nav-link has-dropdown" ><i class="fas fa-list-alt"></i><span>{{ __("Блоки") }}</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown {{ request()->routeIs('admin.block-text-one*') ? 'active' : ''  }}">
                        <a href="{{ route('admin.block-text-one.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Блок после баннера") }}</span></a>
                    </li>

                    <li class="dropdown {{ request()->routeIs('admin.block-text-two*') ? 'active' : ''  }}">
                        <a href="{{ route('admin.block-text-two.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Блок 'Наша миссия'") }}</span></a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.school-results*') ? 'active' : ''  }}">
                <a href="{{ route('admin.school-results.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Результаты университета") }}</span></a>
            </li>

            <li class="dropdown {{ request()->routeIs('admin.pages*') ? 'active' : ''  }}">
                <a href="{{ route('admin.pages.index') }}" class="nav-link"><i data-feather="monitor"></i><span>{{ __("Страницы") }}</span></a>
            </li>

            {{-- @can('product-list') --}}
            {{-- <li class="dropdown {{ request()->is('admin/product-categories/*') ? 'active' : ''  }}">
              <a href="#" class="menu-toggle nav-link has-dropdown" ><i class="fas fa-list-alt"></i><span>{{ __("Mahsulot kategoriyasi") }}</span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->is('admin/product-categories/table*') ? 'active' : ''  }}">
                      <a href="{{ route('admin.product-categories.table.index') }}" ><i class="fas fa-list-alt"></i><span>{{ __("Mahsulot kategoriyasi") }}</span></a>
                  </li>

                  <li class="{{ request()->is('admin/product-categories/telephones*') ? 'active' : ''  }}">
                      <a href="{{ route('admin.product-categories.telephones.index') }}" ><i class="fas fa-list-alt"></i><span>{{ __("Telefon kategoriyasi") }}</span></a>
                  </li>
                </ul>
            </li> --}}
            {{-- @endcan --}}

            {{-- @can('product-list') --}}
            {{-- <li class="dropdown {{ request()->is('admin/product-telephones*') ? 'active' : ''  }}">
              <a href="#" class="menu-toggle nav-link has-dropdown" ><i class="fas fa-boxes"></i> <span> {{ __("Telefon Mahsulotlar") }} </span></a>
                <ul class="dropdown-menu">
                  <li class="{{ request()->is('admin/product-telephones*') ? 'active' : ''  }}">
                      <a href="{{ route('admin.product-telephones.index') }}" > <i class="fas fa-boxes"></i> <span> {{ __("Telefon mahsulotlari") }} </span></a>
                  </li>

                  <li class="{{ request()->is('admin/telephone-memories') ? 'active' : ''  }}">
                      <a href="{{ route('admin.telephone-memories.index') }}" ><i class="fas fa-list-alt"></i><span>{{ __("Telefon xotiralari") }}</span></a>
                  </li>
                </ul>
            </li> --}}
            {{-- @endcan --}}

            {{-- <li class="dropdown {{ request()->is('admin/colors*') ? 'active' : ''  }}">
              <a href="{{ route('admin.colors.index') }}" ><i class="fas fa-list-alt"></i><span>{{ __("Ranglar") }}</span></a>
            </li> --}}



            {{-- @if (Auth::user()->hasAllPermissions(['role-list', 'user-list']))
                <li class="menu-header"> Xavfsizlik </li>
                <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="user-check"></i><span> Administratsiya </span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('admin/roles*') ? 'active' : ''  }}">
                        <a href="{{ route('admin.roles.index') }}" > <i class="fas fa-universal-access"></i> Rollar</a>
                    </li>
                    <li class=" {{ request()->is('admin/users*') ? 'active' : ''  }}">
                        <a href="{{ route('admin.users.index') }}" > <i class="fas fa-users-cog"></i><span>Foydalanuvchi&Admin</span></a>
                    </li>
                </ul>
                </li>
            @endif --}}
        </ul>
    </aside>
</div>
