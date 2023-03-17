<?php
  include('connect.php');
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">
  <link href="../dist/addited.css" rel="stylesheet">
</head>
<body class="">
    <!--Navigation Bar-->
    <nav class="flex flex-row justify-between p-4 shadow-xl h-24 bg-green-800 ml-0.5  rounded">
        <div class="">
            <img src="../src/img/logo.png" alt="logo"class="w-20 h-20 -mt-2">
        </div>
        <div class="flex h-10 w-44 shadow-2xl rounded-xl p-2 mt-4 border border-white bg-green-800">
          <div class="flex justify-center items-center h-full my-auto">
            <svg fill="none" class="w-6 h-6 text-white -mt-2 mr-2" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 3.75v4.5m0-4.5h-4.5m4.5 0l-6 6m3 12c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"></path>
            </svg>
            <span class=" block h-10 mt-3 mr-4 text-white font-bold justify-center items-center"><a href="">Contact Us</a> </span>
              
          </div>
        </div>

    </nav>
    <!--slideShow-->      
        <div class="rounded-xl flex flex-row">
          <div class="w-3/4 relative h-full ml-0.5">
            <div class="mySlides h-96 w-full bg-cover bg-cyan-500 bg-[url('../src/img/online-banking.jpg')] rounded-b-xl shadow-xl">
              <div class="numbertext">1 / 6</div>
              <!-- <img src="../src/img/online-banking.jpg"  class="h-30 w-30"> - -->
            </div>
          
            <div class="mySlides h-96 w-full bg-cover bg-cyan-500 object-cover bg-[url('../src/img/apps1.jpg')] rounded-b-xl shadow-xl">
              <div class="numbertext">2 / 6</div>
              <img src="../src/img/apps1.jpg"  class="h-30 w-30">
            </div>
          
            <div class="mySlides h-96 w-full bg-cover bg-cyan-500 object-cover bg-[url('../src/img/accountsmanage.jpg')] rounded-b-xl shadow-xl">
              <div class="numbertext">3 / 6</div>
              <!-- <img src="../src/img/accountsmanage.jpg"  class="h-30 w-30"> -->
            </div>
              
            <div class="mySlides h-96 w-full bg-cover object-cover  bg-cyan-500 bg-[url('../src/img/profesional.png')] rounded-b-xl shadow-xl">
              <div class="numbertext">4 / 6</div> 
              <!-- <img src="../src/img/profesional.png" class="h-30 w-30"> -->
            </div>
          
            <div class="mySlides h-96 w-full bg-cover bg-cyan-500 object-cover bg-[url('../src/img/follow.jpg')] rounded-b-xl shadow-xl">
              <div class="numbertext">5 / 6</div>
              <!-- <img src="../src/img/follow.jpg"  class="h-30 w-30"> -->
            </div>
              
            <div class="mySlides h-96  bg-cover bg-cyan-500 object-cover bg-[url('../src/img/faisal.jpg')] rounded-b-xl shadow-xl">
              <div class="numbertext">6 / 6</div>
              <!-- <img src="../src/img/faisal.jpg"  class="h-30 w-30"> -->
            </div>
              
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
          </div>
          <!--login-->
        
          <div class="w-1/4  h-80 max-h-[20rem] bg-slate-100">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" class="flex flex-col gap-1 px-5">
              <div class="flex justify-center">
                <img src="../src/img/best.jpg" alt="Avatar" class="w-24 rounded-full mt-2">
              </div>
              <div class="">
                <label for="uname"><b>Username</b></label>
                <input type="text" class="w-full py-[12px] px-[20px] border border-green-900 rounded" placeholder="Enter Username" name="uname" required>
              </div>
            
                <div class="">
                  <label for="psw"><b>Password</b></label>
                <input class="w-full py-[12px] px-[20px] border border-green-900 rounded" type="password" placeholder="Enter Password" name="psw" required>
                </div>

                <!-- <div class="w-full"> -->
                    <button type="submit" name="login" class="w-full py-2 px-5 bg-green-700 text-white rounded">Login</button>
                <!-- </div> -->

                
                <a class="" href="contactDetails.php">
                    <button type="submit" name="register" class="w-full py-2 px-5 bg-white text-gray-800 rounded">Register</button>
                </a>




                <label class="bg-slate-100 mt-0">
                  <input type="checkbox" class="bg-slate-100" checked="checked" name="remember"> Remember me
                </label>
                <div class="flex gap-2 w-full ml-0 bg-slate-100 justify-between">
                  <button type="button" class="cancelbtn rounded">Cancel</button>
                  <span class="psw text-blue-500 hover:underline hover:text-blue-900">Forgot <a href="#">password?</a></span>
                </div>
            </form>
          </div> 
          </div>
         <!--Js code to slides-->
        <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("demo");
          let captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
    <div class="flex flex-row w-fullmt-2 justify-between px-6 mt-6 bg-slate-100 p-4m x-1 mx-1 p-2 rounded-xl shadow-xl">
      <div class="flex gap-5 w-4/5">
        <div class="bg-[#75ad92] px-5 py-3 w-5 rounded-xl max-w-[20px] flex justify-center items-center">
          <!-- <img src="../src/img/exclamation1.jpg" class="w-auto" alt=".."> -->
          <div class="p-3 bg-white rounded-full h-4  w-4 text-lg font-black text-[#75ad92] flex justify-center items-center">!</div>
        </div>
        <div class="flex flex-col w-4/5 ">
          <h3 class="font-bold">Welcome to our new internet banking website</h3>
          <p>If this is your first time using our new internet banking website, please click “read more” to find out how to get started.</p>
        </div>
      </div>
      <div class="flex justify-center items-center ">
        <a href="." class="text-green-700 ">Read more</a>
        <svg fill="none" stroke="currentColor" class="h-7 w-7 text-green-700 " stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
    </div>  
    <!--Flex boxes that contain links-->
    <div class="flex flex-row gap-1 mt-2 mx-1" >
      <div class="flex flex-col bg-green-800 p-2  h-48 gap-1 mt-1 text-white w-1/3 shadow-xl rounded-tl-2xl rounded-bl-2xl">
        <h3 class="font-bold">Frequently asked questions</h3>
        <p>View a list of frequently asked questions about our new internet banking website.</p>
        <br>
        <div class="flex flex-row space-x-2">
          <a href="#" class="font-bold ">Read more</a> 
        <svg fill="none" stroke="currentColor" class="h-7 w-7 inline-block" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        </div>
      </div>
      <div class="flex flex-col bg-[#75ad92] h-48 w-1/3 gap-1 mt-1 p-2 text-white shadow-xl  ">
        <h3 class="font-bold">Interactive demos</h3>
        <p>Quickly learn how to perform common tasks on the new internet banking website by using our interactive demos.</p>
        <br>
        <div class="flex flex-row space-x-2">
          <a href="#" class="font-bold ">Read more</a> 
        <svg fill="none" stroke="currentColor" class="h-7 w-7 inline-block" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
      </div>
      </div>
      <div class="flex flexr-row bg-slate-100  h-48 w-1/3 gap-1 mt-1 p-2 rounded-tr-2xl rounded-br-2xl shadow-xl">
        <div class="flex flex-col w-1/2">
          <h3 class="font-bold">Apply</h3>
          <div class="flex flex-col space-x-2">
            <a href="#" class="font-bold text-blue-700 hover:underline  flex flex-row">Personal Internet banking</a> 
            <svg fill="none" stroke="currentColor" class="h-7 w-7 text-green-800" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <br>
          <div class="flex flex-col ">
            <h3 class="font-bold">User guide</h3>
          <div class="flex flex-col space-x-2">
            <a href="#" class="font-bold text-blue-700 hover:underline  flex flex-row">Standard reference guide</a> 
            <svg fill="none" stroke="currentColor" class="h-7 w-7 text-green-800" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          </div>
        </div>
        <div class="w-1/2">
          <div class="flex flex-col ">
            <a href="#" class="font-bold text-blue-700 hover:underline inline-block mt-6 ">Business Internet banking</a> 
            <svg fill="none" stroke="currentColor" class="text-green-800 hover:underline h-7 w-7" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <br>
          <br>
          <div class="flex flex-col ">
              <a href="#" class="font-bold text-blue-700 hover:underline flex flex-row ">Bulk payments reference guide</a> 
              <svg fill="none" stroke="currentColor" class="text-green-800 hover:underline h-7 w-7" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
          </div>
      </div>

      </div>
  </div>
