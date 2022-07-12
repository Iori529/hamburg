<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <main class="l-main p-fixed">
        <?php
  if(have_posts() && get_search_query()):
    while(have_posts()):
      the_post(); ?>
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

            
        <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了 //6.投稿データがなければ?>
        <?php elseif (!get_search_query()) : ?>
    <p>検索ワードが入力されていないので入力してください</p>
  <?php else : ?>
    <p>該当する記事はありません</p>
<?php //7.ない時の処理
    endif; ?>
            <!-- <section class="p-archive-menu"> 
                <h1>Search:<span>  チーズバーガー</span></h1>
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
                <div class="p-archive-chieze c-chieze">
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
                        <h1>チーズバーガー</h1>
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button>詳しく見る</button>
                    </section>
                </div>
                <div class="p-archive-spc c-chieze">
                    <div></div>
                    <section class="p-archive-spc__section c-chieze__section">
                        <h1>チーズバーガー</h1>
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <button>詳しく見る</button>
                    </section>
                </div>
                <div class="p-archive-chieze c-chieze">
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
                <div class="p-archive-chieze c-chieze u-archive-chieze-bottom">
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
            </div>
            <div class="p-nav-link">
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
