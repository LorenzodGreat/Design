<div>
 
{{-- <div class="container w-full max-w-7xl">
        <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl p-5 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
          <div class="flex flex-row items-center justify-between lg:justify-start">
            <a href="/" class="text-lg font-bold tracking-tighter text-blue-400 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8"> wickedblocks </a>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
              </svg>
            </button>
          </div>
          <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden pb-4 border-blue-400 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2">
            <a class="px-4 py-2 mt-2 text-sm text-gray-300 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline" href="#">About</a>
            <a class="px-4 py-2 mt-2 text-sm text-gray-300 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline" href="#">Contact</a>
            <div @click.away="open = false" class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm text-left text-gray-300 md:w-auto md:inline md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline">
                <span>Dropdown List</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
              <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-30 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48" style="display: none">
                <div class="px-2 py-2 bg-white rounded-md shadow">
                  <a class="block px-4 py-2 mt-2 text-sm text-gray-300 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
                  <a class="block px-4 py-2 mt-2 text-sm text-gray-300 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
                  <a class="block px-4 py-2 mt-2 text-sm text-gray-300 md:mt-0 hover:text-blue-400 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
                </div>
              </div>
            </div>
            <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
              <button class="
              items-center
              block
              px-10
              py-2.5
              text-base
              font-medium
              text-center text-blue-400
              transition
              duration-500
              ease-in-out
              transform
              border-2 border-white
              shadow-md
              rounded-xl
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-gray-500
            "> Sign in </button>
              <button class="items-center block px-10 py-3 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-400 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Sign up </button>
            </div>
          </nav>
        </div>
      </div>
      <div>
        <div class="p-5 overflow-y-auto whitespace-nowrap scroll-hidden bg-gray-50">
          <ul class="inline-flex items-center list-none">
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Pricing</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Contact</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Services</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Now</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Pricing</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Contact</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Services</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Now</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Pricing</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Contact</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Services</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Now</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Pricing</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Contact</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Services</a>
            </li>
            <li>
              <a href="#" class="px-4 py-1 mr-1 text-base text-gray-300 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-blue-400">Now</a>
            </li>
          </ul>
        </div>
</div> --}}

  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <img style="width: 150px;" src="https://od.lk/s/ODhfMTEwNDIwMDlf/frontlegendsoutletja.png" alt="logo">
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="#">Shop Men</a></li>
          <li><a class="hover:text-gray-200" href="#">Shop Women</a></li>
          <li><a class="hover:text-gray-200" href="#">Shop Kids</a></li>
          <li><a class="hover:text-gray-200" href="#">Shop Sale</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <a class="hover:text-gray-200" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
          </a>
          <a class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            <span class="flex absolute -mt-5 ml-4">
              <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                </span>
              </span>
          </a>
          <!-- Sign In / Register      -->
          <a class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
          </a>
          
        </div>
      </div>
      <!-- Responsive navbar -->
      <a class="xl:hidden flex mr-6 items-center" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
          </span>
        </span>
      </a>
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </a>
    </nav>
    
  </section>
    
      <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>




