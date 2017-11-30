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

            <th></th>

            <th>En stock</th>

            <th></th>

          </tr>
      </thead>

      <tbody>
        <?php

        $somme_totale = 0;

        //nom de la variable dans le model $produits
          foreach ($produits as $produit) {
            $somme_produit = $produit["price"]*$produit["nb"];
            $somme_totale = $somme_totale + $somme_produit;
          ?>

          <tr>
              <td>
                <?php echo $produit["name"];?>
              </td>

              <td>
                <?php echo $produit["price"];?>
              </td>

              <td>
                <?php echo $produit["nb"];?>
              </td>
                <?php
                  if ($produit["nb"] < $produit["nb_stock"]) {
                ?>
              <td>
                <form method="post">
                  <input type="hidden" name="article_id" value="<?php echo $produit["id"];?>">
                  <input type="submit" name="add_one" value="+">
              </form>
              </td>
              <?php
            } else {
              ?>
              <td></td>

             <?php
            }
               ?>

                <?php
                  if ($produit["nb"] > 1) {
                ?>
              <td>
                <form method="post">
                  <input type="hidden" name="article_id" value="<?php echo $produit["id"];?>">
                  <input type="submit" name="sub_one" value="-">
              </form>
              </td>

                <?php
                  }
                ?>

              <td>
                <?php echo $produit["nb_stock"];?>
              </td>

              <td>
                <form action="" method="post">
                  <input type="hidden" name="article_id" value="<?php echo $produit["id"];?>">
                  <input type="submit" name="supprimer_du_panier" value="Supprimer du panier">
               </form>
              </td>

          </tr>

            <?php
          }

        ?>
      </tbody>
    </table>

    <p>Somme totale à payer :  <?php echo $somme_totale ?></p>

    <form method="post">
      <input type="submit" name="Supprimer_le_panier" value="Supprimer le panier">
    </form>


    <a href='../index.php'>Retour à la liste d'articles.</a>

  </body>


</html>
