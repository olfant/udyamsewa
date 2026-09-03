<?php
// if (isset($_GET['cid']) && $_GET['cid'] != '') {
    
//     if((isset($_GET['token_function'])) && ($_GET['token_function'] == 'BULK_DATA_CAMPN')){
//         setcookie('token_function', 'BULK_DATA_CAMPN', time() + (86400 * 30), "/");
//     }
    
//     include($_SERVER['DOCUMENT_ROOT']."/config.php");
//     include($_SERVER['DOCUMENT_ROOT']."/editable/data-form.php");
//     ?>
//     <script>
//     document.addEventListener("DOMContentLoaded", function (e) {
//         document.querySelector("#main-form").setAttribute("action", "/editable/edit-submit-form.php");

//         var files = document.querySelectorAll("input[type='file']");
//         for (var i = 0; i < files.length; i++) {
//             files[i].removeAttribute("required");
//             files[i].parentNode.style.display = 'none';
//             files[0].parentNode.style.display = 'block';
//         }

//         var input = document.createElement("input");
//         input.setAttribute("type", "hidden");
//         input.setAttribute("name", "cid");
//         input.setAttribute("value", "<?php echo $_GET['cid']; ?>");
//         document.querySelector("#main-form").appendChild(input);
//     });
//     </script>
//     <?php
//     $sql_select_cid = 'SELECT * FROM cid WHERE cid = "'.$_GET["cid"].'"';
//     $result_select_cid = $conn->query($sql_select_cid);

//     if ($result_select_cid) {
//         $row_select_cid = $result_select_cid->fetch_assoc();
//         $form_name = $row_select_cid['form_name'];
          
//         $sql_select_form = 'SELECT * FROM '.$row_select_cid["table_name"].' WHERE id = "'.$row_select_cid['uid'].'"';
//         $result_select_form = $conn->query($sql_select_form);
//         if ($result_select_form) {
//             $row_select_form = $result_select_form->fetch_assoc();
            
//             $form_fields = array($form_data)[0][$form_name]['form_fields'];
//             //echo $row_select_form['office_state'];
//             //echo $row_select_form['office_district'];
            
//             ?>
//             <script> 
//             document.addEventListener("DOMContentLoaded", function (e) {
//             var stateValue='<?php echo $row_select_form["office_state"];?>';
//             var districtValue='<?php echo $row_select_form["office_district"];?>';
//             $("select[name='office_state']").val(stateValue);
	
// 	var districtOptions = "";
// 	for(districtId in districtByState[stateValue]) {
// 	districtOptions += "<option>"+districtByState[stateValue][districtId]+"</option>";
// 	}
// 	officeDistrict.innerHTML = districtOptions;
//         $("select[name='office_district']").val(districtValue);
// 	});
//             </script>

//             <script>document.addEventListener("DOMContentLoaded", function (e) {<?php
//             foreach ($form_fields as $form_field=>$form_field_value) {
//                 ?>document.querySelector("#main-form [name='<?php echo $form_field; ?>']").value = '<?php echo $row_select_form[$form_field_value] ?>';<?php
//             }
//             ?>});</script>
//             <?php 
//         }
//     }
// }
?>
