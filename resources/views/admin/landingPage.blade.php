@extends('admin.admin')

@section('main')

<!-- <div class="jumbotron">
            <div class="container">
                <h1>Hello</h1>
                <p>Contents ...</p>
                <p>
                    <a class="btn btn-primary btn-lg">Learn more</a>
                </p>
            </div>
        </div> -->

        <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{ URL::asset('css/landingPage.css'); }}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Plus Jakarta Sans:wght@500;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="desktop">
      <main class="bg-parent">
        <div class="bg"></div>
        <header class="frame-parent">
          <div class="circle-wrapper">
            <div class="circle">Circle</div>
          </div>
          <nav class="parent-features-pricing-about">
            <nav class="customer-login-input">
              <div class="features">Features</div>
              <div class="pricing">Pricing</div>
              <div class="about-us">About Us</div>
            </nav>
          </nav>
          <div class="a-i-conversion-optimizer">
            <div class="customer-login-wrapper">
              <div class="customer-login">Customer Login</div>
            </div>
            <button class="sign-up">
              <div class="button-label">
                <b class="button-name">Sign up</b>
                <div class="icon">
                  <img
                    class="iconoutlinearrow-right"
                    alt=""
                    src="./public/iconoutlinearrowright.svg"
                  />
                </div>
              </div>
            </button>
          </div>
        </header>
        <section class="frame-wrapper">
          <div class="frame-group">
            <div class="a-i-conversion-optimizer-logo-parent">
              <div class="a-i-conversion-optimizer-logo">
                <div class="an-ai-tool">
                  An AI tool made for conversion rate optimization
                </div>
              </div>
              <h1 class="increase-your-conversion-container">
                <span>Increase your conversion rate </span>
                <span class="using-ai">using AI</span>
              </h1>
            </div>
            <div class="button-primary-with-icon-label">
              <button class="buttonprimarywith-icon">
                <div class="child-button">
                  <b class="button-name1">Create account</b>
                  <div class="icon1">
                  </div>
                </div>
              </button>
            </div>
          </div>
        </section>
</body>




@stop()