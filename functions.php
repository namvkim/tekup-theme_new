<?php

function wmtp_theme_enqueue_scripts()
{
	wp_enqueue_style('fontsgoogle', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style('theme_default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
	wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css');
	wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css');

	wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-3.1.0.js', array(), '', true);
	wp_enqueue_script('jQuery_min', get_template_directory_uri() . '/js/jquery.min.js', array(), '', true);
	wp_enqueue_script('bootstrap_bundle_js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '', true);
	wp_enqueue_script('lightbox_js', get_template_directory_uri() . '/js/lightbox.min.js', array(), '', true);
	wp_enqueue_script('swiper_js', get_template_directory_uri() . '/js/swiper.min.js', array(), '', true);
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), '', true);
	wp_enqueue_script('carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '', true);
	wp_enqueue_script('bootstrap5_bundle_js', get_template_directory_uri() . '/js/bootstrap5.bundle.min.js', array(), '', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), '', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'wmtp_theme_enqueue_scripts');



add_theme_support('menus');
register_nav_menus(
	array(
		'main-nav' => 'Header Main Menu'
	)
);



add_action('phpmailer_init', 'send_smtp_email');
function send_smtp_email($phpmailer)
{
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'smtp.gmail.com';
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Port       = 465;
	$phpmailer->SMTPSecure = 'ssl';
	$phpmailer->Username   = get_option('admin_email');
	$phpmailer->Password   = 'lftilyxilhaeynke';
	$phpmailer->From       = 'tekup@gmail.com';
	$phpmailer->FromName   = 'Tekup Solutions';
}

$errors = [];
$message = '';
$errorMessage = '';

if (!empty($_POST)) {
	$name = sanitize_text_field($_POST['user']);
	$email = sanitize_text_field($_POST['email']);
	$message = sanitize_text_field($_POST['note']);

	$selected_area = (filter_input(
		INPUT_POST,
		'areas_of_concern',
		FILTER_SANITIZE_STRING,
		FILTER_REQUIRE_ARRAY
	));



	$concerned_area = '';
	if (is_array($selected_area) || is_object($selected_area)) {
		foreach ($selected_area as $concern_area) {
			$concerned_area = $concern_area;
		}
	}

	if (empty($name)) {
		$errors[] = 'Name is empty';
	}

	if (empty($email)) {
		$errors[] = 'Email is empty';
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'Email is invalid';
	}
	if (empty($message)) {
		$errors[] = 'Message is empty';
	}


	if (empty($errors)) {
		$toEmail = 'hoa.le22@student.passerellesnumeriques.org';
		$emailSubject = 'Tekup Solution';
		$headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

		$bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Area of concerned: {$concerned_area}", "Message: $message"];
		$body = join(PHP_EOL, $bodyParagraphs);
		if (wp_mail($toEmail, $emailSubject, $body, $headers)) {
			$message = "<p style='color: green;'>Thank you " . $name . " send email successful</p>";
			echo "<script>alert('$message');</script>";
		} else {
			$errorMessage = 'Oops, something went wrong. Please try again later';
		}
	} else {
		$allErrors = join('<br/>', $errors);
		$errorMessage = "<p style='color: red;'>{$allErrors}</p>";
	}
}
