<?php get_header(); ?>

<div class="service_fv">
            <div class="background"></div>
            <div class="catch">
                <h1 class="title">SERVICE</h1>
                <p class="message">
                    私たちは、インテリアのコーディネートだけでなく、家具の販売や買取回収、その他インテリアに関する様々なご相談にのることができます。どうぞお気軽に覗いてください。
                </p>
            </div>
        </div>
    
    <main>
        <!-- ーーーーーーMAIN CATEGORYーーーーーー -->
        <div class="service-list">
            <div class="service">
                <div class="service-box">
                    <div class="service-box2">
                        <h2 class="iteria">インテリアコーディネート</h2>
                        <div class="service-text">あなたが普段お過ごしの空間をご予算、ご要望をもとに提案します。具体的なに「こんな感じしたい」という意見がなくても抽象的なご要望でもぴったりなイメージをご案内します。</div>
                        
                    </div>
                </div>
                <img class="service-ph" src="<?php echo esc_url(get_theme_file_uri('/library/images/image1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            </div>
        
            <div class="service second">
                <div class="service-box ">
                    <div class="service-box2">
                        <h2>家具の販売</h2>
                        <div class="service-text">当社ではオリジナル家具の販売をしております。また、オーダーメイドも可能なのであなたの空間に最適な世界に一つだけの家具も製作可能です。</div>
                        
                    </div>
                </div>
                <img class="service-ph second" src="<?php echo esc_url(get_theme_file_uri('/library/images/image2.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            </div>
        
            <div class="service">
                <div class="service-box">
                    <div class="service-box2">
                        <h2>その他のご相談</h2>
                        <div class="service-text">上記以外のことでもインテリアの類に関する事でしたら何でもお気軽にご相談ください。きっとお客様の力になることをお約束いたします。</div>
                        
                    </div>
                </div>
                <img class="service-ph" src="<?php echo esc_url(get_theme_file_uri('/library/images/image1.png')); ?>" alt="<?php bloginfo('name'); ?>" >
            </div>
        </div>
    </main>

    <?php get_footer(); ?>