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
