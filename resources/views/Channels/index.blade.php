@extends('layouts.app')

@section('content')

                <div class="card card-default">
                    <div class="card card-header">Channels</div>

                    <div class="card-body">
                        <table class="table table-hover">
                             <thead>
                                 <th> Name</th>
                                 <th> Edit</th>
                                 <th> Delete</th>
                             </thead>
                             <tbody>
                                 @foreach($channel as $channel)

                                 <tr>
                                     <td>
                                         {{ $channel->title}}
                                     </td>
                                     <td>
                                         <a href="{{ route('channels.edit', ['channel' => $channel->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                     </td>
                                     <td>
                                        <form action="{{ route('channels.destroy', ['channel' => $channel->id]) }}" method="post">
                                            @csrf
                                            {{ method_field('DELETE')}}
                                            <button class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                         
                                     </td>
                                 </tr>

                                 @endforeach
                             </tbody>
                        </table>
                    </div>
                </div>
    
@endsection
 