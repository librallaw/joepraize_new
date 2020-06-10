<section class="har_player_container_red">
    <div class="har_over" data-color="rgb(81, 66, 34)" data-opacity="1" data-blend="multiply"></div>
    <div class="container">

        <div id="jquery_jplayer_main" class="jp-jplayer"></div>

        <div id="jp_container_content" class="jp-audio-main" role="application" aria-label="media player">
            <div class="left-player-side">
                <div class="har-prev">
                    <i class="ti ti-control-skip-backward"></i>
                </div>
                <div class="har-play">
                    <i class="ti ti-control-play"></i>
                </div>
                <div class="har-pause">
                    <i class="ti ti-control-pause"></i>
                </div>
                <div class="har-next">
                    <i class="ti ti-control-skip-forward"></i>
                </div>
                <div class="har-mute" tabindex="0"><i class="ti ti-volume"></i></div>

                <div class="har-volume-bar">
                    <div class="har-volume-bar-value"></div>
                </div>
                <button id="playlist-toggle"><i class="ti ti-menu"></i></button>
            </div>
            <div class="center-side">
                <div class="har-current-time">
                </div>
                <!-- #nowPlaying -->

                <div class="har-seek-bar">
                    <div class="har-play-bar">
                    </div>
                </div>

                <div class="har-duration">
                </div>
            </div>
            <div class="right-player-side">
                <div class="har-thumbnail">
                    <img src="images/work/cover.jpg" alt="">
                </div>
                <div class="har-title">
                </div>
                <div class="har-artist">
                </div>
            </div>
            <!-- Error -->
            <div class="jp-no-solution">
                <span>Update Required</span>
                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
            </div>
            <!-- Error End -->
        </div>

    </div>
    <!-- Player End -->

</section>





<!-- Start Of Playlist -->


<div class="playlist-wrapper har_wht_txt har_left_player" id="playlist-wrapper">

    <div class="jp-playlist container">
        <div class="about-list clearfix">
        </div>

        <!-- Item -->
        <div class="trak-item"  data-audio="{{asset('songs/praise_oviation.mp3')}}" data-artist="Praise Ovation" data-thumbnail="images/work/cover2.jpg" data-id="trak-201">
            <audio preload="metadata" src="{{asset('songs/praise_oviation.mp3')}}" title="Theme Song"></audio>
            <div class="additional-button">

                <a href="#">
                    <i class="ti ti-headphone"></i>
                </a>
                <a href="#">
                    <i class="ti ti-apple"></i>
                </a>
                <a href="#">
                    <i class="ti ti-soundcloud"></i>
                </a>

            </div>
            <div class="play-pause-button">
                <i class="ti ti-control-play"></i>

            </div>
            <div class="name-artist">
                <h3>Praise Ovation theme song</h3>
            </div>

        </div>


        <div class="trak-item"  data-audio="{{asset('songs/More-Than-Enough-preview.mp3')}}" data-artist="Joe Praize" data-thumbnail="images/work/cover2.jpg" data-id="trak-201">
            <audio preload="metadata" src="{{asset('songs/More-Than-Enough-preview.mp3')}}" title="More than Enough"></audio>
            <div class="additional-button">

                <a href="#">
                    <i class="ti ti-headphone"></i>
                </a>
                <a href="#">
                    <i class="ti ti-apple"></i>
                </a>
                <a href="#">
                    <i class="ti ti-soundcloud"></i>
                </a>

            </div>
            <div class="play-pause-button">
                <i class="ti ti-control-play"></i>

            </div>
            <div class="name-artist">
                <h3>More than Enough (Preview)</h3>
            </div>

        </div>
        <!-- Item End -->

        <!-- Item -->
        <div class="trak-item" data-audio="{{asset('songs/The-Name-of-Jesus-preview-.mp3')}}" data-artist="Joe Praize" data-thumbnail="images/work/cover2.jpg" data-id="trak-201">
            <audio preload="metadata" src="{{asset('songs/The-Name-of-Jesus-preview-.mp3')}}" title="The Name of Jesus"></audio>
            <div class="additional-button">

                <a href="#">
                    <i class="ti ti-headphone"></i>
                </a>
                <a href="#">
                    <i class="ti ti-apple"></i>
                </a>
                <a href="#">
                    <i class="ti ti-soundcloud"></i>
                </a>

            </div>
            <div class="play-pause-button">
                <i class="ti ti-control-play"></i>

            </div>
            <div class="name-artist">
                <h3>The Name of Jesus (preview)</h3>
            </div>

        </div>
        <!-- Item End -->

        <!-- Item -->
        <div class="trak-item" data-audio="{{asset('songs/Mighty-God-preview.mpeg')}}" data-artist="Joe Praize" data-thumbnail="images/work/cover2.jpg" data-id="trak-201">
            <audio preload="metadata" src="{{asset('songs/Mighty-God-preview.mpeg')}}" title="Mighty God"></audio>
            <div class="additional-button">

                <a href="#">
                    <i class="ti ti-headphone"></i>
                </a>
                <a href="#">
                    <i class="ti ti-apple"></i>
                </a>
                <a href="#">
                    <i class="ti ti-soundcloud"></i>
                </a>

            </div>
            <div class="play-pause-button">
                <i class="ti ti-control-play"></i>

            </div>
            <div class="name-artist">
                <h3>Mighty God (Preview)</h3>
            </div>

        </div>
        <!-- Item End -->



        <!-- Item -->
        <div class="trak-item" data-audio="{{asset('songs/Unchangable-god-preview.mpeg')}}" data-artist="Joe Praize" data-thumbnail="images/work/cover2.jpg" data-id="trak-201">
            <audio preload="metadata" src="{{asset('songs/Unchangable-god-preview.mpeg')}}" title="Unchangeable God "></audio>
            <div class="additional-button">

                <a href="#">
                    <i class="ti ti-headphone"></i>
                </a>
                <a href="#">
                    <i class="ti ti-apple"></i>
                </a>
                <a href="#">
                    <i class="ti ti-soundcloud"></i>
                </a>

            </div>
            <div class="play-pause-button">
                <i class="ti ti-control-play"></i>

            </div>
            <div class="name-artist">
                <h3>Unchangeable God (Preview)</h3>
            </div>

        </div>
        <!-- Item End -->

    </div>
</div>
<!-- End Of playlist -->



