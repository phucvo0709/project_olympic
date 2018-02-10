<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <div class="ui-block-title inline-items">
                            <div class="btn btn-control btn-control-small bg-yellow">
                                <svg class="olymp-trophy-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-trophy-icon'"></use></svg>
                            </div>
                            <h6 class="title">James’s Featured Video</h6>
                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <!-- Features Video -->

                    <div class="ui-block features-video">
                        <div class="video-player">
                            <img :src="'/img/video9.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>

                            <div class="video-content">
                                <div class="h4 title">Rock Garden Festival - Day 3</div>
                                <time class="published" datetime="2017-03-24T18:18">12:06</time>
                            </div>

                            <div class="overlay"></div>
                        </div>

                        <div class="features-video-content">

                            <article class="hentry post">

                                <div class="post__author author vcard inline-items">
                                    <img :src="'/img/author-page.jpg'" alt="author">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                2 hours ago
                                            </time>
                                        </div>
                                    </div>

                                    <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg>
                                        <ul class="more-dropdown">
                                            <li>
                                                <a href="#">Edit Post</a>
                                            </li>
                                            <li>
                                                <a href="#">Delete Post</a>
                                            </li>
                                            <li>
                                                <a href="#">Turn Off Notifications</a>
                                            </li>
                                            <li>
                                                <a href="#">Select as Featured</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                                <p>Last Saturday we went with <a href="#"> Mathilda Brinker</a> to the “Rock Garden Festival” and had a blast! Here’s a small video of one of us in the crowd.</p>

                                <div class="post-additional-info inline-items">

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-heart-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-heart-icon'"></use></svg>
                                        <span>14</span>
                                    </a>

                                    <div class="comments-shared">
                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-speech-balloon-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon'"></use></svg>
                                            <span>19</span>
                                        </a>

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-share-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-share-icon'"></use></svg>
                                            <span>27</span>
                                        </a>
                                    </div>

                                </div>

                                <div class="control-block-button post-control-button">

                                    <a href="#" class="btn btn-control">
                                        <svg class="olymp-like-post-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-like-post-icon'"></use></svg>
                                    </a>

                                    <a href="#" class="btn btn-control">
                                        <svg class="olymp-comments-post-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-comments-post-icon'"></use></svg>
                                    </a>

                                    <a href="#" class="btn btn-control">
                                        <svg class="olymp-share-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-share-icon'"></use></svg>
                                    </a>

                                </div>

                            </article>

                            <div class="mCustomScrollbar" data-mcs-theme="dark">

                                <ul class="comments-list">
                                    <li>
                                        <div class="post__author author vcard inline-items">
                                            <img :src="'/img/avatar48-sm.jpg'" alt="author">

                                            <div class="author-date">
                                                <a class="h6 post__author-name fn" href="#">Marina Valentine</a>
                                                <div class="post__date">
                                                    <time class="published" datetime="2017-03-24T18:18">
                                                        46 mins ago
                                                    </time>
                                                </div>
                                            </div>

                                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></a>

                                        </div>

                                        <p>I had a great time too!! We should do it again!</p>

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-heart-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-heart-icon'"></use></svg>
                                            <span>8</span>
                                        </a>
                                        <a href="#" class="reply">Reply</a>
                                    </li>

                                    <li>
                                        <div class="post__author author vcard inline-items">
                                            <img :src="'/img/avatar4-sm.jpg'" alt="author">

                                            <div class="author-date">
                                                <a class="h6 post__author-name fn" href="#">Chris Greyson</a>
                                                <div class="post__date">
                                                    <time class="published" datetime="2017-03-24T18:18">
                                                        1 hour ago
                                                    </time>
                                                </div>
                                            </div>

                                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></a>

                                        </div>

                                        <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-heart-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-heart-icon'"></use></svg>
                                            <span>7</span>
                                        </a>
                                        <a href="#" class="reply">Reply</a>

                                    </li>
                                </ul>

                            </div>

                            <form class="comment-form inline-items">

                                <div class="post__author author vcard inline-items">
                                    <img :src="'/img/avatar73-sm.jpg'" alt="author">

                                    <div class="form-group with-icon-right ">
                                        <textarea class="form-control" placeholder="Press Enter to post..."></textarea>
                                        <div class="add-options-message">
                                            <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                                <svg class="olymp-camera-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-camera-icon'"></use></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>

                    <!-- ... end Features Video -->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <div class="ui-block-title">
                            <div class="h6 title">James’s Videos</div>

                            <div class="align-right">
                                <a href="#" class="btn btn-primary btn-md-2" data-toggle="modal" data-target="#update-header-photo">Upload Video  +</a>
                            </div>

                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video10.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>
                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Rock Garden Festival - Day 3</a>
                            <time class="published" datetime="2017-03-24T18:18">18:44</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video11.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Rock Garden Festival - Day 2</a>
                            <time class="published" datetime="2017-03-24T18:18">13:19</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video12.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Rock Garden Festival - Day 1</a>
                            <time class="published" datetime="2017-03-24T18:18">15:47</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video13.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">The Best Burgers in the State!</a>
                            <time class="published" datetime="2017-03-24T18:18">0:23</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video14.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Touring Manhattan Parks</a>
                            <time class="published" datetime="2017-03-24T18:18">12:08</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video15.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Sandwich from Mario’s</a>
                            <time class="published" datetime="2017-03-24T18:18">5:54</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video16.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Into the Amazon Jungle</a>
                            <time class="published" datetime="2017-03-24T18:18">24:36</time>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">

                    <div class="ui-block video-item">
                        <div class="video-player">
                            <img :src="'/img/video17.jpg'" alt="photo">
                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                <svg class="olymp-play-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-play-icon'"></use></svg>
                            </a>
                            <div class="overlay overlay-dark"></div>

                            <div class="more"><svg class="olymp-three-dots-icon"><use :href="'/svg-icons/sprites/icons.svg#olymp-three-dots-icon'"></use></svg></div>
                        </div>

                        <div class="ui-block-content video-content">
                            <a href="#" class="h6 title">Record Store Day 2016</a>
                            <time class="published" datetime="2017-03-24T18:18">7:52</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "videos"
    }
</script>

<style scoped>

</style>