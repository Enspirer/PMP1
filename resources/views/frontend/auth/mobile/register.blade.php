<section class="login-mob">
     
          
    <h1>Register Here</h1>
    <p>Tell us what you are looking for</p>
      
    <h6>I'm looking...</h6>


     

    <div class="btn-group nav nav-tabs" role="group" aria-label="Basic example" id="nav-tab" role="tablist">
   
        <button type="button" class="btn btn-secondary btn-hire active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Hire</button>
        <button type="button" class="btn btn-secondary btn-work" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Work</button>
  
      </div>
      
      
    </section>
  
    <section class="login-form-mob">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="form-login">
                <form class="m-t-40" action="{{route('frontend.auth.register.post')}}" method="post">
                {{csrf_field()}}
                      <div class="form-group">
                        <label>I'm looking...</label>
                        <select class="form-select" aria-label="Default select example"  name="user_type">
                        <option value="1" selected>Someone to hire</option>
                                <option value="2">Project</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="john" name="first_name" />
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="duglas"  name="last_name"/>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="john@example.com"/>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="●●●●●●●"/>
                      </div>
                      <div class="form-group">
                            <label>Re-Enter Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="●●●●●●●"/>
                        </div>

                      <div class="form-group">
                        <label>Contact number</label>
                        <input name="contact_number"  type="text" class="form-control"  placeholder="94-712975938"/>
                      </div>
                      <div class="form-group">
                        <label>Company name</label>
                        <input name="company_name" type="text" class="form-control" placeholder="ABC Company"/>
                      </div>
                      <div class="form-group">
                        <label>Location</label>
                        <select class="form-select" aria-label="Default select example" name="location">
                        <option value="USA" selected>USA</option>
                                <option value="England">England</option>
                                <option value="India">India</option>
                                <option value="USA">USA</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Japan">Japan</option>
                                <option value="China">China</option>
                                <option value="Canada">Canada</option>
                                <option value="France">France</option>
                                <option value="Australia">Australia</option>
                        </select>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkme" />
                        <label class="form-check-label" for="exampleCheck1"
                          >By signing up you are agree with our <br />
                          <a href="">Terms and conditions.</a>
                        </label>
                      </div>
             <br>
                      <button style="width: 100%;padding: 5px;" type="submit" id="btn_submit" disabled>Sign Up</button>
                    </form>
                    <br>
                    <p class="already">Already have an account? <a href="{{route('frontend.auth.login')}}">Please sign in here</a></p>
                  </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><div class="form-login">
                <form class="m-t-40">
                  <div class="form-group">
                    <label>I'm looking...</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Someone to hire</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="john" />
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="duglas" />
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="john" />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="●●●●●●●"
                    />
                  </div>
                  <div class="form-group">
                    <label>Contact number</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="94-712975938"
                    />
                  </div>
                  <div class="form-group">
                    <label>Company name</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="ABC Company"
                    />
                  </div>
                  <div class="form-group">
                    <label>Location</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Sri Lanka</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" />
                    <label class="form-check-label" for="exampleCheck1"
                      >By signing up you are agree with our <br />
                      <a href="">Terms and conditions.</a>
                    </label>
                  </div>
         <br>
                  <button style="width: 100%;padding: 5px;" type="submit" disabled>Sign Up</button>
                </form>
                <br>
                <p class="already">Already have an account? <a href="#">Please sign in here</a></p>
              </div></div>
          </div>
    </section>
