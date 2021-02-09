<?php

class DatabaseHelper
{
    // Since the connection details are constant, define them as const
    // We can refer to constants like e.g. DatabaseHelper::username
    const username = 'xxx'; // use a + your matriculation number
    const password = 'xxx'; // use your oracle db password
    const con_string = 'xxx';  //on almighty "lab" is sufficient

    // Since we need only one connection object, it can be stored in a member variable.
    // $conn is set in the constructor.
    protected $conn;

    // Create connection in the constructor
    public function __construct()
    {
        try {
            // Create connection with the command oci_connect(String(username), String(password), String(connection_string))
            // The @ sign avoids the output of warnings
            // It could be helpful to use the function without the @ symbol during developing process
            $this->conn = @oci_connect(
                DatabaseHelper::username,
                DatabaseHelper::password,
                DatabaseHelper::con_string
            );

            //check if the connection object is != null
            if (!$this->conn) {
                // die(String(message)): stop PHP script and output message:
                die("DB error: Connection can't be established!");
            }

        } catch (Exception $e) {
            die("DB error: {$e->getMessage()}");
        }
    }

    // Used to clean up
    public function __destruct()
    {
        // clean up
        @oci_close($this->conn);
    }

    // This function creates and executes a SQL select statement and returns an array as the result
    // 2-dimensional array: the result array contains nested arrays (each contains the data of a single row)
    public function SELECTFROMRECIPEWHERE($RID, $RTITLE, $RDESCRIPTION, $RMONTH)
    {
        // Define the sql statement string
        // Notice that the parameters $person_id, $surname, $name in the 'WHERE' clause
        $sql = "SELECT * FROM RECIPE
            WHERE RID LIKE '%{$RID}%'
              AND UPPER(RTITLE) LIKE UPPER('%{$RTITLE}%')
              AND UPPER(RDESCRIPTION) LIKE UPPER('%{$RDESCRIPTION}%')
              AND UPPER(RMONTH) LIKE UPPER('%{$RMONTH}%')
            ORDER BY RID ASC";

        // oci_parse(...) prepares the Oracle statement for execution
        // notice the reference to the class variable $this->conn (set in the constructor)
        $statement = @oci_parse($this->conn, $sql);

        // Executes the statement
        @oci_execute($statement);

        // Fetches multiple rows from a query into a two-dimensional array
        // Parameters of oci_fetch_all:
        //   $statement: must be executed before
        //   $res: will hold the result after the execution of oci_fetch_all
        //   $skip: it's null because we don't need to skip rows
        //   $maxrows: it's null because we want to fetch all rows
        //   $flag: defines how the result is structured: 'by rows' or 'by columns'
        //      OCI_FETCHSTATEMENT_BY_ROW (The outer array will contain one sub-array per query row)
        //      OCI_FETCHSTATEMENT_BY_COLUMN (The outer array will contain one sub-array per query column. This is the default.)
        @oci_fetch_all($statement, $res, 0, 0, OCI_FETCHSTATEMENT_BY_ROW + OCI_RETURN_NULLS);

        //clean up;
        @oci_free_statement($statement);

        return $res;
    }
	

    // This function creates and executes a SQL insert statement and returns true or false
    public function insertIntoRecipe($RTITLE, $RDESCRIPTION, $RMONTH)
    {
        $sql = "INSERT INTO RECIPE (RTITLE, RDESCRIPTION, RMONTH) VALUES ('{$RTITLE}', '{$RDESCRIPTION}', '{$RMONTH}')";

        $statement = @oci_parse($this->conn, $sql);
        $success = @oci_execute($statement) && @oci_commit($this->conn);
        @oci_free_statement($statement);
        return $success;
    }

    // Using a Procedure
    // This function uses a SQL procedure to delete a person and returns an errorcode (&errorcode == 1 : OK)
    public function deleteRecipe($RID)
    {
        // It is not necessary to assign the output variable,
        // but to be sure that the $errorcode differs after the execution of our procedure we do it anyway
        $errorcode = 0;

        // In our case the procedure P_DELETE_PERSON takes two parameters:
        //  1. person_id (IN parameter)
        //  2. error_code (OUT parameter)

        // The SQL string
        $sql = 'BEGIN RDELETERECIPE(:RID, :errorcode); END;';
        $statement = @oci_parse($this->conn, $sql);

        //  Bind the parameters
        @oci_bind_by_name($statement, ':RID', $RID);
        @oci_bind_by_name($statement, ':errorcode', $errorcode);

        // Execute Statement
        @oci_execute($statement);

        //Note: Since we execute COMMIT in our procedure, we don't need to commit it here.
        //@oci_commit($statement); //not necessary

        //Clean Up
        @oci_free_statement($statement);

        //$errorcode == 1 => success
        //$errorcode != 1 => Oracle SQL related errorcode;
        return $errorcode;
    }
    
