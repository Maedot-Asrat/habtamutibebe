<ul class="navbar-nav sidebar accordion" id="accordionSidebar">

 
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
      Dashboard
    <a href=""><img src=""></a>


    <hr class="sidebar-divider my-0">


    <li class="nav-item active">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

   
    <hr class="sidebar-divider">


    <div class="sidebar-heading">
        Banner and Logo
    </div>

  
    <li class="nav-item">
        <a class="nav-link" href="{{route('file-manager')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Media Manager</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselogo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Logo</span>
      </a>
      <div id="collapselogo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Logo Options:</h6>
          <a class="collapse-item" href="{{route('logo.index')}}">Logo options</a>
          <a class="collapse-item" href="{{route('logo.create')}}">Add Logo</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-image"></i>
        <span>Banners</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Banner Options:</h6>
          <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
          <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
        </div>
      </div>
    </li>


    {{-- <div class="sidebar-heading">
      About Us
  </div>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseabout" aria-expanded="true" aria-controls="collapseabout">
      <i class="fas fa-cubes"></i>
      <span>About us</span>
    </a>
    <div id="collapseabout" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">About us Options:</h6>
        <a class="collapse-item" href="{{route('aboutus.index')}}">About us sections</a>
        <a class="collapse-item" href="{{route('aboutus.create')}}">Add section</a>
      </div>
    </div>
  </li> --}}
  {{-- <hr class="sidebar-divider d-none d-md-block">


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebranch" aria-expanded="true" aria-controls="collapsebranch">
      <i class="fas fa-cubes"></i>
      <span>Branches</span>
    </a>
    <div id="collapsebranch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Branch Options:</h6>
        <a class="collapse-item" href="{{route('branch.index')}}">Show Branches</a>
        <a class="collapse-item" href="{{route('branch.create')}}">Add branch</a>
      </div>
    </div>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
   
    <div class="sidebar-heading">
          Utility
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#statCollapse" aria-expanded="true" aria-controls="blogCollapse">
        <i class="fas fa-cubes"></i>
        <span>General Stats</span>
      </a>
            <div id="statCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">View options:</h6>
                <a class="collapse-item" href="{{route('utility.index')}}">Show Utilities</a>
                <a class="collapse-item" href="{{route('utility.create')}}">Add Utilities</a>
            </div>
    </li>
 
    <hr class="sidebar-divider">

   
    <div class="sidebar-heading">
      Destinations
    </div>
   
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#destCollapse" aria-expanded="true" aria-controls="destCollapse">
          <i class="fas fa-cubes"></i>
          <span>Destinations</span>
        </a>
        <div id="destCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Destination Options:</h6>
            <a class="collapse-item" href="{{route('destination.index')}}">Destinations</a>
            <a class="collapse-item" href="{{route('destination.create')}}">Add Destination</a>
          </div>
        </div>
    </li>
   
    <hr class="sidebar-divider">
 
        <div class="sidebar-heading">
            Services
        </div>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Service Category</span>
        </a>
        <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Services Category:</h6>
            <a class="collapse-item" href="{{route('category.index')}}">All Category</a>
            <a class="collapse-item" href="{{route('category.create')}}">Add Category</a>
          </div>
        </div>
    </li>
   
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true" aria-controls="productCollapse">
          <i class="fas fa-cubes"></i>
          <span>Services</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Services Options:</h6>
            <a class="collapse-item" href="{{route('service.index')}}">Services</a>
            <a class="collapse-item" href="{{route('service.create')}}">Add Services</a>
          </div>
        </div>
    </li>
    <hr class="sidebar-divider">


    <div class="sidebar-heading">
      Packages
    </div>
 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#packageCollapse" aria-expanded="true" aria-controls="packageCollapse">
          <i class="fas fa-cubes"></i>
          <span>Packages</span>
        </a>
        <div id="packageCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Packages Options:</h6>
            <a class="collapse-item" href="{{route('package.index')}}">Packages</a>
            <a class="collapse-item" href="{{route('package.create')}}">Add Packages</a>
          </div>
        </div>
    </li>

    <hr class="sidebar-divider"> --}}

    <div class="sidebar-heading">
      Arts
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#artcategoryCollapse" aria-expanded="true" aria-controls="artcategoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Artwork Category</span>
        </a>
        <div id="artcategoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Artworks Category:</h6>
            <a class="collapse-item" href="{{route('artcategory.index')}}">All Artwork Category</a>
            <a class="collapse-item" href="{{route('artcategory.create')}}">Add Artwork Category</a>
          </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#artCollapse" aria-expanded="true" aria-controls="blogCollapse">
          <i class="fas fa-cubes"></i>
          <span>Artworks</span>
        </a>
        <div id="artCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Artwork Options:</h6>
            <a class="collapse-item" href="{{route('art.index')}}">Artworks</a>
            <a class="collapse-item" href="{{route('art.create')}}">Add Artworks</a>
            
          </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#intCollapse" aria-expanded="true" aria-controls="intCollapse">
        <i class="fas fa-cubes"></i>
        <span>Interviews</span>
      </a>
      <div id="intCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Interview Options:</h6>
          <a class="collapse-item" href="{{route('interview.index')}}">Interviews</a>
          <a class="collapse-item" href="{{route('interview.create')}}">Add Interviews</a>
          
        </div>
      </div>
  </li>

  <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Blogs
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blogcategoryCollapse" aria-expanded="true" aria-controls="blogcategoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Blog Category</span>
        </a>
        <div id="blogcategoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Blogs Category:</h6>
            <a class="collapse-item" href="{{route('blogcategory.index')}}">All Blog Category</a>
            <a class="collapse-item" href="{{route('blogcategory.create')}}">Add Blog Category</a>
          </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#blogCollapse" aria-expanded="true" aria-controls="blogCollapse">
          <i class="fas fa-cubes"></i>
          <span>Blogs</span>
        </a>
        <div id="blogCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Blog Options:</h6>
            <a class="collapse-item" href="{{route('blog.index')}}">Blogs</a>
            <a class="collapse-item" href="{{route('blog.create')}}">Add Blogs</a>
            
          </div>
        </div>
    </li>

    <hr class="sidebar-divider">


    <div class="sidebar-heading">
      News
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#newsCollapse" aria-expanded="true" aria-controls="newsCollapse">
          <i class="fas fa-cubes"></i>
          <span>News</span>
        </a>
        <div id="newsCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">News Options:</h6>
            <a class="collapse-item" href="{{route('news.index')}}">News</a>
            <a class="collapse-item" href="{{route('news.create')}}">Add News</a>
          </div>
        </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#newsdetCollapse" aria-expanded="true" aria-controls="newsdetCollapse">
        <i class="fas fa-cubes"></i>
        <span>News Details</span>
      </a>
      <div id="newsdetCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">News Details Options:</h6>
          <a class="collapse-item" href="{{route('newsdetail.index')}}">News Details</a>
          <a class="collapse-item" href="{{route('newsdetail.create')}}">Add News Detail</a>
        </div>
      </div>
  </li>



    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctorsCollapse" aria-expanded="true" aria-controls="categoryCollapse">
          <i class="fas fa-sitemap"></i>
          <span>Doctors</span>
        </a>
        <div id="doctorsCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Doctors Options:</h6>
            <a class="collapse-item" href="{{route('doctor.index')}}">All Doctors</a>
            <a class="collapse-item" href="{{route('doctor.create')}}">Add Doctors</a>
          </div>
        </div>
    </li>

 <hr class="sidebar-divider d-none d-md-block">
    
    <div class="sidebar-heading">
        Other
    </div>
 
    <hr class="sidebar-divider d-none d-md-block">

   <div class="sidebar-heading">
         Appointments
   </div>
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#appointmentCollapse" aria-expanded="true" aria-controls="blogCollapse">
       <i class="fas fa-cubes"></i>
       <span>Appointments</span>
     </a>
           <div id="appointmentCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">View Appointments:</h6>
               <a class="collapse-item" href="{{route('appointment.index')}}">Show Appointments</a>

           </div>
   </li> --}}
    <hr class="sidebar-divider d-none d-md-block">
 
   <div class="sidebar-heading">
         Messages
   </div>
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#messageCollapse" aria-expanded="true" aria-controls="blogCollapse">
       <i class="fas fa-cubes"></i>
       <span>Messages</span>
     </a>
           <div id="messageCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">View Messages:</h6>
               <a class="collapse-item" href="{{route('message.index')}}">Show Messages</a>

           </div>
   </li>

   {{-- <hr class="sidebar-divider d-none d-md-block">

   <div class="sidebar-heading">
         Share Applications
   </div>
   <li class="nav-item">
     <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#messageCollapse" aria-expanded="true" aria-controls="blogCollapse">
       <i class="fas fa-cubes"></i>
       <span>Share Applications</span>
     </a>
           <div id="messageCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
               <h6 class="collapse-header">View Applications:</h6>
               <a class="collapse-item" href="{{route('shareapp.index')}}">Show Applications</a>

           </div>
   </li> --}}




   {{-- <div class="sidebar-heading">
    Experience
</div>
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#expCollapse" aria-expanded="true" aria-controls="blogCollapse">
  <i class="fas fa-cubes"></i>
  <span>People</span>
</a>
      <div id="expCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">View People:</h6>
          <a class="collapse-item" href="{{route('experience.index')}}">Show People</a>

      </div>
</li> --}}

   
    <hr class="sidebar-divider d-none d-md-block">
    
     <li class="nav-item">
        <a class="nav-link" href="{{route('users.index')}}">
            <i class="fas fa-users"></i>
            <span>Users</span></a>
    </li>

   
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>