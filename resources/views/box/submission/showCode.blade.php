@section('box')
    <!-- Modal -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="showCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel">{{ $submission->problem['problem_name'] }}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="code">Code:</label>
                            <textarea class="form-control" style="border-radius: 4px;" rows="10" name="code" disabled id="code">{{ $submission->code }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{--<a class="btn btn-danger" data-dismiss="modal">close</a>--}}
                        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
