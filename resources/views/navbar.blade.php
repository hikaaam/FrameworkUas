	<!-- Header -->
<header class="header1">
<!-- Header desktop -->
<div class="container-menu-header">
<div class="wrap_header">
    <!-- Logo -->
    <a href="" class="logo">
        <img src="images/logo.png" alt="IMG-LOGO" >
    </a>

    <!-- Menu -->
    <div class="wrap_menu">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="{{ url('/', []) }}">Home</a>

                </li>

                <li>
                    <a href="product.html">News</a>
                    <ul class="sub_menu">
                        <li><a href="index.html">Game</a></li>
                        <li><a href="home-02.html">Development</a></li>
                        <li><a href="home-03.html">lorem ipsum</a></li>
                    </ul>
                </li>

                <li >
                    <a href="product.html">Tips & Trick</a>
                </li>

                <li>
                    <a href="cart.html">Review</a>
                </li>

                <li>
                    <a href="blog.html">E-sport Info</a>
                </li>

                <li>
                    <a href="about.html">About Us</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Header Icon -->
    <div class="header-icons">
        <button  class="searchlogo" id="searchIcon" onclick="openForm()"> <i class="fas fa-search"></i></button>
        
            <div class="form-popup" id="myForm">
            <form action="{{ url('/search') }}"  class="form-container">
                <input type="text" name="search" id="inputSearch">
                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                <button type="button" class="btn cancel" onclick="closeForm()"><i class="fas fa-times"></i> </button>
                </form>

            </div>

    </div>
</div>
</header>

<!-- Header Mobile -->
<div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="images/logo.png" alt="IMG-LOGO"  >
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">

            <button id="menuMobile" onclick="popupMobile()" class="buttonMobile"> <i class="fa fa-bars "></i></button>
            <button id="ClosemenuMobile" onclick="closeMobile()" class="closeButtonMobile"> <i class="fa fa-times "></i></button> 
            
            </div>
        </div>
</div>


<!-- Menu Mobile -->
<div class="wrap-side-menu" id="wrap-side-menu" >
    <nav class="side-menu">
        <ul class="main-menu">
            {{-- <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <span class="topbar-child1">
                    Free shipping for standard order over $100
                </span>
            </li>

            <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                <div class="topbar-child2-mobile">
                    <span class="topbar-email">
                        fashe@example.com
                    </span>

                    <div class="topbar-language rs1-select2">
                        <select class="selection-1" name="time">
                            <option>USD</option>
                            <option>EUR</option>
                        </select>
                    </div>
                </div>
            </li> --}}



            <li class="item-menu-mobile">
                <a href="index.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Homepage V1</a></li>
                    <li><a href="home-02.html">Homepage V2</a></li>
                    <li><a href="home-03.html">Homepage V3</a></li>
                </ul>
                <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
               
            </li>
            <li class="item-menu-mobile">
                <a href="product.html">News</a>
            </li>

            <li class="item-menu-mobile">
                <a href="product.html">Tips & Trick</a>
            </li>

            <li class="item-menu-mobile">
                <a href="cart.html">Review</a>
            </li>

            <li class="item-menu-mobile">
                <a href="blog.html">E-sport Info</a>
            </li>

            <li class="item-menu-mobile">
                <a href="contact.html">About Us</a>
            </li>
            <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fab fa-snapchat-ghost" aria-hidden="true"></i></a>
                        <a href="#" ><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </li>
        </ul>
    </nav>
</div>


