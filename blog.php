<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>


<section class="inicio relative">
    <img src="uploads/banner_blog.jpg" width="100%" class="desktop" />
    <img src="uploads/banner_blog_mobile.jpg" width="100%" class="mobile" />
    <div class="inicio_container valign-wrapper">
        <div class="blog_content center">
            <div class="inicio_title">
                Economizar para viajar
            </div>
            <div class="inicio_subtitle margin_1_top">
                Quando devo começar?
            </div>
        </div>
    </div>
</section>

<section class="blog_main">

    <div class="container">

        <div class="blogPage_title justifycenter valign-wrapper relative">
            Postagens Recentes
        </div>

        <div class="blog_recentes row">
            <div class="col s12 m4">
                <img src="uploads/blog_two.jpg" width="100%" />
            </div>
            <div class="col s12 m4">
                <img src="uploads/blog_one.jpg" width="100%" />
            </div>
            <div class="col s12 m4">
                <img src="uploads/blog_three.jpg" width="100%" />
            </div>
        </div>

        <div class="row margin_2_top">
            <div class="col s12 m8">
                <?php include 'blog_item_list.php'; ?>
                <?php include 'blog_item_list.php'; ?>
                <?php include 'blog_item_list.php'; ?>
                <?php include 'blog_item_list.php'; ?>
                <?php include 'blog_item_list.php'; ?>

                <div class="paginator">
                    <ul class="pagination">
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect" style="background-color: transparent !important; "><a href="#!" style="color: #f5b437 !important; padding: 0;"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="blog_popular">
                    Mais populares
                </div>

                <?php include 'blog_item_mini.php'; ?>
                <?php include 'blog_item_mini.php'; ?>
                <?php include 'blog_item_mini.php'; ?>
                <?php include 'blog_item_mini.php'; ?>
                <?php include 'blog_item_mini.php'; ?>

            </div>
        </div>
    </div>

</section>

<?php include 'section-depoimentos.php'; ?>


<?php include 'footer.php'; ?>


<?php include 'assets/php/js_include.php'; ?>

</body>

</html>