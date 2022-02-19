<?php

$airlines = AirlineControllers::getAll();


if (isset($_POST['submit'])) {
    $newFlight = new FlightControllers();
    $result = $newFlight->add();
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
                    <input type="text" name="city_from" id="city_from" placeholder="Casablanca" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        Please provide your full name.
                    </div>
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">City To</label>
                    <input type="text" name="city_to" id="city_to" placeholder="Paris" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        Please provide your full name.
                    </div>
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Departure</label>
                    <input type="time" name="departure" id="departure" placeholder="Casablanca" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        Please provide your full name.
                    </div>
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Price</label>
                    <input type="text" name="price" id="price" placeholder="400$" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        Please provide your full name.
                    </div>
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Airline_id</label>
                    <select name="airline_id" id="airline_id"required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" >
                    <?php foreach($airlines as $a){ ?>    
                    <option value="<?php echo $a['id']; ?>"><?php echo $a['name']; ?></option>
                    <?php } ?>
                    </select>
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        Please provide your full name.
                    </div>
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Seat</label>
                    <input type="number" name="seats" id="seats" placeholder="n°1" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                    <div class="empty-feedback invalid-feedback text-red-400 text-sm mt-1">
                        Please provide your full name.
                    </div>
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

<style>
    .invalid-feedback,
    .empty-feedback {
        display: none;
    }

    .was-validated :placeholder-shown:invalid~.empty-feedback {
        display: block;
    }

    .was-validated :not(:placeholder-shown):invalid~.invalid-feedback {
        display: block;
    }

    .is-invalid,
    .was-validated :invalid {
        border-color: #dc3545;
    }

    .is-invalid,
    .was-validated :invalid:focus {
        --tw-ring-color: rgba(220, 53, 69, 0.2);
    }
</style>
