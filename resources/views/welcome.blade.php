<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Girls</title>
    
</head>
<body class="antialiased " style="background-color: Lightpink" >

      <header style="display:flex">

          <div style="color:white; margin-left:30px" >
               <h1>Seja bem-vinda!</h1>
          </div>

          <div style="margin-top:30px; margin-left:73%">
                   @if (Route::has('login'))
                   <div >
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                         @else
                            <a href="{{ route('login') }}" type="button" style="color:white; text-decoration:none ;background-color:#FF0080; font-family:arial; padding:15px; margin-right:10px">Login</a>

                         @if (Route::has('register'))
                            <a href="{{ route('register') }}" type="button" style=" color:white; text-decoration:none;background-color:#FF0080;font-family:arial;padding:15px;">Register</a>
                        @endif
                       @endauth
                </div>
              @endif
          </div>
     </header>

         <div style="color:#FF0080; margin-left:35%; margin-top:5% ;font-size:50px">
            <h1>Tech Girls</h1>
         </div>


      <div class="main" style="display:flex; margin-top:5%">

        <div class="parte1">

           <div type="button" style="color:white; background-color:pink; font-family:arial; padding:15px; margin-right:15px; margin-left:20%">
               <h1>Saiba Mais </h1>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus est a faucibus volutpat. Maecenas vestibulum facilisis nunc eu facilisis. Vivamus semper in nibh a consequat. In egestas blandit urna, nec pulvinar mi sollicitudin sollicitudin. Quisque sed sagittis enim, vel dignissim ipsum. Aliquam erat volutpat. In hac habitasse platea dictumst.</p>
          </div>
          <div type="button" style="color:white;background-color:pink; font-family:arial; padding:15px; margin-right: 15px; margin-left:20%; margin-top:25px">
              <h1>Saiba Mais </h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus est a faucibus volutpat. Maecenas vestibulum facilisis nunc eu facilisis. Vivamus semper in nibh a consequat. In egestas blandit urna, nec pulvinar mi sollicitudin sollicitudin. Quisque sed sagittis enim, vel dignissim ipsum. Aliquam erat volutpat. In hac habitasse platea dictumst.</p>
          </div>

    </div>
    <div class="parte2">

           <div type="button" style="color:white; background-color:pink; font-family:arial; padding:15px; margin-right:20%">
                <h1>Saiba Mais </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus est a faucibus volutpat. Maecenas vestibulum facilisis nunc eu facilisis. Vivamus semper in nibh a consequat. In egestas blandit urna, nec pulvinar mi sollicitudin sollicitudin. Quisque sed sagittis enim, vel dignissim ipsum. Aliquam erat volutpat. In hac habitasse platea dictumst.</p>
         </div>
          <div type="button" style="color:white; background-color:pink; font-family:arial; padding:15px; margin-right:20%; margin-top:25px ">
                <h1>Saiba Mais </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed maximus est a faucibus volutpat. Maecenas vestibulum facilisis nunc eu facilisis. Vivamus semper in nibh a consequat. In egestas blandit urna, nec pulvinar mi sollicitudin sollicitudin. Quisque sed sagittis enim, vel dignissim ipsum. Aliquam erat volutpat. In hac habitasse platea dictumst.</p>
          </div>

    </div>
 </div>

</body>
</html>