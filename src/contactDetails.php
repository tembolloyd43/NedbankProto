<?php
  include('connect.php');
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/NMBProject/dist/output.css" rel="stylesheet">
</head>
<body class=" bg-gradient-to-r from-cyan-100 to-blue-100">
  <div class="flex pt-16 items-center  justify-center ">
    <div class="flex  items-center justify-center h-full mb-10 bg-gradient-to-r from-cyan-500 to-blue-500 shadow-xl w-1/3 rounded-xl">
        <form class=" w-full form-horizontal " action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  id="contact_form">
         <!-- Form Name -->
        <legend class="font-bold w-full p-2 mt-4 flex justify-center items-center">Enter Your Details</legend>
        <hr class="max-w-full">

        <!-- Text input-->
        <div class="ml-4 flex flex-col p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">Username</label> 
            <div class="form-input">
                <span class="absolute"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                </svg>
                </span> 
            <input  name="user_name" placeholder="User Name" class="pr-3 pl-9 rounded w-64"  type="text">    
            </div> 
        </div>

         <!-- Text input-->
        <div class="  ml-4 flex flex-col  p-1 relative">
        <label class="font-bold mb-1 mt-2">First Name</label>
        <div class="form-input">
            <span class="absolute"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
              </svg>
            </span> 
            <input  name="first_name" placeholder="First Name" class="pr-12 pl-9 rounded border-black w-64"  type="text">
        </div> 
        </div>
        
           <!-- Text input-->
        <div class="ml-4 flex flex-col  p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">Last Name</label>
            <div class="from-input">
                <span class="absolute"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                  </svg>
                </span> 
                <input  name="last_name" placeholder="Last Name" class="pr-3 pl-9 rounded w-64 "  type="text">
            </div>  
             </div>
            
          <!-- Text input-->
          <div class="ml-4 flex flex-col  p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">E-Mail</label>
            <div class="form-input">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                      </svg>
                </span>
                <input  name="e_mail" placeholder="E-Mail Address" class="pr-3 pl-9 rounded w-64"  type="text">
            </div>  
             </div>
                 
             <!-- Text input-->
        <div class="ml-4 flex flex-col  p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">Phone #</label> 
            <div class="form-input">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                        <path fill-rule="evenodd" d="M19.5 9.75a.75.75 0 01-.75.75h-4.5a.75.75 0 01-.75-.75v-4.5a.75.75 0 011.5 0v2.69l4.72-4.72a.75.75 0 111.06 1.06L16.06 9h2.69a.75.75 0 01.75.75z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                      </svg>
                </span>                  
            <input  name="phone" placeholder="(263)778 493 3338" class="pr-3 pl-9 rounded w-64"  type="text">
            </div> 
            
             </div>
              
             
           <!-- Text input-->
           <div class="ml-4 flex flex-col p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">Address</label>  
            <div class="form-input">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                      </svg>                      
                </span>
            </div>
            <input  name="address" placeholder="Address" class="pr-3 pl-9 rounded w-64"  type="text">
             </div>
             
           <!-- Text input-->
           <div class="ml-4 flex flex-col p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">City</label> 
            <div class="form-input">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                        <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                        <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" />
                      </svg>
                </span>
            <input  name="city_name" placeholder="City" class="pr-3 pl-9 rounded w-64"  type="text">    
            </div> 
             </div>

               <!-- Text input-->
           <div class="ml-4 flex flex-col p-2 relative">
            <label class="col-md-4 control-label font-bold mb-1">Login Password</label> 
            <div class="form-input">
                <span class="absolute">
                      <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"></path>
                      </svg>
                </span>
            <input  name="password" placeholder="Login Password" class="pr-3 pl-9 rounded w-64"  type="text">    
            </div> 
             </div>
              

             <!-- Select Basic -->
        <div class="ml-2 flex flex-col p-2 relative"> 
            <label class="ml-2 font-bold mb-1">State</label>
            <div class="form-selection">
                <span class="absolute">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-2  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-bl rounded-tl">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                      </svg>
                </span>
            </div>
            <div class="ml-2">
            <select name="state" class="rounded w-64 pr-3 pl-7" >
                <option value=" " >Please select your state</option>
                <option>Alabama</option>
                <option>Alaska</option>
                <option >Arizona</option>
                <option >Arkansas</option>
                <option >California</option>
                <option >Colorado</option>
                <option >Connecticut</option>
                <option >Delaware</option>
                <option >District of Columbia</option>
                <option> Florida</option>
                <option >Georgia</option>
                <option >Hawaii</option>
                <option >daho</option>
                <option >Illinois</option>
                <option >Indiana</option>
                <option >Iowa</option>
                <option> Kansas</option>
                <option >Kentucky</option>
                <option >Louisiana</option>
                <option>Maine</option>
                <option >Maryland</option>
                <option> Mass</option>
                <option >Michigan</option>
                <option >Minnesota</option>
                <option>Mississippi</option>
                <option>Missouri</option>
                <option>Montana</option>
                <option>Nebraska</option>
                <option>Nevada</option>
                <option>New Hampshire</option>
                <option>New Jersey</option>
                <option>New Mexico</option>
                <option>New York</option>
                <option>North Carolina</option>
                <option>North Dakota</option>
                <option>Ohio</option>
                <option>Oklahoma</option>
                <option>Oregon</option>
                <option>Pennsylvania</option>
                <option>Rhode Island</option>
                <option>South Carolina</option>
                <option>South Dakota</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option> Uttah</option>
                <option>Vermont</option>
                <option>Virginia</option>
                <option >Washington</option>
                <option >West Virginia</option>
                <option>Wisconsin</option>
                <option >Wyoming</option>
            </select>
            </div>
            </div> 
             <!-- radio checks -->
            <!-- <div class="p-2">
                <label class="col-md-4 control-label font-bold ml-4">Do you have another account?</label>
                <div class="ml-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="yes" /> Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" class="bg-green-500" name="hosting" value="no" /> No
                        </label>
                    </div>
                </div>
            </div>  -->
            <div  class="flex justify-center px-4" >
                <button type="submit" name="register" class="flex justify-center border-2 border-white w-5/6 mx-4 items-center py-2 px-5  bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl text-white font-bold shadow-xl mb-6">Submit</button>       
            </div>

        </form>

            </div>
            </div>
            

  
</body>
</html>

