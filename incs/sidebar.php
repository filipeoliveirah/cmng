<!--BODY SIDEBAR-->
<div class="blog-widget">    
    <div class="col-md-6 blog-widget-title">Pesquisa</div>
    <hr>
    <div class="blog-widget-content">
        <div class="blog-widget-buscar">
            <form method="post">    
                <input type="text" name="" placeholder="Digite a palavra desejada"/>
                <button type="submit" class="fas fa-search"></button>        
            </form>
        </div>
    </div>
</div>
<div class="blog-widget">    
    <div class="col-md-6 blog-widget-title">E-book</div>
    <hr>
    <div class="blog-widget-content">
        <img src="http://via.placeholder.com/400X500" class="img-responsive center-block">
    </div>
</div>
<div class="blog-widget">    
    <div class="col-md-6 blog-widget-title">Posts Recentes</div>
    <hr>
    <div class="blog-widget-content">                
        <div class="blog-widget-noticias">
        <? for($i = 0; $i <= 3; $i++){ ?>
            <p>Lorem ipsum dolor sit amet, usu vocent utroque fuisset ea, his hinc modus labitur ut, cum ex hinc liber.</p>
            <span><i class="fas fa-calendar-alt"></i> <? echo date('d/m/Y');?></span>
            <? } ?>
        </div>                
    </div>
</div>
<div class="blog-widget">    
    <div class="col-md-6 blog-widget-title">Newsletter</div>
    <hr>
    <div class="blog-widget-content">                         
        <div class="blog-widget-newsletter">  
            <p>Cadastre-se para receber informações no seu email em primeira mão</p> 
            <form method="post" action="" enctype="multipart/form-data">
                <input type="text" name="newsletter-nome" placeholder="Nome"/>
                <input type="email" name="newsletter-email" placeholder="Email"/>
                <input type="submit" value="Cadastrar"/>
            </form>             
        </div>                
    </div>
</div>
<!--BODY SIDEBAR-->