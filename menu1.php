<?php
include("navmenu.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="images/CSSpage.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Accordion</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
        
        
        width: 80vw;
  height: 160vh;
  display: flex;
  
  align-items: right;
  justify-content: center;
  background:#rgb(236, 231, 231)
    }
</style>
</head>
<body>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="justify-content:center" >
        <h2>
          Starters
        </button>
</h2>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Kakori Kababs</h2>
            <br>
            
            <p>These Lucknowi Kebabs are nothing short of a celebration
                 of meat. Juicy, succulent and just right, spruce them up with 
                some chaat masala, fresh mint chutney, and they’ll have your party off to an impressive start. 
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/paneer (6).jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
  </div>
</div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Microwave Paneer Tikkas</h2>
            <br>
            
            <p>No tandoor? No problem! All you need is
                 a microwave and a few minutes to spare for this flavor-packed paneer tikka.
            </p>
            <button type="button" class="btn btn-secondary"> Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/paneer (1).jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Aloo & Dal ki Tikki</h2>
            <br>
            
            <p>Bite-sized and absolutely divine, serve these
                 crisp potato and channa dal ki tikkis with a dollop of chutney and you’re good to go.
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/paneer (3).jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Crumb-Fried Chicken</h2>
            <br>
            
            <p>Who doesn’t love fried chicken? Crunchy, 
                crispy and just divine - one can’t get 
                enough of this classic crumb-fried chicken spruced up with a zingy dip.
 
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/paneer (2).jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Bhuna masala chicken wings</h2>
            <br>
            
            <p>Coated with dry red chillies, cumin and coriander - dig into these 
                fiery hot wings with a desi makeover. It is sure to be a hit at any party this season.
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/paneer (4).jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>
</div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
       <h2>
        Main Course
</h2>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        


      <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Kurkuri Bhindi</h2>
            
            <p> Kurkuri Bhindi or Fried Bhindi is a quick, tasty, spicy and crispy Bhindi (Okra) recipe. The Bhindis (Okra) are lightly coated and marinated in a mixture of Besan (Gram Flour) and Indian spices. These coated Bhindis (Okra) are then deep fried so that they become crispy.

            </p>
            
            <button type="button" class="btn btn-secondary">Price - 150</button>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/bhendi.jpeg" class="img-fluid img-thumbnail" style="height:60vh; width:40vw">
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Palak Paneer Bhurji</h2>
            
            <p> palak paneer bhurji is an indian dish made with spinach and scrambled paneer.It is a healthy & flavorful dish which can be made in minutes

            </p>
            
            <button type="button" class="btn btn-secondary">Price - 150</button>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/palak bhurji.jpeg" class="img-fluid img-thumbnail" style="height:60vh; width:40vw">
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Besan Cheela</h2>
            <br>
            
            <p> Besan Cheela are spiced pancakes generally eaten as breakfast, made from gram flour (besan) mixed with onion, tomato, coriander and various spices.
</p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/besan.jpeg" class="img-fluid img-thumbnail" style="height:60vh; width:40vw">
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Dal Palak</h2>
            <br>
           
            <p> Dal palak os a healthy and sumptuous dish made of green lentils and spinach cooked in a spicy onion tomato based gravy
</p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/dal.jpeg" class="img-fluid img-thumbnail" style="height:60vh; width:40vw">
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Tawa pulao</h2>
            <br>
            
            <p> Tawa pulao is a spicy and popular street food from Mumbai, made with rice cooked with vegetables and flavored with pav bhaji masala.</p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/tawa.jpeg" class="img-fluid img-thumbnail" style="height:60vh; width:40vw">
          </div>
      </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2> Peas Pulao</h2>
            <br>
            
            <p>  Peas Pulao or Matar Pulao is a flavorful one-pot Indian rice dish made with fresh peas & rice cooked along with various aromatic spices.</p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/peans pulaw.jpeg" class="img-fluid img-thumbnail" style="height:60vh; width:40vw">
          </div>
      </div>
  </div>
</div>






      </div>
    </div>
  </div>





















  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
<h2>
        Deserts
</h2>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Lemon Tart</h2>
            <br>
            
            <p>Sinful, rich and creamy, this recipe is the perfect finish to a meal. Tip: Make the lemon tart a day ahead, and store it in the refrigerator. Spruce it up with lemon rind, and trust us - this indulgent dessert really is as yummy as it looks.
  
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/lemon.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
  </div>
</div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Low Fat Tiramisu
</h2>
            <br>
            
            <p>Italian and exceptional, this dessert recipe slashes the calories and is too good to be true. Top it off with cream, sprinkle with bitter chocolate, cocoa powder and voila! Your guilt-free dessert is ready to be devoured.
 
            </p>
            <button type="button" class="btn btn-secondary"> Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/low fat.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Coconut Kheer</h2>
            <br>
            
            <p>This kheer is made in an extra luxurious way featuring a blend of rich and coconut milk, spruced up with nutty caramel and rose petals. We assure you, it will be hard to have just one bite of this heavenly dessert!
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/kheer.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
  </div>
</div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Chocolate Coffee Truffle</h2>
            <br>
            
            <p>If your chocolate addiction is real, this glorious recipe is one of the best ways to enjoy your all-time favourite treat. Well, two of your favourites - chocolate and… (drum roll please) coffee! The creamy center with that quintessential kick 
                of caffeine is pure perfection. Indeed, great things do come in small packages.
            </p>
            <button type="button" class="btn btn-secondary"> Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/truffle.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>



  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Apple Pie</h2>
            <br>
            
            <p>Just when you thought apple pie couldn't get any better, this recipe raises the bar like no other. Truly our best-ever, make this classic for a get-together and you might not have any leftovers to bring home. Top off this warm, melt-in-your mouth pie with a sprinkle of cinnamon and a scoop of ice cream.
 

            </p>
            <button type="button" class="btn btn-secondary"> Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/applepie.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>


  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Eggless Chocolate Mousse
</h2>
            <br>
            
            <p>If chocolate is the answer… Who cares what the question is?! This mouth-watering mousse is everything you dream of, chocolate-y rich and silky smooth. Eggless and easy, a recipe that will satisfy even the most-serious chocoholic.
 
            </p>
            <button type="button" class="btn btn-secondary">Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/eggless.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
  </div>
</div>
  <div class="container-fluid">
  <div class="row">
      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <br>
          <br>
          <br>
          <div class="md-form">
            <h2>Fudgy Chewy Brownies</h2>
            <br>
            
            <p>A balanced diet is a brownie in each hand - don't you agree? Decadently rich, fudgy and chewy - bake a batch and be your family's hero. These brownies are pure chocolate overload, perfect to bake on a lazy afternoon.
 
            </p>
            <button type="button" class="btn btn-secondary"> Price - 150</button>
            
          </div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-sm-12 col-lg-6">
          <!-- Material input -->
          <div class="md-form">
              <img src="images/browni.jpeg" class="img-fluid img-thumbnail">
          </div>
      </div>
</div>
  </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>                            