<!--testimonials--> 
<div class="flex flex-row h-52  w-full mt-2 mx-1 gap-1 ">
  <div class="fle flex-col w-1/3 h-48 mt-1 px-3 bg-slate-200 gap-2 p-2 rounded-tl-2xl rounded-bl-2xl shadow-xl">
    <h3 class="font-bold mb-3 mt-2">Contact Us</h3>
    <div class="flex ">
      <div class="flex flex-col  bg-gray-700 h-8 w-12 justify-center items-center">
        <div class="flex flex-row h-6 w-10 bg-slate-500 justify-center items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="currentColor" >
          <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
          </svg>
        </div>    
      </div> 
      <span class="text-blue-700 ml-2 width-full pl-2 border-t-2 border-white w-full">(0242) 254 800 (Local)</span>
      <hr/>
    </div>
    <div class="flex mt-3">
      <div class="flex flex-col bg-gray-700 h-8 w-12 justify-center items-center">
        <div class="flex flex-row h-6 w-10 bg-slate-500 justify-center items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-black" viewBox="0 0 24 24" fill="currentColor" >
          <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
          </svg>
        </div>    
      </div> 
      <span class="text-blue-700 ml-2 width-full pl-2 border-t-2 border-white w-full">(0242) 254 800 (Foreign)</span>
    </div>
</div>  
  <div class="flex flex-col p-4 w-1/3 mt-1 px-3 h-48 bg-slate-200 shadow-xl">
    <div class="width-full pl-2 border-b-2 border-white hover:text-blue-500 hover:underline text-black"> Important links</div>
    <br>
    <div class="width-full pl-2 border-b-2 border-white hover:text-blue-500 hover:underline">Nedbank home page</div> 
    <br>
    <div class="width-full pl-2 border-b-2 border-white hover:text-blue-500 hover:underline">Terms and conditions</div> 
    <br>
    <div class="mx-3 hover:text-blue-500 hover:underline"> Legal</div>  
  </div>
  <div class="flex flex-row w-1/3 mt-1 px-0.5 h-48 bg-slate-200 shadow-xl p-2 rounded-tr-2xl rounded-br-2xl ">
    <prev class="p-2">
      <h3 class="font-bold">Note</h3>
      You acknowledge that, by accessing this site,
      you are bound by the terms and conditions 
      contained herein and that you agree to precautions 
      to prevent fraudulent activities on your account
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
       Temporibus, iste quibusdam nesciunt, obcaecati at autem 
       repellendus aut ab dignissimos placeat quod eos dicta omnis.  
    </prev>
  </div>
</div>
  

</body>
</html>

