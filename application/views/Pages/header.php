<header class="site-navbar py-2 bg-white" role="banner">

<div class="container">
  <div class="row align-items-center">
    
    <div class="col-11 col-xl-2">
      <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Listed</a></h1>
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
          <li class="active"><a href="<?=site_url('home/index');?>"><span>Home</span></a></li>
          <!--lien -->
           <li class="has-children">
            <a href="about.html"><span>Categorie</span></a>
            <ul class="dropdown">
            <?php foreach($nom as $ligne) {?>
                <?php $num = $ligne['IDC'];
                    //echo $num;
                ?>
              <li><a href="<?=site_url('home/blog/'.$num.'/1');?>"> <?php  echo($ligne['NOM']);?></a></li>
            <?php }?> 
            </ul>
          </li>
         
        </ul>
      </nav>
    </div>


    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

    </div>

  </div>
</div>

</header>