<?php
$reservations =  ReservationControllers::add();
?>

<!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/a lpine.min.js" defer></script> -->
<style>
  html {
    scroll-behavior: smooth;
  }
</style>

<div class="relative">
  <header class="print:hidden fixed top-0 w-screen left-0" x-data="{ isOpen: false }">
    <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
      <div class="flex items-center justify-between">
        <a href="<?php echo BASE_URL; ?>homeUser" class="text-xl font-bold text-[#0aa4d8] transition-colors duration-300 transform md:text-2xl hover:text-[#71d4f6]">Fly With Us</a>
        <!-- Mobile menu button -->
        <div @click="isOpen = !isOpen" class="flex md:hidden">
          <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
              <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
              </path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
      <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="<?php echo BASE_URL; ?>homeUser">Home</a>
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="<?php echo BASE_URL; ?>reservation">Reservation</a>
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#">Price</a>
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#">Contact</a>
        <img class=" h-7 md:w-10 md:h-10 ml-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
        <span class="hidden ml-10 md:block"><?php echo 'qdf' ?></span>
      </div>
    </nav>
  </header>

  <div class="flex items-center mt-12 flex-col w-full">
    <div class="p-10 xl:w-3/4 sm:w-full">
      <div class="flex print:hidden w-full py-4 justify-end">
        <button onclick="printMe()" class="p-2 px-5 rounded-md bg-blue-600 text-white">Print</button>
      </div>
      <?php foreach ($reservations as $flight) { ?>
        <div class="max-w-full my-3 bg-white flex flex-col rounded overflow-hidden shadow-lg">
          <div class="flex flex-row items-baseline flex-nowrap bg-gray-100 p-2">
            <svg viewBox="0 0 64 64" data-testid="tripDetails-bound-plane-icon" pointer-events="all" aria-hidden="true" class="mt-2 mr-1" role="presentation" style="fill: rgb(102, 102, 102); height: 0.9rem; width: 0.9rem;">
              <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
            </svg>
            <h1 class="ml-2 uppercase font-bold text-gray-500">departure</h1>
            <p class="ml-2 font-normal text-gray-500"><?php echo $flight->departure ?></p>
          </div>
          <div class="mt-2 flex justify-start bg-white p-2">
            <div class="flex mx-2 ml-6 h8 px-2 flex-row items-baseline rounded-full bg-gray-100 p-1">
              <svg viewBox="0 0 64 64" pointer-events="all" aria-hidden="true" class="etiIcon css-jbc4oa" role="presentation" style="fill: rgb(102, 102, 102); height: 12px; width: 12px;">
                <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
              </svg>
              <p class="font-normal text-sm ml-1 text-gray-500">Economy</p>
            </div>
          </div>
          <div class="mt-2 flex sm:flex-row mx-6 sm:justify-between flex-wrap ">
            <div class="flex flex-row place-items-center p-2">
              <img alt="Qatar Airways" class="w-10 h-10" src="<?php echo $flight->src; ?>" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
              <div class="flex flex-col ml-2">
                <p class="text-xs text-gray-500 font-bold"><?php echo $flight->name ?></p>
                <p class="text-xs text-gray-500"><?php echo $flight->abreviation ?></p>
              </div>
            </div>

            <div class="flex flex-col p-2">
              <p class="font-bold"><?php echo $flight->departure ?></p>
              <p class="text-gray-500"><?php echo $flight->city_from ?></p>
            </div>
            <div class="flex flex-col flex-wrap p-2">
              <p class="font-bold"><?php echo $flight->arrive ?></p>
              <p class="text-gray-500"><?php echo $flight->city_to ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</div>
</div>
<script>
  const printMe = ()=>{
    window.print()
  }
</script>