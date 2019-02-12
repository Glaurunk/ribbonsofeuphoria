

      <ul class="nav second-navbar mb-5">
           <li class="nav-item active">
             <a class="nav-link big" href="{{ url('/bio')}}">The Band <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link big" href="{{ url('/music')}}">Music</a>
           </li>
           <li class="nav-item">
             <a class="nav-link big" href="{{ url('/shop')}}">Shop</a>
           </li>
           <li class="nav-item">
             <a class="nav-link big" href="{{ url('/blog')}}">Blog</a>
           </li>
           <li class="nav-item">
             <a class="nav-link big" href="{{ url('/contact')}}">Contact</a>
           </li>
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle big" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Social
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="https://www.facebook.com/RibbonsOfEuphoriaBand/">Facebook</a>
                 <a class="dropdown-item" href="#">Twitter</a>
                 {{-- <div class="dropdown-divider"></div> --}}
                 <a class="dropdown-item" href="https://www.instagram.com/ribbons.of.euphoria/">Instagram</a>
                 <a class="dropdown-item" href="https://www.youtube.com/user/TheRibbonsofEuphoria">Youtube</a>
               </div>
             </li>
         </ul>
