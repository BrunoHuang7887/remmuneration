<title>Remuneration</title>
<style>
table {
width:50%;
}
.table_cas1{
  width:100%;

}
table, th, td {
border: 0px solid;
border-collapse: collapse;
}
th, td {
padding: 0px;
text-align: center;
}
table#t01 tr:nth-child(even) {
background-color: #eee;
}
table#t01 tr:nth-child(odd) {
background-color: #fff;
}
table#t01 th {
background-color: black;
color: white;
}

.field{
  border-color: #0080ff;
  border-style: solid;
  width:800px;
  height: 640px;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>
<h1 style=""></h1>

<div class="list-group-item list-group-item-primary" style="width:50%;align:center;margin:0px auto;">
<h2 style="text-align:center;">稿酬簽收單</h2>
</div>


<div class="container" style="width:100%; margin:30px auto;">
  <div class="row">
    <div class="col">

    </div>
    <div class="col">


      <!--?php echo validation_errors(); ?\-->

        <?php echo form_open('ctmform/'.$pdf[0]) ?>
        <!--這是控制器-->

        <?    //將receipt table資料取出
            if(!empty($pdf)) {
              echo "<script type=\"text/javascript\">
              var name  ='".$pdf["receivename"]."'
              var item  ='".$pdf["itemname"]."'
              var redate  ='".$pdf["date"]."';
              var amount  ='".$pdf["amount"]."';
              </script>";
        }


         ?>

         <?echo  $pdf[0];?>
                <div class="field">
                    <p>領&nbsp;據&nbsp;內&nbsp;容</p>

                    <table>
                      <tr>
                        <td>收受人:</td>
                        <td><input type="text" name="receivename" id="receivename" class="form-control" id="formGroupExampleInput" placeholder="ex:王曉明"></td>

                      </tr>
                      <tr>
                        <td>名稱:</td>
                        <td><input type="text" name="itemname" id="itemname" class="form-control" id="formGroupExampleInput2" placeholder=""></td>






                      </tr>
                      <tr>
                        <td>日期:</td>
                        <td><input type="date" name="date"  id="redate" class="form-control" id="formGroupExampleInput2" placeholder=""></td>
                      </tr>
                      <tr>
                        <td>金額:</td>
                        <td><input type="text" name="amount" id="amount" class="form-control" id="formGroupExampleInput2" placeholder=""></td>

                      </tr>

                    </table>
                    <br>

                    <script type="text/javascript">

                      $("#receivename").val(name);
                      $("#itemname").val(item);
                      $("#redate").val(redate);
                      $("#amount").val(amount);

                      $("#receivename").attr('disabled','disabled');
                      $("#itemname").attr('disabled','disabled');
                      $("#redate").attr('disabled','disabled');
                      $("#amount").attr('disabled','disabled');

                    


                    </script>

                <p>領&nbsp;款&nbsp;簽&nbsp;收</p>

                <table>
                  <tr>
                    <td>收受人簽名:</td>
                    <td><input type="text" name="asign" id="asign" class="form-control" id="formGroupExampleInput" placeholder=""></td>

                  </tr>
                  <tr>
                    <td>身分證字號:</td>
                    <td><input type="text" name="twdid" id="twdid" class="form-control" id="formGroupExampleInput2" placeholder=""></td>

                  </tr>
                  <tr>
                    <td>戶籍地:</td>
                    <td><input type="text" name="localname" id="localname" class="form-control" id="formGroupExampleInput2" placeholder=""></td>
                  </tr>
                  <tr>
                    <td>電話:</td>
                    <td><input type="text" name="phone" id="phone" class="form-control" id="formGroupExampleInput2" placeholder=""></td>

                  </tr>

                </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <table class="table_cas1">
                  <tr>
                    <td>負責人簽章:</td>
                    <td><h4>賴&nbsp;興&nbsp;華&nbsp;</h4></td>
                    <td></td>
                    <td></td>
                    <td></td>

                    <td>會計出納簽章:</td>
                    <td><h4>施&nbsp;伊&nbsp;華&nbsp;</h4></td>

                  </tr>

                </table>



                </div>

                <div align="right" style=" margin:10px auto;">
                    <input type="submit" class="btn btn-info" value="寄出" />
                </div>


            </form>

    </div>

    <div class="col">




    </div>


  </div>

</div>
