@extends('layouts/app')
@section('content')

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="page-section bg-alt">
                    <div class="container page__container">

                        <div class="container page__container border-bottom-2">
                            <div class="page-headline text-left">
                                <h2>Contact Us</h2>
                                <p class="mx-auto text-100" style="font-size: 20px; line-height: 2.0;">
                                  Do you have something you’d like to let us know? <br>
                                  Whether you have a comment or an idea to share, we look forward to hearing from you.<br>

                                  We try our best to use your suggestions to improve our content. Feel free to reach out to us at
                                  <b><a style="color:blue" href="mailto:contact@edulinn.com">contact@edulinn.com.</a></b><br>
                                  If you would rather call us,  | +49 178 7204222.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container page__container">
                    @if(@session('success'))
                    <div class="alert alert-success">
                        <p style="font-size: 20px;"> {{session('success')}} </p>
                    </div>    
                    @endif 
                    
                    @if($errors->any())
                    <div class="alert alert-warning" >
                    <ul style="list-style-type:none;">
                        @foreach ($errors->all() as $error)
                            <li>
                                <p style="font-size: 20px;">  {{$error}}</p>
                            </li>
                        @endforeach
                    </ul>     
                </div>        
                    @endif
                
                    <div class="container page__container">
                      <div class="page-headline text-left">
                        <h2>Submit a request</h2>
                        <form class="col-md-12 p-0 mx-auto" method="POST" action="{{ route('contact.post') }}">
                              @csrf
                            <div class="list-group list-group-form mb-0">
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="col-form-label form-label col-sm-3">Your email address</label>
                                        <div class="col-sm-12">
                                            <input type="text"
                                                   id="email"
                                                   value="{{old('email')}}"
                                                   name="email"
                                                   class="form-control"
                                                   placeholder="Your email address comes here"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group list-group-form mb-0">
                                    <div class="list-group-item">
                                        <div class="form-group row align-items-center mb-0">
                                            <label class="col-form-label form-label col-sm-3">Subject</label>
                                            <div class="col-sm-12">
                                                <input type="text"
                                                       value="{{old('subject')}}"
                                                       name="subject"
                                                       class="form-control"
                                                       placeholder="Subject" 
                                                       required>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="list-group list-group-form mb-0">
                                <div class="list-group-item">
                                    <div class="form-group row align-items-center mb-0">
                                        <label class="col-form-label form-label col-sm-3">Description</label>
                                        <div class="col-sm-12">
                                          <textarea rows="4"
                                                    class="form-control"
                                                    value="{{old('description')}}"
                                                    name="description"
                                                    placeholder="Description ..."
                                                    required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item text-right">
                                    <button type="submit" name="submit"
                                            class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                      </div>
                  
                    </div>
                  </div>
                </div>
              </div>

            <!-- // END Header Layout Content -->
@endsection
           