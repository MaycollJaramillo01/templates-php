<?php
$full_name = $_SERVER['PHP_SELF'];
$name_array = explode('/', $full_name);
$count = count($name_array);
$page_name = $name_array[$count - 1];
if ($page_name == 'index.php') {
    $namepage = 'Home';
} elseif ($page_name == 'about.php') {
    $namepage = 'About';
} elseif ($page_name == 'services.php') {
    $namepage = 'Services';
} elseif ($page_name == 'testimonials.php') {
    $namepage = 'Testimonials';
} elseif ($page_name == 'projects.php') {
    $namepage = 'Projects';
} elseif ($page_name == 'thank-you.php') {
    $namepage = 'Thank You';
} elseif ($page_name == '404.php') {
    $namepage = 'Not Found';
} elseif ($page_name == 'contact.php') {
    $namepage = 'Contact Us';
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$path = str_replace('\\\\', '/', dirname($_SERVER['PHP_SELF']));
$path = ($path === '/' || $path === '\\') ? '' : rtrim($path, '/') . '/';
$host = isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== '' ? $_SERVER['HTTP_HOST'] : 'localhost';
$BaseURL = $protocol . $host . $path;

$MAVEN = 'http://gomavenhub.com/';
$Company = 'EXCLUSIVE HARDSCAPES INC';
$Domain = 'www.exclusivehardscapesinc.net';
$Address = 'Newnan, GA';
$City = 'Newnan';
$State = 'GA';
$Logo = 'assets/images/logo.svg';

$PhoneName = 'Main';
$Phone = '(678) 330-0535';
$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
$PhoneRef = 'tel:' . str_replace(str_split(' '), '', $PhoneConvert);

$Phone2Name = 'Secondary';
$Phone2 = '';
$Phone2Convert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone2);
$Phone2Ref = 'tel:' . str_replace(str_split(' '), '', $Phone2Convert);

$Mail = 'exclusivehardscapesinc@gmail.com';
$MailRef = 'mailto:' . $Mail;
$WhatsAppNumber = '(678) 330-0535';
$WhatsAppRef = 'https://wa.me/16783300535';

$Services = 'Residential and Commercial Services';
$Estimates = 'Free Estimates Are Available';
$Payment = 'We Accept Cash, Check, Transfers and Cards';
$Experience = '14 Years Of Experience';
$Schedule = 'Monday to Friday from 7:00 am to 5:00 pm';
$Schedule1 = 'Saturday 9:00 am to 3:00 pm';
$Bilingual = 'English & Spanish';
$Licen = 'Fully Insured & Licensed';
$Cover = 'We Cover 30 miles Around Local Area';

$MetaDescription = 'Exclusive Hardscapes Inc delivers licensed hardscaping, outdoor living, and landscaping solutions for homes and businesses across Newnan, GA and surrounding areas.';
$MetaKeywords = 'hardscaping Newnan GA, landscaping Newnan, outdoor living construction, patios Newnan Georgia, Exclusive Hardscapes';
$HeroTitle = $Company . ' - Hardscaping Experts in ' . $City . ', ' . $State;
$HeroSubtitle = 'Trusted professionals crafting durable outdoor living environments tailored to your vision.';
$HeroPrimaryCTA = 'Request Your Free Estimate';
$HeroSecondaryCTA = 'Explore Signature Services';
$HeroScrollText = 'Scroll to discover more';

$SectionTitles = [
    'about' => 'About ' . $Company,
    'mission' => 'Our Mission in ' . $City . ', ' . $State,
    'vision' => 'Our Vision for Outdoor Living',
    'services' => 'Signature Hardscaping Services in ' . $City . ', ' . $State,
    'gallery' => 'Featured Outdoor Transformations',
    'testimonials' => 'Testimonials from Our ' . $City . ' Clients',
    'contact' => 'Connect with ' . $Company,
];

