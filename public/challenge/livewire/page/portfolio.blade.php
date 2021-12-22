<style>
    #portfolio_item {
        transition: all .2s ease-in-out;
        cursor: pointer;
    }
    #portfolio_item:hover {
        transform: scale(.9);
    }

    #tab_titles {
        transition: all .2s ease-in-out;
        cursor: pointer;
    }
    #tab_titles:hover {
        transform: scale(1.2);
    }
</style>
<div style="background-color: #38006b;margin-top: 2rem;">
    <div class="container my-5">

        <!-- Section -->
        <section id="portfolio">


            <!-- Modal -->
            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 py-5 pl-5">

                                    <h5 class="font-weight-normal mb-3">گالری تصاویر</h5>


                                    <ul class="list-unstyled font-small mt-5">
                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Client</strong></p>
                                            <p class="text-muted mb-4">Envato Inc.</p>
                                        </li>

                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Date</strong></p>
                                            <p class="text-muted mb-4">June 27, 2019</p>
                                        </li>

                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Skills</strong></p>
                                            <p class="text-muted mb-4">Design, HTML, CSS, Javascript</p>
                                        </li>

                                        <li>
                                            <p class="text-uppercase mb-2"><strong>Address</strong></p>
                                            <a href="https://mdbootstrap.com/docs/jquery/design-blocks/">MDBootstrap</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-6">

                                    <div class="view rounded-right">
                                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Sample image">
                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="font-weight-bold col-md-12 dark-grey-text d-flex justify-content-center mt-3 mb-1">

                    <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter text-light" id="tab_titles" data-rel="all">شرکت</button>
                    <p class="font-weight-bold mb-0 px-1 py-1">/</p>
                    <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter text-light" id="tab_titles" data-rel="1">هیئت مدیره</button>
                    <p class="font-weight-bold mb-0 px-1 py-1">/</p>
                    <button type="button" class="btn btn-flat btn-lg m-0 px-3 py-1 filter text-light" id="tab_titles" data-rel="2">همایشات</button>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="gallery mt-3 mb-5" id="gallery">

                <!-- Grid column -->
                <div class="mb-3 pics all 2 animation">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        <img id="portfolio_item" class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        <img id="portfolio_item" class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Vertical/7.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        <img id="portfolio_item" class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Vertical/4.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics all 2 animation">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        <img id="portfolio_item" class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Others/images/63.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics all 2 animation">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        <img id="portfolio_item" class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Others/images/64.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="mb-3 pics animation all 1">
                    <a data-toggle="modal" data-target="#basicExampleModal">
                        <img id="portfolio_item" class="img-fluid z-depth-1 rounded" src="https://mdbootstrap.com/img/Photos/Vertical/5.jpg" alt="Card image cap">
                    </a>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>
        <!-- Section -->

    </div>
</div>
