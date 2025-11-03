<footer class="site-footer" id="footer">
    <div class="container">
        <div class="footer-grid" data-animate>
            <div>
                <a class="brand" href="<?php echo $BaseURL; ?>">
                    <img src="<?php echo $BaseURL . $Logo; ?>" alt="<?php echo $Company . ' ' . $City; ?>">
                    <span><?php echo $Company; ?></span>
                </a>
                <p><?php echo $MetaDescription; ?></p>
            </div>
            <div>
                <strong><?php echo $Navigation['contact']; ?></strong>
                <a href="<?php echo $PhoneRef; ?>"><?php echo $Phone; ?></a>
                <a href="<?php echo $MailRef; ?>"><?php echo $Mail; ?></a>
                <span><?php echo $Address; ?></span>
            </div>
            <div>
                <strong><?php echo $Services; ?></strong>
                <span><?php echo $Estimates; ?></span>
                <span><?php echo $Cover; ?></span>
            </div>
            <div>
                <strong><?php echo $ButtonTexts['view_projects']; ?></strong>
                <span><?php echo $Payment; ?></span>
                <span><?php echo $Bilingual; ?></span>
                <span><?php echo $Licen; ?></span>
            </div>
        </div>
        <div class="footer-meta">
            <span>&copy; <?php echo date('Y') . ' ' . $Company . ' - ' . $City . ', ' . $State; ?></span>
        </div>
    </div>
</footer>
