<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="styles.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body class="shopbackground">
 <header class="shopping">
        <div class="container">
            <h1>REMEKVIN RESTAURANT</h1>
            <nav>
                <ul>
                    <li><a href="index.html" >HOME</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><a href="menu.html" >Menu</a></li>
                    <li><a href="book.html">Book Table</a></li>
                    <li><a href="Register.php">Registation</a></li>
                    <li><a href="Login.php">Login</a></li>
                    <!-- Cart icon and modal -->
                    <div class="cart-icon-container">
                        <div class="cart-btn">
                            <i id="cart" class="fas fa-shopping-cart"></i>
                            <span class="cart-quantity">0</span>
                        </div>         
                    </div>
                </ul>
            </nav>
        </div>
    </header>

 <div class="cart-modal-overlay">
    <div class="cart-modal">
      <i id="close-btn" class="fas fa-times"></i>
      <h1 class="cart-is-empty">Cart is empty</h1>
      <div class="product-rows"></div>
      <div class="total" method="post" action="purchase.php">
        <h1 class="cart-total">TOTAL</h1>
        <span class="total-price" method="post">$0</span>
      </div>

      <div class="card-body">
        <form id="usersaccout" class="usersaccout" name="usersaccout" method="post" action="shoppingcartintromation.php">
          <div class="form-group">
            <input type="text" id="username" name="username" required  placeholder="Enter your username">
          </div>
          <div class="form-group">
            <input type="text" id="phonenumber" name="phonenumber" required  placeholder="Enter your phone">
          </div>
          <div class="form-group">
            <input type="text" id="address" name="address" required  placeholder="Enter your address">
          </div><input type="hidden" id="total" name="total" value="">

          <div class="btngroupCheckout" role="group">
            <button type="submit" class="btn btn-primary purchase-btn">Proceed to Checkout</button>
          </div>
        </form>
      </div>
    </div>
  </div>


 <main class="shopaddtocart"  method="post" action="purchase.php">
<!--  products  -->

    <center><h1 class="addtypeFoods"> -- Our Foods --</h1></center>

<div class="food-button-container">
<button class="food-button" style="background-color: #f95a68" onclick="goToSection('breakfast')">Breakfast Foods</button>
<button class="food-button" style="background-color: #008080" onclick="goToSection('lunch')">Lunch Foods</button>
<button class="food-button" style="background-color: #32cd32" onclick="goToSection('dinner')">Dinner Foods</button>
<button class="food-button" style="background-color: #1d2951" onclick="goToSection('fruits')">Fruits</button>
<button class="food-button" style="background-color: #ffa07a" onclick="goToSection('drinks')">Drinks</button>
<button class="food-button" style="background-color: #324ab2" onclick="goToSection('icecream')">Ice Cream</button>
<button class="food-button" style="background-color: #b22222" onclick="goToSection('offers')">Any Offers</button>
<button class="food-button" style="background-color: #c32148" onclick="goToSection('discounts')">Discounts</button>
<button class="food-button" style="background-color: #696969" onclick="goToSection('special')">Special Pack</button>

</div>


