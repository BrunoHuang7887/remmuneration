<title>ViewPdf</title>

<link rel="stylesheet" href="/views/remuneration/css/gelreceipt_style.css">
<style>


@media(max-width:500px){
  .field {
    width:100%;
  }
}

#div_style1{
  width:600px;
  height:600px;
  margin: 0px auto;
  margin-top: 10% ;
  background-color: #ff8000;
}

#btn_viewpdf{
  width:50%;
  height:50px;
  position: relative;
  top: 300px;
  left: 600px;
}

#btn_save{
  width:50%;
  height:100px;
  position: relative;
  top: 300px;
  left: 700px;

}

</style>
</head>
<body>





<h1>客戶簽收連結:</h1>


<a id="btn_save" target="_blank" href="<?echo "http://{$_SERVER["SERVER_NAME"]}/remuneration/ctmreceipt/{$mrnumber}_{$pdfid}" ?>"
    class="badge badge-info">客戶簽收及填寫匯款資訊連結</a>

<a id="btn_viewpdf" target="_blank" href="<?echo "http://{$_SERVER["SERVER_NAME"]}/remuneration/viewpdf/{$mrnumber}_{$pdfid}"?>"
  class="badge badge-info">檢視稿酬簽收單PDF</a>
