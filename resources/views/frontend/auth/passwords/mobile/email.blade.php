<section class="login-mob">
     
          
     <h1>Forgot your password?</h1>
     <p style="max-width: 80%; margin: auto;padding-top: 10px;">Don't worry! Resetting your password is easy. Just type the email that you used to register with Tallantor</p>
       
    
       
       
     </section>
   
     <section class="login-form-mob">
 
                 <div class="form-login">
                 <form method="post" action="{{route('frontend.auth.password.email.post')}}">
                        {{csrf_field()}}
                  
                 
                       <div class="form-group">
                         <label>Email Address</label>
                         <input type="email" name="email" class="form-control" placeholder="Email / Username" />
                       </div>
             
                       <button style="width: 100%;padding: 5px;margin: 0;" type="submit">Continue</button>
                     </form>
                  
                     <hr>
                     <p class="already">Did you remembered your password?<a href="{{route('frontend.auth.login')}}"> Try signing in </a></p>
                   </div>
          
 
     </section>
 
 
     
   
 
 
    
 
 <br>
 <br>