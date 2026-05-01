<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
                        <div class="action-header d-flex align-items-center justify-content-between p-3 bg-primary rounded-top">
                            <div class="d-flex align-items-center">
                                <div class="position-relative mr-3">
                                    <img src="{{URL::asset('assets/img/faces/6.jpg')}}" 
                                         class="rounded-circle border border-white shadow-sm" 
                                         alt="user-img" 
                                         style="width: 50px; height: 50px; object-fit: cover;">
                                    <span class="position-absolute border border-white rounded-circle bg-success" 
                                          style="bottom: 2px; right: 2px; width: 12px; height: 12px;"></span>
                                </div>
                                <div class="d-none d-sm-block">
                                    <h5 class="text-white mb-0 font-weight-bold">Daneil Scott</h5>
                                    <small class="text-white-50">
                                        <i class="fa fa-circle text-success small mr-1"></i> Online
                                    </small>
                                </div>
                            </div>
                        
                            <ul class="nav align-items-center list-unstyled mb-0">
                                <li class="nav-item">
                                    <a href="#" class="btn btn-outline-light btn-sm border-0 rounded-circle mr-2 shadow-none" data-toggle="modal" data-target="#audiomodal">
                                        <i class="si si-phone"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-outline-light btn-sm border-0 rounded-circle mr-2 shadow-none" data-toggle="modal" data-target="#videomodal">
                                        <i class="si si-camrecorder"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="btn btn-outline-light btn-sm border-0 rounded-circle mr-2" data-toggle="dropdown">
                                        <i class="si si-options-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow border-0 mt-2">
                                        <a class="dropdown-item py-2" href="#"><i class="fa fa-user-circle mr-2 text-muted"></i> View profile</a>
                                        <a class="dropdown-item py-2" href="#"><i class="fa fa-users mr-2 text-muted"></i> Add friends</a>
                                        <a class="dropdown-item py-2" href="#"><i class="fa fa-plus mr-2 text-muted"></i> Add to group</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item py-2 text-danger" href="#"><i class="fa fa-ban mr-2"></i> Block</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="btn btn-link text-white p-0 ml-2" data-dismiss="modal">
                                        <i class="si si-close shadow-none"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>						<!-- action-header end -->

						<!-- msg_card_body -->
						<div class="card-body msg_card_body">
							<div class="chat-box-single-line">
								<abbr class="timestamp">February 1st, 2019</abbr>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Hi, how are you Jenna Side?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									Hi Connor Paige i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									You welcome Connor Paige
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Okay Bye, text you later..
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<!-- msg_card_body end -->
						<!-- card-footer -->
					<div class="card-footer bg-white border-0 p-3">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-pill border-0 bg-light shadow-none" placeholder="اكتب رسالتك هنا...">
                            
                            <button type="button" class="btn btn-primary rounded-circle ms-2" style="width: 45px; height: 45px;">
                                <i class="far fa-paper-plane" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                        <!-- card-footer end -->
					</div>
				</div>
			</div>
		</div>

		<!--Video Modal -->
		<div id="videomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark border-0 text-white">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Valex Video call</h5>
						<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-video-slash"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone bg-danger text-white"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-microphone-slash"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		<!-- Audio Modal -->
		<div id="audiomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content border-0">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Valex Voice call</h5>
						<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-volume-up bg-light"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone text-white bg-success"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-microphone-slash bg-light"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div>
<!-- modal -->
