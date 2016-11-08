<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
       <head>
        
            <h1>Shop</h1>
        
        </head>

        <hr>

        <!-- Title -->
       
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

                 
            
                <?php get_cat_products(); ?>

            

           

          
        </div>
        <!-- /.row -->

        
    </div>
    <!-- /.container -->

   <?php include(TEMPLATE_FRONT .DS. "footer.php"); ?>