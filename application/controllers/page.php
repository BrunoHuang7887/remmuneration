<?php
class page extends CI_Controller {

        public function view($page = 'bruno')
        {

			/*	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			 {
							 // Whoops, we don't have a page for that!
							 show_404();
			 }
			 */
  			 $data['title'] = ucfirst($page); // Capitalize the first letter
         $data['var1'] = "Hello World";
  			 $this->load->view('templates/header', $data);
  			 $this->load->view('page/'.$page, $data);
  			 $this->load->view('templates/footer', $data);



        }

      




}
