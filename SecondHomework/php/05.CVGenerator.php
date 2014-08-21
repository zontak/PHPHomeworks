<!DOCTYPE html>
<html>
<head>
    <title>fiveth question</title>
    <script>
        var idCounter = 0;
            function addProgLang() {
                var myDiv = document.createElement("div");
                myDiv.setAttribute("id", "inputBox" + idCounter);
                idCounter++;
                myDiv.innerHTML = '<input type="text" name="progLanguages[]" id="prog-langs" required="true"/>' +
                    '<select name="level[]" id="level" required="true">' +
                    '<option value="Beginner">Beginner</option>' +
                    '<option value="Programmer">Programmer</option>' +
                    '<option value="Ninja">Ninja</option>' +
                    '</select>' +
                    '<br/>';
                document.getElementById("parent-prog-lang").appendChild(myDiv);
            }
            function removeProgLang() {
                var getChild = document.getElementById("parent-prog-lang").lastChild;
                if(getChild.id != "inputBox0") {
                    document.getElementById("parent-prog-lang").removeChild(getChild);
                }
            }
            var idLangCounter = 0;
            function addSpeakingLang() {
                var langParent = document.getElementById("speaking-lang-parent");
                var newDiv = document.createElement("div");
                newDiv.setAttribute("id", "lang" + idLangCounter);
                idLangCounter++;
                newDiv.innerHTML = '<input type="text" id="lang" name="language-text[]" required="true"/>' +
                    '<select name="comprehension[]" id="comprehension" required="true">'+
                    '<option value="default" disabled selected>-Comprehension-</option>' +
                    '<option value="beginner">beginner</option>' +
                    '<option value="intermediate">intermediate</option>' +
                    '<option value="advanced">advanced</option>' +
                    '</select>' +
                    '<select name="reading[]" id="reading" required="true">' +
                    '<option value="default" disabled selected>-Reading-</option>' +
                    '<option value="beginner">beginner</option>' +
                    '<option value="intermediate">intermediate</option>' +
                    '<option value="advanced">advanced</option>' +
                    '</select>' +
                    '<select name="writing[]" id="writing">' +
                    '<option value="default" disabled selected required="true">-Writing-</option>' +
                    '<option value="beginner">beginner</option>' +
                    '<option value="intermediate">intermediate</option>'+
                    '<option value="advanced">advanced</option>'+
                    '</select>'+
                    '<br/>';
                langParent.appendChild(newDiv);
            }
            function removeSpeakingLang() {
                var lastElement = document.getElementById('speaking-lang-parent').lastChild;
                if(lastElement.id != "lang0") {
                    document.getElementById("speaking-lang-parent").removeChild(lastElement);
                }
        }
    </script>
