<?php
$flight = FlightControllers::getOneFlight();
?>

<!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/a lpine.min.js" defer></script> -->
<style>
  html {
    scroll-behavior: smooth;
  }
</style>

<div class="relative">
  <header class=" backdrop-blur-2xl  fixed z-50 top-0 w-screen left-0" x-data="{ isOpen: false }">
    <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
      <div class="flex items-center justify-between">
        <a href="<?php echo BASE_URL; ?>home" class="text-xl font-bold text-[#0aa4d8] transition-colors duration-300 transform md:text-2xl hover:text-[#71d4f6]">Fly With Us</a>
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
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="<?php echo BASE_URL; ?>home">Home</a>
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="<?php echo BASE_URL; ?>reservation">Reservation</a>
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#">Contact</a>
        <span class="hidden ml-10 md:block cursor-pointer text-black"><?php echo $_SESSION['full_name'] ?></span>
        <img class=" h-7 md:w-10 md:h-10 ml-2 rounded-full cursor-pointer overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
      </div>
    </nav>
  </header>

  <div class="flex items-center mt-36 flex-col w-full">
    <div class="p-10 xl:w-3/4 sm:w-full">
      <div class="max-w-full  bg-white flex flex-col rounded overflow-hidden shadow-lg">
        <div class="flex flex-row items-baseline flex-nowrap bg-gray-100 p-2">
          <svg viewBox="0 0 64 64" class="mt-2 mr-1" role="presentation" style="fill: rgb(102, 102, 102); height: 0.9rem; width: 0.9rem;">
            <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
          </svg>
          <div class="">
            <h1 class="ml-2 uppercase font-bold text-gray-500">departure</h1>
            <p class="ml-2 font-normal text-gray-500"><?php echo $flight['departure'] ?></p>
          </div>
            <div class="flex justify-end w-full my-3">
              <button class="bg-[#71d4f6] my-button rounded-md px-2 py-2 text-white ">Complete Order</button>
            </div>
        </div>
        <div class="mt-2 flex justify-start bg-white p-2">
          <div class="flex mx-2 ml-6 h8 px-2 flex-row items-baseline rounded-full bg-gray-100 p-1">
            <svg viewBox="0 0 64 64" class="etiIcon css-jbc4oa" role="presentation" style="fill: rgb(102, 102, 102); height: 12px; width: 12px;">
              <path d="M43.389 38.269L29.222 61.34a1.152 1.152 0 01-1.064.615H20.99a1.219 1.219 0 01-1.007-.5 1.324 1.324 0 01-.2-1.149L26.2 38.27H11.7l-3.947 6.919a1.209 1.209 0 01-1.092.644H1.285a1.234 1.234 0 01-.895-.392l-.057-.056a1.427 1.427 0 01-.308-1.036L1.789 32 .025 19.656a1.182 1.182 0 01.281-1.009 1.356 1.356 0 01.951-.448l5.4-.027a1.227 1.227 0 01.9.391.85.85 0 01.2.252L11.7 25.73h14.5L19.792 3.7a1.324 1.324 0 01.2-1.149A1.219 1.219 0 0121 2.045h7.168a1.152 1.152 0 011.064.615l14.162 23.071h8.959a17.287 17.287 0 017.839 1.791Q63.777 29.315 64 32q-.224 2.685-3.807 4.478a17.282 17.282 0 01-7.84 1.793h-9.016z"></path>
            </svg>
            <p class="font-normal text-sm ml-1 text-gray-500">Economy</p>
          </div>
        </div>
        <div class="mt-2 flex sm:flex-row mx-6 sm:justify-between flex-wrap ">
          <div class="flex flex-row place-items-center p-2">
            <img alt="Qatar Airways" class="w-10 h-10" src="<?php echo $flight['src']; ?>" style="opacity: 1; transform-origin: 0% 50% 0px; transform: none;" />
            <div class="flex flex-col ml-2">
              <p class="text-xs text-gray-500 font-bold"><?php echo $flight['name'] ?></p>
              <p class="text-xs text-gray-500"><?php echo $flight['abreviation'] ?></p>
            </div>
          </div>

          <div class="flex flex-col p-2">
            <p class="font-bold"><?php echo $flight['departure'] ?></p>
            <p class="text-gray-500"><?php echo $flight['city_from'] ?></p>
          </div>
          <div class="flex flex-col flex-wrap p-2">
            <p class="font-bold"><?php echo $flight['arrive'] ?></p>
            <p class="text-gray-500"><?php echo $flight['city_to'] ?></p>
          </div>
        </div>

        <form method="post" action="ticket" id="form" class="myform hidden mt-4 bg-gray-100 flex flex-row flex-wrap md:flex-nowrap justify-between items-baseline">
          <div id="passengers_form" class="w-2/3 p-4 border-r-2 overflow-y-scroll max-h-[28rem]">
            <h2 class="text-3xl mb-3 font-bold">Add passengers</h2>
            <div class="<?php echo !$flight['available_seats'] > 1 ? 'flex justify-center items-center w-full h-full p-5' : 'hidden'; ?>">
              <span class="text-3xl font-bold">No available places 😥💔</span>
            </div>
            <div class="<?php echo $flight['available_seats'] > 1 ? '' : 'hidden'; ?>">
              <div class="flex justify-end w-full my-3">
                <div onclick="addPassenger()" class="px-3 p-1 cursor-pointer rounded-md text-white bg-[#71d4f6] hover:bg-blue-400 ">Add passenger</div>
              </div>
              <div class="transition-all bg-slate-50 border-2 shadow-md p-3 rounded-lg hover:shadow-xl">
                <h3 class="text-xl mb-3 font-bold">Passengers 1</h3>
                <!-- form control -->
                <div class="mb-4">
                  <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full name</label>
                  <input type="text" name="full_name[]" id="full_name" placeholder="enter full name" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <!-- form control -->
                <!-- form control -->
                <div class="mb-4">
                  <label for="date_of_birth" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Date of birth</label>
                  <input type="date" name="date_of_birth[]" id="date_of_birth" placeholder="enter  date of birth" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <!-- form control -->
                <!-- form control -->
                <div class="mb-4">
                  <label for="passport" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">passport</label>
                  <input type="text" name="passport[]" id="passport" placeholder="enter passport" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <!-- form control -->
              </div>
            </div>

          </div>
          <div class="w-1/3 p-4 ">
            <h2 class="text-3xl mb-3 font-bold">Checkout</h2>
            <div class="flex justify-between w-full">
              <input type="text" class="hidden" name="flight_id" value="<?php echo $flight['id'] ?>">
              <h1 class="ml-2 uppercase font-bold text-gray-500">City</h1>
              <p class="text-gray-500"><?php echo $flight['city_from'] ?></p>
            </div>
            <div class="flex justify-between w-full">
              <h1 class="ml-2 uppercase font-bold text-gray-500">departure</h1>
              <p class="ml-2 font-normal text-gray-500"><?php echo $flight['departure'] ?></p>
            </div>
            <div class="flex justify-between items-end w-full">
              <h1 class="ml-2 uppercase font-bold text-gray-500">Passengers</h1>
              <p id="pass_num" class="ml-2 text-xl font-bolde text-gray-500">0</p>
            </div>
            <div class="flex mt-16 justify-between items-end w-full">
              <h1 class="ml-2 uppercase font-bold text-gray-500">Price</h1>
              <p id="price" class="ml-2 text-3xl font-bolde text-gray-500"><?php echo $flight['price'] ?>$</p>
            </div>
            <div class="flex justify-end w-full my-3">
              <button name="submit" class="px-3 p-2 rounded-md w-full text-white bg-[#71d4f6] hover:bg-blue-400 ">Complete order</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script>
  const myform = document.querySelector('.myform');
  document.querySelector('.my-button').addEventListener('click', () => {
    myform.classList.toggle('hidden');
  });
  const addPassenger = () => {

    let Passengerform = document.createElement("div");
    let numOfPass = document.querySelectorAll('#passengers_form')[0].children.length - 1
    if (+<?php echo $flight['available_seats'] ?> > numOfPass) {


      Passengerform.classList.add(...["transition-all", "bg-slate-50", "border-2", "shadow-md", "p-3", "rounded-lg", "hover:shadow-xl", "my-3"])
      Passengerform.innerHTML = `
      <h3 class="text-xl mb-3 font-bold">passengers ${numOfPass}</h3>
      <!-- form control -->
      <div class="mb-4">
      <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full name</label>
                <input type="text" name="full_name[]" id="full_name" placeholder="enter full name" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
              </div>
              <!-- form control -->
              <!-- form control -->
              <div class="mb-4">
                <label for="date_of_birth" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Date of birth</label>
                <input type="date"  name="date_of_birth[]" id="date_of_birth" placeholder="enter  date of birth" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <!-- form control -->
                <!-- form control -->
                <div class="mb-4">
                <label for="passport" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">passport</label>
                <input type="text" name="passport[]" id="passport" placeholder="enter passport" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                `

      document.getElementById('passengers_form').appendChild(Passengerform)
    } else {
      alert('not enough seats')
    }
  }

  // const HandleForm = ()=>{
  //     document.getElementById(form).classList.toggle('hidden')
  // }
</script>