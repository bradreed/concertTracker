@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <br />
            <h2>Frank Turner and the Sleeping Souls</h2>
            <h4>With The Menzingers and Lucero</h4>
            <h5>At The House House of Blues Orlando on 5/10/2018</h5>
            <hr>
            <h4>Artists</h4>
            <div class="row">

                <div class="col-sm-4">
                    <div class="card centered" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Highfield_-_Frank_Turner.jpg/1200px-Highfield_-_Frank_Turner.jpg'); background-size: cover; background-position: center; min-height: 300px; position: relative;">
                        <div class="text" style="position: absolute; bottom: 0; right: 0; color: #fff; background-color: rgba(0, 0, 0, 0.25); width: 100%; padding: 5px;">
                            <h4>Frank Turner</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>The Menzingers</h4>
                    </div>      
                </div>
                <div class="col-sm-4">
                    <div class="card centered">
                        <h4>Lucero</h4>
                    </div>
                </div>
                <div class="col-sm-4">
                    <a href="#">Find More Upcoming Shows</a>
                </div>
            </div>
            <br />
          
        </div>
        <div class="col-md-3">
            <br />
            <img src="https://placehold.it/300x600" />
        </div>
    </div>
</div>
@endsection
