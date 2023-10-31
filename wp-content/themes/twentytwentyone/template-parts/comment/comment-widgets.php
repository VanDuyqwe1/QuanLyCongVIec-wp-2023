<?php
get_template_part('template-parts/comments');

/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
if (is_user_logged_in()) {
    if (is_active_sidebar('comment-1')): ?>
        <div class="container">
            <section class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab"
                                aria-controls="posts" aria-selected="true">
                                Make a post
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            <div class="form-group">
                                <label class="sr-only" for="message">post</label>
                                <textarea class="form-control" id="message" rows="3"
                                    placeholder="What are you thinking..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Share</button>
                    </div>
                </div>
            </section>
        </div>
        <?php
    endif;
}


