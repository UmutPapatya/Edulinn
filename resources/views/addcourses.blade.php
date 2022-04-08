@extends('layouts/app')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Edit Course</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Edit Course

                                    </li>

                                </ol>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="page-section border-bottom-2">
                    <div class="container page__container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="page-separator">
                                    <div class="page-separator__text">Course Title</div>
                                </div>
                                <div class="form-group mb-24pt">
                                    <input type="text"
                                           class="form-control form-control-lg"
                                           placeholder="Course title comes here"
                                    <small class="form-text text-muted">Please see our <a href="">course title guideline</a></small>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-header text-center">
                                        <a href="#"
                                           class="btn btn-accent">Save changes</a>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex">
                                            <a class="flex"
                                               href="#"><strong>Save Draft</strong></a>
                                            <i class="material-icons text-muted">check</i>
                                        </div>
                                        <div class="list-group-item">
                                            <a href="#"
                                               class="text-danger"><strong>Delete Course</strong></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-12">

                                <div class="page-separator">
                                    <div class="page-separator__text">Section 1</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-32pt">
                                            <label class="form-label">Section Title</label>
                                            <input type="text"
                                           class="form-control form-control-lg"
                                           placeholder="Section title comes here"
                                    <small class="form-text text-muted">Please see our <a href="">section title guideline</a></small>
                                        </div>
                                    </div>       
                                <div class="col-md-8">
                                    <div class="form-group mb-32pt">
                                        <label class="form-label">Description</label>
                                        <!-- <textarea class="form-control" rows="3" placeholder="Course description"></textarea> -->
                                        <div style="height: 115px;"
                                            class="mb-0"
                                            data-toggle="quill"
                                            data-quill-placeholder="Course description">
                                            <h1>Hello World!</h1>
                                            <p>Some initial <strong>bold</strong> text</p>
                                            <p><br></p>
                                        </div>
                                        <small class="form-text text-muted">Shortly describe this course.</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-32pt">
                                        <label class="form-label">Video</label>
                                        <div class="card">
                                            <div class="card-body">
                                                <label class="form-label">URL</label>
                                                <input type="text"
                                                       class="form-control"
                                                       value="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0"
                                                       placeholder="Enter Video URL">
                                                <small class="form-text text-muted">Enter a valid video URL.</small>
                                                <p><br></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <a href="#"
                        class="btn btn-outline-secondary mb-24pt mb-sm-0">Add Section</a>


                    </div>
                </div>

            </div>
            <!-- // END Header Layout Content -->
@endsection
           