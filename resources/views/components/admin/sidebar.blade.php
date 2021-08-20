@php
$route = \Request::route()->getName();
@endphp
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ config('app.name') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/">SIP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ $route == 'admin.dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            @can('read-user')
                <li class="nav-item dropdown @if (in_array($route,
                    ['admin.user.index', 'admin.user.create' , 'admin.user.edit' ])) active @endif">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-tie"></i><span>Petugas</span></a>
                    <ul class="dropdown-menu">
                        <li class="@if ($route=='admin.user.index' ) active @endif">
                            <a href="{{ route('admin.user.index') }}">Daftar</a>
                        </li>
                        @can('add-user')
                            <li class="@if ($route=='admin.user.create' ) active @endif">
                                <a href="{{ route('admin.user.create') }}">Tambah</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
        </ul>
    </aside>
</div>
