var personName = document.getElementById("<?php echo $t_personName;?>");
var birthDate = document.getElementById('<?php echo $t_birthDate;?>');
var nationalId = document.getElementById('<?php echo $t_nationalId;?>');
var nationalId2 = document.getElementById('<?php echo $t_nationalId2;?>');
var maritalStatus = document.getElementById('<?php echo $t_maritalStatus;?>');
var gender = document.getElementById('<?php echo $t_gender;?>');
var addressCity = document.getElementById('<?php echo $t_addressCity;?>');
var addressVillage = document.getElementById('<?php echo $t_addressVillage;?>');
var addressStreet = document.getElementById('<?php echo $t_addressStreet;?>');
var email = document.getElementById('<?php echo $t_email;?>');
var mobile = document.getElementById('<?php echo $t_mobile;?>');
var telephone = document.getElementById('<?php echo $t_telephone;?>');
var studyLevel = document.getElementById('<?php echo $t_studyLevel;?>');
var studyQualification = document.getElementById('<?php echo $t_studyQualification;?>');
var studySpecial = document.getElementById('<?php echo $t_studySpecial;?>');
var studyGrade = document.getElementById('<?php echo $t_studyGrade;?>');
var studyGradePercent = document.getElementById('<?php echo $t_studyGradePercent;?>');
var studyGraduatedDate = document.getElementById('<?php echo $t_studyGraduatedDate;?>');
//var course = document.getElementById('<?php /* echo $t_course; */?>');
var militrayStatus = document.getElementById('<?php echo $t_militrayStatus;?>');
//var experience = document.getElementById('<?php /* echo $t_experience; */?>');
//var computer = document.getElementById('<?php /* echo $t_computer; */?>');
var captchaCode = document.getElementById('<?php echo $t_captchaCode;?>');
var securityCode1 = document.getElementById('<?php echo $t_securityCode1;?>');
var securityCode2 = document.getElementById('<?php echo $t_securityCode2;?>');


//fix trim in IE8
if(typeof String.prototype.trim !== 'function') {
  String.prototype.trim = function() {
    return this.replace(/^\s+|\s+$/g, ''); 
  }
}

function limitText(limitField,limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	}
	var obj_hint = document.getElementById(limitField.name +'_hint');
	//limitCount = limitNum - limitField.value.length ;
	obj_hint.innerHTML = "باقى <strong>" + (limitNum - limitField.value.length) + "</strong> من " + limitNum + " حرف";
}


function getAllCheckBoxByName(chkbox){
	var inputs = document.getElementsByTagName("input");
	var cbs = []; //will contain all checkboxes
	var rx = new RegExp(chkbox);
	for (var i = 0; i < inputs.length; i++) {
		if (inputs[i].type == "checkbox" && rx.test(inputs[i].name) ) {
			cbs.push(inputs[i]);
		  }
	}
return cbs;	
}

function showElementById(elementId , enable){
	var el = document.getElementById(elementId);
		    if(enable){
				el.style.display = 'inline-block';
			}else{
				el.style.display = 'none';
			}
}

function showhint(obj , enable){
		var divName = obj.name + "_hint" ;
		showElementById(divName , enable);
}
function showError(obj , enable){
		var divName = obj.name + "_error" ;
		showElementById(divName , enable);

}