$SectionDescriptions = [
    'about' => 'Delivering elegant patios, retaining walls, and full landscape enhancements for residential and commercial properties.',
    'mission' => 'To elevate every property with innovative hardscaping solutions rooted in craftsmanship, integrity, and customer respect.',
    'vision' => 'To be the preferred outdoor living partner across ' . $City . ' by blending creativity with resilient materials.',
    'services' => 'Explore tailored solutions designed to enrich curb appeal, functionality, and long-term value.',
    'gallery' => 'See how our experienced artisans reshape backyards into vibrant gathering spaces.',
    'testimonials' => 'Neighbors and business owners share how our team delivered results that exceeded expectations.',
    'contact' => 'Let’s collaborate on a space that fits your lifestyle and reflects the character of ' . $City . ', ' . $State . '.',
];

$Navigation = [
    'home' => 'Home',
    'about' => 'About',
    'services' => 'Services',
    'mission' => 'Mission',
    'vision' => 'Vision',
    'gallery' => 'Gallery',
    'testimonials' => 'Testimonials',
    'contact' => 'Contact',
];

$ButtonTexts = [
    'learn_more' => 'Learn More About Our Craftsmanship',
    'discover_services' => 'Discover Complete Services',
    'view_projects' => 'View Recent Projects',
    'contact_us' => 'Contact Our Team',
    'submit' => 'Send Message',
];

$AccessibilityLabels = [
    'nav_toggle' => 'Toggle site navigation',
    'slider_prev' => 'Previous slider item',
    'slider_next' => 'Next slider item',
    'slider_dot' => 'Go to slide',
];

$Home = [
    'Welcome to ' . $Company . ', where we have proudly served our community for over 14 years with top-quality hardscaping services. As a licensed and insured company, we prioritize professionalism, precision, and customer satisfaction in every project we undertake. From stunning outdoor living spaces to durable driveways and walkways, our team of experienced professionals is dedicated to bringing our clients\' visions to life with exceptional craftsmanship and attention to detail.',
    'At ' . $Company . ', we take pride in our commitment to excellence and the long-lasting relationships we build with our valued customers. Our knowledgeable staff is always here to answer any questions and provide expert advice on the best hardscaping solutions for your home or commercial property. Let us transform your outdoor space into a beautiful and functional oasis that you can enjoy for years to come. Contact us today to see why we are the trusted choice for all your hardscaping needs.',
    '',
];

$About = [
    'At ' . $Company . ', quality meets expertise. With 14 years of experience in the hardscaping industry, our team is dedicated to creating stunning outdoor spaces that enhance the beauty and functionality of any property. As a licensed and insured company, we prioritize professionalism and reliability in every project we undertake, ensuring that our clients receive top-notch service and peace of mind throughout the entire process. From custom patios and walkways to intricate stone work and landscape design, ' . $Company . ' is committed to bringing your outdoor vision to life with skill and precision. Trust us to transform your outdoor space into a true masterpiece that you can enjoy for years to come.',
];

$MissionStatement = 'Deliver dependable hardscaping craftsmanship that blends durability, beauty, and personalized service for every project.';
$VisionStatement = 'Create inspiring outdoor destinations where families and businesses in ' . $City . ' gather, celebrate, and thrive year-round.';

$Phrase = [
    'Transform your outdoor space with Exclusive Hardscapes Inc!',
    'Crafting stunning landscapes, one project at a time.',
    'Elevate your curb appeal with our exclusive hardscaping designs.',
    'Unleash the potential of your outdoor living space with Exclusive Hardscapes Inc.',
    'Quality craftsmanship for your dream outdoor oasis.',
];

$SliderHighlights = [
    'Driveways, patios, and retaining walls built to last.',
    'Premium materials sourced for resilience and beauty.',
    'Dedicated project managers guiding each installation.',
];

