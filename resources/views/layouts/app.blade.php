@include('inc.header')



    <div class="grid-container">

      <div class="top-nav">
        @include('inc.topnav')
        @yield('top-content')
      </div>

      <div class="content-wrapper">
        @yield('content')
      </div>

      <div class="side-nav">
        @include('inc.side')
        @yield('side-content')
      </div>

    </div>


@include('inc.footer')
