<?php
// Text Feilds that correspond to the html form
$author    = @$_POST['author']
$email     = @$_POST['email']
$title     = @$_POST['title'];
$date      = @$_POST['date'];
$excerpt   = @$_POST['excerpt'];
$tags      = @$_POST['tags'];
$comment   = @$_POST['comment'];

// File and Path variables

$path = "/srv/http/archwomen.org/test/submit/drafts/";
$filename = "draft.md";

// Merge all the variables with text in a single variable.
$f_data= '
author: '.$author.'
email: '.$email.'
title: '.$title.'
date: '.$date.'
excerpt: '.$excerpt.'
tags: '.$tags.'

'.$comment.'
';

while (file_exists($path.$filename))
    {
        $fnum++;
        $filename = "draft".$fnum.".md";
    }
$handle = fopen($path.$filename, "w") or die("Couldn't open 
$filename for writing!");
fwrite($handle,$f_data) or die("Couldn't write values to 
file!");
fclose($handle);

echo 'Thank you for submitting a post to Arch Women!'
?>