</head>
<body>
<form method="post" action="">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="firstName" placeholder="First Name" required="true" pattern="[A-Za-z]{2,20}" title="Between 2-20 A-z"><br>
        <input type="text" name="lastName" placeholder="Last Name" required="true" pattern="[A-Za-z]{2,20}" title="Between 2-20 A-z"><br>
        <input type="email" placeholder="Email" name="email" required="true" pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"> <br>
        <input type="text" name="phoneNumber" placeholder="Phone Number" required="true" pattern="^\(?([0-9]{3})\)?[-./ ]?([0-9]{3})[-./ ]?([0-9]{4})$" title="Between 2-20 0-9, - + "><br>
        <label for="female">Female</label>
        <input type="radio" name="sex" value="female" id="female"> <br />
        <label for="male">Male</label>
        <input type="radio" name="sex" value="male" id="male"> <br />
        <label for="birthDate">Birth Date</label> <br />
        <input type="date" name="birthDate" id="birthDate" required="true"> <br />
        <label for="nationaly">Nationaly</label> <br />
        <select id="nationaly" name="nationaly" required="true">
            <option value="volvo" selected>Bulgaria</option>
            <option value="saab">India</option>
            <option value="mercedes">USA</option>
            <option value="audi">RUSSIA</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Position</legend>
        <label for="companyName">Company Name</label>
        <input type="text" id="companyName" name="companyName" pattern="[A-Za-z]{2,20}" title="Between 2-20 A-z"> <br />
        <label for="from">From</label>
        <input type="date" value="dd/mm/yyyy" id="from" name="from"> <br />
        <label for="to">To</label>
        <input type="text" value="dd/mm/yyyy" id="to" name="to"> <br />
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <label for="languages">Programming languages</label> <br />
        <div id="parent-prog-lang"> </div>
        <script>addProgLang();</script>
        <input type="button" name="remove-item" id="remove" value="Remove Language" onclick="removeProgLang()"/>
        <input type="button" name="progLang[]" id="add" value="Add Language" onclick="addProgLang()"/>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <label for="langtwo">Languages</label>
        <div id="speaking-lang-parent">
        </div>
        <script> addSpeakingLang();</script>
        <input type="button" id="remove-lang" name="remove-lang" value="Remove Language" onclick="removeSpeakingLang()"/>
        <input type="button" id="remove-lang" name="remove-lang" value="Add Language" onclick="addSpeakingLang()"/><br/>
        <label>Driver`s License</label> <br />
        <label for="B">B</label>
        <input id="B" type="checkbox" name="aDriver">
        <label for="A">A</label>
        <input id="A" type="checkbox" name="bDriver">
        <label for="C">C</label>
        <input id="C" type="checkbox" name="cDriver">
    </fieldset>
    <input type="submit" name="submit" value="CV GENERATE">
</form>

<?php
    $a = "";
    $b = "";
    $c = "";
    if(isset($_POST['aDriver'])) $a = 'A';
    if(isset($_POST['bDriver'])) $a = 'B';
    if(isset($_POST['cDriver'])) $a = 'C';

    if(isset($_POST['submit'])) {
        $reading = $_POST['reading'];
        $lang = $_POST['language-text'];
        $writing = $_POST['writing'];
        $comprehension = $_POST['comprehension'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $sex = $_POST['sex'];
        $birthDate = $_POST['birthDate'];
        $nationality = $_POST['nationaly'];
        $companyName = $_POST['companyName'];
        $from = $_POST['from'];
        $to = $_POST['to'];
?>
    <table border="1">
        <th colspan="2">Personal Information</th>
        <tr>
            <td>First Name</td>
            <td><?php echo $firstName ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $lastName ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?php echo $phoneNumber ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $sex ?></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td><?php echo $birthDate ?></td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td><?php echo $nationality ?></td>
        </tr>
        </table> <br/>
        <table border="1">
            <th colspan="2">Last Work Position</th>
            <tr>
                <td>Company Name</td>
                <td><?php echo $companyName ?></td>
            </tr>
            <tr>
                <td>From</td>
                <td><?php echo $from ?></td>
            </tr>
            <tr>
                <td>To</td>
                <td><?php echo $to ?></td>
            </tr>
        </table> <br/>
    <table border="1">
        <th colspan="3">Computer Skills</th>
        <tr>
            <td rowspan="3">Programming Languages</td>
            <td>
                <table border="1">
                    <tr>
                        <th>Language</th>

                        <th>Skill Level</th>
                    </tr>
                    <?php
                     for($i = 0; $i < count($_POST['level']); $i++){
                         echo "<tr>";
                         echo "<td>" .$_POST['progLanguages'][$i] . "</td>";
                         echo "<td>" .$_POST['level'][$i] . "</td>";
                         echo "</tr>";
                     }
                    ?>
                </table>
            </td>
        </tr>
    </table> <br/>
    <table border="1">
        <th colspan="5">Other Skills</th>
        <tr>
            <td>Languages</td>
            <td>
                <table border="1">
                    <tr>
                        <th>Language</th>
                        <th>Comprehension</th>
                        <th>Reading</th>
                        <th>Writing</th>
                    </tr>
                        <?php
                        for($i = 0; $i < count($comprehension) ;$i++) {
                            echo '<tr>';
                            echo '<td>' . $lang[$i] . '</td>';
                            echo '<td>' . $comprehension[$i] . '</td>';
                            echo '<td>' . $reading[$i] . '</td>';
                            echo '<td>' . $writing[$i] . '</td>';
                        }
                        ?>
                </table>
            </td>
        </tr>
        <tr>
            <td>Driver`s License</td>
            <td>
                <?php echo ($a . $b . $c); ?>
            </td>
        </tr>
    </table>
<?php
    }
?>
</body>
</html>

