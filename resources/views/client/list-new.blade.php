@extends('layouts.client.app')

@section('content')
    <div id="content" class="list-news-page">
        <div class="carousel">
            <ol class="carousel-indicators">
                <li class="carousel-indicators-item active"></li>
                <li class="carousel-indicators-item "></li>
                <li class="carousel-indicators-item "></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('assets/images/carousel-item1.png')}}"
                         alt="carousel-item1.png">
                    <div class="carousel-caption d-none d-lg-block">
                        <h5>
                            <svg width="340" height="48" viewBox="0 0 340 48" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.5 47.2371V2.73377H20.2657C23.1706 2.73377 25.8018 3.39073 28.1594 4.70464C30.559 5.97616 32.4535 7.75629 33.8428 10.045C35.2742 12.3338 35.9899 15.004 35.9899 18.0556C35.9899 21.0225 35.2952 23.6503 33.906 25.9391C32.5167 28.1854 30.6853 29.9656 28.412 31.2795L32.4535 38.4C32.7903 38.951 33.2955 39.2265 33.9691 39.2265H38.2633V47.2371H32.5798C30.8116 47.2371 29.1908 46.7921 27.7173 45.902C26.2859 45.0119 25.1493 43.8464 24.3073 42.4053L19.3185 33.3775H9.53034V47.2371H0.5ZM9.53034 25.3669H19.1922C21.3393 25.3669 23.1706 24.7311 24.6862 23.4596C26.2017 22.1881 26.9595 20.3868 26.9595 18.0556C26.9595 15.7669 26.1807 13.9868 24.623 12.7152C23.1074 11.4013 21.2972 10.7444 19.1922 10.7444H9.53034V25.3669Z"
                                      fill="white"/>
                                <path d="M58.287 47.2371C54.6243 47.2371 51.4248 46.5378 48.6883 45.1391C45.9939 43.698 43.889 41.7483 42.3734 39.2901C40.8999 36.8318 40.1632 34.0768 40.1632 31.0252C40.1632 27.5921 40.8578 24.604 42.2471 22.0609C43.6364 19.5179 45.5308 17.547 47.9305 16.1483C50.3302 14.7497 53.0456 14.0503 56.0768 14.0503C59.6973 14.0503 62.6232 14.8132 64.8545 16.3391C67.1279 17.8649 68.7908 19.9205 69.8433 22.506C70.8958 25.049 71.422 27.8887 71.422 31.0252C71.422 31.449 71.401 31.9576 71.3589 32.551C71.3168 33.102 71.2536 33.5258 71.1694 33.8225H49.3829C49.846 35.7722 50.8775 37.2556 52.4773 38.2728C54.1191 39.2901 56.0978 39.7987 58.4133 39.7987H67.3805V47.2371H58.287ZM49.3198 27.9735H62.7706C62.6022 25.8967 61.9496 24.2649 60.813 23.0781C59.7184 21.849 58.1607 21.2344 56.1399 21.2344C53.9928 21.2344 52.372 21.9338 51.2774 23.3325C50.1828 24.6887 49.5303 26.2358 49.3198 27.9735Z"
                                      fill="white"/>
                                <path d="M90.983 48C89.0885 48 87.3625 47.4914 85.8048 46.4742C84.2892 45.457 83.2367 44.1219 82.6473 42.4689L73.4275 14.8132H82.8368L90.2884 38.9086C90.4147 39.2477 90.6673 39.4172 91.0462 39.4172C91.4251 39.4172 91.6777 39.2477 91.804 38.9086L99.3187 14.8132H108.539L99.3187 42.4053C98.7293 44.0583 97.6558 45.4146 96.0981 46.4742C94.5825 47.4914 92.8775 48 90.983 48Z"
                                      fill="white"/>
                                <path d="M113.286 47.2371V14.8132H122V47.2371H113.286ZM117.643 10.9351C116.169 10.9351 114.885 10.4053 113.791 9.34569C112.738 8.24371 112.212 6.95099 112.212 5.46755C112.212 3.98411 112.738 2.71258 113.791 1.65298C114.885 0.550994 116.169 0 117.643 0C119.116 0 120.379 0.550994 121.432 1.65298C122.526 2.71258 123.074 3.98411 123.074 5.46755C123.074 6.95099 122.526 8.24371 121.432 9.34569C120.379 10.4053 119.116 10.9351 117.643 10.9351Z"
                                      fill="white"/>
                                <path d="M146.351 47.2371C142.688 47.2371 139.488 46.5378 136.752 45.1391C134.058 43.698 131.953 41.7483 130.437 39.2901C128.964 36.8318 128.227 34.0768 128.227 31.0252C128.227 27.5921 128.921 24.604 130.311 22.0609C131.7 19.5179 133.594 17.547 135.994 16.1483C138.394 14.7497 141.109 14.0503 144.14 14.0503C147.761 14.0503 150.687 14.8132 152.918 16.3391C155.191 17.8649 156.854 19.9205 157.907 22.506C158.959 25.049 159.486 27.8887 159.486 31.0252C159.486 31.449 159.465 31.9576 159.422 32.551C159.38 33.102 159.317 33.5258 159.233 33.8225H137.447C137.91 35.7722 138.941 37.2556 140.541 38.2728C142.183 39.2901 144.161 39.7987 146.477 39.7987H155.444V47.2371H146.351ZM137.383 27.9735H150.834C150.666 25.8967 150.013 24.2649 148.877 23.0781C147.782 21.849 146.224 21.2344 144.204 21.2344C142.056 21.2344 140.436 21.9338 139.341 23.3325C138.246 24.6887 137.594 26.2358 137.383 27.9735Z"
                                      fill="white"/>
                                <path d="M177.516 48C175.327 48 173.327 47.5762 171.517 46.7285C169.707 45.8384 168.254 44.5033 167.16 42.7232C166.107 40.943 165.581 38.6967 165.581 35.9841V14.8132H174.232V37.2556C174.232 38.1881 174.548 38.9722 175.18 39.6079C175.811 40.2437 176.59 40.5616 177.516 40.5616C178.4 40.5616 179.158 40.2437 179.79 39.6079C180.463 38.9722 180.8 38.1881 180.8 37.2556V26.0662C180.8 22.294 181.895 19.3483 184.084 17.2291C186.273 15.1099 189.157 14.0503 192.735 14.0503C196.356 14.0503 199.24 15.1099 201.387 17.2291C203.576 19.3483 204.67 22.294 204.67 26.0662V37.2556C204.67 38.1881 204.986 38.9722 205.618 39.6079C206.291 40.2437 207.07 40.5616 207.954 40.5616C208.88 40.5616 209.659 40.2437 210.291 39.6079C210.922 38.9722 211.238 38.1881 211.238 37.2556V14.8132H219.889V35.9841C219.889 38.6967 219.342 40.943 218.248 42.7232C217.195 44.5033 215.764 45.8384 213.953 46.7285C212.143 47.5762 210.143 48 207.954 48C205.807 48 203.828 47.5762 202.018 46.7285C200.208 45.8384 198.755 44.5033 197.661 42.7232C196.566 40.943 196.019 38.6967 196.019 35.9841V24.7947C196.019 23.8623 195.703 23.0781 195.072 22.4424C194.44 21.8066 193.661 21.4887 192.735 21.4887C191.851 21.4887 191.072 21.8066 190.399 22.4424C189.767 23.0781 189.451 23.8623 189.451 24.7947V35.9841C189.451 38.6967 188.904 40.943 187.81 42.7232C186.715 44.5033 185.263 45.8384 183.452 46.7285C181.684 47.5762 179.705 48 177.516 48Z"
                                      fill="white"/>
                                <path d="M228.114 47.2371V28.6093C228.114 25.9391 228.724 23.502 229.945 21.298C231.208 19.094 233.018 17.3351 235.376 16.0212C237.733 14.7073 240.554 14.0503 243.838 14.0503C247.164 14.0503 249.984 14.7073 252.3 16.0212C254.657 17.3351 256.447 19.094 257.667 21.298C258.93 23.502 259.562 25.9391 259.562 28.6093V47.2371H250.91V28.6093C250.91 26.6172 250.216 24.943 248.827 23.5868C247.479 22.1881 245.816 21.4887 243.838 21.4887C241.901 21.4887 240.238 22.1881 238.849 23.5868C237.46 24.943 236.765 26.6172 236.765 28.6093V47.2371H228.114Z"
                                      fill="white"/>
                                <path d="M267.767 47.2371V0.826491H276.418V17.102C277.766 16 279.218 15.2159 280.776 14.7497C282.333 14.2834 283.87 14.0503 285.386 14.0503C288.501 14.0503 291.069 14.7073 293.09 16.0212C295.153 17.3351 296.689 19.094 297.7 21.298C298.71 23.502 299.215 25.9391 299.215 28.6093V47.2371H290.564V28.6093C290.564 26.6172 289.869 24.943 288.48 23.5868C287.133 22.1881 285.47 21.4887 283.491 21.4887C282.228 21.4887 281.049 21.8066 279.955 22.4424C278.902 23.0358 278.039 23.8623 277.366 24.9219C276.734 25.9391 276.418 27.0834 276.418 28.355V47.2371H267.767Z"
                                      fill="white"/>
                                <path d="M320.113 48C317.166 48 314.598 47.2371 312.409 45.7113C310.22 44.1854 308.515 42.151 307.294 39.6079C306.115 37.0225 305.526 34.1828 305.526 31.0887C305.526 27.9099 306.199 25.0278 307.546 22.4424C308.936 19.857 310.914 17.8225 313.482 16.3391C316.051 14.8132 319.124 14.0503 322.702 14.0503C326.323 14.0503 329.375 14.8132 331.859 16.3391C334.343 17.8649 336.237 19.9205 337.542 22.506C338.847 25.0914 339.5 27.9523 339.5 31.0887V47.2371H330.849V41.8331H330.722C329.754 43.5285 328.428 44.9907 326.744 46.2199C325.102 47.4066 322.892 48 320.113 48ZM322.576 40.5616C325.102 40.5616 327.081 39.6291 328.512 37.7642C329.986 35.8993 330.722 33.6318 330.722 30.9616C330.722 28.3338 329.986 26.1086 328.512 24.2861C327.081 22.4212 325.102 21.4887 322.576 21.4887C320.008 21.4887 317.987 22.4212 316.514 24.2861C315.04 26.1086 314.303 28.3338 314.303 30.9616C314.303 33.6318 315.04 35.8993 316.514 37.7642C317.987 39.6291 320.008 40.5616 322.576 40.5616ZM319.797 10.5536L314.493 2.73377H322.639L327.944 10.5536H319.797Z"
                                      fill="white"/>
                            </svg>
                        </h5>
                        <p>Fingding your best home</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="sub-menu navbar navbar-expand-lg ">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="btn btn-sub-menu" href="index.html">Tất cả</a>
                    </li>
                    <li class="nav-item active">
                        <a class="btn btn-sub-menu" href="list-new.html">Xã hội</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sub-menu" href="#">Nhà đất</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sub-menu" href="#">Đời sống</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-sub-menu" href="video.html">Video</a>
                    </li>
                </ul>
            </nav>
            <div class="list-news">
                <nav class="list-news-content box d-flex flex-column">
                    <div class="item-news row">
                        <div class="box-top ">
                            <a href="" class="w-100 h-100">
                                <img class="img-main-news" src="{{asset('assets/images/news/sub-news1.png')}}"
                                     alt="main-news.png">
                            </a>
                            <span class="icon-heart">
                                <i class="fa-solid fa-heart"></i>
                           </span>
                        </div>
                        <div class="box-content ">
                            <p class="p-title">Making a Housing Wage: Where Teachers, First Responders and Restaurant
                                Workers Can Live Where They Work</p>
                            <ul>
                                <li><a href="#"><p>Xã hội</p></a></li>
                                <li><span class="dot"><svg width="3" height="4" viewBox="0 0 3 4" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" r="1.5" fill="#3B4144"/></svg></span></li>
                                <li><p>Quang Anh Trần</p></li>
                                <li><span class="dot"><svg width="3" height="4" viewBox="0 0 3 4" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" r="1.5" fill="#3B4144"/></svg></span></li>
                                <li><p>24/02/2020</p></li>
                            </ul>
                            <p class="p-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit diam at
                                feugiat purus, interdum porta sed. Ac ut hendrerit enim et scelerisque nullam lorem.
                                Libero
                                mi velit id vitae...</p>
                        </div>
                    </div>
                    <div class="item-news row">
                        <div class="box-top ">
                            <a href="" class="w-100 h-100">
                                <img class="img-main-news" src="{{asset('assets/images/news/sub-news1.png')}}"
                                     alt="main-news.png">
                            </a>
                            <span class="icon-heart">
                                <i class="fa-solid fa-heart"></i>
                           </span>'
                        </div>
                        <div class="box-content ">
                            <p class="p-title">Making a Housing Wage: Where Teachers, First Responders and Restaurant
                                Workers Can Live Where They Work</p>
                            <ul>
                                <li><a href="#"><p>Xã hội</p></a></li>
                                <li><span class="dot"><svg width="3" height="4" viewBox="0 0 3 4" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" r="1.5" fill="#3B4144"/></svg></span></li>
                                <li><p>Quang Anh Trần</p></li>
                                <li><span class="dot"><svg width="3" height="4" viewBox="0 0 3 4" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" r="1.5" fill="#3B4144"/></svg></span></li>
                                <li><p>24/02/2020</p></li>
                            </ul>
                            <p class="p-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit diam at
                                feugiat purus, interdum porta sed. Ac ut hendrerit enim et scelerisque nullam lorem.
                                Libero
                                mi velit id vitae...</p>
                        </div>
                    </div>
                    <div class="item-news row">
                        <div class="box-top ">
                            <a href="" class="w-100 h-100">
                                <img class="img-main-news" src="{{asset('assets/images/news/sub-news1.png')}}"
                                     alt="main-news.png">
                            </a>
                            <span class="icon-heart">
                                <i class="fa-solid fa-heart"></i>
                           </span>
                        </div>
                        <div class="box-content ">
                            <p class="p-title">Making a Housing Wage: Where Teachers, First Responders and Restaurant
                                Workers Can Live Where They Work</p>
                            <ul>
                                <li><a href="#"><p>Xã hội</p></a></li>
                                <li><span class="dot"><svg width="3" height="4" viewBox="0 0 3 4" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" r="1.5" fill="#3B4144"/></svg></span></li>
                                <li><p>Quang Anh Trần</p></li>
                                <li><span class="dot"><svg width="3" height="4" viewBox="0 0 3 4" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.5" cy="1.56641" r="1.5" fill="#3B4144"/></svg></span></li>
                                <li><p>24/02/2020</p></li>
                            </ul>
                            <p class="p-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit diam at
                                feugiat purus, interdum porta sed. Ac ut hendrerit enim et scelerisque nullam lorem.
                                Libero
                                mi velit id vitae...</p>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="text-center">
                <a href="" class="btn btn-outline-dark">Xem thêm</a>
            </div>
        </div>
    </div>
@endsection
