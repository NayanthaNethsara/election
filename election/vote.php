<!Doctype html>
<html>
<style>
.btn-group button {
  background-color: #ffffff; /* Green background */
  border: 1px solid #a3a3a3; /* Green border */
  color: #303030; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #e3e3e3;
}
</style>
<body>

  <form method="POST">
<?php 


session_start();


if (($_SESSION['issubmit'] == 1) && (!empty($_SESSION['idno1'])) && (!empty($_SESSION['idno2'])) && (!empty($_SESSION['idno3'])) ) {
 

$vote1 = $_SESSION['idno1'];
$vote2 = $_SESSION['idno2'];
$vote3 = $_SESSION['idno3'];

}else{


$_SESSION = array();


            if (isset($_COOKIE[session_name()])) {


                setcookie(session_name(), '', time()-86400,'/');    

                 }

                session_destroy();

                header('location:index.php');
}


 ?>


 <center>

<div style="padding: 30px; margin: 0px; background-color: #dfdfdf;width: 1100px;">

<div style="width: 1000px; height: 150px; background-color: #dfdfdf;">
  
<img src="ac.png" style="max-height:150px; align-items: left; float: left; "> 
<br>

<h2 style="float: left;"><p> </p>ANANDA COLLEGE ELECTION 2019</h2>

<div><p> Name: </p>

<p> Grade: </p>
<p> Index: </p></div>

</div>

  <br>
<div class="btn-group" style="width:auto; max-width: 1000px;">


<button style="width:100px; height:100px; <?php if ($vote1==1 OR $vote2==1 OR $vote3==1) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">


1</button>
<button style="width:100px; height:100px; <?php if ($vote1==2 OR $vote2==2 OR $vote3==2) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">2</button>
<button style="width:100px; height:100px;<?php if ($vote1==3 OR $vote2==3 OR $vote3==3) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">3</button>
<button style="width:100px; height:100px;<?php if ($vote1==4 OR $vote2==4 OR $vote3==4) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">4</button>
<button style="width:100px; height:100px;<?php if ($vote1==5 OR $vote2==5 OR $vote3==5) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">5</button>
<button style="width:100px; height:100px;<?php if ($vote1==6 OR $vote2==6 OR $vote3==6) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">6</button>
<button style="width:100px; height:100px;<?php if ($vote1==7 OR $vote2==7 OR $vote3==7) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">7</button>


<button style="width:100px; height:100px;<?php if ($vote1==8 OR $vote2==8 OR $vote3==8) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">8</button>
<button style="width:100px; height:100px;<?php if ($vote1==9 OR $vote2==9 OR $vote3==9) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">9</button>

<button style="width:100px; height:100px; <?php if ($vote1==10 OR $vote2==10 OR $vote3==10) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">10</button>

<button style="width:100px; height:100px; <?php if ($vote1==11 OR $vote2==11 OR $vote3==11) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">11</button>

<button style="width:100px; height:100px; <?php if ($vote1==12 OR $vote2==12 OR $vote3==12) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">12</button>

<button style="width:100px; height:100px; <?php if ($vote1==13 OR $vote2==13 OR $vote3==13) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">13</button>

<button style="width:100px; height:100px; <?php if ($vote1==14 OR $vote2==14 OR $vote3==14) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">14</button>

<button style="width:100px; height:100px; <?php if ($vote1==15 OR $vote2==15 OR $vote3==15) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">15</button>

<button style="width:100px; height:100px; <?php if ($vote1==16 OR $vote2==16 OR $vote3==16) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">16</button>

<button style="width:100px; height:100px; <?php if ($vote1==17 OR $vote2==17 OR $vote3==17) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">17</button>

<button style="width:100px; height:100px; <?php if ($vote1==18 OR $vote2==18 OR $vote3==18) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">18</button>

<button style="width:100px; height:100px; <?php if ($vote1==19 OR $vote2==19 OR $vote3==19) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">19</button>

<button style="width:100px; height:100px; <?php if ($vote1==20 OR $vote2==20 OR $vote3==20) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">20</button>

