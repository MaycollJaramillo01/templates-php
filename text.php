<?php
// Core identity values with fallbacks to preserve overrides
$Company = $Company ?? 'PrimeCraft Services';
$Domain = $Domain ?? 'primecraftservices.com';
$BaseURL = $BaseURL ?? '/';
$Address = $Address ?? '742 Evergreen Terrace';
$City = $City ?? 'Springfield';
$State = $State ?? 'IL';
$Zip = $Zip ?? '62704';
$Country = $Country ?? 'USA';
$Mail = $Mail ?? 'hello@primecraftservices.com';
$Phone = $Phone ?? '(555) 123-4567';
$Phone2 = $Phone2 ?? '(555) 765-4321';
$WhatsApp = $WhatsApp ?? '+15551234567';
$Phrase = $Phrase ?? 'Transforming spaces with precision and care';
$ActiveHome = $ActiveHome ?? 'HOME1';
$ActiveIndustry = $ActiveIndustry ?? 'roofing';

// Helper references
if (!function_exists('telRef')) {
    function telRef(string $number): string
    {
        return preg_replace('/[^\d+]/', '', $number);
    }
}
$PhoneRef = telRef($Phone);
$WARef = telRef($WhatsApp);

$ServiceAreas = $ServiceAreas ?? [
    'Downtown',
    'Northside',
    'Riverside',
    'Old Town',
    'Lakeside'
];

$HeroImages = $HeroImages ?? [
    'assets/img/hero-roofing.jpg',
    'assets/img/hero-painting.jpg',
    'assets/img/hero-remodeling.jpg'
];

$Gallery = $Gallery ?? [
    ['src' => 'assets/img/gallery-1.jpg', 'alt' => 'Finished roofing project'],
    ['src' => 'assets/img/gallery-2.jpg', 'alt' => 'Interior painting makeover'],
    ['src' => 'assets/img/gallery-3.jpg', 'alt' => 'Kitchen remodeling result'],
    ['src' => 'assets/img/gallery-4.jpg', 'alt' => 'Stamped concrete patio'],
    ['src' => 'assets/img/gallery-5.jpg', 'alt' => 'Commercial cleaning team'],
];

$ServicesByIndustry = $ServicesByIndustry ?? [
    'roofing' => [
        ['title' => 'Residential Roofing', 'desc' => 'Durable installations and replacements for homes.'],
        ['title' => 'Commercial Roofing', 'desc' => 'Flat and metal roofing solutions built to last.'],
        ['title' => 'Roof Repair & Maintenance', 'desc' => 'Emergency leak repairs and scheduled upkeep.'],
        ['title' => 'Gutter Installation', 'desc' => 'Seamless systems to protect your property.'],
    ],
    'painting' => [
        ['title' => 'Interior Painting', 'desc' => 'Crisp lines and low-VOC finishes for every room.'],
        ['title' => 'Exterior Painting', 'desc' => 'Weather-resistant coatings for curb appeal.'],
        ['title' => 'Cabinet Refinishing', 'desc' => 'Updated cabinetry with minimal downtime.'],
        ['title' => 'Wallpaper Removal', 'desc' => 'Clean removal and surface preparation.'],
    ],
    'remodeling' => [
        ['title' => 'Kitchen Renovations', 'desc' => 'Custom cabinetry, countertops, and lighting.'],
        ['title' => 'Bathroom Upgrades', 'desc' => 'Spa-inspired fixtures and accessible layouts.'],
        ['title' => 'Basement Finishing', 'desc' => 'Transform unused space into livable rooms.'],
        ['title' => 'Additions & Extensions', 'desc' => 'Expand square footage seamlessly.'],
    ],
    'concrete' => [
        ['title' => 'Stamped Concrete', 'desc' => 'Decorative textures for patios and driveways.'],
        ['title' => 'Foundation Work', 'desc' => 'Solid foundations engineered for longevity.'],
        ['title' => 'Flatwork', 'desc' => 'Precision slabs for residential and commercial sites.'],
        ['title' => 'Concrete Repair', 'desc' => 'Restore structural integrity and appearance.'],
    ],
    'cleaning' => [
        ['title' => 'Residential Cleaning', 'desc' => 'Consistent housekeeping with eco-friendly products.'],
        ['title' => 'Commercial Janitorial', 'desc' => 'Flexible scheduling for offices and retail.'],
        ['title' => 'Post-Construction Cleanups', 'desc' => 'Detail-focused cleanup for renovations.'],
        ['title' => 'Floor Care Services', 'desc' => 'Strip, wax, and polish programs.'],
    ],
];

$Testimonials = $Testimonials ?? [
    ['name' => 'Jordan M.', 'rating' => 5, 'comment' => 'Outstanding craftsmanship and friendly crew!', 'date' => '2024-02-18'],
    ['name' => 'Avery P.', 'rating' => 4, 'comment' => 'Project finished on time and on budget.', 'date' => '2024-03-05'],
    ['name' => 'Casey L.', 'rating' => 5, 'comment' => 'Highly recommend for their attention to detail.', 'date' => '2024-04-12'],
];

$Social = $Social ?? [
    'facebook' => 'https://facebook.com/primecraft',
    'instagram' => 'https://instagram.com/primecraft',
    'yelp' => '',
    'youtube' => '',
    'linkedin' => '',
    'angi' => '',
    'bbb' => '',
];

$FeaturePopup = $FeaturePopup ?? false;
$FeatureGoogleReviews = $FeatureGoogleReviews ?? false;
$FeatureSocialModal = $FeatureSocialModal ?? true;
$FeatureChatbot = $FeatureChatbot ?? false;

