<div class="content">
<!--top footer-->
<div class="top-footer p-4">
    <div class="container">
        <div class="row text-left">
            <div class="col-lg-4 col-md-6 ml-auto">
                <form action="{{ route('quick.contact') }}" method="POST">
                    @csrf
                    @include('frontend.layout._messages')
                    <p class="lft-ttl-ftr">Quick Contact</p>
                    <input name="user_name" type="text" class="form-control mb-2" placeholder="Name">
                    <input name="user_email" type="email" class="form-control mb-2" placeholder="Email">
                    <div class="form-group mb-1">
                        <textarea name="text" type="text" class="form-control mb-2" placeholder="Message"></textarea>
                    </div>
                        <input class="btn btn-primary" id="createUser" type="submit" value="Submit" />
                </form>
            </div>
            <div class="col-lg-4 col-md-6">
                <ul class="list-unstyled gold pl-5">
                    <li>
                        <a class="gold" href="#">Site map</a>
                    </li>
                    <li>
                        <a class="gold" href="#">Privacy policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 ml-auto">
                <div class="location">
                    @foreach($contacts as $contact)
                    <ul class="gold">
                        <li><i class="icofont-building-alt pr-2"></i> {{ $contact->address }} </li>
                        <li><i class="icofont-headphone-alt-2 pr-2"></i> {{ $contact->phone }}</li>
                        <li><i class="icofont-fax pr-2"></i>{{ $contact->fax }}</li>
                        <li> <i class="fa fa-envelope-o pr-2"></i>{{ $contact->email }}</li>
                    </ul>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!--top footer-->
<!--bottom footer-->
<div class="bottom-footer as2-bg gold">
    <!--Copyright-->
    <div class="footer-copyright py-3">
        All rights reserved | copyright © 2019 | Design & Development :
        <a class="gold" href="#" target="_blank"> PeopleNTech </a>
    </div>
    <!--Copyright-->
</div>
<!--bottom footer-->
</div>