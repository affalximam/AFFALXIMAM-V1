<!DOCTYPE html>

<html>
  <head>
   <title> Admin page Finder </title>
    <meta charset="utf-8">
    <meta name="view port" content="Width=device-width, initial-scale=1">
    <meta http-equiv = "author" content = "The Alchemist" />
    <style>
      *{
    margin: 0;
    }
    
    /* Header 1 */
    
    .header1{
    width: 100%;
    height: 100px;
    background-color: #000000;
    position: relative;
    }
    h1{
    padding-top: 15px;
    padding-bottom: 10px;
    width:100%;
    text-align: center;
    font-family: Times New Roman;
    }
    
    /* Navbar 1 */
    
    .header2{
      width: 100%;
      background-color: #18d1ff;
      height:80px;
    }
    nav {
     text-align: left;
    } 
    nav ul ul {
     display: none;
    }
    nav ul li:hover > ul{
    display: block;
    text-align: center;
    }
    nav ul {
     padding-top: 20px;
     padding-bottom: 20px;
     list-style: none;
     position: relative;
     display: inline-table;
    }
    nav ul:after {
     content: ""; 
     clear:both; 
     display: block;
    }
    nav ul li{
     float:left;
    }
    nav ul li:hover{
    }
    nav ul li:hover a{
     color:#fff;
     font-size:15px;
    }
    nav ul li a{
     display: block;
  
     color: #fff;
     text-decoration: none;
    }
    nav ul ul{
     border-radius: 0px;
     padding: 0;
    }
    nav ul ul li{
     float:none;
     border-top: 1px soild #53bd84;
     border-bottom: 1px solid #53bd84;
    }
    nav ul ul li a{
     padding: 10px 15px;
     color: #fff;
    }
    nav ul ul li a:hover{
    }
    nav ul ul ul{
     top: 0;
    }
    
    /* Dark mode */
    
    :root {
    --primary-color: #302AE6;
    --secondary-color: #536390;
    --font-color: #424242;
    --bg-color: #fff;
    --heading-color: #292922;
    }
    [data-theme="dark"] {
    --primary-color: #9A97F3;
    --secondary-color: #818cab;
    --font-color: #e1e1ff;
    --bg-color: #161625;
    --heading-color: #818cab;
    }
    body {
    background-color: var(--bg-color);
    color: var(--font-color);
    /*styles tambahan*/
    .....
    }
    h1 {
    color: var(--secondary-color);
    }
    
    /*styles tambahan*/
    
    a {
    color: var(--primary-color);
    /*styles tambahan*/
    .....
    }
      .theme-switch-wrapper {
  display: flex;
  align-items: right;
      }
    .theme-switch {
  display: inline-block;
  height: 34px;
  position: relative;
  width: 60px;
  margin-right:10px;
  margin-top:10px;
  margin-bottom:10px;
}
    .theme-switch input {
  display:none;
}
    .slider {
  background-color: #000000;
  bottom: 0;
  cursor: pointer;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transition: .4s;
}
    .slider:before {
  background-color: #00ccff;
  bottom: 4px;
  content: "";
  height: 26px;
  left: 4px;
  position: absolute;
  transition: .4s;
  width: 26px;
}
    input:checked + .slider {
  background-color: #000000;
}
    input:checked + .slider:before {
  transform: translateX(26px);
}
    .slider.round {
  border-radius: 34px;
}
    .slider.round:before {
  border-radius: 50%;
}
    
    /* Footer */
    .footer{
      background-color:#0000ff;
      width:100%;
      height:100%;
      text-align:center;
      font-family: Times New Roman;
      color: White;
      padding-bottom: 10px;
    }
    .jam{
      background-color:#1F3A93;
      width: 100%;
      height: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    #clock{
      text-align: center;
      font-family: Times New Roman;
      color: #ffffff;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    
    img[alt="www.000webhost.com"]{display:none;} 
    </style>
    </head>
     <body>
      <!--header paling atas-->
        <div class="header1">
          <h1>
            <script>
              farbbibliothek = new Array(); 
              farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
              farbbibliothek[1] = new Array("#FF0000","#FFFFFF","#FF0000","#FF0000"); 
              farbbibliothek[2] = new Array("#FFFFFF","#FF0000","#FFFFFF","#FF0000","#FFFFFF","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF"); 
              farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
              farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
              farbbibliothek[5] = new Array("#000000","#000000","#000000","#FFFFFF","#FFFFFF","#FFFFFF"); 
              farbbibliothek[6] = new Array("#FFFFFF","#FF0000"); 
              farbbibliothek[7] = new Array("#FF0000","#FFFF00","#00FF00","#00FFFF","#0000FF");
              farbbibliothek[8] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
              farbbibliothek[9] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
              farben = farbbibliothek[4];
              function farbschrift() 
              { 
              for(var i=0 ; i<Buchstabe.length; i++) 
              { 
              document.all["a"+i].style.color=farben[i]; 
              } 
              farbverlauf(); 
              } 
              function string2array(text) 
              { 
              Buchstabe = new Array(); 
              while(farben.length<text.length) 
              { 
              farben = farben.concat(farben); 
              } 
              k=0; 
              while(k<=text.length) 
              { 
              Buchstabe[k] = text.charAt(k); 
              k++; 
              } 
              } 
              function divserzeugen() 
              { 
              for(var i=0 ; i<Buchstabe.length; i++) 
              { 
              document.write("<font face='Forte' size='50'><span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span></font>"); 
              } 
              farbschrift(); 
              } 
              var a=1; 
              function farbverlauf() 
              { 
              for(var i=0 ; i<farben.length; i++) 
              { 
              farben[i-1]=farben[i]; 
              } 
              farben[farben.length-1]=farben[-1]; 

              setTimeout("farbschrift()",30); 
              } 
              
              var farbsatz=1; 
              function farbtauscher() 
              { 
              farben = farbbibliothek[farbsatz]; 
              while(farben.length<text.length) 
              { 
              farben = farben.concat(farben); 
              } 
              farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 
              } 
              setInterval("farbtauscher()",5000); 
              text= " AFFALXIMAM "; //h 
              string2array(text); 
              divserzeugen();
              
              //snow efek
              
              window.onload = function(){
              //canvas init
              var canvas = document.getElementById("canvas");
              var ctx = canvas.getContext("2d");
    
              //canvas dimensions
              var W = window.innerWidth;
              var H = window.innerHeight;
              canvas.width = W;
              canvas.height = H;
    
              //snowflake particles
              var mp = 25; //max particles
              var particles = [];
              for(var i = 0; i < mp; i++)
              {
              particles.push({
              x: Math.random()*W, //x-coordinate
              y: Math.random()*H, //y-coordinate
              r: Math.random()*4+1, //radius
              d: Math.random()*mp //density
              })
              }
    
              //Lets draw the flakes
              function draw()
              {
              ctx.clearRect(0, 0, W, H);
        
              ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
              ctx.beginPath();
              for(var i = 0; i < mp; i++)
              {
              var p = particles[i];
              ctx.moveTo(p.x, p.y);
              ctx.arc(p.x, p.y, p.r, 0, Math.PI*2, true);
              }
              ctx.fill();
              update();
              }
    
    //Function to move the snowflakes
    //angle will be an ongoing incremental flag. Sin and Cos functions will be applied to it to create vertical and horizontal movements of the flakes
              var angle = 0;
              function update()
              {
              angle += 0.01;
              for(var i = 0; i < mp; i++)
              {
              var p = particles[i];
            //Updating X and Y coordinates
            //We will add 1 to the cos function to prevent negative values which will lead flakes to move upwards
            //Every particle has its own density which can be used to make the downward movement different for each flake
            //Lets make it more random by adding in the radius
              p.y += Math.cos(angle+p.d) + 1 + p.r/2;
              p.x += Math.sin(angle) * 2;
            
            //Sending flakes back from the top when it exits
            //Lets make it a bit more organic and let flakes enter from the left and right also.
              if(p.x > W+5 || p.x < -5 || p.y > H)
              {
                if(i%3 > 0) //66.67% of the flakes
                {
                    particles[i] = {x: Math.random()*W, y: -10, r: p.r, d: p.d};
                }
                else
                {
                    //If the flake is exitting from the right
                    if(Math.sin(angle) > 0)
                    {
                        //Enter from the left
                        particles[i] = {x: -5, y: Math.random()*H, r: p.r, d: p.d};
                    }
                    else
                    {
                        //Enter from the right
                        particles[i] = {x: W+5, y: Math.random()*H, r: p.r, d: p.d};
                    }
                  }
                }
              }
            }
    
            //animation loop
              setInterval(draw, 33);
              }


              Resources
    
            </script>
          </h1>
        </div>
      
      <!--Header 2 -->
        <div class="header2">
          
      <!-- navigasi -->
          <nav>
          <ul>
            <li>
            <li><img src="https://c.top4top.io/p_1700lti4v0.png" style="width:30%; height:30%; padding-left:10px;">
              <ul>
                <li><a href="https://affalximam.000webhostapp.com/index.html" style="background-color:black; font-size: 30px;"> Home </a></li>
                <li><a href="https://affalximam.000webhostapp.com/blog.html" style="background-color:black;  font-size: 30px;"> Blog </a></li>
                <li><a href="https://affalximam.000webhostapp.com/toolsonline.html" style="background-color:black;  font-size: 30px;"> Tools online </a></li>
                <li><a href="https://affalximam.000webhostapp.com/ebook.html" style="background-color:black; font-size: 30px;">E-Book</a></li>
                <li><a href="#" style="background-color:black; font-size: 30px;">Lain lain</a>
                  <ul>
                    <li><a href="https://affalximam.000webhostapp.comaboutme.html" style="background-color:black; font-size: 30px;"> Tentang saya </a></li>
                    <li><a href="https://affalximam.000webhostapp.comcontackme.html" style="background-color:black; font-size: 30px;"> Kontak </a></li>
                  </ul>
              </ul>
              <li float="right" style="padding-right: 20px">
                      <!--Dark mode-->
              <div class="theme-switch-wrapper" align="right">
              <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox" />
              <div class="slider round"></div>
              </label>
              <span style="color: #ffffff; font-size: 30px; padding-top: 10px;">Dark Mode</span>
              </div>
              <script>
                  const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
                  function switchTheme(e) {
                if (e.target.checked) {
                  document.documentElement.setAttribute('data-theme', 'dark');
                }
                else {
                  document.documentElement.setAttribute('data-theme', 'light');
                }    
                }
                  toggleSwitch.addEventListener('change', switchTheme, false);
                  function switchTheme(e) {
                if (e.target.checked) {
                  document.documentElement.setAttribute('data-theme', 'dark');
                  localStorage.setItem('theme', 'dark'); //add this
                }
                else {
                  document.documentElement.setAttribute('data-theme', 'light');
                  localStorage.setItem('theme', 'light'); //add this
                }    
                }
                  const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
                if (currentTheme) {
                  document.documentElement.setAttribute('data-theme', currentTheme);
                if (currentTheme === 'dark') {
                  toggleSwitch.checked = true;
                }
                }
              </script>
              </li> 
          </ul>
          </nav>
          </div>
        <br>
        <br>
        <br>
        
            <p align = "center"> <span style="font-family: times new roman; font-size: 20px; margin-top: 20px"> Admin Page finder </span> </p>
            <form method = "POST" action = "<? php $ PHP_SELF;?>">
            <p align = "center"> <font> Masuk ke situs web: </font>
            <input type = "text" name = "url" value = "http: //" />
            <br>
            <input type = "submit" name = "submit" value = "Check" />
            </p>
            <br>
            <br>
            <?php
            // Kode ini dibuat oleh The Alchemist
            function xss_protect ($ data, $ strip_tags = false, $ allow_tags = "") { 
                if ($ strip_tags) {
              $ data = strip_tags ($ data, $ allow_tags. "<b>");
                }
            
                if (stripos ($ data, "script")! == false) { 
              $ result = str_replace ("script", "scr <b> </b> ipt", htmlentities ($ data, ENT_QUOTES)); 
                } lain { 
              $ result = htmlentities ($ data, ENT_QUOTES); 
                } 
            
                return $ result;
            }
            function urlExist ($ url)
            {
                $ handle = curl_init ($ url);
                if (false === $ handle)
                {
                return false;
                }
                curl_setopt ($ handle, CURLOPT_HEADER, false);
                curl_setopt ($ handle, CURLOPT_FAILONERROR, true);
                curl_setopt ($ handle, CURLOPT_HTTPHEADER, Array ("User-Agent: Mozilla / 5.0 (Windows; U; Windows NT 5.1; en-US; rv: 1.8.1.15) Gecko / 20080623 Firefox / 2.0.0.15")); // minta seolah-olah Firefox
                curl_setopt ($ handle, CURLOPT_NOBODY, true);
                curl_setopt ($ handle, CURLOPT_RETURNTRANSFER, false);
                $ terhubung = curl_exec ($ pegangan);
                curl_close ($ handle);
                kembali $ terhubung;
            }
                if (isset ($ _ POST ['submit']) && isset ($ _ POST ['url']))
                {
              $ url = htmlentities (xss_protect ($ _ POST ['url']));
              if (filter_var ($ url, FILTER_VALIDATE_URL))
              {
                $ mencoba = array ('admin /', 'administrator /', 'admin1 /', 'admin2 /', 'admin3 /', 'admin4 /', 'admin5 /', 'usuarios /',
                'usuario /', 'administrator /', 'moderator /', 'webadmin /', 'adminarea /', 'bb-admin /', 'adminLogin /', 'admin_area /',
                'panel-administracion /', 'instadmin /', 'memberadmin /', 'administratorlogin /', 'adm /', 'admin / account.php',
                'admin / index.php', 'admin / login.php', 'admin / admin.php', 'admin / account.php', 'admin_area / admin.php',
                'admin_area / login.php', 'siteadmin / login.php', 'siteadmin / index.php', 'siteadmin / login.html', 'admin / account.html',
                'admin / index.html', 'admin / login.html', 'admin / admin.html', 'admin_area / index.php', 'bb-admin / index.php', 'bb-admin / login.php ',
                'bb-admin / admin.php', 'admin / home.php', 'admin_area / login.html', 'admin_area / index.html', 'admin / controlpanel.php', 'admin.php',
                'admincp / index.asp', 'admincp / login.asp', 'admincp / index.html', 'admin / account.html', 'adminpanel.html', 'webadmin.html',
                'webadmin / index.html', 'webadmin / admin.html', 'webadmin / login.html', 'admin / admin_login.html', 'admin_login.html',
                'panel-administracion / login.html', 'admin / cp.php', 'cp.php', 'administrator / index.php', 'administrator / login.php',
                'nsw / admin / login.php', 'webadmin / login.php', 'admin / admin_login.php', 'admin_login.php', 'administrator / account.php',
                'administrator.php', 'admin_area / admin.html', 'halaman / admin / admin-login.php', 'admin / admin-login.php', 'admin-login.php',
                'bb-admin / index.html', 'bb-admin / login.html', 'acceso.php', 'bb-admin / admin.html', 'admin / home.html',
                'login.php', 'modelsearch / login.php', 'moderator.php', 'moderator / login.php', 'moderator / admin.php', 'account.php',
                'halaman / admin / admin-login.html', 'admin / admin-login.html', 'admin-login.html', 'controlpanel.php', 'admincontrol.php',
                'admin / adminLogin.html', 'adminLogin.html', 'admin / adminLogin.html', 'home.html', 'rcjakar / admin / login.php',
                'adminarea / index.html', 'adminarea / admin.html', 'webadmin.php', 'webadmin / index.php', 'webadmin / admin.php',
                'admin / controlpanel.html', 'admin.html', 'admin / cp.html', 'cp.html', 'adminpanel.php', 'moderator.html',
                'administrator / index.html', 'administrator / login.html', 'user.html', 'administrator / account.html', 'administrator.html',
                'login.html', 'modelsearch / login.html', 'moderator / login.html', 'adminarea / login.html', 'panel-administracion / index.html',
                'panel-administracion / admin.html', 'modelsearch / index.html', 'modelsearch / admin.html', 'admincontrol / login.html',
                'adm / index.html', 'adm.html', 'moderator / admin.html', 'user.php', 'account.html', 'controlpanel.html', 'admincontrol.html',
                'panel-administracion / login.php', 'wp-login.php', 'adminLogin.php', 'admin / adminLogin.php', 'home.php', 'admin.php',
                'adminarea / index.php', 'adminarea / admin.php', 'adminarea / login.php', 'panel-administracion / index.php',
                'panel-administracion / admin.php', 'modelsearch / index.php', 'modelsearch / admin.php', 'admincontrol / login.php',
                'adm / admloginuser.php', 'admloginuser.php', 'admin2.php', 'admin2 / login.php', 'admin2 / index.php', 'usuarios / login.php',
                'adm / index.php', 'adm.php', 'affiliate.php', 'adm_auth.php', 'memberadmin.php', 'administratorlogin.php', 'admin.asp', 'admin / admin.asp ',
                'admin_area / admin.asp', 'admin_area / login.asp', 'admin_area / index.asp', 'bb-admin / index.asp', 'bb-admin / login.asp',
                'bb-admin / admin.asp', 'halaman / admin / admin-login.asp', 'admin / admin-login.asp', 'admin-login.asp', 'user.asp', 'webadmin / index .asp ',
                'webadmin / admin.asp', 'webadmin / login.asp', 'admin / admin_login.asp', 'admin_login.asp', 'panel-administracion / login.asp',
                'adminLogin.asp', 'admin / adminLogin.asp', 'home.asp', 'adminarea / index.asp', 'adminarea / admin.asp', 'adminarea / login.asp',
                'panel-administracion / index.asp', 'panel-administracion / admin.asp', 'modelsearch / index.asp', 'modelsearch / admin.asp',
                'admincontrol / login.asp', 'adm / admloginuser.asp', 'admloginuser.asp', 'admin2 / login.asp', 'admin2 / index.asp', 'adm / index.asp',
                'adm.asp', 'affiliate.asp', 'adm_auth.asp', 'memberadmin.asp', 'administratorlogin.asp', 'siteadmin / login.asp', 'siteadmin / index.asp');
                foreach ($ mencoba sebagai $ sec)
                {
                $ urll = $ url. '/'. $ sec;
                if (urlExist ($ urll))
                {
                echo '<p align = "center"> <font color = "00FF00">'. $ urll. ' ada. <br> PERTANDINGAN DITEMUKAN !!! </font> </p> ';
                keluar;
                }
                lain
                {
                echo '<p align = "center"> <font color = "FFFF00">'. $ urll. ' tidak ada. </font> </p> ';
                }   
                }
                echo '<p align = "center"> <font color = "c0c0c0" size = "5"> Tidak dapat menemukan halaman admin. </font> </p>';
              }
              lain
              {
                echo '<p align = "center"> <font color = "c0c0c0" size = "5"> URL yang dimasukkan tidak valid. </font> </p>';    
              }
                }
            ?>
        <br>
        <br>
      <!-- Jam -->
          <div id="clock" class="jam">
            <script type="text/javascript" >
             <!--
              function showTime() {
              var a_p = "";
              var today = new Date();
              var curr_hour = today.getHours();
              var curr_minute = today.getMinutes();
              var curr_second = today.getSeconds();
            if (curr_hour < 12) {
              a_p = "AM";
            } 
            else {
              a_p = "PM";
            }
            if (curr_hour == 0) {
              curr_hour = 12;
            }
            if (curr_hour > 12) {
              curr_hour = curr_hour - 12;
            }
              curr_hour = checkTime(curr_hour);
              curr_minute = checkTime(curr_minute);
              curr_second = checkTime(curr_second);
              document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }
              function checkTime(i) {
            if (i < 10) {
              i = "0" + i;
            }
            return i;
            }
              setInterval(showTime, 500);
            //-->
            </script>
          </div>
          
      <!-- footer -->
        <div class="footer" >
          <h3> Copyright 2k20 </h3>
        </div>
</body>
</html>