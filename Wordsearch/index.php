<?php
include_once('includes/head.php');
include_once('includes/header.php');
include_once('includes/slider.php');
?>

<section id="content">
    <div class="content-wrap py-0" style="overflow: visible">

        <!-- Modal -->

        <div class="modal fade" id="wordDefinition" tabindex="-1" aria-labelledby="editSongModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase" id="wordName"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="definition">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- <a name="wordsearch"></a> -->
        <div class="section-negetive mx-auto" style="max-width: 800px; transform: translateY(-100px)">
            <div class="card-block-wrap g-0 row align-items-stretch bg-white" style="
                border-radius: 20px;
                box-shadow: 0 10px 80px rgba(14, 72, 119, 0.2);
              ">
                <center>
                    <div id="wordsearch" data-animate="fadeInRight" data-delay="300"
                        class="wordsearch-pane col-md-12 card-block">
                        <h5 class="ls3 text-uppercase fw-normal text-black-50 mb-3">
                            The ultimate word search
                        </h5>
                        <h3 class="display-4 fw-bold font-secondary" style="color: #24285b">
                            Word Search
                        </h3>
                        <form id="" method="post">
                            <div>
                                <input type="text" name="wordSearch" id="search" placeholder="Enter a word.."
                                    class="form-control">
                            </div>
                            <button name="wordSumit" type="button"
                                class="button m-0 button-circle my-button-large text-white"
                                style="background-color: #24285b">Make a Search</button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
        <div id="section-about" class="center page-section">
            <div class="container clearfix">
                <h2 data-animate="fadeInUp" data-delay="100" class="mx-auto bottommargin font-body">
                    A digital web solution for discovering the meaning of ambigous words.
                </h2>
                <p class="lead mx-auto bottommargin" data-animate="fadeInUp" data-delay="200">
                    Word search could be tedious at times and meanings of words not clearly explained. The Gravics
                    WordFinder web solution will provide users meanings to whatever words they seek with a well detailed
                    explanations as well as phonetic inscriptions and vocal assistance. Your assigments, work etc just
                    got easier with us! Explore our unlimited word meanings.
                </p>
                <a href="#" data-scrollto="#wordsearch" data-offset="70" data-animate="fadeInUp" data-delay="600"
                    class="button m-0 button-circle button-large text-white" style="background-color: #24285b">Explore
                    <i class="icon-line-arrow-right"></i></a>

                <div class="clear"></div>
                <div class="row topmargin-lg mx-auto" style="max-width: 1000px">
                    <div class="col-md-4 mb-5">
                        <div class="team" data-animate="fadeInUp" data-delay="200">
                            <div class="team-image">
                                <img src="css/one-page/images/team/4.jpg" alt="Victor Victor" />
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn"
                                        data-hover-speed="400">
                                        <a href="#" class="social-icon si-borderless si-small si-facebook"
                                            title="Facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-twitter"
                                            title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-github" title="Github">
                                            <i class="icon-github"></i>
                                            <i class="icon-github"></i>
                                        </a>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                </div>
                            </div>
                            <div class="team-desc team-desc-bg">
                                <div class="team-title">
                                    <h4>Victor Victor</h4>
                                    <span>CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="team" data-animate="fadeInDown" data-delay="200">
                            <div class="team-image">
                                <img src="css/one-page/images/team/2.jpg" alt="Josh Clark" />
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn"
                                        data-hover-speed="400">
                                        <a href="#" class="social-icon si-borderless si-small si-twitter"
                                            title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-linkedin"
                                            title="LinkedIn">
                                            <i class="icon-linkedin"></i>
                                            <i class="icon-linkedin"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-flickr" title="Flickr">
                                            <i class="icon-flickr"></i>
                                            <i class="icon-flickr"></i>
                                        </a>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                </div>
                            </div>
                            <div class="team-desc team-desc-bg">
                                <div class="team-title">
                                    <h4>Mary Jane</h4>
                                    <span>Co-Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="team" data-animate="fadeInUp" data-delay="200">
                            <div class="team-image">
                                <img src="css/one-page/images/team/3.jpg" alt="Mary Jane" />
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content align-items-end" data-hover-animate="fadeIn"
                                        data-hover-speed="400">
                                        <a href="#" class="social-icon si-borderless si-small si-twitter"
                                            title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-vimeo" title="Vimeo">
                                            <i class="icon-vimeo"></i>
                                            <i class="icon-vimeo"></i>
                                        </a>
                                        <a href="#" class="social-icon si-borderless si-small si-instagram"
                                            title="Instagram">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </div>
                                    <div class="bg-overlay-bg" data-hover-animate="fadeIn" data-hover-speed="400"></div>
                                </div>
                            </div>
                            <div class="team-desc team-desc-bg">
                                <div class="team-title">
                                    <h4>Josh Clark</h4>
                                    <span>Sales</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('includes/footer.php');
?>