<!DOCTYPE html>
<html>
<head>
	<title>FeedBack Form</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	* {
    box-sizing: border-box;
}
  	input[type=text], select, textarea,input[type=email] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}



input[type=reset] {
    background-color:#B22222;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-right: 16px;
}

button {
    background-color: #4CAF50;*/
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;

}


.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

@media screen and (max-width: 600px) {
    .col-25, .col-75 {
        width: 100%;
        margin-top: 0;
    }
}
@media screen and (max-width: 600px){
	input[type=reset],button{
		width: 25%;
		overflow: auto;
		margin-top: 0;
	}
}
@media screen and (max-width: 400px){
	.col-25,.col-75{
		width: 50%
		margin-top: 0;
	}
  </style>
}



</head>
<body background="background\benitos.jpg">
<div class="container">
	<div class="main-wrapper col-xs-12">
	<h1 style="text-align: center;"><b><i><u>CONTACT US</u></i></b></h1>
	<h3 style="text-align: center;"><i> Customer Care Number<span class="glyphicon glyphicon-phone">  1800-000-0000</span></i></h3>
	<h3 style="text-align: center;"><i>PizzaLive Email Id <span class="glyphicon glyphicon-envelope">  feedback.pizzaLive@gmail.com</span></i></h3>
	<h3 style="text-align: center;"><b><i><u> FEEDBACK</u></i></b></h3>
	<h4 style="text-align: justify-all;" color="black"><i>Please take a moment to tell us what you think about our website, our products, our organization, or anything else that comes to mind. We welcome all of your comments and suggestions that will help us serve you better. And...please visit us often!<br>
