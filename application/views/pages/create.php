<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Application de Test</h1>
      <p class="lead">Nous avont mis en place une page factice simulant l'affichage de plusieur produit et une commande. Les pages Test unitaire et Test d'intégration sont les vue décrivant les test effectuées au sein de cette application.</p>
    </div>


    <div class="container">
      <div class="card-deck mb-3 text-center">


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"> crée un compte </h4>
          </div>
          <div class="card-body">
            <form method="POST" action="/create/new">
                
                <input type="test" name="login" placeholder="login" />
                <input type="password" name="password" placeholder="mdp">

                <input id="valider_inscription" type="submit" name="form" value="valider">

            </form>
            <?php
            echo Msg::showMessageOnce();
            ?>
          </div>
        </div>


      </div>