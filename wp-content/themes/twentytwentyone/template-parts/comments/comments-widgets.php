<?php

/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
if (is_active_sidebar('comments-1')): ?>
    <div class="container">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-9">
                <div class="media comment-box">
                    <div class="media-left">
                        <a href="#">
                            <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the
                            industry's standard dummy text ever since the 1500s...</p>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="img-responsive user-photo"
                                        src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Jane Doe</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the
                                    industry's standard dummy text ever since the 1500s...</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="img-responsive user-photo"
                                        src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">John Doe</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the
                                    industry's standard dummy text ever since the 1500s...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php
endif;



