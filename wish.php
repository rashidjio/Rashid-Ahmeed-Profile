<!-- Created by Eyad Farah -->

<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>

<style>/* Created by Eyad Farah */

body {
    background-color:blue;
}
div {
    margin-top:100px;
    background-color:#000000;
    color:white;
    height:auto ;
    width:auto;
    position:relative;
    border:solid 1px;
    border-color:black;
    border-radius:33px;
    padding:10px;
    animation-name: colorchange;
    animation-duration:1.2s;
}
@keyframes colorchange {
0% {
    left:0px;
    opacity: 0;
    top:100px;
}
100% {
    left:0px;
    opacity: 1;
    top:0px;
}
}
h1 {
    background-color:#000000;
    color:white;
    width:auto;
    text-align:center;
    font-weight:bold;
    font-size:33px;
    border:solid 1px;
    padding:10px;
    border-radius:33px;
    animation-name: colorchange;
    animation-duration:1.2s;
    animation-timing-function: liner;
}
@keyframes colorchange {
0% {
    left:0px;
    opacity: 0;
    top:100px;
}
100% {
    left:0px;
    opacity: 1;
    top:0px;
}
}
@keyframes colorchange {
    from { width: 0px; }
    to { width; auto; }
}
h2 {
    background-color:#000000;
    color:white;
    width:auto;
    text-align:center;
    font-weight:bold;
    font-size:15px;
}
#demo {
    color:white;
    width:auto;
    font-weight:bold;
    padding:10px;
    font-size:60px;
    text-align:left;
    padding-left:15px;
    z-index:4;
    animation-name: colorchange;
    animation-duration:1.2s;
}
@keyframes colorchange {
0% {
    background-color: gray;
    left:0px;
    opacity: 0;
    top:100px;
}
100% {
    background-color: black;
    left:0px;
    opacity: 1;
    top:0px;
}
}
h4 {
    margin-left:15px;
}</style>

        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    </head>
    <body>
    <div>
    <h1>Welcome</h1>
    <h2 id="demo">Good <br /></h2>

<script>


let hour = new Date().getHours()

if (hour >= 6 && hour <= 12) {
   $(function() {
    $("#demo").append("Morning");
});

} else if (hour >= 12 && hour <= 15) {
   $(function() {
    $("#demo").append("Afternoon");
});

}
else if (hour >= 15 && hour <= 20) {
   $(function() {
    $("#demo").append("Evening");
});

} else {
   $(function() {
    $("#demo").append("Nigth");
});

}
</script>
    <script>
if (hour >= 6 && hour <= 12) {
   document.write("<h4>Have a nice day<h4>");

} else if (hour >= 12 && hour <= 18) {
   document.write("<h4>Everything is fine<h4>");

}
 else if (hour >= 18 && hour <= 20) {
   document.write("<h4>Get some rest now<h4>");

} else {
   document.write("<h4>Have a sweet dreams<h4>");

}
    </script>
    </div>
    <a href="https://wa.link/acul6g">
<i class="fab fa-whatsapp"></i>
<h2>Whatsaap</h2>
</a>

    </body>
</html>
