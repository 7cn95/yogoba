<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../public/css/output.css">
    <link rel="stylesheet" href="../../public/css/main.css">
    <title>Document</title>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div
        class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <!-- left side -->
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Welcome back</span>
          <span class="font-light text-gray-400 mb-8">
            Welcom back! Please enter your details
          </span>
          <form action="../controllers/userController.php" method="post">
            <div class="py-4">
            <span class="mb-2 text-md">Username</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="username"
              id="username"
            />
          </div>
          <div class="py-4">
            <span class="mb-2 text-md">Password</span>
            <input
              type="password"
              name="password"
              id="pass"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
              <input type="checkbox" name="rem" id="rem" class="mr-2" />
              <span class="text-md">تذكر</span>
            </div>
            <span class="font-bold text-md">نسيت كلمة السر</span>
          </div>
          <input type="submit" name="login" value="تسجيل دخول" class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-gray-900  "
          >
          </form>
          
          
          
          <a href="/php/yogoba" class="text-center w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-black hover:text-white">
            
            رجوع
          </a>
          <div class="text-center text-gray-400">
            ليس لديك حساب ؟
            <a href="./register.php"><span class="font-bold text-black">سجل الان مجانا</span></a>
          </div>
        </div>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            src="../../public/img/main.jpg"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
          <!-- text on image  -->
          <div
            class="absolute hidden bottom-10 right-6 p-6 bg-gray-900 bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block"
          >
            <span class="text-white text-xl"
              >We've been uesing Untitle to kick"<br />start every new project
              and can't <br />imagine working without it."
            </span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>