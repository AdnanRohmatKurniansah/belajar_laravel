<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="/">ARK.</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="nav-link scrollto {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a></li>
        <li><a class="nav-link scrollto {{ ($active === "All posts") ? 'active' : '' }}" href="/posts">Post</a></li>
        <li><a class="nav-link scrollto {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a></li>
        @auth
            <li class="nav-item dropdown" >
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Welcome back, {{ auth()->user()->name }}
             </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
               <li><hr class="dropdown-divider"></li>
               <li>
                 <form action="/logout" method="post">
                   @csrf
                   <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                 </form>
               </li>
             </ul>
           </li>  
            @else
        <li><a class="getstarted scrollto {{ ($active === "login") ? 'active' : '' }}" href="/login">Login</a></li>
        @endauth
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->





























 