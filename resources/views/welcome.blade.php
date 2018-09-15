@extends('main')

@section('title', 'Agence web - communication digitale')

@section('content')
    <div class="container-fluid">
        <!------------------>
        <!----- Navbar ----->
        <!------------------>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg">
            <a class="navbar-brand navbarTitle" href="#">
                <img src="#" width="30" height="30"
                     class="d-inline-block align-top" alt="">Brogrammer
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto ml-5 link-list">
                    <li class="nav-item">
                        <a class="nav-link navbarTitle" href="#">A propos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbarTitle" href="#">Notre stratégie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbarTitle" href="#">L'équipe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbarTitle" href="#">Contact</a>
                    </li>
                </ul>

                <span class="navbar-text">
                    <a href="#" class="navbarTitle">English</a>
                </span>
            </div>
        </nav>

        <!------------------>
        <!----- Header ----->
        <!------------------>
        <div class="p-md-5 text-white header">
            <div class="col-md-6 main-title">
                <h1 class="display-3">Mettez votre entreprise sur le devant de la scène</h1>
                <p class="lead my-3">Nous vous accompagnons sur votre projet pour augmenter votre visibilité sur
                    Internet.</p>
                <br>
                <a href="#" role="button" class="btn btn-light btn-lg about-btn">En savoir plus</a>
                <a href="#" role="button" class="btn btn-outline-light btn-lg contact-btn ml-3">Nous contacter</a>
            </div>
        </div>
    </div>

    <div class="container">
        <!------------------>
        <!----- About ------>
        <!------------------>
        <div class="row pt-5 pb-5">
            <div class="col-md-6 offset-md-3 pt-5">
                <h2 class="h1 text-center">A propos</h2>
                <p class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem
                    deleniti dignissimos doloribus, id illo impedit ipsam, iste laboriosam laborum magni minima numquam
                    perferendis placeat, quaerat repellendus sequi tempore voluptatem!
                </p>
            </div>
        </div>

        <!--------------------->
        <!----- Services ------>
        <!--------------------->
        <div class="row pt-5">
            <div class="col-md-6 pt-5 pl-5">
                <h2 class="h1 text-left">Des services sur-mesure rien que pour vous</h2>
                <p class="font-weight-bold text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo temporibus ullam vel
                    voluptas? A ad nobis repudiandae. Atque beatae consequatur harum illo numquam quas quis reiciendis
                    rem repellendus tenetur?
                </p>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo temporibus ullam vel
                    voluptas? A ad nobis repudiandae. Atque beatae consequatur harum illo numquam quas quis reiciendis
                    rem repellendus tenetur? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse explicabo
                    temporibus ullam vel voluptas? A ad nobis repudiandae. Atque beatae consequatur harum illo numquam
                    quas quis reiciendis rem repellendus tenetur?
                </p>
            </div>
            <div class="col-md-6 pb-5">
                <img src="{{ asset('img/background_about.png') }}" alt=""
                     style="background-size: cover; width: 1000px; height: 600px;">
            </div>
        </div>
    </div>

    <!--------------------->
    <!-------- Plan ------->
    <!--------------------->
    <div class="container-fluid section-plan">

        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 pt-5 pb-5">
                    <h2 class="h1 text-center">Notre plan d'action</h2>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque autem
                        deleniti dignissimos doloribus!
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="mb-30 col-md-5 col-lg-4 offset-md-1">
                            <div class="card">
                                <i class="fab fa-angrycreative fa-6x card-icon"></i>
                                <h3 class="card-title">Étape 1 - Monitoring</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque
                                    doloribus eaque eius esse et, fuga laudantium natus non obcaecati. Dolorem itaque
                                    nesciunt
                                    numquam porro qui sed tempore ullam voluptates!
                                </p>
                            </div>
                        </div>
                        <div class="mb-30 col-md-5 col-lg-4">
                            <div class="card">
                                <i class="fab fa-angrycreative fa-6x card-icon"></i>
                                <h3 class="card-title">Étape 1 - Monitoring</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque
                                    doloribus eaque eius esse et, fuga laudantium natus non obcaecati. Dolorem itaque
                                    nesciunt
                                    numquam porro qui sed tempore ullam voluptates!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-30 col-md-4 col-lg-4 offset-md-1">
                            <div class="card">
                                <i class="fab fa-angrycreative fa-6x card-icon"></i>
                                <h3 class="card-title">Étape 1 - Monitoring</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque
                                    doloribus eaque eius esse et, fuga laudantium natus non obcaecati. Dolorem itaque
                                    nesciunt
                                    numquam porro qui sed tempore ullam voluptates!
                                </p>
                            </div>
                        </div>
                        <div class="mb-30 col-md-4 col-lg-4">
                            <div class="card">
                                <i class="fab fa-angrycreative fa-6x card-icon"></i>
                                <h3 class="card-title">Étape 1 - Monitoring</h3>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque
                                    doloribus eaque eius esse et, fuga laudantium natus non obcaecati. Dolorem itaque
                                    nesciunt
                                    numquam porro qui sed tempore ullam voluptates!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/background_about.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>



    <br><br><br><br><br>




    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Featured post</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                        lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Post title</a>
                    </h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                        lead-in to additional content.</p>
                    <a href="#">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Card image cap">
            </div>
        </div>
    </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    From the Firehose
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">Sample blog post</h2>
                    <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                    <p>This blog post shows a few different types of content that's supported and styled with Bootstrap.
                        Basic typography, images, and code are all supported.</p>
                    <hr>
                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus
                        mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                        consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <h2>Heading</h2>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                        porta ac consectetur ac, vestibulum at eros.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <pre><code>Example code block</code></pre>
                    <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                    <h3>Sub-heading</h3>
                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                        lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                        dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                        amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                        augue.</p>
                    <ol>
                        <li>Vestibulum id ligula porta felis euismod semper.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                        <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                    </ol>
                    <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">Another blog post</h2>
                    <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                    <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus
                        mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                        consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </blockquote>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                        porta ac consectetur ac, vestibulum at eros.</p>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">New feature</h2>
                    <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                        lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                        dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                        amet risus.</p>
                    <ul>
                        <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                        <li>Donec id elit non mi porta gravida at eget metus.</li>
                        <li>Nulla vitae elit libero, a pharetra augue.</li>
                    </ul>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                        fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra
                        augue.</p>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur
                        purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                    href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>
@endsection