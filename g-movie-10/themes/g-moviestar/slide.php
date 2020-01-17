<style>
    .description {
        margin-top: 88px;
        background: #fff;
        border-radius: 12px;
        padding: 16px 16px 16px 16px;
        opacity: 72%
    }

    .description:hover {
        background: #fff;
        border-radius: 12px;
        padding: 16px 16px 16px 16px;
        opacity: 92%
    }

</style>

<div class="carousel slide carousel-fade target-carousel" data-ride="carousel">
<!--    <div class="container">-->
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target=".target-carousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="1" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="2" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="3" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="4" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="5" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="6" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="7" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="8" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="9" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="10" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="11" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="12" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="13" class=""></li>-->
<!--            <li data-target=".target-carousel" data-slide-to="14" class=""></li>-->
<!--        </ol>-->
<!--    </div>-->

    <div class="carousel-inner">
        <div class="item active"
             style="background-image: url('https://image.tmdb.org/t/p/original//askg3SMvhqEl4OL52YuvdtY40Yb.jpg'); padding-top: 103px; height: 572px">
            <div class="container">

                <div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0"
                     data-translatey="100">
                    <div class="col-md-6 description" style="float: right">

                        <h1 style="color: #0D0D25">Coco<small style="color: #0D0D25;">&nbsp;(2017)</small></h1>
                        <p class="desktop" style="color: #0D0D25">

                            Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an
                            accomplished musician like his idol, Ernesto de la Cruz. Desperate to prove his talent,
                            Miguel finds himself in the stunning... </p>
                        <p class="mobile" style="color: #0D0D25">

                            Despite his family’s baffling generations-old ban on music, Miguel dreams of becoming an
                            accomplis... </p>
                        <label style="color: #0D0D25">Genres : &nbsp;</label>
                        <span class="label label-primary label-black-transparant">
								Adventure							</span>
                        &nbsp;
                        <span class="label label-primary label-black-transparant">
								Animation							</span>
                        &nbsp;
                        <span class="label label-primary label-black-transparant">
								Comedy							</span>
                        &nbsp;
                        <span class="label label-primary label-black-transparant">
								Family							</span>
                        &nbsp;
                        <br><br>
                        <div class="buttons"  style="text-align: center">
                            <a href="/movie/354912/coco.html" class=" btn btn-default ">
                                <i class="material-icons">play_arrow</i>
                                <span>Play Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (empty($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $Movies = unserialize(ocim_data_movie('home_m_', $page, 'getNowPlayingMovies'));
        if (is_array($Movies['result'])):
            foreach ((array)array_slice($Movies['result'], 0, 15) as $row) {
                ?>
                <div class="item"
                     style="background-image: url('<?php echo $row['backdrop_path']; ?>'); padding-top: 103px; background-size: cover;
                         background-repeat: no-repeat; height: 572px">

                    <div class="container">
                        <div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1"
                             data-opacity="0" data-translatey="100">
                            <div class="col-md-6 description" style="float: right;">

                                <h1 style="color: #0D0D25;"><?php echo $row['title']; ?><small
                                            style="color: #0D0D25;">&nbsp;(<?php echo date('Y', strtotime($row['release_date'])); ?>
                                        )</small></h1>
                                <p class="desktop" style="height: auto; color: #0D0D25">

                                    <?php echo short($row['overview']); ?>                    </p>
                                <p class="mobile" style="text-overflow: ellipsis;">

                                    <small>    <?php echo short($row['overview']); ?>                        </small>
                                </p>
                                <label style="color: #0D0D25">IMDb : &nbsp;</label>
                                <span class="label label-primary label-black-transparant">
								<?php echo $row['vote_average']; ?>							</span>
                                &nbsp;
                                <br><br>
                                <div class="buttons" style="text-align: center">
                                    <!-- <a href="<?php echo seo_movie($row['id'], $row['title']); ?>" data-vbtype="video" class="venobox btn btn-default vbox-item"> -->
                                    <a href="<?php echo seo_movie($row['id'], $row['title']); ?>"
                                       class=" btn btn-default vbox-item">
                                        <i class="material-icons">play_arrow</i>
                                        <span>Watch Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        endif;
        ?>
    </div>
    <div style="background: #0D0D25; width: 100%; height: 32px; padding: 7px;border-radius: 0px 0px 32px 32px ">
<!--        <a href="#content" style="text-align: center"><p>Click me to scroll down</p></a>-->

            <ol class="carousel-indicators">
                <li data-target=".target-carousel" data-slide-to="0" class="active"></li>
                <li data-target=".target-carousel" data-slide-to="1" class=""></li>
                <li data-target=".target-carousel" data-slide-to="2" class=""></li>
                <li data-target=".target-carousel" data-slide-to="3" class=""></li>
                <li data-target=".target-carousel" data-slide-to="4" class=""></li>
                <li data-target=".target-carousel" data-slide-to="5" class=""></li>
                <li data-target=".target-carousel" data-slide-to="6" class=""></li>
                <li data-target=".target-carousel" data-slide-to="7" class=""></li>
                <li data-target=".target-carousel" data-slide-to="8" class=""></li>
                <li data-target=".target-carousel" data-slide-to="9" class=""></li>
                <li data-target=".target-carousel" data-slide-to="10" class=""></li>
                <li data-target=".target-carousel" data-slide-to="11" class=""></li>
                <li data-target=".target-carousel" data-slide-to="12" class=""></li>
                <li data-target=".target-carousel" data-slide-to="13" class=""></li>
                <li data-target=".target-carousel" data-slide-to="14" class=""></li>
            </ol>

    </div>
</div>
