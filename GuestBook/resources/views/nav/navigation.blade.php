
<div class="menu">

    {{-- <nav>
        <ul>
            <li><a href="/home">home</a></li>
            <li><a href="/project">project</a></li>
            <li><a href="/contact">contact</a></li>
        </ul>
    </nav> --}}
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{($title==="HomePage")?'active':''}}" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($title==="ProjectPage")?'active':''}}" href="/project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($title==="ContactPage")?'active':''}}" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </nav>


</div>
<br>
