<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="CSS\smart.css">


</head>
<body style="background: rgb(238,206,174);
background: radial-gradient(circle, rgba(238,206,174,1) 0%, rgba(148,187,233,1) 100%);">

<h1 style="  text-align: center;">:المحركات</h1>





<form action="connect.php" method="post">
  <div class="slidecontainer">
    <label for="volume">المحرك الاول</label>

    <input type="range" id="myRange1" name="myRange1"
           min="1" max="100" value="50" step="1" class="slider">
            <p>Value: <span id="demo"></span></p>
  </div>


  <div class="slidecontainer">
    <label for="cowbell">المحرك الثاني</label>

    <input type="range" id="myRange2" name="myRange2"
           min="1" max="100" value="50" step="1" class="slider">
            <p>Value: <span id="demo2"></span></p>
  </div>

  <div class="slidecontainer">
    <label for="cowbell">المحرك الثالث</label>

    <input type="range" id="myRange3" name="myRange3"
           min="1" max="100" value="50" step="1" class="slider">
            <p>Value: <span id="demo3"></span></p>
  </div>

  <div class="slidecontainer">
    <label for="cowbell">المحرك الرابع</label>

    <input type="range" id="myRange4" name="myRange4"
           min="1" max="100" value="50" step="1" class="slider">
            <p>Value: <span id="demo4"></span></p>
  </div>


  <div class="slidecontainer">
    <label for="cowbell">المحرك الخامس</label>

    <input type="range" id="myRange5" name="myRange5"
           min="1" max="100" value="50" step="1" class="slider">
            <p>Value: <span id="demo5"></span></p>
  </div>


  <div class="slidecontainer">
    <label for="cowbell">المحرك السادس</label>

    <input type="range" id="myRange6" name="myRange6"
           min="1" max="100" value="50" step="1" class="slider">
            <p>Value: <span id="demo6"></span></p>
  </div>

  <input type="Submit" name='تشغيل'>
</form>


  <script>
  var slider1 = document.getElementById("myRange1");
  var output1 = document.getElementById("demo");
  output1.innerHTML = slider1.value;

  slider1.oninput = function() {
    output1.innerHTML = this.value;
  }
  </script>

  <script>
  var slider2 = document.getElementById("myRange2");
  var output2 = document.getElementById("demo2");
  output2.innerHTML = slider2.value;

  slider2.oninput = function() {
    output2.innerHTML = this.value;
  }
  </script>

  <script>
  var slider3 = document.getElementById("myRange3");
  var output3 = document.getElementById("demo3");
  output3.innerHTML = slider3.value;

  slider3.oninput = function() {
    output3.innerHTML = this.value;
  }
  </script>

  <script>
  var slider4 = document.getElementById("myRange4");
  var output4 = document.getElementById("demo4");
  output4.innerHTML = slider4.value;

  slider4.oninput = function() {
    output4.innerHTML = this.value;
  }

  </script>

   <script>
    var slider5 = document.getElementById("myRange5");
    var output5 = document.getElementById("demo5");
    output5.innerHTML = slider5.value;

    slider5.oninput = function() {
      output5.innerHTML = this.value;
    }

    </script>

    <script>
      var slider6 = document.getElementById("myRange6");
      var output6 = document.getElementById("demo6");
      output6.innerHTML = slider6.value;

      slider6.oninput = function() {
        output6.innerHTML = this.value;
      }
      </script>





      </body>
      </html>
