<?php 
    include('includes/header.php');
    ?>
<!DOCTYPE html>
<html>
<head>
 <title>Learning CSS</title>

<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">

<style type="text/css">
 *{
   margin: 0px;
}

h1{
 text-align: center;
}
p{
 font-size: 24px;
}

header{

font-family: 'Dokdo', cursive;
font-size: 30px;
padding: 20px;
}
main{
      margin-left: 120px;
        width: 100%;
        margin-top: 40px;
}
.box{
 width: 20%;
 float: left;
 padding: 7px;
 padding-left: 10px;  
 display: block;
 overflow: hidden;
 border-radius: 3px;

}

img{
 width: 100%;
    border-radius: 4px;

}

img:hover{
  transform: scale(2,2);
  transition: .3s transform;

}


</style>

</head>
<body>
<header>
 
<hr/>

</header>
<main>
 <div class="box">
<img src="img/portfolio-1.jpg"></div>
<div class="box">
    <img src="img/portfolio-2.jpg"></div>
    <div class="box">
        <img src="img/portfolio-3.jpg"></div>
        <div class="box">
            <img src="img/portfolio-4.jpg"></div>
            <div class="box">
                <img src="img/portfolio-5.jpg"></div>
                <div class="box">
                    <img src="img/portfolio-6.jpg"></div>
<div class="box">
<img src="img/blog-2.jpg"></div>
<div class="box">
<img src="img/blog-3.jpg"></div>
<div class="box">
<img src="img/blog-1.jpg"></div>
<div class="box">
<img src="img/blog-3.jpg"></div>
</body>
</html>
<?php 
    include('includes/footer.php');
    ?>




