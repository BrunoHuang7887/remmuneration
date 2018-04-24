<?php

function randnum()
{
  mt_srand((double)microtime()*1000000);  //以時間當亂數種子
      /*$Rand = Array(); //定義為陣列
      $count = 500 ; //共產生幾筆
      for ($i = 1; $i <= $count; $i++) {
          $randval = mt_rand(1,10000000); //取得範圍為1~500亂數
           if (in_array($randval, $Rand)) { //如果已產生過迴圈重跑
              $i--;
          }else{
              $Rand[] = $randval; //若無重復則 將亂數塞入陣列
          }
      }*/
      $random=30;
      $randoma = "";
      //FOR回圈以$random為判斷執行次數
      for ($i=1;$i<=$random;$i=$i+1)
      {
      //亂數$c設定三種亂數資料格式大寫、小寫、數字，隨機產生
      $c=rand(1,3);
      //在$c==1的情況下，設定$a亂數取值為97-122之間，並用chr()將數值轉變為對應英文，儲存在$b
      if($c==1){$a=mt_rand(97,122);$b=chr($a);}
      //在$c==2的情況下，設定$a亂數取值為65-90之間，並用chr()將數值轉變為對應英文，儲存在$b
      if($c==2){$a=mt_rand(65,90);$b=chr($a);}
      //在$c==3的情況下，設定$b亂數取值為0-9之間的數字
      if($c==3){$b=mt_rand(0,9);}
      //使用$randoma連接$b
      $randoma=$randoma.$b;
      }
      //輸出$randoma每次更新網頁你會發現，亂數重新產生了
    return $randoma;


}



class Remuneration extends CI_Controller {

    public function __construct()
    {
            parent::__construct(); //呼叫父類別,建構子
            $this->load->model('receipt_model');
    }



      /*
        public function view($page=NULL)
        {

            $this->load->helper('form');
            $this->load->library('form_validation');
            $data['title'] = 'Create a news item';

            $this->form_validation->set_rules('receivename', 'receivename', 'required');
            $this->form_validation->set_rules('itemname', 'itemname', 'required');



            if ($this->form_validation->run() === FALSE)
            {
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $data['var1'] = "Hello World";
               $this->load->view('templates/header', $data);
               $this->load->view('remuneration/'.$page, $data);
               $this->load->view('templates/footer', $data);

            }
            else
            {

                $this->load->view('remuneration/dispdf');


            }





        }
        */


        //酬稿簽收頁面
        public function formreceipt(){

          $this->load->helper('form');
          $this->load->library('form_validation');


          $this->form_validation->set_rules('receivename', 'receivename', 'required');
          $this->form_validation->set_rules('itemname', 'itemname', 'required');
          $this->form_validation->set_rules('date', 'date', 'required');
          $this->form_validation->set_rules('amount', 'amount', 'required');



          if ($this->form_validation->run() === FALSE)
          {
              //$data['title'] = ucfirst($page); // Capitalize the first letter
              $data['auth'] = 'accountant';
             //randnum();
             $this->load->view('templates/header');
             $this->load->view('remuneration/gelreceipt',$data);
             $this->load->view('templates/footer');

          }
          else
          {
            $randvar = randnum();

            $this->load->library('pdf');
            $objpdf = new Pdf();


            $objpdf->pdfpath='recipt.pdf'; //指定讀取pdf路徑
            $objpdf->SetMargins(PDF_MARGIN_LEFT,40, PDF_MARGIN_RIGHT);

            $objpdf->SetAutoPageBreak(true, 40);

            $objpdf->AddPage();

            ini_set('memory_limit', '256M');
            $font_path = 'ipag00303/SourceHanSansTC-Regular.ttf';
              if (file_exists($font_path)) {
                $font_name = $objpdf->addTTFfont($font_path, 'TrueTypeUnicode');
                $objpdf->SetFont($font_name, 'B', 15);
              }
            $objpdf->SetTextColor(0,0,255);

            $objpdf->Text(50,45,$this->input->post('receivename'));
            $objpdf->Text(50,52,$this->input->post('itemname'));
            $objpdf->Text(50,59,$this->input->post('date'));
            $objpdf->Text(50,65,$this->input->post('amount'));


            $this->receipt_model->inst_receipt($randvar);
            /*指定pdf儲存路徑*/

            $filename = "receipt_".$randvar.".pdf";
            $filepath = $_SERVER["DOCUMENT_ROOT"]."/remuneration/pdffile_temp/";
            $filepoint = $filepath."\\".$filename;

            $objpdf->Output($filepoint,"F");
            $data_dispdf["mrnumber"]="46111";
            $data_dispdf["pdfid"]=$randvar;

            $this->load->view('templates/header', $data_dispdf);
            $this->load->view('remuneration/dispdf', $data_dispdf);
            $this->load->view('templates/footer', $data_dispdf);




          }


  }


