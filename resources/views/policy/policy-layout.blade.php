<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Trinitive</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-white">
    <!-- Navigation -->
    @livewire('navigation')

    <!-- Page Header -->
    <div class="bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-gray-900">@yield('title')</h1>
                <p class="mt-4 text-xl text-gray-600">Last updated: March 9, 2025</p>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <main class="py-12">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">


                <div class="policy-content">
                    @yield('content')
                </div>

                <div class="mt-16 pt-8 border-t border-gray-200 text-center">
                    <p class="text-gray-500">If you have any questions about our policies, please <a href="#" class="text-blue-600 hover:underline">contact us</a>.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <livewire:footer />
</div>

@livewireScripts

<style>
    /* Policy specific styling */
    .policy-content h2 {
        font-size: 1.875rem;
        font-weight: 700;
        color: #111827;
        margin-top: 2.5rem;
        margin-bottom: 1.25rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #e5e7eb;
    }

    .policy-content h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1f2937;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .policy-content p {
        margin-bottom: 1.25rem;
        line-height: 1.7;
        color: #374151;
    }

    .policy-content ul, .policy-content ol {
        margin-bottom: 1.5rem;
        padding-left: 1.25rem;
    }

    .policy-content li {
        margin-bottom: 0.5rem;
        line-height: 1.7;
    }

    .policy-content ul li {
        list-style-type: disc;
    }

    .policy-content ol li {
        list-style-type: decimal;
    }

    .policy-content a {
        color: #2563eb;
        text-decoration: none;
    }

    .policy-content a:hover {
        text-decoration: underline;
    }

    .policy-content .lead {
        font-size: 1.25rem;
        color: #4b5563;
        margin-bottom: 2rem;
        line-height: 1.8;
    }

    .policy-content table {
        width: 100%;
        border-collapse: collapse;
        margin: 2rem 0;
        font-size: 0.9rem;
    }

    .policy-content table th {
        background-color: #f9fafb;
        font-weight: 600;
        text-align: left;
        padding: 0.75rem 1rem;
        border: 1px solid #e5e7eb;
    }

    .policy-content table td {
        padding: 0.75rem 1rem;
        border: 1px solid #e5e7eb;
        vertical-align: top;
    }

    .policy-content table tr:nth-child(even) {
        background-color: #f9fafb;
    }

    .toc a {
        display: block;
        padding: 0.5rem 0;
        color: #4b5563;
        text-decoration: none;
        border-bottom: 1px dashed #e5e7eb;
    }

    .toc a:hover {
        color: #2563eb;
    }

    .toc a.subsection {
        padding-left: 1.5rem;
        font-size: 0.9rem;
    }

    .section-anchor {
        display: block;
        position: relative;
        top: -100px;
        visibility: hidden;
    }
</style>
</body>
</html>

