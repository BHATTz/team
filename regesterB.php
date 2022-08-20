<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body style="background-color: #111827">
    <!-- header -->

    <header class="text-gray-400 bg-gray-900 body-font">
      <div
        class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
      >
        <a
          class="flex title-font font-medium items-center text-white mb-4 md:mb-0"
        >
          <a href="index.html" class="active">
            <img src="img/photography.png" alt="logo" height="50" width="50"
          /></a>
          <span class="ml-3 text-xl"
            ><a href="index.html" class="active">YourDailydDairyCart</a></span
          >
        </a>
        <nav
          class="md:ml-auto flex flex-wrap items-center text-base justify-center font-serif"
        >
          <a class="mr-5 hover:text-white" a href="aboutus.html">About Us</a>
          <a class="mr-5 hover:text-white" a href="tips.html">Tips</a>
          <a class="mr-5 hover:text-white" a href="team.html">Team</a>
        </nav>

        <button
          class=" font-serif inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0"
        >
          <a href="login.php">Login</a>
          <svg
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-4 h-4 ml-1"
            viewBox="0 0 24 24"
          >
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button>
      </div>
    </header>
    
    <!-- content -->
  
    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
      <form action="regesterB.php" method="post">
        <div class="flex flex-col text-center w-full mb-8">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-2 text-blue-200"
          >
            Register As Business
          </h1>
        </div>
        
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-base text-gray-300"
                  >Full Name:</label
                >
                <input
                  type="text"
                  id="name"
                  name="name"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="phone" class="leading-7 text-base text-gray-300"
                  >Phone Number:</label
                >
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="state" class="leading-7 text-base text-gray-300"
                  >State/City:</label
                >
                <input
                  type="text"
                  id="state"
                  name="state"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>

            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-base text-gray-300"
                  >Email Id:</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="milk_qty" class="leading-7 text-base text-gray-300"
                  >required Qty:</label
                >
                <input
                  type="text"
                  id="milk_qty"
                  name="milk_qty"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="price" class="leading-7 text-base text-gray-300"
                  >Price/kg:</label
                >
                <input
                  type="text"
                  id="price"
                  name="price"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="user_id" class="leading-7 text-base text-gray-300"
                  >User Id:</label
                >
                <input
                  type="text"
                  id="user_id"
                  name="user_id"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="password" class="leading-7 text-base text-gray-300"
                  >Password:</label
                >
                <input
                  type="password"
                  id="password"
                  name="password"
                  class="w-full bg-white-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                />
              </div>
            </div>
            <div class="p-2 w-full"></div>
            <div class="p-2 w-full">
              <input type="submit" value="Submit" name="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
          </div>
        </div>
        </form>
        <?php
    include 'conn.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $milk_qty = $_POST['milk_qty'];
        $price = $_POST['price'];
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $query = "insert into bus(name,phone,state,email,qty,price,userid,password)values('$name','$phone','$state','$email','$milk_qty','$price','$user_id','$password')";
        $fire=mysqli_query($con,$query);
        if($fire)
        {
          ?>
          <script>
              alert("data inserted successfully");
          </script>
          <?php
        }else{
          ?>
          <script>
              alert("data not inserted successfully");
          </script>
          <?php
        }
    } 
       ?>
      </div>
    </section>
    <!-- footer -->
  <hr>
  <footer class="text-gray-400 bg-gray-900 body-font">
    <div class="container px-24 py-5 mx-auto">
      <div class="flex flex-wrap md:text-left text-center order-first">
        <div class="lg:w-1/3 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-white tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="mr-5 hover:text-white" a href="aboutus.html#second">ABOUT US</a>
            </li>
            <li>
            <a class="mr-5 hover:text-white" a href="tips.html">TIPS</a>
          </li>
          <li>
        <a class="mr-5 hover:text-white" a href="team.html">TEAM</a>
      </li>
      <li>
      <button class="inline-flex items-center focus:outline-none mr-5 hover:text-white"
       a href="http://127.0.0.1:5500/login.html">Login</a>
        <svg
          fill="none"
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          class="w-4 h-4 ml-1"
          viewBox="0 0 24 24"
        >
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </button>
      </li>
      </nav>
          </nav>
        </div>
        <div class="lg:w-1/3 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-white tracking-widest text-sm mb-3"
          >
            TEAM MEMBERS
          </h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-gray-400 hover:text-white">SARTHAK BHATT</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">RITIK RANA</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">GAURAV KUMAR</a>
            </li>
            <li>
              <a class="text-gray-400 hover:text-white">SONU VERMA</a>
            </li>
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-white tracking-widest text-sm mb-3"
          >
          FEEDBACK
          </h2>
          <div
            class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start"
          >
            <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
              <label
                for="footer-field"
                class="leading-3 text-sm text-gray-400"
                >We all need people who will give us feedback. That’s how we improve.</label
              >
            </div>
            <button
              class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded"
            ><a href="http://127.0.0.1:5500/aboutus.html">Press Me</a>
           </button>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-800 bg-opacity-75">
      <div
        class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col"
      >
        <a
          class="flex title-font font-medium items-center md:justify-start justify-center text-white"
        >
          <a href="index.html" class="active">
            <img src="img/photography.png" alt="logo" height="50" width="50"
          /></a>
          <span class="ml-3 text-xl"
            ><a href="index.html" class="active">YourDailydDairyCart</a></span
          >
        </a>
        <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">
          © 2022 SGGS Team 3 —
          <a
            href="https://twitter.com/knyttneve"
            class="text-gray-500 ml-1"
            target="_blank"
            rel="noopener noreferrer"
            >@YourDailydDairyCart</a
          >
        </p>
        <span
          class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start"
        >
        <a
        href="#"
        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
        aria-label="Github"
      >
        <svg
          class="w-6 h-6 fill-current"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z"
          ></path>
        </svg>
      </a>
        </span>
      </div>
    </div>
  </footer>
  </body>
</html>
