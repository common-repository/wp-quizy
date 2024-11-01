<?php
/*
Plugin Name: WP-Quiz
Plugin URI: http://quizz.pl
Description: Wtyczka, która pozwala tworzyć i dodawać do bloga quizy
Author: Tomasz Smykowski
Version: 1.0
Author URI: http://quizz.pl

Copyright 2009-2009 Tomasz Smykowski

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

include("quiz-options.php");

function wrzucQuiz($text)
{
    $string = $text;
    $pattern = '/\[\s*quiz\s*=\s*([0-9]*)\s*\]/i';
    $permalink = get_permalink();
    $replacement = "<center><iframe width=\"260px\" height=\"260px\" scrolling=\"no\" frameborder=\"no\" align=\"center\" src=\"http://www.quizz.pl/o.php?i=$1&t=$permalink\"></iframe></center>";
    echo preg_replace($pattern, $replacement, $string);
}

add_filter("the_content", "wrzucQuiz");

?>