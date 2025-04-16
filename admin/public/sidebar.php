<ul class="navbar-nav   sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #A9A8D4;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center  bg-light text-primary" href="./index.php">
        <div class="sidebar-brand-icon  ">
            <i class="fas fa-stethoscope"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Neurostar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Blog
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-blog"></i>
            <span>BLOGS</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">NEW BLOG</h6>
                <a class="collapse-item" href="newBlog.php"> <i class="fas fa-fw fa-blog"></i> CREATE BLOG</a>
                <a class="collapse-item" href="allBlog.php"> <i class="fas fa-fw fa-edit"></i> All BLOGS</a>
            </div>
        </div>
    </li>


    <!-- Sliders Section -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true" aria-controls="collapseSlider">
            <i class="fas fa-fw fa-images"></i>
            <span>Sliders</span>
        </a>
        <div id="collapseSlider" class="collapse" aria-labelledby="headingSlider" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Sliders</h6>
                <a class="collapse-item" href="addSlider.php"> <i class="fas fa-plus-circle"></i> Add Slider</a>
                <a class="collapse-item" href="allSliders.php"> <i class="fas fa-eye"></i> View Sliders</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>