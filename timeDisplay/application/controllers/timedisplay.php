<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timedisplay extends CI_Controller {

	public function index()
	{
		$date= array('date' => date('M j, Y'),'time' => date('g:iA'));  
		$this->load->view('timedisplay.php', $date);
	}
}

?>
		<!-- $datedate= array('time' => date('M j, Y g:iA')); -->