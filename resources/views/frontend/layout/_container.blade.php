<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-as">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{ route('home') }}">Rightscham</a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto gold">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">Contact us</a>
                </li>

                <!-- Dropdown -->
                <!-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Dropdown</a>
                     <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </li>-->
            </ul>
        </div>
    </nav>
</div>