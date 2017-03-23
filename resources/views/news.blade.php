@extends('nav')

@section('content')
<!--=========================start-news=======================-->
<div id="news" >
    <div class="center">
          <h2>Τελευταία Νέα</h2><br>
              <table border="1" style="width:65%;">
                @foreach ($latestnew as $latestnews)
                  <tr> <td>
                      <h3 style="margin-left:5px;">{{$latestnews->created_at}}</h3>
                      <p style="margin-left:55px;width:80%;"><i><u>{{$latestnews->title}}:</u></i> {{$latestnews->body}} 
                  </td></tr>
                @endforeach 
              </table>     
    </div>
</div>
	@stop