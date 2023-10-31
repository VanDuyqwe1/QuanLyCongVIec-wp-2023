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
$table_name = $wpdb->prefix . 'posts';

// Câu truy vấn SQL để lấy dữ liệu từ cột post_name
$query = "SELECT post_title,id,post_parent FROM $table_name LIMIT 8";

// Thực thi truy vấn và lấy kết quả
$results = $wpdb->get_results($query);

// Loop qua kết quả để hiển thị nội dung

if (is_active_sidebar('archive-1')) : ?>
    <div class="container widget-title">
        <div class="box-news">
            <div class="box-news-left">
                <div>
                    <div class="row p-backround-archive">
                        <div class="col-12">
                            <div class="row">
                                <div class="wrapper">
                                    <div class="p-detail-archive">
                                        <h2 class="p-title-archive">Xem Nhiều</h2>
                                    </div>
                                    <div class="p-archive-box">
                                        <?php
                                        foreach ($results as $result) {
                                            $meta_value = $result->post_title;
                                            $id = $result->id;
                                            $post_parent = $result->post_parent;
                                        ?>
                                            <div class="p-box-archive"><span class="number-top-view">
                                                    <?php echo $id ?>
                                                </span>
                                                <h3 class="p-title">
                                                    <?php echo $meta_value ?> <svg class="p-font-icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                        <path d="M448 0H64C28.7 0 0 28.7 0 64v288c0 35.3 28.7 64 64 64h96v84c0 9.8 11.2 15.5 19.1 9.7L304 416h144c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64z" />
                                                    </svg> <a href="" class="p-number-archive"><?php echo $post_parent ?></a>
                                                </h3>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            <?php
        endif;
