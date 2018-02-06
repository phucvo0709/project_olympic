@extends('layouts.appProfile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">James’s Friends (86)</div>
                        <form class="w-search">
                            <div class="form-group with-button">
                                <input class="form-control" type="text" placeholder="Search Friends...">
                                <button>
                                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                                </button>
                            </div>
                        </form>
                        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Friends -->

    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend1.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar1.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Nicholas Grissom</a>
                                    <div class="country">San Francisco, CA</div>
                                </div>
                            </div>

                            <div class="swiper-container" data-slide="fade">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">52</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">240</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">16</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend2.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar2.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Marina Valentine</a>
                                    <div class="country">Long Island, NY</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">52</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">240</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">16</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend3.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar3.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Nicholas Grissom</a>
                                    <div class="country">Los Angeles, CA</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">49</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">132</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">5</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend4.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar4.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Chris Greyson</a>
                                    <div class="country">Austin, TX</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">65</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">104</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">12</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend5.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar5.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Elaine Dreifuss</a>
                                    <div class="country">New York, NY</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">82</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">204</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">27</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend6.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar6.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Bruce Peterson</a>
                                    <div class="country">Austin, TX</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">73</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">360</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">11</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend7.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">

                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar7.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Carol Summers</a>
                                    <div class="country">Los Angeles, CA</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">49</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">132</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">5</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="ui-block">

                    <!-- Friend Item -->

                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="{{asset('img/friend8.jpg')}}" alt="friend">
                        </div>

                        <div class="friend-item-content">
                            <div class="more">
                                <svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                                <ul class="more-dropdown">
                                    <li>
                                        <a href="#">Report Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Block Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">Turn Off Notifications</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="friend-avatar">
                                <div class="author-thumb">
                                    <img src="{{asset('img/avatar8.jpg')}}" alt="author">
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name">Michael Maximoff</a>
                                    <div class="country">Portland, OR</div>
                                </div>
                            </div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="friend-count" data-swiper-parallax="-500">
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">58</div>
                                                <div class="title">Friends</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">304</div>
                                                <div class="title">Photos</div>
                                            </a>
                                            <a href="#" class="friend-count-item">
                                                <div class="h6">19</div>
                                                <div class="title">Videos</div>
                                            </a>
                                        </div>
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="#" class="btn btn-control bg-blue">
                                                <svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
                                            </a>

                                            <a href="#" class="btn btn-control bg-purple">
                                                <svg class="olymp-chat---messages-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>
                                            </a>

                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <p class="friend-about" data-swiper-parallax="-500">
                                            Hi!, I’m Marina and I’m a Community Manager for “Gametube”. Gamer and full-time mother.
                                        </p>

                                        <div class="friend-since" data-swiper-parallax="-100">
                                            <span>Friends Since:</span>
                                            <div class="h6">December 2014</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>

                    <!-- ... end Friend Item -->			</div>
            </div>
        </div>
    </div>

    <!-- ... end Friends -->
@stop