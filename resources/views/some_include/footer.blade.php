@guest
<footer>
    <div class="container">
        <div class="row">
            <div class="col-6 mr-auto" id="foot">
                About Us : <br>
                We are wanderer
            </div>
            <div class="col-6 ml-auto" id="foot">
                Contact Us : <br>
                WA : 0821********
            </div>
        </div>
    </div>
</footer>
@endguest

@auth
<footer>
        <div class="container">
            <div class="row">
                <div class="col-3 mr-auto" id="foot">
                    About Us : <br>
                    We are wanderer <br> <br>
                </div>
                <div class="col-3" id="foot">
                    Link Pengisian Form Feedback : <br>
                    <a href="/laravel_project/surverid/public/form">Form Feedback</a>
                </div>
                <div class="col-3" id="foot">
                    <a href="/laravel_project/surverid/public/rule">Rules</a>
                </div>
                <div class="col-3 ml-auto" id="foot">
                    Contact Us : <br>
                    WA : 0821********
                </div>
            </div>
        </div>
</footer>
@endauth