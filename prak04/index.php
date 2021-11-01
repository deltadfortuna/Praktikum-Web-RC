<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <title> Prak-mg04 </title>
   <style>
        *{
            font-family: Lucida Bright;
            margin: 0;
            padding: 0;
        }

        h2,h3{
            text-align: center;
            padding : 200px
            font-size: 30px;
        }

        .head{
            height: auto;
            width: 100%;
            align-items: center;
            background-color: rgb(222, 184, 135);
        }

        h1{
            font-size: 25px;
        }

        nav{
            height: 25x;
            width: 100%;
            background-color: rgb(95, 158, 160);
           font-size: 14px;
        }

        nav ul li{
            display: inline-block;
            line-height: 15px;
            margin 0
        }

        nav ul li a{
            color: white;
            text-transform: uppercase;
        }

        #content {
            margin: auto;
            width: 800px;
            height: auto;
            border: 2px solid black;
            background-color: rgb(255, 250, 205);
        }

        #content th{
            padding: 12px 15px;
            background-color: rgb(222, 184, 135);
        }

        #content td {
            padding: 12px 15px;
            font-size: 18px;
            background-color: rgb(222, 184, 135);

        }

        button{
            margin-top: 20px;
            padding: 10px 25px;
            border: none;
            cursor: pointer;
            padding: 10px;
            background-color: rgb(222, 184, 135);
        }
   </style>
</head>

<body>
    <nav>
    <ul>
         <li><a href="javascript:void()" onclick="create()">Form</a> </li>
          <li><a href="javascript:void()" onclick="showData()" >READ DATA</a> </li>
    </ul>
    </nav>
    <div class="head">
         <center> <h1 class="text"> ~ Welcome! We Are ITERA Friends ~ </h1> </center>

    </div>
        <br>
        <center> <p>
        Hello! Let us know your identity^^ <br>
        Please input your identity in our page~
        <br> <br>
        </p> </center>
    <div id="content"></div>

    <script>
        function create(){
            $.get("form.php", function(data) {
                $("#content").html(data);
            });
        }
        function showData(){
            $.get("data.php", function(data) {
                $("#content").html(data);
            });
        }
    </script>
</body>
</html>
