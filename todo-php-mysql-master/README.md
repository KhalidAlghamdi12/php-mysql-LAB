Added function : 

<pre>
<?php


function MarkAllDone()
{


    $mark_all_done_query = "UPDATE tasks SET done = 1 WHERE done = 0;";
    if ($GLOBALS['conn']->query($mark_all_done_query)) {
        echo "All tasks marked as done.";


    } else {
        echo "Error updating tasks: " . $GLOBALS['conn']->error;
    }
}
</pre>

this function makes all the to do list marked as done 


outputs:


-Running the app


![image](https://github.com/KhalidAlghamdi12/php-mysql-LAB/assets/109826424/156c9b1d-2dad-41b3-86ad-81276fff8ce4)



-Adding TODOs


![image](https://github.com/KhalidAlghamdi12/php-mysql-LAB/assets/109826424/e0e73c77-158b-4f7d-b984-243f453c1cdb)



-Mark all of tasks as done 


![image](https://github.com/KhalidAlghamdi12/php-mysql-LAB/assets/109826424/1c724e9f-4cd4-43d3-b752-4b136d05f5c5)



