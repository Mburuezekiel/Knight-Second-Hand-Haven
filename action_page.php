<?php
// Include database connection or any other necessary files

// Check if the form is submitted with a search query
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["search_query"])) {
    // Retrieve the search query from the form
    $search_query = $_POST["search_query"];

    // Perform search (This is a placeholder, replace it with your actual search logic)
    // Example: Search in a database table named 'products'
    $sql = "SELECT * FROM products WHERE item_name LIKE '%" . $search_query . "%'";
    $result = $link->query($sql);

    // Display search results
    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        while ($row = $result->fetch_assoc()) {
            // Display search result items (You can customize this as needed)
            echo "<p>Item Name: " . $row["item_name"] . "</p>";
            echo "<p>Description: " . $row["description"] . "</p>";
            echo "<hr>"; // Add a horizontal line between search results
        }
    } else {
        echo "No results found.";
    }
} else {
    // If the form is not submitted with a search query, redirect to an error page or homepage
    header("Location: shop.php");
    exit; // Make sure to exit after redirection
}
?>
