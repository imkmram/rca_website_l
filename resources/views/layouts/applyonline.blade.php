@extends('layouts.layout')
@section('content')
<!-- header end -->
<div class="clearfix"></div>
<div class="__bg">
   <div class="container container-sm">
      <div class="row">
         <div class="col-md-12">
            <div class="paddingtb_50">
               <form method="post" action="{{URL::to('/')}}/evisa-type/{{$postData['residing_code']}}" id="frmevisastep2" name="frmevisastep2" enctype='multipart/form-data'>
                  <input type="hidden" name="residing_in" id="residing_in" value="{{$postData['residing_in']}}">
                  <input type="hidden" name="residing_code" id="residing_code" value="{{$postData['residing_code']}}">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <ul class="tabs_z">
                     <li class="__current">
                        <span class="__title">eVisa</span>
                        <img src="{{URL::to('/')}}/svg/E-visa.svg" alt="" width="100" />
                     </li>
                     <li>
                        <a href="{{URL::to('/')}}">
                        <span class="__title">AIRPORT MEET &amp; GREET</span>
                        <img src="{{URL::to('/')}}/svg/MNA.svg" alt="" width="100" />
                        </a>
                     </li>
                     <li>
                        <a href="{{URL::to('/')}}">
                        <span class="__title">AIRPORT LOUNGE</span>
                        <img src="{{URL::to('/')}}/svg/LOUNGE.svg" alt="" width="100" />
                        </a>
                     </li>
                  </ul>
                  <div id="tab-1" class="tabs_z_content __current">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="__main_heading">eVisa</h1>
                           <div class="__progress_wrapper">
                              <ul class="__progress">
                                 <li class="active _50">Basic Info + Document Upload</li>
                                 <li class="">Form Filling</li>
                                 <li class="">Verification</li>
                                 <li class="">Payment</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="__form_wrapper">
                        <div class="row">
                           <div class="col-md-12">
                              <h4 class="__stylish_head">Let’s Start!</h4>
                           </div>
                           <div class="col-md-12">
                              <div class="upform">
                                 <div class="upform-main">
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             I am Traveling to
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Where you want to travel?</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <input type="text" name="travel_to" id="travel_to" value="{{$postData['travel_to']}}" readonly="" >
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             I am Citizen of
                                             <span class="strike">*</span>
                                             <div class="qs_sub">You are Citizen of?</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <input type="text" name="citizen_to" id="citizen_to" value="{{$postData['citizen_to']}}" readonly="">
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             My Passport Type is
                                             <span class="strike">*</span>
                                             <div class="qs_sub">This visa type is only for Ordinary passports</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <!--select id="passport_code" name="passport_code" required="" class="__select_drop" readonly>
                                             @foreach($passporttype_arr as $key=>$val)
                                             <option value="{{$val['passport_type_id']}}">{{$val['passport_type_name']}}</option>
                                             @endforeach
                                          </select-->
                                          <input type="text" name="ks" class="inputF" value="{{$val['passport_type_name']}}" readonly="" />
                                          <input type="hidden" name="passport_code" class="inputH" value="{{$val['passport_type_id']}}">
                                          <ul class="hiddenul">
                                            @foreach($passporttype_arr as $key=>$val)
                                              <li><span class="hidden_li" style="display: none">{{$val['passport_type_id']}}</span>{{$val['passport_type_name']}}</li>
                                            @endforeach 
                                          </ul>
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block active">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             Enter Full Name
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Your Name?</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <input type="text" name="user_name" id="user_name" value="" placeholder="" required="">
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list "></div>
                                          <div class="qs_body">
                                             Your Email
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Your Address</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <input type="text" name="email_id" id="email_id" value="" placeholder="" required="">
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             Your Mobile Number?
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Your Mobile Number</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <input type="text" name="phone_number" id="phone_number" value="" placeholder="" required="">
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block datepkr">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             Expected date of Arrival
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Date </div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <input type="text" placeholder="Expected Date of Arrival" class="datepicker" name="arrival_date" id="arrival_date"/>
                                          <div class="press_enter">PRESS ENTER</div>
                                       </div>
                                    </div>
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             Port of Arrival
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Port of Arrival</div>
                                          </div>
                                       </div>
                                       <div class="input-control outerInFoc">

                                       <!-- <div class="ui-widget">
                                        <label>Your preferred programming language: </label>
                                        <select id="combobox">
                                          <option value="">Select one...</option>
                                          <option value="ActionScript">ActionScript</option>
                                          <option value="AppleScript">AppleScript</option>
                                          <option value="Asp">Asp</option>
                                          <option value="BASIC">BASIC</option>
                                          <option value="C">C</option>
                                          <option value="C++">C++</option>
                                          <option value="Clojure">Clojure</option>
                                          <option value="COBOL">COBOL</option>
                                          <option value="ColdFusion">ColdFusion</option>
                                          <option value="Erlang">Erlang</option>
                                          <option value="Fortran">Fortran</option>
                                          <option value="Groovy">Groovy</option>
                                          <option value="Haskell">Haskell</option>
                                          <option value="Java">Java</option>
                                          <option value="JavaScript">JavaScript</option>
                                          <option value="Lisp">Lisp</option>
                                          <option value="Perl">Perl</option>
                                          <option value="PHP">PHP</option>
                                          <option value="Python">Python</option>
                                          <option value="Ruby">Ruby</option>
                                          <option value="Scala">Scala</option>
                                          <option value="Scheme">Scheme</option>
                                        </select>
                                      </div> -->

                                          <!--select id="airport_code" class="__select_drop" name="airport_code" required="">
                                             <option selected="true" value="">Airport of Arrival</option>
                                             @foreach($airport_arr as $key=>$val)
                                             <option value="{{$val['airport_id']}}">{{$val['airport_name']}}</option>
                                             @endforeach
                                          </select-->
                                          <input type="text" name="airport_code_text" class="__select_drop inputF" value="" autocomplete="off" required="" />
                                          <ul class="hiddenul">
                                            @foreach($airport_arr as $key=>$val)
                                              <li data-val="{{$val['airport_id']}}">{{$val['airport_name']}}</li>
                                            @endforeach 
                                          </ul>
                                          <input type="hidden" name="airport_code" class="inputH" value="">


                                        </div>
                                        <div class="outerclick"></div>
                                    </div>
                                    <div class="input-block">
                                       <div class="labels">
                                          <div class="qs_list"></div>
                                          <div class="qs_body">
                                             Upload Passport Frontpage
                                             <span class="strike">*</span>
                                             <div class="qs_sub">Some Information</div>
                                          </div>
                                       </div>
                                       <div class="input-control">
                                          <div class="__document_upload_box">
                                             <!-- passport front -->
                                             <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                                                   <div class="doc-head">Colored frontpage of valid passport</div>
                                                </div>
                                                <div>
                                                   <span class="btn-file"><span class="fileinput-new">Upload</span><span class="fileinput-exists">Change</span>
                                                   <input type="file" name="frontpage" required="" class="required" accept="image/jpeg">
                                                   </span>
                                                   <a href="#" class="btn btn-default fileinput-exists" id="front_remove" data-dismiss="fileinput" onclick="removeforntthumb()">Remove</a> 
                                                </div>
                                             </div>
                                             <!-- end -->
                                             <!-- passport photo -->
                                             <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput">
                                                   <div class="doc-head">Passport Size photograph</div>
                                                </div>
                                                <div>
                                                   <span class="btn-file"><span class="fileinput-new">Upload</span><span class="fileinput-exists">Change</span>
                                                   <input type="file" name="photograph" required="" class="required" accept="image/jpeg">
                                                   </span>
                                                   <a href="#" class="btn btn-default fileinput-exists" id="photo_remove" data-dismiss="fileinput" onclick="removephotothumb()">Remove</a>
                                                </div>
                                             </div>
                                             <!-- end -->
                                          </div>
                                          <div class="col-md-12">
                                             <p><strong>Photo Specifications: </strong></p>
                                             <ul class="__ct_decimal">
                                                <li>Format – JPEG</li>
                                                <li>Size – Minimum 10 KB , Maximum 1 MB</li>
                                                <li>The minimum dimensions are 350 pixels (width) x 350 pixels (height).</li>
                                                <li>Recent front facing photograph with white background to be uploaded by the applicant.</li>
                                                <li>Do not crop the Passport Image to use it as your recent photograph. Upload clear front facing photograph with preferable white/light coloured background.</li>
                                                <li>The application is liable to be rejected if the uploaded photograph are not clear and as per specification.</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12 text-center paddingtb_20">
                              <button type="submit" class="__btn __btn_next" id="btnapply" name="btnapply">NEXT STEP</button>
                           </div>
                        </div>
                        <!-- row end -->
                     </div>
                     <!-- Form wrapper -->
                  </div>
                  <!-- Tab Content End -->
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Top bg End -->
@include('layouts.middle_footer')     
@stop
