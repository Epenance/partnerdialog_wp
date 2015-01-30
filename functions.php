<?php
//Registrating all menu's
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//Registratin all widget areas
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Footer box1',
    'id'            => 'footer-box-1',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer box2',
    'id'            => 'footer-box-2',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => 'Footer box3',
    'id'            => 'footer-box-3',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


//Making function to list subpages of parent page
function get_top_parent_page_id() {

  global $post;

  $ancestors = $post->ancestors;

  // Check if page is a child page (any level)
  if ($ancestors) {

    //  Grab the ID of top-level page from the tree
    return end($ancestors);

  } else {

    // Page is the top level, so use  it's own id
    return $post->ID;

  }

}

if(isset($_POST['getContactedSubmit'])) {
  $navn = $_POST['getContactedNavn'];
  $telefon = $_POST['getContactedTelefon'];
  $spam = $_POST['getContactedVegan'];

  if(!$spam) {
    $modtager = "brink@partnerdialog.dk";
    $emne = "Partnerdialog.dk kontakt mig";
    $besked = "$navn med telefon: $telefon ønsker at blive kontaktet.";
    $headers = "From: admin@partnerdialog.dk\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit";

    mail($modtager, $emne, $besked, $headers);

    $getContactedSend = true;
  }
}

if(isset($_POST['contactSubmit'])) {
  $navn = $_POST['contactName'];
  $firma = $_POST['contactCompany'];
  $email = $_POST['contactEmail'];
  $telefon = $_POST['contactPhone'];
  $besked = $_POST['contactMessage'];
  $spam = $_POST['getContactedAlergies'];

  if(!$spam) {
    $modtager = "brink@partnerdialog.dk";
    $emne = "Partnerdialog.dk kontakt besked";
    $besked = "$navn fra firmaet $firma har sendt en besked:\n\n $besked \n\n Personen har telefon: $telefon og email: $email";
    $headers = "From: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";
    $headers .= "Content-Transfer-Encoding: 8bit";

    mail($modtager, $emne, $besked, $headers);
    $contactSend = true;
  }
}

function mailModal() {
  global $contactSend, $getContactedSend;
  if($getContactedSend || $contactSend) {
    echo '
    <div class="mailModal">
    <h2>
    Tak for din besked du vil blive kontaktet snarest muligt.
    </h2>
    </div>';
  }
}


?>
