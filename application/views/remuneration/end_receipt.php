<title>END</title>

<style>

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




#regForm {
  background-color: #ffffff;
  margin: 30px auto;
  font-family: Raleway;
  padding: 40px;
  width: 60%;
  min-width: 300px;
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
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


</head>
<body>

<div class="list-group-item list-group-item-primary" style="width:50%;align:center;margin:10px auto;">
<h2 style="text-align:center;">稿酬匯款資訊及收據填寫</h2>
</div>





<form id="regForm" action="/action_page.php">


  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <div class="form-group">
      <label for="formGroupExampleInput">Swift Code</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:王曉明">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">CNAPS Code</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">受款分行名稱</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">受款分行地址</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">受款分行地址</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">受款帳號</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">受款帳戶名稱</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">受款帳戶地址</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
  </div>


  <div class="tab">



    <fieldset >
      <h3 style="text-align:center;">收&nbsp;&nbsp;&nbsp;據</h3>
      <p>茲收到</p>
      <p>&nbsp;&nbsp;愛生育生物科技股份有限公司</p>
      <table>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;介紹推廣勞務費</sapn></td>
          <td><input type="text" style="margin:0px;" class="form-control" id="formGroupExampleInput" placeholder="ex:人民">幣</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" placeholder="ex:100">元整</td>
        </tr>
      </table>
      <p>&nbsp;&nbsp;此&nbsp;&nbsp;據</p>
      <table style="float:right">
        <tr>
          <td>收款人簽章:</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" placeholder="ex:100"></td>
        </tr>
        <tr>
          <td>出生年月日:</td>
          <td><input type="date"  class="form-control" id="formGroupExampleInput" ></td>
        </tr>
        <tr>
          <td>地址:</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" ></td>
        </tr>
        <tr>
          <td>電話:</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" ></td>
        </tr>

      </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

      <table>
        <tr>
          <td>中華民國</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" ></td>
          <td>年</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" ></td>
          <td>月</td>
          <td><input type="text"  class="form-control" id="formGroupExampleInput" ></td>
          <td>日</td>
        </tr>
      </table>

    </fieldset>

  </div>





  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>

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
