@extends('layouts.ksi')

@section('content')
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
    <li class="" data-target="#myCarousel" data-slide-to="1"></li>
    <li class="active" data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Gong-go</h1>
          <p>Gong-go. The name is taken from "spider" in javaness language. The idea is to make one stop "mega online store" that integrate many online store in the internet. Imagine to provice one interface for seller to publish their products to multiple store with one place management. This project is officially under development by go35.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>ApiGO</h1>
          <p>Free apps to help developer design and generate end point in sandbox environment. It has various feauture like creating team with its role to access, share social, trying the api and download into pdf version and many more !</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>UMKM-GO</h1>
          <p>In some countries, internet speed is matter. We need to develop text based UMKM app that can response aster and support SMS (Short Messanger Service) communication. We need an app that support switching online or offline mode.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="fourth-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>SMS Gateway</h1>
          <p>There are many of many SMS gateway that is on internet with subscription. However, the challenge is the use complicated challenge to subscribe like user have to use Credit Card, etc and expensive. SMS gateway still will exist as not all phonecell user able to reach data signal due limitation of location.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore</a></p>
        </div>
      </div>
    </div>

    <div class="item">
      <img class="fifth-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>Code Generator</h1>
          <p>Imagine that customer can generate their own code to multiple language with filling required form to "interview" they need. Then, they can choose what language; php, ruby, java, and even android and iphone, customize it (by go35 team if required), pay and download.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore</a></p>
        </div>
      </div>
    </div>

  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->

<!-- Example row of columns -->
<div class="row">
  <div class="col-lg-4">
    <h2>Project A</h2>
    <p>We have good SEO to publish your ito produt functionality or ready to live application to free hosting. At the time, we hosted it into heroku.com. We also have developed a web based deployment tool so developer can easily deploy to heroku withoudea and meet investor without hussle.</p>
    <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
  </div>
  <div class="col-lg-4">
    <h2>Project B</h2>
    <p>We share idea, make true collaboration to realize and make funding for the prototype or even application that ready to live int any setup so investor can check if they are interest to run together.</p>
    <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
 </div>
  <div class="col-lg-4">
    <h2>Explore More ...</h2>
    <p>We have another projects you can check it out.</p>
    <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
  </div>
</div>
@endsection

