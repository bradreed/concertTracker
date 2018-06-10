@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Find a Show</h2>
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    
                    <form>
                        <input type="text" name="search">
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
