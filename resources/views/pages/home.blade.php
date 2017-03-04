@extends('layout.app')
@section('content')
	<!-- Slider -->
    <section id="slider">
        <div class="container">
            <div class="main-slider">
            	<div class="badg">
                	<p><a href="#">Popular.</a></p>
                </div>
            	<div class="flexslider">
                    <ul class="slides">
                        @foreach ($popular_posts as $post)
                            <li>
                                <img src="{{ url('resources/upload/posts/'. $post->thumb_img) }}" alt="MyPassion" />
                                <p class="flex-caption"><a href="#">{{ $post->title }}</a> 
                                    <?php $text = strip_tags($post->content); ?>
                                    {!! (strlen($text) > 70) ? substr($text,0,70).'.....' : $text !!}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            @foreach ($latest_posts as $index => $post)
                @if ($index == 4)
                    <div class="slider2">
                    	<div class="badg">
                        	<p><a href="#">Latest.</a></p>
                        </div>
                        <a href="#"><img src="{{ url('resources/upload/posts/'.$post->thumb_img) }}" alt="MyPassion" /></a>
                        <p class="caption"><a href="#">{{ $post->title }}</a> 
                            <?php $text = strip_tags($post->content); ?>
                            {!! (strlen($text) > 70) ? substr($text,0,70).'.....' : $text !!}
                        </p>
                    </div>
                @else
                    <div class="slider3">
                    	<a href="#"><img src="{{ url('resources/upload/posts/'.$post->thumb_img) }}" alt="MyPassion" /></a>
                        <p class="caption"><a href="#">{{ $post->title }} </a></p>
                    </div>
                @endif
            @endforeach
            
        </div>    
    </section>
    <!-- / Slider -->
    
    <!-- Content -->
    <section id="content">
        <div class="container">
        	<!-- Main Content -->
            <div class="main-content">
            	
                <!-- Popular News -->
            	<div class="column-one-third">
                	<h5 class="line"><span>Popular News.</span></h5>
                    <div class="outertight">
                    	<ul class="block">
                            <li>
                                <a href="#"><img src="img/trash/5.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/6.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:100%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/7.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:70%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/8.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:60%;"></span></span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- /Popular News -->
                
                <!-- Hot News -->
                <div class="column-one-third">
                	<h5 class="line"><span>Hot News.</span></h5>
                    <div class="outertight m-r-no">
                    	<ul class="block">
                            <li>
                                <a href="#"><img src="img/trash/9.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/10.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:100%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/11.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:70%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/12.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:60%;"></span></span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- /Hot News -->
                
                <!-- Life Style -->
                <div class="column-two-third">
                	<h5 class="line">
                    	<span>Life Style.</span>
                        <div class="navbar">
                            <a id="next1" class="next" href="#"><span></span></a>	
                            <a id="prev1" class="prev" href="#"><span></span></a>
                        </div>
                    </h5>
                    
                    <div class="outertight">
                    	<img src="img/trash/24.png" alt="MyPassion" />
                        <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem
Ipsum Dolor, Sit Amet Adipsing.</a></h6>
						<span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                        <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                    </div>
                    
                    <div class="outertight m-r-no">
                    	
                    	<ul class="block" id="carousel">
                            <li>
                                <a href="#"><img src="img/trash/13.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/14.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:100%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/15.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:70%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/16.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:60%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/11.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:70%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/12.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:60%;"></span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Life Style -->
                
                <!-- World News -->
                <div class="column-two-third">
                	<h5 class="line">
                    	<span>World News.</span>
                        <div class="navbar">
                            <a id="next2" class="next" href="#"><span></span></a>	
                            <a id="prev2" class="prev" href="#"><span></span></a>
                        </div>
                    </h5>
                    
                    <div class="outerwide" >
                    	<ul class="wnews" id="carousel2">
                        	<li>
                            	<img src="img/trash/25.png" alt="MyPassion" class="alignleft" />
                                <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                            </li>
                            <li>
                            	<img src="img/trash/24.png" alt="MyPassion" class="alignleft" />
                                <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                            </li>
                            <li>
                            	<img src="img/trash/26.png" alt="MyPassion" class="alignleft" />
                                <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                                <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                                <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic...</p>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="outerwide">
                    	<ul class="block2">
                            <li>
                                <a href="#"><img src="img/trash/17.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li class="m-r-no">
                                <a href="#"><img src="img/trash/18.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:100%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/19.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:70%;"></span></span>
                            </li>
                            <li class="m-r-no">
                                <a href="#"><img src="img/trash/20.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:60%;"></span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /World News -->
                
                <!-- Popular News -->
            	<div class="column-two-third">
                	<div class="outertight">
                    	<h5 class="line"><span>Business News.</span></h5>
                        
                        <div class="outertight m-r-no">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="img/trash/25.png" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="img/trash/24.png" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="img/trash/26.png" alt="MyPassion" />
                                    </li>
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem
Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                            <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                        </div>
                        
                        <ul class="block">
                            <li>
                                <a href="#"><img src="img/trash/21.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/20.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:100%;"></span></span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="outertight m-r-no">
                    	<h5 class="line"><span>Sport News.</span></h5>
                        
                        <div class="outertight m-r-no">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <img src="img/trash/27.png" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="img/trash/26.png" alt="MyPassion" />
                                    </li>
                                    <li>
                                        <img src="img/trash/24.png" alt="MyPassion" />
                                    </li>
                                </ul>
                            </div>
                            
                            <h6 class="regular"><a href="#">Blandit Rutrum, Erat et Sagittis. Lorem
Ipsum Dolor, Sit Amet Adipsing.</a></h6>
                            <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span>
                            <p>Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem purus eu sapien. Curabitur a orci nec risus lacinia vehic. Lorem ipsum 
dolor adipcising elit. Erat egestan sagittis lorem aupo dolor sit ameta, auctor libero tempor...</p>
                        </div>
                        
                        <ul class="block">
                            <li>
                                <a href="#"><img src="img/trash/23.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/22.png" alt="MyPassion" class="alignleft" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:100%;"></span></span>
                            </li>
                        </ul>
                    </div>
                	
                </div>
                <!-- /Popular News -->
                
            </div>
            <!-- /Main Content -->
            
            <!-- Left Sidebar -->
            @include('layout.sidebar')
            <!-- /Left Sidebar -->
            
        </div>    
    </section>
    <!-- / Content -->
@endsection