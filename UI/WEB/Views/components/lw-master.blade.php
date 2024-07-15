@extends('vendor@livewire::layouts.app')

@push('styles')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Alpine is autoloaded under the hood, you no longer need to add it here -->
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}

@endpush

@section('content')
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-50">

{{$navigation??''}}

<!-- Page Heading -->


    <!-- Page Content -->
    <main>
        <div class="py-5 max-w-7xl mx-auto font-arabic">

        {{ $slot }}
        </div>
    </main>
</div>
@endsection