    public function updaterecipe($RID, $RTITLE, $RDESCRIPTION, $RMONTH) {
       
        if ($RTITLE) { 
       
            $update = "UPDATE RECIPE SET RTITLE = '{$RTITLE}' WHERE RID='{$RID}'";	
    
            $stmt = @oci_parse($this->conn, $update);
            $result = @oci_execute($stmt) && @oci_commit($this->conn);  
            @oci_free_statement($stmt);
            if (!$result) {
                return 0;  
            }       
        }

        if ($RDESCRIPTION) { 

            $update = "UPDATE RECIPE SET RDESCRIPTION = '{$RDESCRIPTION}' WHERE RID='{$RID}'";	    
            $stmt = @oci_parse($this->conn, $update);
            $result = @oci_execute($stmt) && @oci_commit($this->conn);  
            @oci_free_statement($stmt);
            if (!$result) {
                return 0; 
            }       
        }


        if ($RMONTH) { 

            $update = "UPDATE RECIPE SET RMONTH = '{$RMONTH}' WHERE RID='{$RID}'";	                    
            $stmt = @oci_parse($this->conn, $update);
            $result = @oci_execute($stmt) && @oci_commit($this->conn);  
            @oci_free_statement($stmt);
            if (!$result) {
                return 0;  
            }      
        }
          return 1;
    }

    
    // This function creates and executes a SQL select statement and returns an array as the result
    // 2-dimensional array: the result array contains nested arrays (each contains the data of a single row)
    public function SELECTFROMINGREDIENTSWHERE($IINGREDIENTNAME, $IINGREDIENTTYPE, $IPREP) {
        // Define the sql statement string
        // Notice that the parameters $person_id, $surname, $name in the 'WHERE' clause
        $sql = "SELECT * FROM INGREDIENT
            WHERE IINGREDIENTNAME LIKE '%{$IINGREDIENTNAME}%'
              AND UPPER(IINGREDIENTTYPE) LIKE UPPER('%{$IINGREDIENTTYPE}%')
              AND UPPER(IPREP) LIKE UPPER('%{$IPREP}%')
            ORDER BY IINGREDIENTNAME ASC";

        // oci_parse(...) prepares the Oracle statement for execution
        // notice the reference to the class variable $this->conn (set in the constructor)
        $statement = @oci_parse($this->conn, $sql);

        // Executes the statement
        @oci_execute($statement);

        // Fetches multiple rows from a query into a two-dimensional array
        // Parameters of oci_fetch_all:
        //   $statement: must be executed before
        //   $res: will hold the result after the execution of oci_fetch_all
        //   $skip: it's null because we don't need to skip rows
        //   $maxrows: it's null because we want to fetch all rows
        //   $flag: defines how the result is structured: 'by rows' or 'by columns'
        //      OCI_FETCHSTATEMENT_BY_ROW (The outer array will contain one sub-array per query row)
        //      OCI_FETCHSTATEMENT_BY_COLUMN (The outer array will contain one sub-array per query column. This is the default.)
        @oci_fetch_all($statement, $res, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);

        //clean up;
        @oci_free_statement($statement);

        return $res;
        
    }
    
