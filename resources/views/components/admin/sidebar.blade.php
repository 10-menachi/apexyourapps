 <!-- Sidebar -->
 <div class="sidebar" data-background-color="dark">
     <div class="sidebar-logo">
         <!-- Logo Header -->
         <div class="logo-header" data-background-color="dark">
             <a href="index.html" class="logo">
                 <img src="{{ asset('admin-assets/assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                     class="navbar-brand" height="20" />
             </a>
             <div class="nav-toggle">
                 <button class="btn btn-toggle toggle-sidebar">
                     <i class="gg-menu-right"></i>
                 </button>
                 <button class="btn btn-toggle sidenav-toggler">
                     <i class="gg-menu-left"></i>
                 </button>
             </div>
             <button class="topbar-toggler more">
                 <i class="gg-more-vertical-alt"></i>
             </button>
         </div>
         <!-- End Logo Header -->
     </div>
     <div class="sidebar-wrapper scrollbar scrollbar-inner">
         <div class="sidebar-content">
             <ul class="nav nav-secondary">
                 <li class="nav-item active">
                     <a href="{{ route('dashboard') }}">
                         <i class="fas fa-home"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('admin.categories.index') }}">
                         <i class="fas fa-home"></i>
                         <p>Categories</p>
                     </a>
                 </li>
                 <li class="nav-section">
                     <span class="sidebar-mini-icon">
                         <i class="fa fa-ellipsis-h"></i>
                     </span>
                     <h4 class="text-section">Navigaton</h4>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#base">
                         <i class="fas fa-layer-group"></i>
                         <p>Products</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="base">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="route{{ 'admin.product.index' }}">
                                     <span class="sub-item">All Products</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="route{{ 'admin.product.create' }}">
                                     <span class="sub-item">Add Product</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#sidebarLayouts">
                         <i class="fas fa-th-list"></i>
                         <p>Product Categories</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="sidebarLayouts">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="route{{ 'admin.categories.index' }}">
                                     <span class="sub-item">All Categories</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="admin.product-category-create">
                                     <span class="sub-item">Add Category</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#forms">
                         <i class="fas fa-pen-square"></i>
                         <p>Product Sub Categories</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="forms">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="admin.product-sub-categories">
                                     <span class="sub-item">All Sub Categories</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="admin.product-sub-category-create">
                                     <span class="sub-item">Add New</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#tables">
                         <i class="fas fa-table"></i>
                         <p>Orders Management</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="tables">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="admin.orders">
                                     <span class="sub-item">All Orders</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="admin.order.reports">
                                     <span class="sub-item">Generate Report</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#maps">
                         <i class="fas fa-shopping-cart"></i>
                         <p>Purchase</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="maps">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="admin.purchases">
                                     <span class="sub-item">All Purchases</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="admin.purchase.create">
                                     <span class="sub-item">Add new Purchase</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a data-bs-toggle="collapse" href="#charts">
                         <i class="fas fa-users"></i>
                         <p>Customers</p>
                         <span class="caret"></span>
                     </a>
                     <div class="collapse" id="charts">
                         <ul class="nav nav-collapse">
                             <li>
                                 <a href="admin.customers">
                                     <span class="sub-item">All Customers</span>
                                 </a>
                             </li>
                             <li>
                                 <a href="admin.customer.create">
                                     <span class="sub-item">Add New Customer</span>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- End Sidebar -->
