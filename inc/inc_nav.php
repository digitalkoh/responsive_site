<nav role="navigation">
    <ul class="nav nav-justified">
        <li><a href="index">Home</a></li>
        <li class="<?php if ($_GET["section"] == "tab1")echo " active" ?>"><a href="?section=tab1">Tab One</a></li>
        <li class="<?php if ($_GET["section"] == "tab2")echo " active" ?>"><a href="?section=tab2&sm=1">Tab Two</a></li>
        <li class="<?php if ($_GET["section"] == "tab3")echo " active" ?>"><a href="?section=tab3&sm=1">Tab Three</a></li>
        <li class="<?php if ($_GET["section"] == "tab4")echo " active" ?>"><a href="?section=tab4&sm=1">Tab Four</a></li>
        <li class="<?php if ($_GET["section"] == "tab5")echo " active" ?>"><a href="?section=tab5">Tab Five</a></li>
    </ul>
</nav>

<?php
    // FOR DEMO PUPOSE ONLY
    if (isset($_GET["sm"]) && $_GET["sm"] == 1){
?>

    <div id="subnav">
        <?php
            if (isset($_GET["section"]) && $_GET["section"] == "tab1"){
        ?>
            <ul id="sm-for-t1" data-tabindex=2>
                <li><a href="#">T1 Submenu One</a></li>
                <li><a href="#">T1 Submenu Two</a></li>
                <li><a href="#">T1 Submenu Three</a></li>
                <li><a href="#">T1 Submenu Four</a></li>
            </ul>
        <?php
            }
        ?>
        
        <?php
            if (isset($_GET["section"]) && $_GET["section"] == "tab2"){
        ?>
            <ul id="sm-for-t2" data-tabindex=3>
                <li><a href="?section=tab2&page=testpage_1&sm=1">T2 Submenu One</a></li>
                <li><a href="?section=tab2&page=testpage_2&sm=1">T2 Submenu Two</a></li>
                <li><a href="?section=tab2&page=testpage_3&sm=1">T2 Submenu Three</a></li>
                <li><a href="?section=tab2&page=testpage_4&sm=1">T2 Submenu Four</a></li>
            </ul>
        <?php
            }
        ?>
        
        <?php
            if (isset($_GET["section"]) && $_GET["section"] == "tab3"){
        ?>
            <ul id="sm-for-t3" data-tabindex=4>
                <li><a href="?section=tab3&page=testpage_1&sm=1">T3 Submenu One</a></li>
                <li><a href="?section=tab3&page=testpage_2&sm=1">T3 Submenu Two</a></li>
                <li><a href="?section=tab3&page=testpage_3&sm=1">T3 Submenu Three</a></li>
                <li><a href="?section=tab3&page=testpage_4&sm=1">T3 Submenu Four</a></li>
            </ul>
        <?php
            }
        ?>
        
        <?php
            if (isset($_GET["section"]) && $_GET["section"] == "tab4"){
        ?>
            <ul id="sm-for-t4" data-tabindex=5>
                <li><a href="?section=tab4&page=testpage_1&sm=1">T4 Submenu One</a></li>
                <li><a href="?section=tab4&page=testpage_2&sm=1">T4 Submenu Two</a></li>
                <li><a href="?section=tab4&page=testpage_3&sm=1">T4 Submenu Three</a></li>
                <li><a href="?section=tab4&page=testpage_4&sm=1">T4 Submenu Four</a></li>
            </ul>
        <?php
            }
        ?>
        
        <?php
            if (isset($_GET["section"]) && $_GET["section"] == "tab5"){
        ?>
            <ul id="sm-for-t5" data-tabindex=6>
                <li><a href="#">T5 Submenu One</a></li>
                <li><a href="#">T5 Submenu Two</a></li>
                <li><a href="#">T5 Submenu Three</a></li>
                <li><a href="#">T5 Submenu Four</a></li>
            </ul>
        <?php
            }
        ?>
    </div>

<?php
    }
?>
