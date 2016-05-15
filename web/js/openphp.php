<?php
$con=mysql_connect('localhost','root','root');
mysql_select_db("BDTunisiaMall",$con);
$p=$_GET['y'];
if($p=="1"){
$req="SELECT * FROM `Produit` ORDER BY `designation` ASC";
}
if($p=="2"){
$req="SELECT * FROM `Produit` ORDER BY `designation` DESC";
}
if($p=="3"){
$req="SELECT * FROM `Produit` ORDER BY `prixVente` ASC";
}
if($p=="4"){
$req="SELECT * FROM `Produit` ORDER BY `prixVente` DESC";
}
if($p=="5"){
$req="SELECT * FROM `Produit` ORDER BY `note` DESC";
}
if($p=="6"){
$req="SELECT * FROM `Produit` ORDER BY `note` ASC";
}
$res=mysql_query($req);

  	 echo' <div class="row">';
              
              
              
 while($ligne=mysql_fetch_array($res))
 {
   
  
				echo '<div class="product-layout product-list col-xs-12">';
		  echo '<div class="product-thumb">';
			echo '<div class="image" >';
                          
                           echo '<a href="detaille produit nour">';
                                
                                
                               echo ' <img style=" width:  250px;height: 250px" src=" ';
                               echo '/piweb/web/images/products/'.$ligne[11].'" alt="{{'.$ligne[11].' }}" /> </a>';
                        echo '</div>';
			echo '<div>';
			  echo ' <div class="caption">';
                              
				echo ' <div class="name name-product">';
                                    echo ' <a href="detaille produit nour"> '.$ligne[3].' </a>';
                               echo ' </div>';
                                
				echo '<div class="description">';
                                   echo ' '.$ligne[1].' ';
                               echo ' </div>';
			 echo '<div id="rating">';
                              
                                        
	  				  				  				 
			echo '</div>';
				echo '<div class="price price-product">';
				  				 echo ' <span class="price-new">$'.$ligne[6].' </span> <span class="price-old">$ '.$ligne[13].' </span>';
				  				  				echo '</div>';
								echo '</div>';
				echo '<div class="cart-button">';
					echo '<button class="btn btn-add" type="button" onclick="cart.add();"><i class="fa fa-shopping-cart hidden-lg"></i> <span class="hidden-xs hidden-sm hidden-md">acheter cela</span></button>';
					echo '<button class="btn btn-icon" type="button" data-toggle="tooltip" title="vote" onclick="wishlist.add();"><i class="fa fa-heart"></i></button>';
					echo '<button class="btn btn-icon" type="button" data-toggle="tooltip" title="detaille" onclick="compare.add();"><i class="fa fa-exchange"></i></button>';
				echo '</div>';
			echo '</div>';
				echo '<div class="clear"></div>';
		  echo '</div>';
		echo '</div>';
 }
 
				
          echo '</div>';
          
?>

