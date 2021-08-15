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
        <li class="{{ ($route == 'admin.dashboard') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
        </li>
      </ul>
  </aside>
</div>
