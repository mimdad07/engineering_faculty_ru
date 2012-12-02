var site_url = "http://localhost/student/";
var insertDigitalInformations = "query_insert_digital_informations.php?";
var updateDigitalInformations =  "query_update_digital_informations.php?";
var departmentNames   = "query_department_names.php?faculty=";  
var upazilaNames = "query_upazila_names.php?districts=";
  
var sscHscInformation = "query_ssc_hsc_informations.php?";  
var searchDigitalInformationByRoll = "query_digital_information_by_roll.php?";  
var searchDigitalInformationByRegistration = "query_digital_information_by_registration_no.php?";  
var sscHscInformationFromExcel = "query_addmition_data_xls.php?";  
var searchByAdmissionRoll = "query_search_digital_info_by_admission_roll.php?";

var photoName ='';

//retrive department by using ajax      
function showDepartments( facult ) 
{ 
	var ajax = new XMLHttpRequest();	 
	ajax.onreadystatechange = function() 
	{
		
		if (ajax.readyState == 4) 
		{
			if (ajax.status == 200) 
			{
				//-----------------------------------       Update goes here -----------------------------
				var received = ajax.responseText;					
				var depts = received.split( ',' );
				
				$("#student_department").html('');	
				$("#student_department").append('<option value="">Select Department</option>' );		
				for( var i=0; i<depts.length; i++ )
					$("#student_department").append('<option value="' + depts[i] + '">' + depts[i] + '</option>' );				 
			} 
		}
	}
	ajax.open("GET", departmentNames + facult , true);
	ajax.send(null);	
}


function showRollNameByDept( dept ) 
{ 
	var ajax = new XMLHttpRequest();
	
	$("#lbl_department_name" ).text( "Department of " + dept );
	 
	ajax.onreadystatechange = function() 
	{ 
		if (ajax.readyState == 4) 
		{
			if (ajax.status == 200) 
			{
				//-----------------------------------       Update goes here -----------------------------
				var received = ajax.responseText; 
				var student_info = received.split( '-next-' ); 
				 	 
				//removing previous rows
				var rowCount = $('#tbl_search_by_dept tr').length; 
				for( var count=0; count<rowCount-2; count++ )
				$("#new_row_" + count ).remove();
				
				for( var count=0; count<student_info.length-1; count++ )
				{
					var split_student_info = student_info[count].split( '-pad-' );
					$('#insert_before_row').before(  
						'<tr id="new_row_' + count + '">'+ 
						'	<td >&nbsp;' + (count+1 ) +'</td>'+ 
						'	<td >&nbsp;' + split_student_info[0] +'</td>'+ 
						'	<td >&nbsp;' + split_student_info[1] +'</td>'+ 
						'	<td >&nbsp;' + split_student_info[2] +'</td>'+ 
						'	<td >&nbsp;' + split_student_info[3] +'</td>'+ 
						'	<td >&nbsp;' + split_student_info[4] +'</td>'+ 
						'</tr>'
			
					);
				}
			} 
		}
	}
	ajax.open("GET", "query_search_admissionroll_name_by_department.php?department=" + dept , true);
	ajax.send(null);	
}

//retrive upazila names by using ajax      
function showUpazilass( district, permanentOrPresent ) 
{ 
//alert( permanentOrPresent );
	var ajax = new XMLHttpRequest();	 
	ajax.onreadystatechange = function() 
	{
		
		if (ajax.readyState == 4) 
		{
			if (ajax.status == 200) 
			{
				//-----------------------------------       Update goes here -----------------------------
				var received = ajax.responseText;					
				var upazila = received.split( ',' );
				
				//if present districe is selected
				if( permanentOrPresent =='0' )
				{
					$('#student_present_upazila').html('');				
					$("#student_present_upazila").append('<option value=>Select Upazila</option>');
					for( var i=0; i<upazila.length; i++ )
						$("#student_present_upazila").append('<option value="' + upazila[i] + '">' + upazila[i] + '</option>' );		
				}
				
				else
				{
					$('#student_permanent_upazilla').html('');
					$("#student_permanent_upazilla").append('<option value=>Select Upazila</option>');
					for( var i=0; i<upazila.length; i++ )
						$("#student_permanent_upazilla").append('<option value="' + upazila[i] + '">' + upazila[i] + '</option>' );	
				}
			} 
		}
	}
	ajax.open("GET", upazilaNames + district , true);
	ajax.send(null);	
}



var gCtx = null;
var gCanvas = null;
var imageDataBuffer = null; 
var tempImageDataBuffer = null; 
var c=0;

var mouseDownX = 0;
var mouseDownY = 0;
var mouseUpX = 0;
var mouseUpY = 0;
var clicked =0;


function pageLoad() { 
	initCanvas(320,240);
	
	//initially hide update button
	//$("#btn_action_update_form_data").hide();
} 

function initCanvas(ww,hh)
{
	gCanvas = document.getElementById("display_photo");
	gCtx = gCanvas.getContext("2d");
	

	//register for mousedown and mouseup.		
	gCanvas.addEventListener( 'mousedown', doMouseDown, false );
	gCanvas.addEventListener( 'mouseup', doMouseUp, false );  
	gCanvas.addEventListener( 'mousemove', doMouseMove, false );    
	 
	var w = ww;
	var h = hh;
	gCanvas.style.width = w + "px";
	gCanvas.style.height = h + "px";
	gCanvas.style.cursor='default';
	gCanvas.width = w;
	gCanvas.height = h;
	gCtx.clearRect(0, 0, w, h); 
	imageDataBuffer = gCtx.getImageData( 0,0,320,240);
	tempImageDataBuffer= gCtx.getImageData( 0,0,320,240);
	
	//creating white image data
	for( var i=0; i< tempImageDataBuffer.data.length; i++ )
		tempImageDataBuffer.data[i]=255; 
	}

