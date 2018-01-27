<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Application de Test</h1>
      <p class="lead">Nous avont mis en place une page factice simulant l'affichage de plusieur produit et une commande. Les pages Test unitaire et Test d'intégration sont les vue décrivant les test effectuées au sein de cette application.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <?php 
        foreach ($produits as $unProduit):
        ?>


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> <?= $unProduit->intituler ?> </h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$<?= $unProduit->prix ?> <small class="text-muted">/ mo</small></h1>
            <p> <?= $unProduit->description ?> </p>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
          </div>
        </div>

        <?php 
           endforeach;
        ?>

      </div>