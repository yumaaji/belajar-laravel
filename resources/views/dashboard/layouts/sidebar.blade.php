<div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarMenuLabel">Blog Kita</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
          <svg class="bi"><use xlink:href="#house-fill"/></svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/posts">
          <svg class="bi"><use xlink:href="#file-earmark"/></svg>
          Posts
        </a>
      </li>
    </ul>

    @can('admin')      
      <h6 class="sidebar-heading d-flex justify-content-conter align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Adminisrator</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item d-flex align-items-center">
          <a class="nav-link d-flex align-items-center justify-content-center gap-2" href="/dashboard/categories">
            <div class="div">
              <i class="bi bi-grid-3x3-gap-fill"></i> <span>Categories</span>
            </div>
          </a>
        </li>
      </ul>
    @endcan
  </div>
</div>