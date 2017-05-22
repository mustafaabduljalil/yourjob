@extends('layouts.app')
@section('content')
	
     <div class="container">                          
       <div class="row"> 
          
          <h2 class="text-center">{{trans('messages.Update Information')}}</h2>

          <div class="col-md-8" >     
              <form action="/saveUpdate" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}


                  <div class="col-md-6">
                   <label for="name">{{trans('navbar.Name')}} </label>
                   <input type="text" id="name" name="newname" placeholder="{{trans('navbar.Name')}}" >
                
                  </div>

                  <div class="col-md-6">
                   <label for="jobtitle">{{trans('navbar.Job Title')}} </label>
                   <input type="text" id="jobtitle" name="newjobtitle" placeholder="{{trans('navbar.Job Title')}}"> 
                  </div>
               
                  <div class="col-md-6">
                   <label for="gtype">{{trans('navbar.Gender')}}</label>
                    <select name="newgender" id="newgender">
                        <option value="male">{{trans('navbar.male')}}</option>
                        <option value="female">{{trans('navbar.female')}}</option>
                    </select>               
                  </div>

                 <div class="col-md-6"> 
                   <label for="state">{{trans('navbar.Military')}}</label>
                    <select name="military" id="newmilitary">
                        <option value="Exempted">{{trans('navbar.Exempted')}}</option>
                        <option value="Finished">{{trans('navbar.Finished')}}</option>
                        <option value="Postponed">{{trans('navbar.Postponed')}}</option>
                    </select>
                 </div>                  


                 <div class="col-md-6">
                   <label for="address">{{trans('navbar.Address')}}</label>
                   <input type="text" id="address" name="newaddress" placeholder="{{trans('navbar.Address')}}">
                </div>


                 <div class="col-md-6">
                   <label for="city">{{trans('navbar.City')}}</label>
                   <input type="text" id="city" name="newcity" placeholder="{{trans('navbar.City')}}">
                 </div>                

                 <div class="col-md-6">
                   <label for="residence">{{trans('navbar.Country')}}</label>
                   <input type="text" id="residence" name="newcountry" placeholder="{{trans('navbar.Country')}}">
                </div>

                 <div class="col-md-6"> 
                   <label for="mobile">{{trans('navbar.Phone')}}</label>
                   <input type="text" id="phone" name="newphone" placeholder="{{trans('navbar.Phone')}}">
                 </div>
                  

                 <div class="col-md-6">
                   <label for="birth">{{trans('navbar.Birthdate')}}</label>
                   <input type="date" id="birth" name="newbirthdate"  placeholder="{{trans('navbar.Birthdate')}}">                
                 </div>


                <div class="col-md-6">
                   <label for="cv">{{trans('navbar.C.V')}}</label>
                   <input type="file" id="newcv" name="newcv">
                </div>
                  

                 <input type="submit" id="button" value="{{trans('navbar.Save')}}">

                 </form>
             </div>
             <div class="col-md-4 wrapper">
              <div class="banner">
                <img src="images/ads.png" class="img-responsive">
              </div>
            </div>
        </div>
      </div>  
@endsection