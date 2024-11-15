<!DOCTYPE html>
<html lang="en" class="text-xs md:text-xs lg:text-sm xl:text-base 2xl:text-lg">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- ion icon pack -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Tailwind CSS Links -->
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {

          spacing: {

          }
        }
      }
    }
  </script>

  <!-- favicon -->
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="./styles/style.css">

  <title>Paytm Clone</title>
</head>

<body style="font-family: 'Inter', sans-serif;" class="text-black bg-[#F0FBFF] ">

  <header class="shadow-lg relative bg-white">
    <div class="flex justify-between items-center max-w-screen-2xl mx-auto h-24 px-4">
      <div>
        <img src="./image/paytm_logo.png" alt="paytm logo" class="w-[10.25rem]">
      </div>
      <nav class="">
        <ul class="lg:flex gap-8 font-bold text-[1.0625rem] hidden">
          <li><a href="#" class="hover:bg-gray-100 p-3 rounded transition-all">For Consumer</a></li>
          <li><a href="#" class="hover:bg-gray-100 p-3 rounded transition-all">For Business</a></li>
          <li><a href="#" class="hover:bg-gray-100 p-3 rounded transition-all">Company</a></li>
          <li><a href="#" class="hover:bg-gray-100 p-3 rounded transition-all">Investor Relations</a></li>
          <li><a href="#" class="hover:bg-gray-100 p-3 rounded transition-all">Career</a></li>
        </ul>
      </nav>
      <div
        class="sign-in-btn bg-orange-400 text-white font-bold text-sm p-0.5 pl-5 rounded-full hover:bg-[#012970] cursor-pointer transition-all">
        <div class=" flex items-center gap-2">
          <span>Sign In</span>
          <img src="./images/user-icon-md.svg" alt="user icon" class="user-icon-md">
          {{-- <img src="./images/user-icon-blue.svg" alt="user icon" class="user-icon-blue"> --}}
        </div>
      </div>
    </div>
  </header>

  <main class="bg-white">

    <section class="text-center sm:flex justify-center items-center gap-1 py-3 bg-gray-100">
      <span class="font-semibold">No Wallet KYC Required</span>
      <span class="text-2xl">&#128522;</span>
      <span class="font-medium">to pay using UPI</span>
      <span><a href="#" class="font-semibold">Learn more.</a></span>
    </section>

    <section class="mt-32">
      <div class="flex flex-col-reverse items-center sm:flex-row sm:justify-between max-w-screen-2xl mx-auto px-4">
        <!-- hero left side -->
        <div class="flex flex-col	gap-12 max-w-2xl pt-10 sm:pt-0">
          <div><img src="./image/paytm_logo.png" alt="paytm upi img" class="w-[5rem] rounded-xl">
          </div>
          <div class="flex flex-col text-center sm:text-start">
            <h1 class="text-[3.375rem] font-bold leading-tight	">India's Most-loved Payments App</h1>
            <p class="text-xl	mb-10 mt-2 max-w-[29.6875rem] self-center sm:self-start">
              Recharge & pay bills, book flights & movie tickets, open a savings account, invest in stocks & mutual
              funds, and do a lot more.
            </p>
            <div class="flex justify-center sm:block">
              <button href="#"
                class="download-paytm-app-btn flex bg-black text-white font-medium items-center gap-2 px-7 py-3 rounded-full border border-black hover:bg-white hover:text-black transition-all">
                Download Elo App
                <span>
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="apple-logo-svg-w">
                    <path
                      d="M11.6593 15.3557C10.7589 16.1979 9.76546 16.0666 8.81854 15.6695C7.81182 15.2644 6.89149 15.2388 5.82828 15.6695C4.50426 16.2203 3.80155 16.0602 3.00415 15.3557C-1.49786 10.8883 -0.833353 4.08311 4.28331 3.82691C5.52427 3.89096 6.39311 4.48821 7.12406 4.53785C8.21052 4.32489 9.25047 3.71483 10.4133 3.79489C11.8105 3.90377 12.8554 4.43538 13.5531 5.3913C10.6791 7.05657 11.3603 10.7073 14 11.7321C13.4717 13.0691 12.7939 14.3902 11.6576 15.3669L11.6593 15.3557ZM7.02439 3.77888C6.88982 1.79336 8.55939 0.160122 10.4798 0C10.7439 2.28974 8.32017 4.00305 7.02439 3.77888Z"
                      fill="white"></path>
                  </svg>
                  <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="apple-logo-svg-b">
                    <path
                      d="M11.6593 15.3557C10.7589 16.1979 9.76546 16.0666 8.81854 15.6695C7.81182 15.2644 6.89149 15.2388 5.82828 15.6695C4.50426 16.2203 3.80155 16.0602 3.00415 15.3557C-1.49786 10.8883 -0.833353 4.08311 4.28331 3.82691C5.52427 3.89096 6.39311 4.48821 7.12406 4.53785C8.21052 4.32489 9.25047 3.71483 10.4133 3.79489C11.8105 3.90377 12.8554 4.43538 13.5531 5.3913C10.6791 7.05657 11.3603 10.7073 14 11.7321C13.4717 13.0691 12.7939 14.3902 11.6576 15.3669L11.6593 15.3557ZM7.02439 3.77888C6.88982 1.79336 8.55939 0.160122 10.4798 0C10.7439 2.28974 8.32017 4.00305 7.02439 3.77888Z"
                      fill="black"></path>
                  </svg>
                </span>
                <span>
                  <svg class="android-logo-svg-w" width="14" height="16" viewBox="0 0 14 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0.088012 0.571735C0.0310801 0.726729 0 0.910797 0 1.121V14.8786C0 15.0894 0.0311427 15.2736 0.0881839 15.4286L7.32808 7.9997L0.088012 0.571735ZM0.590122 15.9564C0.85223 16.0466 1.18264 15.9995 1.54068 15.7912L10.0736 10.8165L7.83627 8.52109L0.590122 15.9564ZM10.7221 10.4391L13.3647 8.8987C14.2118 8.40415 14.2118 7.59609 13.3647 7.10217L10.7211 5.561L8.34443 7.99966L10.7221 10.4391ZM10.073 5.18317L1.54068 0.209061C1.18252 0.000250885 0.852017 -0.0466058 0.589868 0.0438429L7.83624 7.47828L10.073 5.18317Z"
                      fill="#fff"></path>
                  </svg>
                  <svg class="android-logo-svg-b" width="14" height="16" viewBox="0 0 14 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0.088012 0.571735C0.0310801 0.726729 0 0.910797 0 1.121V14.8786C0 15.0894 0.0311427 15.2736 0.0881839 15.4286L7.32808 7.9997L0.088012 0.571735ZM0.590122 15.9564C0.85223 16.0466 1.18264 15.9995 1.54068 15.7912L10.0736 10.8165L7.83627 8.52109L0.590122 15.9564ZM10.7221 10.4391L13.3647 8.8987C14.2118 8.40415 14.2118 7.59609 13.3647 7.10217L10.7211 5.561L8.34443 7.99966L10.7221 10.4391ZM10.073 5.18317L1.54068 0.209061C1.18252 0.000250885 0.852017 -0.0466058 0.589868 0.0438429L7.83624 7.47828L10.073 5.18317Z"
                      fill="#000"></path>
                  </svg>
                </span>
              </button>
            </div>
          </div>
        </div>

        <!-- hero right side -->
        <div class="flex justify-center items-center sm:w-[33rem]">
          <img src="./images/hero-img.png" alt="hero image">
        </div>
      </div>
    </section>

    <!-- *************************** -->
    <!-- Recharge & Pay Bills Section -->
    <!-- *************************** -->

    <section class="bg-orange-300 mt-20">
      <div class="max-w-screen-2xl mx-auto py-16 px-4">
        <h2 class="text-4xl font-bold text-white">Recharge & Pay Bills on Elo.</h2>
        <div class="flex flex-wrap justify-start mt-6 text-white">
          <!-- card 01 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer">
            <div><img src="./images/recharge-prepaid-mobile.png" alt="recharge-prepaid-mobile" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>Recharge</span>
              <span class="font-semibold flex items-center gap-1">
                Prepaid Mobile
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 02 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/pay-rent.png" alt="pay-rent" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>Pay</span>
              <span class="font-semibold flex items-center gap-1">
                Rent Payment
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 03 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/pay-electricity-bill.png" alt="pay-electricity-bill" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>Pay</span>
              <span class="font-semibold flex items-center gap-1">
                Electricity Bill
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 04 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/recharge-dth.png" alt="recharge-dth" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>Recharge</span>
              <span class="font-semibold flex items-center gap-1">
                DTH Connection
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 05 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/book-gas-cylinder.png" alt="book-gas-cylinder" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>Book</span>
              <span class="font-semibold flex items-center gap-1">
                Gas Cylinder
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 06 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/pay-credit-card.png" alt="pay-credit-card" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>Pay</span>
              <span class="font-semibold flex items-center gap-1">
                Credit Card Bill
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 07 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-[#ec6121] transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/all-payment-services.png" alt="all-payment-services" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span>All</span>
              <span class="font-semibold flex items-center gap-1">
                Payment Services
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- *************************** -->
    <!-- Book & Buy on Paytm Section -->
    <!-- *************************** -->

    <section class="bg-orange-500">
      <div class="max-w-screen-2xl mx-auto py-16 px-4">
        <h2 class="text-4xl font-bold text-white">Book & Buy on Elo.</h2>
        <div class="flex flex-wrap justify-start mt-6 text-white">
          <!-- card 01 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/movie-tickets.png" alt="movie-tickets" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                Movie Tickets
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 02 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/flight-tickets.png" alt="flight-tickets" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                Flight Tickets
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 03 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/bus-tickets.png" alt="bus-tickets" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                Bus Tickets
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 04 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/tain-tickets.png" alt="train tickets" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                Train Tickets
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 05 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/car-and-bikes.png" alt="car-and-bikes" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                Card & Bikes
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 06 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit hover:bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/international-flights.png" alt="international-flights" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                International Flights
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

          <!-- card 07 -->
          <div
            class="py-4 pl-4 pr-3 mr-4 min-w-fit bg-orange-300 transition-all duration-500 rounded-lg cursor-pointer transition-all">
            <div><img src="./images/invest-in-stocks-2.png" alt="invest-in-stocks" class="w-16"></div>
            <div class="flex flex-col mt-4">
              <span class="font-semibold flex items-center gap-1">
                Invest in Stocks
                <ion-icon name="chevron-forward"></ion-icon>
              </span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- *************************** -->
    <!-- Paytm Payment Instruments Section -->
    <!-- *************************** -->

    <section class="bg-[#F5F7FA]">
      <div class="max-w-screen-xl mx-auto pt-32 px-4">
        <h1 class="text-5xl font-bold">Elo Payment Instruments</h1>

        <!-- Feature 01 -->
        <div
          class="flex flex-col-reverse sm:flex-row bg-white gap-12 p-12 sm:gap-0 sm:flex-row sm:py-20 sm:pl-28 sm:pr-12 mt-12 rounded-xl">
          <!-- left side -->
          <div class="">
            <div>
              <div class="flex items-center gap-4 font-bold">
                <img src="./images/wallet.svg" alt="paytm-wallet" class="w-20">
                <p>Elo <br> Wallet</p>
              </div>
              <h2 class="text-4xl	font-bold mt-12">The Fastest Way to Pay In-store & Online.</h2>
              <p class="font-medium text-lg my-6">
                Load up your Elo Wallet for free and make payments in a jiffy at over 21 million stores, websites and
                apps.
              </p>
              <div class="">
                <button href="#"
                  class="download-paytm-app-btn flex bg-black text-white font-medium items-center gap-2 px-7 py-3 rounded-full border border-black hover:bg-white hover:text-black transition-all">
                  Download Elo App
                  <span>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="apple-logo-svg-w">
                      <path
                        d="M11.6593 15.3557C10.7589 16.1979 9.76546 16.0666 8.81854 15.6695C7.81182 15.2644 6.89149 15.2388 5.82828 15.6695C4.50426 16.2203 3.80155 16.0602 3.00415 15.3557C-1.49786 10.8883 -0.833353 4.08311 4.28331 3.82691C5.52427 3.89096 6.39311 4.48821 7.12406 4.53785C8.21052 4.32489 9.25047 3.71483 10.4133 3.79489C11.8105 3.90377 12.8554 4.43538 13.5531 5.3913C10.6791 7.05657 11.3603 10.7073 14 11.7321C13.4717 13.0691 12.7939 14.3902 11.6576 15.3669L11.6593 15.3557ZM7.02439 3.77888C6.88982 1.79336 8.55939 0.160122 10.4798 0C10.7439 2.28974 8.32017 4.00305 7.02439 3.77888Z"
                        fill="white"></path>
                    </svg>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="apple-logo-svg-b">
                      <path
                        d="M11.6593 15.3557C10.7589 16.1979 9.76546 16.0666 8.81854 15.6695C7.81182 15.2644 6.89149 15.2388 5.82828 15.6695C4.50426 16.2203 3.80155 16.0602 3.00415 15.3557C-1.49786 10.8883 -0.833353 4.08311 4.28331 3.82691C5.52427 3.89096 6.39311 4.48821 7.12406 4.53785C8.21052 4.32489 9.25047 3.71483 10.4133 3.79489C11.8105 3.90377 12.8554 4.43538 13.5531 5.3913C10.6791 7.05657 11.3603 10.7073 14 11.7321C13.4717 13.0691 12.7939 14.3902 11.6576 15.3669L11.6593 15.3557ZM7.02439 3.77888C6.88982 1.79336 8.55939 0.160122 10.4798 0C10.7439 2.28974 8.32017 4.00305 7.02439 3.77888Z"
                        fill="black"></path>
                    </svg>
                  </span>
                  <span>
                    <svg class="android-logo-svg-w" width="14" height="16" viewBox="0 0 14 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.088012 0.571735C0.0310801 0.726729 0 0.910797 0 1.121V14.8786C0 15.0894 0.0311427 15.2736 0.0881839 15.4286L7.32808 7.9997L0.088012 0.571735ZM0.590122 15.9564C0.85223 16.0466 1.18264 15.9995 1.54068 15.7912L10.0736 10.8165L7.83627 8.52109L0.590122 15.9564ZM10.7221 10.4391L13.3647 8.8987C14.2118 8.40415 14.2118 7.59609 13.3647 7.10217L10.7211 5.561L8.34443 7.99966L10.7221 10.4391ZM10.073 5.18317L1.54068 0.209061C1.18252 0.000250885 0.852017 -0.0466058 0.589868 0.0438429L7.83624 7.47828L10.073 5.18317Z"
                        fill="#fff"></path>
                    </svg>
                    <svg class="android-logo-svg-b" width="14" height="16" viewBox="0 0 14 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.088012 0.571735C0.0310801 0.726729 0 0.910797 0 1.121V14.8786C0 15.0894 0.0311427 15.2736 0.0881839 15.4286L7.32808 7.9997L0.088012 0.571735ZM0.590122 15.9564C0.85223 16.0466 1.18264 15.9995 1.54068 15.7912L10.0736 10.8165L7.83627 8.52109L0.590122 15.9564ZM10.7221 10.4391L13.3647 8.8987C14.2118 8.40415 14.2118 7.59609 13.3647 7.10217L10.7211 5.561L8.34443 7.99966L10.7221 10.4391ZM10.073 5.18317L1.54068 0.209061C1.18252 0.000250885 0.852017 -0.0466058 0.589868 0.0438429L7.83624 7.47828L10.073 5.18317Z"
                        fill="#000"></path>
                    </svg>
                  </span>
                </button>
              </div>
            </div>

          </div>
          <!-- right side -->
          <div class="flex justify-center items-center">
            <img src="./images/feature-img-paytm-wallet.png" alt="feature-img-paytm-wallet">
          </div>
        </div>

        <!-- Feature 02 -->
        <div class="flex flex-col-reverse sm:flex-row gap-12 p-12 bg-white sm:py-20 sm:pl-28 sm:pr-12 mt-12 rounded-xl">
          <!-- left side -->
          <div>
            <div>
              <div class="flex items-center gap-4 font-bold">
                <img src="./images/upi-money-transfer.png" alt="upi-money-transfer" class="w-24">
                <p>UPI Money <br> Transfer</p>
              </div>
              <h2 class="text-4xl	font-bold mt-12">Pay anyone directly from your bank account.</h2>
              <p class="font-medium text-lg my-6">
                Pay anyone, everywhere. Make contactless & secure payments in-stores or online using Paytm Wallet or
                Directly from your Bank Account. Plus, send & receive money from anyone.
              </p>
              <div class="">
                <button href="#"
                  class="download-paytm-app-btn flex bg-black text-white font-medium items-center gap-2 px-7 py-3 rounded-full border border-black hover:bg-white hover:text-black transition-all">
                  Download Elo App
                  <span>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="apple-logo-svg-w">
                      <path
                        d="M11.6593 15.3557C10.7589 16.1979 9.76546 16.0666 8.81854 15.6695C7.81182 15.2644 6.89149 15.2388 5.82828 15.6695C4.50426 16.2203 3.80155 16.0602 3.00415 15.3557C-1.49786 10.8883 -0.833353 4.08311 4.28331 3.82691C5.52427 3.89096 6.39311 4.48821 7.12406 4.53785C8.21052 4.32489 9.25047 3.71483 10.4133 3.79489C11.8105 3.90377 12.8554 4.43538 13.5531 5.3913C10.6791 7.05657 11.3603 10.7073 14 11.7321C13.4717 13.0691 12.7939 14.3902 11.6576 15.3669L11.6593 15.3557ZM7.02439 3.77888C6.88982 1.79336 8.55939 0.160122 10.4798 0C10.7439 2.28974 8.32017 4.00305 7.02439 3.77888Z"
                        fill="white"></path>
                    </svg>
                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                      class="apple-logo-svg-b">
                      <path
                        d="M11.6593 15.3557C10.7589 16.1979 9.76546 16.0666 8.81854 15.6695C7.81182 15.2644 6.89149 15.2388 5.82828 15.6695C4.50426 16.2203 3.80155 16.0602 3.00415 15.3557C-1.49786 10.8883 -0.833353 4.08311 4.28331 3.82691C5.52427 3.89096 6.39311 4.48821 7.12406 4.53785C8.21052 4.32489 9.25047 3.71483 10.4133 3.79489C11.8105 3.90377 12.8554 4.43538 13.5531 5.3913C10.6791 7.05657 11.3603 10.7073 14 11.7321C13.4717 13.0691 12.7939 14.3902 11.6576 15.3669L11.6593 15.3557ZM7.02439 3.77888C6.88982 1.79336 8.55939 0.160122 10.4798 0C10.7439 2.28974 8.32017 4.00305 7.02439 3.77888Z"
                        fill="black"></path>
                    </svg>
                  </span>
                  <span>
                    <svg class="android-logo-svg-w" width="14" height="16" viewBox="0 0 14 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.088012 0.571735C0.0310801 0.726729 0 0.910797 0 1.121V14.8786C0 15.0894 0.0311427 15.2736 0.0881839 15.4286L7.32808 7.9997L0.088012 0.571735ZM0.590122 15.9564C0.85223 16.0466 1.18264 15.9995 1.54068 15.7912L10.0736 10.8165L7.83627 8.52109L0.590122 15.9564ZM10.7221 10.4391L13.3647 8.8987C14.2118 8.40415 14.2118 7.59609 13.3647 7.10217L10.7211 5.561L8.34443 7.99966L10.7221 10.4391ZM10.073 5.18317L1.54068 0.209061C1.18252 0.000250885 0.852017 -0.0466058 0.589868 0.0438429L7.83624 7.47828L10.073 5.18317Z"
                        fill="#fff"></path>
                    </svg>
                    <svg class="android-logo-svg-b" width="14" height="16" viewBox="0 0 14 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.088012 0.571735C0.0310801 0.726729 0 0.910797 0 1.121V14.8786C0 15.0894 0.0311427 15.2736 0.0881839 15.4286L7.32808 7.9997L0.088012 0.571735ZM0.590122 15.9564C0.85223 16.0466 1.18264 15.9995 1.54068 15.7912L10.0736 10.8165L7.83627 8.52109L0.590122 15.9564ZM10.7221 10.4391L13.3647 8.8987C14.2118 8.40415 14.2118 7.59609 13.3647 7.10217L10.7211 5.561L8.34443 7.99966L10.7221 10.4391ZM10.073 5.18317L1.54068 0.209061C1.18252 0.000250885 0.852017 -0.0466058 0.589868 0.0438429L7.83624 7.47828L10.073 5.18317Z"
                        fill="#000"></path>
                    </svg>
                  </span>
                </button>
              </div>
            </div>

          </div>
          <!-- right side -->
          <div class="flex justify-center items-center">
            <img src="./images/feature-img-upi-money-transfer.png" alt="feature-img-upi-money-transfer">
          </div>
        </div>

        <!-- Feature 03 -->
        <div class="flex flex-col-reverse sm:flex-row gap-12 p-12 bg-white sm:py-20 sm:pl-28 sm:pr-12 mt-12 rounded-xl">
          <!-- left side -->
          <div>
            <div>
              <div class="flex items-center gap-4 font-bold">
                <img src="./images/paytm-postpaid.png" alt="paytm-postpaid" class="w-24">
              </div>
              <h2 class="text-4xl	font-bold mt-12">Want it? <br> No more waiting for it.</h2>
              <p class="font-medium text-lg my-6">
                With Elo Postpaid, your wishlist doesn't have to be on the wait list. Shop for the things you want
                today and pay for them next month.
              </p>
              <div>
                <button href="#"
                  class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-[#00baf2]">
                  Learn More
                  <span class="arrow"></span>
                </button>
              </div>
            </div>

          </div>
          <!-- right side -->
          <div class="flex justify-center items-center">
            <img src="./images//feature-section-paytm-postpaid.png" alt="feature-section-paytm-postpaid">
          </div>
        </div>


        <!-- credit cards -->
        <div class="flex justify-center flex-wrap gap-8 mt-12 pb-12">
          <!-- card 01 -->
          <div class="pt-[4.375rem] px-12 bg-white rounded-xl max-w-[35rem]">
            <div class=""><img src="./images/hdfc-bank.png" alt="hdfc-bank"></div>
            <h1 class="text-[2.5rem] font-bold leading-tight mt-12">Unlimited Cashback <span>Every Time</span> </h1>
            <p class="text-xl	font-medium my-5">
              Elo HDFC Bank Select Credit Card. A card with assured Cashback and incredible offers.
            </p>
            <div>
              <img src="./images/hdfc-bank-credit-card.png" alt="hdfc-bank-credit-card">
            </div>
          </div>

          <!-- card 02 -->
          <div class="pt-[4.375rem] px-12 bg-white rounded-xl max-w-[35rem]">
            <div><img src="./images/sbi-card.png" alt="sbi-card"></div>
            <h1 class="text-[2.5rem] font-bold leading-tight mt-12">India’s Most <span>Sincere Credit Card</span> </h1>
            <p class="text-xl	font-medium my-5">
              Elo SBI Card SELECT - With Intelligent Features & Great Rewards that Never Expire
            </p>
            <div>
              <img src="./images/sbi-credit-card.png" alt="sbi-credit-card">
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- *************************** -->
    <!-- Financial Services by Paytm Section -->
    <!-- *************************** -->

    <section>
      <div class="max-w-screen-xl mx-auto pt-32 px-4">
        <h1 class="text-5xl font-bold">Financial Services by Elo</h1>

        <!-- Service 01 : paytm bank -->

        <div class="flex flex-col-reverse items-center pb-10 sm:pb-0 sm:flex-row sm:justify-between mt-12">

          <!-- left section -->
          <div class="sm:w-[30rem]">
            <div>
              <img src="./images/paytm-bank.png" alt="paytm-bank" class="w-[13.25rem]">
            </div>
            <h2 class="text-[2.5rem] font-bold leading-tight my-12">India's most sincere bank.</h2>
            <p class="text-xl font-medium mb-12">
              Elo Payments Bank offers secure, transparent and risk-free banking at your fingertips. With instant
              account opening, virtual debit card and zero balance requirements, experience the future of banking today.
            </p>
            <div>
              <button href="#"
                class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-[#00baf2]">
                Learn More
                <span class="arrow"></span>
              </button>
            </div>

          </div>

          <!-- right section -->
          <div class="sm:w-[35rem] flex justify-center items-center">
            <img src="./images/service-img-bank.png" alt="service-img-bank" class="w-3/4 sm:w-10/12">
          </div>

        </div>
      </div>

      <!-- Service 02 : Build Long-term Wealth & Achieve your Goals. -->
      <div class="bg-image-service-02 bg-[#F5F7FA] py-20">
        <div class="flex flex-col items-center sm:flex-row sm:justify-between mt-12 max-w-screen-xl mx-auto px-4">

          <!-- left section -->
          <div class="sm:w-[35rem] flex justify-center items-center">
            <img src="./images/service-img-achieve-goals.png" alt="service-img-achieve-goals" class="w-10/12">
          </div>


          <!-- right section -->
          <div class="sm:w-[30rem] pt-12 sm:pt-0">
            <div>
              <img src="./images/paytm-money.png" alt="paytm-bank" class="w-[13.25rem]">
            </div>
            <h2 class="text-[2.5rem] font-bold leading-tight my-12">Build Long-term Wealth & Achieve your
              Goals.</h2>
            <p class="text-xl font-medium mb-12">
              Investing on Elo Money is transparent, low-cost and commission-free. Buy stocks & mutual funds that can
              help you create wealth & realize your dreams.
            </p>
            <div>
              <button href="#"
                class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-[#00baf2]">
                Learn More
                <span class="arrow"></span>
              </button>
            </div>

          </div>


        </div>
      </div>

      <!-- Service 03 : Insurance made easy. -->
      <div class="py-12">
        <div class="flex flex-col-reverse items-center pb-10 sm:pb-0 sm:flex-row sm:justify-between mt-12 pt-12 px-4">

          <!-- left section -->
          <div class="sm:w-[30rem] pt-12 sm:pt-0">
            <div>
              <img src="./images/paytm-bank.png" alt="paytm-bank" class="w-[13.25rem]">
            </div>
            <h2 class="text-[2.5rem] font-bold leading-tight my-12">Insurance made easy.</h2>
            <p class="text-xl mb-12">
              Buying insurance does not have to be tedious, time-consuming & confusing. Paytm Insurance removes the
              worry of getting insured by making it simple, convenient & easy-to-understand.
            </p>
            <div>
              <button href="#"
                class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-[#00baf2]">
                Learn More
                <span class="arrow"></span>
              </button>
            </div>

          </div>


          <!-- right section -->
          <div class="sm:w-[30rem] flex justify-center items-center">
            <img src="./images/service-img-insurance.png" alt="service-img-insurance" class="sm:w-10/12">
          </div>
        </div>
      </div>


      <!-- Service 04 : Get a Personal Loan in 2 Minutes. -->
      <div class="bg-[#F5F7FA] py-12">
        <div class="flex flex-col items-center sm:flex-row sm:justify-between mt-12 max-w-screen-xl mx-auto px-4">
          <!-- left section -->
          <div class="sm:w-[30rem] flex justify-center items-center">
            <img src="./images/service-img-personal-loan.png" alt="service-img-personal-loan" class="sm:w-10/12">
          </div>


          <!-- right section -->
          <div class="sm:w-[30rem] pt-12 sm:pt-0">
            <div>
              <img src="./images/paytm-bank.png" alt="paytm-bank" class="w-[13.25rem]">
            </div>
            <h2 class="text-[2.5rem] font-bold leading-tight my-12">Get a Personal Loan in 2 Minutes.</h2>
            <p class="text-xl mb-12">
              Elo offers India's quickest multi-purpose, hassle-free loan. It is 100% digital, transparent and
              paperless.
            </p>
            <div>
              <button href="#"
                class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-[#00baf2]">
                Learn More
                <span class="arrow"></span>
              </button>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- *************************** -->
    <!-- Business Services by Paytm Section -->
    <!-- *************************** -->

    <section>
      <div class="max-w-screen-xl mx-auto px-4">
        <h1 class="text-5xl font-bold pt-32">Business Services by Elo</h1>

        <!-- Service 01 : Accept payments online with ease -->
        <div
          class="mt-8 sm:pl-20 sm:pt-16 sm:pb-20 flex flex-col-reverse sm:flex-row items-center sm:items-stretch py-12 sm:justify-between bg-[#e7c8ab] rounded-lg">
          <!-- left side -->
          <div class="px-12 sm:w-[30rem] flex flex-col justify-center">
            <h2 class="text-4xl font-bold mt-12">Accept payments online with ease</h2>
            <p class="py-7">
              Grow your business with the payment gateway that powers India’s largest brands and even the Paytm App
            </p>
            <div>
              <button href="#"
                class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-orange-300">
                Learn More
                <span class="arrow"></span>
              </button>
            </div>
          </div>
          <!-- right side -->
          <div class="sm:w-[27rem] flex justify-center">
            <img src="./images/service-img-accept-payments.png" alt="service-img-accept-payments"
              class="w-8/12 sm:w-full">
          </div>
        </div>

        <!-- Service 02 : In-shop payments powered by Paytm. -->
        <div
          class="mt-8 sm:pl-20 sm:pt-16 sm:pb-20 flex flex-col-reverse sm:flex-row items-center sm:items-stretch py-12 sm:justify-between bg-[#e7c8ab] rounded-lg">
          <!-- left side -->
          <div class="px-12 sm:w-[30rem] flex flex-col justify-center">
            <h2 class="text-4xl font-bold mt-12">In-shop payments powered by Elo.</h2>
            <p class="py-7">
              Millions of small & big businesses use elo to accept payments anywhere any time with a wide range of
              solutions for all kind of merchants
            </p>
            <div>
              <button href="#"
                class="learn-more-btn relative flex bg-orange-500 text-white font-semibold items-center justify-center gap-2 pr-12 pl-8 py-3 rounded-full hover:bg-orange-300">
                Learn More
                <span class="arrow"></span>
              </button>
            </div>
          </div>
          <!-- right side -->
          <div class="sm:w-[27rem] flex justify-center">
            <img src="./images/service-img-in-shop-payments.png" alt="service-img-in-shop-payments"
              class="w-8/12 sm:w-full">
          </div>
        </div>

      </div>
    </section>

    <!-- *************************** -->
    <!-- Business Tools Section -->
    <!-- *************************** -->

    <section>
      <div class="max-w-screen-xl mx-auto pb-20 px-4">
        <h1 class="text-[2.5rem] sm:w-[30rem] font-bold pt-32 mb-20 leading-normal">Business Tools to help your business
          grow</h1>

        <div class="flex justify-center sm:justify-between flex-wrap gap-2">

          <!-- card 01 -->
          <div class="w-[15rem] py-4">
            <div class="w-[15rem]">
              <img src="./images/pos-billing-software.png" alt="pos-billing-software" class="w-[22rem]">
            </div>
            <h2 class="text-[1.625rem] font-bold pt-10 pb-5 leading-normal">POS Billing <br> Software</h2>
            <p class="text-xl	font-medium pb-5">
              Say Hello to Smart Retail <br> Business Management
            </p>
            <a href="#" class="font-bold">Learn More</a>
          </div>

          <!-- card 02 -->
          <div class="w-[15rem]">
            <div class="w-[15rem]">
              <img src="./images/paytm-for-business-app.png" alt="paytm-for-business-app">
            </div>
            <h2 class="text-[1.625rem] font-bold pt-10 pb-5 leading-normal">Elo for <br> Business App</h2>
            <p class="text-xl	font-medium pb-5">
              Everything you need to manage your business on your phone
            </p>
            <a href="#" class="font-bold">Learn More</a>
          </div>

          <!-- card 03 -->
          <div class="w-[15rem]">
            <div class="w-[15rem]">
              <img src="./images/advertise.png" alt="advertise">
            </div>
            <h2 class="text-[1.625rem] font-bold pt-10 pb-5 leading-normal">Advertise on <br> Elo</h2>
            <p class="text-xl	font-medium pb-5">
              Grow your business by advertising on India’s largest mobile business
            </p>
            <a href="#" class="font-bold">Learn More</a>
          </div>

          <!-- card 04 -->
          <div class="w-[15rem]">
            <div class="w-[15rem]">
              <img src="./images/business-khata.png" alt="business-khata">
            </div>
            <h2 class="text-[1.625rem] font-bold pt-10 pb-5 leading-normal">Business <br> Khata</h2>
            <p class="text-xl	font-medium pb-5">
              Managing Khata made easy
            </p>
            <a href="#" class="font-bold">Learn More</a>
          </div>

        </div>
      </div>
    </section>

    <!-- *************************** -->
    <!-- Paytm money and Paytm Travel Section -->
    <!-- *************************** -->

    <section class="bg-[#f3e2d8] py-16">

      <!-- Paytm Money Section -->
      <div class="flex justify-between flex-wrap max-w-screen-xl mx-auto sm:py-16 sm:pl-16  bg-white px-4 py-12">
        <div class="w-[12.5rem] flex flex-col justify-between">
          <div class="w-[10rem]">
            <img src="./images/paytm-money-2.png" alt="paytm-money-2">
          </div>
          <p class="pt-10 font-medium">
            Get started on wealth creation journey with Zero brokerage fee & no hidden charges.
          </p>
          <a href="#" class="pt-5 font-bold text-[#e46c35] hover:text-[#f19b4b] transition-all">Learn More</a>
        </div>

        <div class="flex justify-center flex-wrap gap-4 text-white font-bold pt-8 sm:pt:0">

          <!-- Card 01 -->
          <div class="w-[9.68rem] bg-orange-400 p-1 flex flex-col items-center rounded  cursor-pointer">
            <div class="w-[9.0625rem] overflow-hidden rounded">
              <img src="./images/invest-in-stocks.png" alt="invest-in-stocks"
                class="transition-all duration-500 hover:scale-110">
            </div>
            <p class="py-4">Invest in Stocks</p>
          </div>

          <!-- Card 02 -->
          <div class="w-[9.68rem] bg-orange-400 p-1 flex flex-col items-center rounded cursor-pointer">
            <div class="w-[9.0625rem] overflow-hidden rounded">
              <img src="./images/apply-for-ipo.png" alt="apply-for-ipo"
                class="transition-all duration-500 hover:scale-110">
            </div>
            <p class=" py-4">Apply for IPO</p>
          </div>

          <!-- Card 03 -->
          <div class="w-[9.68rem] bg-orange-400 p-1 flex flex-col items-center rounded cursor-pointer">
            <div class="w-[9.0625rem] overflow-hidden rounded">
              <img src="./images/invest-in-etfs.png" alt="invest-in-etfs"
                class="hover:scale-110 transition-all duration-500">
            </div>
            <p class=" py-4">Invest in ETFs</p>
          </div>

          <!-- Card 04 -->
          <div class="w-[9.68rem] bg-orange-400 p-1 flex flex-col items-center rounded cursor-pointer">
            <div class="w-[9.0625rem] overflow-hidden rounded">
              <img src="./images/buy-gold.png" alt="buy-gold" class="hover:scale-110 transition-all duration-500">
            </div>
            <p class=" py-4">Buy Gold</p>
          </div>

          <!-- Card 05 -->
          <div class="w-[9.68rem] bg-orange-400 p-1 flex flex-col items-center rounded cursor-pointer">
            <div class="w-[9.0625rem] overflow-hidden rounded">
              <img src="./images/invest-in-mutual-funds.png" alt="invest-in-mutual-funds"
                class="hover:scale-110 transition-all duration-500">
            </div>
            <p class=" text-center py-4">Invest in Mutual Funds</p>
          </div>

        </div>
      </div>

      <!-- Paytm Travel Section -->
      <div class="flex justify-between flex-wrap max-w-screen-xl mx-auto sm:py-16 sm:pl-16  bg-white px-4 pb-12">
        <div class="w-[12.5rem] flex flex-col justify-between">
          <div class="w-[10rem]">
            <img src="./images/paytm-travel.png" alt="paytm-travel">
          </div>
          <p class="pt-10 font-medium">
            Best travel solutions with quick ticket bookings, great offers and easy refunds.
          </p>
          <a href="#" class="pt-5 font-bold text-[#e46c35] hover:text-[#f19b4b] transition-all">Learn More</a>
        </div>

        <div class="flex justify-center flex-wrap gap-4 text-white font-bold pt-8 sm: pt:0">

          <!-- Card 01 -->
          <div
            class="w-[9.68rem] bg-orange-400 p-2 flex flex-col justify-center rounded hover:bg-orange-200 transition-all duration-500 cursor-pointer">
            <div class="w-[4.5rem]">
              <img src="./images/flight-tickets.png" alt="flight-tickets">
            </div>
            <p class="py-4">Flat 14% Cashback</p>
            <p class="text-xs">With Code WELCOMEFLIGHT</p>
          </div>

          <!-- Card 02 -->
          <div
            class="w-[9.68rem] bg-orange-400 p-2 flex flex-col justify-center rounded hover:bg-orange-200 transition-all duration-500 cursor-pointer">
            <div class="w-[4.5rem]">
              <img src="./images/refund-100-cancellation.png" alt="refund-100-cancellation">
            </div>
            <p class="py-4">100% Refund </p>
            <p class="text-xs">With Elo's Cancellation Protect</p>
          </div>

          <!-- Card 03 -->
          <div
            class="w-[9.68rem] bg-orange-400 p-2 flex flex-col justify-center rounded hover:bg-orange-200 transition-all duration-500 cursor-pointer">
            <div class="w-[4.5rem]">
              <img src="./images/flat-cashback-bus.png" alt="flat-cashback-bus">
            </div>
            <p class="py-4">Sanitized Bus Options With TravelSafe+</p>
          </div>

          <!-- Card 04 -->
          <div
            class="w-[9.68rem] bg-orange-400 p-2 flex flex-col justify-center rounded hover:bg-orange-200 transition-all duration-500 cursor-pointer">
            <div class="w-[4.5rem]">
              <img src="./images/sanitized-bus.png" alt="sanitized-bus">
            </div>
            <p class="py-4">Flat 10% Cashback</p>
            <p class="text-xs">With Code HAPPYBUS</p>
          </div>

          <!-- Card 05 -->
          <div
            class="w-[9.68rem] bg-orange-400 p-2 flex flex-col justify-center rounded hover:bg-orange-200 transition-all duration-500 cursor-pointer">
            <div class="w-[4.5rem]">
              <img src="./images/hussle-free-tain-ticket-bookings.png" alt="hussle-free-tain-ticket-bookings">
            </div>
            <p class="py-4">Hassle Free Train Ticket Bookings</p>
            <p class="text-xs">Invest in Mutual Funds</p>
          </div>

        </div>
      </div>

      <div></div>
    </section>

  </main>

  <!-- *************************** -->
  <!-- Footer Section -->
  <!-- *************************** -->

  <footer class="bg-[#F5F7FA] pt-24">

    <div class="max-w-screen-xl mx-auto pb-10">

      <!-- social icons and App section -->
      <div class="flex flex-col gap-12 sm:flex-row sm:gap-0 justify-between pb-16 px-4">
        <div class="flex gap-2 items-center">
          <p class="text-xl font-semibold mr-[1rem]">
            Download Elo App <br> to Pay from anywhere
          </p>

          <div class="cursor-pointer"><img src="./images/apple-store.svg" alt="apple-store"></div>
          <div class="cursor-pointer"><img src="./images/google-play.svg" alt="google-play"></div>

        </div>
        <div class="flex gap-5 justify-center items-center justify-self-end cursor-pointer">
          <img src="./images/twitter-icon.svg" alt="twitter-icon" class="w-[1.56rem] h-[1.56rem]">
          <img src="./images/instagram-icon.svg" alt="instagram-icon" class="w-[1.56rem] h-[1.56rem]">
          <img src="./images/facebook-icon.svg" alt="facebook-icon" class="w-[1.56rem] h-[1.56rem]">
        </div>
      </div>
      <hr class="bg-[#505050]">

    </div>
  </footer>

  <!-- bottom Lines -->
  <div class="bottom-lines"></div>

</body>

</html>