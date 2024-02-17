@include('client.partials.head')
@include('client.partials.navbar')
<div class="min-h-screen">
@yield('container')
</div>
@include('client.home._footer')
@include('client.partials.end')