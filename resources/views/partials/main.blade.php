 <main>
      <div class="main-wrapper">
         @foreach ($datiMain as $elm)
            <div class="boxes"">
                <div class="img-wrapper">
                <img src="{{$elm['thumb']}}" alt="{{$elm['series']}}" />
                </div>
                <div class="text-container">
                    <span>{{$elm['series']}}</span>
                </div>
            </div>
            @endforeach
            <div class="button-container">
                <span class="button">Load more</span>
            </div>
</main>