<section id="breakfast" class="breakfast" method="post">
        <center><h4 class="ourfoodssectiontype">Breakfast Foods</h4></center>
  <div class="items-containeradd">
    
    <div class="card-2 card">
      <img class="product-image" src="photos/gallery/breakfast/rice&curry.jpg" alt="1">
          <span class="product-price"  id="$15" name="$15" >$15</span>
           <h2 class="productName" id="rice&curry" name="rice&curry" >Rice & Curry</h2>
           <p class="add-to-cart-paragraph">onsidered the national dish of the country, Sri Lankan rice and curry consists of steaming hot, fluffy rice (samba or kakulu varieties) that is served with a variety of side dishes commonly called curries.This specialty is a typical home-cooked dish and an undisputed staple on restaurant menus throughout Sri Lanka.</p>
           <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="photos/gallery/breakfast/kiribath.jpg" alt="2">

              <span class="product-price"id="$15" name="$15">$15</span>
               <h2 class="productName"id="Kiribath" name="Kiribath" >Kiribath</h2>
               <p class="add-to-cart-paragraph">Kiribath aka Sri Lankan milk rice is Sri Lanka's national dish that we make for every celebration in Sri Lanka. And a classic breakfast that everyone loves. Here's my fool-proof easy recipe to make creamy delicious Kiribath/milk rice. Ingredients are 2 cups rice ("Kekulu")3 cups water400 mL coconut milk(Thick, 400ml = 1) </p>
      <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="photos/gallery/breakfast/roti.jpg" alt="3">  
          <span class="product-price"id="$10" name="$10">$10</span>
          <h2 class="productName" id="Roti" name="Roti" >Roti</h2>
          <p class="add-to-cart-paragraph">In simple words, roti is a flatbread made with wholemeal wheat flour.Roti is the simplest bread that is made everyday in Indian households. It is made with only 2 ingredients- atta (the wheat flour) and water.Some people add salt, some add oil but in my house it was always made with these 2 ingredients only.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="photos/gallery/breakfast/stringhoppers.jpg" alt="4">  
          <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="StringHoppers" name="StringHoppers" >String Hoppers</h2>
          <p class="add-to-cart-paragraph">String Hoppers or Idiyaapam is a common SriLankan Breakfast staple just like Pittu and Hoppers.It is made using either steamed Wheat Flour or Roasted Rice Flour dough that is pressed through the mould to form thin thread like noodles that is woven in circles ideally over mini wicker mats and then steamed to perfection.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-6 card">
      <img class="product-image" src="photos/gallery/breakfast/pittu.jpg" alt="5">  
          <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Pittu" name="Pittu" >Pittu</h2>
          <p class="add-to-cart-paragraph">The process of making pittu is simply mixing coconut with the rice flour to form a "crumbled texture" mixture.  Then that mixture is placed in the cylinder tube of the Pittu steamer and steamed for about 5-6 minutes and it comes out as a solid Pittu tube.  You can use either red or white rice flour to make pittu so it is a wonderful gluten-free dish.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-7 card">
      <img class="product-image" src="photos/gallery/breakfast/kadala.jpg" alt="6">  
          <span class="product-price" id="$5" name="$5">$5</span>
          <h2 class="productName" id="Kadala" name="Kadala" >Kadala</h2>
          <p class="add-to-cart-paragraph">This is a very easy recipe for Kerala style Kadala Curry. We love puttu at home. I do not have my puttu kutty for making puttu here in Hong Kong. But I make kadala curry often and I serve it with idli, chapati or even dosa. It goes perfectly well. Here is how to make Kerala style kadala curry. This is how we make at home. Here is how to do kadala curry.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-8 card">
      <img class="product-image" src="photos/gallery/breakfast/Hoppers.jpg" alt="7">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Hoppers" name="Hoppers" >Hoppers</h2>
          <p class="add-to-cart-paragraph">Sri Lankan hoppers, also known as appam or aappa, are a popular and traditional Sri Lankan dish made from fermented rice flour and coconut milk batter. They are a type of bowl-shaped pancake with a crispy edge and a soft, spongy center.To obtain the slightly spongy and steamed texture, Egg Hoppers are a popular breakfast dish in Sri Lanka</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-9 card">
      <img class="product-image" src="photos/gallery/breakfast/Kaju-curry-recipe-nb.jpg" alt="8">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Kaju-curry" name="Kaju-curry" >Kaju-curry</h2>
          <p class="add-to-cart-paragraph">cashew curry recipe is a simple dish. Cashew curry is delicious Punjabi dish. Some people also know it by the name of Kaju butter masala. In this dish, roasted cashew nuts are slowly cooked in spicy and creamy gravy.  You can make this fantastic vegetarian meal at any festival or weekend. Guests can be welcomed or have fun plans for the holidays.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
  </div>  
  </section>
    



