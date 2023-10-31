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
$query = "SELECT post_name FROM $table_name";

// Thực thi truy vấn và lấy kết quả
$results = $wpdb->get_results($query);

// Loop qua kết quả để hiển thị nội dung
foreach ($results as $result) {
    $post_name = $result->post_name;
    echo $post_name . "<br>";
}
if (is_active_sidebar('archive-1')): ?>
    <div class="container widget-title">
        <div class="box-news">
            <div class="box-news-left">

                <div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="wrapper">
                                    <div class="p-detail-archive">
                                        <h2 class="p-title-archive">Xem Nhiều</h2>
                                    </div>
                                    <div class="p-archive-box">
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>
                                        <div class="p-box-archive"><span class="number-top-view">2</span>
                                            <h3 class="p-title">Tướng Trung Quốc: Một số nước cố tình làm thế giới hỗn loạn
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="col-6 box-border box-border-right ">
                                    <div class="p-box-border">
                                        <li class="p-month-archive ">
                                            <span class="p-number">5</span><a href="#">Giáo sư Mỹ tìm lại mẹ ruột cho hai
                                                con
                                                gốc Việt</a>

                                        </li>
                                    </div>
                                    <div class="p-box-border">
                                        <li class="p-month-archive ">
                                            <span class="p-number">6</span><a href="#">Giáo sư Mỹ tìm lại mẹ ruột cho hai
                                                con
                                                gốc Việt</a>

                                        </li>
                                    </div>
                                    <div class="p-box-border">
                                        <li class="p-month-archive ">
                                            <span class="p-number">7</span><a href="#">Giáo sư Mỹ tìm lại mẹ ruột cho hai
                                                con
                                                gốc Việt</a>
                                        </li>
                                    </div>
                                    <div class="p-box-border">
                                        <li class="p-month-archive ">
                                            <span class="p-number">8</span><a href="#">Giáo sư Mỹ tìm lại mẹ ruột cho hai
                                                con
                                                gốc Việt</a>

                                        </li>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>


                <?php
endif;