<!DOCTYPE HTML PUBLIC
"-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html401/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;
              charset=iso-8859-1" />
        <title>Artists</title>
    </head>
    <body> 
        <h1>Artists</h1>

        <table>
            <tr>
                <th>artist_id</th>
                <th>artist_name</th>
            </tr>
            <?php
            // Connect to the MySQL server
            if (!($connection = @ mysql_connect("localhost", "root",
                    "")))
                die("Cannot connect");

            if (!(mysql_select_db("music", $connection)))
                die("Couldn't select music database");

            // Run the query on the connection
            if (!($result = @ mysql_query("SELECT * FROM artist", $connection)))
                die("Couldn't run query");

            // Until there are no rows in the result set, fetch a row into
            // the $row array and ...
            while ($row = @ mysql_fetch_array($result, MYSQL_ASSOC))
            {
                // Start a table row
                print "<tr>\n";

                // ... and print out each of the columns
                foreach($row as $data)
                    print "\t<td>{$data}</td>\n";

                // Finish the row
                print "</tr>\n";
            }
            ?>
        </table>
    </body>
</html>
