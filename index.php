<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAGSNESS</title>
     <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
     <link rel="stylesheet" href="jagsness/assets/css/bootstrap/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<style>
li{
  display:none;
}
#ap_delete{
     position: absolute;
    top: 78%;
    right: 44%;
    cursor: pointer;
    background: #8CC7C2;
    color: #fff;
    padding: 12px 30px;
    font-size: 19px;
    letter-spacing: 0.5px;
    border: none;
    border-radius: unset;
    display:none;
}
.ap_response{
     position: absolute;
    top: 1%;
    right: 1%;
}

*{
    margin: 0;
    padding: 0;
}

h1,h2,h3,h4,h5,h6,p{
    margin: 0;
    padding: 0;
}

a,span.img.figure{
    margin: 0;
    padding: 0;
    display: inline-block;
}

ul,li{
    margin: 0;
    padding: 0;
    list-style: none;
}

body{
    font-family: 'Exo 2', sans-serif;
}




section.ap-top-sec {
    background-color: #17212d;
    height: 100vh;
    display: flex;
    align-items: center;
}

.ap-theme-main {
    text-align: center;
}

.ap-theme-image h1 {
    font-size: 92px;
    color: #fff;
    font-weight: 100;
    letter-spacing: 0;
    text-align: center;
}

.ap-theme-image h1 span{
    margin: 0 15px;
}

.ap-theme-image {
    padding-bottom: 15px;
    position: relative;
}



.ap-theme-heading {
    padding-bottom: 15px;
}

.ap-theme-heading h2 {
    color: #fff;
    font-weight: 100;
    font-size: 28px;
    letter-spacing: 0.9px;
}


.ap-theme-email-field input {
    height: 60px;
    border-radius: 0px;
    background: transparent;
    border: 2px solid #999;
    color: #999;
}

.ap-theme-email-field input:focus {
    background: transparent;
    border: 2px solid #999;
    box-shadow: none;
    color: #999;
}

.ap-theme-email-field {
    margin-bottom: 15px;
}

.ap-theme-name-field input {
    height: 60px;
    border-radius: 0px;
    background: transparent;
    border: 2px solid #999;
    color: #999;
}

.ap-theme-name-field input:focus {
    background: transparent;
    border: 2px solid #999;
    box-shadow: none;
    color: #999;
}

.ap-theme-generate-btn {
    margin-top: 15px;
}

.ap-theme-generate-btn input {
    background: #8CC7C2;
    color: #fff;
    padding: 12px 30px;
    font-size: 19px;
    letter-spacing: 0.5px;
    border: none;
}

.ap-theme-email-field input::placeholder {
    color: #999;
    font-size: 17px;
    letter-spacing: 0.5px;
    font-weight: 400;
}

.ap-theme-name-field input::placeholder {
    color: #999;
    font-size: 17px;
    font-weight: 400;
    letter-spacing: 0.5px;
}









@media (max-width: 1399.98px) {}

@media (max-width: 1199.98px) {}

@media (max-width: 991.98px) {
    .ap-theme-image h1 span {
        margin: 0 7px;
    }
    .ap-theme-heading h2 {
        line-height: 1.4;
    }
}

@media (max-width: 767.98px) {
    .ap-theme-image h1 {
        font-size: 66px;
    }
    .ap-theme-heading h2 {
        font-size: 22px;
    }
    .ap-theme-heading {
        padding-bottom: 0px;
    }
}

@media (max-width: 575.98px) {}

@media (max-width: 480px) {
    .ap-theme-image h1 {
        font-size: 56px;
    }
}

@media (max-width: 320px) {
    .ap-theme-image h1 {
        font-size: 40px;
        font-weight: 400;
    }
    .ap-theme-image h1 span {
        margin: 0 2px;
    }
    .ap-theme-heading h2 {
        font-size: 18px;
    }
    .ap-theme-image {
        padding-bottom: 12px;
    }
}








