
                <div class="widget hidden-sm">
                    <form role="form">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="icon-search"></i>
                            </span>
                            <input type="text" class="form-control addon-left" placeholder="Search for...">
                        </div>
                    </form>
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5>sobre vaslibre</h5>
                    </div>
                    <img src="https://vaslibre.org.ve/img/vaslibre_log.png" class="img-responsive m-b" alt="VaSLibre">
                    <p><strong>VaSLibre</strong> (Valencia/Venezuela Software Libre) nació de la nada, de un solo pensamiento, como un pensamiento radical, donde muchos de nosotros teníamos la misma meta, construir un grupo fuerte y solidario, contando para ello con una buena base de colaboradores. </p>
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5>últimas publicaciones</h5>
                    </div>
                    <ul class="latest-post">
                    @for($i = 0; $i < 4; $i++)
                        <li>
                            <a href="#"><img src="images/bg-2.jpg" alt="" class="img-latest"></a>
                            <div class="title-latest text-edit">
                                <a href="">Using Modern SEO</a>
                                    August 25, 2014
                            </div>
                        </li>                        
                    @endfor
                    </ul>
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            nuestras redes
                        </h5>
                    </div>
                    <div class="w-social social-btn">
                        <a href="#" class="sb-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="sb-pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            nube de tags
                        </h5>
                    </div>
                    <div class="w-tags">
                        <a href="" class="text-edit">Portfolio</a>
                        <a href="" class="text-edit">Design</a>
                        <a href="" class="text-edit">Link</a>
                        <a href="" class="text-edit">Gallery</a>
                        <a href="" class="text-edit">Video</a>
                        <a href="" class="text-edit">Clean</a>
                        <a href="" class="text-edit">Retina</a>
                    </div>
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            archivos
                        </h5>
                    </div>
                    @include('front.partials.widgets.archives')
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            SITIOS AMIGOS
                        </h5>
                    </div>
                    <div class="w-tags">
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div>
                <div class="widget">
                    <div class="w-title">
                        <h5 class="m-b-md">
                            planeta vaslibre
                        </h5>
                    </div>                    
                    <img src="http://planeta.vaslibre.org.ve/img/planeta_vaslibre_rss_200x200.png" class="img-responsive m-b" alt="VaSLibre">
                </div>   