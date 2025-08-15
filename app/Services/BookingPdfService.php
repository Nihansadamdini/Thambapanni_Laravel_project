<?php

namespace App\Services;

use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BookingPdfService
{
    public function generateBookingConfirmation(Booking $booking): string
    {
        try {
            $data = [
                'booking' => $booking,
                'package' => $booking->package,
                'user' => $booking->user,
                'generated_at' => now()->format('F j, Y \a\t g:i A'),
                'booking_number' => 'BK-' . str_pad($booking->id, 6, '0', STR_PAD_LEFT),
            ];

            $pdf = PDF::loadView('pdfs.booking-confirmation', $data);
            
            // Set paper size and orientation
            $pdf->setPaper('A4', 'portrait');
            
            // Generate filename
            $filename = 'booking-confirmation-' . $data['booking_number'] . '.pdf';
            
            // Store PDF temporarily
            $path = 'temp/' . $filename;
            Storage::disk('public')->put($path, $pdf->output());
            
            return $path;
        } catch (\Exception $e) {
            Log::error('Error generating PDF for booking ' . $booking->id . ': ' . $e->getMessage());
            throw new \Exception('Failed to generate PDF: ' . $e->getMessage());
        }
    }

    public function downloadBookingConfirmation(Booking $booking)
    {
        try {
            $data = [
                'booking' => $booking,
                'package' => $booking->package,
                'user' => $booking->user,
                'generated_at' => now()->format('F j, Y \a\t g:i A'),
                'booking_number' => 'BK-' . str_pad($booking->id, 6, '0', STR_PAD_LEFT),
            ];

            $pdf = PDF::loadView('pdfs.booking-confirmation', $data);
            $pdf->setPaper('A4', 'portrait');
            
            $filename = 'booking-confirmation-' . $data['booking_number'] . '.pdf';
            
            return $pdf->download($filename);
        } catch (\Exception $e) {
            Log::error('Error downloading PDF for booking ' . $booking->id . ': ' . $e->getMessage());
            throw new \Exception('Failed to download PDF: ' . $e->getMessage());
        }
    }

    public function cleanupTempFiles(): void
    {
        try {
            // Remove temporary PDF files older than 1 hour
            $files = Storage::disk('public')->files('temp');
            $cutoff = now()->subHour();
            $deletedCount = 0;
            
            foreach ($files as $file) {
                $lastModified = Storage::disk('public')->lastModified($file);
                if ($lastModified < $cutoff->timestamp) {
                    Storage::disk('public')->delete($file);
                    $deletedCount++;
                }
            }
            
            Log::info("Cleaned up {$deletedCount} temporary PDF files");
        } catch (\Exception $e) {
            Log::error('Error cleaning up temporary PDF files: ' . $e->getMessage());
            throw $e;
        }
    }
}
