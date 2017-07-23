<ul>
<?php 
    foreach ($categories as $category)
        {
?>
    <li><?php echo $category->name; ?>
<?php
    if(!empty($category->subs)) { 
        echo '<ul>';
        foreach ($category->subs as $sub)  {
            echo '<li>' . $sub->name . '</li>';
        }
        echo '</ul>';
    }
?>
</li>
<?php
}
?>
</ul>