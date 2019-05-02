<!DOCTYPE html>
<html>
<head>
<title>DatVL Bakery</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Capriola' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header class="main__header">
  <?php
    // dd(getInfor());
  ?>
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <!-- Brand and toggle get grouped for better mobile display --> 
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="navbar-header">
        <h1 class="navbar-brand"><a href="{{route('index')}}">Backery<br />
          <span class="sep"></span><br />
          DAT</a></h1>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1,#bs-example-navbar-collapse-2"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="menumob">
        <div class="navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Trang chủ</a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục</a>
              <ul class="dropdown-menu">
                @foreach(getCategory() as $cate)
                <li><a href="">{{$cate->name}}</a></li>
                @endforeach
              </ul>
            </li>
            <li><a href="left_sidebar.html">Thực đơn</a></li>
          </ul>
        </div>
        <div class="navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li><a href="right_sidebar.html">Đặt hàng</a></li>
            <li><a href="full_width.html">Đóng góp</a></li>
            <li><a href="contact.html">Cửa hàng</a></li>
          </ul>
        </div>
      </div>
      <!-- /.navbar-collapse --> 
    </nav>
  </div>
</header>


<section class="slider"> <img src="images/icons/star.png" alt="star" class="absolute__img">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      @foreach(getSlider() as $key => $slider)
      <div class="item {{$key == 0 ? 'active' : ''}}"> <img data-src="images/slider/image_1920x610.jpg" alt="First slide" src="{{asset('images/'.$slider->img)}}">
        <div class="container">
          <div class="carousel-caption">
            <h1>{{$slider->des_main}}</h1>
            <h4 style="color:#fff;">{{$slider->des_extra}}</h4>
            <!-- <p><a class="btn btn-default btn-lg" href="#" role="button">Thử Ngay</a><a class="btn btn-default btn-lg" href="#" role="button">Chi Tiết</a></p> -->
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>
<!--end of slider section-->
<section class="main__middle__container">
  <div class="row text-center no-margin nothing">
    <div class="container headings">
      <h1 class="page_title">{{getInfor()->name}}</h1>
      <p class="small-paragraph">
        {{getInfor()->content}}
      </p>
      <p><a class="btn btn-info btn-lg" href="#" role="button">Chi tiết</a> 
    </div>
  </div>

  <div class="row  three__blocks text-center no_padding no-margin">
    <div class="container">
      <div class="separator"><img src="images/icons/bulb.png" alt="bulb"></div>
      <h2><span>Sản phẩm nổi bật</span></h2>
      <p class="small-paragraph">Bán chạy nhất tại Việt Nam</p>

      @foreach(getProduct() as $key => $pro)
        <div class="col-md-4">
          <h3><small><a href="#">{{$pro->name}} </a></small></h3>
          {{--<p class="smaller"><small>Bán chạy nhất tại Việt Nam</small></p>--}}
          <img src="{{asset('images/'.$pro->img)}}" width="250" height="250" alt="image" class="img-responsive img-rounded">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. </p>
          <p><a class="btn btn-info btn-lg" href="#" role="button">read more</a>
        </div>
      @endforeach

    </div>
  </div>

  <div class="row  three__blocks text-center no_padding no-margin">
    <div class="container">
      <div class="separator"><img src="images/icons/bulb.png" alt="bulb"></div>
      <h2><span>Sản khuyến mại</span></h2>
      <p class="small-paragraph">Giá rẻ nhất Việt Nam</p>

      @foreach(getProduct() as $key => $pro)
        <div class="col-md-4">
          <h3><small><a href="#">{{$pro->name}} </a></small></h3>
          {{--<p class="smaller"><small>Bán chạy nhất tại Việt Nam</small></p>--}}
          <img src="{{asset('images/'.$pro->img)}}" width="250" height="250" alt="image" class="img-responsive img-rounded">
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. </p>
          <p><a class="btn btn-info btn-lg" href="#" role="button">read more</a>
        </div>
      @endforeach

    </div>
  </div>

  <div class="row  three__blocks text-center no_padding no-margin">
    <div class="container">
      <div class="separator"><img src="images/icons/bulb.png" alt="bulb"></div>
      <h2><span>Sản phẩm khuyến mại</span></h2>
      <p class="small-paragraph">Ngon tuyệt hảo, giá rẻ bất ngờ</p>

      <div class="col-md-4">
        {{--<h3><small><a href="#">Modern Design</a></small></h3>--}}
        {{--<p class="smaller"><small>Vestibulum auctor dapibus neque.</small></p>--}}
        <img src="http://localhost/bakery/public/images/2019-01-21-15-44-23cacke.jpeg" alt="image" class="img-responsive img-rounded">
        <p><a class="btn btn-info btn-lg" href="#" role="button">10 000 vnđ</a>
      </div>

      <div class="col-md-4 middle">
        <h4><a href="#">High Quality</a></h4>
        {{--<p class="smaller"><small>Vestibulum auctor dapibus neque.</small></p>--}}
        <img src="http://localhost/bakery/public/images/2019-01-21-15-44-23cacke.jpeg" alt="image" class="img-responsive img-rounded">
        <p><a class="btn btn-info btn-lg" href="#" role="button">10 000 vnđ</a>
      </div>

      <div class="col-md-4">
        <h4><a href="#">Quick Support</a></h4>
        {{--<p class="smaller"><small>Vestibulum auctor dapibus neque.</small></p>--}}
        <img src="images/content__images/image_300x190.jpg" alt="image" class="img-responsive img-rounded">
        <p><a class="btn btn-info btn-lg" href="#" role="button">10 000 vnđ</a>
      </div>

    </div>
  </div>





  <div class="text-center three-blocks">
    <div class="container">
      <div class="row">
        <h2>Praesent semper mod quis eget mi. Etiam euante risus. Aliquam erat volutpat. </h2>
      </div>
    </div>
  </div>
  <div class="row no-margin grey-info-block text-center">
    <div class="container">
      <div class="separator"><img src="images/icons/cup.png" alt="cup"></div>
      <h2><span>our company</span></h2>
      <p class="small-paragraph">Integer vitae libero ac risus egestas placerat.</p>
      <div class="col-md-6">
        <h3><small>Commodo id natoque malesuada sollicitudin elit suscipit.</small></h3>
        <p class="small-paragraph light">Praesent semper mod quis eget mi. Etiam eu ante risus.</p>
        <img src="images/content__images/image_460x200.jpg" alt="pic" class="img-rounded img-responsive">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p><a href="#" class="btn btn-default btn-lg">Learn more</a></p>
      </div>
      <div class="col-md-6">
        <h3><small>Aliquam luctus et mattis lectus Nam nec turpis consequat.</small></h3>
        <p class="small-paragraph light">Praesent semper mod quis eget mi. Etiam eu ante risus.</p>
        <img src="images/content__images/image_460x200.jpg" alt="pic" class="img-rounded img-responsive">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
        <p><a href="#" class="btn btn-default btn-lg">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="row grey-line-row no-margin text-center">
    <div class="container">
      <h1>Lorem ipsum <span>dolor</span> sit <span>amet</span> consectetur.
        Curabitur vel sem sit dolor ...</h1>
      <p class="small-paragraph">Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in, tristique at erat lorem ipsum dolor sit amet lorem ipsum</p>
    </div>
  </div>
