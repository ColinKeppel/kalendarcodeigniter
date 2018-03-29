<?php

class verjaardag extends CI_Controller {


	public function index()
	{
	    $data['dataview'] = $this->home_model->read();
        $this->load->view('kalender', $data);
	}

	public function verjaardag_toevoegen()
	{
        $this->load->view('create_birthdays');
        if (!empty($_POST)){
            $person = $this->input->post('person');
            $day = $this->input->post('day');
            $month  = $this->input->post('month');
            $year = $this->input->post('year');
            if ($person && $day && $month && $year){
                $data = array(
                    'person' => $person,
                    'day' => $day,
                    'month' => $month,
                    'year' => $year
                );
            }
            //model word automatisch geladen in de autoloader(core/autoloader)
            $this->home_model->insert($data);
        }
	}

	public function verjaardag_verwijderen($id)
    {
	    //model hij word geautoload in de config
        $this->load->model('home_model');
        $this->home_model->delete($id);
        redirect("verjaardag/index");
    }

}
