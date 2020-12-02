<section id="slider">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-md-8">
                <div class="panel panel-primary" style="margin-top:8px;">
                    <div class="panel-heading">
                        آخر الأخبار
                    </div>
                    <div class="panel-body" style="margin:0;padding:0;">
                        <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel1" data-slide-to="0"></li>
                                <li data-target="#carousel1" data-slide-to="1"></li> 
                                <li data-target="#carousel1" data-slide-to="2"></li>
                                <li data-target="#carousel1" data-slide-to="3"></li>
                                <li data-target="#carousel1" data-slide-to="4" class="active"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <!-- last Item -->
                                <div  class="item">
                                    <img src="img/slider/lm.jpg?<?php echo md5_file('img/slider/lm.jpg'); ?>" alt="..." />
                                    <div class="carousel-caption">
                                        <h1>لقاء المواطنين الأسبوعي</h1>
                                        <p style="line-height:1;">
                                            يجتمع رئيس مجلس الإدارة بالمواطنين يوم
                                            <strong> الأحد </strong> من كل أسبوع لمناقشة مشاكلهم واحتياجاتهم
                                        </p>
                                    </div>
                                </div>       
<!--
                                <div class="item">
                                    <a href="fatora">
                                        <img src="img/slider/fatora.jpg?<?php echo md5_file('img/slider/fatora.jpg'); ?>" alt="..." />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="reads">
                                        <img src="img/slider/reads.gif?<?php echo md5_file('img/slider/reads.gif'); ?>" alt="..." />
                                    </a>
                                </div>
  -->                      
                                <div class="item">
                                    <a href="jobs/2020/job1_technical/stage2/">
                                        <img src="img/slider/job1_2020_s2.jpg?<?php echo md5_file('img/slider/job1_2020_s2.jpg'); ?>" alt="..." />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="jobs/2020/job3_lawer/stage2/">
                                        <img src="img/slider/job3_2020_s2.jpg?<?php echo md5_file('img/slider/job3_2020_s2.jpg'); ?>" alt="..." />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="pages/ibank/srssp_26112020.php">
                                        <img src="img/slider/srssp_new_26112020.jpg?<?php echo md5_file('img/slider/srssp_new_26112020.jpg'); ?>" alt="..." />
                                    </a>
                                </div>

                                <div class="item active">
                                    <a href="jobs/2020/job2_reader/stage3_2/">
                                        <img src="img/slider/job2_2020_s32.jpg?<?php echo md5_file('img/slider/job2_2020_s32.jpg'); ?>" alt="..." />
                                    </a>
                                </div>
                   
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <?php include "section3.php"; ?>
            </div>
        </div>
        <?php include "section2.php"; ?>

    </div>

</section>