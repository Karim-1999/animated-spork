<!-- include database -->
<?php include('includes/database.php'); ?>

    <h1 class="mar">Contatti tramite form</h1>
    <div class="cont1" >


        <table>
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Messaggio</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `contact-data`";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row 
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["firstname"] . "</td>";
                    echo "<td>" . $row["lastname"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["message"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            mysqli_close($connect); /* mysqli */
            ?>
        </table>

    </div>

<?php include('includes/footer.php'); ?>