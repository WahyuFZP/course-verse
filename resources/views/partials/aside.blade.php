<aside class="classroom-dashboard__aside">
    <div class="classroom-dashboard__aside-header">
      <h2>Classroom</h2>
    </div>
    <div class="classroom-dashboard__aside-user">
      <img src="path/to/profile_image.jpg" alt="Profile Picture" class="classroom-dashboard__aside-user-image">
      <div class="classroom-dashboard__aside-user-info">
        <p class="classroom-dashboard__aside-username">{{ Auth::user()->name }}</p>
        <p class="classroom-dashboard__aside-account">
          @if (Auth::user()->dosen)
          Dosen
          @else
          Mahasiswa
          @endif
        </p>
      </div>
    </div>
    <nav class="classroom-dashboard__aside-nav">
      <ul>
        <li class="classroom-dashboard__aside-nav-item ">
          <a class="d-flex align-items-center gap-2" href="/profile">
            <i class="bi bi-person-circle"></i>
            My Profile
          </a>
        </li>
        <li class="classroom-dashboard__aside-nav-item">
          <a class="d-flex align-items-center gap-2"  href="/task">
            <i class="bi bi-list-task"></i>
            Home Tasks
          </a>
        </li>
        <li class="classroom-dashboard__aside-nav-item">
          <a class="d-flex align-items-center gap-2"  href="/schedule">
            <i class="bi bi-card-checklist"></i>
            Schedule
          </a>
        </li>
        <li class="classroom-dashboard__aside-nav-item">
          <a class="d-flex align-items-center gap-2"  href="/chat">
            <i class="bi bi-chat"></i>
            Chat 
          </a>
        </li>
        
        <li class="classroom-dashboard__aside-nav-item">
          <form action="/logout"   method="get">
            @csrf
            <button type="submit" class="nav-link d-flex align-items-center gap-2"><i class="bi bi-box-arrow-right"></i>Logout</button>
          </form>
        </li>
      </ul>
    </nav>
    <div class="classroom-dashboard__aside-quote">
      <p>If one studies too zealously, one easily loses his pants!</p>
    </div>
  </div>
  @if (session('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
  </aside>
  
