<div class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="space-y-12">

    <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:items-center md:space-x-8">
      <a class="flex-none" href="{{ url('storage/' . (empty($data['category']['image']) ? 'no_image.png' : $data['category']['image'])) }}"
         data-fancybox
         data-caption="{{ $data['category']['name'] }}">
        <img
          class="self-start flex-none w-24 h-24 bg-white rounded-full sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-56 lg:h-56"
          src="{{ url('storage/' . (empty($data['category']['image']) ? 'no_image.png' : $data['category']['image'])) }}"
          alt="{{ $data['category']['name'] }}"
        >
      </a>
      <div class="space-y-8">
        <div class="space-y-1 text-lg leading-6">
          <p class="text-lg leading-loose uppercase opacity-75 font-body" data-name="{{ $data['category']['name'] }}">{{-- {{ $data['manufacturer']['name'] }} --}}</p>
          <h3 class="text-2xl font-bold uppercase md:text-3xl xl:text-5xl">{{ $data['category']['name'] }}</h3>
        </div>
        @if(!empty($data['category']['description']))
          <div class="text-lg leading-loose font-weight font-body // category-description">
            {!! $data['category']['description'] !!}
          </div>
        @endif
      </div>
    </div>

    @php

      $att_map = [
	      'attribute_1' => 'Méret',
        'attribute_2' => 'Hossz',
        'attribute_3' => 'Cső átmérő',
        'attribute_4' => 'Magfurat',
        'attribute_5' => 'Kiszerelés (db)',
        'attribute_6' => 'Kiszerelés (ml)',
        'attribute_7' => 'Szín',
        'attribute_8' => 'Sérülés méret',
        'attribute_9' => 'BAR',
        'attribute_10' => 'A méret (mm)',
        'attribute_11' => 'B méret (mm)',
        'attribute_12' => 'Vastagság (mm)',
        'attribute_13' => 'Szélesség (mm)',
        'attribute_14' => 'Hossz (m)',
        'attribute_15' => 'B csatl.',
        'attribute_16' => 'Szalag szélesség',
        'attribute_17' => 'Csomagolási egység',
        'attribute_18' => 'Méret tartomány',
        'attribute_19' => 'A átmérő (mm)',
        'attribute_20' => 'B átmérő (mm)',
       ];

        $column_keys = array_values($att_map);

				$all_column_key = array_keys($att_map);

      $columns = [];
      foreach($data['products'] as $product) {

        foreach($all_column_key as $att_key => $att_val) {

          if(!empty($product[$att_val])) {
            $columns[$att_val]=$column_keys[$att_key];
          }

        }

      }

    @endphp

    <div class="flex flex-col">
      <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <div class="overflow-hidden border-neutral">
            <table class="min-w-full divide-y divide-neutral divide-opacity-20">
              <thead class="text-white bg-neutral">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase">
                  Megnevezés
                </th>

                @foreach($columns as $column)

                  <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase">
                    {{ $column }}
                  </th>

                @endforeach

              </tr>
              </thead>
              <tbody class="bg-white divide-y divide-neutral divide-opacity-20">

              @php $exists = [] @endphp

              @foreach($data['products'] as $product)

                @if(in_array($product['model'], $exists))
                  @continue
                @endif

                <tr class="bg-white">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">

                      <a href="{{ url('storage/' . (empty($product['image']) ? 'no_image.png' : $product['image'])) }}"
                         data-fancybox
                         data-caption="{{ $product['name'] }}">
                        <img
                          class="mr-6 border border-opacity-25 rounded-full w-14 h-14 border-neutral"
                          src="{{ url('storage/' . (empty($product['image']) ? 'no_image.png' : $product['image'])) }}"
                          alt="{{ $product['name'] }}">
                      </a>

                      <div class="text-base font-medium">
                        <h4>{{ $product['name'] }}</h4>
                        <small class="text-sm opacity-50 // product__number" data-name="{{ $data['category']['name'] }}">{{ $product['model'] }}</small>

                        @if(!empty($product['description']))
                          <div class="text-xs opacity-50 // product__description">
                            {!! $product['description'] !!}
                          </div>
                        @endif

                      </div>

                    </div>
                  </td>

                  @foreach($columns as $column_key => $column)

                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-base">{{ $product[$column_key] }}</div>
                    </td>

                  @endforeach

                </tr>

              @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
