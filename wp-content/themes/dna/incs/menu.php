<!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<? get_site_url(); ?>/cmng"><img src="<?php get_site_url();?>/cmng/wp-content/uploads/2018/04/logo.png" class="img-responsive"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 0.8px;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<? get_site_url(); ?>/cmng">Home</a></li>
            <li><a href="#about">Categoria 1</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grupo Categorias <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li><a href="#about">Categoria 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!--<li class="active"><a href="https://getbootstrap.com/docs/3.3/examples/navbar-static-top/">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="https://getbootstrap.com/docs/3.3/examples/navbar-fixed-top/">Fixed top</a></li>-->
            
            <!--<li class="active"><a href=""><i class="fas fa-search"></i></a></li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      <?php wp_nav_menu( $args ); ?>
    </nav>