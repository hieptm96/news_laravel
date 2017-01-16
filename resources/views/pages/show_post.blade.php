@extends('layout.app')
@section('content')
    <!-- Content -->
    <section id="content">
        <div class="container">
        	
            <div class="breadcrumbs column">
            	<p><a href="#">Home.</a>   \\   <a href="#">{{ $post->category->name }}.</a></p>
            </div>
        
        	<!-- Main Content -->
            <div class="main-content">
                
                <!-- Single -->
                <div class="column-two-third single">
                	<div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ url('resources/upload/posts/'.$post->thumb_img) }}" alt="MyPassion" />
                            </li>
                        </ul>
                    </div>
                    
                    <h6 class="title">{{ $post->title }}</h6>
                    <!-- <span class="meta">26 May, 2013.   \\   <a href="#">World News.</a>   \\   <a href="#">No Coments.</a></span> -->
                    <span class="meta">{{ $post->created_at }}</span>
                    <p>{!! $post->content !!} </p>
                    <ul class="sharebox">
                        <li><a href="#"><span class="twitter">Tweet</span></a></li>
                        <li><a href="#"><span class="pinterest">Pin it</span></a></li>
                        <li><a href="#"><span class="facebook">Like</span></a></li>
                    </ul>
                    
                    
                    <div class="authorbox">
                        <img src="img/trash/author.png" alt="MyPassion" />
                        <h6>MyPassion.</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales dapibus dui, sed iaculis metus facilisis sed. Etiam scelerisque molestie purus vel mollis. Mauris dapibu quam id turpis dignissim rutrum.</p>
                    </div>
                    
                    <div class="relatednews">
                        <h5 class="line"><span>Related News.</span></h5>
                        <ul>
                            <li>
                                <a href="#"><img src="img/trash/5.png" alt="MyPassion" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/6.png" alt="MyPassion" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/7.png" alt="MyPassion" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                            <li>
                                <a href="#"><img src="img/trash/8.png" alt="MyPassion" /></a>
                                <p>
                                    <span>26 May, 2013.</span>
                                    <a href="#">Blandit Rutrum, Erat et Sagittis.</a>
                                </p>
                                <span class="rating"><span style="width:80%;"></span></span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="comments">
                        <h5 class="line"><span>Comments.</span></h5>
                        <ul>
                            <li>
                                <div>
                                    <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                    <div class="commment-text-wrap">
                                        <div class="comment-data">
                                            <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                        </div>
                                        <div class="comment-text">Curabitur nunc mauris, <a href="#">link test</a> id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                    </div>
                                    
                                </div>
                                <ul class="children">
                                    <li>
                                        <div>
                                            <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                            <div class="commment-text-wrap">
                                                <div class="comment-data">
                                                    <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                </div>
                                                <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                            </div>
                                        </div>
                                        
                                        <ul class="children">
                                            <li>
                                                <div>
                                                    <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                    <div class="commment-text-wrap">
                                                        <div class="comment-data">
                                                            <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                        </div>
                                                        <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                    </div>
                                                </div>
                                                
                                                <ul class="children">
                                                    <li>
                                                        <div>
                                                            <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                            <div class="commment-text-wrap">
                                                                <div class="comment-data">
                                                                    <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                </div>
                                                                <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                            </div>
                                                        </div>
                                                        
                                                        <ul class="children">
                                                            <li>
                                                                <div>
                                                                    <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                                    <div class="commment-text-wrap">
                                                                        <div class="comment-data">
                                                                            <p>MyPassion <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                        </div>
                                                                        <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <ul class="children">
                                                                    <li>
                                                                        <div>
                                                                            <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                                            <div class="commment-text-wrap">
                                                                                <div class="comment-data">
                                                                                    <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                                                </div>
                                                                                <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                
                                                            </li>
                                                        </ul>
                                                        
                                                    </li>
                                                </ul>
                                                
                                            </li>
                                        </ul>
                                        
                                        <ul class="children">
                                            <li>
                                                <div>
                                                    <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                                    <div class="commment-text-wrap">
                                                        <div class="comment-data">
                                                            <p><a href="#" class="url">MyPassion </a><br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                        </div>
                                                        <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                </ul>
                                <ul class="children">
                                    <li>
                                        <div>
                                            <div class="comment-avatar"><img src="img/avatar.png" alt="MyPassion" /></div>
                                            <div class="commment-text-wrap">
                                                <div class="comment-data">
                                                    <p><a href="#" class="url">MyPassion</a> <br /> <span>January 12, 2013 - <a href="#" class="comment-reply-link">reply</a></span></p>
                                                </div>
                                                <div class="comment-text">Curabitur nunc mauris, imperdiet id dictum quis, aliquet vel diam. Aliquam gravida, augue et dictum hendrerit, nisl erat congue elit, et molestie magna sapien cursus tortor.</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="comment-form">
                        <h5 class="line"><span>Leave a reply.</span></h5>
                        <form action="#" method="post">
                            <div class="form">
                                <label>Name*</label>
                                <div class="input">
                                    <input type="text" class="name" />
                                </div>
                            </div>
                            <div class="form">
                                <label>Email*</label>
                                <div class="input">
                                    <input type="text" class="name" />
                                </div>
                            </div>
                            <div class="form">
                                <label>Website</label>
                                <div class="input">
                                    <input type="text" class="name" />
                                </div>
                            </div>
                            <div class="form">
                                <label>Comment*</label>
                                <textarea rows="10" cols="20"></textarea>
                            </div>
                            <input type="submit" class="post-comment" value="Post Comment" />
                        </form>
                    </div>
                    
                </div>
                <!-- /Single -->
                
            </div>
            <!-- /Main Content -->
                
            <!-- Left Sidebar -->
            @include('layout.sidebar')
            <!-- /Left Sidebar -->
        </div>    
    </section>
    <!-- / Content -->
@endsection
