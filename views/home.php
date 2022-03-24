<?php

Session::isLogged();

$cities = ['Casablanca', 'Paris', 'Marrakech', 'Madrid', 'Dakhla'];

?>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
                <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="#contact">Contact</a>
        <a class="text-sm font-medium text-[#0aa4d8] transition-colors duration-300 transform hover:text-[#71d4f6]" href="<?php echo BASE_URL; ?>myReservations">My Reservations</a>

                <span class="hidden ml-10 md:block cursor-pointer text-blue-300"><?php echo $_SESSION['user']->full_name ?></span>
                <img class=" h-7 md:w-10 md:h-10 ml-2 rounded-full cursor-pointer overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                <a href="<?php echo BASE_URL; ?>logout" class="flex items-center mr-4 text-white hover:text-[#71d4f6]">
                    <span class="inline-flex mr-1 text-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </span>
                    Logout
                </a>
            </div>
        </nav>
    </header>


    <section style="background-image: url('./views/public/assets/images/loginbg-Recovered.png');" class="flex h-screen items-center justify-center bg-cover bg-center">
    </section>

    <section class="bg-white">
        <div>
            <div class="container sm:w-3/4  mx-auto flex justify-center items-center space-x-10  md:p-0">
                <div class="border -mt-40 border-gray-300 p-8 grid grid-cols-1 gap-6 gap-x-8 bg-white shadow-lg rounded-lg w-2/4 ">
                    <div class="flex space-x-20 md:flex-row items-center md:space-x-0 justify-center lg:space-x-4">
                        <!-- <div class="">
                            <span class="ml-2">Departure</span>
                            <div class="border p-2 rounded">
                            <input type="date" name="name" id="name" class=" placeholder-black rounded-lg  text-black  font-semibold " />
                            </div>
                        </div> -->
                        <div class="">
                        <span class="ml-8">Passangers</span>
                        <div class=" md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>1 Passangers</option>
                                <option>2 Passangers</option>
                                <option>3 Passangers</option>
                                <option>More Passangers?</option>
                            </select>
                        </div>
                        </div>
                        <div>
                        <span class="ml-8">Type</span>
                        <div class=" md:pt-0 md:pl-6">
                            <select class="border p-2 rounded">
                                <option>Economy</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <form action="reservation" method="post" class="">
                        <div class="flex justify-center rounded lg:space-x-12 px-10 py-2">
                            <div>
                            <span class="ml-2">Departure</span>
                            <div class="flex border rounded bg-white-300 items-center p-2 ">
                                <select type="text" class="bg-white-300 max-w-full focus:outline-none text-gray-700 ">
                                    <?php foreach ($cities as $c) { ?>
                                        <option class="flex w-full items-center p-2 pl-2 border-transparent bg-white "><?php echo $c; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            </div>
                            <div class="">
                                <span class="ml-2">Arrive</span>
                            <div class="flex border rounded bg-white-300 items-center p-2 ">
                                <select type="text" class="bg-white-300 max-w-full focus:outline-none  text-gray-700">
                                    <?php foreach ($cities as $c) { ?>
                                        <option class="flex w-full items-center p-2 pl-2 bg-white " ><?php echo $c; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            </div>
                        </div>
                    </form>
                    <div class=" mx-auto ">
                        <button class=" items-center  border rounded-md bg-[#71d4f6]  hover:bg-white hover:duration-700 hover:text-[#71d4f6] text-white px-10 py-2">Search</button>
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
                    <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 placeholder-black rounded-lg bg-white border border-[#0aa4d8] text-black  font-semibold focus:border-blue-500 focus:outline-none" />
                </div>
                <div class="flex flex-col mt-2">
                    <label for="email" class="hidden">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 placeholder-black rounded-lg bg-white  border border-[#0aa4d8]  text-black  font-semibold focus:border-blue-500 focus:outline-none" />
                </div>

                <div class="flex flex-col mt-2">
                    <label for="tel" class="hidden">Number</label>
                    <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 placeholder-black rounded-lg bg-white  border border-[#0aa4d8] text-black  font-semibold focus:border-blue-500 focus:outline-none" />
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