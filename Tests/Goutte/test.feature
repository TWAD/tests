Feature: testing link a row in Restaurant to an itinerary
    In order to add a row in Restaurant
    As a website user connected
    I need to be able to find an itinerary and link to it

Background:
        Given I am on "/"
        
@test_1
Scenario:
        Given I go to "calcul/2/1"
        And I should see "3"
		
@test_2
Scenario:
        Given I go to "calcul/2/7"
        And I should see "9"