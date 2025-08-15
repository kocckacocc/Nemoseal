<div class="fixed bottom-0 left-0 z-20 w-full bg-white xl:hidden">
  <div class="border-t border-b border-neutral border-opacity-20">
    <nav class="flex mx-auto divide-x divide-neutral divide-opacity-25">
      <button class="relative flex items-center justify-center flex-1 group" @click="openLeft = ! openLeft">
        <span class="absolute bottom-0 left-0 top-auto w-full h-1 bg-transparent group-hover:bg-secondary" aria-hidden="true"></span>
        <span class="flex items-start px-6 py-5 text-sm font-medium">
          <span class="flex flex-col min-w-0">
            <span class="text-xs font-semibold tracking-wide uppercase">Termékszűrő</span>
          </span>
        </span>
      </button>

      <button class="relative flex items-center justify-center flex-1 group" @click="openRight = ! openRight">
        <span class="absolute bottom-0 left-0 top-auto w-full h-1 bg-transparent group-hover:bg-secondary" aria-hidden="true"></span>
        <span class="flex items-start px-6 py-5 text-sm font-medium">
          <span class="flex flex-col min-w-0">
            <span class="text-xs font-semibold tracking-wide uppercase">Kosár</span>
            <span class="text-sm font-medium text-neutral opacity-70"><span class="cart_info">Nincs</span> termék a kosárban</span>
          </span>
        </span>
      </button>
    </nav>
  </div>
</div>
