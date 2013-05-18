<?php
	// ID do Evento
	$id_event = $_POST['id_event'];
	
	// Formas de pagamento
	if($_POST['form_card'] == "on"){$form_card = 1;}else{$form_card = 0;}
	if($_POST['form_boleto'] == "on"){$form_boleto = 1;}else{$form_boleto = 0;}
	if($_POST['form_debito'] == "on"){$form_debito = 1;}else{$form_debito = 0;}
	$form_pay = $form_card."".$form_boleto."".$form_debito;
	
	// Lote
	$select_lote = $_POST['select_lote'];
	$qtde_lote = $_POST['qtde_lote'];
	
	// Inscrições
	$total_insc = $_POST['total_insc'];
	
	if($select_lote == 0){
		for($i = 1; $i <= $total_insc; $i++){
			$title_insc = $_POST['title_insc'.$i];
			$value_insc = $_POST['value_insc'.$i];
			
			// Calcula taxa de conveniencia
			$rate_ticket = number_format(($value_insc * 10) / 100);
			
			$check_student = $_POST['check_student'.$i];
			$check_bestAge = $_POST['check_bestAge'.$i];
			$check_food = $_POST['check_food'.$i];
			if($check_food == "on"){
				$check_food_qtde = $_POST['check_food'.$i.'_qtde'];
				$check_food_percent = $_POST['check_food'.$i.'_percent'];
			}
			$discount = "";
			if($check_student == "on" || $check_bestAge == "on" || $check_food == "on"){
				if($check_student == "on"){$discount = "1,";}
				if($check_bestAge == "on"){$discount = $discount."2,";}
				if($check_food == "on"){$discount = $discount."3";}
				$insert_log = mysql_query("INSERT INTO app_event (id_client, id_event, id_discount_category, variables_discount, qtde_max, product_sector, lote, value_ticket, rate_ticket, value_total_ticket, tips, date, hour, status) VALUES ('$id_client', '$id_event', '$discount', '', 4, '$title_insc', '1', '$value_insc', '$rate_ticket', '$image_event', '$name_local', '$address_event', 0, '$censorship', '$select_category_event', '$select_gen', 1, '$use_form', 2)") or die(mysql_error());
			}
		}
	}
?>