<section id="work" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-16">Our Work</h2>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <div class="bg-white rounded-lg overflow-hidden">
                    <div class="aspect-video bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-600 font-medium">Project Preview</span>
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-lg mb-2">{{ $project['name'] }}</h3>
                        <p class="text-gray-600">{{ $project['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

