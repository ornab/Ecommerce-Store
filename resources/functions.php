<?php 

//helper functions
 
function redirect($location){
    
    header("Location: $location");
    
    
}

function query($sql){
    
    global $connection;
    
    return mysqli_query($connection,$sql);
    
    
    
}


function confirm($result){
    
    global $connection;
    
    if(!$result){
              
              die("QUERY FAILED" . mysqli_error($connection));
              
          }
    
    
}


function escape_string($string){
    
    global $connection;
    
    return mysqli_real_escape_string ($connection,$string);
    
    
}


function fetch_array($result){
    
    return mysqli_fetch_array($result);
    
    
}

/*********************FRONT END FUNCTIONS******************/
//get products



function get_products(){
    
    
    
  $query = query("SELECT * FROM products");
  confirm($query);
    
  while($row=fetch_array($query)){
      
$product = <<<HEREDOC
      
<div class="col-sm-4 col-lg-4 col-md-4">
    <div class="thumbnail">
        <a href="item.php?id={$row['product_id']}" target='_blank'><img src="{$row['product_image']}" alt=""> </a>
        <div class="caption">
            <h4 class="pull-right">&#36;{$row['product_price']}</h4>
            <h4><a href="item.php?id{$row['product_id']}" target="_blank" >{$row['product_title']}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>

            <a class="btn btn-primary" target="_blank" href="item.php?id={$row['product_id']}">Add to cart</a>
        </div>

    </div>
</div>
      
      
      
      
HEREDOC;
      
      
 echo $product;      
      
      
  }
    
    
}

function get_categories(){
    
        $query = query("SELECT * FROM category");
        
        confirm( $query);
          
         while ($row= fetch_array( $query)){
              
$category_links = <<<HEREDOC

 <a href='category.php?id={$row['cat_id']}' target='_blank' class='list-group-item'>{$row['cat_title']}</a>



HEREDOC;
       
              
          
  echo $category_links;       
         
         }
    
    
    
    
    
}

function get_cat_products(){
    
    
    
  $query = query("SELECT * FROM products WHERE product_category_id= " . escape_string($_GET['id']) . " " );
  confirm($query);
    
  while($row=fetch_array($query)){
      
$product_cat = <<<HEREDOC
      
<div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img src="{$row['product_image']}" alt="">
        <div class="caption">
            <h3>{$row['product_title']}</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>
                <a href="item.php?id={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
            </p>
        </div>
    </div>
</div>

      
      
      
HEREDOC;
      
      
 echo $product_cat;      
      
      
  }
    
    
}

function get_cat_jumbotron(){
    
    
    
  $query = query("SELECT * FROM products WHERE product_id= " . escape_string($_GET['id']) . " " );
  confirm($query);
    
  while($row=fetch_array($query)){
      
$product_jumbotron = <<<HEREDOC
      
 <header class="jumbotron hero-spacer">
            <h1>{$row['product_title']}</h1>
            <p>{$row['product_description']} </p>
            <p><a class="btn btn-primary btn-large">Call to action!</a>
            </p>
        </header>

      
      
      
HEREDOC;
      
      
 echo $product_jumbotron;      
      
      
  }
    
    
}


function get_shop_products(){
    
    
    
  $query = query("SELECT * FROM products" );
  confirm($query);
    
  while($row=fetch_array($query)){
      
$product_shop = <<<HEREDOC
      
<div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img src="{$row['product_image']}" alt="">
        <div class="caption">
            <h3>{$row['product_title']}</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>
                <a href="item.php?id={$row['product_id']}" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
            </p>
        </div>
    </div>
</div>

      
      
      
HEREDOC;
      
      
 echo $product_shop;      
      
      
  }
    
    
}





 

/*********************BACK END FUNCTIONS******************/

?>