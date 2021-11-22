<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="/" class="simple-text logo-normal">
           شتابدهنده خوارزم
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item @if(Request()->is('/')) active @endif ">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>صفحه اصلی</p>
                </a>
            </li>
            <li class="nav-item @if(Request()->is('admin/user/all')) active @endif ">
                <a class="nav-link" href="/admin/user/all">
                    <i class="material-icons">person</i>
                    <p>لیست کاربرها</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/logout">
                    <i class="material-icons">logout</i>
                    <p>خروج</p>
                </a>
            </li>
        </ul>
    </div>
</div>
