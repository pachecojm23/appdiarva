<section class="bg-light-white">
   <!-- Image Header -->
<div class="container">
    <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/services.jpg" alt="">
            </div>
        </div>
<!-- /.row -->
    
</div> 
</section>

        

<section id="portfolio" class="bg-light-white">
    <div class="container">
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="#Modal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/nosotros/simbolos.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>NUESTROS SÍMBOLOS</h4>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="#Modal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/nosotros/organigrama.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ORGANIGRAMA</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="#Modal3" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/nosotros/areas-curriculares.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ÁREAS CURRICULARES</h4>
                    </div>
                </div> 
            </div>     
        
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="#Modal4" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/nosotros/materias-ingles.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>MATERIAS IMPARTIDAS EN INGLÉS</h4>                      
                    </div>
                </div> 
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="#Modal5" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/nosotros/escala-calificaciones.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ESCALA DE CALIFICACIONES</h4>                      
                    </div>
                </div> 
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="#Modal6" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/nosotros/notas-conducta.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>NOTAS DE CONDUCTA</h4>                      
                    </div>
                </div> 
            </div>
        </div>                           
</section>

@include('about/modals/simbolos')
@include('about/modals/organigrama')
@include('about/modals/areas')
@include('about/modals/materias')
@include('about/modals/escalas')
@include('about/modals/notas')