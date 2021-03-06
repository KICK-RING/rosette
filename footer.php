
<footer class="l-footer">
    <section class="l-footer--contact">
        <a class="l-footer--contact__btn" href="<?= get_bloginfo('url') ?>/contact/">
            CONTACT
            <span class="l-footer--contact__btn-pc">
                - 出演依頼・お問い合わせ -
            </span>
            ▶︎
        </a>
    </section>

    <section class="l-footer--cont">
        <div class="p-page__conts">
            <div class="l-footer--cont__logo">
                <a href="<?= get_bloginfo('url') ?>/">
                    <img src="<?= image('logo.png') ?>" alt="ROSETTE">
                </a>
            </div>
            <ul class="l-footer--cont__nav">
                <li>
                    <a href="<?= get_bloginfo('url') ?>/news/">
                        NEWS
                    </a>
                </li>
                <li>
                    <a href="<?= get_bloginfo('url') ?>/discography/">
                        DISCOGRAPHY
                    </a>
                </li>
                <li>
                    <a href="<?= get_bloginfo('url') ?>/member/">
                        MEMBER
                    </a>
                </li>
                <li>
                    <a href="<?= get_bloginfo('url') ?>/schedule">
                        SCHEDULE
                    </a>
                </li>
                <li>
                    <a href="https://relibe.thebase.in/" target="_blank">
                        SHOP
                    </a>
                </li>
            </ul>
            <div class="l-footer--cont__sns">
                <a class="l-footer--cont__sns-item" href="#" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>

                <a class="l-footer--cont__sns-item" href="https://twitter.com/rosette_staff" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </section>
</footer>

<? // __以下 from header.php__ ?>
</main>

<div class="menu-trigger" href="">
    <span></span>
    <span></span>
    <span></span>
</div>
<? // navi_item ?>
<nav>
    <a href="<?= get_bloginfo('url') ?>/">
        HOME
    </a>
    <a href="<?= get_bloginfo('url') ?>/news/">
        NEWS
    </a>
    <a href="<?= get_bloginfo('url') ?>/discography/">
        DISCOGRAPHY
    </a>
    <a href="<?= get_bloginfo('url') ?>/member/">
        MEMBER
    </a>
    <a href="<?= get_bloginfo('url') ?>/schedule/">
        SCHEDULE
    </a>
    <a href="https://relibe.thebase.in/" target="_blank">
        SHOP
    </a>
    <a href="<?= get_bloginfo('url') ?>/contact/">
        CONTACT
    </a>
</nav>

<div class="overlay"></div>

</div><? //.wrapper ?>
<? // __以上 from header.php__ ?>

<?php wp_footer(); ?>

</body>
</html>