function passLine(stringPixels) 
{  
	var coll = stringPixels.split("-");
 
	for(var i=0;i<320;i++) 
	{ 
		var intVal = parseInt(coll[i]);
		r = (intVal >> 16) & 0xff;
		g = (intVal >> 8) & 0xff;
		b = (intVal ) & 0xff;
		 
		imageDataBuffer.data[c+0]=r;
		imageDataBuffer.data[c+1]=g;
		imageDataBuffer.data[c+2]=b;
		imageDataBuffer.data[c+3]=255;
		 
		c+=4;
	} 

	if(c>=320*240*4) 
	{ 
		c=0;			 
		gCtx.putImageData(imageDataBuffer, 0,0);
		
	} 
} 

function captureFromWebcam() {
	flash = document.getElementById("embedflash");
	flash.ccCapture(); 
}

function sendPhoto( ) 
{
	var canvasPhoto = document.getElementById("display_photo");		
	var canvasData = photoName + canvasPhoto.toDataURL("image/png");
	 
	var ajax = new XMLHttpRequest();
	ajax.open("POST", 'save_photo.php', false);
	ajax.setRequestHeader('Content-Type', 'application/upload'); 
	ajax.send(canvasData );  

}

function doMouseDown( event )
{
	document.onselectstart = function(){ return false; }
	var mousePos = getMousePos(event);		
	mouseDownX = Math.ceil(mousePos.x);
	mouseDownY = Math.ceil(mousePos.y);
	clicked =1; 
}
 
function doMouseMove( event )
{
	if( clicked )
	{ 
		var mousePos = getMousePos(event); 
		gCtx.putImageData(imageDataBuffer, 0,0);
		
		var difX = Math.ceil(mousePos.x) - mouseDownX;
		var difY = Math.ceil(mousePos.y) - mouseDownY;
		
		drawRect( mouseDownX, mouseDownY, difX, difY );  
	} 
}
  
function doMouseUp( event )
{
	document.onselectstart = function(){ return true; }
	var mousePos = getMousePos(event);		
	mouseUpX = Math.ceil(mousePos.x);
	mouseUpY = Math.ceil(mousePos.y);
	
	//alert( mouseDownX +","+ mouseDownY +","+ mouseUpX +","+ mouseUpY);
	
	clicked =0;
	
	var diffX = mouseUpX - mouseDownX; 
	var diffY =  mouseUpY -mouseDownY;
	
	
	if( diffX>=80 && diffY >=80 ){
	 
	//geting selected image data 
	for( var i=mouseDownY; i<mouseUpY; i++ )
	{
		for( var j=mouseDownX; j<mouseUpX; j++)
		{
			tempImageDataBuffer.data[320*4*i+j*4 +0]=imageDataBuffer.data[320*4*i+j*4 +0];
			tempImageDataBuffer.data[320*4*i+j*4 +1]=imageDataBuffer.data[320*4*i+j*4 +1];
			tempImageDataBuffer.data[320*4*i+j*4 +2]=imageDataBuffer.data[320*4*i+j*4 +2]; 
			tempImageDataBuffer.data[320*4*i+j*4 +3]=imageDataBuffer.data[320*4*i+j*4 +3]; 
		}
	}
			
	gCtx.putImageData(tempImageDataBuffer, 0,0);
	
	for( var i=0; i< tempImageDataBuffer.data.length; i++ )
		tempImageDataBuffer.data[i]=255; 
		
	}
	else{
		gCtx.putImageData(imageDataBuffer, 0,0);
	}
	
}
 
function getMousePos(evt) 
{
	var rect = gCanvas.getBoundingClientRect();
	return {
	  x: evt.clientX - rect.left,
	  y: evt.clientY - rect.top
	};
}
 
function drawRect( x1, y1, x2, y2 )
{
	gCtx.beginPath();
	gCtx.rect( x1, y1, x2, y2 ); 
	gCtx.lineWidth = 2;
	gCtx.strokeStyle = 'red';
	gCtx.stroke();
}

function showPhoto( photoName )
{
	var c=document.getElementById("display_photo");
	var cxt=c.getContext("2d");
	cxt.clearRect ( 0 , 0 , 320 , 240 );
	var img=new Image();
	  
	img.src= photoName +".png";
	img.onload = function() 
	{ 
		cxt.drawImage(img,0,0);
	};
  
}



function student_action_withdraw_admission(){
	
	var page_url = "query_delete_digital_informations.php?"; 
	
	var admission_roll = 'admission_roll=' +  $("#student_admission_roll_no").val()  + '&'  ; 
	var units = 'units=' +  $("#student_units").val()  + '&'  ; 
	var session = 'session=' +  $("#student_session").val(); 
	
	//alert( page_url + admission_roll + units + session );
	
	$.post(  page_url + admission_roll + units + session ); 
	 
	alert( 'Withdraw request has been sent.' ); 
		
	
		
}

function print_info_by_department_button()
{
	window.location = 'search_by_dept.php';
}

function action_logout()
{
	window.location = 'logout.php';
}