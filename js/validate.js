/**
 * 鏄惁鏄暟瀛�
 */
function isNumber(str) {
	var reg = /^\d+$/;
	return reg.test(str);
}

 

/**
 * 鍒ゆ柇鏄惁鏄眽瀛椼€佸瓧姣嶃€佹暟瀛楃粍鎴�
 * 
 * @param str
 * @returns {Boolean}
 */
function isChinaOrNumbOrLett(str) {
	var regu = /^[0-9a-zA-Z\u4e00-\u9fa5]+$/;
	return regu.test(str);
}

/**
 * 鍒ゆ柇鏄惁鏄暟瀛楁垨瀛楁瘝 (6-14浣�)
 * 
 * @param str
 * @returns {Boolean}
 */
function isNumberOrLetter(str) {
	var regu = /^[0-9a-zA-Z]$/;
	return regu.test(str);
}

/**
 * 楠岃瘉鎵嬫満鍙�
 * 
 * @param str
 * @returns {Boolean}
 */
function isMobileNum(str) {
	var regu = /^0?[1][0-9][0-9]{9}$/;
	return regu.test(str);
}

/**
 * email鏍煎紡楠岃瘉
 * 
 * @param str
 * @returns {Boolean}
 */
function isEmail(str) {
//	var regu = /^([a-zA-Z0-9_\.\-])+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/;
//	return regu.test(str);
	return true;
}
/**
 * 姹夊瓧楠岃瘉2鍒�30浣�
 * 
 * @param str
 * @returns {Boolean}
 */
function isChinese(str){
	var regu=/^[\u2E80-\u9FFF]{2,30}$/;
	return regu.test(str);
}
/**
 * 鏃ユ湡楠岃瘉
 * 
 * @param str
 * @returns {Boolean}
 */
function isDate(str){
if (str=="") return true; 
	return /^(\d{4})(-|\/)(\d{1,2})(-|\/)(\d{1,2})$/.test(str);
}
 
/**
 * 楠岃瘉鏄惁涓虹┖
 * 
 * @param id
 */
function isNull(id) {
	var value = $("#" + id).val();
	value = $.trim(value);
	if (value == "") {
		return true;
	} else {
		return false;
	}
}
/**
 * 楠岃瘉鏄惁涓洪噾棰�
 * 
 * @param id
 */
function isMoney(str) {
	var regu = /^[0-9]*(\.[0-9]+)?$/;
	return regu.test(str);
}

/**
 * 鍖归厤鏃堕棿锛屾纭牸寮忥細hh:mm
 * @param str
 * @returns
 */
function isTime(str){
    var regu = /^(([0-1][0-9])|(2[0-3])):[0-5][0-9]$/;
    return regu.test(str);
}

/**
 * 鍖归厤鏃ユ湡鏃堕棿锛屾纭牸寮忥細yyyy-MM-dd hh:mm
 * PS:鏃ユ湡鐨勮繛鎺ョ鍙峰彲浠ユ槸鈥�-鈥濇垨鑰呪€�/鈥�
 * @param str
 * @returns
 */
function isDateTime(str){
    if(str == null || str == ""){
        return false;
    }
    var dateTimeArr = str.split(" ");
    if(dateTimeArr.length < 2){
        return false;
    }
    var dateReg = /^\d{4}(-|\/)((1[0-2])|(0[1-9]))(-|\/)((0[1-9])|([1-2][0-9])|(3[0-1]))$/;
    if(!dateReg.test(dateTimeArr[0])){
        return false;
    }
    return isTime(dateTimeArr[1]);
}

/**
 * 楠岃瘉鏂规硶
 * 
 * @param str
 */
