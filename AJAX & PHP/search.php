<!-- Sean Farrell
7/5/2025
CPSC 3750 Wooster
ASSIGNMENT: AJAX & PHP
DESCRIPTION: showcases use of ajax and php to search state capitals 
.php file that stores and displays state capitals.-->
<?php
  header("Content-type: text/xml");
  $states = array(
    "Alabama" => "Montgomery",
    "Alaska" => "Juneau",
    "Arizona" => "Phoenix",
    "Arkansas" => "Little Rock",
    "California" => "Sacramento",
    "Colorado" => "Denver",
    "Connecticut" => "Hartford",
    "Delaware" => "Dover",
    "Florida" => "Tallahassee",
    "Georgia" => "Atlanta",
    "Hawaii" => "Honolulu",
    "Idaho" => "Boise",
    "Illinois" => "Springfield",
    "Indiana" => "Indianapolis",
    "Iowa" => "Des Moines",
    "Kansas" => "Topeka",
    "Kentucky" => "Frankfort",
    "Louisiana" => "Baton Rouge",
    "Maine" => "Augusta",
    "Maryland" => "Annapolis",
    "Massachusetts" => "Boston",
    "Michigan" => "Lansing",
    "Minnesota" => "St. Paul",
    "Mississippi" => "Jackson",
    "Missouri" => "Jefferson City",
    "Montana" => "Helena",
    "Nebraska" => "Lincoln",
    "Nevada" => "Carson City",
    "New Hampshire" => "Concord",
    "New Jersey" => "Trenton",
    "New Mexico" => "Santa Fe",
    "New York" => "Albany",
    "North Carolina" => "Raleigh",
    "North Dakota" => "Bismarck",
    "Ohio" => "Columbus",
    "Oklahoma" => "Oklahoma City",
    "Oregon" => "Salem",
    "Pennsylvania" => "Harrisburg",
    "Rhode Island" => "Providence",
    "South Carolina" => "Columbia",
    "South Dakota" => "Pierre",
    "Tennessee" => "Nashville",
    "Texas" => "Austin",
    "Utah" => "Salt Lake City",
    "Vermont" => "Montpelier",
    "Virginia" => "Richmond",
    "Washington" => "Olympia",
    "West Virginia" => "Charleston",
    "Wisconsin" => "Madison",
    "Wyoming" => "Cheyenne"
  );

  echo "<?xml version=\"1.0\" ?>\n";
  echo "<states>\n";
  
  $query = isset($_GET['query']) ? $_GET['query'] : '';
  
  foreach ($states as $state => $capital) {
    if (stristr($state, $query)) {
      echo "<state>\n";
      echo "  <name>" . htmlspecialchars($state) . "</name>\n";
      echo "  <capital>" . htmlspecialchars($capital) . "</capital>\n";
      echo "</state>\n";
    }
  }
  
  echo "</states>\n";
?>