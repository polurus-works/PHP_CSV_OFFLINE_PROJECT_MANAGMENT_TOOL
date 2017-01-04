<?php
/**
 * Generates an HTML input element with the given attribute values.
 * This function also examines SESSION data for previously
 * entered values with the same name
 * @param unknown_type $name
 * @param unknown_type $placeholder
 */
function input($name, $placeholder, $value=null) {  // $value is an optional input paramter!!!!!!
	if($value == null && isset($_SESSION['POST'][$name])) {
		$value = $_SESSION['POST'][$name];		// 2D array
		
		// Remove from session data
		unset($_SESSION['POST'][$name]);

		if($value == '') {		// nothing was entered for this item
			$class = 'class="error"';
		} else {
			$class = '';
		}
	} elseif($value != null) {
		$class = '';	// do not mark as error
	} else {		// No session data
		$value = '';
		$class = '';		// 1st time visiting 
	}	
	return "<input $class type=\"text\" name=\"$name\" class=\"form-control\" placeholder=\"$placeholder\" value=\"$value\" />";
}

/**
 * Generates an HTML select element with the given name attribute and option elements
 * This function also examines session data for a previously submitted value
 * @param String $name Name attribute
 * @param Array $options Array of options in the form value => text
 * @return HTML select element
 */
function dropdown($name, $options) {
	$select = "<select name=\"$name\">";
	
	// Add option elements to select element
	foreach($options as $value => $text) {		// to use a 'forech' loop $options has to be an array
		//    array     key(1)   value(Jan)
		
		// If there is session form data for $name, AND its value
		// is the same as the current array element, select it
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$selected = 'selected="selected"';
		} else {
			$selected = '';
		}
		$select .= "<option $selected value=\"$value\">$text</option>";    
	}
	$select .= "</select>";
	echo $select;
}

/**
 * Generates an HTML radio buttons with the given name attrtibute and options
 * This function also examines session data for a previously submitted value
 * @param String $name Name attribute
 * @param Array $options Array of options in the form value => text
 * @return HTML input[type=radio] elements, wrapped in labels
 */
function radio($name, $options) {
	$radio = '';
	
	// Loop over options of the associative array
	foreach($options as $value => $text) {		// to use a 'forech' loop $options has to be an array
		//    array     key(1)   value(Jan)
		
		// If there is session form data for $name, AND its value
		// is the same as the current array element, select it
		if(isset($_SESSION['POST'][$name]) && $_SESSION['POST'][$name] == $value) {
			unset($_SESSION['POST'][$name]);
			$checked = 'checked="checked"';
		} else {
			$checked = '';
		}			// order of attributes within an opening tag does not matter
		$radio .= "<label><input type=\"radio\" name=\"$name\" $checked value=\"$value\">$text</label>";
	}
	echo $radio;
}

?>