    public function viewpdf($path = NULL){

      $str_ary = explode("_",$path);
      $localid=$str_ary[0];
      $pdfid = $str_ary[1];

      $filepath = $_SERVER["DOCUMENT_ROOT"]."/remuneration/pdffile_temp/receipt_";
      $this->load->library('pdf');
      $objpdf = new Pdf();
      $objpdf->pdfpath=$filepath.$pdfid.".pdf";
      $objpdf->Output("temp.pdf","I");



    }






      public function confpdf(){



        $this->load->view('templates/header');
        $this->load->view('remuneration/confpdf');
        $this->load->view('templates/footer');









      }


        public function ctmreceipt($id = NULL){
            //將id分割為病歷號和pdfid

            $str_ary = explode("_",$id);
            $localid=$str_ary[0];
            $pdfid = $str_ary[1];


            $this->load->helper('form');
            $this->load->library('form_validation');


            $this->form_validation->set_rules('asign', 'asign', 'required');
            $this->form_validation->set_rules('twdid', 'twdid', 'required');
            $this->form_validation->set_rules('localname', 'localname', 'required');
            $this->form_validation->set_rules('phone', 'phone', 'required');





                //$data['title'] = ucfirst($page); // Capitalize the first letter
                $data['receipt_item'] = $this->receipt_model->get_receipt($pdfid);
                //var_dump($data['receipt_item']);


                $data_dispdf["pdf"]=$data['receipt_item'];
                array_push($data_dispdf["pdf"],$id);
                var_dump($data_dispdf["pdf"]);
                $this->load->view('templates/header', $data_dispdf);
                $this->load->view('remuneration/ctmreceipt', $data_dispdf);
                $this->load->view('templates/footer', $data_dispdf);

      }


      public function ctmform($id = NULL)
      {

        /*$this->load->view('templates/header', $data);
        $this->load->view('remuneration/dispdf',$data);
        $this->load->view('templates/footer', $data);*/
        //header('Location: '.$uri.'/dashboard/');
        //header('Location:/ctmreceipt/'.$id);
        $filepath = $_SERVER["DOCUMENT_ROOT"]."/remuneration/pdffile_temp/";

        $str_ary = explode("_",$id);
        $id=$str_ary[0];
        $pdfid = $str_ary[1];

        $this->load->library('pdf');
        $objpdf = new pdf();
        $objpdf->pdfpath=$filepath.'receipt_'.$pdfid.'.pdf'; //指定讀取pdf路徑

        //$objpdf->pdfpath='recipt.pdf';
        $objpdf->SetMargins(PDF_MARGIN_LEFT,40, PDF_MARGIN_RIGHT);

        $objpdf->SetAutoPageBreak(true, 40);

        $objpdf->AddPage();

        ini_set('memory_limit', '256M');
        $font_path = 'ipag00303/SourceHanSansTC-Regular.ttf';
          if (file_exists($font_path)) {
            $font_name = $objpdf->addTTFfont($font_path, 'TrueTypeUnicode');
            $objpdf->SetFont($font_name, 'B', 15);
          }
        $objpdf->SetTextColor(0,0,255);

        $objpdf->Text(50,90,$this->input->post('asign'));
        $objpdf->Text(50,97,$this->input->post('twdid'));
        $objpdf->Text(50,102,$this->input->post('localname'));
        $objpdf->Text(50,110,$this->input->post('phone'));

        //$objpdf->Output("op.pdf","I");

        /*指定pdf儲存路徑*/

        $filename = "receipt_".$pdfid.".pdf";
        //$filepath = $_SERVER["DOCUMENT_ROOT"]."/remuneration/pdffile_temp/";
        $filepoint = $filepath."\\".$filename;


        $objpdf->Output($filepoint,"F");
        $this->receipt_model->upd_receipt($pdfid);

        $data_dispdf["mrnumber"]="46111";
        //$data_dispdf["pdfid"]=$randvar;
        $this->load->view('templates/header', $data_dispdf);
        //$this->load->view('remuneration/dispdf', $data_dispdf);
        $this->load->view('templates/footer', $data_dispdf);

      }





}
