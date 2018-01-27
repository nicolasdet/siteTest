

	@core
	Feature: basic
		permet de vérifier que le panier fonctionne


		Scenario: Homepage
			Given I am on the homepage
			Then I should see "Application de Test"

		@javascript
		Scenario: show product		
			Given I am on the homepage
			Then I should see "Application de Test"
			When I press "button-Professionnel"
			And I Wait for 1 segonds
			Then I should see "Commander ce produit"
			Then I should see "Professionnel"

