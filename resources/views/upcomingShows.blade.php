@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card centered">
                        <h2>10</h2>
                        <h5>SHOWS</h5>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                      <h2>4</h2>
                      <h5>Venues</h5>  
                    </div>    
                    
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h2>32</h2>
                        <h5>ARTISTS</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <br />
            <h2>Upcoming Shows</h2>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card centered" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Highfield_-_Frank_Turner.jpg/1200px-Highfield_-_Frank_Turner.jpg'); background-size: cover; background-position: center; min-height: 300px; position: relative;">
                        <div class="text" style="position: absolute; bottom: 0; right: 0; color: #fff; background-color: rgba(0, 0, 0, 0.25); width: 100%; padding: 5px;">
                            <h4>Frank Turner</h4>
                            <h6>House of Blues</h6>
                            <p>6/10/2018 @ 7:00PM</p>
                            <a href="#">Get Tickets</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Frank Turner</h4>
                        <h6>House of Blues</h6>
                        <p>6/10/2018 @ 7:00PM</p>
                        <a href="#">Get Tickets</a>
                    </div>      
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Frank Turner</h4>
                        <h6>House of Blues</h6>
                        <p>6/10/2018 @ 7:00PM</p>
                        <a href="#">Get Tickets</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#">Find More Upcoming Shows</a>
                </div>
            </div>
            <br />
            <h2>Past Shows</h2>
            <a href="#">Add a Show</a>
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
