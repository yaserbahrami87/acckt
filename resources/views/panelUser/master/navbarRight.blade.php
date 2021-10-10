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
            <li class="nav-item @if(Request()->is('panel/profile')) active @endif ">
                <a class="nav-link" href="/panel/profile">
                    <i class="material-icons">person</i>
                    <p>پروفایل</p>
                </a>
            </li>
            @if(Auth::user()->tel_verify)
                <li class="nav-item @if(Request()->is('panel/user/amountcapital/create')) active @endif">
                    <a class="nav-link " href="/panel/user/amountcapital/create">
                        <i class="material-icons">content_paste</i>
                        <p>میزان سرمایه</p>
                    </a>
                </li>
                <li class="nav-item @if(Request()->is('panel/user/venturecapital/create')) active @endif ">
                    <a class="nav-link" href="/panel/user/venturecapital/create">
                        <i class="material-icons">library_books</i>
                        <p>سرمایه گذاری خطر پذیر</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">bubble_chart</i>
                        <p>درصد خطر پذیری</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">category</i>
                        <p>مدل ها سرمایه گذاری</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">category</i>
                        <p>پروژه ها</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">message</i>
                        <p>ارتباط با صاحبان پروژه</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">
                        <i class="material-icons">money</i>
                        <p>ارزش گذاری</p>
                    </a>
                </li>
                <li class="nav-item ">
                      <a class="nav-link" href="/logout">
                          <i class="material-icons">logout</i>
                          <p>خروج</p>
                      </a>
                </li>
            @endif
        </ul>
    </div>
</div>