<section id="lunch" class="lunch" method="post">
     <center><h4 class="ourfoodssectiontype">Lunch Foods</h4></center>
  <div class="items-containeradd">
    <div class="card-2 card">
      <img class="product-image" src="photos/gallery/lunch/friderice.jpg" alt="1">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="friderice" name="friderice" >Fride Rice</h2>
          <p class="add-to-cart-paragraph">Fried rice is a traditional Chinese preparation of cooked rice, vegetables, protein, soy sauce, and aromatics. The ingredients are stir-fried in a large pan or wok for even flavor distribution. An ideal use for leftovers, fried rice is quick, customizable, and incredibly simple to put together with whatever is in your fridge.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="photos/gallery/lunch/koththu.jpg" alt="2">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Koththu" name="Koththu" >Koththu</h2>
           <p class="add-to-cart-paragraph">Kottu roti, alternatively spelled kothu roti, is a Sri Lankan dish consisting of chopped roti, a meat curry dish of choice (such as beef, mutton, seafood, chicken, or pork), along with scrambled eggs, onions, and chillies. A variation of the dish is found in the south Indian states of Tamil Nadu and Kerala, known as kothu parotta.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="photos/gallery/lunch/biriyani.jpg" alt="3">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Biriyani" name="Biriyani" >Biriyani</h2>
          <p class="add-to-cart-paragraph">Biryani is a mixed rice dish, mainly popular in South Asia. It is made with rice, some type of meat (chicken, goat, pork, lamb, beef, prawn, or fish) and spices. To cater to vegetarians, in some cases, it is prepared by substituting vegetables or paneer for the meat. Sometimes eggs and/or potatoes are also added. </p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-9 card">
      <img class="product-image" src="photos/gallery/lunch/Noodles.jpg" alt="4">  
          <span class="product-price" id="$11" name="$11">$11</span>
          <h2 class="productName" id="Noodles" name="Noodles" >Noodles</h2>
          <p class="add-to-cart-paragraph">Noodles are a type of food made from unleavened dough which is either rolled flat and cut, stretched, or extruded, into long strips or strings. Noodles are a staple food in many cultures and made into a variety of shapes. The most common noodles are either those derived from Chinese cuisine or Italian cuisine.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-9 card">
      <img class="product-image" src="photos/gallery/lunch/Chicken.jpg" alt="5">  
          <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Chicken" name="Chicken" >Chicken-curry</h2>
          <p class="add-to-cart-paragraph">If there’s one Sri Lankan dish that has to be in your cooking repertoire let it be this chicken curry recipe. Called Kukul mas curry in Sinhalese, this authentic chicken curry recipe is cooked in our household at least once a week- more if we have company. Or whenever I feel nostalgic about Sri Lanka. It is also a popular dish served in most homes and restaurants.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-9 card">
      <img class="product-image" src="photos/gallery/lunch/Dhal.webp" alt="6">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Dhal-curry" name="Dhal-curry" >Dhal-curry</h2>
          <p class="add-to-cart-paragraph">Dhal curry recipe is an authentic Sri Lankan recipe and can be cooked in under 30 minutes.The dhal recipe is a popular and regular vegetarian side dish in most homes and restaurants.This Sri Lankan lentil curry is also one of the easiest vegan comfort foods you can cook in under 30 minutes, some of us have no problem eating it.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-9 card">
      <img class="product-image" src="photos/gallery/lunch/Green beans.jpg" alt="7">  
          <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Greenbeans" name="Greenbeans" >Green beans</h2>
          <p class="add-to-cart-paragraph">This classic village style Sri Lankan green bean curry is definitely one of my favorite ways of eating green beans. Even though the green beans lose the bright green color, they become so flavorful and soft with longer cooking. A dish that reminds me of delicious village style food we get to eat when we visit my grandma who still lives in a beautiful village in Sri Lanka..</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-9 card">
      <img class="product-image" src="photos/gallery/lunch/Mushroom.jpg" alt="8">  
          <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Mushroom" name="Mushroom" >Mushroom</h2>
          <p class="add-to-cart-paragraph">In Sri Lanka Oyster mushroom is so much popular. Therefore this is a spicy Oyster mushroom stir fry recipe which allows you to add these vegetarian proteins for your meal. Called as ‘Hathu’ in Sinhalese, mushrooms are a great vegetarian protein that you can add to your lunch.There is a difference in taste. It is flavourful!</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
  </div>  
  </section>

<section id="dinner" class="dinner" method="post">
    <center><h4 class="ourfoodssectiontype">Dinner Foods</h4></center>
    <div class="items-containeradd">
        <div class="card-2 card">
      <img class="product-image" src="photos/gallery/dinner/friderice.jpg" alt="1">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="friderice" name="friderice" >Fride Rice</h2>
          <p class="add-to-cart-paragraph">Fried rice is a traditional Chinese preparation of cooked rice, vegetables, protein, soy sauce, and aromatics. The ingredients are stir-fried in a large pan or wok for even flavor distribution. An ideal use for leftovers, fried rice is quick, customizable, and incredibly simple to put together with whatever is in your fridge.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="photos/gallery/dinner/koththu.jpg" alt="2">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Koththu" name="Koththu" >Koththu</h2>
           <p class="add-to-cart-paragraph">Kottu roti, alternatively spelled kothu roti, is a Sri Lankan dish consisting of chopped roti, a meat curry dish of choice (such as beef, mutton, seafood, chicken, or pork), along with scrambled eggs, onions, and chillies. A variation of the dish is found in the south Indian states of Tamil Nadu and Kerala, known as kothu parotta.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="photos/gallery/dinner/bread.jpg" alt="3">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="bread" name="bread" >Bread</h2>
           <p class="add-to-cart-paragraph">Unfortunately for breakfast lovers, both the croissant and the English muffin at Subway contain animal products. But all is not lost—in fact, most of the sandwich breads and wraps at Subway are totally vegan!9-Grain Wheat Bread,Hearty Italian Bread,Italian (White) Bread,Roasted Garlic Bread,Sourdough Bread