All fields marked with * are required </i></h4><br>
	<form action="sendform.php" name="myForm" onsubmit="validateForm()" method="post">
		<div class="form-group">
		<!--<div style="text-align: center; font-size: 18px;" class="content-wrapper col-xs-12 pd-N">
		<label for="title">Title:</label><br> <input type="radio" name="title" value="Mr" checked="Mr"><label>Mr</label>
			<input type="radio" name="title" value="Ms"><label>Ms</label>
			<input type="radio" name="title" value="Mrs"><label>Mrs</label><br>

		</div>-->
		<div class="row">
			<div class="col-25">
				<label for="title">Title</label>
			</div>
			<div class="col-75">
				<input type="radio" name="title" value="Mr" checked="Mr"><label>Mr</label>
			<input type="radio" name="title" value="Ms"><label>Ms</label>
			<input type="radio" name="title" value="Mrs"><label>Mrs</label>
			</div>
		</div>



		<div class="row">
			<div class="col-25">
				<label for="fname">First Name</label>
			</div>
			<div class="col-75">
				<input type="text" id="fname" name="fname" placeholder="Your Name..." required="fname"> 
			</div>
		</div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Your last name.." required="lname">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
        <select id="city" name="city">
          <option selected="" hidden="" value=""></option>  
          <option value="Agra">Agra</option>
				<option value="AHMADNAGAR">AHMADNAGAR</option>
                <option value="AHMEDABAD">AHMEDABAD</option>
                <option value="AJMER">AJMER</option>
	            <option value="Akola">Akola</option>
                <option value="ALIGARH">ALIGARH</option>
                <option value="ALLAHABAD">ALLAHABAD</option>
                <option value="ALWAR">ALWAR</option>
                <option value="AMBALA">AMBALA</option>
                <option value="AMRAVATI">AMRAVATI</option>
                <option value="AMRITSAR">AMRITSAR</option>
                <option value="ANAND">ANAND</option>
                <option value="Ara">Ara</option>
                <option value="ASANSOL">ASANSOL</option>
                <option value="AURANGABAD">AURANGABAD</option>
                <option value="AURANGABAD">AURANGABAD</option>
                <option value="BADDI">BADDI</option>
                <option value="BADLAPUR">BADLAPUR</option>
                <option value="Bahadurgarh">Bahadurgarh</option>
                <option value="BANGALORE">BANGALORE</option>
                <option value="Barabanki">Barabanki</option>
                <option value="BARAMATI">BARAMATI</option>
                <option value="Bardoli">Bardoli</option>
                <option value="BAREILLY">BAREILLY</option>
                <option value="Batala">Batala</option>
                <option value="Begusarai">Begusarai</option>
                <option value="BELGAUM">BELGAUM</option>
                <option value="BELLARI">BELLARI</option>
                <option value="BERHAMPUR">BERHAMPUR</option>
                <option value="BETTIAH">BETTIAH</option>
                <option value="BHAGALPUR">BHAGALPUR</option>
                <option value="BHARUCH">BHARUCH</option>
                <option value="BHATINDA">BHATINDA</option>
                <option value="BHAVNAGAR">BHAVNAGAR</option>
                <option value="BHILAI">BHILAI</option>
                <option value="BHILWARA">BHILWARA</option>
                <option value="BHIWADI">BHIWADI</option>
                <option value="BHIWANDI">BHIWANDI</option>
                <option value="BHIWANI">BHIWANI</option>
                <option value="BHOPAL">BHOPAL</option>
                <option value="Bhuj">Bhuj</option>
                <option value="BHUWANESHWAR">BHUWANESHWAR</option>
                <option value="BIJAPUR">BIJAPUR</option>
                <option value="BIJNOR">BIJNOR</option>
                <option value="Bikaner">Bikaner</option>
                <option value="BILASPUR">BILASPUR</option>
                <option value="Boisar">Boisar</option>
                <option value="Bokaro">Bokaro</option>
                <option value="BURDWAN">BURDWAN</option>
                <option value="CALICUT">CALICUT</option>
                <option value="CHANDIGARH">CHANDIGARH</option>
                <option value="Chandrapur">Chandrapur</option>
                <option value="CHENNAI">CHENNAI</option>
                <option value="Chhindwara">Chhindwara</option>
                <option value="Chiplun">Chiplun</option>
                <option value="Chittorgarh">Chittorgarh</option>
                <option value="COCHIN">COCHIN</option>
                <option value="COIMBATORE">COIMBATORE</option>
                <option value="CUTTACK">CUTTACK</option>
                <option value="DAMAN">DAMAN</option>
                <option value="Darbhanga">Darbhanga</option>
                <option value="DARJEELING">DARJEELING</option>
                <option value="DAVANGERE">DAVANGERE</option>
                <option value="DEHRADUN">DEHRADUN</option>
                <option value="DEWAS">DEWAS</option>
                <option value="DHANBAD">DHANBAD</option>
                <option value="DHARAMSHALA">DHARAMSHALA</option>
                <option value="DHARWAD">DHARWAD</option>
                <option value="Dhule">Dhule</option>
                <option value="Dibrugarh">Dibrugarh</option>
                <option value="DIMAPUR">DIMAPUR</option>
                <option value="DURG">DURG</option>
                <option value="DURGAPUR">DURGAPUR</option>
                <option value="Erode">Erode</option>
                <option value="FARIDABAD">FARIDABAD</option>
                <option value="FARIDKOT">FARIDKOT</option>
                <option value="FAZILKA">FAZILKA</option>
                <option value="Firozpur">Firozpur</option>
                <option value="GANDHIDHAM">GANDHIDHAM</option>
                <option value="Gandhinagar">Gandhinagar</option>
                <option value="GANGTOK">GANGTOK</option>
                <option value="GAYA">GAYA</option>
                <option value="GHAZIABAD">GHAZIABAD</option>
                <option value="GOA">GOA</option>
                <option value="GORAKHPUR">GORAKHPUR</option>
                <option value="GREATER NOIDA">GREATER NOIDA</option>
                <option value="GULBARGA">GULBARGA</option>
                <option value="GUNTUR">GUNTUR</option>
                <option value="GURGAON">GURGAON</option>
                <option value="GUWAHATI">GUWAHATI</option>
                <option value="GWALIOR ">GWALIOR </option>
                <option value="Hajipur">Hajipur</option>
                <option value="HALDIA">HALDIA</option>
                <option value="HALDWANI">HALDWANI</option>
                <option value="Hapur">Hapur</option>
                <option value="HARDA">HARDA</option>
                <option value="HARIDWAR">HARIDWAR</option>
                <option value="HAZARIBAGH">HAZARIBAGH</option>
                <option value="HISAR">HISAR</option>
                <option value="HOOGLY">HOOGLY</option>
                <option value="HOSHIARPUR">HOSHIARPUR</option>
                <option value="HOWRAH">HOWRAH</option>
                <option value="HUBLI">HUBLI</option>
                <option value="HYDERABAD">HYDERABAD</option>
                <option value="INDORE">INDORE</option>
                <option value="Itanagar">Itanagar</option>
                <option value="J P NAGAR ">J P NAGAR </option>
                <option value="JABALPUR">JABALPUR</option>
                <option value="Jabli">Jabli</option>
                <option value="JADAVPUR">JADAVPUR</option>
                <option value="JAIGOAN">JAIGOAN</option>
                <option value="JAIPUR">JAIPUR</option>
                <option value="JALANDHAR">JALANDHAR</option>
                <option value="JALGAON">JALGAON</option>
                <option value="JAM NAGAR">JAM NAGAR</option>
                <option value="JAMMU">JAMMU</option>
                <option value="JAMSHEDPUR">JAMSHEDPUR</option>
                <option value="JHANSI">JHANSI</option>
                <option value="JODHPUR">JODHPUR</option>
                <option value="JORHAT">JORHAT</option>
                <option value="JUNAGADH">JUNAGADH</option>
                <option value="Kadapa">Kadapa</option>
                <option value="KAITHAL">KAITHAL</option>
                <option value="KAKINADA">KAKINADA</option>
                <option value="KANCHIPURAM">KANCHIPURAM</option>
                <option value="KANGRA">KANGRA</option>
                <option value="KANPUR">KANPUR</option>
                                                                                    <option value="Kapurthala">Kapurthala</option>
                                                                                    <option value="KARNAL">KARNAL</option>
                                                                                    <option value="Kashipur">Kashipur</option>
                                                                                    <option value="KATNI">KATNI</option>
                                                                                    <option value="KATRA">KATRA</option>
                                                                                    <option value="KHANDWA">KHANDWA</option>
                                                                                    <option value="KHANNA">KHANNA</option>
                                                                                    <option value="KHARAGPUR">KHARAGPUR</option>
                                                                                    <option value="KHARAR">KHARAR</option>
                                                                                    <option value="KHARGHAR">KHARGHAR</option>
                                                                                    <option value="KHEDA">KHEDA</option>
                                                                                    <option value="KODAIKANAL">KODAIKANAL</option>
                                                                                    <option value="KOHLAPUR">KOHLAPUR</option>
                                                                                    <option value="KOLAR">KOLAR</option>
                                                                                    <option value="KOLKATA">KOLKATA</option>
                                                                                    <option value="KOLLAM">KOLLAM</option>
                                                                                    <option value="KORBA">KORBA</option>
                                                                                    <option value="KOTA">KOTA</option>
                                                                                    <option value="KOTTAYAM">KOTTAYAM</option>
                                                                                    <option value="KULLU">KULLU</option>
                                                                                    <option value="Kurnool">Kurnool</option>
                                                                                    <option value="KURUKSHETRA">KURUKSHETRA</option>
                                                                                    <option value="KUTCH">KUTCH</option>
                                                                                    <option value="LATUR">LATUR</option>
                                                                                    <option value="LIMBDI">LIMBDI</option>
                                                                                    <option value="LONAVALA">LONAVALA</option>
                                                                                    <option value="LUCKNOW">LUCKNOW</option>
                                                                                    <option value="LUDHIANA">LUDHIANA</option>
                                                                                    <option value="MADURAI">MADURAI</option>
                                                                                    <option value="MAHABALESHWAR">MAHABALESHWAR</option>
                                                                                    <option value="MANDI">MANDI</option>
                                                                                    <option value="MANGALORE">MANGALORE</option>
                                                                                    <option value="MANIPAL">MANIPAL</option>
                                                                                    <option value="MARMUGAO">MARMUGAO</option>
                                                                                    <option value="MATHURA">MATHURA</option>
                                                                                    <option value="MEERUT">MEERUT</option>
                                                                                    <option value="Mehsana">Mehsana</option>
                                                                                    <option value="MIRAJ">MIRAJ</option>
                                                                                    <option value="MOGA">MOGA</option>
                                                                                    <option value="MOHALI">MOHALI</option>
                                                                                    <option value="MORADABAD">MORADABAD</option>
                                                                                    <option value="Mount Abu">Mount Abu</option>
                                                                                    <option value="MUGHALSARAI">MUGHALSARAI</option>
                                                                                    <option value="MUMBAI">MUMBAI</option>
                                                                                    <option value="MUSSOORIE">MUSSOORIE</option>
                                                                                    <option value="MUZZAFARNAGAR">MUZZAFARNAGAR</option>
                                                                                    <option value="MUZZAFARPUR">MUZZAFARPUR</option>
                                                                                    <option value="MYSORE">MYSORE</option>
                                                                                    <option value="NAGAON">NAGAON</option>
                                                                                    <option value="NAGPUR">NAGPUR</option>
                                                                                    <option value="NAINITAL">NAINITAL</option>
                                                                                    <option value="Nanded">Nanded</option>
                                                                                    <option value="NASIK">NASIK</option>
                                                                                    <option value="NAVI MUMBAI">NAVI MUMBAI</option>
                                                                                    <option value="NAVSARI">NAVSARI</option>
                                                                                    <option value="NAWANSHAHR">NAWANSHAHR</option>
                                                                                    <option value="NEEMUCH">NEEMUCH</option>
                                                                                    <option value="NELLORE">NELLORE</option>
                                                                                    <option value="NEW DELHI">NEW DELHI</option>
                                                                                    <option value="NEW PANVEL">NEW PANVEL</option>
                                                                                    <option value="NOIDA">NOIDA</option>
                                                                                    <option value="OOTY">OOTY</option>
                                                                                    <option value="Palakkad">Palakkad</option>
                                                                                    <option value="Palampur">Palampur</option>
                                                                                    <option value="Palanpur">Palanpur</option>
                                                                                    <option value="PALGHAR">PALGHAR</option>
                                                                                    <option value="PANCHKULA">PANCHKULA</option>
                                                                                    <option value="PANIPAT">PANIPAT</option>
                                                                                    <option value="PATHANKOT">PATHANKOT</option>
                                                                                    <option value="PATIALA">PATIALA</option>
                                                                                    <option value="PATNA">PATNA</option>
                                                                                    <option value="Patrasi">Patrasi</option>
                                                                                    <option value="Phagwara">Phagwara</option>
                                                                                    <option value="PINJORE">PINJORE</option>
                                                                                    <option value="Puducherry">Puducherry</option>
                                                                                    <option value="PUNE">PUNE</option>
                                                                                    <option value="PURI">PURI</option>
                                                                                    <option value="Purnia">Purnia</option>
                                                                                    <option value="Raebareli">Raebareli</option>
                                                                                    <option value="RAIGAD">RAIGAD</option>
                                                                                    <option value="Raigarh">Raigarh</option>
                                                                                    <option value="RAIPUR">RAIPUR</option>
                                                                                    <option value="RAJAHAMUNDRY">RAJAHAMUNDRY</option>
                                                                                    <option value="RAJENDRANAGAR MANDAL">RAJENDRANAGAR MANDAL</option>
                                                                                    <option value="RAJKOT">RAJKOT</option>
                                                                                    <option value="Rajpura">Rajpura</option>
                                                                                    <option value="RAMNAGAR">RAMNAGAR</option>
                                                                                    <option value="RANCHI">RANCHI</option>
                                                                                    <option value="Ratangiri">Ratangiri</option>
                                                                                    <option value="RATLAM">RATLAM</option>
                                                                                    <option value="REWA">REWA</option>
                                                                                    <option value="REWARI">REWARI</option>
                                                                                    <option value="Rishikesh">Rishikesh</option>
                                                                                    <option value="ROHTAK">ROHTAK</option>
                                                                                    <option value="RONGPO">RONGPO</option>
                                                                                    <option value="ROORKEE">ROORKEE</option>
                                                                                    <option value="ROURKELA">ROURKELA</option>
                                                                                    <option value="RUDRAPUR">RUDRAPUR</option>
                                                                                    <option value="SAGAR">SAGAR</option>
                                                                                    <option value="SAHARANPUR">SAHARANPUR</option>
                                                                                    <option value="Salcette">Salcette</option>
                                                                                    <option value="SALEM">SALEM</option>
                                                                                    <option value="SAMBALPUR">SAMBALPUR</option>
                                                                                    <option value="SANGLI">SANGLI</option>
                                                                                    <option value="SANGRUR">SANGRUR</option>
                                                                                    <option value="SATARA">SATARA</option>
                                                                                    <option value="Satna">Satna</option>
                                                                                    <option value="SECUNDRABAD">SECUNDRABAD</option>
                                                                                    <option value="Serampore">Serampore</option>
                                                                                    <option value="SHAJAHANPUR">SHAJAHANPUR</option>
                                                                                    <option value="SHILLONG">SHILLONG</option>
                                                                                    <option value="SHIMLA">SHIMLA</option>
                                                                                    <option value="SHIMOGA">SHIMOGA</option>
                                                                                    <option value="SHIRDI">SHIRDI</option>
                                                                                    <option value="SILCHAR">SILCHAR</option>
                                                                                    <option value="SILIGURI">SILIGURI</option>
                                                                                    <option value="Silvassa">Silvassa</option>
                                                                                    <option value="SIOLIM">SIOLIM</option>
                                                                                    <option value="SIRSA">SIRSA</option>
                                                                                    <option value="SIWAN">SIWAN</option>
                                                                                    <option value="SOLAN">SOLAN</option>
                                                                                    <option value="SOLAPUR">SOLAPUR</option>
                                                                                    <option value="SONIPAT">SONIPAT</option>
                                                                                    <option value="SRI GANGANAGAR">SRI GANGANAGAR</option>
                                                                                    <option value="SURAT">SURAT</option>
                                                                                    <option value="Surendranagar">Surendranagar</option>
                                                                                    <option value="Tezpur">Tezpur</option>
                                                                                    <option value="THANE">THANE</option>
                                                                                    <option value="Thanjavur">Thanjavur</option>
                                                                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                                                                    <option value="THRISSUR">THRISSUR</option>
                                                                                    <option value="Tinsukia">Tinsukia</option>
                                                                                    <option value="TIRUCHIRAPALLI (TRICHY)">TIRUCHIRAPALLI (TRICHY)</option>
                                                                                    <option value="TIRUNELVELLI">TIRUNELVELLI</option>
                                                                                    <option value="TIRUPATI">TIRUPATI</option>
                                                                                    <option value="TIRUPUR">TIRUPUR</option>
                                                                                    <option value="TRIVANDRUM">TRIVANDRUM</option>
                                                                                    <option value="TUMKUR">TUMKUR</option>
                                                                                    <option value="UDAIPUR">UDAIPUR</option>
                                                                                    <option value="UJJAIN">UJJAIN</option>
                                                                                    <option value="VADODARA">VADODARA</option>
                                                                                    <option value="VALSAD">VALSAD</option>
                                                                                    <option value="VAPI">VAPI</option>
                                                                                    <option value="VARANASI">VARANASI</option>
                                                                                    <option value="VELLORE">VELLORE</option>
                                                                                    <option value="VIJAYAWADA">VIJAYAWADA</option>
                                                                                    <option value="VISHAKHAPATNAM">VISHAKHAPATNAM</option>
                                                                                    <option value="VIZIANAGARAM">VIZIANAGARAM</option>
                                                                                    <option value="WARANGAL">WARANGAL</option>
                                                                                    <option value="Wardha">Wardha</option>
                                                                                    <option value="YAMUNA NAGAR">YAMUNA NAGAR</option>
                                                                                    <option value="Yavatmal">Yavatmal</option>
                                                                                    <option value="ZIRAKPUR">ZIRAKPUR</option>
        </select>
      </div>
    </div>
    <div class="row">
    	<div class="col-25">
    		<label for="contact">Contact</label>
    	</div>
    	<div class="col-75">
    		<input type="text" name="contact" id="contact" placeholder="contact*" required="contact">
    	</div>
    </div>
    <div class="row">
    	<div class="col-25">
    		<label for="email">Email</label>
    	</div>
    	<div class="col-75">
    		<input type="email" name="email" id="email" placeholder="email*" required="email">
    	</div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="feedback">Feedback</label>
      </div>
      <div class="col-75">
        <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <br>
    <div class="row">
    	
    	
    	<button type="submit" onclick="">Next</button>   <input type="reset" name="Reset"> 
    </div>
</div>
	</form>
</div>
<script type="text/javascript">
	function validateForm(){
		var x=document.forms["myForm"]["fname"].value;
		if(x==""){
			alert("Name must be filled Out");
			return false;
		}
		var y=document.forms["myForm"]["lname"].value;
		if(y==""){
			alert("Last Name must be filled out");
			return false;
		}
		var contact=document.forms["myForm"]["contact"].value;
		if(isNaN(contact)||contact.indexOf(" ")!=-1){
			alert("enter Numeric Value");
			return false;
		}
		if(contact.length>10){
			alert("enter valid mobile Number");
			return false;
		}

	}



</script>





</body>
</html>