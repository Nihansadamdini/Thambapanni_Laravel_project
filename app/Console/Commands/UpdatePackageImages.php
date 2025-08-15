<?php

namespace App\Console\Commands;

use App\Models\Package;
use Illuminate\Console\Command;

class UpdatePackageImages extends Command
{
    protected $signature = 'packages:update-images';
    protected $description = 'Update package images with existing image files';

    public function handle()
    {
        $this->info('Updating package images...');

        $packages = Package::all();
        
        foreach ($packages as $package) {
            $imageName = $this->getImageNameForPackage($package);
            
            if ($imageName) {
                $package->update(['image' => 'packages/' . $imageName]);
                $this->info("Updated {$package->name} with image: {$imageName}");
            } else {
                $this->warn("No image found for {$package->name} - Location: {$package->location}");
            }
        }

        $this->info('Package images updated successfully!');
    }

    private function getImageNameForPackage($package)
    {
        $location = strtolower($package->location);
        $name = strtolower($package->name);
        
        // More comprehensive mapping
        $imageMap = [
            // Direct location matches
            'colombo' => 'colombo-city-discovery.jpg',
            'kandy' => 'kandy-cultural-heritage.jpg',
            'sigiriya' => 'sigiriya-dambulla-heritage.jpg',
            'dambulla' => 'sigiriya-dambulla-heritage.jpg',
            'ella' => 'ella-adventure-hiking.jpg',
            'galle' => 'galle-fort-southern-beaches.jpg',
            'bentota' => 'bentota-beach-paradise.jpg',
            'jaffna' => 'jaffna-cultural-experience.jpg',
            
            // Theme-based matches
            'ancient' => 'ancient-cities-temples.jpg',
            'temples' => 'ancient-cities-temples.jpg',
            'heritage' => 'ancient-cities-temples.jpg',
            'cultural' => 'ancient-cities-temples.jpg',
            'tea' => 'tea-country-hill-stations.jpg',
            'hill' => 'tea-country-hill-stations.jpg',
            'mountain' => 'tea-country-hill-stations.jpg',
            'beach' => 'bentota-beach-paradise.jpg',
            'coastal' => 'galle-fort-southern-beaches.jpg',
            'fort' => 'galle-fort-southern-beaches.jpg',
            'southern' => 'galle-fort-southern-beaches.jpg',
            'adventure' => 'ella-adventure-hiking.jpg',
            'hiking' => 'ella-adventure-hiking.jpg',
            'northern' => 'jaffna-cultural-experience.jpg',
        ];

        // First try exact location match
        if (isset($imageMap[$location])) {
            return $imageMap[$location];
        }

        // Try partial location matches
        foreach ($imageMap as $key => $image) {
            if (str_contains($location, $key)) {
                return $image;
            }
        }

        // Try name-based matches
        foreach ($imageMap as $key => $image) {
            if (str_contains($name, $key)) {
                return $image;
            }
        }

        // Fallback based on package type
        if (str_contains($name, 'city') || str_contains($name, 'discovery')) {
            return 'colombo-city-discovery.jpg';
        }
        
        if (str_contains($name, 'heritage') || str_contains($name, 'cultural')) {
            return 'kandy-cultural-heritage.jpg';
        }
        
        if (str_contains($name, 'beach') || str_contains($name, 'paradise')) {
            return 'bentota-beach-paradise.jpg';
        }
        
        if (str_contains($name, 'fort') || str_contains($name, 'southern')) {
            return 'galle-fort-southern-beaches.jpg';
        }
        
        if (str_contains($name, 'adventure') || str_contains($name, 'hiking')) {
            return 'ella-adventure-hiking.jpg';
        }
        
        if (str_contains($name, 'tea') || str_contains($name, 'hill')) {
            return 'tea-country-hill-stations.jpg';
        }
        
        if (str_contains($name, 'ancient') || str_contains($name, 'temples')) {
            return 'ancient-cities-temples.jpg';
        }

        return null;
    }
}
