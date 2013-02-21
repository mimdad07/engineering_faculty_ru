var departmentNames   = "../query_department_names.php?faculty=";  

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
				
				$("#slct_add_department").html('');	
				$("#slct_add_department").append('<option value="">Select Department</option>' );		
				for( var i=0; i<depts.length; i++ )
					$("#slct_add_department").append('<option value="' + depts[i] + '">' + depts[i] + '</option>' );				 
			} 
		}
	}
	ajax.open("GET", departmentNames + facult , true);
	ajax.send(null);	
}

function post(URL, PARAMS) {
	var temp=document.createElement("form");
	temp.action=URL;
	temp.method="POST";
	temp.style.display="none";
	for(var x in PARAMS) {
		var opt=document.createElement("textarea");
		opt.name=x;
		opt.value=PARAMS[x];
		temp.appendChild(opt);
	}
	document.body.appendChild(temp);
	temp.submit();
	return temp;
}


function action_logout()
{
	window.location = '../logout.php';
}