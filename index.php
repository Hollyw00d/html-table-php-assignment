<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Table PHP Assignment</title>
    <style type="text/css">
        .highlight {
            background: #000;
            color: #fff;
        }

    </style>
</head>
<body>

    <h1>HTML Table PHP Assignment</h1>

    <table>
        <thead>
            <tr>
                <th>User #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full Name</th>
                <th>Full Name in upper case</th>
                <th>Length of full name</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $users = array(
            array('first_name' => 'Michael', 'last_name' => 'Choi'),
            array('first_name' => 'John', 'last_name' => 'Supsupin'),
            array('first_name' => 'Mark', 'last_name' => 'Guillen'),
            array('first_name' => 'KB', 'last_name' => 'Tonel'),


            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth'),
            array('first_name' => 'Sam', 'last_name' => 'Worth')

        );


        function add_user($add_user)
        {

            $counter = 1;
            $full_name = '';

            foreach($add_user as $user)
            {

                if($counter % 5 === 0)
                {
                    echo '<tr class="highlight">';
                }
                else
                {
                    echo '<tr>';
                }
                    echo '<td>' . $counter . '</td>';
                    $counter++;

                    foreach($user as $user_data)
                    {

                        echo '<td>' . $user_data . '</td>';
                        $full_name .= $user_data . ' ';

                    }
                    echo '<td>' . $full_name . '</td>';
                    echo '<td>' . strtoupper($full_name) . '</td>';
                    $full_name_length = strlen(trim($full_name, ' ')) - 1;
                    echo '<td>' . $full_name_length . '</td>';

                    $full_name = '';

                echo '</tr>';

            }

        }

        add_user($users);

        ?>


        </tbody>


    </table>


</body>
</html>