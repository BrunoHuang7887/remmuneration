<?php
class news_model extends CI_Model {

public function __construct()
    {
              $sign1 = $this->load->database();

    }



public function get_news($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('id' => $slug));
        return $query->row_array();
}

/*create 新的news*/
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);

        /*來一個新model*/

    }


}
