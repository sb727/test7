<?php
class Travelo extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
		$this->load->model('Hotels');
	}

    public function index()
	{
		
		$data['title'] = "CITEST"; // Capitalize the first letter
		
		/*$logged_in = $this->session->userdata('logged_in');

		if ($logged_in)*/
						
		
		$this->load->view('pages/login');

	}

	public function login(){
		
		$id = $_REQUEST['userid'];
		$pwd = $_REQUEST['pwd'];

		if ($id == 'admin' && $pwd == 'admin'){
			
			$data['root_url'] = base_url();

			$user_data = array(
				'userid'  => $id,
				'pwd'     => $pwd,
				'logged_in' => TRUE
			);

			$this->session->set_userdata($user_data);
			
			$data['hotels'] = $this->Hotels->getHotelList();


			$this->load->view('template/header', $data);
			$this->load->view('pages/homeTravelo',$data);
			$this->load->view('template/footer', $data);

		}
		else
			redirect('/');
	}

	public function search(){
		$location = $_REQUEST['location'];
		//$hotels[] =  '';
		//$hotels = $this->Hotels->getHotels($location);

		$ajax_search_result = '';
		$hotels = $this->Hotels->getHotels($location);

        if (isset($hotels) ) {
            foreach ($hotels->result_array() as $hotel) {
                $ajax_search_result.= '<div class="col-md-3" >
                            <a href="detail/'.$hotel['idx'].'" target="_blank"><img src="'.base_url().'assets/images/gallery' . $hotel['idx'] . '.png" class="gallery-thumb"></a>
                            <div class="detail" >
                                <h4>' . $hotel['title'] . '</h4><br>
                                <span>' . $hotel['location'] . '</span>
                            </div>
                        </div>';
            }			
					
        }
        else {
            $ajax_search_result = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>sorry! There isn't search result</strong>";
			
        }

        echo  $ajax_search_result;
	}
	
	public function detail($idx){
		$data['root_url'] = base_url();
		$data['hotel'] = $this->Hotels->getHotelDetail($idx);
		$this->load->view('pages/detail',$data);
	}
}