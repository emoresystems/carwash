@include('layouts.header')


<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Our Blogs</h2>
                    <ul class="bread-list">
                        <li><a href="/">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
<section class="blog section" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Keep Up With Our Latest Software Innovations</h2>
					<img src="img/section-img.png" alt="#">
					<p>Stay ahead of the curve with our newest software developments and technological breakthroughs.</p>
				</div>
			</div>
		</div>
        <!-- Start Blog Area -->

		<div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="news-head">
                                {{ $post->title }} by {{ $post->author }}
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <div class="date">{{ $post->date }}</div>
                                    <h4>{{ $post->title }}</h4>
                                    <p class="text">{{ \Illuminate\Support\Str::limit(strip_tags($post->content), 100) }}</p>
                                </div>
                                @if (str_word_count($post->content) > 30)
                                    <div style="text-align:center; margin-top:15px;">
                                        <button class="btn btn-primary read-more" data-toggle="modal" data-target="#postModal{{ $loop->index }}">Read more</button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
        
                <!-- Modal -->
                <div class="modal fade" id="postModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="postModalLabel">{{ $post->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>{{ $post->content }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            @endforeach
        </div>
        
        
        
	</div>
</section>

@include('layouts.footer')

