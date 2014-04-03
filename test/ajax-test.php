<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>TEST AJAX</title>	
     <script type="text/javascript" src="../AJAX/jquery.js"></script>

<script>
    $(document).ready(function(){
        setInterval(function() {
        	$.getJSON('akt.php', function(data){ 
    			$.each(data, function(idx, obj){ 

    				var id_num = obj['id'];
    				var naslov = obj['name'];
    				var opis = obj['description'];
    				var status = obj['status'];       				
       						
            		console.log(naslov + ": " + opis);
            		
            		//so idnum# obelezuvvat div's
            		var new_div = "<li=\"p_idnum"+id_num+"\""+"><div id=\"idnum"+id_num+"\""+"><h2>"+naslov+"</h2><p>"+opis+"</p></div></li>";
            		console.log("id_num : "+id_num +' :'+new_div);

            		var div = document.getElementById('news');
            		// var ul_list = document.get
	        		$('#news > ul').append(new_div);
	        		
	    		});
			});	
			$.getJSON('remove.php', function(data){ 
    			$.each(data, function(idx, obj){ 

    				var status_brisi = obj['status'];
    				var id_brisi = obj['id'];       				
       						
            		console.log("id : " + id_brisi);
	        		var tag_brisi = "#p_idnum"+id_brisi;
	        		console.log("id : " + id_brisi + "tab_brisi :" +tag_brisi);
	    //    		    remove child
	    // 	   		var parent = document.getElementById(parent_brisi);
					// // var child = document.getElementById(tag_brisi);
					// // child.parent.removeChild(child);

					$(tag_brisi).remove();
	    		});
			});	
           
      }, 3000);
   });
</script>

</head>
<body>

	<div id="news">
		<ul></ul>


	</div>

</body>
</html>


