<?

class Receipt_model extends CI_Model{

  public function __construct()
  {
                  //parent::__construct();
                  $this->load->database();
                  // Your own constructor code
  }

  //新增資料到receipt
    public function inst_receipt($pdfid)
    {
              $num = "46111";

              //$this->load->helper('url');

              //$slug = url_title($this->input->post('title'), 'dash', TRUE);

              $data = array(
                  'cNumber' => $num,
                  'pdfid' => $pdfid,
                  'receivename' => $this->input->post('receivename'),
                  'itemname' => $this->input->post('itemname'),
                  'date' => $this->input->post('date'),
                  'amount' => $this->input->post('amount'),
                  'asign' => $this->input->post('asign'),
                  'twdid' => $this->input->post('twdid'),
                  'localname' => $this->input->post('localname'),
                  'phone'=> $this->input->post('phone'),
              );

              return $this->db->insert('receipt', $data);

              /*來一個新model*/

     }


     //更新receiptTable
     public function upd_receipt($pdfid)
     {
               $num = "46111";

               //$this->load->helper('url');

               //$slug = url_title($this->input->post('title'), 'dash', TRUE);

               $data = array(
                   'asign' => $this->input->post('asign'),
                   'twdid' => $this->input->post('twdid'),
                   'localname' => $this->input->post('localname'),
                   'phone'=> $this->input->post('phone'),
               );

               $wheredata = array(
                  'cNumber' => $num,
                  'pdfid' => $pdfid
               );

               $this->db->where('cNumber',$num);
               $this->db->where('pdfid',$pdfid);
               $this->db->update('receipt', $data);



      }




      //撈receitptable資料(以pdfid為條件)
     public function get_receipt($pdfid = FALSE)
    {
            if ($pdfid === FALSE)
            {
                    $query = $this->db->get('receipt');
                    return $query->result_array();
            }

            $query = $this->db->get_where('receipt', array('pdfid' => $pdfid));
            return $query->row_array();
    }





}
