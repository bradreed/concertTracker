@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-9">
            <br />
            <h2>Favorite Artists</h2>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card centered" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Highfield_-_Frank_Turner.jpg/1200px-Highfield_-_Frank_Turner.jpg'); background-size: cover; background-position: center; min-height: 300px; position: relative;">
                        <div class="text" style="position: absolute; bottom: 0; right: 0; color: #fff; background-color: rgba(0, 0, 0, 0.25); width: 100%; padding: 5px;">
                            <h4>Frank Turner</h4>
                            <a href="#">Find Shows</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card centered" style="background-image: url('http://www.brooklynvegan.com/files/2017/09/devinyl-split-series-1-7.jpg'); background-size: cover; background-position: center; min-height: 300px; position: relative;">
                       <div class="text" style="position: absolute; bottom: 0; right: 0; color: #fff; background-color: rgba(0, 0, 0, 0.25); width: 100%; padding: 5px;">
                            <h4>Kevin Devine</h4>
                            <a href="#">Find Shows</a>
                        </div>
                    </div>      
                </div>
                <div class="col-sm-4">
                    <div class="card centered" style="background-image: url('https://www.billboard.com/files/styles/article_main_image/public/media/andrew-mcmahon-press-2014-billboard-650.jpg'); background-size: cover; background-position: center; min-height: 300px; position: relative;">
                        <div class="text" style="position: absolute; bottom: 0; right: 0; color: #fff; background-color: rgba(0, 0, 0, 0.25); width: 100%; padding: 5px;">
                            <h4>Andrew McMahon</h4>
                            <a href="#">Find Shows</a>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <h2>Recently Seen</h2>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Foo Fighters</h4>
                        <h6>Mid-Florida Credit Ampitheatre</h6>
                        <p>6/10/2018 @ 7:00PM</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>AWOLNATION</h4>
                        <h6>Vinoy Park</h6>
                        <p>5/26/2018</p>
                    </div>      
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Moon Taxi</h4>
                        <h6>Vinoy Park</h6>
                        <p>5/26/2018</p>
                    </div>
                </div>
            </div>           
            <br />
            <h2>Recommended</h2>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Frank Turner</h4>
                        <h6>House of Blues</h6>
                        <p>6/10/2018 @ 7:00PM</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Frank Turner</h4>
                        <h6>House of Blues</h6>
                        <p>6/10/2018 @ 7:00PM</p>
                    </div>      
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Frank Turner</h4>
                        <h6>House of Blues</h6>
                        <p>6/10/2018 @ 7:00PM</p>
                    </div>
                </div>
            </div>           
        </div>
        <div class="col-md-3">
            <br />
            <img src="https://placehold.it/300x600" />
        </div>
    </div>
</div>
@endsection
