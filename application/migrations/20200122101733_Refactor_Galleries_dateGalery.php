<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Refactor_Galleries_dateGalery extends CI_Migration {

    public function up()
    {
	    $fields = array(
		    'galleryDate' => array(
			    'name' => 'date',
			    'type' => 'date',
			    'null' => false,
		    ),
	    );
	    $this->dbforge->modify_column('Galleries', $fields);
    }

    public function down()
    {
	    $fields = array(
		    'date' => array(
			    'name' => 'galleryDate',
			    'type' => 'date',
			    'null' => false,
		    ),
	    );
	    $this->dbforge->modify_column('Galleries', $fields);
    }
}
