<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title ?? config('app.name') }}</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="/assets/css/stisla/style.css">
  <link rel="stylesheet" href="/assets/css/stisla/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      @include('components/admin/navbar')
      @include('components/admin/sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          @yield('header')
          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>
      @include('components/admin/footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="/assets/js/stisla/stisla.js"></script>
  <script src="/assets/js/stisla/scripts.js"></script>

  @stack('script')
</body>
</html>
