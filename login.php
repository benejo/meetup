<?php

/**
  * Login page implemented using interface.
  *
  * This code is intended for learning purpose and is not yet ready. Currently
  * as of this version only interfaces have been defined.
  *
  *
  * @author	Bene Joseph <bene.joseph@impelsys.com>
  * @version	1.0	
  * @todo	Class definition implementing interfaces and more.
  * @license	GPL, or GNU General Public License, version 3
  */




/**
  * This interface defines First Name and Last Name functions.
  */
interface nameInterface {

/**
  * Defining First name function. 
  */
  public function fname();

/**
  * Defining Last name function.
  */
  public function lname();
}


/**
  * This interface defines email functions.
  */
interface emailInterface {

/**
  * Defining email function.
  */
  public function email();
}


/**
  * This interface defines Phone number functions.
  */
interface phoneInterface {

/**
  * Defining phone function.
  */
  public function phone();
}



?>
