<?php get_header(); ?>



<div class="news_fv">
            <div class="background"></div>
            <div class="catch">
                <h1 class="title">NEWS</h1>
                <p class="message">
                    当社での最新の情報などを随時更新しています。
                </p>
            </div>
        </div>
        
<main>
    <div class="_news">
    <div class="_news-box">
        <div class="_news-list">
        <div class="_news-box2">
    <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
    <div class="_news-name">
        <time>2023.05.02</time>
        <a href="<?php echo esc_url(get_permalink(83)); ?>">株式会社FIRE様のオフィスが完成したました。</a>
    </div>
</div>
            <div class="_news-box2">
            <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                <div class="_news-name">
                    <time>2023.05.01</time>
                    <a href="#">新商品が入荷しました。</a>
                </div>
            </div>

            <div class="_news-box2">
            <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                <div class="_news-name">
                    <time>2023.04.30</time>
                    <a href="#">S様のお宅のインテリアのコーディネートのご相談を受けました。</a>
                </div>
            </div>

            <div class="_news-box2">
            <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                <div class="_news-name">
                    <time>2023.04.29</time>
                    <a href="#">オフラインイベントのお知らせ。</a>
                </div>
            </div>

            <div class="_news-box2">
            <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                <div class="_news-name">
                    <time>2023.04.28</time>
                    <a href="#">お問い合わせについて。</a>
                </div>
            </div>
            <div class="_news-box2">
            <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                <div class="_news-name">
                    <time>2023.04.29</time>
                    <a href="#">オフラインイベントのお知らせ。</a>
                </div>
            </div>

            <div class="_news-box2 last">
            <img class="" src="<?php echo esc_url(get_theme_file_uri('./library/images/gallery1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
                <div class="_news-name ">
                    <time>2023.04.28</time>
                    <a href="#">お問い合わせについて。</a>
                </div>
            </div>

            <div class="next-page">
                <a href="#"> ＜</a>
                <a href="#"> 1</a>
                <a href="#"> 2</a>
                <a href="#"> 3</a>
                <a href="#"> 4</a>
                <a href="#"> 5</a>
                <a href="#"> 6</a>
                <a href="#"> 7</a>
                <a href="#"> 8</a>
                <a href="#"> 9</a>
                <a href="#"> 10</a>
                <a href="#"> ＞</a>
            </div>
        </div>
    </div>
</div>
</main>


<?php 
/*
Template Name: News Page
*/
get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
        $args = array(
            'category_name' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        
        $news_query = new WP_Query($args);

        if($news_query->have_posts()) :
            while($news_query->have_posts()) : $news_query->the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </main>
</div>


<?php get_footer(); ?>