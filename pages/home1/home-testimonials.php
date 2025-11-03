<section id="testimonials" class="section testimonials">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['testimonials']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['testimonials']; ?></p>
        </div>
        <div class="testimonial-list">
            <?php foreach ($Testimonials as $testimonial) : ?>
                <article class="testimonial-card" data-animate>
                    <p><?php echo $testimonial['quote']; ?></p>
                    <div class="testimonial-author">
                        <span><?php echo $testimonial['author']; ?></span>
                        <span><?php echo $testimonial['location']; ?></span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
