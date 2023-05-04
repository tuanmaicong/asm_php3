@extends('templates.layoutclient')
@section('content')
<main>
    <!-- hero-area-sart -->
    <section class="slider-area hero-height position-relative fix" data-background="assets/img/slider/Image.jpg">
        <img class="shape-3 d-none d-xxl-block" src="assets/img/shape/shape-03.png" alt="image not found">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="hero-text pt-95">
                        <h5>Discover your journey</h5>
                        <h2>Discover <span class="down-mark-line">4500+</span> Courses
                            from top Instructors
                            Around the World</h2>
                        <p>Take your learning organization to the next level. to the next level. Who'll
                            share their knowledge to people around the world.</p>
                        <div class="hero-btn">
                            <a class="edu-btn" href="course.html">View all course</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="hero-right position-relative">
                        <img data-depth="0.2" class="shape shape-1" src="assets/img/shape/shape-01.png" alt="shape">
                        <img data-depth="0.2" class="shape-2" src="assets/img/shape/shape-02.png" alt="shape">
                        <img class="shape-6" src="assets/img/shape/slider-shape-6.png" alt="shape">
                        <div class="shape-4">
                            <img class="" src="assets/img/shape/shape-04.png" alt="shape">
                            <h5 class="hero-shape-text">Top Rated
                                Instructors</h5>
                        </div>
                        <div class="shape-5">
                            <div class="course-card">
                                <img src="assets/img/shape/slider-card-1.png" alt="image not found">
                                <img src="assets/img/shape/slider-card-2.png" alt="image not found">
                                <img src="assets/img/shape/slider-card-3.png" alt="image not found">
                                <img src="assets/img/shape/slider-card-4.png" alt="image not found">
                                <span><i class="far fa-plus"></i></span>
                            </div>
                            <h5>More than <span>21,500+</span> students
                                enrolled around the world</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->
    <!-- catagory-area-start -->
    <!-- catagory-area-end -->
    <!-- portfolio main area start  -->
    <section class="course-area p-relative pt-110 pb-90">
        <div class="course-shape-1">
            <img src="assets/img/shape/portfolio-shap-1.png" alt="shape">
        </div>
        <div class="course-shape-2">
            <img src="assets/img/shape/portfolio-shap-2.png" alt="shape">
        </div>
        <div class="course-shape-3">
            <img src="assets/img/shape/portfolio-shap-3.png" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 f-left">
                    <div class="section-title mb-50">
                        <h2>Discover<br>
                            World's Best <span class="down-mark-line">Courses</span></h2>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="portfolio-button mt-60">
                        <button class="active" data-filter="*">View All<span class="port-red">[06]</span></button>
                        <button data-filter=".c-1">Data Science<span class="port-red">[01]</span></button>
                        <button data-filter=".c-2">Development<span class="port-red">[03]</span></button>
                        <button data-filter=".c-3">Business<span class="port-red">[01]</span></button>
                        <button data-filter=".c-4">Life Styles<span class="port-red">[01]</span></button>
                    </div>
                </div>
            </div>
            <div class="row grid course-main-items">
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-2">
                    <div class="eduman-course-main-wrapper mb-30">
                        <div class="course-cart">
                            <div class="course-info-wrapper">
                                <div class="cart-info-body">
                                    <span class="category-color category-color-1"><a href="course.html">Development</a></span>
                                    <a href="course-details.html">
                                        <h3>WordPress Development Course for Plugins &amp;
                                            Themes</h3>
                                    </a>
                                    <div class="cart-lavel">
                                        <h5>Level : <span>Beginner</span></h5>
                                        <p>Knowledge is power. Information is liberating. Education is the premise of
                                            progress, in every society, in every family</p>
                                    </div>
                                    <div class="info-cart-text">
                                        <ul>
                                            <li><i class="far fa-check"></i>Scratch to HTML</li>
                                            <li><i class="far fa-check"></i>Learn how to code in Python</li>
                                            <li><i class="far fa-check"></i>Unlimited backend database creation</li>
                                            <li><i class="far fa-check"></i>Adobe XD Tutorials</li>
                                        </ul>
                                    </div>
                                    <div class="course-action">
                                        <a href="course-details.html" class="view-details-btn">View Details</a>
                                        <button class="wishlist-btn"><i class="flaticon-like"></i></button>
                                        <a href="course-details.html" class="c-share-btn"><i class="flaticon-previous"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-thumb w-img">
                            <a href="course-details.html"><img src="assets/img/portfilo/course-img-01.jpg"
                                                               alt="course-img"></a>
                        </div>
                        <div class="eduman-course-wraper">
                            <div class="eduman-course-heading">
                                <a href="course.html" class="course-link-color-1">Development</a>
                                <span class="couse-star"><i class="fas fa-star"></i>4.9 (25)</span>
                            </div>
                            <div class="eduman-course-text">
                                <h3><a href="course-details.html">WordPress Development Course for Plugins &amp; Themes</a>
                                </h3>
                            </div>
                            <div class="eduman-course-meta">
                                <div class="eduman-course-price">
                                    <span class="price-now">$47.00 </span>
                                    <del class="price-old">$75.50</del>
                                </div>
                                <div class="eduman-course-tutor"><img src="assets/img/portfilo/course-tutor-01.png"
                                                                      alt="image not found">
                                    <a href="instructor-profile.html"><span>Danial</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-footer">
                            <div class="course-lessson-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.471" height="16.471"
                                     viewBox="0 0 16.471 16.471">
                                    <g id="blackboar09" transform="translate(-0.008)">
                                        <path id="Path_01" data-name="Path 101"
                                              d="M16,1.222H8.726V.483a.483.483,0,1,0-.965,0v.74H.491A.483.483,0,0,0,.008,1.7V13.517A.483.483,0,0,0,.491,14H5.24L4.23,15.748a.483.483,0,1,0,.836.483L6.354,14H7.761v1.99a.483.483,0,0,0,.965,0V14h1.407l1.288,2.231a.483.483,0,1,0,.836-.483L11.247,14H16a.483.483,0,0,0,.483-.483V1.7A.483.483,0,0,0,16,1.222Zm-.483.965v8.905H.973V2.187Zm0,10.847H.973v-.976H15.514Z"
                                              fill="#575757" />
                                    </g>
                                </svg>
                                <span class="ms-2">12 Lessons</span>
                            </div>
                            <div class="course-deteals-btn">
                                <a href="course-details.html"><span class="me-2">View Details</span><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-2">
                    <div class="eduman-course-main-wrapper mb-30">
                        <div class="course-cart">
                            <div class="course-info-wrapper">
                                <div class="cart-info-body">
                                    <span class="category-color category-color-1"><a href="course.html">Development</a></span>
                                    <a href="course-details.html">
                                        <h3>Master Google Docs: Free online documents for
                                            personal use</h3>
                                    </a>
                                    <div class="cart-lavel">
                                        <h5>Level : <span>Beginner</span></h5>
                                        <p>Knowledge is power. Information is liberating. Education is the premise of
                                            progress, in every society, in every family</p>
                                    </div>
                                    <div class="info-cart-text">
                                        <ul>
                                            <li><i class="far fa-check"></i>Scratch to HTML</li>
                                            <li><i class="far fa-check"></i>Learn how to code in Python</li>
                                            <li><i class="far fa-check"></i>Unlimited backend database creation</li>
                                            <li><i class="far fa-check"></i>Adobe XD Tutorials</li>
                                        </ul>
                                    </div>
                                    <div class="course-action">
                                        <a href="course-details.html" class="view-details-btn">View Details</a>
                                        <button class="wishlist-btn"><i class="flaticon-like"></i></button>
                                        <a href="course-details.html" class="c-share-btn"><i class="flaticon-previous"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-thumb w-img">
                            <a href="course-details.html"><img src="assets/img/portfilo/course-img-02.jpg"
                                                               alt="course-img"></a>
                        </div>
                        <div class="eduman-course-wraper">
                            <div class="eduman-course-heading">
                                <a href="course.html" class="course-link-color-1">Development</a>
                                <span class="couse-star"><i class="fas fa-star"></i>4.9 (25)</span>
                            </div>
                            <div class="eduman-course-text">
                                <h3><a href="course-details.html">Master Google Docs: Free online documents for personal
                                        use</a></h3>
                            </div>
                            <div class="eduman-course-meta">
                                <div class="eduman-course-price">
                                    <span class="price-now">$47.00 </span>
                                </div>
                                <div class="eduman-course-tutor">
                                    <img src="assets/img/portfilo/course-tutor-02.png" alt="image not found">
                                    <a href="instructor-profile.html"><span>Mark Hanry</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-footer">
                            <div class="course-lessson-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.471" height="16.471"
                                     viewBox="0 0 16.471 16.471">
                                    <g id="blackboar09154" transform="translate(-0.008)">
                                        <path id="Path_2501" data-name="Path 101"
                                              d="M16,1.222H8.726V.483a.483.483,0,1,0-.965,0v.74H.491A.483.483,0,0,0,.008,1.7V13.517A.483.483,0,0,0,.491,14H5.24L4.23,15.748a.483.483,0,1,0,.836.483L6.354,14H7.761v1.99a.483.483,0,0,0,.965,0V14h1.407l1.288,2.231a.483.483,0,1,0,.836-.483L11.247,14H16a.483.483,0,0,0,.483-.483V1.7A.483.483,0,0,0,16,1.222Zm-.483.965v8.905H.973V2.187Zm0,10.847H.973v-.976H15.514Z"
                                              fill="#575757" />
                                    </g>
                                </svg>
                                <span class="ms-2">12 Lessons</span>
                            </div>
                            <div class="course-deteals-btn">
                                <a href="course-details.html"><span class="me-2">View Details</span><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-3">
                    <div class="eduman-course-main-wrapper mb-30">
                        <div class="course-cart">
                            <div class="course-info-wrapper">
                                <div class="cart-info-body">
                                    <span class="category-color category-color-3"><a href="course.html">Business</a></span>
                                    <a href="course-details.html">
                                        <h3>Write Better Emails: Tactics for Smarter Team
                                            Communication</h3>
                                    </a>
                                    <div class="cart-lavel">
                                        <h5>Level : <span>Beginner</span></h5>
                                        <p>Knowledge is power. Information is liberating. Education is the premise of
                                            progress, in every society, in every family</p>
                                    </div>
                                    <div class="info-cart-text">
                                        <ul>
                                            <li><i class="far fa-check"></i>Scratch to HTML</li>
                                            <li><i class="far fa-check"></i>Learn how to code in Python</li>
                                            <li><i class="far fa-check"></i>Unlimited backend database creation</li>
                                            <li><i class="far fa-check"></i>Adobe XD Tutorials</li>
                                        </ul>
                                    </div>
                                    <div class="course-action">
                                        <a href="course-details.html" class="view-details-btn">View Details</a>
                                        <button class="wishlist-btn"><i class="flaticon-like"></i></button>
                                        <a href="course-details.html" class="c-share-btn"><i class="flaticon-previous"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-thumb w-img">
                            <a href="course-details.html"><img src="assets/img/portfilo/course-img-03.jpg"
                                                               alt="course-img"></a>
                        </div>
                        <div class="eduman-course-wraper">
                            <div class="eduman-course-heading">
                                <a href="course.html" class="course-link-color-3">Business</a>
                                <span class="couse-star"><i class="fas fa-star"></i>4.9 (25)</span>
                            </div>
                            <div class="eduman-course-text">
                                <h3><a href="course-details.html">Write Better Emails: Tactics for Smarter Team
                                        Communication</a></h3>
                            </div>
                            <div class="eduman-course-meta">
                                <div class="eduman-course-price">
                                    <span class="price-now">FREE </span>
                                </div>
                                <div class="eduman-course-tutor">
                                    <img src="assets/img/portfilo/course-tutor-03.png" alt="image not found">
                                    <a href="instructor-profile.html"><span>Junior Lucy</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-footer">
                            <div class="course-lessson-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.471" height="16.471"
                                     viewBox="0 0 16.471 16.471">
                                    <g id="blackboard-11" transform="translate(-0.008)">
                                        <path id="Path_00001" data-name="Path 101"
                                              d="M16,1.222H8.726V.483a.483.483,0,1,0-.965,0v.74H.491A.483.483,0,0,0,.008,1.7V13.517A.483.483,0,0,0,.491,14H5.24L4.23,15.748a.483.483,0,1,0,.836.483L6.354,14H7.761v1.99a.483.483,0,0,0,.965,0V14h1.407l1.288,2.231a.483.483,0,1,0,.836-.483L11.247,14H16a.483.483,0,0,0,.483-.483V1.7A.483.483,0,0,0,16,1.222Zm-.483.965v8.905H.973V2.187Zm0,10.847H.973v-.976H15.514Z"
                                              fill="#575757" />
                                    </g>
                                </svg>
                                <span class="ms-2">12 Lessons</span>
                            </div>
                            <div class="course-deteals-btn">
                                <a href="course-details.html"><span class="me-2">View Details</span><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-2">
                    <div class="eduman-course-main-wrapper mb-30">
                        <div class="course-cart">
                            <div class="course-info-wrapper">
                                <div class="cart-info-body">
                                    <span class="category-color category-color-1"><a href="course.html">Development</a></span>
                                    <a href="course-details.html">
                                        <h3>Python and Django Full Stack Web Developer
                                            Bootcamp</h3>
                                    </a>
                                    <div class="cart-lavel">
                                        <h5>Level : <span>Beginner</span></h5>
                                        <p>Knowledge is power. Information is liberating. Education is the premise of
                                            progress, in every society, in every family</p>
                                    </div>
                                    <div class="info-cart-text">
                                        <ul>
                                            <li><i class="far fa-check"></i>Scratch to HTML</li>
                                            <li><i class="far fa-check"></i>Learn how to code in Python</li>
                                            <li><i class="far fa-check"></i>Unlimited backend database creation</li>
                                            <li><i class="far fa-check"></i>Adobe XD Tutorials</li>
                                        </ul>
                                    </div>
                                    <div class="course-action">
                                        <a href="course-details.html" class="view-details-btn">View Details</a>
                                        <button class="wishlist-btn"><i class="flaticon-like"></i></button>
                                        <a href="course-details.html" class="c-share-btn"><i class="flaticon-previous"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-thumb w-img">
                            <a href="course-details.html"><img src="assets/img/portfilo/course-img-05.jpg"
                                                               alt="course-img"></a>
                        </div>
                        <div class="eduman-course-wraper">
                            <div class="eduman-course-heading">
                                <a href="course.html" class="course-link-color-1">Development</a>
                                <span class="couse-star"><i class="fas fa-star"></i>4.9 (25)</span>
                            </div>
                            <div class="eduman-course-text">
                                <h3><a href="course-details.html">Python and Django Full Stack Web Developer Bootcamp</a>
                                </h3>
                            </div>
                            <div class="eduman-course-meta">
                                <div class="eduman-course-price">
                                    <span class="price-now">$47.00 </span>
                                    <del class="price-old">$75.50</del>
                                </div>
                                <div class="eduman-course-tutor">
                                    <img src="assets/img/portfilo/course-tutor-05.png" alt="image not found">
                                    <a href="instructor-profile.html"><span>Edyal Romel</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-footer">
                            <div class="course-lessson-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.471" height="16.471"
                                     viewBox="0 0 16.471 16.471">
                                    <g id="blackboard" transform="translate(-0.008)">
                                        <path id="Path_101" data-name="Path 101"
                                              d="M16,1.222H8.726V.483a.483.483,0,1,0-.965,0v.74H.491A.483.483,0,0,0,.008,1.7V13.517A.483.483,0,0,0,.491,14H5.24L4.23,15.748a.483.483,0,1,0,.836.483L6.354,14H7.761v1.99a.483.483,0,0,0,.965,0V14h1.407l1.288,2.231a.483.483,0,1,0,.836-.483L11.247,14H16a.483.483,0,0,0,.483-.483V1.7A.483.483,0,0,0,16,1.222Zm-.483.965v8.905H.973V2.187Zm0,10.847H.973v-.976H15.514Z"
                                              fill="#575757" />
                                    </g>
                                </svg>
                                <span class="ms-2">12 Lessons</span>
                            </div>
                            <div class="course-deteals-btn">
                                <a href="course-details.html"><span class="me-2">View Details</span><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-1">
                    <div class="eduman-course-main-wrapper mb-30">
                        <div class="course-cart">
                            <div class="course-info-wrapper">
                                <div class="cart-info-body">
                              <span class="category-color category-color-5"><a href="course.html">Data
                                    Science</a></span>
                                    <a href="course-details.html">
                                        <h3>Data Science Real-Life Data Science Exercises
                                            Included</h3>
                                    </a>
                                    <div class="cart-lavel">
                                        <h5>Level : <span>Beginner</span></h5>
                                        <p>Knowledge is power. Information is liberating. Education is the premise of
                                            progress, in every society, in every family</p>
                                    </div>
                                    <div class="info-cart-text">
                                        <ul>
                                            <li><i class="far fa-check"></i>Scratch to HTML</li>
                                            <li><i class="far fa-check"></i>Learn how to code in Python</li>
                                            <li><i class="far fa-check"></i>Unlimited backend database creation</li>
                                            <li><i class="far fa-check"></i>Adobe XD Tutorials</li>
                                        </ul>
                                    </div>
                                    <div class="course-action">
                                        <a href="course-details.html" class="view-details-btn">View Details</a>
                                        <button class="wishlist-btn"><i class="flaticon-like"></i></button>
                                        <a href="course-details.html" class="c-share-btn"><i class="flaticon-previous"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-thumb w-img">
                            <a href="course-details.html"><img src="assets/img/portfilo/course-img-06.jpg"
                                                               alt="course-img"></a>
                        </div>
                        <div class="eduman-course-wraper">
                            <div class="eduman-course-heading">
                                <a href="course.html" class="course-link-color-5">Data Science</a>
                                <span class="couse-star"><i class="fas fa-star"></i>4.9 (25)</span>
                            </div>
                            <div class="eduman-course-text">
                                <h3><a href="course-details.html">Data Science Real-Life Data Science Exercises
                                        Included</a>
                                </h3>
                            </div>
                            <div class="eduman-course-meta">
                                <div class="eduman-course-price">
                                    <span class="price-now">$47.00 </span>
                                </div>
                                <div class="eduman-course-tutor">
                                    <img src="assets/img/portfilo/course-tutor-06.png" alt="image not found">
                                    <a href="instructor-profile.html"><span>Mark Hanry</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-footer">
                            <div class="course-lessson-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.471" height="16.471"
                                     viewBox="0 0 16.471 16.471">
                                    <g id="blackboard-13" transform="translate(-0.008)">
                                        <path id="Path_000" data-name="Path 101"
                                              d="M16,1.222H8.726V.483a.483.483,0,1,0-.965,0v.74H.491A.483.483,0,0,0,.008,1.7V13.517A.483.483,0,0,0,.491,14H5.24L4.23,15.748a.483.483,0,1,0,.836.483L6.354,14H7.761v1.99a.483.483,0,0,0,.965,0V14h1.407l1.288,2.231a.483.483,0,1,0,.836-.483L11.247,14H16a.483.483,0,0,0,.483-.483V1.7A.483.483,0,0,0,16,1.222Zm-.483.965v8.905H.973V2.187Zm0,10.847H.973v-.976H15.514Z"
                                              fill="#575757" />
                                    </g>
                                </svg>
                                <span class="ms-2">12 Lessons</span>
                            </div>
                            <div class="course-deteals-btn">
                                <a href="course-details.html"><span class="me-2">View Details</span><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 grid-item c-4">
                    <div class="eduman-course-main-wrapper mb-30">
                        <div class="course-cart">
                            <div class="course-info-wrapper">
                                <div class="cart-info-body">
                                    <span class="category-color category-color-4"><a href="course.html">Life Style</a></span>
                                    <a href="course-details.html">
                                        <h3>Become a Super Human: Naturally & Safely Boost</h3>
                                    </a>
                                    <div class="cart-lavel">
                                        <h5>Level : <span>Beginner</span></h5>
                                        <p>Knowledge is power. Information is liberating. Education is the premise of
                                            progress, in every society, in every family</p>
                                    </div>
                                    <div class="info-cart-text">
                                        <ul>
                                            <li><i class="far fa-check"></i>Scratch to HTML</li>
                                            <li><i class="far fa-check"></i>Learn how to code in Python</li>
                                            <li><i class="far fa-check"></i>Unlimited backend database creation</li>
                                            <li><i class="far fa-check"></i>Adobe XD Tutorials</li>
                                        </ul>
                                    </div>
                                    <div class="course-action">
                                        <a href="course-details.html" class="view-details-btn">View Details</a>
                                        <button class="wishlist-btn"><i class="flaticon-like"></i></button>
                                        <a href="course-details.html" class="c-share-btn"><i class="flaticon-previous"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-thumb w-img">
                            <a href="course-details.html"><img src="assets/img/portfilo/course-img-04.jpg"
                                                               alt="course-img"></a>
                        </div>
                        <div class="eduman-course-wraper">
                            <div class="eduman-course-heading">
                                <a href="course.html" class="course-link-color-4">Life Style</a>
                                <span class="couse-star"><i class="fas fa-star"></i>4.9 (25)</span>
                            </div>
                            <div class="eduman-course-text">
                                <h3><a href="course-details.html">Become a Super Human: Naturally & Safely Boost</a></h3>
                            </div>
                            <div class="eduman-course-meta">
                                <div class="eduman-course-price">
                                    <span class="price-now">$47.00</span>
                                </div>
                                <div class="eduman-course-tutor">
                                    <img src="assets/img/portfilo/course-tutor-04.png" alt="image not found">
                                    <a href="instructor-profile.html"><span>Danial</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="eduman-course-footer">
                            <div class="course-lessson-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.471" height="16.471"
                                     viewBox="0 0 16.471 16.471">
                                    <g id="blackboard-10" transform="translate(-0.008)">
                                        <path id="Path_100000" data-name="Path 101"
                                              d="M16,1.222H8.726V.483a.483.483,0,1,0-.965,0v.74H.491A.483.483,0,0,0,.008,1.7V13.517A.483.483,0,0,0,.491,14H5.24L4.23,15.748a.483.483,0,1,0,.836.483L6.354,14H7.761v1.99a.483.483,0,0,0,.965,0V14h1.407l1.288,2.231a.483.483,0,1,0,.836-.483L11.247,14H16a.483.483,0,0,0,.483-.483V1.7A.483.483,0,0,0,16,1.222Zm-.483.965v8.905H.973V2.187Zm0,10.847H.973v-.976H15.514Z"
                                              fill="#575757" />
                                    </g>
                                </svg>
                                <span class="ms-2">12 Lessons</span>
                            </div>
                            <div class="course-deteals-btn">
                                <a href="course-details.html"><span class="me-2">View Details</span><i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- education-area-start -->
    <section class="education-area position-relative pt-85">
        <div class="container">
            <img class="education-shape-2" src="assets/img/shape/education-shape-04.png" alt="shape">
            <img class="education-shape-3" src="assets/img/shape/education-shape-01.png" alt="shape">
            <img class="education-shape-4" src="assets/img/shape/education-shape-03.png" alt="shape">
            <div class="row">
                <div class="col-xl-4 col-lg-4 offset-xl-2 offset-lg-2">
                    <div class="education-img mb-30">
                        <img src="assets/img/teacher/education.png" alt="image not found">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="section-title mb-30">
                        <h2>Transform Your
                            Life Through <span class="down-mark-line">Education</span></h2>
                    </div>
                    <div class="education-content mb-30">
                        <p>Helping employees gain skills and providing career development often take a back seat to
                            business priorities but workplace.</p>
                        <a class="edu-sec-btn" href="about.html">Watch how to start</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- education-area-end -->

    <!-- brand-area-start -->
    <div class="brand-area theme-bg pt-90 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-wrapper text-center">
                        <div class="brand-wrapper text-center">
                            <div class="swiper-container brand-active">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="singel-brand">
                                            <img src="assets/img/brand/brand-01.png" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="singel-brand">
                                            <img src="assets/img/brand/brand-02.png" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="singel-brand">
                                            <img src="assets/img/brand/brand-03.png" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="singel-brand">
                                            <img src="assets/img/brand/brand-04.png" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="singel-brand">
                                            <img src="assets/img/brand/brand-05.png" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="singel-brand">
                                            <img src="assets/img/brand/brand-06.png" alt="image not found">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->
</main>
@endsection
