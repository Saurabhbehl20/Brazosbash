@if((isset($logo) && $logo) || (isset($slider) && $slider) || (isset($contact) && $contact) || (isset($link) && $link) || $logo || has_nav_menu('primary_navigation') || has_nav_menu('secondary_navigation'))
<header>
  @if((isset($logo) && $logo) || (isset($slider) && $slider) || (isset($contact) && $contact) || (isset($link) && $link) )
  <section class="top-bar bg-black lg:py-2">
      <div class="container mx-auto">
          <div class="lg:flex items-center">
              <div class="relative lg:w-8/12 text-center">

                  <!-- Slider main container -->
                  @if($slider)
                  <div class="swiper header-swiper text-white relative py-10 lg:py-0">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper items-center">
                          <!-- Slides -->
                          @foreach($slider as $slide)
                          <div class="swiper-slide px-10 lg:px-9 py-1 tk-azo-sans-web text-base font-bold">
                            {!! $slide['content'] !!}
                          </div>
                          @endforeach
                      </div>

                      <!-- If we need navigation buttons -->
                      <div class="swiper-button-prev"><img src="{{get_template_directory_uri()}}/resources//images/white-left-arrow.svg"></div>
                      <div class="swiper-button-next"><img src="{{get_template_directory_uri()}}/resources/images/white-right-arrow.svg"></div>

                      <i class="fa-solid fa-xmark absolute top-4 right-4 text-white text-xl close cursor-pointer lg:hidden"></i>
                  </div>
                  @endif
              </div>
              
              <div class="relative lg:w-4/12 text-white hidden lg:block">
                  <ul class="flex items-center justify-end">
                  @if($contact || $link )
                      <li class="mr-4 contact-menu"><a href="tel:{{$contact}}" class="hover:color-red tk-azo-sans-web text-base font-bold"><i class="fa-solid fa-phone mr-2" aria-hidden="true"></i>{{$contact}}</a></li>
                      @if($link['target'])
                        @php $target = $link['target']; @endphp
                      @else
                        @php $target = '_blank'; @endphp
                      @endif
                      <li class="mr-4 cta-button"><a href="{{$link['url']}}" target="{{$target}}" class="inline-block button-red uppercase tk-azo-sans-web text-base font-bold">{{$link['title']}}</a></li>
                    @endif
                      <li class="search-menu relative flex items-center">
                          <form action="{{ esc_url(home_url()) }}" id="searchform" class="">
                              <div class="input_search w-full flex items-center">
                                  <img src="{{get_template_directory_uri()}}/resources/images/white-search-icon.svg" class="-mr-3.5">
                                  <input class="form-control pl-6 focus-visible:outline-none w-full" value="" type="search" placeholder="Search..." aria-label="Search" name="s" id="search">
                              </div>
                          </form>
                          <button class="close-form relative block" type="button" id="searchbtn">
                              <img src="{{get_template_directory_uri()}}/resources/images/white-search-icon.svg" class="">
                              <i class="fa-solid fa-xmark text-xl"></i>
                          </button>
                      </li>
                  </ul>
              </div>             
          </div>
      </div>
  </section>
  @endif
  @if($logo || has_nav_menu('primary_navigation') || has_nav_menu('secondary_navigation'))
  <section class="main-navigation absolute w-full block z-10 px-5 lg:px-0">
      <div class="container mx-auto">
          <div class="flex items-center justify-between relative lg:static lg:px-10 xl:px-0">
              <button class="navbar-toggler lg:hidden" type="button">
                  <img src="{{get_template_directory_uri()}}/resources/images/red-menu-icon.svg" class="">
              </button>
              @if($logo)
              <div class="site-logo lg:w-2/12 lg:pr-7">
                  <a href="/"  rel="home" aria-current="page">
                      <img src="{{$logo['url']}}" class="img-fluid -mb-12 lg:-mb-5 xl:-mb-7 2xl:-mb-8 z-10 relative" alt="{{$logo['alt']}}" />
                  </a>
              </div>
              @endif
              <div class="mobile search-menu lg:hidden">
                  <form action="{{ esc_url(home_url()) }}" id="" class="searchform">
                      <div class="input_search w-full flex items-center">
                          <img src="{{get_template_directory_uri()}}/resources/images/red-search-icon.svg" class="-mr-3.5">
                          <input class="form-control pl-6 focus-visible:outline-none w-full" value="" type="search" placeholder="Search..." aria-label="Search" name="s" id="search">
                      </div>
                  </form>
                  <button class="close-form relative block" type="button" id="searchbtn">
                      <img src="{{get_template_directory_uri()}}/resources/images/red-search-icon.svg" class="">
                      <i class="fa-solid fa-xmark text-xl color-red"></i>
                  </button>
              </div>
              @if(has_nav_menu('secondary_navigation'))
              <div class="main-menu hidden lg:w-9/12 justify-end lg:flex basis-full">
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav flex justify-end items-center', 'echo' => false]) !!}
              </div>
              @endif
              @if(has_nav_menu('secondary_navigation'))
              <div class="sidenav hidden bg-white">
                  <div class="mobile-menu-nav">
                  {!! wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'navbar-nav', 'echo' => false]) !!}
                  </div>
              </div>
              @endif
          </div>
      </div>
  </section>
  @endif
</header>
@endif

