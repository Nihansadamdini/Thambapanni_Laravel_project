<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Booking;
use App\Services\BookingPdfService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    protected $pdfService;

    public function __construct(BookingPdfService $pdfService)
    {
        $this->pdfService = $pdfService;
    }

    public function dashboard(): View
    {
        $user = auth()->user();
        $bookings = $user->bookings()->with('package')->latest()->paginate(10);
        $totalBookings = $user->bookings()->count();
        $totalSpent = $user->bookings()->where('payment_status', 'paid')->sum('total_amount');
        
        // Get featured packages for new customers
        $featuredPackages = Package::active()->latest()->take(3)->get();
        
        // Get user's profile completion status
        $profileComplete = !empty($user->name) && !empty($user->email);
        
        // Get upcoming trips
        $upcomingTrips = $bookings->where('travel_date', '>', now())->take(3);
        
        // Get recent activity
        $recentActivity = $user->bookings()->with('package')->latest()->take(5)->get();

        return view('customer.dashboard', compact(
            'bookings', 
            'totalBookings', 
            'totalSpent', 
            'featuredPackages', 
            'profileComplete',
            'upcomingTrips',
            'recentActivity'
        ));
    }

    public function profile(): View
    {
        $user = auth()->user();
        $bookings = $user->bookings()->with('package')->latest()->take(5)->get();
        $totalBookings = $user->bookings()->count();
        $totalSpent = $user->bookings()->where('payment_status', 'paid')->sum('total_amount');
        $upcomingTrips = $user->bookings()->where('travel_date', '>', now())->where('booking_status', 'confirmed')->count();
        $completedTrips = $user->bookings()->where('booking_status', 'completed')->count();
        
        return view('customer.profile', compact('user', 'bookings', 'totalBookings', 'totalSpent', 'upcomingTrips', 'completedTrips'));
    }

    public function packages(): View
    {
        $packages = Package::active()->latest()->paginate(12);
        return view('customer.packages', compact('packages'));
    }

    public function packageShow(Package $package): View
    {
        return view('customer.package-show', compact('package'));
    }

    public function bookPackage(Package $package): View
    {
        return view('customer.book-package', compact('package'));
    }

    public function storeBooking(Request $request, Package $package): RedirectResponse
    {
        $validated = $request->validate([
            'travelers_count' => 'required|integer|min:1|max:' . $package->max_travelers,
            'travel_date' => 'required|date|after:today',
            'special_requests' => 'nullable|string|max:500',
            'payment_method' => 'required|in:credit_card,debit_card,bank_transfer'
        ]);

        $totalAmount = $package->price * $validated['travelers_count'];

        $booking = Booking::create([
            'user_id' => auth()->id(),
            'package_id' => $package->id,
            'travelers_count' => $validated['travelers_count'],
            'total_amount' => $totalAmount,
            'travel_date' => $validated['travel_date'],
            'special_requests' => $validated['special_requests'],
            'payment_method' => $validated['payment_method'],
            'booking_reference' => 'BK-' . strtoupper(Str::random(8)),
            'payment_status' => 'pending',
            'booking_status' => 'pending'
        ]);

        return redirect()->route('customer.payment', $booking)->with('success', 'Booking created successfully! Please complete the payment.');
    }

    public function payment(Booking $booking): View
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        return view('customer.payment', compact('booking'));
    }

    public function processPayment(Request $request, Booking $booking): RedirectResponse
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'card_number' => 'required|string|size:16',
            'expiry_month' => 'required|integer|between:1,12',
            'expiry_year' => 'required|integer|min:' . date('Y'),
            'cvv' => 'required|string|size:3',
            'cardholder_name' => 'required|string|max:255'
        ]);

        // Simulate payment processing
        $paymentSuccess = rand(1, 10) > 2; // 80% success rate

        if ($paymentSuccess) {
            $booking->update([
                'payment_status' => 'paid',
                'transaction_id' => 'TXN-' . strtoupper(Str::random(12)),
                'booking_status' => 'confirmed'
            ]);

            return redirect()->route('customer.bookings.success', $booking)->with('success', 'Payment successful! Your booking has been confirmed.');
        } else {
            $booking->update([
                'payment_status' => 'failed',
                'transaction_id' => 'TXN-' . strtoupper(Str::random(12))
            ]);

            return redirect()->route('customer.payment', $booking)->with('error', 'Payment failed. Please try again.');
        }
    }

    public function bookingSuccess(Booking $booking): View
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        return view('customer.booking-success', compact('booking'));
    }

    public function bookingShow(Booking $booking): View
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        return view('customer.booking-show', compact('booking'));
    }

    public function cancelBooking(Booking $booking): RedirectResponse
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        if ($booking->booking_status === 'confirmed') {
            $booking->update(['booking_status' => 'cancelled']);
            return redirect()->route('customer.dashboard')->with('success', 'Booking cancelled successfully.');
        }

        return redirect()->route('customer.dashboard')->with('error', 'Cannot cancel this booking.');
    }

    public function downloadPdf(Booking $booking)
    {
        if ($booking->user_id !== auth()->id()) {
            abort(403);
        }

        return $this->pdfService->downloadBookingConfirmation($booking);
    }
}
