<?php
if (isset($_POST['submit'])) {
    $createUser = new UsersControllers();
    $createUser->register();
}

?>

    <div class="min-h-screen">
        <div class="flex">
            <img src="./views/public/assets/images/plane-isometric-vinodesign.png" class="w-3/6 object-cover" alt="">
            <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                <div>
                    <form method="POST">
                        <h2 class="text-3xl mb-3 font-bold">Enter your cridentials</h2>
                        <!-- form control -->
                        <div class="mb-4">
                            <label for="full_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full name</label>
                            <input type="text" name="full_name" id="full_name" placeholder="enter your full name" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <!-- form control -->
                        <!-- form control -->
                        <div class="mb-4">
                            <label for="date_of_birth" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Date of birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" placeholder="enter your date of birth" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <!-- form control -->
                        <!-- form control -->
                        <div class="mb-4">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">email</label>
                            <input type="email" name="email" id="email" placeholder="enter your email" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <!-- form control -->
                        <!-- form control -->
                        <div class="mb-4">
                            <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">password</label>
                            <input type="password" name="password" id="password" placeholder="enter your password" required class="w-full px-3 py-2 bg-white placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                        </div>
                        <!-- form control -->
                        <div class="">
                            <button type="submit" name="submit" class="mt-4 mb-3 w-full bg-[#71d4f6] hover:bg-[#0aa4d8] text-white py-2 rounded-md transition duration-100">Create your account</button>
                        </div>
                    </form>
                    <p class="mt-8"> Already have an account? <span class="cursor-pointer text-sm text-blue-600"> Join now</span></p>
                </div>
            </div>
        </div>
    </div>
    </div>