</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-5 card">
      <img class="product-image" src="photos/gallery/dinner/Chicken-Roll.jpg" alt="4">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Chicken-Roll" name="Chicken-Roll" >Chicken-Roll</h2>
           <p class="add-to-cart-paragraph">It can be bought frozen as well as ready to go.   The delicious chicken filling is rolled into the roll Patti and is fried till crisp.   It is best served at gatherings alongside some cola.Chicken mince and spices encased in crispy pastry to make delicious spring rolls are brilliant all year round. </p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-7 card">
      <img class="product-image" src="photos/gallery/dinner/PotatoPancakes.jpg" alt="6">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="PotatoPancakes" name="PotatoPancakes" >Potato Pancakes</h2>
           <p class="add-to-cart-paragraph">This recipe for potato pancakes falls into that wondrous category of dishes you can whip up at any time of day, any day of the year, and for virtually any occasion. More like hash browns than the style of pancake made using leftover mashed potatoes, the primary ingredient here is uncooked shredded potato</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-6 card">
      <img class="product-image" src="photos/gallery/dinner/chopsuey.jpg" alt="5">  
          <span class="product-price" id="$15" name="$15">$15</span>
          <h2 class="productName" id="Chop suey" name="Chop suey" >Chop suey</h2>
           <p class="add-to-cart-paragraph">There was a time when Chop Suey was synonymous with Chinese food, and neon-lit signs towered over Main streets across the country. Despite being an early ambassador for Chinese cuisine in the US, Chop Suey was most likely created in America. With a history stretching back over 150 years in this country, </p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-8 card">
      <img class="product-image" src="photos/gallery/dinner/Noodles.jpg" alt="7">  
          <span class="product-price" id="$11" name="$11">$11</span>
          <h2 class="productName" id="Noodles" name="Noodles" >Noodles</h2>
          <p class="add-to-cart-paragraph">Noodles are a type of food made from unleavened dough which is either rolled flat and cut, stretched, or extruded, into long strips or strings. Noodles are a staple food in many cultures and made into a variety of shapes. The most common noodles are either those derived from Chinese cuisine or Italian cuisine.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
        <!-- Add more dinner items here -->
    </div>
</section>




