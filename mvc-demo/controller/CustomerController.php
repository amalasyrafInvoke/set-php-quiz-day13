<?php 

require_once "../model/customer.php";
require_once "../model/tac.php";

function insertCustomerController() {

  $doc = new DomDocument;
  $fname = $doc -> getElementById('fname') -> value;

  $id = customerInsert($fname);

  if ($id) {

    $query = TACInsert($id);

    if ($query) {
      // proceed
    } else {
      // exception, error while insert TAC
    }
    header("../view/tac.php?id=$id");
  } else {
    // try catch - add exception error
  }
}