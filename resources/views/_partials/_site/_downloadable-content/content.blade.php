<div class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="space-y-12">

    <ul role="list" class="space-y-4 lg:grid lg:grid-cols-2 lg:gap-6 lg:space-y-0 xl:grid-cols-3 xl:gap-12">
      @foreach($data['all_documents'] as $document)

          <li
            class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
            <div class="flex flex-col h-full gap-8 px-8 py-12 xl:px-10">
              <div class="flex flex-col h-full space-y-6 xl:space-y-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-secondary" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                </svg>
                <div class="space-y-4">
                  <div class="space-y-1 text-lg leading-6">
                    <h3 class="text-xl font-normal text-white">{{ $document['name'] }}</h3>
                  </div>
                </div>
              </div>
              <a class="self-start btn" href="{{ url('storage/' . $document['file']) }}" target="_blank">
                Letöltés
              </a>
            </div>
          </li>

        {{-- <div class="relative group">
          <div class="overflow-hidden bg-gray-100 rounded-lg aspect-w-4 aspect-h-3">
            <img src="{{ url('storage/' . $document['image']) }}" alt="{{ $document['name'] }}">
            <div class="flex items-end p-4 opacity-0 group-hover:opacity-100" aria-hidden="true">
              <div class="w-full px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white bg-opacity-75 rounded-md backdrop-filter backdrop-blur">
                Letöltés
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between mt-4 space-x-8 text-base font-medium text-gray-900">
            <h3>
              <a href="{{ url('storage/' . $document['file']) }}" target="_blank">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $document['name'] }}
              </a>
            </h3>
          </div>
        </div> --}}

      @endforeach
    </ul>

  </div>
</div>
