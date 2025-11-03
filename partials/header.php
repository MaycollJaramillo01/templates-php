<?php
require_once __DIR__ . '/../text.php';

if (!function_exists('render_social_icons')) {
    function render_social_icons(array $social): string
    {
        $icons = [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'linkedin' => 'LinkedIn',
            'yelp' => 'Yelp',
            'angi' => 'Angi',
            'bbb' => 'BBB',
            'thumbtack' => 'Thumbtack',
            'nextdoor' => 'Nextdoor',
            'houzz' => 'Houzz',
            'mapquest' => 'MapQuest',
            'manta' => 'Manta',
            'chamber' => 'Chamber of Commerce',
            'gbp' => 'Google Business Profile',
            'bing' => 'Bing Places',
            'applemaps' => 'Apple Maps'
        ];
        $html = '';
        foreach ($icons as $key => $label) {
            if (!empty($social[$key])) {
                $html .= '<a href="' . htmlspecialchars($social[$key]) . '" target="_blank" rel="noopener" class="badge" data-anim="from-bottom">' . htmlspecialchars($label) . '</a>';
            }
        }
        return $html;
    }
}
?>
<header class="header-bar" role="banner">
  <div class="container flex flex-between" style="gap:var(--spacing-4); padding:var(--spacing-4) 0;">
    <div>
      <a href="<?php echo htmlspecialchars($BaseURL); ?>" class="stack" style="text-decoration:none;">
        <span class="badge" data-anim="from-bottom">Serving <?php echo htmlspecialchars($City . ', ' . $State); ?></span>
        <strong data-anim="from-bottom" data-anim-delay="80" style="font-size:1.25rem;"><?php echo htmlspecialchars($Company); ?></strong>
        <span data-anim="from-bottom" data-anim-delay="140" class="text-muted" style="font-size:0.85rem;">Call <a href="tel:<?php echo htmlspecialchars($PhoneRef); ?>"><?php echo htmlspecialchars($Phone); ?></a></span>
      </a>
    </div>
    <?php include __DIR__ . '/nav.php'; ?>
  </div>
  <?php if (!empty($FeaturePopup) && $FeaturePopup): ?>
    <?php include __DIR__ . '/../features/popup.php'; ?>
  <?php endif; ?>
  <?php if (!empty($FeatureGoogleReviews) && $FeatureGoogleReviews): ?>
    <?php include __DIR__ . '/../features/google-reviews.php'; ?>
  <?php endif; ?>
  <?php if (!empty($FeatureSocialModal) && $FeatureSocialModal): ?>
    <?php include __DIR__ . '/../features/social-modal.php'; ?>
  <?php endif; ?>
  <?php if (!empty($FeatureChatbot) && $FeatureChatbot): ?>
    <?php include __DIR__ . '/../features/chatbot.php'; ?>
  <?php endif; ?>
</header>
