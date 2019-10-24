<?php
function canogenre($g){
	$g = str_replace(" ", "-", $g);
	$g = strtolower($g);
	return $g;
}
?>
<div class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">
			<a href="<?php echo $site_url;?>"><img src="<?php echo $site_url;?>/images/logo.png" alt="<? echo $site_title; ?>" border="0"></a>
			</div>
		</div>
		<div class="navbar-collapse collapse navbar-responsive-collapse">
		<ul class="nav navbar-nav">
		
		<li class="dropdown">
		<a href="<?php echo $site_url;?>/top-books" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $toppaid_title;?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<div class="drop-row">
			<li><a href="<?php echo $site_url;?>/top-books"><?php echo $all_gtitle;?></a></li>
            <li><a href="<?php echo $site_url;?>/top-books/9007/<?php echo canogenre($gtitle_1);?>"><?php echo $gtitle_1;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9008/<?php echo canogenre($gtitle_2);?>"><?php echo $gtitle_2;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9009/<?php echo canogenre($gtitle_3);?>"><?php echo $gtitle_3;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9010/<?php echo canogenre($gtitle_4);?>"><?php echo $gtitle_4;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9026/<?php echo canogenre($gtitle_5);?>"><?php echo $gtitle_5;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9027/<?php echo canogenre($gtitle_6);?>"><?php echo $gtitle_6;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9028/<?php echo canogenre($gtitle_7);?>"><?php echo $gtitle_7;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9031/<?php echo canogenre($gtitle_8);?>"><?php echo $gtitle_8;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9025/<?php echo canogenre($gtitle_9);?>"><?php echo $gtitle_9;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9015/<?php echo canogenre($gtitle_10);?>"><?php echo $gtitle_10;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9012/<?php echo canogenre($gtitle_11);?>"><?php echo $gtitle_11;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9024/<?php echo canogenre($gtitle_12);?>"><?php echo $gtitle_12;?></a></li>
			</div><div class="drop-row">
			<li style="height: 35px;"></li>
			<li><a href="<?php echo $site_url;?>/top-books/9032/<?php echo canogenre($gtitle_13);?>"><?php echo $gtitle_13;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9002/<?php echo canogenre($gtitle_14);?>"><?php echo $gtitle_14;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9030/<?php echo canogenre($gtitle_15);?>"><?php echo $gtitle_15;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9034/<?php echo canogenre($gtitle_16);?>"><?php echo $gtitle_16;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9029/<?php echo canogenre($gtitle_17);?>"><?php echo $gtitle_17;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9033/<?php echo canogenre($gtitle_18);?>"><?php echo $gtitle_18;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9018/<?php echo canogenre($gtitle_19);?>"><?php echo $gtitle_19;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9003/<?php echo canogenre($gtitle_20);?>"><?php echo $gtitle_20;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9020/<?php echo canogenre($gtitle_21);?>"><?php echo $gtitle_21;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9019/<?php echo canogenre($gtitle_22);?>"><?php echo $gtitle_22;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9035/<?php echo canogenre($gtitle_23);?>"><?php echo $gtitle_23;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-books/9004/<?php echo canogenre($gtitle_24);?>"><?php echo $gtitle_24;?></a></li>
			</div>
		</ul>
        </li>
		
		<li class="dropdown">
		<a href="<?php echo $site_url;?>/top-free-books" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $topfree_title;?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<div class="drop-row">
			<li><a href="<?php echo $site_url;?>/top-free-books"><?php echo $all_gtitle;?></a></li>
            <li><a href="<?php echo $site_url;?>/top-free-books/9007/<?php echo canogenre($gtitle_1);?>"><?php echo $gtitle_1;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9008/<?php echo canogenre($gtitle_2);?>"><?php echo $gtitle_2;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9009/<?php echo canogenre($gtitle_3);?>"><?php echo $gtitle_3;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9010/<?php echo canogenre($gtitle_4);?>"><?php echo $gtitle_4;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9026/<?php echo canogenre($gtitle_5);?>"><?php echo $gtitle_5;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9027/<?php echo canogenre($gtitle_6);?>"><?php echo $gtitle_6;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9028/<?php echo canogenre($gtitle_7);?>"><?php echo $gtitle_7;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9031/<?php echo canogenre($gtitle_8);?>"><?php echo $gtitle_8;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9025/<?php echo canogenre($gtitle_9);?>"><?php echo $gtitle_9;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9015/<?php echo canogenre($gtitle_10);?>"><?php echo $gtitle_10;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9012/<?php echo canogenre($gtitle_11);?>"><?php echo $gtitle_11;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9024/<?php echo canogenre($gtitle_12);?>"><?php echo $gtitle_12;?></a></li>
			</div><div class="drop-row">
			<li style="height: 35px;"></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9032/<?php echo canogenre($gtitle_13);?>"><?php echo $gtitle_13;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9002/<?php echo canogenre($gtitle_14);?>"><?php echo $gtitle_14;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9030/<?php echo canogenre($gtitle_15);?>"><?php echo $gtitle_15;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9034/<?php echo canogenre($gtitle_16);?>"><?php echo $gtitle_16;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9029/<?php echo canogenre($gtitle_17);?>"><?php echo $gtitle_17;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9033/<?php echo canogenre($gtitle_18);?>"><?php echo $gtitle_18;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9018/<?php echo canogenre($gtitle_19);?>"><?php echo $gtitle_19;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9003/<?php echo canogenre($gtitle_20);?>"><?php echo $gtitle_20;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9020/<?php echo canogenre($gtitle_21);?>"><?php echo $gtitle_21;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9019/<?php echo canogenre($gtitle_22);?>"><?php echo $gtitle_22;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9035/<?php echo canogenre($gtitle_23);?>"><?php echo $gtitle_23;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-free-books/9004/<?php echo canogenre($gtitle_24);?>"><?php echo $gtitle_24;?></a></li>
			</div>
		</ul>
        </li>
					
		<li class="dropdown">
		<a href="<?php echo $site_url;?>/top-textbooks" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $toptext_title;?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<div class="drop-row">
			<li><a href="<?php echo $site_url;?>/top-textbooks"><?php echo $all_gtitle;?></a></li>
            <li><a href="<?php echo $site_url;?>/top-textbooks/9007/<?php echo canogenre($gtitle_1);?>"><?php echo $gtitle_1;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9008/<?php echo canogenre($gtitle_2);?>"><?php echo $gtitle_2;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9009/<?php echo canogenre($gtitle_3);?>"><?php echo $gtitle_3;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9010/<?php echo canogenre($gtitle_4);?>"><?php echo $gtitle_4;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9026/<?php echo canogenre($gtitle_5);?>"><?php echo $gtitle_5;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9027/<?php echo canogenre($gtitle_6);?>"><?php echo $gtitle_6;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9028/<?php echo canogenre($gtitle_7);?>"><?php echo $gtitle_7;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9031/<?php echo canogenre($gtitle_8);?>"><?php echo $gtitle_8;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9025/<?php echo canogenre($gtitle_9);?>"><?php echo $gtitle_9;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9015/<?php echo canogenre($gtitle_10);?>"><?php echo $gtitle_10;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9012/<?php echo canogenre($gtitle_11);?>"><?php echo $gtitle_11;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9024/<?php echo canogenre($gtitle_12);?>"><?php echo $gtitle_12;?></a></li>
			</div><div class="drop-row">
			<li style="height: 35px;"></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9032/<?php echo canogenre($gtitle_13);?>"><?php echo $gtitle_13;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9002/<?php echo canogenre($gtitle_14);?>"><?php echo $gtitle_14;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9030/<?php echo canogenre($gtitle_15);?>"><?php echo $gtitle_15;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9034/<?php echo canogenre($gtitle_16);?>"><?php echo $gtitle_16;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9029/<?php echo canogenre($gtitle_17);?>"><?php echo $gtitle_17;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9033/<?php echo canogenre($gtitle_18);?>"><?php echo $gtitle_18;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9018/<?php echo canogenre($gtitle_19);?>"><?php echo $gtitle_19;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9003/<?php echo canogenre($gtitle_20);?>"><?php echo $gtitle_20;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9020/<?php echo canogenre($gtitle_21);?>"><?php echo $gtitle_21;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9019/<?php echo canogenre($gtitle_22);?>"><?php echo $gtitle_22;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9035/<?php echo canogenre($gtitle_23);?>"><?php echo $gtitle_23;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-textbooks/9004/<?php echo canogenre($gtitle_24);?>"><?php echo $gtitle_24;?></a></li>
			</div>
		</ul>
        </li>
		
		<li class="dropdown">
		<a href="<?php echo $site_url;?>/top-audiobooks" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $topaudio_title;?> <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<div class="drop-row">
			<li><a href="<?php echo $site_url;?>/top-audiobooks"><?php echo $all_gatitle;?></a></li>
            <li><a href="<?php echo $site_url;?>/top-audiobooks/50000041/<?php echo canogenre($gatitle_1);?>"><?php echo $gatitle_1;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000070/<?php echo canogenre($gatitle_2);?>"><?php echo $gatitle_2;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000042/<?php echo canogenre($gatitle_3);?>"><?php echo $gatitle_3;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000043/<?php echo canogenre($gatitle_4);?>"><?php echo $gatitle_4;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000045/<?php echo canogenre($gatitle_5);?>"><?php echo $gatitle_5;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000046/<?php echo canogenre($gatitle_6);?>"><?php echo $gatitle_6;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000047/<?php echo canogenre($gatitle_7);?>"><?php echo $gatitle_7;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000040/<?php echo canogenre($gatitle_8);?>"><?php echo $gatitle_8;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000049/<?php echo canogenre($gatitle_9);?>"><?php echo $gatitle_9;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000044/<?php echo canogenre($gatitle_10);?>"><?php echo $gatitle_10;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000050/<?php echo canogenre($gatitle_11);?>"><?php echo $gatitle_11;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000051/<?php echo canogenre($gatitle_12);?>"><?php echo $gatitle_12;?></a></li>
			</div><div class="drop-row">
			<li style="height: 35px;"></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/74/<?php echo canogenre($gatitle_13);?>"><?php echo $gatitle_13;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000052/<?php echo canogenre($gatitle_14);?>"><?php echo $gatitle_14;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000053/<?php echo canogenre($gatitle_15);?>"><?php echo $gatitle_15;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000069/<?php echo canogenre($gatitle_16);?>"><?php echo $gatitle_16;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000055/<?php echo canogenre($gatitle_17);?>"><?php echo $gatitle_17;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000054/<?php echo canogenre($gatitle_18);?>"><?php echo $gatitle_18;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000056/<?php echo canogenre($gatitle_19);?>"><?php echo $gatitle_19;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000048/<?php echo canogenre($gatitle_20);?>"><?php echo $gatitle_20;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000057/<?php echo canogenre($gatitle_21);?>"><?php echo $gatitle_21;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000058/<?php echo canogenre($gatitle_22);?>"><?php echo $gatitle_22;?></a></li>
			<li><a href="<?php echo $site_url;?>/top-audiobooks/50000059/<?php echo canogenre($gatitle_23);?>"><?php echo $gatitle_23;?></a></li>
			</div>
		</ul>
        </li>
		
		
		</ul>
<form action="<?php echo $site_url;?>/search_main.php" class="navbar-form navbar-right hidden-sm">

    <input type="text" placeholder="<?php echo $searchf_text; ?>" name="q" class="form-control input-sm" value=""  />
	<input type="hidden" name="change" value="1">
    <select name="entity" class="form-control input-sm">
      <option value="books"><?php echo $searchf_books; ?></option>
	  <option value="audiobooks"><?php echo $searchf_aubooks; ?></option>
    </select>
	
	<button type="submit" class="searchbut"><i class="material-icons">search</i></button>
	
  </form>


		</div>
		<!--/.nav-collapse -->
	</div>
</div>