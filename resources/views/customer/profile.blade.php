<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-3 sm:space-y-0 sm:space-x-4">
            <div class="bg-gradient-to-r from-emerald-500 to-teal-600 p-3 rounded-full">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
            <div>
                <h2 class="font-bold text-xl sm:text-2xl text-gray-900">
                    {{ __('My Profile') }}
                </h2>
                <p class="text-sm sm:text-base text-gray-600">Manage your travel profile and account settings</p>
            </div>
        </div>
    </x-slot>

    <div class="py-6 sm:py-12 bg-gradient-to-br from-emerald-50 to-teal-50 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6 sm:space-y-8">
            
            <!-- Profile Stats Overview -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-6">
                <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 p-3 sm:p-6 text-center">
                    <div class="bg-emerald-100 w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-xl sm:text-3xl font-bold text-emerald-600">{{ $totalBookings }}</div>
                    <div class="text-xs sm:text-sm text-emerald-600">Total Bookings</div>
                </div>
                
                <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 p-3 sm:p-6 text-center">
                    <div class="bg-blue-100 w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-xl sm:text-3xl font-bold text-blue-600">{{ $upcomingTrips }}</div>
                    <div class="text-xs sm:text-sm text-blue-600">Upcoming Trips</div>
                </div>
                
                <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 p-3 sm:p-6 text-center">
                    <div class="bg-green-100 w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="text-xl sm:text-3xl font-bold text-green-600">{{ $completedTrips }}</div>
                    <div class="text-xs sm:text-sm text-green-600">Completed Trips</div>
                </div>
                
                <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 p-3 sm:p-6 text-center">
                    <div class="bg-purple-100 w-12 h-12 sm:w-16 sm:h-16 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4">
                        <svg class="w-6 h-6 sm:w-8 sm:h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <div class="text-lg sm:text-3xl font-bold text-purple-600">${{ number_format($totalSpent, 0) }}</div>
                    <div class="text-xs sm:text-sm text-purple-600">Total Spent</div>
                </div>
            </div>

            <!-- Profile Information Section -->
            <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-emerald-600 to-teal-600 px-4 sm:px-6 py-3 sm:py-4">
                    <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                        <div class="bg-white bg-opacity-20 p-2 rounded-lg self-start sm:self-auto">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-white">Personal Information</h3>
                            <p class="text-sm text-emerald-100">Update your travel profile and contact details</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    @include('customer.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Security Settings Section -->
            <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-4 sm:px-6 py-3 sm:py-4">
                    <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                        <div class="bg-white bg-opacity-20 p-2 rounded-lg self-start sm:self-auto">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-white">Security Settings</h3>
                            <p class="text-sm text-blue-100">Keep your account secure with a strong password</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    @include('customer.partials.update-password-form')
                </div>
            </div>

            <!-- Recent Bookings Section -->
            <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-orange-600 to-red-600 px-4 sm:px-6 py-3 sm:py-4">
                    <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                        <div class="bg-white bg-opacity-20 p-2 rounded-lg self-start sm:self-auto">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-white">Recent Bookings</h3>
                            <p class="text-sm text-orange-100">Your latest travel arrangements and bookings</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    @if($bookings->count() > 0)
                        <div class="space-y-3 sm:space-y-4">
                            @foreach($bookings as $booking)
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between p-3 sm:p-4 bg-gray-50 rounded-lg sm:rounded-xl hover:bg-gray-100 transition-colors duration-200">
                                    <div class="flex items-center space-x-3 sm:space-x-4 mb-3 sm:mb-0">
                                        <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-r from-emerald-400 to-teal-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div class="min-w-0 flex-1">
                                            <h4 class="font-semibold text-gray-900 text-sm sm:text-base truncate">{{ $booking->package->name }}</h4>
                                            <p class="text-xs sm:text-sm text-gray-600 truncate">{{ $booking->package->location }}</p>
                                            <p class="text-xs text-gray-500">Travel Date: {{ \Carbon\Carbon::parse($booking->travel_date)->format('M d, Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="text-left sm:text-right">
                                        <div class="text-base sm:text-lg font-bold text-gray-900 mb-2 sm:mb-0">${{ number_format($booking->total_amount, 0) }}</div>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                            @if($booking->booking_status === 'confirmed') bg-green-100 text-green-800
                                            @elseif($booking->booking_status === 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($booking->booking_status === 'cancelled') bg-red-100 text-red-800
                                            @else bg-gray-100 text-gray-800 @endif">
                                            {{ ucfirst($booking->booking_status) }}
                                        </span>
                                        @if($booking->booking_status === 'confirmed' && $booking->payment_status === 'paid')
                                        <div class="mt-2">
                                            <a href="{{ route('customer.bookings.pdf', $booking) }}" class="inline-flex items-center px-3 py-1 bg-green-600 text-white text-xs font-medium rounded hover:bg-green-700 transition-colors duration-200">
                                                <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                </svg>
                                                PDF
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-4 sm:mt-6 text-center">
                            <a href="{{ route('customer.dashboard') }}" class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 bg-emerald-600 text-white text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                View All Bookings
                            </a>
                        </div>
                    @else
                        <div class="text-center py-6 sm:py-8">
                            <div class="w-12 h-12 sm:w-16 sm:h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3 sm:mb-4">
                                <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-medium text-gray-900 mb-2">No Bookings Yet</h3>
                            <p class="text-sm sm:text-base text-gray-600 mb-4">Start your travel journey by exploring our amazing packages!</p>
                            <a href="{{ route('customer.packages') }}" class="inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 bg-emerald-600 text-white text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Explore Packages
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Account Deletion Section -->
            <div class="bg-white rounded-xl sm:rounded-2xl shadow-lg sm:shadow-xl border border-gray-100 overflow-hidden">
                <div class="bg-gradient-to-r from-red-600 to-pink-600 px-4 sm:px-6 py-3 sm:py-4">
                    <div class="flex flex-col sm:flex-row sm:items-center space-y-2 sm:space-y-0 sm:space-x-3">
                        <div class="bg-white bg-opacity-20 p-2 rounded-lg self-start sm:self-auto">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-white">Danger Zone</h3>
                            <p class="text-sm text-red-100">Permanently delete your account and all associated data</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    @include('customer.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
