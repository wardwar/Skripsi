// login
	$(document).ready(function(){

		$(".button-collapse").sideNav();

		$("#login").keyup(function(event){
    		if(event.keyCode == 13){
        	$("#btn-login").click();
    		}
		});

		 $("#btn-login").on("click",function(){

		 	$("#load").addClass("active");

		 	$("#error").addClass("visibility-hidden");

		 	var username = $("#username").val();
		 	var password = $("#password").val();


		 	if(username == '' || password == '')
		 	{	
		 		setTimeout(function() {
		 			$("#load").removeClass("active");
		 		},800);

		 		setTimeout(function() {
		 			$("#error").removeClass("visibility-hidden");
		 			Materialize.fadeInImage("#error");
		 		$(".message").html("Form tidak boleh Kosong");
		 		},800);
		 	}
		 	else
		 	{
		 		var datas = 'username='+username+'&password='+password;
		 		$.ajax({
		 			type: "POST",
		 			url: "init/login.php",
		 			data: datas,
		 			cache: false,
		 			beforeSend: function()
		 			{
		 				$("#load").addClass("active");
		 			},
		 			success: function(data) {
		 				if(data == 'true')
		 				{
		 					 setTimeout(function() {
		 					 	$("#load").removeClass("active");
		 					 	swal({
		 					 		title: "Login berhasil",
		 					 		type:"success",
		 					 		timer: 2000,
		 					 		showConfirmButton: false
		 					 	});
		 					 },800);
		 					 setTimeout(function() {
		 						window.location.href = "dashboard.php";
		 					},2000);
		 				}
		 				else
		 				{
		 					setTimeout(function() {
		 						$("#load").removeClass("active");
		 					},800);

		 					setTimeout(function() {
		 						$("#error").removeClass("visibility-hidden");
		 						Materialize.fadeInImage("#error");
		 						$(".message").html("Username atau password anda salah");
		 					},800);
		 				}
		 			}
		 		});
		 	}
		 });
	});

$(document).ready(function() {
    $('#table').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );

$(document).ready(function() {
    $('select').material_select();
  });
// login end