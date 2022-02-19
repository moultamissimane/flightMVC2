<?php
if (isset($_POST['submit'])) {
    $newAirline = new AirlineControllers();
    $result = $newAirline->add();
}
?>

<div class="flex justify-center w-full">
    <div class="mt-10 ml-12 z-50 sm:top-auto sm:right-5 sm:left-auto sm:w-[350px] sm:h-[600px] border border-gray-300 bg-white shadow-2xl rounded-md">
        <div class="flex p-5 flex-col justify-center items-center h-32 bg-[#0aa4d8]">
            <h3 class="text-lg text-white">Airline</h3>
        </div>
        <div class="bg-gray-50 flex-grow p-6">
            <form method="POST" id="form" class="needs-validation" novalidate>
                <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE" />
                <input type="hidden" name="subject" value="New Submission from Web3Forms" />
                <input type="checkbox" name="botcheck" id="" style="display: none;" />
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Name</label>
                    <input type="text" name="name" id="name" placeholder="Qatar Airways" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Abreviation</label>
                    <input type="text" name="abreviation" id="abreviation" placeholder="QR1456" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">City</label>
                    <input type="text" name="city" id="city" placeholder="Casablanca" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                </div>
                <div class="mb-4">
                    <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Image Source</label>
                    <input type="text" name="src" id="src" placeholder="https://www.billboard.com/wp-content/uploads/2021/08/Martin-Garrix-cr-Louis-van-Baar-press-2021-billboard-1548-1628799214.jpg" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
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