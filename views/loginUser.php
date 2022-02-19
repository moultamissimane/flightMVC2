<?php
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styles.css">
    <title>Log In</title>
</head>

<body>
    <div class="min-h-screen">
        <div class="flex">
            <img src="../public/assets/images/plane-isometric-vinodesign.png" class="w-3/6 object-cover" alt="">
            <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                <div>
                    <div class="">
                        <img src="../public/assets/images/logo.png" class="flex" alt="" style="width:40%; height:25%;margin-left:4rem;">
                    </div>
                    <form>
                        <div>
                            <span class="text-lg text-gray-900">Welcome back</span>
                            <h1 class="text-2xl font-bold">Login to your account</h1>
                        </div>
                        <div class="my-3">
                            <label class="block text-md mb-2" for="email">Email</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="email" name="password" placeholder="email">
                        </div>
                        <div class="mt-5">
                            <label class="block text-md mb-2" for="password">Password</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="password" name="password" placeholder="password">
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <input class="cursor-pointer" type="radio" name="rememberme">
                                <span class="text-sm">Remember Me</span>
                            </div>
                            <span class="text-sm text-blue-700 hover:underline cursor-pointer">Forgot password?</span>
                        </div>
                        <div class="">
                            <button class="mt-4 mb-3 w-full bg-[#71d4f6] hover:bg-[#0aa4d8] text-white py-2 rounded-md transition duration-100">Login now</button>
                            <div class="flex  space-x-2 justify-center items-end bg-gray-700 hover:bg-gray-600 text-white py-2 rounded-md transition duration-100">
                                <img class=" h-5 cursor-pointer" src="https://i.imgur.com/arC60SB.png" alt="">
                                <button>Or sign-in with google</button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-8"> Dont have an account? <span class="cursor-pointer text-sm text-blue-600"> Join now</span></p>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>