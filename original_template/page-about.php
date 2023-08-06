<?php get_header(); ?>

<div class="about_fv">
            <div class="background"></div>
            <div class="catch">
                <h1 class="title">ABOUT US</h1>
                <p class="message">
                    毎日長時間使用するオフィスや自室。その空間を最高のものにすることで、仕事のパフォーマンスや幸福度の向上させ、より豊かな生活を送ることができるようにするお手伝いをさせてください。
                </p>
            </div>
            
        </div>
    
    <main>
        <!-- ーーーーーーMAIN CATEGORYーーーーーー -->
        <div class="main_profile">
            <div class="section">
                <div class="profile-box">
                    <div class="profile-box2">
                        <h2>COMPANY</h2>
                    </div>
                    <div class="profile">
                        <p>株式会社SPACE</p>
                        <p>2020年5月 設立</p>
                        <p>代表 若井紀文 </p>
                        <p>メッセージ</p>
                        <p>皆様が1日の大半を何気なく使用してい <br> 
                            る自室やオフィス、その空間を最高な<br> 
                            ものにする事でよりゆたかな人生が送<br> 
                            ることができると確信しております。<br> 
                            そのきっかけを提供したいと考えています。</p>
                    </div>
                </div>
                <img class="profile-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/about.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            </div>
        </div>
    </main>
    <?php get_footer(); ?>