function verificationDefault(){
	var input =$("input[notnull='true'][value=],select[notnull='true'][value=]");
	if(input.length > 0) {
		alert(getInfo(input)+"涓哄繀濉」锛�");
		$(input.get(0)).focus();
		return false;
	}
	
	var min = $("input[min],textarea[min]");
	for(var i=0;i<min.length;i++) {
		if($(min[i]).val().length<$(min[i]).attr("min")){
		 	alert(getInfo(min[i])+"涓嶈兘灏戜簬"+$(min[i]).attr("min")+"瀛楋紒");
		 	$(min[i]).focus();
		 	return false;
		}
	}
	
	var max = $("input[max],textarea[max]");
	for(var i=0;i<max.length;i++) {
		if($(max[i]).val().length>$(max[i]).attr("max")){
		 	alert(getInfo(max[i])+"涓嶈兘瓒呰繃"+$(max[i]).attr("max")+"瀛楋紒");
		 	$(max[i]).focus();
		 	return false;
		}
	}
	
	var inputType= $("input[inputType]");
	for (var i = 0; i < inputType.length; i++) {
		if($(inputType[i]).attr("inputType")=="date"){
			$(inputType[i]).val("121");
		}
		if($(inputType[i]).val()!=""){
			if($(inputType[i]).attr("inputType")=="email"){
				if(!isEmail($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="money"){
				if(!isMoney($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="date"){
				var date=$(inputType[i]).next().find("input[type='hidden']").val();
				if(!isDate(date)){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="number"){
				if(!isNumber($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"鍙兘鏄暟瀛�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="mobile"){
				if(!isMobileNum($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}
			
		}
	}
	
	return true;
}

function verification(src){
	if(!src) {
		return verificationDefault();
	}
	var input = src.find("input[notnull='true']:enabled,select[notnull='true']:enabled");
	if(input.length > 0) {
		for(var i = 0;i<input.length;i++){
			if($.trim(input.eq(i).val()) == ""){
				alert(getInfo(input.eq(i))+"涓哄繀濉」锛�");
				input.eq(i).focus();
				return false;
			};
		}
	}
	
	var min = src.find("input[min]:enabled,textarea[min]:enabled");
	for(var i=0;i<min.length;i++) {
		if($(min[i]).val().length<$(min[i]).attr("min")){
		 	alert(getInfo(min[i])+"涓嶈兘灏戜簬"+$(min[i]).attr("min")+"瀛楋紒");
		 	$(min[i]).focus();
		 	return false;
		}
	}
	
	var max = src.find("input[max]:enabled,textarea[max]:enabled");
	for(var i=0;i<max.length;i++) {
		if($(max[i]).val().length>$(max[i]).attr("max")){
		 	alert(getInfo(max[i])+"涓嶈兘瓒呰繃"+$(max[i]).attr("max")+"瀛楋紒");
		 	$(max[i]).focus();
		 	return false;
		}
	}
	
	var inputType= src.find("input[inputType]:enabled");
	for (var i = 0; i < inputType.length; i++) {
		if($(inputType[i]).attr("inputType")=="date"){
			$(inputType[i]).val("121");
		}
		if($(inputType[i]).val()!=""){
			if($(inputType[i]).attr("inputType")=="email"){
				if(!isEmail($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="money"){
				if(!isMoney($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="date"){
				var date=$(inputType[i]).next().find("input[type='hidden']").val();
				if(!isDate(date)){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}else if($(inputType[i]).attr("inputType")=="number"){
				if(!isNumber($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"鍙兘鏄暟瀛�!");
					$(inputType[i]).focus();
				 	return false;
				}
				
				var bindPhone = $(inputType[i]).val();
				var subBindPhone=bindPhone.substring(0,bindPhone.length-8).
					substring(bindPhone.substring(0,bindPhone.length-8).length-3,bindPhone.
						substring(0,bindPhone.length-8).length);
				
				if(subBindPhone == '170' || subBindPhone == '171'){
					alert("涓嶈兘缁戝畾浠�170鎴�171寮€澶寸殑鎵嬫満鍙风爜,璇锋洿鎹㈠叾浠栫粦瀹氬彿鐮�!");
					$(inputType[i]).focus();
				 	return false;
				}
				
			}else if($(inputType[i]).attr("inputType")=="mobile"){
				if(!isMobileNum($(inputType[i]).val())){
					alert(getInfo(inputType[i])+"杈撳叆涓嶅悎娉�!");
					$(inputType[i]).focus();
				 	return false;
				}
			}
			
		}
	}
	
	return true;
}

function getInfo(obj){
	if($(obj).attr("info")){
		return $(obj).attr("info");
	}else{
		return "";
	}
}
/**
$("*[notnull='true'],*[inputType],*[max],*[min]").parents("form").submit(
function (){
	if(!verification()){
	 return false;
	}
}
);
*/



