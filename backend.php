<?php 
    // get image file from reques
    $imageFile = $_FILES['profilePic']['tmp_name'];
    $imageFileContents = file_get_contents($imageFile);

    // encode image to base 64
    $withBase64 = base64_encode($imageFileContents);
    $imageType = substr($imageFile ,strrpos($imageFile, '.')+1, strlen($imageFile));

    echo '<div class="resultBox">
            <h5>Student Information</h5>

            <div class="dataBox">
                <div class="userInfo">
                    <p>
                        Full Name:  <span>'.$_POST['fullname'].'</span>
                    </p>
                    <p>
                        Phone: <span>'.$_POST['phone'].'</span>
                    </p>
                    <p>
                        Date of birth:  <span>'.$_POST['dob'].'</span>
                    </p>
                    <p>
                        Email:  <span>'.$_POST['email'].'</span>
                    </p>
                    <p>
                        Gender:  <span>'.$_POST['gender'].'</span>
                    </p>
                    <p>
                        marital Status:  <span>'.$_POST['maritalStatus'].'</span>
                    </p>
                    <p>
                        ECOWAS ID:  <span>'.$_POST['ID'].'</span>
                    </p>
                </div>
                <div class="profilePic">
                    <img src="data:image/'.$imageType.';base64,'.$withBase64.'" alt="" />
                </div>
            </div>
        </div>';

?>