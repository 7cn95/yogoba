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
        <div class="flex flex-col justify-center p-8 md:p-14">
          <span class="mb-3 text-4xl font-bold">Welcome </span>
          <span class="font-light text-gray-400 mb-8">
            Welcom ! Please enter your details
          </span>
          <form action="../controllers/userController.php" method="post" enctype="multipart/form-data">
          <div class="py-2">
            <span class="mb-2 text-md">full name</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="fullname"
              id="name"/>
          </div>
          <div class="py-2">
            <span class="mb-2 text-md">Username</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="username"
              id="username"
            />
          </div>
          <div class="py-2">
            <span class="mb-2 text-md">Password</span>
            <input
              type="password"
              name="password"
              id="pass"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          <div class="py-2">
            <span class="mb-2 text-md">Email</span>
            <input
              type="email"
              name="email"
              id="email"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          <div class="py-2">
            <span class="mb-2 text-md">Gender</span><br>
            male:<input type="radio" name="gender" id="gender" value="male"/>
            female:<input type="radio" name="gender" id="gender" value="female"/>
          </div>
          
          <div class="py-2 hidden">
            <span class="mb-2 text-md">account_type</span>
            <input type="number" name="account_type" id="account_type" value="1"/>
          </div>
          <div class="py-2">
            <span class="mb-2 text-md">Date of Birth</span>
            <input
              type="date"
              name="dob"
              id="dob"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          <div class="py-2">
            <span class="mb-2 text-md">profile image</span>
            <input type="file" name="img" id="img"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"/>
          </div>
          <input type="submit" name="create_account" class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-gray-900  "
          
          value=" تسجيل جديد">
          </form>
          
          
          
          <a href="/php/yogoba/src/views/login.php" class="text-center w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-black hover:text-white">
            
            رجوع
          </a>
          
        </div>
        <div class="relative">
          <img
            src="../../public/img/main.jpg"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
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
