<?php

if (isset($_POST['id'])) {
    $myFlight = new FlightControllers();
    $flight = $myFlight->getOneFlight();
} else {
    Redirect::to('dashFlight');
}

if (isset($_POST['submit'])) {
    $exitFlight = new FlightControllers();
    $exitFlight->update();
}

if (isset($_POST['id'])) {
    $myAirline = new AirlineControllers();
    $airline = $myAirline->getAll();
} else {
    Redirect::to('dashFlight');
}

?>
<div class="flex justify-center w-full">
    <div class="mt-10 ml-12 z-50 sm:top-auto sm:right-5 sm:left-auto sm:w-[350px] sm:h-[600px] border  bg-white shadow-2xl rounded-md">

        <div class="flex p-5 flex-col justify-center items-center h-32 bg-[#0aa4d8]">
            <h3 class="text-lg text-white">Flight</h3>
        </div>
        <div class="bg-gray-50 flex-grow p-6">
            <form method="POST" id="form" class="needs-validation" novalidate>
                <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE" />
                <input type="hidden" name="subject" value="New Submission from Web3Forms" />
                <input type="checkbox" name="botcheck" id="" style="display: none;" />
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">City From</label>
                    <input type="text" name="city_from" id="city_from" placeholder="From" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" value="<?php echo $flight['city_from']; ?>" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">City To</label>
                    <input type="text" name="city_to" id="city_to" placeholder="To" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" value="<?php echo $flight['city_to']; ?>" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Departure</label>
                    <input type="date" name="departure" id="departure" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" value="<?php echo $flight['departure']; ?>" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Arrive</label>
                    <input type="date" name="arrive" id="arrive" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" value="<?php echo $flight['arrive']; ?>" />
                </div>

                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Price</label>
                    <input type="text" name="price" id="price" placeholder="400$" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" value="<?php echo $flight['price']; ?>" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Airline_id</label>
                    <select name="airline_id" id="airline_id" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                        <?php foreach ($airline as $a) { ?>
                            <option value="<?php echo $a['id']; ?>"><?php echo $a['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Seat</label>
                    <input type="number" name="seats" id="seats" placeholder="n°1" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" value="<?php echo $flight['seats']; ?>" />
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="w-full px-3 py-4 text-white bg-[#0aa4d8] rounded-md focus:bg-[#0aa4d8] focus:outline-none">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

