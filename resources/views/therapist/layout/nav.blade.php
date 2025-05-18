  <!-- Navbar & Hero Start -->
  {{-- @extends('therapist.master') --}}
  <div class="container-fluid position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
          <a href="index.html" class="navbar-brand p-0">
              <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>Terapia</h1>
              <!-- <img src="img/logo.png" alt="Logo"> -->
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto py-0">
                  <a href="/home" class="nav-item nav-link {{ Request::is('home') ? 'active' : false }}">Home</a>
                  <a href="service.html" class="nav-item nav-link">Services</a>
                  <div class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                      <div class="dropdown-menu m-0">
                          <a href="appointment.html" class="dropdown-item">Appointment</a>
                          <a href="feature.html" class="dropdown-item">Features</a>
                          <a href="blog.html" class="dropdown-item">Our Blog</a>
                          <a href="team.html" class="dropdown-item">Our Team</a>
                          <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                          <a href="404.html" class="dropdown-item">LogOut</a>
                      </div>
                  </div>
                  <a href="contact.html" class="nav-item nav-link">Contact Us</a>
              </div>
              <form action="{{ route('logout') }}" id="logoutForm" method="POST">
              @csrf
              <button type="submit" id="btn-logOut" style="border:none;background-color:inherit;"><i
                      class='bx bx-log-out' style="font-size: 20px;""></i>LogOut</button>
              </form>
          </div>
      </nav>
  </div>
 
  <!-- Navbar End -->
