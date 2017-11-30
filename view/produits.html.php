<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <title>Panier</title>
  </head>

  <body>

    <table>
      <thead>
          <tr>

            <th>Nom du produit</th>

            <th>Prix</th>

            <th>Quantité</th>

            <th></th>

          </tr>
      </thead>

      <tbody>
        <?php
        //nom de la variable dans le model $produits
          foreach ($produits as $produit) {
            # code...
          ?>

          <tr>
              <td>
                <?php echo $produit["name"];?>
              </td>

              <td>
                <?php echo $produit["price"];?>
              </td>

              <td>
                <?php echo $produit["nb_stock"];?>
              </td>

              <td>
                <form action="" method="post">
                  <input type="hidden" name="article_id" value="<?php echo $produit["id"];?>">
                  <input type="submit" name="ajouter_panier" value="Ajouter au panier">


               </form>
              </td>

          </tr>

            <?php
          }

        ?>
      </tbody>
    </table>


    <a href='controlers/panier.php'>Voir mon panier</a>

  </body>


</html>
