<section id="gallery" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['gallery']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['gallery']; ?></p>
        </div>
        <div class="gallery-grid">
            <?php foreach ($GalleryItems as $item) : ?>
                <figure class="gallery-item" data-animate>
                    <img src="<?php echo $BaseURL . $item['image']; ?>" alt="<?php echo $Company . ' project in ' . $City; ?>">
                    <figcaption class="gallery-caption"><?php echo $item['caption']; ?></figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
