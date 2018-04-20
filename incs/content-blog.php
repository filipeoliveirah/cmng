<div class="blog-content">
    <div class="col-md-8">
        <!--BODY NEW-->
        <? for($i = 0; $i <= 2; $i++){ ?>
        <div class="blog-card">
            <img src="http://via.placeholder.com/900x350" class="img-responsive">
            <div class="blog-tag-categoria"><span>Saúde</span> <span>Família</span></div>
            <div class="blog-card-text">
                <h2>Lorem ipsum dolor sit amet, usu vocent utroque fuisset ea.</h2>
                <p>Lorem ipsum dolor sit amet, usu vocent utroque fuisset ea, his hinc modus labitur ut, cum ex hinc liber. Eu vim solum oratio phaedrum, quis facete his id. Ubique noster te est, debet postea pro an. Quo minim noster equidem et, duo eius iuvaret ut. Quem erat illud at nec. Nec ne nostrum appareat mediocritatem, rebum quando reprehendunt quo ut, quod saperet contentiones pro in. Per decore quaerendum ne, duis singulis dignissim cum et. Fabulas splendide definiebas nec no. Natum maluisset duo eu, vix id movet omittantur. Ex petentium necessitatibus sed.</p>
            </div> 
            <div class="blog-card-footer">
                <div class="col-md-3"><div class="blog-card-data">19/04/2018</div></div>
                <div class="col-md-6"><div class="blog-card-social"><i class="fab fa-facebook-f"> /cmng</i><i class="fab fa-instagram"> @cmng</i></div></div>
                <div class="col-md-3"><div class="blog-card-leia-mais">LEIA MAIS</div></div>
            </div>          
        </div>
        <? } ?>
        <div class="blog-paginacao">
            <a href="javascript:;" class="recentes">
                <i class="fas fa-angle-double-left"></i> POSTS RECENTES
            </a>
            /
            <a href="javascript:;" class="antigos">ANTIGOS
                <i class="fas fa-angle-double-right"></i>
            </a>
        </div>
        <!--BODY NEW-->
    </div>
    <div class="col-md-4">
    <?php include_once("incs/sidebar.php");?>
    </div>
</div>