<?php get_header(); ?> <!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
<?php get_sidebar(); ?> <!--siderbar.phpを読み込むテンプレートタグ（インクルードタグ）-->

        <main class="l-main p-fixed">
              <!-- <section class="p-h1-chieze"> 
                <h1>h1 チーズバーガー</h1>
            </section>  -->
            <?php 
                if( have_posts() ) : //1.投稿データがあるかの条件分岐。
                    while( have_posts() ) : // 2.表示する投稿データがあれば繰り返し処理開始
                        the_post(); ?> <!--3.ループ処理に必要なカウント処理等-->
                    <?php
                        if (has_post_thumbnail()) :
                        $id = get_post_thumbnail_id();
                        $img = wp_get_attachment_image_src($id, 'full');
                        else :
                        $img = array(get_template_directory_uri() . 'images/chieze.png');
                    endif;
                    ?>
                    <div <?php post_class('p-h1-chieze'); ?>>
                        <h1 style="background-image: url('<?php echo $img[0]; ?>');">
                            <a><?php the_title(); ?></a>
                        </h1>
                    </div>
                    <div class="p-single-p">
                        <?php the_content(); ?>
                    </div>

            <?php endwhile; // 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了
                else : //6.投稿データがなければ
            ?><p>表示する記事がありません</p><?php //7.ない時の処理
            endif; ?>            
            <!--<section class="p-single-section">
                <h2>見出しh2</h2>
                <p>Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                    Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
                </p>
                <h3>見出しh3</h3>
                <h4>見出しh4</h4>
                <h5>見出しh5</h5>
                <h6>見出しh6</h6>
            </section>
            <div class="p-single-quote">
                <p>Blockquote　引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                </p>
                <p>出典元：　<span>○○○○○○○○○○</span></p>
            </div>
            <img src="../hamburger/images/singlechiezebig.png" class="p-chieze-image-big">
            <div class="p-single-imgtext">
                <img src="../hamburger/images/singlechieze.png">
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </div>
            <div class="p-single-imgtext">
                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <img src="../hamburger/images/singlechieze.png">
            </div>
            <img src="../hamburger/images/singlechieze.png" class="p-single-image-y">
            <div class="p-single-img-flex">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item1">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item2">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item3">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item4">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item5">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item6">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item7">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item8">
                <img src="../hamburger/images/singlechieze.png" class="p-single-img-flex__item9">
            </div>
            <ul class="p-single-list-left u-single-list">
                <li>1.リストリストリスト</li>
                <li>2.リストリストリスト</li>
            </ul>
            <ul class="p-single-list-center">
                <li>1.リスト2リスト2リスト2</li>
                <li>1.リスト2リスト2リスト2</li>
            </ul>
            <ul class="p-single-list-left">
                <li>1.リストリストリスト</li>
                <li>2.リストリストリスト</li>
            </ul>
            <ul class="p-single-list-left">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <ul class="p-single-list-center">
                <li>1.リスト2リスト2リスト2</li>
                <li>1.リスト2リスト2リスト2</li>
            </ul>
            <ul class="p-single-list-left">
                <li>リストリストリスト</li>
                <li>リストリストリスト</li>
            </ul>
            <div class="p-single-code">
                <code>
                    <p>&lt;html&gt;</p>
                    <p>　　　　　　　&lt;head&gt;</p>
                    <p>　　　　　　　&lt;/head&gt;</p>
                    <p>　　　　　　　&lt;body&gt;</p>
                    <p>　　　　　　　&lt;/body&gt;</p>
                    <p>&lt;/html&gt;</p>
                </code>
            </div>
            <table class="p-single-table" border="1">
                <tr>
                    <td class="p-single-table__left">テーブル</td>
                    <td class="p-single-table__right">テーブル</td>
                </tr>
                <tr>
                    <td class="p-single-table__left">テーブル</td>
                    <td class="p-single-table__right">テーブル</td>
                </tr>
                <tr class="p-single-table__left">
                    <td class="p-single-table__left">テーブル</td>
                    <td class="p-single-table__right">テーブル</td>
                </tr>
                <tr class="p-single-table__right">
                    <td class="p-single-table__left">テーブル</td>
                    <td class="p-single-table__right">テーブル</td>
                </tr>
            </table>
            <div class="p-single-button">
            <button type="button" class="p-single-button__button">ボタン</button>
            </div>
            <p class="p-single-bold">boldboldboldboldboldboldbold</p> -->
        </main>
        <?php get_footer(); ?> <!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
    </body>
</html>