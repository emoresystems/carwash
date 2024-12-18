@include('layouts.header')
 <!-- Breadcrumbs -->
 <div class="breadcrumbs overlay">
    <div class="container">
      <div class="bread-inner">
        <div class="row">
          <div class="col-12">
            <h2>Blog Single</h2>
            <ul class="bread-list">
              <li><a href="/">Home</a></li>
              <li><i class="icofont-simple-right"></i></li>
              <li class="active">Blog Single</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Single News -->
  <section class="news-single section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12">
          <div class="row">
            @foreach ($posts as $post)
           
            <div class="col-12">
              <div class="single-main">
                <!-- News Head -->
                <div class="news-head">
                  <img src="{{ $post->imageurl}}" alt="Post image" />
                </div>
                <!-- News Title -->
                <h1 class="news-title">
                  <a href="news-single.html"
                    >{{ $post->title}}</a
                  >
                </h1>
                <!-- Meta -->
                <div class="meta">
                  <div class="meta-left">
                    <span class="author"
                      ><a href="#"
                        ><img src="img/author1.jpg" alt="#" />{{$post->author}}</a
                      ></span
                    >
                    <span class="date"
                      ><i class="fa fa-clock-o"></i>{{$post->date}}</span
                    >
                  </div>
                  <div class="meta-right">
                    <span class="comments"
                      ><a href="#"
                        ><i class="fa fa-comments"></i>05 Comments</a
                      ></span
                    >
                    <span class="views"
                      ><i class="fa fa-eye"></i>33K Views</span
                    >
                  </div>
                </div>
                <!-- News Text -->
                <div class="news-text">
                  <p>{{ $post->content}}</p>                
                  <div class="image-gallery">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-image">
                          <img src="{{ $post->imageurl}}" alt="blog image" />
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-image">
                          <img src="{{ $post->imageurl}}" alt="blog image" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <p>{{ $post->content}}</p>   
                  <blockquote class="overlay">
                    <p>{{ $post->content}}</p>   
                  </blockquote>
                  <p>{{ $post->content}}</p>   
                  <p>{{ $post->content}}</p>   
                </div>
                <div class="blog-bottom">
                  <!-- Social Share -->
                  <ul class="social-share">
                    <li class="facebook">
                      <a href="#"
                        ><i class="fa fa-facebook"></i
                        ><span>Facebook</span></a
                      >
                    </li>
                    <li class="twitter">
                      <a href="#"
                        ><i class="fa fa-twitter"></i><span>Twitter</span></a
                      >
                    </li>
                    <li class="google-plus">
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li class="linkedin">
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="pinterest">
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                  <!-- Next Prev -->
                  <ul class="prev-next">
                    <li class="prev">
                      <a href="#"><i class="fa fa-angle-double-left"></i></a>
                    </li>
                    <li class="next">
                      <a href="#"><i class="fa fa-angle-double-right"></i></a>
                    </li>
                  </ul>
                  <!--/ End Next Prev -->
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="blog-comments">
                <h2>All Comments</h2>
                <div class="comments-body">
                  <!-- Single Comments -->
                  <div class="single-comments">
                    <div class="main">
                      <div class="head">
                        <img src="img/author1.jpg" alt="#" />
                      </div>
                      <div class="body">
                        <h4>Afsana Mimi</h4>
                        <div class="comment-meta">
                          <span class="meta"
                            ><i class="fa fa-calendar"></i>March 05,
                            2019</span
                          ><span class="meta"
                            ><i class="fa fa-clock-o"></i>03:38 AM</span
                          >
                        </div>
                        <p>{{$post->content}}</p>
                        <a href="#"><i class="fa fa-reply"></i>reply</a>
                      </div>
                    </div>
                  </div>
                  <!--/ End Single Comments -->
                  <!-- Single Comments -->
                  <div class="single-comments left">
                    <div class="main">
                      <div class="head">
                        <img src="img/author2.jpg" alt="#" />
                      </div>
                      <div class="body">
                        <h4>Naimur Rahman</h4>
                        <div class="comment-meta">
                          <span class="meta"
                            ><i class="fa fa-calendar"></i>March 05,
                            2019</span
                          ><span class="meta"
                            ><i class="fa fa-clock-o"></i>03:38 AM</span
                          >
                        </div>
                        <p>{{$post->content}}</p>
                        <a href="#"><i class="fa fa-reply"></i>reply</a>
                      </div>
                    </div>
                  </div>
                  <!--/ End Single Comments -->
                  <!-- Single Comments -->
                  <div class="single-comments">
                    <div class="main">
                      <div class="head">
                        <img src="img/author3.jpg" alt="#" />
                      </div>
                      <div class="body">
                        <h4>Suriya Molharta</h4>
                        <div class="comment-meta">
                          <span class="meta"
                            ><i class="fa fa-calendar"></i>March 05,
                            2019</span
                          ><span class="meta"
                            ><i class="fa fa-clock-o"></i>03:38 AM</span
                          >
                        </div>
                        <p>{{$post->content}}</p>
                        <a href="#"><i class="fa fa-reply"></i>reply</a>
                      </div>
                    </div>
                  </div>
                  <!--/ End Single Comments -->
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="comments-form">
                <h2>Leave Comments</h2>
                <!-- Contact Form -->
                <form class="form" method="post" action="{{ route('contact.store') }}">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input
                          type="text"
                          name="first-name"
                          placeholder="Author name"
                          required="required"
                        />
                      </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-4 col-12">
                      <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input
                          type="text"
                          name="last-name"
                          placeholder="Last name"
                          required="required"
                        />
                      </div>
                    </div> --}}
                    <div class="col-lg-4 col-md-4 col-12">
                      <div class="form-group">
                        <i class="fa fa-envelope"></i>
                        <input
                          type="email"
                          name="email"
                          placeholder="Author Email"
                          required="required"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group message">
                        <i class="fa fa-pencil"></i>
                        <textarea
                          name="message"
                          rows="7"
                          placeholder="Type Your Comment Here"
                        ></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group button">
                        <button type="submit" class="btn primary">
                          <i class="fa fa-send"></i>Submit Comment
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
                <!--/ End Contact Form -->
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="main-sidebar">
            <!-- Single Widget -->
            <div class="single-widget search">
              <div class="form">
                <input type="email" placeholder="Search Here..." />
                <a class="button" href="#"><i class="fa fa-search"></i></a>
              </div>
            </div>
            <!--/ End Single Widget -->
            <!-- Single Widget -->
            <div class="single-widget category">
              <h3 class="title">Blog Categories</h3>
              <ul class="categor-list">
                <li><a href="#">General Technologies</a></li>
                <li><a href="#">Web development</a></li>
                <li><a href="#">Software development</a></li>
                <li><a href="#">Graphic Design</a></li>
                <li><a href="#">Trends in software development</a></li>
              </ul>
            </div>
            <!--/ End Single Widget -->
            <!-- Single Widget -->
            <div class="single-widget recent-post">
              <h3 class="title">Recent post</h3>
              <!-- Single Post -->
              <div class="single-post">
                <div class="image">
                  <img src="{{ $post->imageurl}}" alt="#" />
                </div>
                <div class="content">
                  <h5><a href="#">We have annnounced our new product.</a></h5>
                  <ul class="comment">
                    <li>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Jan 11,
                      2020
                    </li>
                    <li>
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>35
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Single Post -->
              <!-- Single Post -->
              <div class="single-post">
                <div class="image">
                  <img src="{{ $post->imageurl}}" alt="#" />
                </div>
                <div class="content">
                  <h5>
                    <a href="#">Top five way for solving tech problems.</a>
                  </h5>
                  <ul class="comment">
                    <li>
                      <i class="fa fa-calendar" aria-hidden="true"></i>Mar 05,
                      2019
                    </li>
                    <li>
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>59
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Single Post -->
              <!-- Single Post -->
              <div class="single-post">
                <div class="image">
                  <img src="{{ $post->imageurl}}" alt="#" />
                </div>
                <div class="content">
                  <h5>
                    <a href="#">We provide highly business solutions.</a>
                  </h5>
                  <ul class="comment">
                    <li>
                      <i class="fa fa-calendar" aria-hidden="true"></i>June
                      09, 2019
                    </li>
                    <li>
                      <i class="fa fa-commenting-o" aria-hidden="true"></i>44
                    </li>
                  </ul>
                </div>
              </div>
              <!-- End Single Post -->
            </div>
            <!--/ End Single Widget -->
            <!-- Single Widget -->
            <!--/ End Single Widget -->
            <!-- Single Widget -->
            <div class="single-widget side-tags">
              <h3 class="title">Quick Links</h3>
              <ul class="tag">
                <li><a href="/">Emore</a></li>
                <li><a href="/about">Abou us</a></li>
                <li><a href="/faq">Faq</a></li>
                <li><a href="/orders">Get Software </a></li>
                <li><a href="/services">Emore Services</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/">Emore</a></li>
              </ul>
            </div>
            <!--/ End Single Widget -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ End Single News -->
@include('layouts.footer')