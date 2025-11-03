<section id="about" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['about']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['about']; ?></p>
        </div>
        <div class="about-grid">
            <article class="about-card" data-animate>
                <p><?php echo $Home[0]; ?></p>
                <a class="btn btn-primary" href="#services"><?php echo $ButtonTexts['discover_services']; ?></a>
            </article>
            <article class="about-card" data-animate>
                <p><?php echo $About[0]; ?></p>
                <a class="btn btn-primary" href="#contact"><?php echo $ButtonTexts['contact_us']; ?></a>
            </article>
        </div>
    </div>
</section>
<section id="mission" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['mission']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['mission']; ?></p>
        </div>
        <article class="about-card" data-animate>
            <p><?php echo $MissionStatement; ?></p>
            <ul>
                <?php foreach ($SliderHighlights as $highlight) : ?>
                    <li><?php echo $highlight; ?></li>
                <?php endforeach; ?>
            </ul>
        </article>
    </div>
</section>
<section id="vision" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['vision']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['vision']; ?></p>
        </div>
        <article class="about-card" data-animate>
            <p><?php echo $VisionStatement; ?></p>
            <a class="btn btn-primary" href="#gallery"><?php echo $ButtonTexts['view_projects']; ?></a>
        </article>
    </div>
</section>
