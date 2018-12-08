@section('box')
    <!-- Modal -->
    <form action="{{action('SubmissionController@submit')}}" method="post" enctype="multipart/form-data">
     {{ csrf_field() }}
        <input type="hidden" value="{{$user->id}}" name="user_id">
        <input type="hidden" value="{{$problem->id}}" name="problem_id">
        <input type="hidden" value="user">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                     <h4 class="modal-title text-center" id="myModalLabel">{{ $problem->problem_name }}</h4>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="code">Code:</label>
                         <textarea class="form-control" style="border-radius: 4px;" rows="10" name="code" id="code" placeholder="Enter Your Code"></textarea>
                     </div>
                 </div>
                 <div class="modal-footer">
                     {{--<a class="btn btn-danger" data-dismiss="modal">close</a>--}}
                     <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
             </div>
         </div>
     </div>
    </form>
@endsection
