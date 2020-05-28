
<form action="reg.php" method="POST">
ID Number<br>
<input type="text" name="idnum" /><br><br>
Vehicle Plate Number<br>
<input type="text" name="platenumber" /><br><br>
Registration Date<br>
<select name= "day">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  
</select>
<select name="month">
  <option value="JANUARY">JANUARY</option>
  <option value="FEBRUARY">FEBRUARY</option>
  <option value="MARCH">MARCH</option>
  <option value="APRIL">APRIL</option>
  <option value="MAY">MAY</option>
  <option value="JUNE">JUNE</option>
  <option value="JULY">JULY</option>
  <option value="AUGUST">AUGUST</option>
  <option value="SEPTEMBER">SEPTEMBER</option>
  <option value="OCTOBER">OCTOBER</option>
  <option value="NOVEMBER">NOVEMBER</option>
  <option value="DECEMBER">DECEMBER</option>
</select>

<select name="year">
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  </select><br><br>
Applicant Category<br>
<select name="app_type" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM doc_type ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Full Name<br>
<textarea name="name"></textarea><br><br>
Vehicle Type<br>
<select name="v_type" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM offices ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Session<br>
<select name= "session">
  <option value="2016/2017">2016/2017</option>
  <option value="2017/2018">2017/2018</option>
  <option value="2018/2019">2018/2019</option>
  </select><br><br>
Kuliyyah/Department<br>
<input type="text" name="department" /><br><br>
<input type="submit" value="Save" />
</form>