    // This function creates and executes a SQL insert statement and returns true or false
    public function insertIntoIngredients($IINGREDIENTNAME, $IINGREDIENTTYPE, $IPREP)
    {
        $sql = "INSERT INTO INGREDIENT (IINGREDIENTNAME, IINGREDIENTTYPE, IPREP) VALUES ('{$IINGREDIENTNAME}', '{$IINGREDIENTTYPE}', '{$IPREP}')";

        $statement = @oci_parse($this->conn, $sql);
        $success = @oci_execute($statement) && @oci_commit($this->conn);
        @oci_free_statement($statement);
        return $success;
    }


    
    // This function creates and executes a SQL select statement and returns an array as the result
    // 2-dimensional array: the result array contains nested arrays (each contains the data of a single row)
    public function selectFromHasWhere($RID, $IINGREDIENTNAME, $INGAMOUNT, $INGUNIT)
    {
        // Define the sql statement string
        // Notice that the parameters $person_id, $surname, $name in the 'WHERE' clause
        $sql = "SELECT * FROM HAS 
            WHERE RID LIKE '%{$RID}%'
              AND upper(IINGREDIENTNAME) LIKE upper('%{$IINGREDIENTNAME}%')
              AND upper(INGAMOUNT) LIKE upper('%{$INGAMOUNT}%')
              AND upper(INGUNIT) LIKE upper('%{$INGUNIT}%')
            ORDER BY RID ASC";

        // oci_parse(...) prepares the Oracle statement for execution
        // notice the reference to the class variable $this->conn (set in the constructor)
        $statement = @oci_parse($this->conn, $sql);

        // Executes the statement
        @oci_execute($statement);

        // Fetches multiple rows from a query into a two-dimensional array
        // Parameters of oci_fetch_all:
        //   $statement: must be executed before
        //   $res: will hold the result after the execution of oci_fetch_all
        //   $skip: it's null because we don't need to skip rows
        //   $maxrows: it's null because we want to fetch all rows
        //   $flag: defines how the result is structured: 'by rows' or 'by columns'
        //      OCI_FETCHSTATEMENT_BY_ROW (The outer array will contain one sub-array per query row)
        //      OCI_FETCHSTATEMENT_BY_COLUMN (The outer array will contain one sub-array per query column. This is the default.)
        @oci_fetch_all($statement, $res, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);

        //clean up;
        @oci_free_statement($statement);

        return $res;
    }
    
     // This function creates and executes a SQL insert statement and returns true or false
    public function insertIntoHas($RID, $IINGREDIENTNAME, $INGAMOUNT, $INGUNIT)
    {
        $sql = "INSERT INTO HAS (RID, IINGREDIENTNAME, INGAMOUNT, INGUNIT) VALUES ('{$RID}', '{$IINGREDIENTNAME}', '{$INGAMOUNT}', '{$INGUNIT}')";

        $statement = @oci_parse($this->conn, $sql);
        $success = @oci_execute($statement) && @oci_commit($this->conn);
        @oci_free_statement($statement);
        return $success;
    }

   // This function creates and executes a SQL select statement and returns an array as the result
    // 2-dimensional array: the result array contains nested arrays (each contains the data of a single row)
    public function selectFromAyurvWhere($IINGREDIENTNAME, $AAYURVDIETACRONYM, $AAYURVPHILOSOPHY, $ADOSHA)
    {
        // Define the sql statement string
        // Notice that the parameters $person_id, $surname, $name in the 'WHERE' clause
        $sql = "SELECT * FROM AYURVEDIC 
            WHERE IINGREDIENTNAME LIKE '%{$IINGREDIENTNAME}%'
              AND upper(AAYURVDIETACRONYM) LIKE upper('%{$AAYURVDIETACRONYM}%')
              AND upper(AAYURVPHILOSOPHY) LIKE upper('%{$AAYURVPHILOSOPHY}%')
              AND upper(ADOSHA) LIKE upper('%{$ADOSHA}%')
            ORDER BY IINGREDIENTNAME ASC";

        // oci_parse(...) prepares the Oracle statement for execution
        // notice the reference to the class variable $this->conn (set in the constructor)
        $statement = @oci_parse($this->conn, $sql);

        // Executes the statement
        @oci_execute($statement);

        // Fetches multiple rows from a query into a two-dimensional array
        // Parameters of oci_fetch_all:
        //   $statement: must be executed before
        //   $res: will hold the result after the execution of oci_fetch_all
        //   $skip: it's null because we don't need to skip rows
        //   $maxrows: it's null because we want to fetch all rows
        //   $flag: defines how the result is structured: 'by rows' or 'by columns'
        //      OCI_FETCHSTATEMENT_BY_ROW (The outer array will contain one sub-array per query row)
        //      OCI_FETCHSTATEMENT_BY_COLUMN (The outer array will contain one sub-array per query column. This is the default.)
        @oci_fetch_all($statement, $res, 0, 0, OCI_FETCHSTATEMENT_BY_ROW);

        //clean up;
        @oci_free_statement($statement);

        return $res;
    }

}
