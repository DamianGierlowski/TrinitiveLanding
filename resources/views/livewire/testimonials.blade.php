<section id="testimonials" class="w-full bg-gray-50 py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-16">What Our Clients Say</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
                <div class="bg-white rounded-lg shadow-md p-8 flex flex-col items-center text-center">
                    <div class="w-16 h-16 rounded-full overflow-hidden mb-6">
                        {{ svg('fontisto-person') }}
                    </div>

                    <blockquote class="text-gray-700 italic mb-6">
                        "{{ $testimonial['quote'] }}"
                    </blockquote>

                    <div class="mt-auto">
                        <h3 class="font-bold text-lg">{{ $testimonial['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $testimonial['position'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