</section>
<div class="row grey-line-row no-margin small_padding text-center"> </div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>About</h3>
        <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br />
          <br />
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
      </div>
      <div class="col-md-3">
        <h3>Tweets</h3>
        <p><span>Tweet</span> <a href="#">@You</a><br />
          Etiam egestas, ipsum posuere accumsan sollicitudin, nulla mauris volutpat sem, sit amet rutrum risus. </p>
        <p><span>Tweet</span> <a href="#">@You</a><br />
          Quisque porta tellus vitae adipiscing molestie. Mauris et lacus blandit, malesuada.</p>
      </div>
      <div class="col-md-3">
        <h3>Mailing list</h3>
        <p>Subscribe to our mailing list for offers, news updates and more!</p>
        <br />
        <form action="#" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">your email:</label>
            <input type="email" class="form-control form-control-lg" id="exampleInputEmail2" placeholder="your email:">
          </div>
          <button type="submit" class="btn btn-primary btn-md">subscribe</button>
        </form>
      </div>
      <div class="col-md-3">
        <h3>Social</h3>
        <p>123 Business Way<br />
          San Francisco, CA 94108<br />
          USA<br />
          <br />
          Phone: (888) 123-4567<br />
          Fax: (887) 123-4567<br />
          <br />
        </p>
        <div class="social__icons"> <a href="#" class="socialicon socialicon-twitter"></a> <a href="#" class="socialicon socialicon-facebook"></a> <a href="#" class="socialicon socialicon-google"></a> <a href="#" class="socialicon socialicon-mail"></a> </div>
      </div>
    </div>
  </div>
</footer>
<div class="row grey-line-row no-margin small_padding--footer text-center">
  <p class="text-center">&copy; Copyright DAT Company. All Rights Reserved.</p>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript">

$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>
</body>
</html>