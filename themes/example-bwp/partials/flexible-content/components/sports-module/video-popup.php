<?php
/**
 *
 * @var string $eyebrow
 * @var string $video_poster
 * @var string $video_url
 *
 */
?>
<div class="c-video-popup js-modal">
    <section class="o-section">
        <div class="o-container">
            <!--CUSTOM VIDEO PLAYER-->
            <div class="c-custom-video-player is-playing js-custom-video-player">
                <div class="c-video-popup__top">
                    <p><?= ! empty( $eyebrow ) ? $eyebrow : ''; ?></p>
                    <span class="c-video-popup__close js-modal-close">
                    <?= __( 'Close', 'pmi' ); ?> <?= get_icon( "close" ) ?>
                </span>
                </div>
				<?php if ( ! empty( $video_url ) ) { ?>
                    <!--video source-->
                    <video class="c-custom-video-player__video js-custom-video-player-media js-lazy"
                           preload="metadata"
                           data-poster="<?= $video_poster; ?>">
                        <source data-src="<?= $video_url; ?>"
                                type="video/mp4"/>
                    </video>
                    <!--end video source-->
				<?php } ?>

                <!--playback state indicator-->
                <div class="c-custom-video-player__state-indicator js-custom-video-player-state">

                    <!--icon play-->
                    <svg class="c-custom-video-player__play"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 320.001 320.001">
                        <path d="M295.84 146.049l-256-144a16.026 16.026 0 00-15.904.128A15.986 15.986 0 0016 16.001v288a15.986 15.986 0 007.936 13.824A16.144 16.144 0 0032 320.001c2.688 0 5.408-.672 7.84-2.048l256-144c5.024-2.848 8.16-8.16 8.16-13.952s-3.136-11.104-8.16-13.952z"/>
                    </svg>
                    <!--end icon play-->

                    <!--icon pause-->
                    <svg class="c-custom-video-player__pause"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 320 320">
                        <path d="M112 0H16C7.168 0 0 7.168 0 16v288c0 8.832 7.168 16 16 16h96c8.832 0 16-7.168 16-16V16c0-8.832-7.168-16-16-16zM304 0h-96c-8.832 0-16 7.168-16 16v288c0 8.832 7.168 16 16 16h96c8.832 0 16-7.168 16-16V16c0-8.832-7.168-16-16-16z"/>
                    </svg>
                    <!--end icon pause-->

                </div>
                <!--end playback state indicator-->

                <!--controls-->
                <div class="c-custom-video-player__controls">

                    <!--progress-->
                    <div class="c-custom-video-player__progress">

                        <!--progress bar-->
                        <progress class="c-custom-video-player__progress-bar js-custom-video-player-progress-bar"
                                  value="0">
                        </progress>
                        <!--end progress bar-->

                        <!--time input-->
                        <input class="c-custom-video-player__time-input js-custom-video-player-time-input"
                               value="0"
                               min="0"
                               max="100"
                               type="range"
                               step="0.01">
                        <!--end time input-->

                    </div>
                    <!--end progress-->

                    <!--actions-->
                    <div class="c-custom-video-player__actions">

                        <!--actions left-->
                        <div class="c-custom-video-player__actions-left">

                            <!--play button-->
                            <button class="c-custom-video-player__action-button js-custom-video-player-play">

                                <!--icon play-->
                                <svg class="c-custom-video-player__play"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 320.001 320.001">
                                    <path d="M295.84 146.049l-256-144a16.026 16.026 0 00-15.904.128A15.986 15.986 0 0016 16.001v288a15.986 15.986 0 007.936 13.824A16.144 16.144 0 0032 320.001c2.688 0 5.408-.672 7.84-2.048l256-144c5.024-2.848 8.16-8.16 8.16-13.952s-3.136-11.104-8.16-13.952z"/>
                                </svg>
                                <!--end icon play-->

                                <!--icon pause-->
                                <svg class="c-custom-video-player__pause"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 320 320">
                                    <path d="M112 0H16C7.168 0 0 7.168 0 16v288c0 8.832 7.168 16 16 16h96c8.832 0 16-7.168 16-16V16c0-8.832-7.168-16-16-16zM304 0h-96c-8.832 0-16 7.168-16 16v288c0 8.832 7.168 16 16 16h96c8.832 0 16-7.168 16-16V16c0-8.832-7.168-16-16-16z"/>
                                </svg>
                                <!--end icon pause-->

                            </button>
                            <!--end play button-->

                            <!--volume-->
                            <div class="c-custom-video-player__volume">

                                <!--mute button-->
                                <button class="c-custom-video-player__action-button js-custom-video-player-volume-button">

                                    <!--icon mute-->
                                    <svg class="c-custom-video-player__mute"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 448.075 448.075">
                                        <path d="M352.021 16.075c0-6.08-3.52-11.84-8.96-14.4-5.76-2.88-12.16-1.92-16.96 1.92l-141.76 112.96 167.68 167.68V16.075zM443.349 420.747l-416-416c-6.24-6.24-16.384-6.24-22.624 0s-6.24 16.384 0 22.624l100.672 100.704h-9.376c-9.92 0-18.56 4.48-24.32 11.52-4.8 5.44-7.68 12.8-7.68 20.48v128c0 17.6 14.4 32 32 32h74.24l155.84 124.48c2.88 2.24 6.4 3.52 9.92 3.52 2.24 0 4.8-.64 7.04-1.6 5.44-2.56 8.96-8.32 8.96-14.4v-57.376l68.672 68.672c3.136 3.136 7.232 4.704 11.328 4.704s8.192-1.568 11.328-4.672c6.24-6.272 6.24-16.384 0-22.656z"/>
                                    </svg>
                                    <!--end icon mute-->

                                    <!--icon sound-->
                                    <svg class="c-custom-video-player__sound"
                                         xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 480 480">
                                        <path d="M278.944 17.577c-5.568-2.656-12.128-1.952-16.928 1.92L106.368 144.009H32c-17.632 0-32 14.368-32 32v128c0 17.664 14.368 32 32 32h74.368l155.616 124.512A16.158 16.158 0 00272 464.009c2.368 0 4.736-.544 6.944-1.6a15.968 15.968 0 009.056-14.4v-416a16.05 16.05 0 00-9.056-14.432zM368.992 126.857c-6.304-6.208-16.416-6.112-22.624.128-6.208 6.304-6.144 16.416.128 22.656C370.688 173.513 384 205.609 384 240.009s-13.312 66.496-37.504 90.368c-6.272 6.176-6.336 16.32-.128 22.624a15.943 15.943 0 0011.36 4.736c4.064 0 8.128-1.536 11.264-4.64C399.328 323.241 416 283.049 416 240.009s-16.672-83.232-47.008-113.152z"/>
                                        <path d="M414.144 81.769c-6.304-6.24-16.416-6.176-22.656.096-6.208 6.272-6.144 16.416.096 22.624C427.968 140.553 448 188.681 448 240.009s-20.032 99.424-56.416 135.488c-6.24 6.24-6.304 16.384-.096 22.656 3.168 3.136 7.264 4.704 11.36 4.704 4.064 0 8.16-1.536 11.296-4.64C456.64 356.137 480 299.945 480 240.009s-23.36-116.128-65.856-158.24z"/>
                                    </svg>
                                    <!--end icon sound-->

                                </button>
                                <!--end mute button-->

                                <!--volume input-->
                                <input class="c-custom-video-player__volume-input js-custom-video-player-volume-input"
                                       value="1"
                                       type="range"
                                       max="1"
                                       min="0"
                                       step="0.01">
                                <!--end volume input-->

                            </div>
                            <!--end volume-->

                            <!--time-->
                            <div class="c-custom-video-player__time">
                                <time class="js-custom-video-player-current-time">00:00</time>
                                <span> / </span>
                                <time class="js-custom-video-player-video-duration">00:00</time>
                            </div>
                            <!--end time-->

                        </div>
                        <!--end actions left-->

                        <!--actions right-->
                        <div class="c-custom-video-player__actions-right">

                            <!--full screen button-->
                            <button class="c-custom-video-player__action-button js-custom-video-player-full-screen">

                                <!--icon fullscreen-->
                                <svg class="c-custom-video-player__full-screen"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <path d="M486.396 336.393l-43.184 43.184-104.019-104.033c-5.856-5.856-15.349-5.862-21.211 0l-42.437 42.437c-5.868 5.868-5.844 15.382 0 21.226l104.034 104.004-43.184 43.184C326.986 495.803 333.635 512 347 512h150c8.291 0 15-6.709 15-15V347c0-13.301-16.126-20.053-25.604-10.607zM236.454 172.808L132.421 68.789l43.184-43.184C185.014 16.197 178.365 0 165 0H15C6.709 0 0 6.709 0 15v150c0 13.269 16.088 20.09 25.606 10.606l43.198-43.169 104.004 104.018c5.856 5.856 15.351 5.859 21.209.001l42.437-42.437c5.832-5.832 5.88-15.331 0-21.211z"/>
                                </svg>
                                <!--end icon fullscreen-->

                                <!--icon exit full screen-->
                                <svg class="c-custom-video-player__exit-full-screen"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 511.999 511.999">
                                    <path d="M507.604 443.959L403.571 339.94l43.184-43.184c9.409-9.408 2.76-25.605-10.605-25.605h-150c-8.291 0-15 6.709-15 15v150c0 13.324 16.158 20.052 25.605 10.605l43.198-43.169 104.004 104.018c5.856 5.856 15.352 5.859 21.21.002l42.437-42.437c5.832-5.832 5.88-15.331 0-21.211zM215.244 65.243l-43.184 43.184L68.041 4.394c-5.856-5.856-15.349-5.862-21.211 0L4.394 46.83c-5.868 5.868-5.844 15.382 0 21.226L108.428 172.06l-43.184 43.184c-9.409 9.408-2.76 25.605 10.605 25.605h150c8.291 0 15-6.709 15-15.001v-150c0-13.283-16.12-20.09-25.605-10.605z"/>
                                </svg>
                                <!--end icon exit full screen-->

                            </button>
                            <!--end full screen button-->

                        </div>
                        <!--end actions right-->

                    </div>
                    <!--end actions-->

                </div>
                <!--end controls-->

            </div>
        </div>
    </section>
</div>