<section id="drinks" class="drinks" method="post">
     <center><h4 class="ourfoodssectiontype">OurDrinks</h4></center>
       <div class="items-containeradd">

    <div class="card-2 card">
      <img class="product-image" src="photos/drink/10.jpg" alt="1">
      <span class="product-price" id="$5" name="$10">$5</span>
          <h2 class="productName" id="PassionFruit" name="PassionFruit" >Passion Fruit Juice</h2>
          <p class="add-to-cart-paragraph">Fresh Passion Fruit Juice is so yummy!So Refreshing. Ideal mix for Cocktails and Mocktails and Mixed fruity Drinks. Eg:Passion Margarita, Passion Mojito </p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-3 card">
      <img class="product-image" src="photos/drink/2.jpg" alt="2">
        <span class="product-price" id="$3" name="$3">$3</span>
          <h2 class="productName" id="King coconut" name="King coconut" >King coconut</h2>
          <p class="add-to-cart-paragraph">The king coconuts, locally called ‘thambili’ are a bright-orange coloured variety of coconuts which are indigenous to Sri Lanka.This is the favourite beverage of the Sri Lankans</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-4 card">
      <img class="product-image" src="photos/drink/Falooda.jpg" alt="3">
        <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Falooda" name="Falooda" >Falooda</h2>
          <p class="add-to-cart-paragraph">Watermelon juice couldn’t be easier to extract. You don’t need a fancy-schmancy juicer, just a blenderScoop the watermelon into the blender, blend for about thirty seconds.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-6 card">
      <img class="product-image" src="photos/drink/watermolen.jpg" alt="4">
         <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Watermelon" name="Watermelon" >Watermelon</h2>
          <p class="add-to-cart-paragraph">Watermelon juice couldn’t be easier to extract. You don’t need a fancy-schmancy juicer, just a blenderScoop the watermelon into the blender, blend for about thirty seconds.</p><button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-6 card">
      <img class="product-image" src="photos/drink/Tea.jpg" alt="5">
      <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Tea" name="Tea" >Tea</h2>
          <p class="add-to-cart-paragraph">Sri Lanka was formerly a British crown colony known as Ceylon, a name it kept for nearly a quarter-century after independence. Green and lushly fertile, the island republic of Sri Lanka lies in the Indian Ocean, just below the southeastern tip of India.</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
    <div class="card-7 card">
      <img class="product-image" src="photos/drink/cappuccino.jpg" alt="6">
      <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="cappuccino" name="cappuccino" >cappuccino</h2>
          <p class="add-to-cart-paragraph">A cappuccino is an espresso-based coffee drink that is traditionally prepared with steamed milk including a layer of milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or cocoa powder</p>
            <button class="add-to-cart">Add to cart</button>
    </div>
      <div class="card-7 card">
      <img class="product-image" src="photos/drink/Apple.jpg" alt="7">
      <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Apple" name="Apple" >Apple</h2>
          <p class="add-to-cart-paragraph">Apple juice is a simple and delicious drink that can easily be made at home. We’ll walk you through the best ways to prepare it on your stovetop, in a blender, and even in a juicer, if you have one. You can enjoy a fresh glass of apple juice with tools lying around your kitchen.</p><button class="add-to-cart">Add to cart</button>
    </div>
       <div class="card-7 card">
      <img class="product-image" src="photos/drink/lemon.jpg" alt="8">
      <span class="product-price" id="$10" name="$10">$10</span>
          <h2 class="productName" id="Lemon" name="Lemon" >Lemon</h2>
          <p class="add-to-cart-paragraph">This vitamin C-rich juice is not just beneficial for your body, but it is also used to clean and freshen your house. It can be counted on to remove stains from your clothes and your teeth! lemon concentrate diluted with water, and usually contains preservatives</p><button class="add-to-cart">Add to cart</button>
    </div>
  </div>  
</section>

