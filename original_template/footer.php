<footer>
    <div class="company">
    <a href="<?php echo esc_url(home_url('/')); ?>"><img class="rogo" src="<?php echo esc_url(get_theme_file_uri('/library/images/logo.png')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
        <p class="company-date first">会社名</p>
        <p class="company-date">〒000-0000</p>
        <p class="company-date">東京都新宿区0-00-000丸々ビル2F</p>
    </div>
    <div class="footer-nemu">
        <nav class="footer-nav">
            <ul class="footer-list flex-rc">
                <li class="footer-name"><a href="<?php echo esc_url(get_permalink(get_page_by_path('home'))); ?>">HOME</a></li>
                <li class="footer-name"><a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">ABOUT US</a></li>
                <li class="footer-name"><a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>">NEWS</a></li>
                <li class="footer-name"><a href="<?php echo esc_url(get_permalink(get_page_by_path('service'))); ?>">SERVICE</a></li>
                <li class="footer-name"><a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>