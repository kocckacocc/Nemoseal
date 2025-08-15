<div>
  <div class="mt-4">
    @if(!empty($data['user']['lastname'] && !empty($data['user']['firstname'])))
      Kedves {{ $data['user']['lastname'] . ' ' . $data['user']['firstname']}}, üdvözölünk
    @else
      Üdvözlünk
    @endif
    a Nemoseal Adminisztrációs felületén!
  </div>
</div>


@if((trim(strtolower(strip_tags($data['settings']['Karbantartó mód'] ?? ''))) == 'igen') && $data['user']['type'] != 1)

  <div class="mt-4">
    <div>
      {!! $data['settings']['Karbantartó mód szövege'] ?? 'Rendelés leadása jelenleg nem lehetséges.' !!}
    </div>
  </div>

@elseif($data['user']['type'] != 1)

  <div class="mt-4">
    <div>Rendelés leadása a rendelési felületen keresztül lehetséges.</div>
    <a href="/order" class="mt-4 btn btn-default btn-primary">Rendelés</a>
  </div>

  @if($data['user']['state'] == 1 && count(Auth::user()->addresses->toArray()) == 0)
    <div class="pb-4">
      Nincs még beállított címe,
      így rendelés nem lehetséges.
    </div>
  @endif

  @if($data['user']['state'] == 0)
    <div class="pb-4">
      A regisztráció még nincs jóváhagyva
      @if(count(Auth::user()->addresses->toArray()) == 0)
        és nincs még beállított címe,
      @endif
      így rendelés nem lehetséges.
    </div>
  @endif

@endif

