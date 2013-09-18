Feature: testing link a row in Restaurant to an itinerary
    In order to add a row in Restaurant
    As a website user connected
    I need to be able to find an itinerary and link to it

Background:
        Given I am on "/"
		
@test_1 @js
Scenario: cette div doit afficher 'Javascript dit hello world'
		Given I should see "Javascript dit hello world"

		
@test_2 @js
Scenario: en remplissant le formulaire ci dessus cette div doit afficher "hello {le nom qui a été entrée}"
		Given I should see an "#name" element
		And I fill in "name" with "maurice"
		And I should see an "#click-me" element
		Then I press "OK"
		And I should see "hello maurice"
		
@test_3
Scenario:
        Given I go to "calcul/2/1"
        And I should see "3"
		
@test_4
Scenario:
        Given I go to "calcul/2/1"
        And I should see "3"
		
@test_5
Scenario:
        Given I go to "calcul/2/7"
        And I should see "9"

@test_6
Scenario:
        Given I go to "hello/world"
        And I should see "hello world"