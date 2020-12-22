<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    {{-- @include('partials.header') --}}
    @if(is_front_page())
      @include('home.section-1')
    @else
      this is not home
      @include('partials.main')
    @endif
    @php do_action('get_footer') @endphp
    {{-- @include('partials.footer') --}}
    @php wp_footer() @endphp
  </body>
</html>
