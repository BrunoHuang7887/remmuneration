<title>Remuneration</title>

<link rel="stylesheet" href="/views/remuneration/css/gelreceipt_style.css">
<style >


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
  width:80%;
  height: 80%;
  margin:0px auto;
}

@media(max-width:500px){
  .field {
    width:100%;
  }
}





fieldset {
  width: 800px;
  height: 480px;
  border:12px;
  padding:10px;
  margin-bottom:
  10px;background:#EEE;

  border-radius: 8px;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;

  background:-webkit-liner-gradient(top,#EEEEEE,#FFFFFF);
  background:linear-gradient(top,#EFEFEF,#FFFFFF);

  box-shadow:3px 3px 10px #666;
  -moz-box-shadow:3px 3px 10px #666;
  -webkit-box-shadow:3px 3px 10px #666;
  margin: 23px auto;
  position:relative;
  }






* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}



h1 {
  text-align: center;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step { /*class*/
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #ff8000;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.3;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>


<div class="list-group-item list-group-item-primary" style="width:50%;align:center;margin:0px auto;">
<h2 style="text-align:center;">稿酬簽收單</h2>
</div>


<div class="container" style="width:100%; margin:30px auto;">


    <div class="tab">



      <!--?php echo validation_errors(); ?\-->



<form id="regForm" action="<?php echo base_url('remuneration/ctmform') ?>  method="post">

        <?//php echo form_open('ctmform/'.$pdf[0]) ?>
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


                <table class="table_cas1">
                  <tr>
                    <td>負責人簽章:</td>
                    <td><h4>賴&nbsp;興&nbsp;華&nbsp;</h4></td>
                    <td></td>


                    <td>會計出納簽章:</td>
                    <td><h4>施&nbsp;伊&nbsp;華&nbsp;</h4></td>

                  </tr>

                </table>

              </div>
          </div>

            <div class="tab" style="width:80%;margin:0px auto;">

              <div class="form-group">
                <label for="formGroupExampleInput">Swift Code</label>
                <input type="text" id="swcode" name="swcode" class="form-control" id="formGroupExampleInput" placeholder="ex:">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">CNAPS Code</label>
                <input type="text" id="cnapscode" name="cnapscode" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">受款分行名稱</label>
                <input type="text" id="bankbranchname" name="bankbranchname" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">受款分行地址</label>
                <input type="text" id="bankbranchadr" name="bankbranchadr" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput2">受款帳號</label>
                <input type="text" id="acutnumber"  name="acutnumber" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">受款帳戶名稱</label>
                <input type="text" id="acutusername"  name="acutusername" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">受款帳戶地址</label>
                <input type="text" id="acutadr"  name="acutadr" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>

          </div>

          <div style="overflow:auto;" class="page">
            <div style="float:right;padding-right:10%;padding-top:2%;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div>
          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;" class="tip">
            <span class="step"></span>
            <span class="step"></span>

          </div>



  </div>

</form>




<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
