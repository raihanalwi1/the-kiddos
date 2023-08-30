
<style>
    .review-box {
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .review-box img {
        max-width: 100px;
        max-height: 100px;
        margin-right: 10px;
    }

    .review-box .rating {
        color: #f39c12;
    }

    .review-box .author {
        font-weight: bold;
    }

    .review-box .date {
        color: #aaa;
    }

    .review-box p {
        margin-top: 5px;
    }
</style>
<br/>
    <div class="container">
       
        <?php foreach ($reviews as $review) : ?>
        <div class="review-box">
            
            <!-- <img src="product-image.jpg" alt="Product Image"> -->
            <div class="rating">            <?php echo str_repeat('★', $review['rating']); ?></div>
            <div class="author"><?= $review['nama_review']?></div>
            <div class="date"><?= $review['tanggal_review']?></div>
            <p><?php echo $review['comment']; ?></p>
        </div>
<?php endforeach; ?>

       
        <!-- Add more review boxes here -->
    </div>