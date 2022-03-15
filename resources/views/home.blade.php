@extends('layouts.app')
@section('contents')
<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                        <h1>Welcome to My Website</h1>
                        <h2>Looking for a restaurant
                            <label for="pac-input">Here</label>
                        </h2>
                        <div class="row">
                            <form action="{{ route('store') }}" method="post" onsubmit="getForm()">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <input name="keyword" id="keyword" type="text" class="form-control controls_tools" placeholder="Location..." required>
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary btn-lg btn-demo" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    function getForm(){
        var keyword = document.getElementById('keyword').value;
            // add query form
        // var tag = document.getElementById('tag').value;
        // var limit = document.getElementById('limit').value;
        // var span = document.getElementById('span').value;

        var url = "https://search.longdo.com/mapsearch/json/search?"+"keyword="+keyword+"&tag=restaurant&limit=50&span=15km&key=94824e064a98011074bbd41223e234c4";
        window.open(url,"_blank",true);
    }
</script>
@endsection

