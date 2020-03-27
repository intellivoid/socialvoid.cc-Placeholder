<?php
    use DynamicalWeb\HTML;
    use DynamicalWeb\Javascript;

?>
<!doctype html>
<html lang="en">

    <head>
        <?PHP HTML::importSection('header'); ?>
        <title><?PHP HTML::print(TEXT_PAGE_TITLE) ?></title>
    </head>

    <body>
        <canvas id="canvas" style="position : absolute; top : 0px; left : 0px;"></canvas>
        <?PHP HTML::importSection('navigation'); ?>
        <div class="terminal">
            <span class="dollar"></span> <?PHP HTML::print(TEXT_P1); ?>
            <br/>
            <span class="dollar"></span> <?PHP HTML::print(TEXT_P2); ?>
            <br/>
            <span class="dollar"></span> <?PHP HTML::print(TEXT_P3); ?>
            <br/>
            <span class="dollar"></span> <?PHP HTML::print(TEXT_P4); ?>
            <br/>
            <br/>
            <span class="dollar"></span> <?PHP HTML::print(TEXT_P5) ?>
        </div>
        <?PHP HTML::importSection('audio'); ?>
        <div class="footer">
            Copyright (C) Intellivoid Technologies 2017-<?PHP HTML::print(date('Y')); ?>
            <br/>
            White Fields by Mell-ø
        </div>
    </body>
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <?PHP Javascript::importScript('app'); ?>
    <?PHP Javascript::importScript('rain'); ?>
</html>