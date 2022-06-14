<div class="footer-mid">
<div class="footer-mid">
      <div class="footer-mid-wrapper">
        <div class="fm-left">
          <div>
            <h4>Dc comics</h4>
            <ul>
                @foreach($dati[3]['dcComics'] as $elm)
              <li>
                {{ $elm['testo'] }}
              </li>
              @endforeach
            </ul>
            <h4>Shop</h4>
            <ul>
               @foreach($dati[3]['shop'] as $elm)
              <li>
                 {{ $elm['testo'] }}
              </li>
              @endforeach
            </ul>
          </div>
          <div>
            <h4>Dc</h4>
            <ul>
               @foreach($dati[3]['dc'] as $elm)
              <li>
                {{ $elm['testo'] }}
              </li>
              @endforeach
            </ul>
          </div>
          <div>
            <h4>Sites</h4>
            <ul>
               @foreach($dati[3]['sites'] as $elm)
              <li>
                {{ $elm['testo'] }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="fm-right"></div>
      </div>
    </div>
</div>