<?php

namespace App\Console\Commands;

use App\Services\BookingPdfService;
use Illuminate\Console\Command;

class CleanupTempPdfs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pdfs:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean up temporary PDF files older than 1 hour';

    /**
     * Execute the console command.
     */
    public function handle(BookingPdfService $pdfService): int
    {
        $this->info('Cleaning up temporary PDF files...');
        
        try {
            $pdfService->cleanupTempFiles();
            $this->info('Temporary PDF files cleaned up successfully!');
            return 0;
        } catch (\Exception $e) {
            $this->error('Error cleaning up temporary PDF files: ' . $e->getMessage());
            return 1;
        }
    }
}
