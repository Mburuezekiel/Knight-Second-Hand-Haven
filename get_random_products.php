<?php
// Include database connection
include 'database/conn.php';

// Fetch random product from the database
$sql = "SELECT * FROM products ORDER BY RAND() LIMIT 1"; // Limit changed to 1
$result = $link->query($sql);

// Check if there are any products
if ($result->num_rows > 0) {
    // Start ads container
    echo '<div class="ad-container">
            <div id="adsContent" class="alert alert-secondary alert-dismissible fade show ad-content" role="alert">
                <h4 class="alert-heading"></h4>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>';
    
    // Fetch the single product and display as an ad
    $row = $result->fetch_assoc();
    echo '<div class="card" style="max-width: 200px;"> <!-- Adjust max-width as needed -->
            <img src="' . $row['image'] . '" class="card-img-top" alt="' . $row['item_name'] . '">';
    // Check if description exceeds 20 words
    $descriptionWords = explode(' ', $row['description']);
    if (count($descriptionWords) > 20) {
        // Show only the item name
        echo '<div class="card-body">
                <h5 class="card-title">' . $row['item_name'] . '</h5>
                <a href="category.php?category=' . urlencode($row['category']) . '" class="btn btn-primary">Learn More</a>
              </div>';
    } else {
        // Show both item name and description
        echo '<div class="card-body">
                <h5 class="card-title">' . $row['item_name'] . '</h5>
                <p class="card-text">' . $row['description'] . '</p>
                <a href="category.php?category=' . urlencode($row['category']) . '" class="btn btn-primary">Learn More</a>
              </div>';
    }
    echo '</div>';
    
    // End ads container
    echo '</div></div>';
} else {
    // No products found
    echo '<div class="alert alert-warning" role="alert">No products found.</div>';
}

// Close database connection
$link->close();
?>

<script>
// Function to reload ads content
function reloadAdsContent() {
    // Reload ads content
    var adsContent = document.getElementById('adsContent');
    adsContent.innerHTML = '<h4 class="alert-heading"></h4><div class="spinner-border text-primary" role="status"><span class="sr-only">Loading...</span></div>';

    // Fetch ads content from server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                // Update ads content with fetched data
                adsContent.innerHTML = xhr.responseText;
            } else {
                // Display error message if unable to fetch ads content
                adsContent.innerHTML = '<div class="alert alert-danger" role="alert">Failed to load ads. Please try again later.</div>';
            }
        }
    };
    xhr.open('GET', 'get_random_products.php', true);
    xhr.send();
}

// Reload ads every 5 seconds
setInterval(reloadAdsContent, 20000); // 20000 milliseconds = 20 seconds
</script>
