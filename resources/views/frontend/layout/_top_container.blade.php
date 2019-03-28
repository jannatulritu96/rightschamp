<div class="header-area as2-bg gold">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-5 col-sm-8">
                <div class="header-wrapper">
                    @foreach($contacts as $contact)
                    <div class="header-left">
                        <div class="header-icon">
                            <span class="icofont-headphone-alt-2"></span>
                        </div>
                        <div class="header-text">
                            <span>{{ $contact->phone }}</span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="header-icon">
                            <span class="icofont-email"></span>
                        </div>
                        <div class="header-text">
                            <span> {{ $contact->email }}</span>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-7 col-sm-4">
                <div class="header-right-wrapper ">
                    <div class="header-left header2-left d-none d-md-block">
                        <div class="bottom-footer as2-bg gold">
                            <!-- Social icons -->
                            <div class="">
                                <a class="gold" href="#" target="_blank">
                                    <i class="fa fa-facebook mr-3"></i>
                                </a>
                                <a class="gold" href="#" target="_blank">
                                    <i class="fa fa-twitter mr-3"></i>
                                </a>
                                <a class="gold" href="#" target="_blank">
                                    <i class="fa fa-youtube mr-3"></i>
                                </a>
                                <a class="gold" href="#" target="_blank">
                                    <i class="fa fa-google-plus mr-3"></i>
                                </a>
                                <a class="gold" href="#" target="_blank">
                                    <i class="fa fa-pinterest mr-3"></i>
                                </a>
                            </div>
                            <!-- Social icons -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>