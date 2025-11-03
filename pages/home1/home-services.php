<section id="services" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['services']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['services']; ?></p>
        </div>
        <div class="services-grid">
            <?php foreach ($SN as $index => $serviceName) : ?>
                <?php if (!empty($serviceName)) : ?>
                    <article class="service-card animate-scale" data-animate>
                        <h3><?php echo $serviceName; ?></h3>
                        <p><?php echo $SD[$index]; ?></p>
                        <a class="btn btn-primary" href="#contact"><?php echo $ButtonTexts['contact_us']; ?></a>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="section-header" data-animate>
            <p class="section-description"><?php echo $ServiceExtras['cta']; ?></p>
        </div>
    </div>
</section>
