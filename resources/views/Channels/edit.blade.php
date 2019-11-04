@extends('layouts.app')

@section('content')

                <div class="panel panel-default">
                    <div class="panel panel-header">Edit Channel</div>

                    <div class="panel-body">
                        <form action="{{ route('channels.update', ['channel' => $channel->id]) }}" method="post">

                            @csrf
                            {{ method_field('PUT')}}

                            <div class="form-group">
                                <input type="text" name="channel" value="{{ $channel->title}}" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-success">Update Channel</button>
                            </div>
                            
                        </form>
                    </div>
                </div>

@endsection
