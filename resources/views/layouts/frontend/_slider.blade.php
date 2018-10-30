<!-- BEGIN SLIDER -->
        <div class="page-slider margin-bottom-40">
            <div id="carousel-example-generic" class="carousel slide carousel-slider">
                <!-- Indicators -->
                <ol class="carousel-indicators carousel-indicators-frontend">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    @foreach(sliders() as $key => $slider)
                    @if($slider['theme_option_slider_'.$key.'_image'] != '')
                        <div class="item @if($key == 1) active @endif" style="background: url({{url('/')}}{{$slider['theme_option_slider_'.$key.'_image']}});background-size: cover; background-position: center center;">
                            <div class="container">
                                <div class="carousel-position-seven text-uppercase text-center">
                                    <h2 class="margin-bottom-20 animate-delay carousel-title-v5" data-animation="animated fadeInDown">
                                        {{$slider['theme_option_slider_'.$key.'_title']}} <br/>                                    
                                    </h2>
                                    <p class="carousel-subtitle-v5 border-top-bottom margin-bottom-30" data-animation="animated fadeInDown">{{$slider['theme_option_slider_'.$key.'_subtitle']}}</p>
                                    <a class="carousel-btn-green" href="{{$slider['theme_option_slider_'.$key.'_button_link']}}" data-animation="animated fadeInUp">{{$slider['theme_option_slider_'.$key.'_button_text']}}</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach                   

                <!-- Controls -->
                <a class="left carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a class="right carousel-control carousel-control-shop carousel-control-frontend" href="#carousel-example-generic" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <!-- END SLIDER -->