function validateForm(){
	valid = true;
	if(!personName.value.trim()){ //check empty value
		showError(personName , true); valid = valid && false;
	}else{showError(personName , false);}
	
	birthDate.value = RefineStringDate(birthDate.value);
	if(!validDate(birthDate.value)){
		showError(birthDate , true); valid = valid && false;		
	}else{showError(birthDate , false);}
	
	if(!validNumber(nationalId.value,14) ){
		showError(nationalId , true); 
		valid = valid && false;		
	}else{showError(nationalId , false);}
	
	if(!validNumber(nationalId2.value,14) || nationalId.value != nationalId2.value  ){
		showError(nationalId2 , true); valid = valid && false;		
	}else{showError(nationalId2 , false);}
	
	if(maritalStatus.selectedIndex <= 0){
		showError(maritalStatus , true); valid = valid && false;		
	}else{showError(maritalStatus , false);}

	if(militrayStatus.selectedIndex <= 0 ){
		showError(militrayStatus , true); valid = valid && false;		
	}else{showError(militrayStatus , false);}

	if(addressCity.selectedIndex <= 0){
		showError(addressCity , true); valid = valid && false;		
	}else{showError(addressCity , false);}

	if(!addressVillage.value.trim()){ //check empty value
		showError(addressVillage , true); valid = valid && false;
	}else{showError(addressVillage , false);}
	
	if(email.value.trim() && !validEmail(email.value)){
		showError(email , true); valid = valid && false;		
	}else{showError(email , false);}

	
	if(telephone.value.trim() && !(validNumber(telephone.value,6) || validNumber(telephone.value.trim(),7) )){
		showError(telephone , true); valid = valid && false;		
	}else{showError(telephone , false);}

	if(mobile.value.trim() && !validMobileNumber(mobile.value.trim())){
		showError(mobile , true); valid = valid && false;		
	}else{showError(mobile , false);}

	
	if(studyLevel.selectedIndex <= 0){ //check empty value
		showError(studyLevel , true); valid = valid && false;
	}else{showError(studyLevel , false);}
	
	if(!studyQualification.value.trim()){ //check empty value
		showError(studyQualification , true); valid = valid && false;
	}else{showError(studyQualification , false);}
	/*
	if(!studySpecial.value.trim()){ //check empty value
		showError(studySpecial , true); valid = valid && false;
	}else{showError(studySpecial , false);}
	
*/
/*
	if(computer.selectedIndex <= 0){ 
		showError(computer , true); valid = valid && false;
	}else{showError(computer , false);}
*/
	if(!validNumber(studyGraduatedDate.value.trim(),4)){ //check empty value
		showError(studyGraduatedDate , true); valid = valid && false;
	}else{showError(studyGraduatedDate , false);}

/*
	if(course.value.length > "<?php echo $course_maxchar;?>"){
		showError(course,true); valid=valid &&false;
	}else{showError(course , false);}

	if(experience.value.length > "<?php echo $experience_maxchar;?>"){
		showError(course,true); valid=valid &&false;
	}else{showError(course , false);}
*/
	if(securityCode1.value < 1000 || securityCode1.value > 99999999 || isNaN(securityCode1.value.trim())){ 
		showError(securityCode1 , true); valid = valid && false;
	}else{showError(securityCode1 , false);}

	if(securityCode1.value != securityCode2.value || securityCode2.value ==""){ 
		showError(securityCode2 , true); valid = valid && false;
	}else{showError(securityCode2 , false);}

	if(!captchaCode.value.trim()){ //check empty value
		showError(captchaCode , true); valid = valid && false;
	}else{showError(captchaCode , false);}

	
	if(!valid) alert("من فضلك اكمل جميع البيانات المطلوبة \n\r---------------------------------\n\r البيانات المطلوبة تظهر باللون الاحمر");
	return valid;
}


/*
//الاسم رباعى
function validName(strName,namesCount){
	xstr = strName.trim();
	xstr = strName.replace( /\s\s+/g, ' ' );
	xstr = xstr.replace( / الل(ة|ه)/g, 'الله' );
	xstr = xstr.replace( / الدين/g, 'الدين' );
	xstr = xstr.replace( /عبد /g, 'عبد' );
	st = xstr.split(" ");
	return (st.length >= namesCount);
}
*/

function validEmail(str){

	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	return filter.test(str);
	

}

//national Id (14 )
function validNumber(num , digitCount){
	var reg = new RegExp('^\\d{'+digitCount+'}$'); // /^\d{11}$/;
	return reg.test(num);
}

function validMobileNumber(num){
	var reg = new RegExp('^01\\d{9}$'); // /^\d{11}$/;
	return reg.test(num);
}
function RefineStringDate(strDate){
	strDate=strDate.replace(/\s/gi,"");//remove all spaces first then test it
	strDate=strDate.replace(/-/gi,"/")
	var txtArray = strDate.split(/\//gi);
	if(txtArray[0].length == 4 ){
		strDate = txtArray[2]+'/'+txtArray[1]+'/'+txtArray[0];//reverse date
		}
	//alert(txtArray);
	//alert(strDate);
	return strDate;
	
}
function validDate(strDate){
	error = false;
	
	var validformat=/^\d{1,2}\/\d{1,2}\/\d{4}$/; //Basic check for format validity
	if (!validformat.test(strDate)) 
		error = true;
	else{ 
		//Detailed check for valid date ranges
		st=strDate.split("/");
		var dayfield=st[0];
		var monthfield=st[1];
		var yearfield=st[2];
		
		var dayobj = new Date(yearfield, monthfield-1, dayfield);
		if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
		error = true; //alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
		
	}
return !error;
}