<section id="icecream" class="icecream" method="post">
    <center><h4 class="ourfoodssectiontype">Dinner Foods</h4></center>
    <div class="items-containeradd">
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/dessert/brown-chocolate-ice-cream.webp" alt="1">
            <span class="product-price" id="$10" name="$10">$10</span>
            <h2 class="productName" id="Gelato" name="Gelato" >Gelato</h2>
            <p class="add-to-cart-paragraph">Unlike American ice cream, gelato—a frozen dessert from Italy—is made with whole milk rather than cream and contains no eggs. As a result, this slow-churned treat takes on a denser, almost stretchy consistency. Gelato is available in a wide range of flavors, but some popular picks are cream, cioccolato (chocolate), stracciatella (vanilla with chocolate flecks) and pistacchio (pistachio).</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-3 card">
            <img class="product-image" src="photos/gallery/dessert/dessert.webp" alt="2">
            <span class="product-price" id="$12" name="$12">$12</span>
            <h2 class="productName" id="Kulfi" name="Kulfi" >Kulfi</h2>
            <p class="add-to-cart-paragraph">This traditional Indian ice cream is made by slowly heating sweetened milk until the sugar caramelizes and the milk condenses; the mixture is then frozen in cone-shaped molds without first being whipped or churned. As a result, kulfi is denser and creamier than American ice cream, with a custard-like quality that lends itself well to being served on a stick. Kulfi is frequently flavored with aromatics like cardamom.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-6 card">
            <img class="product-image" src="photos/gallery/dessert/rollors.webp" alt="5">
            <span class="product-price" id="$7" name="$7">$7</span>
            <h2 class="productName" id="RolledIceCream" name="RolledIceCream" >Rolled Ice Cream</h2>
            <p class="add-to-cart-paragraph">This type of ice cream hails from Thailand and is a popular street food throughout Southeast Asia. Here, the standard ingredients (milk, cream, sugar) are heated, aerated and rapidly cooled to produce Swiss roll-style ribbons of ice cream that can be served upright in a cup and finished with a wide variety of toppings. The process is fascinating to watch and the finished product tastes as good as it looks.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-5 card">
            <img class="product-image" src="photos/gallery/dessert/Soft Serve.webp" alt="4">
            <span class="product-price" id="$6" name="$6">$6</span>
            <h2 class="productName" id="SoftServe" name="SoftServe" >Soft Serve</h2>
            <p class="add-to-cart-paragraph">You won’t find this one in the frozen foods section of the grocery store, but wherever there’s a fair, carnival or ice cream truck, you’ll find folks lining up for soft serve. This type of ice cream is a rapidly churned blend of milk and sugar (no eggs) with a light and airy texture, perfect for swirling into a cone or cup—just be sure to make short work of it, because it will melt faster than ice cream.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
         <div class="card-4 card">
            <img class="product-image" src="photos/gallery/dessert/strawberry-ice-cream.webp" alt="3">
            <span class="product-price" id="$8" name="$8">$8</span>
            <h2 class="productName" id="Sherbet" name="Sherbet" >Sherbet</h2>
            <p class="add-to-cart-paragraph">Sherbet is a frozen treat made from fruit purée, plus a scant amount of dairy. Although sherbet is always made with some form of dairy—be it milk, cream or even buttermilk—the resulting dessert is distinct from ice cream in that it contains only 1 to 2 percent milkfat, as compared to the 10 percent milkfat found in the latter.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-8 card">
            <img class="product-image" src="photos/gallery/dessert/Snow Cream.webp" alt="7">
            <span class="product-price" id="$5" name="$5">$5</span>
            <h2 class="productName" id="SnowCream" name="SnowCream" >Snow Cream</h2>
            <p class="add-to-cart-paragraph">Head to Taiwan to indulge in this pillowy mountain of creamy deliciousness—a pile of fluffy and delicate strips of ice cream, shaved off a massive block of the stuff. The most popular toppings, which include sweetened condensed milk, fresh fruit and chocolate, are just the icing on the snow cream cake.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-7 card">
            <img class="product-image" src="photos/gallery/dessert/Dondurma.webp" alt="6">
            <span class="product-price" id="$9" name="$9">$9</span>
            <h2 class="productName" id="Dondurma" name="Dondurma" >Dondurma</h2>
            <p class="add-to-cart-paragraph">Divinely creamy and dense enough you could eat it with a fork and knife, this Turkish treat is unlike any kind of ice cream you’ve ever tasted. Mastic—an (edible) organic glue made from the resin of the mastic tree—is the secret ingredient responsible for the elastic, taffy-like consistency of dondurma.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        
    </div>
</section>

