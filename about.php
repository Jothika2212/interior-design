<?php 
    include('includes/header.php');
    ?>

<html>
  <head>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body{
  background: #f1f3ef;
  font-family: 'Josefin Sans', sans-serif;
}

.wrapper{
  margin-top: 10%;
}

.wrapper h1{
  font-family: 'Allura', cursive;
  font-size: 52px;
  margin-bottom: 60px;
  text-align: center;
}

.team{
  display: flex;
  justify-content: center;
  width: auto;
  text-align: center;
  flex-wrap: wrap;
}

.team .team_member{
  background: #fff;
  margin: 5px;
  margin-bottom: 50px;
  width: 300px;
  padding: 20px;
  line-height: 20px;
  color: #8e8b8b;  
  position: relative;
}

.team .team_member h3{
  color: #81c644;
  font-size: 26px;
  margin-top: 50px;
}

.team .team_member p.role{
  color: #ccc;
  margin: 12px 0;
  font-size: 12px;
  text-transform: uppercase;
}

.team .team_member .team_img{
  position: absolute;
  top: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 100px;
  height: 100px;
  border-radius: 50%;
  background: #fff;
}

.team .team_member .team_img img{
  width: 100px;
  height: 100px;
  padding: 5px;
}


      </style>
  </head>
    <div class="heading">
        <h1>About Us</h1>
        
        </div>
        </html>
        <div class="wrapper">
  <h1>Our Team</h1>
  <div class="team">
    <div class="team_member">
      <div class="team_img">
        <img src="img/team1.png" alt="Team_image">
      </div>
      <h3>Paul Doe</h3>
      <p class="role">Project Managerr</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/team2.png" alt="Team_image">
      </div>
      <h3>Rosie Meg</h3>
      <p class="role">Interior Decorator</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p></div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/team3.png" alt="Team_image">
      </div>
      <h3>Alex Wood</h3>
      <p class="role">Architect</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
    </div>
    <div class="team_member">
      <div class="team_img">
        <img src="img/team3.png" alt="Team_image">
      </div>
      <h3>Alex Wood</h3>
      <p class="role">decorator</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
    </div>
  </div>
</div>	
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                    <h1 class="mb-4 section-title">Awesome Interior Designing Services For Your Home</h1>
                    
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bedroom Design</h5>
                            <p class="m-0">Bed
Relax with custom-made ideas of cots from Idesign. Bedroom beauty depends mainly on how the cot is built and arranged, supported by lighting, and side tables. Choose from the wide range of styles and colour options available in your desired design. A neat storage, peace of mind style and comfort can be expected when it designed as required. Cot, grey, umber, milky, crop, graffiti, scratch etc. are some of the cot samples to select the model that we can follow either in King or Queen Sizes.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Kitchen Design</h5>
                            <p class="m-0">Kitchens should be elegant looking as well as serve our purpose of storage, convenient cooking, and a part of comfortable living. Island kitchen series of modern designs from D`LIFE offers you a wide range of selections to help the customer get the best idea. These are different from the traditional style and towards the new trends. Some of these models are displayed in our showrooms. Sandy, orchid, mauve, ivory, niagara, excalibur etc are some of the samples under island kitchens.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bathroom Design</h5>
                            <p class="m-0">Decorative units play a vital role in making every room special. A well-arranged room with a cluster of units attracts everyone’s eyes. D’LIFE brings an option to transform your thoughts into exquisite designs and units. From classy display units to modern cabinet spaces and open shelves of your choice, now refresh your home with custom-made decorative units. We use premium quality hardwood fiber board as material for our products. As a result, our products are strong and long durable even in extreme conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php 
    include('includes/footer.php');
    ?>
            

   
 