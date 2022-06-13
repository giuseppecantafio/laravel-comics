<header>
      <nav>
        <div class="img-container">
          <img src="./img/dc-logo.png" alt="dc logo" />
        </div>
        <ul>
            @foreach($datiNav as $elm)
          <li class="{{$elm['active'] ? 'selected' : ''}}">
            {{$elm['name']}}
          </li>
            @endforeach
        </ul>
      </nav>
    </header>
