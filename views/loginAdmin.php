<?php

if(isset($_POST['submit'])){
    $loginAdmin = new UsersControllers();
    $loginAdmin->adminAuth();
}

?>

    <div class="min-h-screen">
        <div class="flex">
            <img src="./views/public/assets/images/plane-isometric-vinodesign.png" class="w-3/6 object-cover" alt="">
            <div class="bg-white min-h-screen w-1/2 flex justify-center items-center">
                <div>
                    <div class="">
                        <img src="./views/public/assets/images/logo.png" class="flex" alt="" style="width:40%; height:25%;margin-left:4rem;">
                    </div>
                    <form method="POST">
                        <div>
                            <span class="text-lg text-gray-900">Welcome Master</span>
                            <h1 class="text-2xl font-bold">Login to your account</h1>
                        </div>
                        <div class="my-3">
                            <label class="block text-md mb-2" for="email">Email</label>
                            <input class="px-4 w-full border-2 py-2 rounded-md text-sm outline-none" type="email" name="email" placeholder="email">
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
                            <button name="submit" class="mt-4 mb-3 w-full bg-[#71d4f6] hover:bg-[#0aa4d8] text-white py-2 rounded-md transition duration-100">Login now</button>
                        </div>
                    </form>
                    <!-- <p class="mt-8"> Dont have an account? <span class="cursor-pointer text-sm text-blue-600"> Join now</span></p> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>