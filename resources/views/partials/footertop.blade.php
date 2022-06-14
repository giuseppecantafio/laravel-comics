 <div class="footer-top">
      <div class="footer-top-wrapper">
        <ul>
          <li>
             @foreach($dati[2] as $elm)
            <div class="img-wrapper">
              <img src="{{$elm['immagine']}}" alt="immagine" />
            </div>
            <span class="text-container">{{$elm['testo']}}</span>
          </li>
          @endforeach
        </ul>
      </div>
    </div>