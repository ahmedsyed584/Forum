@extends('layouts.app')

@section('content')
                <div class="panel panel-default">
                    <div class="panel panel-header">Create a new Channel</div>

                    <div class="panel-body">
                        <form action="{{ route('channels.store') }}" method="post">

                            @csrf

                            <div class="form-group">
                                <input type="text" name="channel" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-success">Save Channel</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
      
@endsection
