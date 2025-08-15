<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

class UpdatePackageImagesSeeder extends Seeder
{
    public function run()
    {
        $this->command->info('Updating package images with nature photos of Sri Lanka...');

        $packages = Package::all();
        
        foreach ($packages as $package) {
            $imageName = $this->getImageNameForPackage($package);
            
            if ($imageName) {
                $package->update(['image' => 'packages/' . $imageName]);
                $this->command->info("Updated {$package->name} with image: {$imageName}");
            } else {
                $this->command->warn("No image found for {$package->name} - Location: {$package->location}");
            }
        }

        $this->command->info('Package images updated successfully with nature photos!');
    }

    private function getImageNameForPackage($package)
    {
        $location = strtolower($package->location);
        $name = strtolower($package->name);
        
        // Direct location matches with nature focus
        if (str_contains($location, 'colombo')) {
            return 'colombo-city-discovery.jpg';
        }
        
        if (str_contains($location, 'kandy')) {
            return 'kandy-cultural-heritage.jpg';
        }
        
        if (str_contains($location, 'sigiriya') || str_contains($location, 'dambulla')) {
            return 'sigiriya-dambulla-heritage.jpg';
        }
        
        if (str_contains($location, 'ella')) {
            return 'ella-adventure-hiking.jpg';
        }
        
        if (str_contains($location, 'galle')) {
            return 'galle-fort-southern-beaches.jpg';
        }
        
        if (str_contains($location, 'bentota')) {
            return 'bentota-beach-paradise.jpg';
        }
        
        if (str_contains($location, 'jaffna')) {
            return 'jaffna-cultural-experience.jpg';
        }
        
        // Nature and wildlife focused matches
        if (str_contains($location, 'wildlife') || str_contains($location, 'safari') || str_contains($location, 'yala') || str_contains($location, 'udawalawe')) {
            return 'wildlife-safari-adventure.jpg';
        }
        
        if (str_contains($location, 'waterfall') || str_contains($location, 'bambarakanda') || str_contains($location, 'ravana') || str_contains($location, 'devon')) {
            return 'waterfalls-nature.jpg';
        }
        
        if (str_contains($location, 'mountain') || str_contains($location, 'peak') || str_contains($location, 'adam') || str_contains($location, 'knuckles')) {
            return 'mountain-peaks-nature.jpg';
        }
        
        if (str_contains($location, 'forest') || str_contains($location, 'rainforest') || str_contains($location, 'sinharaja')) {
            return 'rainforest-nature.jpg';
        }
        
        if (str_contains($location, 'river') || str_contains($location, 'mahaweli') || str_contains($location, 'kelani')) {
            return 'rivers-nature.jpg';
        }
        
        if (str_contains($location, 'lake') || str_contains($location, 'garden') || str_contains($location, 'botanical')) {
            return 'lakes-gardens-nature.jpg';
        }
        
        if (str_contains($location, 'ancient') || str_contains($location, 'temples')) {
            return 'ancient-cities-temples.jpg';
        }
        
        if (str_contains($location, 'tea') || str_contains($location, 'hill') || str_contains($location, 'nuwara eliya')) {
            return 'tea-country-hill-stations.jpg';
        }
        
        if (str_contains($location, 'beach') || str_contains($location, 'coastal') || str_contains($location, 'mirissa') || str_contains($location, 'trincomalee')) {
            return 'bentota-beach-paradise.jpg';
        }
        
        if (str_contains($location, 'fort') || str_contains($location, 'southern')) {
            return 'galle-fort-southern-beaches.jpg';
        }
        
        if (str_contains($location, 'adventure') || str_contains($location, 'hiking') || str_contains($location, 'trekking')) {
            return 'ella-adventure-hiking.jpg';
        }
        
        if (str_contains($location, 'northern')) {
            return 'jaffna-cultural-experience.jpg';
        }
        
        if (str_contains($location, 'heritage') || str_contains($location, 'cultural')) {
            return 'ancient-cities-temples.jpg';
        }

        // Fallback based on package name with nature focus
        if (str_contains($name, 'wildlife') || str_contains($name, 'safari') || str_contains($name, 'elephant') || str_contains($name, 'leopard')) {
            return 'wildlife-safari-adventure.jpg';
        }
        
        if (str_contains($name, 'waterfall') || str_contains($name, 'nature') || str_contains($name, 'scenic')) {
            return 'waterfalls-nature.jpg';
        }
        
        if (str_contains($name, 'mountain') || str_contains($name, 'peak') || str_contains($name, 'climbing')) {
            return 'mountain-peaks-nature.jpg';
        }
        
        if (str_contains($name, 'forest') || str_contains($name, 'rainforest') || str_contains($name, 'jungle')) {
            return 'rainforest-nature.jpg';
        }
        
        if (str_contains($name, 'river') || str_contains($name, 'rafting') || str_contains($name, 'kayaking')) {
            return 'rivers-nature.jpg';
        }
        
        if (str_contains($name, 'lake') || str_contains($name, 'garden') || str_contains($name, 'botanical')) {
            return 'lakes-gardens-nature.jpg';
        }
        
        if (str_contains($name, 'city') || str_contains($name, 'discovery')) {
            return 'colombo-city-discovery.jpg';
        }
        
        if (str_contains($name, 'heritage') || str_contains($name, 'cultural')) {
            return 'kandy-cultural-heritage.jpg';
        }
        
        if (str_contains($name, 'beach') || str_contains($name, 'paradise') || str_contains($name, 'coastal')) {
            return 'bentota-beach-paradise.jpg';
        }
        
        if (str_contains($name, 'fort') || str_contains($name, 'southern')) {
            return 'galle-fort-southern-beaches.jpg';
        }
        
        if (str_contains($name, 'adventure') || str_contains($name, 'hiking') || str_contains($name, 'trekking')) {
            return 'ella-adventure-hiking.jpg';
        }
        
        if (str_contains($name, 'tea') || str_contains($name, 'hill') || str_contains($name, 'plantation')) {
            return 'tea-country-hill-stations.jpg';
        }
        
        if (str_contains($name, 'ancient') || str_contains($name, 'temples')) {
            return 'ancient-cities-temples.jpg';
        }

        // Default fallback to nature
        return 'waterfalls-nature.jpg';
    }
}
