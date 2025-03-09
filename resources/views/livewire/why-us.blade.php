<section class="w-full py-20">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold mb-4">Why Trinitive?</h2>
            <p class="text-gray-600">
                Discover how our three core principles define our approach and set us apart in delivering exceptional solutions.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16">
            @foreach($principles as $principle)
                <div class="bg-white rounded-lg shadow-md p-8">
                    <div class="mb-6">
                        @if($principle['icon'] === 'lightbulb')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        @elseif($principle['icon'] === 'shield')
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        @endif
                    </div>

                    <h3 class="text-xl font-bold mb-4">{{ $principle['title'] }}</h3>
                    <p class="text-gray-600 mb-6">{{ $principle['description'] }}</p>

{{--                    <a href="#" class="inline-flex items-center text-gray-900 font-medium hover:text-gray-700">--}}
{{--                        Learn More--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />--}}
{{--                        </svg>--}}
{{--                    </a>--}}
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <a href="#services" class="inline-flex px-8 py-4 bg-gray-900 text-white rounded-lg hover:bg-gray-800 transition-colors">
                Explore Our Services
            </a>
        </div>
    </div>
</section>

