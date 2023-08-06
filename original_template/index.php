<?php get_header(); ?>

        <div class="fv">
            <div class="background"></div>
            <img class="top" src="<?php echo esc_url(get_theme_file_uri('/library/images/fv709.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            <div class="catch">
                <h1 class="title">The best Space for you</h1>
                <p class="message">
                    当社では法人、個人問わずさまざまな方に最高の空間を提供するインテリアの専門家です。<br>
                    インテリアのコーディネートだけでなく、家具の販売、現状の相談なども受け付けております。
                </p>
            </div>
        </div>
    
    <main>
        <!-- ーーーーーーMAIN CATEGORYーーーーーー -->
        <div class="category">
            <div class="section">
                <div class="section-box">
                    <div class="section-box2">
                        <h2>ABOUT US</h2>
                        <p class="section-text">毎日長時間使用するオフィスや自室。その空間を最高のものにすることで、仕事のパフォーマンスや幸福度の向上させ、より豊かな生活を送ることができるようにするお手伝いをさせてください。</p>
                        <div class="more"><a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>">MORE</a></div>
                    </div>
                </div>
                <img class="section-ph" src="<?php echo esc_url(get_theme_file_uri('/library/images/image1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            </div>
        
            <div class="section second">
                <div class="section-box service">
                    <div class="section-box2">
                        <h2>SERVICE</h2>
                        <p class="section-text">私たちは、インテリアのコーディネートだけでなく、家具の販売や買取回収、その他インテリアに関する様々なご相談にのることができます。どうぞお気軽に覗いてください。</p>
                        <div class="more"><a href="<?php echo esc_url(get_permalink(get_page_by_path('service'))); ?>">MORE</a></div>
                    </div>
                </div>
                <img class="section-ph ser-ph" src="<?php echo esc_url(get_theme_file_uri('/library/images/image2.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            </div>
        </div>
        <!-- ーーーーーーNEWSーーーーーー -->

            <div class="news">
            <div class="news-box">
                <div class="news-title">
                    <h2>NEWS</h2>
                </div>
                <div class="news-list">
                <?php 
                    $args = array( 
                        'posts_per_page' => 4
                    );

                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                            <article class="news-name">
                                <a href="<?php echo esc_url(get_permalink()); ?>"> 
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date(); ?> </time>
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <!-- <?php the_category(); ?> -->
                                </a>
                            </article>
                    <?php endwhile;wp_reset_postdata();else : ?>
                        <p>記事はありません。</p>
                    <?php endif; ?>

                    <div class="more"><a href="<?php echo esc_url(get_permalink(get_page_by_path('news'))); ?>">MORE</a></div>
                    
                </div>
            </div>
        </div> 

        <!-- ーーーーーーGALLERYーーーーーー -->    
        <div class="gallery">
            <div class="gallery-box">
                <h2>GALLERY</h2>
                <div class="slick1">
                    <div>
                        <img class="gallery-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                    </div>
                    <div>
                        <img class="gallery-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery2.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                    </div>
                    <div>
                        <img class="gallery-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery3.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                    </div>
                    <div>
                        <img class="gallery-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery4.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                    </div>
                    <div>
                        <img class="gallery-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery5.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                    </div>
                    <div>
                        <img class="gallery-ph" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery6.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    <?php get_footer(); ?> 