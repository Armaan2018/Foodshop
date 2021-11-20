  <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li class=""><a class="{{ route('dashboard') }}" href="#" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        
                    </li>
                    <li><a class="has-arrow ai-icon" href="admin/assets/javascript:void()" aria-expanded="false">
						<i class="flaticon-381-television"></i>
							<span class="nav-text">Burgers</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('page.show') }}">Burgers</a></li>
                            
                            
							
                            </li>
                        </ul>
                    </li>  

                    <li><a class="has-arrow ai-icon" href="admin/assets/javascript:void()" aria-expanded="false">
						<i class="flaticon-381-controls"></i>
							<span class="nav-text">Orders</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('oreders.show.all') }}">Recent Orders</a></li>
                            <li><a href="{{ route('confirm.show.orders') }}">Completed Orders</a></li>
                            
                            
							
                            </li> 


                           
                        </ul>
                    </li>

                     <li><a class="has-arrow ai-icon" href="admin/assets/javascript:void()" aria-expanded="false">
						<i class="flaticon-381-network
"></i>
							<span class="nav-text">Restaurants</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('page.restaurant') }}">Add Restaurants</a></li>
                            
                            
                            
							
                            </li>
                    
                
                </ul>
            
				<div class="plus-box">
					<p class="fs-13 font-w300 mb-4">Organize your menus through button bellow</p>
					<a class="btn bg-white text-black btn-rounded d-block" href="admin/assets/javascript:;">+Add Menus</a>
				</div>
				<div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Burger Express Dashboard</strong> © 2021 All Rights Reserved</p>
					<p>Developed By <i class="fa fa-heart"></i> by Armaan</p>
				</div>
			</div>
        </div>