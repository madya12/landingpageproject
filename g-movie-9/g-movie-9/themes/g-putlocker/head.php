<script>
   var site="<?php echo site_url() ?>";
   var ajaxku ;
   
   function buatajax(){ if (window.XMLHttpRequest){ return new XMLHttpRequest(); } if (window.ActiveXObject){ return new ActiveXObject("Microsoft.XMLHTTP"); } return null; }
   
   
   function wish(id){
   	if(id != ""){
   	ajaxku = buatajax();
   	ajaxku.onreadystatechange=function(){ if(ajaxku.readyState==4){ 
   	respon = ajaxku.responseText; 
   	showrespon(respon);
   	}
   	}
   	ajaxku.open("GET",site+"/respon_wishlist.php?id="+id,true);
   	ajaxku.send(null);
   	} else {
   		alert('Not Respon');
   	}
   }
</script> 
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li {
    text-align: center;
    border-bottom: 1px solid #555;
}

li:last-child {
    border-bottom: none;
}

li a.active {
    background-color: #ffffff;
    color: white;
}

li a:hover:not(.active) {
    background-color: #007bc4;
    color: white;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark header_background ">
   <a style="color:white !Important; font-size : 24px; font-weight : bold;" class="navbar-brand" href="<?php echo site_url() ?>">
   <?php echo config('sitename') ?>  </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ">
         <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Main Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <?php foreach ($_cate as $cateid => $catename): ?>
               <a href="<?php echo seocat( $catename,$cateid );?>"><?php echo ucwords($catename) ?></a>
               <?php endforeach ?>
               <div class="dropdown-divider"></div>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Movies
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="<?php echo view_page( 'movies-nowplay' );?>">Now Playing</a>
                <a href="<?php echo view_page( 'upcoming-movies' );?>">Upcoming</a>
                <a href="<?php echo view_page( 'toprated-movies' );?>">Top Rated</a>
                <a href="<?php echo view_page( 'popular-movies' );?>">Popular</a>
               <div class="dropdown-divider"></div>
            </div>
         </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            TV
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="<?php echo view_page( 'tv-airing' );?>"> Airing TV Shows</a>
                <a href="<?php echo view_page( 'tv-ontheair' );?>">On the Air TV Shows</a>
                <a href="<?php echo view_page( 'tv-popular' );?>">Popular TV Series</a>
               <div class="dropdown-divider"></div>
            </div>
         </li>
      </ul>
      <button class="navbar-toggler" style="margin:5px; width : 100%;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
      Account
      </button>
      <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent2">
         <ul class="navbar-nav ">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-sign-in">  </i>  Sign In
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" data-toggle="modal" data-target="#reg_form" href="#reg_form"> Sign In</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo site_url() ?>/register"> Create an Account</a>
                  <div class="dropdown-divider"></div>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" onclick="showsearch()"><i class="fa fa-search">  </i> Search </a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<script>
   function showsearch(){
   	$('#modal_search').modal('show'); 
   } 
</script>
<div class="modal fade" id="modal_search" role="dialog" style="display: none; margin-top:0px;">
   <div class="modal-dialog" style="margin-top: 10px;">
      <div class="modal-content">
         <div class="modal-header header_background" >
            <span class="modal-title">Search Movies By Title</span>
            <button type="button" class="close" data-dismiss="modal">x</button>
         </div>
         <div class="modal-body" id="isi_search">
            <form action="/" method="get">
               <div class="" style="color:black !important">
                  <span> Title Movies </span> 
                  <input type="text" required class="form-control" type="text" name="s" placeholder="Search By Title"    />
                  <br />
                  <button type="submit" class="btn btn-outline-success radius-lg " > Search Movies </button> 
               </div>
            </form>
         </div>
         <div class="modal-footer" id="isi_tombol_search">
         </div>
      </div>
   </div>
</div>