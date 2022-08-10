<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\StationCreateModel;

class Station extends Component
{  
    public $Station_ID;
    public $Station_Name;
    public $Start_Date;
    public $End_Date;
    public $Latitude_deg;
    public $Latitude_min;
    public $Latitude_sec;
    public $Longitude_deg;
    public $Longitude_min;
    public $Longitude_sec;
    public $Description;
    public $Image;
    public $Country;

    public function rules() 
    {
        
        return [
            'Station_Name' => 'required',
            'Start_Date' => 'required',
            'End_Date' => 'required',
            'Latitude_deg' => 'required',
            'Latitude_min' => 'required',
            'Latitude_sec' => 'required',
            'Longitude_deg' => 'required',
            'Longitude_min' => 'required',
            'Longitude_sec' => 'required',
            'Description' => 'required',
            'Image' => 'required',
            'Country' => 'required',
        ];

    }

    public function updated($fields)

    {

        $this->validateOnly($fields);

    }

    public function saveStation() 
    {
        $validatedData = $this->validate();

        StationCreateModel::create($validatedData);
        session()->flash('message', 'Station Added Successfully!');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-model');
    }

    public function resetInput()
    {       
            $this->Station_Name = '';
            $this->Start_Date = '';
            $this->End_Date = '';
            $this->Latitude_deg = '';
            $this->Latitude_min = '';
            $this->Latitude_sec = '';
            $this->Longitude_deg = '';
            $this->Longitude_min = '';
            $this->Longitude_sec = '';
            $this->Description = '';
            $this->Image = '';
            $this->Country = '';
    }

    public function render()
    {
        return view('livewire.station');
    }
}
