<?php get_header(); ?>

    
        <div class="contact_fv">
            <div class="background"></div>
            <div class="catch">
                <h1 class="title">CONTACT</h1>
                <p class="message">
                    当社へご相談、お問い合わせいただく場合は下記のフォームをご入力ください。返信には3営業日ほど頂いきますのでご了承ください。
                </p>
            </div>
        </div>
    
    <main>
        <!-- ーーーーーーformーーーーーー -->
        <form action="./mail.php" method="post">
            <div>
            <div class="label_section">
                <label class="label" for="check-a"
                >ご用件 <span class="required"></span></label>
                <input
                class="input_area"
                id="name"
                type="name"
                autocomplete="name"
                required/>
            </div>

            <div class="label_section">
                <label class="label_text" for="name">氏名
                </label>
                <input
                class="input_area"
                id="name"
                type="name"
                autocomplete="name"
                required/>
            </div>
            <div class="label_section">
                <label class="label_text" for="name">氏名（フリガナ）
                </label>
                <input
                class="input_area"
                id="name"
                type="name"
                autocomplete="name"
                required/>
            </div>

            <div class="label_section">
                <label class="label_text" for="tel">電話番号
                </label>
                <input
                class="input_area"
                id="tel"
                type="tel"
                autocomplete="tel"
                required/>
            </div>
            <div class="label_section">
                <label class="label_text" for="email">メールアドレス </label>
                <input
                class="input_area"
                id="email"
                type="email"
                autocomplete="email"
                required
                />
            </div>
            <div class="label_section">
                <label class="label_text" for="remarks">お問い合わせ内容 </label>
                <input
                class="input_area"
                id="remarks"
                type="remarks"
                autocomplete="remarks"
                required
                />
        </div>
            </div>
            <div class="policy">

            <p><input type="submit" value="送信" /></p>
            </div>
        </form>
    </main>


<?php get_footer(); ?>