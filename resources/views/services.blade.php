<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Our Services') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-green-600 text-white">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Our Travel Services
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Comprehensive travel solutions designed to make your Sri Lanka experience unforgettable
                </p>
            </div>
        </div>
    </div>

    <!-- Main Services -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What We Offer</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From guided tours to custom itineraries, we provide everything you need for a perfect Sri Lanka journey
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Guided Tours -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Guided Tours</h3>
                        <p class="text-gray-600 mb-4">Expert-led tours with certified local guides who bring Sri Lanka's history and culture to life.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>• Professional certified guides</li>
                            <li>• Multilingual support</li>
                            <li>• Insider knowledge and stories</li>
                            <li>• Cultural insights</li>
                        </ul>
                        <a href="{{ route('packages') }}" class="text-blue-600 font-medium hover:text-blue-700">Learn More →</a>
                    </div>
                </div>

                <!-- Custom Itineraries -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Custom Itineraries</h3>
                        <p class="text-gray-600 mb-4">Personalized travel plans tailored to your interests, schedule, and budget.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>• Personalized planning</li>
                            <li>• Flexible scheduling</li>
                            <li>• Special interest focus</li>
                            <li>• Budget optimization</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="text-blue-600 font-medium hover:text-blue-700">Get Quote →</a>
                    </div>
                </div>

                <!-- Transportation -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-yellow-400 to-red-500 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Transportation</h3>
                        <p class="text-gray-600 mb-4">Comfortable and reliable transportation services throughout your journey.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>• Airport transfers</li>
                            <li>• Private vehicles</li>
                            <li>• Experienced drivers</li>
                            <li>• Air-conditioned comfort</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="text-blue-600 font-medium hover:text-blue-700">Book Now →</a>
                    </div>
                </div>

                <!-- Accommodation -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-pink-500 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Accommodation</h3>
                        <p class="text-gray-600 mb-4">Carefully selected hotels and resorts that match your preferences and budget.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>• Handpicked properties</li>
                            <li>• Various price ranges</li>
                            <li>• Prime locations</li>
                            <li>• Quality assurance</li>
                        </ul>
                        <a href="{{ route('packages') }}" class="text-blue-600 font-medium hover:text-blue-700">View Options →</a>
                    </div>
                </div>

                <!-- Adventure Activities -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-indigo-400 to-blue-500 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Adventure Activities</h3>
                        <p class="text-gray-600 mb-4">Thrilling outdoor experiences for adventure seekers and nature lovers.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>• Wildlife safaris</li>
                            <li>• Hiking and trekking</li>
                            <li>• Water sports</li>
                            <li>• Cultural activities</li>
                        </ul>
                        <a href="{{ route('packages') }}" class="text-blue-600 font-medium hover:text-blue-700">Explore Activities →</a>
                    </div>
                </div>

                <!-- 24/7 Support -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-red-400 to-orange-500 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5zM12 15a3 3 0 100-6 3 3 0 000 6z"></path>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">24/7 Support</h3>
                        <p class="text-gray-600 mb-4">Round-the-clock assistance and emergency support throughout your journey.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-4">
                            <li>• Emergency hotline</li>
                            <li>• WhatsApp support</li>
                            <li>• Local assistance</li>
                            <li>• Travel insurance</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="text-blue-600 font-medium hover:text-blue-700">Contact Us →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Packages Preview -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Popular Service Packages</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover our most requested service combinations that travelers love
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($packages->take(6) as $package)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-green-400 flex items-center justify-center">
                        <span class="text-white text-2xl font-bold">{{ $package->location }}</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $package->name }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($package->description, 100) }}</p>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold text-blue-600">${{ number_format($package->price, 2) }}</span>
                            <span class="text-gray-500">{{ $package->duration }}</span>
                        </div>
                        <div class="flex space-x-2">
                            <a href="{{ route('packages.show', $package) }}" class="flex-1 bg-blue-600 text-white text-center py-2 px-4 rounded hover:bg-blue-700 transition duration-300">
                                View Details
                            </a>
                            @auth
                                @if(auth()->user()->isCustomer())
                                <a href="{{ route('customer.packages.book', $package) }}" class="flex-1 bg-green-600 text-white text-center py-2 px-4 rounded hover:bg-green-700 transition duration-300">
                                    Book Now
                                </a>
                                @endif
                            @else
                                <a href="{{ route('login') }}" class="flex-1 bg-green-600 text-white text-center py-2 px-4 rounded hover:bg-green-700 transition duration-300">
                                    Login to Book
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('packages') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 inline-block">
                    View All Packages
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Our Services -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Our Services?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We go above and beyond to ensure your Sri Lanka experience is exceptional
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Quality Assured</h3>
                    <p class="text-gray-600">Every service meets our high standards for quality and reliability.</p>
                </div>

                <div class="text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">24/7 Availability</h3>
                    <p class="text-gray-600">We're always here when you need us, day or night.</p>
                </div>

                <div class="text-center">
                    <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Local Expertise</h3>
                    <p class="text-gray-600">Deep knowledge of Sri Lanka's culture, history, and hidden gems.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Personal Touch</h3>
                    <p class="text-gray-600">Personalized service tailored to your specific needs and preferences.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="py-16 bg-gradient-to-r from-blue-600 to-green-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Experience Our Services?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Let us help you create the perfect Sri Lanka adventure with our comprehensive travel services
            </p>
            <div class="space-x-4">
                <a href="{{ route('packages') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 inline-block">
                    Browse Packages
                </a>
                <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300 inline-block">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
