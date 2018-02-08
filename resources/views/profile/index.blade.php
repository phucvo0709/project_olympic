@extends('layouts.appProfile')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ui-block">
                        <div class="top-header">
                            <div class="top-header-thumb">
                                <img src="{{asset('img/top-header1.jpg')}}" alt="nature">
                            </div>
                            <div class="profile-section">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 ">
                                        <ul class="profile-menu">
                                            <li>
                                                <router-link to="/timeline/{{Auth::user()->slug}}" active-class="active" exact>Timeline</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/profile/{{Auth::user()->slug}}/about" active-class="active">About</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/profile/{{Auth::user()->slug}}/friends" active-class="active">Friends</router-link>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-5 ml-auto col-md-5">
                                        <ul class="profile-menu">
                                            <li>
                                                <router-link to="/profile/{{Auth::user()->slug}}/photos" active-class="active">Photos</router-link>
                                            </li>
                                            <li>
                                                <router-link to="/profile/{{Auth::user()->slug}}/videos" active-class="active">Videos</router-link>
                                            </li>
                                            <li>
                                                <div class="more">
                                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-three-dots-icon')}}"></use></svg>
                                                    <ul class="more-dropdown more-with-triangle">
                                                        <li>
                                                            <a href="#">Report Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Block Profile</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="control-block-button">
                                    <a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
                                        <svg class="olymp-happy-face-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-happy-face-icon')}}"></use></svg>
                                    </a>

                                    <a href="#" class="btn btn-control bg-purple">
                                        <svg class="olymp-chat---messages-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-chat---messages-icon')}}"></use></svg>
                                    </a>

                                    <div class="btn btn-control bg-primary more">
                                        <svg class="olymp-settings-icon"><use xlink:href="{{asset('svg-icons/sprites/icons.svg#olymp-settings-icon')}}"></use></svg>

                                        <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Profile Photo</a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Header Photo</a>
                                            </li>
                                            <li>
                                                <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="top-header-author">
                                <router-link to="/profile/{{Auth::user()->slug}}/avatar" active-class="active" class="author-thumb">
                                    <img style="max-width: 90px; max-height: 90px" src="@if(Auth::check()) {{url(Auth::user()->avatar)}} @endif" alt="author">
                                </router-link>
                                <div class="author-content">@if(Auth::check()) {{Auth::user()->name}} @endif</a>
                                    <div class="country">San Francisco, CA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <vue-profile></vue-profile>
    </div>
@stop
