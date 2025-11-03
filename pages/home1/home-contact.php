<section id="contact" class="section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" data-animate><?php echo $SectionTitles['contact']; ?></h2>
            <p class="section-description" data-animate><?php echo $SectionDescriptions['contact']; ?></p>
        </div>
        <div class="contact-section" data-animate>
            <div class="contact-grid">
                <div class="contact-info">
                    <a href="<?php echo $PhoneRef; ?>"><?php echo $Phone; ?></a>
                    <a href="<?php echo $MailRef; ?>"><?php echo $Mail; ?></a>
                    <span><?php echo $Address; ?></span>
                    <?php if (!empty($WhatsAppNumber)) : ?>
                        <a href="<?php echo $WhatsAppRef; ?>" target="_blank" rel="noopener"><?php echo $ContactLabels['whatsapp'] . ' ' . $WhatsAppNumber; ?></a>
                    <?php endif; ?>
                    <div>
                        <?php foreach ($FooterNotes as $note) : ?>
                            <div><?php echo $note; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <?php if (!empty($SocialLinks)) : ?>
                        <div>
                            <strong><?php echo $ContactLabels['social']; ?></strong>
                            <?php foreach ($SocialLinks as $network => $url) : ?>
                                <a href="<?php echo $url; ?>" target="_blank" rel="noopener"><?php echo ucfirst($network); ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <form class="contact-form" action="<?php echo $MailRef; ?>" method="post">
                    <label for="contact-name"><?php echo $ContactForm['name']; ?></label>
                    <input id="contact-name" name="name" type="text" required>

                    <label for="contact-email"><?php echo $ContactForm['email']; ?></label>
                    <input id="contact-email" name="email" type="email" required>

                    <label for="contact-phone"><?php echo $ContactForm['phone']; ?></label>
                    <input id="contact-phone" name="phone" type="tel" required>

                    <label for="contact-message"><?php echo $ContactForm['message']; ?></label>
                    <textarea id="contact-message" name="message" required></textarea>

                    <button class="btn btn-primary" type="submit"><?php echo $ButtonTexts['submit']; ?></button>
                </form>
            </div>
        </div>
        <div data-animate>
            <?php echo $GoogleMap; ?>
        </div>
    </div>
</section>
