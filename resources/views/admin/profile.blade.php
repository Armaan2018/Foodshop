@extends('admin.layouts.app')

@section('main-content')

                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="{{URL::to('')}}/media/admin/{{Auth::user()-> profile_picture}}" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0">{{Auth::user()-> name}}</h4>
											<p>Admin</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{Auth::user()-> email}}</h4>
											<p>Email</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">{{Auth::user()-> username}}</h4>
											<p>Username</p>
										</div>
									
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
               


                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-statistics mb-5">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h3 class="m-b-0" id="totalFollower">150</h3><span>Follower</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">140</h3><span>Place Stay</span>
                                            </div>
                                            <div class="col">
                                                <h3 class="m-b-0">45</h3><span>Reviews</span>
                                            </div>
                                        </div>
                                        <div class="mt-4" id="followdiv">
											<a href="" id="followanchor" class="btn btn-primary mb-1 mr-1">Follow</a> 
											<a href="javascript:void()" class="btn btn-primary mb-1">Send Message</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-blog mb-5">
                                    <h5 class="text-primary d-inline">Today Highlights</h5><a href="javascript:void()" class="pull-right f-s-16">More</a>
                                    <img src="images/profile/1.jpg" alt="" class="img-fluid mt-4 mb-4 w-100">
                                    <h4>Darwin Creative Agency Theme</h4>
                                    <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                </div>
                                <div class="profile-interest mb-5">
                                    <h5 class="text-primary d-inline">Interest</h5>
                                    <div class="row mt-4 sp4" id="lightgallery">
										<a href="images/card/pic5.jpg" data-exthumbimage="images/card/pic5.jpg" data-src="images/card/pic5.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/card/pic5.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/card/pic6.jpg" data-exthumbimage="images/card/pic6.jpg" data-src="images/card/pic+.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/card/pic6.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/card/pic7.jpg" data-exthumbimage="images/card/pic7.jpg" data-src="images/card/pic7.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/card/pic7.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/card/pic9.jpg" data-exthumbimage="images/card/pic9.jpg" data-src="images/card/pic9.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/card/pic9.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/card/pic10.jpg" data-exthumbimage="images/card/pic10.jpg" data-src="images/card/pic10.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/card/pic10.jpg" alt="" class="img-fluid">
										</a>
										<a href="images/card/pic4.jpg" data-exthumbimage="images/card/pic4.jpg" data-src="images/card/pic4.jpg" class="mb-1 col-lg-4 col-xl-4 col-sm-4 col-6">
											<img src="images/card/pic4.jpg" alt="" class="img-fluid">
										</a>
                                    </div>
                                </div>
                                <div class="profile-news">
                                    <h5 class="text-primary d-inline">Our Stuffs</h5>

                                    @foreach ($data as $myusers)
                                    	 <div class="media pt-3 pb-3">
                                        <img src="{{URL::to('')}}/media/admin/{{$myusers -> profile_picture}}" alt="image" class="mr-3 rounded" width="75">
                                        <div class="media-body">
                                            <h5 class="m-b-5">{{$myusers -> name}}</h5>
                                            <p class="mb-0">Admin</p>
                                        </div>
                                    </div>
                                   
                                    @endforeach
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link active show">Posts</a>
                                            </li>
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link">About Me</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="my-posts" class="tab-pane fade active show">
                                                <div class="my-post-content pt-3">
                                                    <div class="post-input">
                                                        <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> 
														<a href="javascript:void()" class="btn btn-primary light px-3"><i class="fa fa-link"></i> </a>
                                                        <a href="javascript:void()" class="btn btn-primary light mr-1 px-3"><i class="fa fa-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-2"><span class="mr-2"><i class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-2"><i class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                        <img src="images/profile/9.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-2"><span class="mr-2"><i class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-2"><i class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="profile-uoloaded-post pb-5">
                                                        <img src="images/profile/8.jpg" alt="" class="img-fluid">
                                                        <a class="post-title" href="javascript:void()">
                                                            <h4>Collection of textile samples lay spread</h4>
                                                        </a>
                                                        <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                            of spare which enjoy whole heart.</p>
                                                        <button class="btn btn-primary mr-2"><span class="mr-2"><i class="fa fa-heart"></i></span>Like</button>
                                                        <button class="btn btn-secondary"><span class="mr-2"><i class="fa fa-reply"></i></span>Reply</button>
                                                    </div>
                                                    <div class="text-center mb-2"><a href="javascript:void()" class="btn btn-primary">Load More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="about-me" class="tab-pane fade">
                                                <div class="profile-about-me">
                                                    <div class="pt-4 border-bottom-1 pb-3">
                                                        <h4 class="text-primary">About Me</h4>
                                                        <p class="mb-2">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence was created for the bliss of souls like mine.I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                                                    </div>
                                                </div>
                                                <div class="profile-skills mb-5">
                                                    <h4 class="text-primary mb-2">Skills</h4>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Admin</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Dashboard</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Photoshop</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Bootstrap</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Responsive</a>
                                                    <a href="javascript:void()" class="btn btn-primary light btn-xs mb-1">Crypto</a>
                                                </div>
                                                <div class="profile-lang  mb-5">
                                                    <h4 class="text-primary mb-2">Language</h4>
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i> English</a> 
													<a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-fr"></i> French</a>
                                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-bd"></i> Bangla</a>
                                                </div>
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>Mitchell C.Shay</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>example@examplel.com</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Availability <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>Full Time (Free Lancer)</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                                            </h5>
                                                        </div>
                                                        <div class="col-9"><span>27</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>Rosemont Avenue Melbourne,
                                                                Florida</span>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-3">
                                                            <h5 class="f-w-500">Year Experience <span class="pull-right">:</span></h5>
                                                        </div>
                                                        <div class="col-9"><span>07 Year Experiences</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Account Setting</h4>
                                                        <form>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Email</label>
                                                                    <input type="email" placeholder="Email" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label>Password</label>
                                                                    <input type="password" placeholder="Password" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" placeholder="1234 Main St" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Address 2</label>
                                                                <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>City</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label>State</label>
                                                                    <div class="dropdown bootstrap-select form-control"><select class="form-control" id="inputState" tabindex="-98">
                                                                        <option selected="">Choose...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                    </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="inputState" title="Choose..."><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Choose...</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                                                </div>
                                                                <div class="form-group col-md-2">
                                                                    <label>Zip</label>
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" id="gridCheck">
																	<label class="custom-control-label" for="gridCheck"> Check me out</label>
																</div>
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Sign
                                                                in</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection