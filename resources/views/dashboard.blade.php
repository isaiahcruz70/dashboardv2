@extends('layouts.app')

@section('content')
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<div class="container">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="/dashboard">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dashboard/request-queue">Request A Queue</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dashboard/finish-queues">Finished Queues</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</div>
<aside class="side-nav" id="show-side-navigation1">
  <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
  <div class="heading">
    <img src="images/wpuclogo2.png" alt="WPUC logo">
    <div class="info">
      <h3><a href="#">WPUC Dashboard</a></h3>
      <p>This dashboard is still under construction please give time.</p>
    </div>
  </div>
<!-- This is where you login -->
  <ul class="categories">
    <li class="nav-item"><i class="fa fa-home fa-fw" aria-hidden="true"></i><a class="nav-link active" href="/dashboard">Home</a>
    </li>
    <li class="nav-item"><i class="fa fa-support fa-fw"></i><a class="nav-link" href="/dashboard/request-queue">Request A Queue</a>
    </li>
    <li class="nav-item"><i class="fa fa-envelope fa-fw"></i><a class="nav-link" href="/dashboard/finish-queues">Finished Queues</a>
    </li>
    <li class="nav-item"><i class="fa fa-users fa-fw"></i><a class="nav-link" href="#"> Our team</a>
    </li>
    <li class="nav-item"><i class="fa fa-bolt fa-fw"></i><a class="nav-link" href="#"> Testimonials</a>
    </li>
    <p>Example:</p>
    <li class="nav-item"><i class="fa fa-envelope-open-o fa-fw"></i><a class="nav-link" href="#"> Messages <span class="num dang">56</span></a></li>
    <li class="nav-item"><i class="fa fa-wrench fa-fw"></i><a class="nav-link" href="#"> Settings <span class="num prim">6</span></a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li class="nav-item"><i class="fa fa-laptop fa-fw"></i><a class="nav-link" href="#"> About UI &amp; UX <span class="num succ">43</span></a></li>
    <li class="nav-item"><i class="fa fa-comments-o fa-fw"></i><a class="nav-link" href="#"> Something else</a></li>
  </ul>
</aside>
<section id="contents">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <i class="fa fa-align-right"></i>
        </button>
        <a class="navbar-brand" href="#">WPUC <span class="main-color">Dashboard</span></a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
              <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
              <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
          <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
          <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Welcome to Dashboard</h2>
            <p class="alert alert-danger" role="alert">This dashboard is still under construction please give some time.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-envelope fa-fw bg-primary"></i>
            <div class="info">
              <h3>1,245</h3> <span>Emails</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-file fa-fw danger"></i>
            <div class="info">
              <h3>34</h3> <span>Projects</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fa fa-users fa-fw success"></i>
            <div class="info">
              <h3>5,245</h3> <span>Users</span>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="charts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Chart</h3>
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Chart2</h3>
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section class='statis text-center'>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="box bg-primary">
              <i class="fa fa-eye"></i>
              <h3>5,154</h3>
              <p class="lead">Page views</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box danger">
              <i class="fa fa-user-o"></i>
              <h3>245</h3>
              <p class="lead">User registered</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box warning">
              <i class="fa fa-shopping-cart"></i>
              <h3>5,154</h3>
              <p class="lead">Product sales</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box success">
              <i class="fa fa-handshake-o"></i>
              <h3>5,154</h3>
              <p class="lead">Transactions</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="chrt3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <div class="chart-container">
              <canvas id="chart3" width="100%"></canvas>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
@endsection