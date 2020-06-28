@extends('layouts.app')

@section('content')
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Data Tables</h3>
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">{{$username}} Files</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table table-data-width">
                                        <thead>
                                            <tr>
                                                <th>Download Link</th>
                                                <th>File Size</th>
                                                <th>File Name</th>
                                                <th>Upload Date</th>
                                                <th>Block Number</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Download Link</th>
                                                <th>File Size</th>
                                                <th>File Name</th>
                                                <th>Upload Date</th>
                                                <th>Block Number</th>
                                            </tr>
                                            <tr>
                                                <th colspan="5" id="paginate">{{$files->links()}}</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @foreach($files as $file)
                                            <tr>
                                                <td><button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#download{{$file->id}}">Generate Download Link</button>
                                                    <!-- Modal -->
                                                    <form id="add-row-form" action="javascript:void(0);">
                                                        <div class="modal fade" id="download{{$file->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">This Link Encrypted With Mantis Network Blockchain</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <input type="text" id="name-input" class="form-control" style="background:#fff" value="{{$file->url}}" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                        <button type="submit" id="add-row" class="btn btn-success">Copy Link</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form></td>
                                                <td>{{$file->fileSize}}</td>
                                                <td>{{$file->name}}</td>
                                                <td>{{$file->created_at}}</td>
                                                <td>{{$file->blocknumber}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                       </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

                </div><!-- /Page Inner -->

@endsection