$SN[1] = 'Landscaping';
$SD[1] = 'Our professional landscaping service offers a comprehensive range of solutions to enhance and maintain outdoor spaces. From design and installation of gardens, lawns, trees, and shrubs to ongoing maintenance such as mowing, pruning, and fertilizing.';
$SN[2] = 'Landscape Irrigation';
$SD[2] = 'Our professional team will design and install a customized irrigation system to keep your lawn and garden lush and healthy all year round.';
$SN[3] = 'Outdoor Lighting';
$SD[3] = 'Transform your outdoor space with our high-quality lighting solutions, highlighting key features of your landscape and creating a warm and inviting atmosphere.';
$SN[4] = 'Pavers';
$SD[4] = 'Enhance your outdoor living space with our exquisite selection of pavers, available in various styles and colors to create beautiful walkways, patios, and driveways.';
$SN[5] = 'Firepits';
$SD[5] = 'Add a touch of warmth and charm to your outdoor gatherings with our custom-designed firepits, perfect for cozy nights with family and friends.';

$ServiceExtras = [
    'cta' => 'Schedule a consultation to plan your next outdoor upgrade.',
    'badge' => $Estimates,
];

$GalleryItems = [
    [
        'image' => 'assets/images/gallery-1.svg',
        'caption' => 'Elegant patio installation with integrated seating walls.',
    ],
    [
        'image' => 'assets/images/gallery-2.svg',
        'caption' => 'Custom firepit lounge crafted for memorable evenings.',
    ],
    [
        'image' => 'assets/images/gallery-3.svg',
        'caption' => 'Welcoming stone pathway with accent lighting for safety.',
    ],
];

$Testimonials = [
    [
        'quote' => 'Their team transformed our backyard into an outdoor living space we use every weekend. The craftsmanship is outstanding.',
        'author' => 'Michael R.',
        'location' => $City . ', ' . $State,
    ],
    [
        'quote' => 'Professional, punctual, and detailed. Our new retaining wall has elevated the curb appeal of our property.',
        'author' => 'Sandra L.',
        'location' => 'Sharpsburg, GA',
    ],
    [
        'quote' => 'From design to installation, Exclusive Hardscapes Inc made the process easy and enjoyable. Highly recommend their services.',
        'author' => 'Luis G.',
        'location' => 'Peachtree City, GA',
    ],
];

$ContactForm = [
    'name' => 'Full Name',
    'email' => 'Email Address',
    'phone' => 'Phone Number',
    'message' => 'Tell us about your project',
];

$ContactLabels = [
    'whatsapp' => 'WhatsApp Consultation:',
    'social' => 'Follow Our Work',
];

$FooterNotes = [
    'experience' => $Experience,
    'schedule' => $Schedule,
    'schedule_weekend' => $Schedule1,
    'cover' => $Cover,
    'bilingual' => $Bilingual,
    'licenses' => $Licen,
    'payments' => $Payment,
];

$facebook = 'https://www.facebook.com/exclusivehardscapesinc';

$SocialLinks = [
    'facebook' => $facebook,
];

$GoogleMap = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53307.90310131645!2d-84.76311095000001!3d33.37775035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f4c62a4dc53ab9%3A0xf4ea9dda60240ecb!2sNewnan%2C%20GA%2C%20USA!5e0!3m2!1sen!2sni!4v1714168581395!5m2!1sen!2sni" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>';

$Description = 'As a licensed and insured company, we prioritize professionalism and reliability in every project we undertake, ensuring that our clients receive top-notch service and peace of mind throughout the entire process.';
$Description2 = '';

if (strlen($Description) > 10) {
    $ExDescription = substr($Description, 0, 152) . '...';
}
if (strlen($About[0]) > 10) {
    $ExAbout = substr($About[0], 0, 145) . '...';
}
if (strlen($Home[0]) > 10) {
    $ExHome = substr($Home[0], 0, 87) . '...';
}

for ($i = 1; $i <= 5; $i++) {
    if (!empty($SD[$i]) && strlen($SD[$i]) > 10) {
        $ExSD[$i] = substr($SD[$i], 0, 110) . '...';
    }
}
?>
