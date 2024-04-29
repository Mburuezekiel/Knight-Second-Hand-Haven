<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add meta tags, title, and links to CSS files -->
</head>
<body>
    <div class="container1">
        <!-- Header and navigation buttons -->
    </div>
    <div class="container mt-5">
        <?php if (!empty($items)): ?>
            <!-- Check if there are items to display -->
            <div class="row">
                <!-- Start a row for displaying items -->
                <?php foreach ($items as $item): ?>
                    <!-- Iterate through each item -->
                    <div class="col-md-4">
                        <!-- Each item occupies 4 columns on medium devices -->
                        <div class="card mb-4">
                            <!-- Card for each item -->
                            <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="<?php echo $item['item_name']; ?>">
                            <!-- Item image -->
                            <div class="card-body">
                                <!-- Card body -->
                                <h5 class="card-title"><?php echo $item['item_name']; ?></h5>
                                <!-- Item name -->
                                <p class="card-text">Price: Ksh <?php echo $item['price']; ?></p>
                                <!-- Item price -->
                                <p class="card-text">Remaining: <?php echo $item['quantity']; ?></p>
                                <!-- Quantity remaining -->
                                <p class="card-text">Status: <?php echo $item['status']; ?></p>
                                <!-- Item status -->
                                <p class="card-text">Description: <?php echo $item['description']; ?></p>
                                <!-- Item description -->
                                <p class="card-text">Location: <?php echo $item['location']; ?></p>
                                <!-- Item location -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No items sold yet.</p>
            <!-- Display a message if there are no items -->
        <?php endif; ?>
    </div>
</body>
</html>
