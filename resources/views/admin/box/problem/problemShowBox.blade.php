@section('box')
    {{--Basic Modal--}}
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="glyphicon-file"></i>Add Problem</h5>
                </div>
                <form action="{{action('Admin\ProblemController@save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Enter Problem Name..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Problem Description Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Problem Setter:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="setter" placeholder="Problem setter" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Total Solved:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="solved" placeholder="Total Solved" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Total Submission:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="submission" placeholder="Total Submissions" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tag:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="tag" placeholder="Enter Tag..." type="text" required>
                            </div>
                        </div><br>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Time Limit:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="time" placeholder="Time Limit" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Memory Limit:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="memory" placeholder="Memory Limit" required>
                            </div>
                        </div><br>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sample Input:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="sampleInput" placeholder="Sample Input Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sample Output:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="sampleOutput" placeholder="Sample Output Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Test Case Input:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="tcInput" placeholder="Test Case Input Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Test Case Output:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="tcOutput" placeholder="Test Case Output Here..." required></textarea>
                            </div>
                        </div><br>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="fa fa-check"></i>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--Basic Modal End--}}
    {{--Basic Edit Modal--}}
    <div id="ediModal2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="icon-pencil"></i> Edit Problem</h5>
                </div>

                <form action="{{action('Admin\ProblemController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" id="editID" name="id">

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" placeholder="Enter Name..." type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Description:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="description" placeholder="Problem Description Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Problem Setter:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="setter" placeholder="Problem setter" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Total Solved:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="solved" placeholder="Total Solved" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Total Submission:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="submission" placeholder="Total Submissions" type="text" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tag:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="tag" placeholder="Enter Tag..." type="text" required>
                            </div>
                        </div><br>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Time Limit:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="time" placeholder="Time Limit" required>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Memory Limit:</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="memory" placeholder="Memory Limit" required>
                            </div>
                        </div><br>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sample Input:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="sampleInput" placeholder="Sample Input Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sample Output:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="sampleOutput" placeholder="Sample Output Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Test Case Input:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="tcInput" placeholder="Test Case Input Here..." required></textarea>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Test Case Output:</label>
                            <div class="col-lg-9">
                                <textarea style="margin-bottom: 21px;" class="form-control" rows="5" name="tcOutput" placeholder="Test Case Output Here..." required></textarea>
                            </div>
                        </div><br>


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icon-cancel-circle2"></i> Close</button>
                        <button type="submit" id="submit-all" class="btn btn-primary"><i class="icon-checkmark4"></i> Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /basic Edit modal -->

@endsection
