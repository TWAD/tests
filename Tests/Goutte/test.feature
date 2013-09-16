Feature: testing link a row in Restaurant to an itinerary
    In order to add a row in Restaurant
    As a website user connected
    I need to be able to find an itinerary and link to it

Background:
        #Given I am on "/"

@test
Scenario: 
        Given I go to "calcul/1/2"
        And I am on "calcul/1/2"
        And I should see "3"