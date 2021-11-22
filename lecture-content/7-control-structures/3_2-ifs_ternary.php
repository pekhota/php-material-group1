<?php

/**
 * As of PHP 8.0.0, the throw keyword is an *expression* and may be used in any expression context.
 * In prior versions it was a *statement* and was required to be on its own line.
 */


/**
 * Ternary Operator
 *
 * @link https://www.php.net/manual/en/language.operators.comparison.php
 *
 * The expression (expr1) ? (expr2) : (expr3) evaluates to expr2 if expr1 evaluates to true,
 * and expr3 if expr1 evaluates to false.
 * It is possible to leave out the middle part of the ternary operator.
 * Expression expr1 ?: expr3 returns expr1 if expr1 evaluates to true, and expr3 otherwise.
 */
// (expr1) ? (expr2) : (expr3)


// Example usage for: Ternary Operator
//$action = (!empty($_POST['action'])) ? 'default' : throw new RuntimeException("action key is not found");
//var_dump($action);
// The above is identical to this if/else statement
//if (empty($_POST['action'])) {
//    $action = 'default';
//} else {
//    $action = $_POST['action'];
//}



//fn (argument_list) => expr
/**
 * https://www.php.net/manual/en/functions.arrow.php
 * @return mixed|string
 */
$fn1 = fn() => (!empty($_POST['action'])) ? 'default' : throw new RuntimeException("empty");
//var_dump($fn1());

/**
 * It is possible to leave out the middle part of the ternary operator.
 * Expression expr1 ?: expr3 returns expr1 if expr1 evaluates to true, and expr3 otherwise.
 **/

// expr1 ?: expr3
$fn2 = fn() => $_POST['action'] ?: throw new RuntimeException("not true");
//var_dump($fn2());

/**
 * Null Coalescing Operator
 *
 * Further exists the "??" (or null coalescing) operator.
 *
 * The expression (expr1) ?? (expr2) evaluates to expr2 if expr1 is null, and expr1 otherwise.
 * In particular, this operator does not emit a notice or warning if the left-hand side value does not exist,
 * just like isset(). This is especially useful on array keys.
 */

// Example usage for: Null Coalesce Operator
$fn3 = fn() => $_POST['action'] ?? throw new RuntimeException("Null key");
//var_dump($fn3());
// The above is identical to this if/else statement
// if (isset($_POST['action'])) {
//    $action = $_POST['action'];
//} else {
//    $action = 'default';
//}

//foreach (throw new RuntimeException(123) as $item) {
//
//}