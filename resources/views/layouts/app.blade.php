@include('layouts.header')



    <div class="grid-container">

      <div class="top-nav">
        @include('layouts.topnav')
        @yield('top-content')
      </div>

      <div class="content-wrapper">
        @yield('content')
      </div>

      <div class="side-nav">
        @include('layouts.side')
        @yield('side-content')
      </div>

    </div>

  
@include('layouts.footer')
