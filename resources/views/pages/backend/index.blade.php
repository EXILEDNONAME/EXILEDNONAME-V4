<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.__includes.head')

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

  @include('layouts.backend.__includes.mobile-header')
  <div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">

      @include('layouts.backend.__includes.sidebar')

      <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div id="kt_header" class="header  header-fixed " >
          <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
            @include('layouts.backend.__includes.header-left')
            @include('layouts.backend.__includes.header-right')
          </div>
        </div>

        <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
          @include('layouts.backend.__includes.subheader')
          <div class="d-flex flex-column-fluid">
            <div class=" container ">
              <p>Page content goes here...</p>
            </div>
          </div>
        </div>

        @include('layouts.backend.__includes.footer')
      </div>
    </div>
  </div>

  @include('layouts.backend.__includes.topbar.user')
  @include('layouts.backend.__includes.topbar.quick-cart')
  @include('layouts.backend.__includes.topbar.quick-panel')
  @include('layouts.backend.__includes.topbar.chat-panel')

  @include('layouts.backend.__includes.scroll-top')
  @include('layouts.backend.__includes.sticky-toolbar')
  @include('layouts.backend.__includes.demo-panel')


  <script src="/assets/backend/plugins/global/plugins.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/js/scripts.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
  <script src="/assets/backend/plugins/custom/gmaps/gmaps.js?v=7.0.6"></script>
  <script src="/assets/backend/js/pages/widgets.js?v=7.0.6"></script>

</body>
</html>