<button style="width:100px; height:100px; <?php if ($vote1==21 OR $vote2==21 OR $vote3==21) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">21</button>

<button style="width:100px; height:100px; <?php if ($vote1==22 OR $vote2==22 OR $vote3==22) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">22</button>

<button style="width:100px; height:100px; <?php if ($vote1==23 OR $vote2==23 OR $vote3==23) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">23</button>

<button style="width:100px; height:100px; <?php if ($vote1==24 OR $vote2==24 OR $vote3==24) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">24</button>

<button style="width:100px; height:100px; <?php if ($vote1==25 OR $vote2==25 OR $vote3==25) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">25</button>

<button style="width:100px; height:100px; <?php if ($vote1==26 OR $vote2==26 OR $vote3==26) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">26</button>

<button style="width:100px; height:100px; <?php if ($vote1==27 OR $vote2==27 OR $vote3==27) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">27</button>

<button style="width:100px; height:100px; <?php if ($vote1==28 OR $vote2==28 OR $vote3==28) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">28</button>

<button style="width:100px; height:100px; <?php if ($vote1==29 OR $vote2==29 OR $vote3==29) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">29</button>

<button style="width:100px; height:100px; <?php if ($vote1==30 OR $vote2==30 OR $vote3==30) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">30</button>

<button style="width:100px; height:100px; <?php if ($vote1==31 OR $vote2==31 OR $vote3==31) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">31</button>


<button style="width:100px; height:100px; <?php if ($vote1==32 OR $vote2==32 OR $vote3==32) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">32</button>

<button style="width:100px; height:100px; <?php if ($vote1==33 OR $vote2==33 OR $vote3==33) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">33</button>

<button style="width:100px; height:100px; <?php if ($vote1==34 OR $vote2==34 OR $vote3==34) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">34</button>

<button style="width:100px; height:100px; <?php if ($vote1==35 OR $vote2==35 OR $vote3==35) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">35</button>

<button style="width:100px; height:100px; <?php if ($vote1==36 OR $vote2==36 OR $vote3==36) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">36</button>

<button style="width:100px; height:100px; <?php if ($vote1==37 OR $vote2==37 OR $vote3==37) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">37</button>

<button style="width:100px; height:100px; <?php if ($vote1==38 OR $vote2==38 OR $vote3==38) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">38</button>

<button style="width:100px; height:100px; <?php if ($vote1==39 OR $vote2==39 OR $vote3==39) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">39</button>

<button style="width:100px; height:100px; <?php if ($vote1==40 OR $vote2==40 OR $vote3==40) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">40</button>

<button style="width:100px; height:100px; <?php if ($vote1==41 OR $vote2==41 OR $vote3==41) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">41</button>

<button style="width:100px; height:100px; <?php if ($vote1==42 OR $vote2==42 OR $vote3==42) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">42</button>

<button style="width:100px; height:100px; <?php if ($vote1==43 OR $vote2==43 OR $vote3==43) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">43</button>

<button style="width:100px; height:100px; <?php if ($vote1==44 OR $vote2==44 OR $vote3==44) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">44</button>

<button style="width:100px; height:100px; <?php if ($vote1==45 OR $vote2==45 OR $vote3==45) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">45</button>

<button style="width:100px; height:100px; <?php if ($vote1==46 OR $vote2==46 OR $vote3==46) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">46</button>

<button style="width:100px; height:100px; <?php if ($vote1==47 OR $vote2==47 OR $vote3==47) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">47</button>

<button style="width:100px; height:100px; <?php if ($vote1==48 OR $vote2==48 OR $vote3==48) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">48</button>


<button style="width:100px; height:100px; <?php if ($vote1==49 OR $vote2==49 OR $vote3==49) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">49</button>

<button style="width:100px; height:100px; <?php if ($vote1==50 OR $vote2==50 OR $vote3==50) {
  echo 'background-color: #343434 ; color: #ffffff;';
} ?>">50</button>

</div>
<br>
<input type="submit" name="submit">
</div>
</center>
</form>

</body>
</html>
