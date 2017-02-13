## Application Spex
* _App will accept a word an capitalize the first letter_
  * **Input:** boats
  * **Expected Output:** Boats
* _App will accept multiple words and capitalize them all_
  * **Input:** boats will float
  * **Expected Output:** Boats Will Float
* _App will not captitalize conjunctions, articles, or prepositions_
  * **Input:** boats are the best on water and i love them
  * **Expected Output:** Boats Are the Best on Water and I Love Them
* _App will captitalize the first letter of the first word regardless of word type_
  * **Input:** on water there are boats
  * **Expected Output:** On Water There Are Boats
* _App will ignore input capitalization_
  * **Input:** oN WatEr tHerE arE Boats
  * **Expected Output:** On Water There Are Boats
* _App will ignore punctuation_
  * **Input:** boat on: a boat sTory
  * **Expected Output:** Boat on: a Boat Story
* _App will capitalize the second word in a hyphenated word_
  * **Input:** boaT-stORy: love in thE time of BoatS
  * **Expected Output:** Boat-Story: Love in the Time of Boats
