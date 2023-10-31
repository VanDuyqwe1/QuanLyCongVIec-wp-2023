<?php

/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

global $wpdb;

// Tên bảng wp_posts
$table_name = $wpdb->prefix . 'comments';

// Câu truy vấn SQL để lấy dữ liệu từ cột post_name
$query = "SELECT comment_content,comment_author,comment_author_url FROM $table_name LIMIT 2";


// Thực thi truy vấn và lấy kết quả
$results = $wpdb->get_results($query);

// Loop qua kết quả để hiển thị nội dung
foreach ($results as $result) {
    $post_comment = $result->comment_content;
    $comment_author = $result->comment_author;
}
if (is_active_sidebar('comments-1')): ?>
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-9">
                <div class="p-comments-background">
                    <div class="media p-comment-box">
                        <div class="p-media-left">
                            <a href="#">
                                <img class="img-responsive user-photo"
                                    src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            </a>
                        </div>
                        <div class="p-media-body">
                            <h4 class="p-media-heading">
                                <?php echo $comment_author ?>
                            </h4>
                            <p>
                                <?php echo $post_comment ?>
                            </p>
                            <?php foreach ($results as $result) {
                                $post_content = $result->comment_content;
                                $comment_author = $result->comment_author;
                                ?>
                                <div class="media">
                                    <div class="p-media-left">
                                        <a href="#">
                                            <img class="img-responsive user-photo"
                                                src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                        </a>
                                    </div>
                                    <div class="p-media-body">
                                        <h4 class="p-media-heading">
                                            <?php echo $comment_author ?>
                                        </h4>
                                        <p>
                                            <?php echo $post_content ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
<?php endif; ?>



<!-- // <div class="media">
    // <div class="p-media-left">
        // <a href="#">
            // <img class="img-responsive user-photo" // src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
            // </a>
        // </div>
    // <div class="p-media-body">
        // <h4 class="p-media-heading">John Doe</h4>
        // <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            // has been the
            // industry's standard dummy text ever since the 1500s...</p>
        // </div>
    // </div> -->