
<slot name="header">
    <h2 class="font-semibold text-xl text-gray-900 leading-tight">
        {{ __('Dashboard' )}}
    </h2>
</slot>

<h1>About Page</h1>
<p>Nama : {{ $name }} </p>

<a href="{{ route('home.page') }}">Kembali ke Home</a>