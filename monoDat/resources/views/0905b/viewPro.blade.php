<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/style.css">

        <title>The Beats</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{url('/public')}}" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="{{url('specs')}}" class="nav__link">Specs</a>
                        </li>   
                        <li class="nav__item">
                            <a href="{{url('products')}}" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            |
                        </li>
                        @if (Session::has('loginIDcus'))
                            <li class="nav__item">
                                <a class="nav__link">Wellcome {{Session::get('loginIDcus')}}</a>
                            </li>
                            <li class="nav__item">
                                <a href="{{url('logout')}}" class="nav__link">Logout</a>
                            </li>
                        @else
                            <li class="nav__item">
                                <a href="{{url('register')}}" class="nav__link">Registration</a>
                            </li>
                            
                            <li class="nav__item">
                                <a href="{{url('login2')}}" class="nav__link">Login</a>
                            </li>
                        @endif
                      
                            

                        
                      
                        <li class="nav__item">
                            <a href="{{url('loginAdmin')}}" class="nav__link">Admin-test</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--=============== PRODUCTS ===============-->
            <section class="products section" id="products">
                <h2 class="section__title section__title-gradient products__line">
                    Choose <br> Your Product
                </h2>
                <div class="products__container container grid">
              
                            <tr>
                                <td>{{$product->productID}}</td>
                                <td>{{$product->productName}}</td>
                                <td>{{$product->productPrice}}</td>
                            
                                <!-- <td>{{$row->productImage1}}</td> -->
                                <td>
                                    <img src="img/products/{{$row->productImage1}}"
                                    width="90px" height="90px">
                                </td>
                                <td>
                                    <a href="{{url('edit/'.$row->productID)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('delete/'.$row->productID)}}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?');">Delete</a>
                                    
                                </td>
                            </tr>
                            

                    <!-- @foreach($data as $row)
                    <article class="products__card">
                        <div class="products__content">
                            <a href="{{url('viewPro/'.$row->productID)}}">
                                <img src="img/products/{{$row->productImage1}}" alt="" class="products__img" style="width: 120px;">
        
                                <h3 class="products__title">{{$row->productName}}</h3>
                            </a>
                                <span class="products__price">$249</span>
        
                                <button class="button button--flex products__button">
                                    <i class="ri-shopping-bag-line button__icon"></i>
                                </button>
                           
                        </div>
                    </article>
                    @endforeach -->
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <a href="#" class="footer__logo">
                    <img src="img/logo.png" alt="">
                </a>
    
                <div class="footer__content">
                    <h3 class="footer__title">Products</h3>
    
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Headphones</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Earphones</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Earbuds</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>
    
                <div class="footer__content">
                    <h3 class="footer__title">Support</h3>
    
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Product help</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Register</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Updates</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Provides</a>
                        </li>
                    </ul>
                </div>
    
                <div class="footer__content">
                    <form action="" class="footer__form">
                        <input type="email" placeholder="Email" class="footer__input">
                        <button class="button button--flex">
                            <i class="ri-send-plane-line button__icon"></i> Subscribe
                        </button>
                    </form>
    
                    <div class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </div>
                </div>
            </div>

  <p class="footer__copyright"><i>Copy right</i>Mono TEAM<br> 2021</p>
</footer>
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="ri-arrow-up-s-line scrollup__icon"></i>
    </a>
    <!--=============== SCROLL REVEAL ===============-->
    <script src="js/scrollreveal.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="js/main.js"></script>
  </body>
</html>
