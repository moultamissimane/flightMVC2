<?php ?>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<div class="relative">
    <header class=" fixed top-0 w-screen left-0" x-data="{ isOpen: false }">
        <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="<?php echo BASE_URL; ?>homeUser" class="text-xl font-bold text-[#0aa4d8] transition-colors duration-300 transform md:text-2xl hover:text-[#71d4f6]" >Fly With Us</a>

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
                <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#">Reservation</a>
                <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#">Price</a>
                <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#contact">Contact</a>
            </div>
        </nav>


    </header>
    <section style="background-image: url('./views/public/assets/images/loginbg.jpg');" class="flex h-screen items-center justify-center bg-cover bg-center">
    </section>

    <section class="bg-white">
        <div>
            <div class="container  mx-auto flex justify-center items-center  md:p-0">
                <div class="border -mt-24 border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                    <div class="flex flex-col md:flex-row">
                        <div class="">
                            <select class="border p-2 rounded">
                                <span>From</span>
                                <option>srgsrf</option>
                            </select>
                        </div>
                        <div class="pt-6 md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>4 Passangers</option>
                                <option>3 Passangers</option>
                                <option>2 Passangers</option>
                            </select>
                        </div>
                        <div class="pt-6 md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>Economy</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" />
                                </svg>
                                <input type="text" placeholder="Enter text here..." class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z" />
                                </svg>
                                <input type="text" placeholder="Enter text here..." class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z" />
                                </svg>
                                <input type="text" placeholder="Enter text here..." class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui" d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z" />
                                </svg>
                                <input type="text" placeholder="Enter text here..." class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center"><button class="p-2 border w-1/4 rounded-md bg-[#71d4f6] hover:text-[#71d4f6] text-white">Search</button></div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;" src="https://travelingformiles.com/wp-content/uploads/2020/12/emirates-new-a380-premium-economy-741.jpg">
                        </div>
                    </div>
                </div>

                <div class="mt-8 md:mt-0 md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800">Reserve your preferred seat!</h3>
                    <p class="max-w-md mt-4 text-gray-600">What will it be, window or aisle?
                        Select your preferred seat prior to your flight and guarantee that
                        it is reserved for you.You can add seats to your booking online through
                        the below form or by contacting our call center,
                        visiting our sales offices or travel partners.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800">Enjoy stress-free travel!</h3>
                    <p class="max-w-md mt-4 text-gray-600">For your extra comfort and complete peace of mind Fly Emirates recommends you take travel insurance, and is pleased to offer Tune Protect.
                        Tune Protect covers you for:
                        USD 50,000 for Accidental and Sickness Medical Reimbursement
                        USD 20,000 for Emergency Medical Evacuation & Repatriation
                        USD 3,000 for Travel Cancellation or Curtailment
                        You can add Travel insurance to your booking online through below form or by contacting our call center, visiting our sales offices or travel partners.</p>
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;" src="https://www.jetsetter.com//uploads/sites/7/2019/01/GettyImages-909268954-1-1380x690.jpg">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-5xl px-6 py-16 mx-auto">
            <div class="items-center md:flex md:space-x-6">
                <div class="md:w-1/2">
                    <div class="flex items-center justify-center">
                        <div class="max-w-md">
                            <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;" src="https://s28477.pcdn.co/wp-content/uploads/2017/08/Emirates_8_web.jpg">
                        </div>
                    </div>
                </div>
                <div class="mt-8 md:mt-0 md:w-1/2">
                    <h3 class="text-2xl font-semibold text-gray-800">Pre-select your preferred meal!</h3>
                    <p class="max-w-md mt-4 text-gray-600">Enjoy a more personalized journey with Fly Emirates. 
                        Select the meal of your choice offered by our Sky Café menu prior to your flight. 
                        While booking online, you can choose from a wide selection of sumptuous onboard food and beverages
                         at extremely affordable prices. You can pre-select your meals instantly online through below form
                          or by contacting our call center, visiting our sales offices or travel partners.</p>
                </div>

            </div>
        </div>
    </section>


<!-- Contact Form -->
<div class="mt-8 mx-4">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6 mr-2 bg-[#0aa4d8]  sm:rounded-lg">
            <h1 class="text-4xl sm:text-5xl text-white  font-extrabold tracking-tight">Get in touch</h1>
            <p class="text-normal text-lg sm:text-2xl font-medium text-white  mt-2">Fill in the form to submit any query</p>

            <div class="flex items-center mt-8 text-gray-600 ">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <div class="ml-4 text-md text-white tracking-wide font-semibold w-40">Dhaka, Street, State, Postal Code</div>
            </div>

            <div class="flex items-center mt-4 text-gray-600 ">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <div class="ml-4 text-md text-white tracking-wide font-semibold w-40">+880 1234567890</div>
            </div>

            <div class="flex items-center mt-4 text-gray-600 ">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <div class="ml-4 text-md text-white tracking-wide font-semibold w-40">info@demo.com</div>
            </div>
          </div>
          <form id="contact" class="p-6 flex flex-col justify-center">
            <div class="flex flex-col">
              <label for="name" class="hidden">Full Name</label>
              <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white border border-[#0aa4d8] text-black  font-semibold focus:border-blue-500 focus:outline-none" />
            </div>

            <div class="flex flex-col mt-2">
              <label for="email" class="hidden">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white  border border-[#0aa4d8] border-[#0aa4d8] text-black  font-semibold focus:border-blue-500 focus:outline-none" />
            </div>

            <div class="flex flex-col mt-2">
              <label for="tel" class="hidden">Number</label>
              <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white  border border-[#0aa4d8] border-[#0aa4d8] text-black  font-semibold focus:border-blue-500 focus:outline-none" />
            </div>

            <button type="submit" class="md:w-32 bg-[#0aa4d8]  text-white  font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 ">Submit</button>
          </form>
        </div>
      </div>
      <!-- ./Contact Form -->

    

    <footer class="border-t mt-6">
        <div class="container flex items-center justify-between px-6 py-8 mx-auto">
            <p class="text-gray-500">© 2022-2023 All Rights Reserved.</p>
            <p class="font-medium text-gray-700">Terms of Service</p>
        </div>
    </footer>
</div>