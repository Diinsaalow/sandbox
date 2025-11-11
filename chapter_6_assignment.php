<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapter 6 Practice</title>
    <style>
        fieldset,
        label {
            color: brown;
        }
    </style>
</head>

<body>
    <h1>Name: <strong>Ismail Abdifadil Isack</strong></h1>
    <h1>Student ID: <strong>C1220027</strong></h1>
    <h1>Class: <strong>CA226</strong></h1>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Online registration Form:</legend>

            <fieldset>
                <legend>Personal data:</legend>
                <label>First name:</label>
                <input type="text" name="fName" placeholder="magaca hore"
                    value="<?php echo isset($_POST['fName']) ? htmlspecialchars($_POST['fName']) : '' ?>"> <br>

                <label>Last name:</label>
                <input type="text" name="lName" placeholder="magaca danbe"
                    value="<?php echo isset($_POST['lName']) ? htmlspecialchars($_POST['lName']) : '' ?>"> <br>

                <label>Pin code:</label>
                <input type="password" name="pinCode"
                    value="<?php echo isset($_POST['pinCode']) ? htmlspecialchars($_POST['pinCode']) : '' ?>"> <br>

                <label>Sex:</label>
                <input type="radio" name="sex" value="lab"
                    <?php if (isset($_POST['sex']) && $_POST['sex'] === 'lab')   echo 'checked'; ?>>Male
                <input type="radio" name="sex" value="dedig"
                    <?php if (isset($_POST['sex']) && $_POST['sex'] === 'dedig') echo 'checked'; ?>>Female
            </fieldset>

            <fieldset>
                <legend>Birth data:</legend>
                <label>Date of birth:</label>
                <input type="date" name="dob"
                    value="<?php echo isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '' ?>"> <br>

                <label>Place of birth:</label>
                <select name="pob">
                    <option value="">-------</option>
                    <?php
                    $cities = [
                        "muqdisho" => "Xamar",
                        "hargisa" => "Hargaysa",
                        "kismayo" => "Kismayo",
                        "dhuusamaree" => "Dhuusamareeb",
                        "baidawa" => "Baydhaba Jannaay",
                        "garowe" => "Garoowe",
                        "jowhar" => "Jawhar",
                        "laas caano" => "Laas Caanood"
                    ];
                    $pobSticky = $_POST['pob'] ?? '';
                    foreach ($cities as $val => $label) {
                        $sel = ($pobSticky === $val) ? 'selected' : '';
                        echo "<option value=\"$val\" $sel>$label</option>";
                    }
                    ?>
                </select>
                <br>

                <label>Residence:</label><br>
                <select name="residence[]" multiple size="3">
                    <?php
                    $resSticky = $_POST['residence'] ?? [];
                    foreach ($cities as $val => $label) {
                        $sel = (is_array($resSticky) && in_array($val, $resSticky)) ? 'selected' : '';
                        echo "<option value=\"$val\" $sel>$label</option>";
                    }
                    ?>
                </select>
            </fieldset>

            <fieldset>
                <legend>Faculties:</legend>
                <label>Faculties:</label>
                <input type="checkbox" name="faculty[]" value="computer sciece"
                    <?php if (!empty($_POST['faculty']) && in_array('computer sciece', $_POST['faculty'])) echo 'checked'; ?>>Computer
                <input type="checkbox" name="faculty[]" value="education"
                    <?php if (!empty($_POST['faculty']) && in_array('education', $_POST['faculty'])) echo 'checked'; ?>>Waxbarshada
                <input type="checkbox" name="faculty[]" value="economics & management"
                    <?php if (!empty($_POST['faculty']) && in_array('economics & management', $_POST['faculty'])) echo 'checked'; ?>>Maamulka
                iyo Maaraynta
                <input type="checkbox" name="faculty[]" value="sharia & law"
                    <?php if (!empty($_POST['faculty']) && in_array('sharia & law', $_POST['faculty'])) echo 'checked'; ?>>الشريعة
                والقانون
                <input type="checkbox" name="faculty[]" value="medicine"
                    <?php if (!empty($_POST['faculty']) && in_array('medicine', $_POST['faculty'])) echo 'checked'; ?>>Daawaynta
            </fieldset>

            <fieldset>
                <legend>Comment:</legend>
                <textarea name="comment" rows="4"
                    cols="50"><?php echo isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '' ?></textarea>
            </fieldset>

            <label>Attach photo (only jpg, jpeg, or png):</label>
            <input type="file" name="photo"><br>

            <label>Attach your documents (only pdf):</label>
            <input type="file" name="docs[]" multiple><br><br>

            <input type="reset" value="Clear Data" onclick="location.href = location.pathname;">
            <input type="submit" name="submit" value="Send data">
        </fieldset>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (!empty($_POST['fName']))
            echo ("<br>First name is: " . ucfirst($_POST['fName']));
        else
            echo ("<br><b>First name is required.</b>");

        if (!empty($_POST['lName']))
            echo ("<br>Last name is: " . ucwords($_POST['lName']));
        else
            echo ("<br><b>Last name is required.</b>");

        if (!empty($_POST['pinCode']))
            echo ("<br>Your password is: " . $_POST['pinCode']);
        else
            echo ("<br><b>Password is required.</b>");

        if (isset($_POST['sex']) && $_POST['sex'] !== '')
            echo ("<br>Noocaadu waa: " . $_POST['sex']);
        else
            echo ("<br><b>Please select sex.</b>");

        if (!empty($_POST['dob']))
            echo ("<br>Taariikhda dhalashada waa: " . $_POST['dob']);
        else
            echo ("<br><b>Date of birth is required.</b>");

    
        if (!empty($_POST['pob']))
            echo ("<br>Ku dhashtay: " . ucwords($_POST['pob']));
        else
            echo ("<br><b>Place of birth is required.</b>");

        if (!empty($_POST['residence']) && is_array($_POST['residence'])) {
            $res = array_map('ucwords', array_map('trim', $_POST['residence']));
            sort($res);
            echo ("<br>Waxaad degan tahay magaalooyinka kala ah:<br>" . implode(', ', $res) . ".");
        } else {
            echo ("<br><b>Select at least one residence.</b>");
        }

        if (!empty($_POST['faculty']) && is_array($_POST['faculty'])) {
            $fac = array_map('ucwords', array_map('trim', $_POST['faculty']));
            sort($fac);
            echo ("<br>Waxaad dooratay kulliyadaha:<br>" . implode(', ', $fac) . ".");
        } else {
            echo ("<br><b>Select at least one faculty.</b>");
        }

        if (!empty($_POST['comment']))
            echo ("<br>Talooyinkaada waa: <pre>" . htmlspecialchars($_POST['comment']) . "</pre>");
        else
            echo ("<br><b>Comment is required.</b>");

   
        $dest = __DIR__ . "/Documents/";
        if (!is_dir($dest)) {
            @mkdir($dest, 0777, true);
        }

        if (!empty($_FILES['photo']['name'])) {
            $photoName = $_FILES['photo']['name'];
            $photoTmp  = $_FILES['photo']['tmp_name'];
            $photoSize = $_FILES['photo']['size'];
            $photoExt  = strtolower(pathinfo($photoName, PATHINFO_EXTENSION));
            $allowedPhoto = array("jpg", "jpeg", "png");


            if (!in_array($photoExt, $allowedPhoto)) {
                echo ("<br>File extension <b>$photoExt</b> is not allowed (photo must be jpg/jpeg/png).");
            } elseif ($photoSize > 2 * 1024 * 1024) {
                echo ("<br>File: <b>$photoName</b> is too big (max 2MB) or invalid.");
            } else {
                $target = $dest . basename($photoName);
                if (file_exists($target)) {
                    echo ("<br>File: <b>$photoName</b> already exists in destination.");
                } elseif (move_uploaded_file($photoTmp, $target)) {
                    echo ("<br>Successfully uploaded photo: <b>$photoName</b>.");
                } else {
                    echo ("<br>Photo not uploaded.");
                }
            }
        } else {
            echo ("<br>Nothing selected (photo).");
        }


        if (!empty($_FILES['docs']['name'][0])) {
            $names = $_FILES['docs']['name'];
            $tmps  = $_FILES['docs']['tmp_name'];
            $sizes = $_FILES['docs']['size'];

            for ($i = 0; $i < count($names); $i++) {
                if (empty($names[$i])) continue;

                $docName = $names[$i];
                $docTmp  = $tmps[$i];
                $docSize = (int)$sizes[$i];
                $ext = strtolower(pathinfo($docName, PATHINFO_EXTENSION));

                if ($ext !== 'pdf') {
                    echo ("<br>File: <b>$docName</b> rejected (only pdf).");
                    continue;
                }
                if ($docSize > 2 * 1024 * 1024) {
                    echo ("<br>File: <b>$docName</b> too big or invalid.");
                    continue;
                }

                $target = $dest . basename($docName);
                if (file_exists($target)) {
                    echo ("<br>File: <b>$docName</b> already exists.");
                    continue;
                }

                if (move_uploaded_file($docTmp, $target))
                    echo ("<br>File: <b>$docName</b> has been uploaded successfully.");
                else
                    echo ("<br>File: <b>$docName</b> is not uploaded.");
            }
        } else {
            echo ("<br>Nothing selected for multiple files");
        }
    }
    ?>
</body>

</html>