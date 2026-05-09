<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
                      <div class="action-header d-flex align-items-center justify-content-between p-3 bg-primary text-white rounded-top shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="position-relative me-3">
                                    <img src="{{URL::asset('assets/img/faces/6.jpg')}}" 
                                         class="rounded-circle border border-2 border-white shadow-sm" 
                                         alt="user-img" 
                                         style="width: 50px; height: 50px; object-fit: cover;">
                                    <span class="position-absolute border border-white rounded-circle bg-success" 
                                          style="bottom: 2px; right: 2px; width: 12px; height: 12px;"></span>
                                </div>
                                <div class="d-none d-sm-block">
                                    <h6 class="mb-0 fw-bold">Daneil Scott</h6>
                                    <small class="text-white-75">
                                        <i class="fa fa-circle text-success small me-1"></i> Online
                                    </small>
                                </div>
                            </div>
                        
                            <ul class="nav align-items-center list-unstyled mb-0">
                                <li class="nav-item">
                                    <button class="btn btn-sm btn-link text-white opacity-75 hover-opacity-100 p-2" data-bs-toggle="modal" data-bs-target="#audiomodal">
                                        <i class="si si-phone fs-5"></i>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="btn btn-sm btn-link text-white opacity-75 hover-opacity-100 p-2" data-bs-toggle="modal" data-bs-target="#videomodal">
                                        <i class="si si-camrecorder fs-5"></i>
                                    </button>
                                </li>
                                <li class="nav-item dropdown">
                                    <button class="btn btn-sm btn-link text-white opacity-75 hover-opacity-100 p-2" data-bs-toggle="dropdown">
                                        <i class="si si-options-vertical fs-5"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                                        <a class="dropdown-item py-2" href="#"><i class="fa fa-user-circle me-2 text-muted"></i> View profile</a>
                                        <a class="dropdown-item py-2" href="#"><i class="fa fa-users me-2 text-muted"></i> Add friends</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item py-2 text-danger" href="#"><i class="fa fa-ban me-2"></i> Block</a>
                                    </div>
                                </li>
                                <li class="nav-item ms-2">
                                    <button class="btn btn-sm btn-link text-white p-2" data-bs-dismiss="modal">
                                        <i class="si si-close fs-5"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>			
                        <!-- action-header end -->

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
    					<div class="card-footer bg-white border-top p-3">
                          <div class="input-group align-items-center">
                            <input type="text" 
                                   class="form-control rounded-pill bg-light border-0 px-4 shadow-none" 
                                   placeholder="اكتب رسالتك هنا..." 
                                   style="height: 48px;">
                                   
                            <button type="button" 
                                    class="btn btn-primary rounded-circle shadow-sm ms-2" 
                                    style="width: 48px; height: 48px; flex-shrink: 0;">
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
		<!-- Modal Video Call -->
            <div id="videomodal" class="modal fade" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-dark border-0 text-white shadow-lg" style="border-radius: 20px;">
                        <div class="modal-body text-center py-5">
                            
                            <!-- عنوان النافذة -->
                            <div class="mb-4">
                                <span class="badge rounded-pill bg-secondary px-3 py-2 text-uppercase" style="letter-spacing: 1px;">
                                    <i class="fas fa-video me-2"></i> Valex Video Call
                                </span>
                            </div>
            
                            <!-- صورة المستخدم مع تأثير النبض (Pulse Animation) -->
                            <div class="position-relative d-inline-block mb-4">
                                <img src="{{URL::asset('assets/img/faces/6.jpg')}}" 
                                     class="rounded-circle border border-3 border-secondary shadow" 
                                     style="width: 120px; height: 120px; object-fit: cover;" alt="img">
                                <div class="spinner-grow text-success position-absolute bottom-0 end-0" role="status" style="width: 20px; height: 20px;"></div>
                            </div>
            
                            <!-- معلومات المتصل -->
                            <h3 class="fw-bold mb-1">Daneil Scott</h3>
                            <p class="text-muted mb-5 animate-flicker">Calling...</p>
            
                            <!-- أزرار التحكم -->
                            <div class="container">
                                <div class="row justify-content-center g-3">
                                    <!-- كتم الفيديو -->
                                    <div class="col-4">
                                        <button class="btn btn-outline-light rounded-circle p-3 w-100 shadow-sm" title="Mute Video">
                                            <i class="fas fa-video-slash fs-5"></i>
                                        </button>
                                    </div>
            
                                    <!-- إنهاء المكالمة -->
                                    <div class="col-4">
                                        <button class="btn btn-danger rounded-circle p-3 w-100 shadow" data-bs-dismiss="modal">
                                            <i class="fas fa-phone-slash fs-4" style="transform: rotate(225deg);"></i>
                                        </button>
                                    </div>
            
                                    <!-- كتم الميكروفون -->
                                    <div class="col-4">
                                        <button class="btn btn-outline-light rounded-circle p-3 w-100 shadow-sm" title="Mute Mic">
                                            <i class="fas fa-microphone-slash fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
            
            <style>
                /* تأثير وميض لكلمة Calling */
                .animate-flicker {
                    animation: flicker 1.5s infinite;
                }
                @keyframes flicker {
                    0% { opacity: 0.4; }
                    50% { opacity: 1; }
                    100% { opacity: 0.4; }
                }
                
                /* تحسين شكل الأزرار عند التحويم */
                .btn-outline-light:hover {
                    background-color: rgba(255, 255, 255, 0.1);
                    color: white;
                }
            </style>
                    <!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		<!-- Audio Modal -->
            <div id="audiomodal" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content border-0 shadow-lg" style="border-radius: 20px; background: linear-gradient(145deg, #ffffff, #f0f0f0);">
                        <div class="modal-body text-center p-5">
                            <h6 class="text-uppercase tracking-widest text-muted mb-4" style="font-size: 0.8rem; letter-spacing: 2px;">Valex Voice Call</h6>
                            
                            <div class="mb-4">
                                <img src="{{URL::asset('assets/img/faces/6.jpg')}}" 
                                     class="rounded-circle shadow-sm p-1 bg-white" 
                                     style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #e9ecef;" 
                                     alt="img">
                            </div>
            
                            <h3 class="fw-bold mb-1" style="color: #334155;">Daneil Scott</h3>
                            <h6 class="text-primary fw-light animate-pulse">Calling...</h6>
            
                            <div class="mt-5">
                                <div class="row justify-content-center g-3">
                                    <div class="col-4">
                                        <a class="btn btn-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" 
                                           href="#" style="width: 55px; height: 55px;">
                                            <i class="fas fa-microphone-slash text-secondary"></i>
                                        </a>
                                        <small class="d-block mt-2 text-muted">Mute</small>
                                    </div>
            
                                    <div class="col-4">
                                        <a class="btn btn-danger rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-lg" 
                                           href="#" data-bs-dismiss="modal" 
                                           style="width: 65px; height: 65px; margin-top: -5px;">
                                            <i class="fas fa-phone-slash fs-4 text-white"></i>
                                        </a>
                                        <small class="d-block mt-2 fw-bold text-danger">End</small>
                                    </div>
            
                                    <div class="col-4">
                                        <a class="btn btn-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" 
                                           href="#" style="width: 55px; height: 55px;">
                                            <i class="fas fa-volume-up text-secondary"></i>
                                        </a>
                                        <small class="d-block mt-2 text-muted">Speaker</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                    <!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div>
<!-- modal -->
