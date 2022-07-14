<?php
/**
 * Template Name: Coming Soon Page Template
 */
?>
<?php get_header(); ?>
<div id="coming-soon__section" class="container-fluid coming-soon__container p-0">
    <div class="row w-100 coming-soon__half coming-soon__tophalf">
        <div class="col-12 coming-soon__col">
            <img class="coming-soon__logo" src="<?php echo wp_upload_dir()['url'] . '/hotel-inside-logo-vertical.svg' ?>" alt="" title="">
            <h1 class="coming-soon__toptext">Hier entsteht Ihre neue Plattform und Community für die nationale und internationale Hotellerie!</h1>
        </div>
    </div>
    <div class="row w-100 coming-soon__half coming-soon__bothalf">
        <div class="col-12 coming-soon__col-countdown">
            <?php $launch_day_date = get_field( 'launch_date' ); ?>
            <script type="text/javascript">
            (function () {
                const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;
                const countDown = new Date("<?php echo $launch_day_date; ?>").getTime(),
                    x = setInterval(function() {
                        const now = new Date().getTime(),
                                    distance = countDown - now;
                            document.getElementById("days").innerText = Math.floor(distance / (day)),
                            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
                        if (distance < 0) {
                            document.getElementById("countdown-section").style.display = "none";
                            document.body.classList.add("no-countdown");
                            clearInterval(x);
                        }
                    }, 0)
            }());
            </script>
            <div id="countdown-section" class="countdown-section">
                <div class="container container__inside">
                    <div class="row">
                        <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="countdown-section__box">
                                <div class="countdown-section__circlebox">
                                    <span id="days"></span>
                                </div>
                                Tage
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="countdown-section__box">
                                <div class="countdown-section__circlebox">
                                    <span id="hours"></span>
                                </div>
                                Stunden
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="countdown-section__box">
                                <div class="countdown-section__circlebox">
                                    <span id="minutes"></span>
                                </div>
                                Minuten
                            </div>
                        </div>
                        <div class="col-6 col-xs-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="countdown-section__box">
                                <div class="countdown-section__circlebox">
                                    <span id="seconds"></span>
                                </div>
                                Sekunden
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 coming-soon__col">
            <p class="coming-soon__bottext">Werden Sie Hotel- und Hospitality-Insider!<br>Abonnieren Sie unseren Newsletter und erhalten Sie die relevantesten Insights und die aktuellsten Kommentare und Videobeiträge von Hans R. Amrein.</p>
        </div>
        <div class="col-12 coming-soon__col">
        <?php echo do_shortcode(get_field('newsletter_shortcode')); ?>
        </div>        
    </div>
</div>
<?php 