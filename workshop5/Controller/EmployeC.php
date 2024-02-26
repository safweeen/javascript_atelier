<?php

class EmployeC {

    function show($employe) {

        echo '
        <table border="1">
        <tr>
        <td>lastname</td>
        <td>firstname</td>
        <td>password</td>
        <td>email</td>
        <td>phone</td>
        <td>dob</td>
        
        </tr>
        <tr>
        <td>'. $employe->getLastName() .'</td>
        <td>'. $employe->getFirstName() .'</td>
        <td>'. $employe->getPassword() .'</td>
        <td>'. $employe->getEmail() .'</td>
        <td>'. $employe->getPhone() .'</td>
        <td>'. $employe->getdob() .'</td>
        </tr>
        </table>
        ';
    }
}



?>