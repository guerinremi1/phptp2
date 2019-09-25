<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <lang="fr">
 <head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL;
};
start_page('titre');
function end_page()
{
    echo '</body>
                  </html>';
}
end_page();
?>
