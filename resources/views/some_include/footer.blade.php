@guest
<footer>
    <div class="container">
        <div class="row">
            <div class="col-6 mr-auto" id="foot">
                <a href="/laravel_project/surverid/public/about">About Us</a>
            </div>
            <div class="col-6 ml-auto" id="foot">
                Contact Us : <br>
                Gmail : surveridhelper@gmail.com
            </div>
        </div>
    </div>
</footer>
@endguest

@auth
<footer>
        <div class="container">
            <div class="row">
                <div class="col-2 col-lg-4 mr-auto" id="foot">
                    <a href="/laravel_project/surverid/public/about">About Us</a> <br>
                    <a href="/laravel_project/surverid/public/rule">Rules</a>
                </div>
                <div class="col-3 col-lg-4" id="foot">
                    {{-- Link Pengisian Form Feedback : <br> --}}
                    <a href="/laravel_project/surverid/public/form">Form Feedback</a>
                </div>
                {{-- <div class="col-2 col-lg-3" id="foot">
                    <a href="/laravel_project/surverid/public/rule">Rules</a>
                </div> --}}
                <div class="col-7 col-lg-4 ml-auto" id="foot">
                    Contact Us <br>
                    Gmail : surveridhelper@gmail.com
                </div>
            </div>
        </div>
</footer>
@endauth