<?php 

require_once "../model/customer.php";
require_once "../model/tac.php";

// Note: Adjust to specific file. this is sort of just an example.  the structure is more of less like this
function TACMatching() {

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