<section id="fruits" class="fruits" method="post">
    <center><h4 class="ourfoodssectiontype">Exotic Fruits</h4></center>
    <div class="items-containeradd">
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Rambutan.webp" alt="1">
            <span class="product-price" id="$5" name="$5">$5</span>
            <h2 class="productName" id="Rambutan" name="Rambutan" >Rambutan</h2>
            <p class="add-to-cart-paragraph">Although it looks like a kids’ toy from the ‘90s, the rambutan is actually edible. To open a rambutan, cup it in your hands and find a groove between the spikes with your thumbs. Push downwards and then outwards to prise it apart. Once through the fuzzy outer shell you’ll find a glistening lychee-like fruit. Pop it whole in your mouth but make sure you don’t eat the seed.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Wood Apple.webp" alt="2">
            <span class="product-price" id="$8" name="$8">$8</span>
            <h2 class="productName" id="WoodApple" name="WoodApple" >Wood Apple</h2>
           <p class="add-to-cart-paragraph">This singularly odd fruit consists of a hard outer shell and a soft, seeded centre. The best way to break one open is by smashing the shell against the edge of a surface – we recommend a garden wall. The wood Apple is an acquired taste and the texture is a bit gungy and gristly, but it’s definitely worth trying. Wood Apple juices and jams are very tasty.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Dragonfruit.webp" alt="3">
            <span class="product-price" id="$7" name="$7">$7</span>
            <h2 class="productName" id="Dragonfruit" name="Dragonfruit" >Dragonfruit</h2>
            <p class="add-to-cart-paragraph">The taste of the dragonfruit, which comes from the cactus family, is much less distinctive than the colour. The skin is inedible, but once you cut through the pink outer layer you’ll reach a soft, white seeded part, which has a subtly sweet taste. It has a whole load of health benefits, and can be used to soothe sunburn and treat chemically dyed hair.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Naminam.webp" alt="4">
            <span class="product-price" id="$6" name="$6">$6</span>
            <h2 class="productName" id="Naminam" name="Naminam" >Naminam</h2>
            <p class="add-to-cart-paragraph">Naminams look more like fungus than fruit, and hang off the bark of the naminam tree in a similarly mouldy fashion. But the wrinkly fruits are much tastier than you might expect; giving off a sharp, sour tang. Perhaps because of their odd appearance markets don’t tend to stock these – you’ll be more likely to find them on the roadside or in someone’s yard.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Uguressa.webp" alt="5">
            <span class="product-price" id="$4" name="$4">$4</span>
            <h2 class="productName" id="Uguressa" name="Uguressa" >Uguressa</h2>
            <p class="add-to-cart-paragraph">The special thing about these berries is you need to massage them to bring out the sweetness.Uguressa berries have antioxidant qualities and are used in traditional ayurvedic medicines. They can be found in markets in January and February.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Anoda.webp" alt="6">
            <span class="product-price" id="$5" name="$5">$5</span>
            <h2 class="productName" id="Anoda" name="Anoda" >Anoda</h2>
            <p class="add-to-cart-paragraph">TSri Lanka is particularly famous for sweet, soft, custardy custard apples. Their hard knobbly skin hides the soft sweet pulp inside, this can be eaten with a spoon, chilled. There are four varieties of custard apple grown in Sri Lanka and they each have a unique flavour.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
        <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Mangosteen.webp" alt="7">
            <span class="product-price" id="$6" name="$6">$6</span>
            <h2 class="productName" id="Mangosteen" name="Mangosteen" >Mangosteen</h2>
            <p class="add-to-cart-paragraph">The mangosteen is a segmented fruit contained in a purple rind. It’s known as one of the tastiest Sri Lankan fruits. It has immune system-boosting qualities, and is used to make health drinks, tablets and powders. The rind can also be steeped in water to make tea.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>
         <div class="card-2 card">
            <img class="product-image" src="photos/gallery/fruits/Cashew Apple.webp" alt="8">
            <span class="product-price" id="$4" name="$4">$4</span>
            <h2 class="productName" id="CashewApple" name="CashewApple" >Cashew Apple</h2>
            <p class="add-to-cart-paragraph">The cashew nut is actually a seed. It grows underneath the cashew apple – effectively the stem of the nut – that hangs from the tree. The relatively unknown cashew apple contains five times more vitamin C than an orange, but is easily damaged so harder to export.</p>
            <button class="add-to-cart">Add to cart</button>
        </div>

    </div>
</section>


 </main>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h1about">About Us</h1>
            </div>
            <div class="col-md-3">
                <h2 class="footer-heading">Web Pages</h2>
                <ul class="quick-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="menu.html">Menu</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="book_table.html">Book a Table</a></li>
                </ul>
            </div>
        </div>
    </div>
           <div class="footer-bottom">
                <p>&copy; 2024 REMEKVIN. All rights reserved.</p>
            </div>
</footer>
<script  src="js/script.js"></script>


<!-- This is used to 9 buttons click then go to the section by section -->
  <script>
    function goToSection(sectionId) {
        var section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>   


<!-- This is used to validation -->
<script>
    function purchaseBtnClicked() {

       var cartItems = document.getElementsByClassName('product-row');
  var validationMessage = document.getElementById('validation-message');
  
  if (cartItems.length === 0) {
    alert('Your cart is empty. Please select items before proceeding to checkout.');
    window.location.href = 'shopping.php';
  }
  
      var username = document.getElementById('username').value;
      var phonenumber = document.getElementById('phonenumber').value;
      var address = document.getElementById('address').value;
      var validationMessage = document.getElementById('validation-message');

      if (!username || !phonenumber || !address) {
        validationMessage.style.display = 'block';
      } else {
        validationMessage.style.display = 'none';
        alert('Thank you for your purchase');
        
        // Close the cart modal
        document.querySelector('.cart-modal-overlay').style.transform = 'translateX(-100%)';
        
        // Clear the cart items
        var cartItems = document.getElementsByClassName('product-rows')[0];
        while (cartItems.hasChildNodes()) {
          cartItems.removeChild(cartItems.firstChild);
        }

        // Optionally, submit the form if needed
         document.getElementById('usersaccout').submit();
      }
    }
  </script>

</body>

</html>
