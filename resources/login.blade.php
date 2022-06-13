<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/output.css">
    <title>LOGIN</title>
</head>

    <body class="flex content-center justify-center h-full items-center bg-slate-700">
        <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
          <div class="bg-white border-t-4 p-10 border-slate-400 rounded-md shadow-md border-top lg:max-w-md">
            <h1 class="text-3xl font-semibold text-center text-slate-700">LOGO</h1>
            <form class="mt-6">
              <div>
                <label for="email" class="block text-sm text-slate-400">Email</label>
                <input type="email"
                  class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
              </div>
              <div class="mt-4">
                <div>
                  <label for="password" class="block text-sm text-slate-400">Password</label>
                  <input type="password"
                    class="block w-full px-4 py-2 mt-2 text-slate-700 shadow-inner bg-white border rounded-md focus:border-purple-400 focus:ring-purple-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <a href="#" class="text-xs text-slate-400 hover:underline ">Forget Password?</a>
                <div class="mt-6">
                  <button
                    class="w-full px-4 py-2 tracking-wide text-white shadow-slate-500 shadow-md  bg-slate-500 transition-colors duration-200 transform rounded-md hover:bg-slate-700  focus:outline-none focus:bg-slate-700">
                    Login
                  </button>
                </div>
            </form>
            <p class="mt-8 text-xs font-light text-center text-slate-400"> Don't have an account? <a href="#"
                class="font-medium text-slate-700 hover:underline">Sign up</a></p>
          </div>
        </div>
    



</body>
</html>