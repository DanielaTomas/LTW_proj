<?php

declare(strict_types=1); ?>
<?php function drawDish(int $restaurantId, string $restaurantName, Dish $dish)
{ ?>
  <h2><a href="restaurant.php?id=<?= $restaurantId ?>"><?= $restaurantName ?></a></h2>
  <section id="dishes" data-id=<?=$dish->id?>>
    <img src="<?=$dish->image?>">
    <h3><?= $dish->name ?></h3>
    <p><?= $dish->description ?></p>
    <p><span class="price"><?=$dish->price?></span></p>
  </section>
  <?php drawAddToCart() ?>
<?php } ?>

<?php function drawAddToCart()
{ ?>
<section id="dishOrder">
  <form action="../Pages/order.php" method="post">
    <input class="quantity" name="quant" type="number" value="1" min="1" max="100" step="1">
    <button type="submit" class="addtocart">Add to Cart</button>
  </form>
</section>
<?php } ?>