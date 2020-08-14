<?php
    get_header();
    the_post();

    $member = get_posts([
        'post_type' => 'member',
        'posts_per_page' => -1,
    ]);

?>

<div class="p-page-home">
    <section class="p-page-home--kv">
        <img src="<?= image('kv.jpg') ?>" alt="ROSETTE" title="ROSETTE">
    </section>

    <!-- <section class="p-page-home--movie">
        <div class="p-page-home--movie__item u-embed-youtube">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YUGOXBgl87I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="p-page-home--movie__item u-embed-youtube">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/x8VYWazR5mE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="p-page-home--movie__item u-embed-youtube">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ony539T074w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section> -->

    <section class="p-page-home--news">
        <?= get_template_part('_news'); ?>
    </section>

    <section class="p-page-home--disco">
        <?= get_template_part('_disco'); ?>
    </section>

    <section class="p-page-home--profile">
        <div class="p-page__conts">
            <div class="p-page-home--profile__wrap">
                <div class="p-page-home--profile__desc">
                    <div class="p-page-home--profile__ttl p-ttl">
                        PROFILE
                    </div>
                    <div class="p-page-home--profile__comment">
                        女の子以上女性未満のもどかしい気持ちを「青春×ガーリー×恋愛」で表現。君とずっと一緒にいるために自分の可愛いを更新しつづけ、存在の証明をしていきます。
                    </div>
                </div>
                <div class="p-page-home--profile__img">
                    <img src="<?= image('kv.jpg') ?>" alt="ROSETTE">
                </div>
            </div>
            <div class="p-page-home--profile__member">
                <?php
                    foreach ($member as $post) {
                        setup_postdata($post);
                        get_template_part('_member-list__item');
                    }
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</div>

<?php
    get_footer();
