<?php
/**
 * Template Name: Home Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Champagne
 */

get_header('always-sticky');
?>
        <!-- HERO SLIDER -->
        <div class="slider-container rev_slider_wrapper slider-container-height-600 bg-light-5">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': [1140,960,720,540], 'gridheight': [600,600,600,600], 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,576], 'parallax': { 'type': 'mouse', 'origo': 'slidecenter', 'speed': 3000, 'levels': [1,2,3,4,5,6,7,12,16,10,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true, 'hide_under': 767, 'style': 'slider-arrows-style-1 slider-arrows-dark' }, 'bullets': {'enable': true, 'hide_under': 767, 'style': 'bullets-style-1', 'hide_onleave': false, 'h_align': 'right', 'v_align': 'bottom', 'space': 7, 'v_offset': 75, 'h_offset': 35}}}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/slides/multi-purpose/slide-3-1.jpg"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">

                        <div class="tp-caption bg-dark-3"
                            data-x="['625','435','185','100']"
                            data-y="400"
                            data-start="1000"
                            data-width="1500"
                            data-height="['155','155','155','155']"
                            data-transform_in="x:[100%];opacity:0;s:500;"
                            data-transform_idle="skX:-19deg;opacity:0.9;"
                            data-transform_out="y:[50%];opacity:0;s:500;"></div>

                        <h1 class="tp-caption text-color-light font-primary font-weight-thin"
                            data-x="right" data-hoffset="['0','20','20','20']"
                            data-y="bottom" data-voffset="['137','137','137','137']"
                            data-start="1300"
                            data-fontsize="['32','32','32','30']"
                            data-lineheight="['32','32','32','30']"
                            data-transform_in="y:[100%];opacity:0;s:500;"
                            data-transform_out="y:[-100%];opacity:0;s:500;">World-Class Technology</h1>
                        
                        <div class="tp-caption bg-light"
                            data-x="['660','460','220','110']"
                            data-y="bottom" data-voffset="['78','78','78','83']"
                            data-start="1600"
                            data-width="7"
                            data-height="['45','45','45','36']"
                            data-transform_in="x:[-100%];opacity:0;s:500;"
                            data-transform_idle="skX:-19deg"
                            data-transform_out="x:[-100%];opacity:0;s:500;"></div>

                        <div class="tp-caption text-color-light font-primary font-weight-bold"
                            data-x="right" data-hoffset="['0','20','20','20']"
                            data-y="bottom" data-voffset="['88','88','88','88']"
                            data-start="1600"
                            data-fontsize="['42','42','42','36']"
                            data-transform_in="opacity:0;s:300;"
                            data-transform_out="opacity:0;s:300;">CREATIVE COMPANY</div>

                    </li>
                    <li data-transition="fade">
                        <img src="img/slides/transparent.png"  
                            alt=""
                            class="rev-slidebg bg-light-5">

                        <div class="tp-caption rs-parallaxlevel-3"
                            data-x="['-60','-60','-60','-170']"
                            data-y="bottom" data-voffset="['-30','-30','-90','-60']"
                            data-start="2000"
                            data-type="image"
                            data-basealign="slide"
                            data-transform_in="y:[10%];opacity:0;s:500;"
                            data-transform_out="y:[10%];opacity:0;s:500;"><img src="img/slides/misc/plant.png" alt="" /></div>

                        <div class="tp-caption rs-parallaxlevel-2"
                            data-x="right" data-hoffset="['-140','-140','-200','-240']"
                            data-y="center" data-voffset="0"
                            data-start="1600"
                            data-type="image"
                            data-basealign="slide"
                            data-transform_in="x:[10%];opacity:0;s:500;"
                            data-transform_out="x:[10%];opacity:0;s:500;"><img src="img/slides/misc/notebook-right.png" alt="" /></div>

                        <div class="tp-caption text-color-dark font-primary font-weight-thin rs-parallaxlevel-1"
                            data-x="center" data-hoffset="['-222','-222','-222','-118']"
                            data-y="center" data-voffset="['-70','-70','-70','-70']"
                            data-start="1400"
                            data-fontsize="['28','28','28','28']"
                            data-basealign="slide"
                            data-transform_in="y:[100%];opacity:0;s:500;"
                            data-transform_out="y:[100%];opacity:0;s:500;">Start right now</div>

                        <div class="tp-caption text-color-dark font-primary font-weight-bold letter-spacing-10 rs-parallaxlevel-2"
                            data-x="center"
                            data-y="center" data-voffset="-20"
                            data-start="1000"
                            data-fontsize="['52','52','52','32']"
                            data-transform_in="y:[50%];opacity:0;s:500;"
                            data-transform_out="y:[50%];opacity:0;s:500;">CREATIVE DIGITAL</div>

                        <a class="tp-caption btn btn-rounded btn-primary font-weight-semibold rs-parallaxlevel-1"
                            href="#start"
                            data-hash
                            data-hash-offset="90"
                            data-x="center" data-hoffset="['205','205','205','80']"
                            data-y="center" data-voffset="['55','55','55','45']"
                            data-start="1600"
                            data-whitespace="nowrap"
                            data-fontsize="['13','13','13','20']"
                            data-paddingtop="['13','13','13','13']"
                            data-paddingbottom="['13','13','13','13']"
                            data-paddingleft="['65','65','65','65']"
                            data-paddingright="['65','65','65','65']"	 
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-transform_out="y:[50%];opacity:0;s:500;">GET STARTED</a>

                        <a class="tp-caption btn btn-link font-weight-semibold text-color-dark text-decoration-none d-flex align-items-center rs-parallaxlevel-3"
                            href="portfolio-grid-4-columns.html"
                            data-x="center" data-hoffset="['242','242','242','115']"
                            data-y="center" data-voffset="['115','115','115','110']"
                            data-start="1900"
                            data-whitespace="nowrap"
                            data-fontsize="['13','13','13','20']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            data-transform_out="y:[50%];opacity:0;s:500;">OUR PORTFOLIO <i class="fas fa-angle-right text-color-primary text-4 ml-2"></i></a>
                            
                    </li>
                </ul>
            </div>
        </div>
            <!-- CALL TO ACTION -->
            <section class="section call-to-action call-to-action-text-light call-to-action-height-2 bg-primary">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="call-to-action-content text-center text-md-left appear-animation" data-appear-animation="fadeInLeftShorter">
                                <h2 class="font-weight-semibold">Discover EZY. It's easier than you think.</h2>
                                <p class="font-weight-light mb-0">Start right now to create an amazing website.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="call-to-action-btn appear-animation" data-appear-animation="fadeInRightShorter">
                                <a href="#" target="_blank" class="btn btn-light btn-rounded btn-icon-effect-1 btn-h-4 btn-v-3 font-weight-bold">
                                    <span class="wrap">
                                        <span>BUY EZY NOW</span>
                                        <strong class="font-weight-semibold">$16</strong>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>			

            <!-- PARALLAX -->
            <section class="section section-background section-height-5" data-plugin-image-background data-plugin-options="{'imageUrl': 'img/parallax/parallax-5.jpg'}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="font-weight-semibold text-light mb-0">Section Background</h2>
                            <p class="font-weight-light text-light mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros ipsum, facilisis eget scelerisque non, fermentum at tellus.</p>
                        </div>
                    </div>
                </div>
            </section>
<?php
get_footer();
