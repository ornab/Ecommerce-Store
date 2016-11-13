<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php"); ?>


 

    

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        
          <div class="row">
            <div class="col-lg-12">
                <head>
                    
                    <h1>Shop</h1>
                
                </head>
                
            </div>
         
        </div>
        <hr>

        <!-- Title -->
        
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

           <?php  get_products_on_shop_page(); ?>

        
        </div>
        <!-- /.row -->

         

    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT .DS. "footer.php"); ?>