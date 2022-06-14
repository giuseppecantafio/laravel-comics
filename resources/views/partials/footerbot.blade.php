<div class="footer-bottom">
      <div class="fb-wrapper">
        <div class="fb-left">
          <span class="sign-up">Sign-up now!</span>
        </div>
        <div class="fb-right">
          <span class="text-container">Follow us</span>
          <ul>
            @foreach($dati[4] as $elm)
            <li>
              <img src="{{$elm['immagine']}}"/>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>