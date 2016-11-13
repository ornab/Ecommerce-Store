<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php"); ?>

<!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php include(TEMPLATE_FRONT .DS. "side_nav.php"); ?>

            <div class="col-md-9">

               <?php include(TEMPLATE_FRONT .DS. "slider.php"); ?>

                <div class="row">

                <?php get_products(); ?>

                    
                   
            </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php include(TEMPLATE_FRONT .DS. "footer.php"); ?>

    