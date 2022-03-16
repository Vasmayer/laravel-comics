
<header class="container-fluid m-0 p-0">
   <div class="header-info d-flex align-items-center justify-content-around">
       <div></div>
        <div class="d-flex">
           <div class="mx-3">DC POWER&#8480; VISA&reg;</div>
           <div class="mx-3">ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></div>
        </div>
   </div>
   <div class="menu">
      <div class="logo">
         <img src="{{asset('images/dc-logo.png')}}" alt="Logo DC">
     </div>
      <nav>
         <ul>
            @foreach (config('menu') as $link)
               <li>
                  <a href="{{route('comic.index')}}" class="{{request()->routeIs($link['route']) ? 'active' : ''}}">{{$link['name']}}</a>
                  @if($loop->last)
                  <span class="cevron"><i class="fas fa-caret-down"></i></span>
                  @endif
               </li>        
            @endforeach
            <li>
                  <input class="form-control search" type="search" placeholder="Search &#128269;">
            </li>
         </ul>
      </nav>
   </div>

</header>