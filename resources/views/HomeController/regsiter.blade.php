@extends('layouts.master')
@section('body')

<div class="row" style="height: 900px;">
    <div class="col-4" style="background: #F5F5F5;"></div>
    <div class="col-8"></div>
</div>

<div class="container">
    <div class="login_box shadow row" style="height: 670px;">
        <div class="col-3" style="background: #F5F5F5;">
            <div class="container login_side_content" style="text-align: center; margin-top: 60%;">
                <p style="font-size: 27px">Register with <span class="logo" >Study+</span></p>
            </div>
        </div>
        <div class="col-7 container">
            <form id="registration_form" class="" style="margin-top: 10%;">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control @error('name') error_input @enderror name" id="name" required>
                    @error('name')
                    <div class="error_text">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control @error('email') error_input @enderror email" id="email" aria-describedby="emailHelp" required>
                    @error('email')
                    <div class="error_text">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control @error('password') error_input @enderror password" id="password" required>
                    @error('password')
                    <div class="error_text">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="user_type" class="form-label">University Name</label>
                    <input type="text" name="uni_name" class="form-control @error('uni_name') error_input @enderror uni_name" id="email" aria-describedby="emailHelp" required>
                    @error('uni_name')
                    <div class="error_text">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="user_type" class="form-label">Studying Goals</label>
                    <div class="d-flex flex-row align-items-center">
                        <div>
                            <input name="hrs_per_day" min="1" max="24" type="number" class="form-control @error('hrs_per_day') error_input @enderror hrs_per_day" placeholder="Hours Per Day" id="email" style="width: 150px;" aria-describedby="emailHelp" required>
                            @error('hrs_per_day')
                            <div class="error_text">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div style="margin-left: 30px;">
                            <input name="hrs_per_week" min="24" max="168" type="number" class="form-control @error('hrs_per_week') error_input @enderror hrs_per_week" placeholder="Hours Per Week" id="email" style="width: 150px;" aria-describedby="emailHelp" required>
                            @error('hrs_per_week')
                            <div class="error_text">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                </div>


                
                <button type="submit" class="btn register_user_btn canon_form_button" style="">Register</button>   
            
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert From Page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
@endsection
