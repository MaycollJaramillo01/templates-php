<section id="home" class="hero">
    <div class="container hero-inner">
        <div class="hero-content" data-animate>
            <h1 class="hero-title"><?php echo $HeroTitle; ?></h1>
            <p class="hero-subtitle"><?php echo $HeroSubtitle; ?></p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="<?php echo $PhoneRef; ?>"><?php echo $HeroPrimaryCTA; ?></a>
                <a class="btn btn-outline" href="#services"><?php echo $HeroSecondaryCTA; ?></a>
            </div>
            <div class="hero-meta">
                <span><?php echo $ServiceExtras['badge']; ?></span>
                <span><?php echo $Experience; ?></span>
                <span><?php echo $Licen; ?></span>
            </div>
            <a class="hero-scroll" href="#about"><?php echo $HeroScrollText; ?></a>
        </div>
        <div class="slider" data-slider data-animate data-prev-label="<?php echo $AccessibilityLabels['slider_prev']; ?>" data-next-label="<?php echo $AccessibilityLabels['slider_next']; ?>" data-dot-label="<?php echo $AccessibilityLabels['slider_dot']; ?>">
            <div class="slider-track" data-slider-track>
                <?php foreach ($Phrase as $index => $text) : ?>
                    <article class="slide" data-slide>
                        <h3><?php echo $text; ?></h3>
                        <p><?php echo $SliderHighlights[$index % count($SliderHighlights)]; ?></p>
                        <div class="hero-meta">
                            <span><?php echo $ServiceExtras['cta']; ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <button class="slider-arrow prev" type="button" data-slider-prev aria-label="<?php echo $AccessibilityLabels['slider_prev']; ?>">&#10094;</button>
            <button class="slider-arrow next" type="button" data-slider-next aria-label="<?php echo $AccessibilityLabels['slider_next']; ?>">&#10095;</button>
            <div class="slider-nav" data-slider-dots></div>
        </div>
    </div>
</section>
