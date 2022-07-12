<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <main class="l-main p-fixed">
            <section class="p-archive-menu"> <!--ダミーサイト-->
                <h1>Menu:<span>  チーズバーガー</span></h1>
            </section>
            <section class="p-archive-subhedding">
                <h1>小見出しが入ります</h1>
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section>

            <div class="p-archive-flexbox">
            <?php
    if( have_posts() ) : //1.投稿データがあるかの条件分岐。
        while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
            the_post(); ?> <!--3.ループ処理に必要なカウント処理等-->
            <div class="p-archive-chieze">
                    <?php
                    if(has_post_thumbnail()):
                    the_post_thumbnail("full");
                    else :
                    ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . "/../images/chizee.png" ); ?>" alt="" />
                    <?php endif;?>
                    <section class="p-archive-chieze__section">
                        <h1><?php the_title();?></h1>
                        <div>
                             <?php the_excerpt(); ?>
                             <a href="<?php the_permalink(); ?>">詳しく見る</a>
                        </div>

                    </section>
                </div>
            
        <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
    else : //6.投稿データがなければ
        ?><p>表示する記事がありません</p><?php //7.ない時の処理
    endif; ?>
                <!-- <div class="p-archive-chieze c-chieze">
                    <div></div>
                    <section class="p-archive-chieze__section c-chieze__section">
                        <h1>チーズバーガー</h1>
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                        <button>詳しく見る</button>
                    </section>
                </div>
                <div class="p-archive-double-c c-chieze">
                    <div></div>
                    <section class="p-archive-double-c__section c-chieze__section">
                        <h1>ダブルチーズバーガー</h1>
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button>詳しく見る</button>
                    </section>
                </div>
                <div class="p-archive-spc c-chieze u-archive-chieze-bottom">
                    <div></div>
                    <section class="p-archive-spc__section c-chieze__section">
                        <h1>スペシャルチーズバーガー</h1>
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button>詳しく見る</button>
                    </section>
                </div> -->
            </div>
            <?php wp_pagenavi(); ?>
            <!-- <div class="p-nav-link">
                <p>page 1/10</p>
                <div>
                <a class="p-nav-link__braket1" href="#"></a>
                <a class="p-nav-link__stand" href="#">前へ</a>
                </div>
                <a class="p-nav-link__first" href="#">1</a>
                <a class="p-nav-link__link" href="#">2</a>
                <a class="p-nav-link__link" href="#">3</a>
                <a class="p-nav-link__link" href="#">4</a>
                <a class="p-nav-link__link" href="#">5</a>
                <a class="p-nav-link__link" href="#">6</a>
                <a class="p-nav-link__link" href="#">7</a>
                <a class="p-nav-link__link" href="#">8</a>
                <a class="p-nav-link__link" href="#">9</a>
                <div>
                <a class="p-nav-link__stand" href="#">次へ</a>
                <a class="p-nav-link__braket2" href="#"></a>
                </div>
              </div> -->
        </main>
        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
    </body>
</html>