</style>
<main>
       <section class="ap-top-sec">
        <div class="container">
            <div class="row ap-theme-row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="ap-theme-main">
                        <div class="ap-theme-image">
                            <h1>
                                <span>J</span>
                                <span>A</span>
                                <span>G</span>
                                <span>S</span>
                                <span>N</span>
                                <span>E</span>
                                <span>S</span>
                                <span>S</span>
                            </h1>
                        </div>
                        <div class="ap-theme-heading">
                            <h2>CREATE YOUR CUSTOM THEME WITH JAGSNESS</h2>
                        </div>
                         <form action="" method="post" name="form" onsubmit="onFormSubmit();">
                          <div class="row d-flex justify-content-center mt-4">
                              <div class="col-md-4">
                                  <div class="ap-theme-email-field">
                                      <input type="email" name="email" id="" class="form-control" placeholder="Enter Your Email Here ...">
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="ap-theme-name-field">
                                      <input type="Hidden" id="allfiles" name="allfiles">
                                      <input type="Hidden" id="themename" name="ThemeName" value="jagsness">
                                      <input type="text" name="NewThemeName" id="newthemename" class="form-control" placeholder="Enter Your Theme Name Here ...">
                                  </div>
                              </div>
                          </div>
                          <div class="ap-theme-generate-btn">
                              <input type="submit" id="D_theme" name="Submit" value="GENERATE">
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </section>
    

<?php 

foreach (glob("*.zip") as $filename) {
     unlink($filename);       
    }
//Step1: get allfile and folder from directorie where index.php file place

function listFolderFiles($dir)
{
    
    foreach (new DirectoryIterator($dir) as $fileInfo) {
        if (!$fileInfo->isDot()) {
            echo '<li>' .$fileInfo->getPathname();
            if ($fileInfo->isDir()) {
                listFolderFiles($fileInfo->getPathname());
            }
            echo '</li>';
        }
    }
}
listFolderFiles(dirname(__FILE__).'\jagsness');
// End Step1

// Step3: Onclick on submit after adding new theme name it change all comment and function name with new theme name and create a zip and again change orignal file function name and comment
if (isset($_POST['Submit'])) {
		$allfies = $_POST['allfiles'];
		$email = $_POST['email'];
		$theme = $_POST['ThemeName'];
		$newthemename = trim($_POST['NewThemeName']);
    $newtheme = str_replace(' ', '_', $newthemename);
if(!empty($newtheme) && (!empty($email))){
$filenames = explode (",", $allfies); 
foreach($filenames as $filename){
   $fileurl = $filename;
   $path_to_file = $fileurl;
 $file_contents = file_get_contents($path_to_file);
$file_contents = str_replace($theme, $newtheme, $file_contents);
file_put_contents($path_to_file, $file_contents);
}
// Get real path for our folder
$rootPath = realpath(dirname(__FILE__).'\jagsness');

// Create Zip Code Start

$zip = new ZipArchive();
$zip->open($newtheme.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    if (!$file->isDir())
    {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}
$zip->close();
// Create Zip Code End 

// Again Change to orignal name of function and comment
foreach($filenames as $filename){
   $fileurl = $filename;
   $path_to_file = $fileurl;
 $file_contents = file_get_contents($path_to_file);
$file_contents = str_replace($newtheme, $theme, $file_contents);
file_put_contents($path_to_file, $file_contents);
}
echo"<span class='ap_response alert alert-success'>Theme Name Change</span>";
// echo"<p class='alert alert-info' data-href='$newtheme.zip' id='ap_delete'>Download ZIP file</p>";
echo"<p class='alert alert-info' data-href='$newtheme.zip' id='ap_delete'>Download ZIP file</p>";
?>

<form method="POST" name="Jagsness_form">
  <input type="hidden" name="Email" value="<?php echo $email; ?>">
  <input type="hidden" name="ThemeName" value="<?php echo $newtheme; ?>">
</form>
<script>
  
<!-- Google Sheets -->

  const scriptURL = 'https://script.google.com/macros/s/AKfycbwpqv3YyujQyvIHyJ7XVli_arX3wCZhWqWgbYb_fFvl3gFRkhNzA5RLHAzW19WOoiDq/exec'
        const form = document.forms['Jagsness_form']
        console.log(form);
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message));
</script>
<?php
}else{
  echo"<span class='ap_response alert alert-danger'>Please Fill All Field</span>";
}
}

// End Step3
?>
</main>
   <script src="jagsness/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Step2: After Getting all File and folder we only get file from all folder and put there url in hidden input Name='allfiles'  -->
<script>

var allfiles = [];
const collection = document.getElementsByTagName("li");
for (let i = 0; i < collection.length; i++) {
  let result = collection[i].innerHTML.includes(".");
  if(result === true){
    // console.log(collection[i].innerHTML);
    allfiles.push(collection[i].innerHTML);
  }
}
document.getElementById('allfiles').value = allfiles ; 
const ap_delete = document.getElementById('ap_delete');
  if(ap_delete != null){
    window.location = $('#ap_delete').data('href'); 
  }
  
// $('#ap_delete').click(function(){
// window.location = $(this).data('href'); 
// });


</script>